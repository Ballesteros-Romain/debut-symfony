<?php
namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
     protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
     public function index(){
        $tva = $this->calculator->calcul(100);
        dump($tva);
        dd("ça fonctionne");
    }
// les annotations : remplace les route yaml
    
    // [Route("/test/{age<\d+>?0}", name="test", methods={"POST", "GET"}, host="localhost", schemes={"http", "https"})] mais ça ne marche pas

    public function test(Request $request, $age){
        // $request = Request::createFromGlobals();

        // $age = $request->attributes->get('age', 0); si je met $age dans les parametre de la fonction cette ligne est inutile
        // les deux lignes ci dessus remplace les trois lignes ci dessous : 
        // $age = 0;
        // if(!empty($_GET['age'])){
        //     $age = $_GET['age'];
        // }
             return new Response("vous avez $age ans !");
            
    }
    
}