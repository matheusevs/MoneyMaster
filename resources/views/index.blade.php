@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h1 class="display-4">Registro de nova despesa</h1>
            </div>
        </div>

        <form id="formCadastrar">
            @csrf
            <div class="row mb-2">
                <div class="col-md-2">
                    <select class="form-control" id="ano" name="ano">
                        <option value="" disabled selected>Ano</option>
                        @foreach ($anosResponse->original as $value){
                            <option value="{{$value}}">{{$value}}</option>
                        }
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <select class="form-control" id="mes" name="mes">
                        <option value="" disabled selected>Mês</option>
                        @foreach ($mesesResponse->original as $value){
                            <option value="{{$value}}">{{$value}}</option>
                        }
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <select class="form-control" id="tipo" name="tipo">
                        <option value="" disabled selected>Tipo</option>
                        <option value="Alimentação">Alimentação</option>
                        <option value="Educação">Educação</option>
                        <option value="Lazer">Lazer</option>
                        <option value="Saúde">Saúde</option>
                        <option value="Transporte">Transporte</option>
                        <option value="Contas mensais">Contas mensais</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <input type="text" class="form-control" placeholder="Descrição" id="descricao" name="descricao"/>
                </div>

                <div class="col-md-2">
                    <input type="text" class="form-control" placeholder="Valor" id="valor" name="valor"/>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>

        </form>
    </div>

@endsection