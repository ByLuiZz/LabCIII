Añadir tarea
<form action="{{url('/task') }}" method="post">
    @csrf
    @include('task.form')
</form>   