<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ViewEventsController extends Controller
{
	public function index(){
		return $this->render('home/home.html.twig');
	}
}