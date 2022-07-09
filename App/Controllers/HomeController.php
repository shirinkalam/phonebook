<?php
namespace App\Controllers;
use Faker\Provider;
use App\Models\Contact;


class HomeController
{
    private $contactModel;

    public function __construct(){
    
        $this->contactModel = new Contact();
        
    }

    public function index()
    {
        global $request;

        $where = ['ORDER'=>["id" => "DESC"]];
        
        $search_keyword = $request->input('s');
        if(!is_null($search_keyword)){

            $where['OR'] =[
                    "name[~]" => $search_keyword,
                    "mobile[~]" => $search_keyword,
                    "email[~]" => $search_keyword
            ];
        }

        $contacts =$this->contactModel->get('*',$where);

        $data =[
            'contacts' => $contacts,
            'search_keyword' => $search_keyword

        ];
        view('home.index',$data);
    }
}

        // $faker = \Faker\Factory::create();

        // for($i=0 ; $i<1000;$i++){
        //     $this->contactModel->create([
        //         'name' =>$faker->name(),
        //         'email' =>$faker->email(),
        //         'mobile' =>$faker->phoneNumber()
        //     ]);
        // }