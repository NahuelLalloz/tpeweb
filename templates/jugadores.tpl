
<div class="container">
<form id="form-task" action="insert_jugador" method="post">
    <div class="form-group">
        <label for="equipo">Agregar Jugador</label>
        <input class="form-control" id="jugador" name="input_jugador"></input>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
   
       
    <table class="table table-responsive">
    <thead>
<th>Jugadores</th>
<th>ID</th>
</tr>
</thead>
<tbody>
{foreach from=$jugador item=jugadores}  
<tr>
<td>  {$jugadores->jugadores} </td>
<td>  {$jugadores->id_jugador} </td>

</tr>
{/foreach}
</tbody>

    </table>
    </div>

    
{include file='templates/footer.tpl'}

