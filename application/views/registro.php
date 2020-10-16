<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <p>Registro</p>
    <ul>
    <?php foreach ($menu as $item): ?>
    <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
    <?php endforeach; ?>
    </ul>
    <!-- formulario -->
    <form action="<?= base_url('index.php/registro/create') ?>">
    
  <div class="form-group">
    <label for="">Nombres</label>
    <input type="text" name="nombres" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombres">
    
  </div>

  <div class="form-group">
    <label for="">Apellido Paterno</label>
    <input type="text" name="ap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido Paterno">
    
  </div>

  <div class="form-group">
    <label for="">Apellido Materno</label>
    <input type="text" name="am" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellido Materno">
    
  </div>

  <div class="form-group">
    <label for="">CI</label>
    <input type="text" name="ci" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ci">
    
  </div>

  <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
  
  </div>

  <div class="form-group">
    <label for="">Constraseña</label>
    <input type="password" name="contraña" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="contraseña">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Tipo Usuario</label>
    <br>
    <select>
        <option value="">Usuario Simple</option>
        <option value="">Usuario Evento</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <!--cerrar formulario-->

</body>
</html>