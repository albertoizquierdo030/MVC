<h1>Editar Usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Nombre</label>
        <input type="text" class="form-control" id="title" placeholder="Introduce un nombre" name="name" value ="<?php if (isset($user["name"])) echo $user["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Email</label>
        <input type="text" class="form-control" id="description" placeholder="Introduce un email" name="email" value ="<?php if (isset($user["email"])) echo $user["email"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Aceptar</button>
</form>