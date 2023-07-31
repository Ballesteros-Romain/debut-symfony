<?php
namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotations\Route;


class HelloController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    // protected $logger;

    // public function __construct(LoggerInterface $logger)
    // {
    //     $this->logger = $logger;
    // }
   

    public function  hello($name){
        // $logger->error("mon message de log"); 
        $tva = $this->calculator->calcul(100);
        var_dump($tva);
        return new Response("hello $name");
    }
}