
    <main id="contacto">

        <div class="container">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4">
                    <div class="padreado">
                        <form name="fvalida" method="Post" action="recibir" class="" id="topardo" >
                            <div>
                        
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" name="nombre1" required />
                            
                            </div>
                            <div>
                                
                                <label for="nombre">Apellido:</label>
                                <input id="nombre" type="text" name="apellido1" required />
                            
                            </div>
                            <div>
                        
                                <label for="exampleInputEmail1" class="form-label">Correo:</label> 
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                        
                            </div>
                            <!--<div>
                                <label>Edad:
                                    <input type="text" name="edad1" required />
                                </label>
                            </div>
                            -->
                        
                        <label> Opciones:
                            <?php
                            include("paneladm/funciones.php"); 
                            listarEnOptions ("producto","nombre_prod","id_producto");
                        ?>
                        </label>
                        <div> 
                            <label for="comentario">Deje aquí su comentario:</label>
                            <textarea class="form-control" id="comentario" name="comentario" required></textarea>
                        </div> 
                        
                        <div>
                            <input type="checkbox" required/> Acepto terminos y condiciones
                        </div>
                        
                        <button type="submit" class="btn btn-primary" value="Enviar"  onclick="valida_envia()">Enviar</button>
                        <!--<input type="submit" value="Enviar"  onclick="valida_envia()"/> -->
                        
                        
                        
                        </form>
                        
                        <script type="text/javascript">
                        function valida_envia(){
                            //validar nombre1
                            if(document.fvalida.nombre1.value.length==0){
                                alert("No escribió su Nombre")
                                document.fvalida.nombre1.focus()
                                return 0;
                            }else {
                                //alert(document.fvalida.nombre1.value)
                            }
                            if(document.fvalida.apellido1.value.length==0){
                                alert("No escribió su Apellido")
                                document.fvalida.apellido1.focus()
                                return 0;
                            }else {
                                //alert(document.fvalida.apellido1.value)
                            }
                            if(document.fvalida.email.value.length==0){
                                alert("No escribió su email")
                                document.fvalida.email.focus()
                                return 0;
                            }else {
                                //alert(document.fvalida.nombre.value)
                            }
                        
                        if(document.fvalida.opciones.selectedIndex==0){
                            alert("Seleccione una opción")
                            document.fvalida.opciones.focus()
                            return 0;
                        
                            }
                        
                        }

                        </script>
                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </main>
