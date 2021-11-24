<div class="modal fade" id="newemail" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Contacto con proveedor</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="../../../src/controllers/send_email.php">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingrese su nombre" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">De:</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese su email" name="email_emisor"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Para:</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Ingrese el email del receptor" name="email_receptor"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Subject</label>
                        <input type="text" class="form-control" id="inputMessage" placeholder="Ingrese el Tema" name="subject"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Ingrese su mensaje" name="sms"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary submitBtn" >Enviar Ahora
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
