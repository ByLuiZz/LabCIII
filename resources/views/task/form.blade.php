Nombre de la tarea:
<input type="text" name="nametask" id="nametask" value="{{ isset($task)?$task->nametask:''}}"/>
Descripcion de la tarea:
<input type="text" name="descripcion" id="descripcion" value="{{ isset($task)?$task->descripcion:''}}"/>
Fecha de vencimiento en formato AA-MM-DD
<input type="date" name="fechav" id="fechav" value="{{ isset($task)?$task->fechav:''}}"/>