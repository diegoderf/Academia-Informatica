 <!-- Login Usuarios -->
        <div class="modal fade" id="ModalInicio" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="text-align: center; color:#000">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Acceso a la Plataforma</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action='' name="login_form">
                            <p><input type="email" class="form-control input-lg" name="p_email_login" id="email" placeholder="Email" required="required"></p>
                            <p><input type="password" class="form-control input-lg" name="p_pass_login" placeholder="Password" required="required"></p>
                            <p>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                <input type="submit" class="btn btn-primary" name="p_enviar_login" value="Acceder">
                            <hr />
                            <a href="">¿Olvidaste tu Contraseña?</a> | <a href="#" data-toggle="modal" data-target="">Registrarse</a>
                            </p>
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>