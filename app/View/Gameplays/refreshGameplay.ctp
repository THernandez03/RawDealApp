<label for="ActividadeEquipoId">Equipos</label>
<select name="data[Actividade][equipo_id]" id="ActividadeEquipoId">
	<?php
       foreach ($users as $equipo): 
          echo "<option value='".$equipo['User']['id']."'>".$equipo['User']['name']."</option>";        
       endforeach; 
	?>
</select>