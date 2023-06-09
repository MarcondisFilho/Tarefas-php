<!-- resources/views/tasks/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="addtarefa">Adicionar Tarefa</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" class="descricao">Descrição</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group" style="visibility:hidden!important;">
                <label for="user_id" class="user_id">ID do usuário</label>
                <textarea name="user_id" id="user_id" class="form-control"  readonly>{{$user->id}}</textarea>
            </div>



            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection