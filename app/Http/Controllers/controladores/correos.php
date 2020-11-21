<?php

namespace App\Http\Controllers\controladores;

use App\Http\Controllers\Controller;
use \Mailjet\Resources;

class correos extends Controller
{
    public function correo(){
       
        $mj = new \Mailjet\Client('ecb55e1a0e1caf1b3558a5692eb7477d','a78513305174eb350db66e14574774be',true,['version' => 'v3.1']);
        $body = [
          'Messages' => [
            [
              'From' => [
                'Email' => "19170051@uttcampus.edu.mx",
               'Name' => "Luis Angel"
              ],
              'To' => [
                [
                  'Email' => $request->correo,
                  'Name' => "Nuevo usuario"
                ]
              ],
              'Subject' => "Greetings from Mailjet.",
              'TextPart' => "My first Mailjet email",
              'HTMLPart' => "h3>Dear passenger 
              </h2> 'http://127.0.0.1:8000/api/{$codigo}'</h3><br />",
              'CustomID' => "AppGettingStartedTest"
            ]
          ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        if($response->success())
            return response()->json(["por favor verifique su correo y ingrese sus datos"
            =>$response->getData()],200);
            return response()->json(["mensaje"=>$response->getData()],500);

        
        //$response->success() && var_dump($response->getData());      
    }
}
