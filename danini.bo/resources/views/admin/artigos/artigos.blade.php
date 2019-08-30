@extends('layouts.app')

@section('content')
<page tamanho="12">
  <painel title_cone="Lista de tarefas" color="panel-default">
    <table-list v-bind:titles="['#','Título','Descrição']"
                v-bind:items="[[1,'PHP OO','Curso de PHP OO'],[2,'Vue JS','Curso de Vue JS']]"
                order="asc"
                orderCol="2"
                create="#criar"
                detail="#detalhe"
                edit="#editar"
                deletar="#deletar"
                token="787797856">

    </table-list>
  </painel>
</page>
@endsection