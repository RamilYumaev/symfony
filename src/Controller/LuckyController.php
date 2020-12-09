<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(){
        $number = mt_rand(0,100);
        return new Response("<html lang=\"ru\"><body><h1>Получено случайное число $number</h1></body></html>");
    }
}