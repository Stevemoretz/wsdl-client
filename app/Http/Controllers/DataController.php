<?php

namespace App\Http\Controllers;

use SoapClient;

class DataController extends Controller
{
    public function index(){
        ini_set('default_socket_timeout', 5000);
        $soapClient = new SoapClient('http://wsdl-server.test/zoap/demo/server?wsdl');
        return view('data',[
            'data'=>$soapClient->read()->readResult
        ]);
    }
}
