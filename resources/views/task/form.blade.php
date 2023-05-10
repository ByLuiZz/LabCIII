extends('layouts.app')
@section('contend')
    Nombre de la tarea:
    <input type="text" name="nametask" id="nametask" value="{{ isset($task)?$task->nametask:'' }}"/>
    @error('nametask')
        {{ $message }}
    @enderror 

    Descripcion de la tarea:
    <input type="text" name="descripcion" id="descripcion" value="{{ isset($task)?$task->descripcion:'' }}"/><br />
    @error('descripcion')
        {{ $message }}
    @enderror 
    Fecha de vencimiento 
    <input type="date" name="fechav" id="fechav" value="{{ isset($task)?$task->fechav:'' }}"/><br />
    @error('fechav')
        {{ $message }}
    @enderror 


    <button type="submit">Guardar</button>
@endsection