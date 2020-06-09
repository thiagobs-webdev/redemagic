<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserType;
use App\User;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTypes = UserType::all();
        return response()->json($userTypes);
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

        $newUserType = UserType::create($request->all());

        if (!$newUserType) {
            $json['message'] = 'Ooops, algo deu errado ao efetuar o cadastro.';
            return response()->json($json);
        }

        $json['message'] = 'Tipo de Usuário cadastrado com sucesso.';
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
        return UserType::find($id);
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
        $userTypeUpdate = UserType::findOrFail($id);


        if(!$userTypeUpdate->update($data)){
            $json['message'] = 'Ooops, Algo deu errado ao armazenar os dados, tente novamente.';
            return response()->json($json);
        }

        $json['message'] = 'Tipo de Usuário Atualizado com sucesso.';
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
        $userTypeDelete = UserType::findOrFail($id);
        $someTypeDelete = User::where("user_type_id", $userTypeDelete->id)->pluck("id")->first();

        if($someTypeDelete){
            $json['message'] = 'Ooops, Há Usuários cadastrados neste Tipo, por isso não poderá ser excluído.';
            return response()->json($json);
        }
        $userTypeDelete->delete();

        $json['message'] = 'Tipo de Usuário Deletado com sucesso.';
        return response()->json($json);
    }
}
