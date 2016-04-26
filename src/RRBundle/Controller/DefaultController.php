<?php

namespace RRBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        //$client = new Client('https://redmine.ekreative.com');

$client = new \GuzzleHttp\Client(['base_uri' => 'https://redmine.ekreative.com', 'login' => 'test', 'password' =>'9uu82T487m6V41G']);
$request = $client->get('/projects.json');
//$request->setAuth('test', '9uu82T487m6V41G');

// $response = $client->get('/projects.json/apikey=2fda745bb4cdd835fdf41ec1fab82a13ddc1a54c');
dump($request);
//echo $request->getUrl();
      /*  
      // $client   = $this->get('guzzle.client.api_crm');
    //    $client ->setAuth('test', '9uu82T487m6V41G');
   $client = new \GuzzleHttp\Client(['base_uri' => 'https://redmine.ekreative.com']);
   $client->setAuth('test', '9uu82T487m6V41G');
     $request = $client->get('/projects');
*/
//echo $request->getUrl();   
   
     //$response = $client->get('/key=2fda745bb4cdd835fdf41ec1fab82a13ddc1a54c');
       // dump($response);
        return $this->render('RRBundle:Default:index.html.twig');
    }
}
