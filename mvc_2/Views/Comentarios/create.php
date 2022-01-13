<h1>Crear un comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="">Listado de Usuarios</label>
            <select name="user_id" class="form-control">
                <?php
                    echo ("<option selected> Selecciona un Usuario: </option>");
                    foreach ($users as $u) {      
                        echo ("<option value=".$u['id'].">".$u['name']."</option>");
                    }?>
            </select>
        <label for="post">Listado de Posts</label>
            <select name="post_id" class="form-control">
                <?php
                    echo ("<option selected> Selecciona un Post: </option>");
                    foreach ($posts as $p) {
                        echo ("<option value=".$p['id'].">".$p['title']."</option>");
                    }?>
            </select>
        <label for="body">Comentario</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce un comentario" name="body">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>