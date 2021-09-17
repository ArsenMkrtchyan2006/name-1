<?php

namespace App\Controller;


use App\Entity\Artic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\ArticType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ArticController extends AbstractController
{
    /**
     * @Route("/artic", name="artic")
     */



    public function index(): Response
    {

        /**
         *array foreach switch
         */
//        $namech=[
//            [
//                "city" => 'London',
//                "country"=> 'German',
//            ],
//            [
//                "city" => 'London',
//                "country"=> 'German',
//            ],
//            [
//                "city" => 'London',
//                "country"=> 'German',
//                ]
//        ];
//$country = 'Armenia';
//$capital = null;
//
//
//        foreach ($namech as $key => $value) {
//            switch ($value['country']){
//                case $country:
//                    $capital = $value['city'];
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        echo $capital;


//        $sex = 'male';
//        $names = null;
//        $persons=[
//            [
//                "sex" => 'male',
//                "firstName"=> 'Arsen',
//                "lastName"=> 'Mkrtchyan',
//                "birthday"=> new \DateTime('2006-11-17'),
//            ],
//            [
//                "sex" => 'male',
//                "firstName"=> 'Armen',
//                "lastName"=> 'Mkrtchyan',
//                "birthday"=> new \DateTime('1972-08-17'),
//            ],
//            [
//                "sex" => 'female',
//                "firstName"=> 'Gayane',
//                "lastName"=> 'Mkrtchyan',
//                "birthday"=> new \DateTime('2009-01-17'),
//            ],[
//                "sex" => 'female',
//                "firstName"=> 'Warduhi',
//                "lastName"=> 'Pashoyan',
//                "birthday"=> new \DateTime('2009-01-17'),
//            ]
//        ];
//        foreach ($persons as $key => $value) {
//            switch ($value["sex"]){
//                case $sex:
//                    $names[] = $value['firstName'].' '.$value['lastName'].''.$value['birthday'];
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        print_r($names) ;
//
//        $result = [];

//        $continent= 'Europa';
//        $test = null;
//        $countries=[
//            [
//                "country" => 'England',
//                "city"=> 'London',
//                "continent"=> 'Europa',
//
//            ],
//            [
//                "country" => 'France',
//                "city"=> 'Paris',
//                "continent"=> 'Europa',
//            ],
//            [
//                "country" => 'Japan',
//                "city"=> 'Tokyo',
//                "continent"=> 'Asia',
//            ],[
//                "country" => 'China',
//                "city"=> 'Pekin',
//                "continent"=> 'Asia',
//            ]
//        ];
//        foreach ($countries as $key => $value) {
//            switch ($value["continent"]){
//                case $continent:
//                    $test[] = 'Country: '.$value['country'].' | '.'City: '.$value['city'].'<br>';
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        print_r($test) ;

//        $city= 'Erevan';
//        $test1 = [
//            [
//                "street" => 'Burnazyan',
//                "city"=> 'Erevan',
//                "number"=> '117',
//
//            ],
//            [
//                "street" => 'Burnazyan',
//                "city"=> 'Erevan',
//                "number"=> '51',
//            ],
//            [
//                "street" => 'Knunyanc',
//                "city"=> 'Kirovakan',
//                "number"=> '141',
//            ],[
//                "street" => 'Burnazyan',
//                "city"=> 'Kirovakan',
//                "number"=> '7',
//            ]
//        ];
//        foreach ($test1 as $key => $value) {
//            switch ($value["city"]){
//                case $city:
//                    $testbe[] = 'City: '.$value['city'].' | '.'Number: '.$value['number'].'<br>';
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        print_r($testbe) ;

 $test2 = [
  ["name" => 'Armen',
      "town" => 'Erevan',
      "age" => '38',

  ],[
         "name" => 'Artak',
         "town" => 'Ararat',
         "age" => '14',
     ],[
         "name" => 'Narek',
         "town" => 'Gyumri',
         "age" => '35',
     ],[
         "name" => 'Arsen',
         "town" => 'Kirovakan',
         "age" => '14',
     ],
 ];
       $age = '14';
       foreach ($test2 as $key => $value){
        switch ($value["age"]){
            case $age:
                $test5[] = 'name: ' .$value['name'].':'.' || '.'age: '.$value['age'].':'.' <br> ';
        }
       }
       print_r($test5);
       /**
         *foreach one of several
         */


//        $x=[
//            "first" =>  [
//                "country" => 'England',
//                "city"=> 'London',
//            ],[
//                "country" => 'Germany',
//                "city"=> 'Berlin',
//            ],[
//                "country" => 'France',
//                "city"=> 'Paris',
//            ]
//        ];
//
//        $country = "Germany";
//        $capital = null;
//
//        foreach ($x as $key => $value) {
//            switch ($x['first']['country'] = $country){
//                case "country":
//                    $x[$key] = 'England' ;
//
//                    break;
//                default:
//
//                    break;
//            }
//        }
//
////
//
//        $three=[
//           "first"=>"go home"
//            , "second"=>"go school"
//        ];
//
//
//
//        foreach ($three as $key => $value) {
//            switch ($key){
//                case "second":
//                    $three[$key] = 'go out from school ';
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        echo ($three["second"]);
//        $four=[
//            "time"=>"12:30",
//            "mounth"=>"2"
//        ];
//
//
//
//        foreach ($four as $key => $value) {
//            switch ($key){
//                case "mounth":
//                    $four[$key] = '12 ';
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        echo ($four["mounth"]);
//
//        $five=[
//            "ocean"=>"black",
//            "people"=>"black"
//        ];
//
//
//
//        foreach ($five as $key => $value) {
//            switch ($key){
//                case "ocean":
//                    $five[$key] = 'blue ';
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        echo ($five["ocean"]);





//        $people = array( 'first'=>
//            array('name' => 'Kalle', 'salt' => 856412),
//            'second'=>array('name' => 'Pierre', 'salt' => 215863)
//        );
//       echo ($people["second"]["name"]);



        //      foreach ($x as $key => $value ) {
//        if($key == "1")
//          echo "<p>$value</p>";
//      }
//
//
//

//
//
//       $array3 = [
//         "1" => [
//           "2"=> ["text" => "text1","description" => "description1"]
//         ],
//         "3"=>["text" => "text2","description" => "description2"]
//
//       ];
//echo ($array3["1"]["2"]["text"]);
//
//        $array4 = [
//            "1" => [
//                "2"=> [
//                    "4"=> ["norutyun" => "norutyun1","ton" => "barzr"],
//                    "norutyun" => "norutyun1","ton" => "cacr"]
//            ],
//            "3"=>["norutyun" => "norutyun2","ton" => "mijin"]
//
//        ];
//        echo ($array4["1"]["2"]["4"]["norutyun"]);
//
//        $array5 = [
//            "1" => [
//                "2"=> [
//                    "4"=> [
//                        "5"=> ["tesanyut1" => "tesanyut1","texe" => "texe1"],
//                        "norutyun" => "norutyun1","description" => "description1"],
//                    "dproc" => "5","tariq" => "6"]
//            ],
//            "3"=>["text" => "text2","description" => "description2"]
//
//        ];
//        echo ($array5["1"]["2"]["4"]["5"]["tesanyut1"]);
//
//$array6 = [
//    "1" => [
//        "2"=> [
//            "3" => [
//                "4" => [
//                    "5" => [
//                        "6" =>[
//                            "Country" => "Germany"
//                            ,"City" => "Berlin"
//                            ,"Population" =>"10mil"
//
//                        ]
//
//                    ]
//                ]
//            ],
//            "4" =>[
//                "Country" => "India",
//                "city" => "New Deli",
//                "population" => "-50+mil"
//            ]
//        ]
//    ]
//];
//    echo ($array6["1"]["2"]["3"]["4"]["5"]["6"]["Country"]);
//




        return $this->render('artic/index.html.twig', [
            'controller_name' => 'ArticController',

        ]);
    }





}
