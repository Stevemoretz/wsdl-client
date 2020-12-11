<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use SoapClient;

/**
 * @property SoapClient soapClient
 */
class DataController extends Controller
{
    public function __construct()
    {
        ini_set('default_socket_timeout', 5000);
        $this->soapClient = new SoapClient('http://wsdl-server.test/zoap/demo/server?wsdl');
    }

    public function index(){
        return view('data',[
            'data'=>$this->soapClient->read()->readResult
        ]);
    }

    public function save(){
        $validated = \request()->validate([
            'data'=>'required|string'
        ]);
        $this->soapClient->write(['text'=>$validated['data']]);
        return Redirect::to('/');
    }
}
