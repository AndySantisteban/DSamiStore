<div class="modal fade" id="newemail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="../../controllers/proveedor/enviar-correo.php">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Contacto con proveedor</h4>
                </div>
                <div class="modal-body">
                    <div class="row d-grid gap-3">
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Para</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Ingresar correo del proveedor" name="email_receptor"/>
                        </div>
                        <div class="col-md-12">
                            <label for="inputMessage" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="inputMessage" placeholder="Agregar asunto" name="subject"/>
                        </div>
                        <div class="col-md-12">
                            <label for="inputMessage" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="inputMessage" placeholder="Agregar mensaje" name="sms"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary submitBtn" >Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
