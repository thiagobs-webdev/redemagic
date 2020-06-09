<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'movie_type_id' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }

        $newMovie = Movie::create($request->all());

        if (!$newMovie) {
            $json['message'] = 'Ooops, algo deu errado ao efetuar o cadastro.';
            return response()->json($json);
        }

        $json['message'] = 'Filme cadastrado com sucesso.';
        return response()->json($json);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::find($id);
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
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'movie_type_id' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }
        
        $data = $request->all();
        $movieUpdate = Movie::findOrFail($id);
        // if ($movieUpdate->error()) {
        //     $json['message'] = 'Ooops, Registro não encontrado.';
        //     return response()->json($json);
        // }

        $movieUpdate->update($data);
        // $movieUpdate->fill($data);


        if(!$movieUpdate->update($data)){
            $json['message'] = 'Ooops, Algo deu errado ao armazenar os dados, tente novamente.';
            return response()->json($json);
        }

        $json['message'] = 'Filme Atualizado com sucesso.';
        return response()->json($json);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movieDelete = Movie::findOrFail($id);
        $movieDelete->delete();

        $json['message'] = 'Filme Deletado com sucesso.';
        return response()->json($json);
    }
}
