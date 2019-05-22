<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortController
{
    /**
    * @Route("/port")
    */
    public function getPort()
    {
        return new Response(
            '<html><body>Port number: 21182</body></html>'
        );
    }
}
