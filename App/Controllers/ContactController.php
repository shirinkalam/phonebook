<?php
namespace App\Controllers;
use App\Models\Contact;
use App\Utilities\Validation;


class ContactController
{
    private $contactModel;
    public function __construct(){
        $this->contactModel = new Contact();
    }

    public function add(){
        global $request; 
        $data['alreadyExists'] = false;
        #check if contact number aleready exists
        $count = $this->contactModel->count(['mobile' => $request->input('mobile')]);
        
        if($count){

            $data['alreadyExists'] = true;
            view_die('contact.add-result',$data);
        }

            if(!Validation::is_valid_email($request->input('email'))){
                $data=['success' => false , 'message' => 'Invalid Email Address'];
                view_die('contact.add-result',$data);
            }
            $contact_id = $this->contactModel->create([
                'mobile' => $request->input('mobile'),
                'email' => $request->input('email'),
                'name' => $request->input('name')
            ]);
            $data['contact_id']=$contact_id;
            $data['success'] = true ;
            $data['message'] = "Contact With ID $contact_id Created Succesfuly !" ;
            
            view('contact.add-result',$data);
    }

    public function delete(){
        global $request;
        $id=$request->get_route_params('id');

        $data['deleted_count'] = $this->contactModel->delete(['id'=>$id]);
        view('contact.delete-result',$data);
    }
}
