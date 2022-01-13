<h1>Editar comentarios</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Comentario</label>
        <input type="text" class="form-control" id="body" placeholder="Introduce un comentario" name="body" value ="<?php if (isset($comment["body"])) echo $comment["body"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Aceptar</button>
</form>