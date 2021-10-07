<?php

namespace App\Controller;




use \Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints as Assert;
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

//
//        $sex = 'male';
//        $names = null;
//    $persons=[
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
//                    $names[] = $value['firstName'].' '.$value['lastName'].'';
//
//
//                    break;
//                default:
//
//                    break;
//            }
//        }
//        print_r($names) ;
////
//        $time = new \DateTime();
//$time = new  \DateTimeZone('Asia/Tokyo');
//
//
//      $time->SetTimezone($timeZone);
//        $formattedtimee =  $time->format('Y-m-d H:i:s');


//
//        $date1 = new \DateTime('2000-01-01 12:45:30');
//        $timezone1 =  new \DateTimeZone('Europe/Istanbul');
//        $date1->modify('+1 day');
//        $date1->setTimezone($timezone1);
//        echo $date1->format('y-m-d H:i:s   __e')."<br>"."<br>";
//






        $date2 = new \DateTime('1605-07-04 17:20:50');
        $timezone2 =  new \DateTimeZone('Africa/Gaborone');
        $date2->modify('-1 day');
        $date2->setTimezone($timezone2);
        echo $date2->format('Y-m-D H:i:s a   __e')."<br>"."<br>";








        $date3 = new \DateTime('2016-02-25 17:24:36');
        $timezone3 =  new \DateTimeZone('America/Barbados');
        $date3->modify('+1 month');
        $date3->setTimezone($timezone3);
        echo $date3->format('Y-m-l H:i:s A  __e')."<br>"."<br>";





        $date4 = new \DateTime('now');
        $timezone4 =  new \DateTimeZone('	Antarctica/Vostok');
        $date4->modify('-1 month');
        $date4->setTimezone($timezone4);
        echo $date4->format('Y-m-N H:i:s (B)  __e')."<br>"."<br>";





        $date5 = new \DateTime('2002-10-17 21:16:25');
        $timezone5 =  new \DateTimeZone('Asia/Kamchatka');
        $date5->modify('+1 year');
        $date5->setTimezone($timezone5);
        echo $date5->format('Y-m-S g/H:i:s  __e')."<br>"."<br>";




        $date6 = new \DateTime('2006-11-17 16:13:59');
        $timezone6 =  new \DateTimeZone('Atlantic/South_Georgia');
        $date6->modify('-1 year');
        $date6->setTimezone($timezone6);
        echo $date6->format('Y-m-w G//H:i:s  __e' )."<br>"."<br>";






        $date7 = new \DateTime('1453-05-29 21:15:59');
        $timezone7=  new \DateTimeZone('Australia/Sydney');
        $date7->modify('+1 minute');
        $date7->setTimezone($timezone7);
        echo $date7->format('Y-m-d-z     H:i:s  __e')."<br>"."<br>";






        $date8 = new \DateTime('301-12-29 11:54:60');
        $timezone8 =  new \DateTimeZone('Europe/Samara');
        $date8->modify('-1 minute');
        $date8->setTimezone($timezone8);
        echo $date8->format('Y-m-d-W	 H:i:s __e')."<br>"."<br>";





        $date9 = new \DateTime('1991-4-27 16:43:15');
        $timezone9 =  new \DateTimeZone('	Indian/Mahe');
        $date9->modify('+1 second');
        $date9->setTimezone($timezone9);
        echo $date9->format('Y-F-d H:i:s __e')."<br>"."<br>";






        $date10 = new \DateTime('2500-12-31 24:00:00');
        $timezone10 =  new \DateTimeZone('	Pacific/Galapagos');
        $date10->modify('-1 second +1 month');
        $date10->setTimezone($timezone10);
        echo $date10->format('Y-M-d H:i:s __e')."<br>"."<br>";



        $time1 = ' 14:54:27';
        $newtime1 = date(' h:i A', strtotime($time1));
echo $newtime1 .'<br>'.'<br>';





        $time2 = ' 23:16:46';
        $newtime2 = date('h:i A', strtotime($time2));
        echo $newtime2.'<br>'.'<br>';




        $time3 = ' 16:43:67';
        $newtime3 = date('h:i A', strtotime($time3));
        echo $newtime3.'<br>'.'<br>';






        $time4 = '6:31:60';
        $newtime4 = date('h:i A', strtotime($time4));
        echo $newtime4.'<br>'.'<br>';




        $time5 = ' 2:35:16';
        $newtime5 = date('h:i A', strtotime($time5));
        echo $newtime5.'<br>'.'<br>';

//        $dateTime = new \DateTime('now', new \DateTimeZone('Asia/Kolkata'));
//        echo $dateTime->format("d/m/y  H:i A");





//        $date = new DateTime('2000-01-01');
//        echo $date->format('Y-m-d H:i:s');
//        $time=[
//            "sex" => 'male',
//            "firstName"=> 'Arsen',
//            "lastName"=> 'Mkrtchyan',
//            "birthday"=> new \DateTime('2006-11-17')
//        ];
//        $time = new \DateTime('2000-01-17')
//        $formattedTime = $time->format('Y/m/d ');
//        echo $formattedTime;

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
        //
    // $test2 = [
    //  ["name" => 'Armen',
    //      "town" => 'Erevan',
    //      "age" => '38',
    //
    //  ],[
    //         "name" => 'Artak',
    //         "town" => 'Ararat',
    //         "age" => '14',
    //     ],[
    //         "name" => 'Narek',
    //         "town" => 'Gyumri',
    //         "age" => '35',
    //     ],[
    //         "name" => 'Arsen',
    //         "town" => 'Kirovakan',
    //         "age" => '14',
    //     ],
    // ];
    //       $age = '14';
    //       foreach ($test2 as $key => $value){
    //        switch ($value["age"]){
    //            case $age:
    //                $test5[] = 'name: ' .$value['name'].':'.' || '.'age: '.$value['age'].':'.' <br> ';
    //        }
    //       }
    //       print_r($test5);
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

    public function cases(): Response
    {
        $three=[
            "first"=>"go home"
            , "second"=>"go school"
        ];



        foreach ($three as $key => $value) {
            switch ($key){
                case "second":
                    $three[$key] = 'go out from school ';
                    break;
                default:

                    break;
            }
        }
        echo ($three["second"]);



        return $this->render('artic/cases.html.twig', [


        ]);
    }



}
