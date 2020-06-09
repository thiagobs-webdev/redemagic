<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieType;

class MovieTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movieType = MovieType::all();
        return response()->json($movieType);
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
            'name' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }

        $newMovieType = MovieType::create($request->all());

        if (!$newMovieType) {
            $json['message'] = 'Ooops, algo deu errado ao efetuar o cadastro.';
            return response()->json($json);
        }

        $json['message'] = 'Categoria cadastrada com sucesso.';
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
        return MovieType::find($id);
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
            'name' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }
        
        $data = $request->all();
        $movieTypeUpdate = MovieType::findOrFail($id);


        if(!$movieTypeUpdate->update($data)){
            $json['message'] = 'Ooops, Algo deu errado ao armazenar os dados, tente novamente.';
            return response()->json($json);
        }

        $json['message'] = 'Categoria Atualizada com sucesso.';
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
        $movieTypeDelete = MovieType::findOrFail($id);
        $someMovie = Movie::where("movie_type_id", $movieTypeDelete->id)->pluck("id")->first();

        if($someMovie){
            $json['message'] = 'Ooops, Há filmes cadastrados nesta Categoria, por isso não poderá ser excluído.';
            return response()->json($json);
        }

        $movieTypeDelete->delete();

        $json['message'] = 'Categoria Deletada com sucesso.';
        return response()->json($json);
    }
}
