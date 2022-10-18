{include file='templates/header.tpl'}




<div class="container">
<form id="form-task" action="insert_equipo" method="post">
    <div class="form-group">
        <label for="equipo">Agregar Equipo</label>
        <input class="form-control" id="equipo" name="input_equipo"></input>
    </div>
    
    <div class="form-group">
            <label for="equipo">Agregar Victorias</label>
            <input class="form-control" id="equipo" name="input_victorias"></input>
        </div>     
        <div class="form-group">
            <label for="equipo">Agregar Derrotas</label>
            <input class="form-control" id="equipo" name="input_derrotas"></input>
        </div>     
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        
<table class="table table-responsive">
<thead>
<tr>
<th>Equipo</th>
<th>ID</th>
<th>VICTORIAS</th>
<th>DERROTAS</th>
<th>Administrar</th>
</tr>
</thead>
<tbody>
{foreach from=$equipos item=equipo}  
<tr>
<td>  {$equipo->nombre_equipo}  </td>
<td>{$equipo->id_equipos} </td>
<td>{$equipo->victorias_total} </td>
<td>{$equipo->derrotas_total} </td>
<td> <a href="borrar/{$equipo->id_equipos}">Borrar</a></button></td>
</tr>
{/foreach}

</tbody>
</table>
</div>
    



{include file='templates/footer.tpl'}





    