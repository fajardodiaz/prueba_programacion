<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;


class ScrapCategoriaController extends Controller
{
    //Extraer informacion desde la pagina web
    private $categorias = array();
    
    public function mostrar(){
        $client = new Client();
        $page = $client->request('GET','https://www.milanuncios.com/');
        $page->filter('.sui-CollapsibleBasic-trigger-label > div.ma-MainCategory > a.ma-MainCategory-mainCategoryNameLink')->each(function ($node){
            $this->categorias[] = $node->text();
            // echo gettype($node->text());
        });

        $data = $this->categorias;
        return view('categorias',compact('data'));


    }
}


