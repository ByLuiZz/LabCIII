@extends('layouts.app')
@section('contend')
    Añadir tarea
    <form action="{{ url('/task') }}" method="POST">
        @csrf
        @include('task.form')
    </form>   
@endsection