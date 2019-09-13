@extends('layouts.app')

@section('content')
<page tamanho="10">
  <painel title_cone="Dashboard" color="panel-default">
    <crumb v-bind:lista="{{$listCrumbs}}"></crumb>
    <div class="row">

      <div class="col-md-4">
        <box qtd="80" titulo="Artigos" url="{{route('artigos.index')}}" color="#0c7a96" icone="fa fa-instagram"></box>
      </div>

      <div class="col-md-4">
        <box qtd="1500" titulo="Usuários" url="#" color="#05c9bf" icone="fa fa-user"></box>
      </div>

      <div class="col-md-4">
        <box qtd="3" titulo="Autores" url="#" color="#12ec99" icone="fa fa-edit"></box>
      </div>

    </div>

  </painel>
</page>
@endsection