<h1>editando usuario</h1>
<?php if($smg = $this->session->flashdata('smg')): ?>
<div class="alert alert-success text-center " role="alert">
   <?=$smg ?>
</div>
<?php endif; ?> 

<a class="btn btn-primary" href="<?=base_url('registro')?>" role="button">Adicionar usuario</a>
<a class="btn btn-primary" href="<?=base_url('vistatabla')?>" role="button">Listar Usuario</a>
     

   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="<?=base_url('registro/update')?>" method="POST">
                    <fieldset>
                        <legend class="text-center header"> </legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon">Nombres</i></span>
                            <div class="col-md-8">
                                <input id="fname" name="nombres" type="text" value="<?=$user['nombres']?>" placeholder="Nombres" class="form-control">
                                <input type="hidden" value="<?=$user['id_usuario']?>" name="id1">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon">Apellido Paterno</i></span>
                            <div class="col-md-8">
                                <input id="lname" name="ap" type="text" value="<?=$user['apellido_paterno']?>" placeholder="Apellido Paterno" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon">Apellido Materno</i></span>
                            <div class="col-md-8">
                                <input id="email" name="am" type="text" value="<?=$user['apellido_materno']?>" placeholder="Apellido Materno" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon">CI</i></span>
                            <div class="col-md-8">
                                <input id="phone" name="ci" type="text" value="<?=$user['ci']?>" placeholder="ci" class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon">Email</i></span>
                            <div class="col-md-8">
                                <input id="phone" name="email" type="email" value="<?=$user['email']?>" placeholder="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon">Contraseña</i></span>
                            <div class="col-md-8">
                                <input id="phone" name="password" type="password" value="<?=$user['password']?>" placeholder="contraseña" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon">Tipo Usuario</i></span>
                            <div class="col-md-8">
                                <select name="tipousuario" id="">
                                <option value="">Usuario simple</option>
                                <option value="">Usuario Administrador</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Aditar usuario</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>