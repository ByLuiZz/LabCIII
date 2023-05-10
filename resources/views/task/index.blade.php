@extends('layouts.app')
@section('contend')
    <table>
        Listado de tareas:
        <a href="{{url('task/create')}}"
        <thead>
            <tr>
                <th>#</th>
                <th>Tarea</th>
                <th>descripcion de tarea</th>
                <th>Fecha de Finalizacion</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->nametask }}</td>
                <td>{{ $task->descripcion }}</td>
                <td>{{ $task->fechav }}</td>
                <td>
                <form method="POST" action="{{ url('/task/'. $task->id) }}">
                    @csrf
                </form>
            </tr>    
            @endforeach
        </tbody>
    </table>
@endsection
