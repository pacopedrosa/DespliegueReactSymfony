<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class PPAController
{
#[Route('/api/ppa', name: 'ppa_hello')]
public function index(): Response
{
return new Response('symfony de Nombre Completo Responde a la llamada de
React');
}
}