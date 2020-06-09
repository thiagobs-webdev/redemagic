
@extends('web.templates._web')

@section('content')
 

    

    
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Email</th>
              <th>Papel</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->role->name }}</td>
            </tr>
            @empty
            <tr class="text-center">
              <td colspan="6" >Não há Usuários cadastrados</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    
  </div>

     
@endsection