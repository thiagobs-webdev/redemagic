
@extends('web.templates._web')

@section('content')
 

    

    
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Categorias de Filmes</h1>
        
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Nome</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($movieCategories as $category)
            <tr>
              <td>{{ $category->id }}</td>
              <td>{{ $category->name }}</td>
            </tr>
            @empty
            <tr class="text-center">
              <td colspan="6" >Não há Categorias cadastradas</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    
  </div>

     
@endsection