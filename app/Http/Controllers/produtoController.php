<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class produtoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lista()
    {
//-------PAGINA-63------------
      // $produtos = DB::select('select * from marca');
       $produtos = \App::all();
       return view('listagem');
}







//----------PAGINA-57-----------PHP E LARAVEL------------
//$html = '<h1>Listagem de produtos com Laravel</h1>';
//$html .= '<ul>';
//$produtos = DB::select('select * from marca');
//foreach ($produtos as $p) {
//$html .= '<li> Nome: '. $p->marca .'</li>';

//    }

//$html .= '</ul>';
//return $html;
//}
//-------------------------------------------------------

    public function index()
    {
       
       $nome = 'Alex';
       return view('teste', ['nome'=>$nome]);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
