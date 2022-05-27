<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DataTables;

class PersonajesController extends Controller
{
    public function index()
    {
        return view('personajes.index');
    }

    public function detalle($id)
    {
        $client = new Client([
            'base_uri' => 'https://breakingbadapi.com/api/',
            'timeout' => 2.0,
        ]);

        $response = $client->request('GET','characters/'.$id);
        $data = json_decode($response->getBody()->getContents());
        return view('personajes.detalle',compact('data'));
    }

    public function personajesDT(){

        $client = new Client([
            'base_uri' => 'https://breakingbadapi.com/api/',
            'timeout' => 2.0,
        ]);

        $response = $client->request('GET','characters');
        $data = json_decode($response->getBody()->getContents());

        return Datatables::of($data)
        ->addColumn('btn', 'personajes.actions')
        ->rawColumns(['btn'])
        ->make(true);
    }
}
