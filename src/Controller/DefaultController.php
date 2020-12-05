<?php
namespace  App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController {
    /**
     * @param $name
     * @return Response
     * @route("hello/{name}")
     */
    public function index($name, LoggerInterface $logger){

        $logger->info("Логирование пример");
        return $this->json( [
            'name'=> $name,
        ]);
    }

    /**
     * @return Response
     * @route("simple")
     */

    public function sipmle(){
        return new Response("Просто! Легко! Быстро!");
    }
}
