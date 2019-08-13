@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 ">
      <painel title_cone="Dashboard">

        <div class="row">
          <div class="col-md-4">
            <painel title_cone="Componente 1">
              Testando 1
            </painel>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <painel title_cone="Componente 2">
              Testando 2
            </painel>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <painel title_cone="Componente 3">
              Testando 3
            </painel>
          </div>
        </div>

      </painel>
    </div>
  </div>
</div>
@endsection