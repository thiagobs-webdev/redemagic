<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
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
            'email' => 'required|email',
            'user_type_id' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }

        $newUser = User::create($request->all());

        if (!$newUser) {
            $json['message'] = 'Ooops, algo deu errado ao efetuar o cadastro.';
            return response()->json($json);
        }

        $json['message'] = 'Usuário cadastrado com sucesso.';
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
        return User::find($id);
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
            'email' => 'required|email',
            'user_type_id' => 'required'
        ]);
        
        if ($validator->fails())
        {
            $json['message'] = 'Ooops, preencha os Campos Obrigatórios* para efetuar o cadastro.';
            return response()->json($json);
        }
        
        $data = $request->all();
        $userUpdate = User::findOrFail($id);

        if(!$userUpdate->update($data)){
            $json['message'] = 'Ooops, Algo deu errado ao armazenar os dados, tente novamente.';
            return response()->json($json);
        }

        $json['message'] = 'Usuário Atualizado com sucesso.';
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
        $userDelete = User::findOrFail($id);
        $userDelete->delete();

        $json['message'] = 'Usuário Deletado com sucesso.';
        return response()->json($json);
    }
}
