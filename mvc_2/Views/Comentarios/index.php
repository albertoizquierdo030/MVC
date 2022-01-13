<h1>Listado de Comentarios</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="<?php echo WEBROOT;?>comentarios/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Añadir comentario</a>
        <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th class="text-center">Accion</th>
        </tr>
        </thead>
        <?php
        foreach ($comments as $c)
        {
            echo '<tr>';
            echo "<td>" . $c['id'] . "</td>";
            echo "<td>" . $c['body'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='". WEBROOT."comentarios/edit/" . $c["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a><a href='". WEBROOT."comentarios/delete/" . $c["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a> <a class='btn btn-warning btn-xs' href='". WEBROOT."comentarios/datos/" . $c["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Datos</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>