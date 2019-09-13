@extends('layouts.app')

@section('content')
<page tamanho="12">
  <painel title_cone="Lista de artigos" color="panel-default">
    <crumb v-bind:lista="{{$listCrumbs}}"></crumb>
    
    <modal-link tipo="button" nome="myModal" titulo="Criar"></modal-link>
    <table-list v-bind:titles="['#','Título','Descrição']" v-bind:items="[[1,'PHP OO','Curso de PHP OO'],[2,'Vue JS','Curso de Vue JS']]" order="asc" orderCol="2" create="#criar" detail="#detalhe" edit="#editar" deletar="#deletar" token="787797856">

    </table-list>
  </painel>
</page>
<modal nome="myModal">
  <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
  </form>
</modal>
@endsection