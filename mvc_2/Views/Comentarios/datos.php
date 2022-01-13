<h1>Datos del Comentario</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        
        <tr>
            <th>ID</th>
            <th>Comentario</th>
            <th>Fecha Creación</th>
            <th>Fecha Actualización</th>

        </tr>
        </thead>
        <?php

            echo '<tr>';
            echo "<td>" . $comments['id'] . "</td>";
            echo "<td>" . $comments['body'] . "</td>";
            echo "<td>" . $comments['created_at'] . "</td>";
            echo "<td>" . $comments['updated_at'] . "</td>";
            
            echo "</tr>";
        ?>
    </table>
</div>