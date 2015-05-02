<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'sections/head.php'; ?>
    <title>ENOLA - Framework PHP</title>
</head>
<body>
    <div class="container">
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Iniciar Sesión</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Olvidaste la Contraseña?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" > 
                    <?php Tags::alert_message('danger', $mensaje);?>
                    <form id="loginform" class="form-horizontal" role="form" action="" method="POST">                                    
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="user" type="text" class="form-control" name="user" value="<?php echo $user['user']; ?>" placeholder="Usuario">                                        
                        </div>
                                
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                        </div>                         

                        <div class="input-group">
                            <div class="checkbox">
                            <label>
				<input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
                            </label>
                            </div>
                        </div>

                        <div style="margin-top:10px" class="form-group">
                            <div class="col-sm-12 controls">
                                <?php Tags::button('submit', 'Ingresar', 'success'); ?>
                            </div>
                        </div>  
                    </form>
                </div>                     
            </div>  
        </div>        
    </div>
    <?php include 'sections/footer.php'; ?>
</body>
</html>