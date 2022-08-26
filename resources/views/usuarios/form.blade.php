@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ url('usuarios') }}">Voltar</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <h1>Lista Usuários </h1>
                  
                  @if( Request::is('*/edit'))
                     <form action="{{ url('usuarios/update') }}/{{ $usuario->id }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome: </label>
                            <input type="text" name="nome" class="form-control"  placeholder="Nome" value="{{$usuario->nome}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">RG </label>
                            <input type="text" name="rg" class="form-control"  placeholder="RG:" value="{{$usuario->rg}}">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail">E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="emeail" value="{{$usuario->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone </label>
                            <input type="tel" name="telefone" class="form-control"  placeholder="Telefone" value="{{$usuario->telefone}}">
                        </div>
                         <div class="form-group">
                            <label for="foto"> imagem do produto</label>
                            <input type="file" id="foto" name="foto" class="form-control-file" value="{{$usuario->foto}}">

                        </div>
                       
                        <button type="submit" class="btn btn-primary">atualizar</button>
                   </form>
                   @else

                  <form action="{{url('usuarios/add')}}" method="post">
                  @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome: </label>
                            <input type="text" name="nome" class="form-control"  placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">RG </label>
                            <input type="text" name="rg" class="form-control"  placeholder="RG:">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail">E-mail</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="emeail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone </label>
                            <input type="text" name="telefone" class="form-control"  placeholder="Telefone">
                        </div>
                         <div class="form-group">
                            <label for="foto"> imagem do produto</label>
                            <input type="file" id="foto" name="foto" class="form-control-file">

                        </div>
                       
                        <button type="submit" class="btn btn-primary">Cadastra</button>
                 </form>
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
