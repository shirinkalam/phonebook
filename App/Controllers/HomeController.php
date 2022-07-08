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



        $data =[
            'contacts' => $this->contactModel->getAll()
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