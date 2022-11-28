

    <main id="panel">
                            <!-- EDICION DE CATEGORIAS -->
        <h4>AQUI PODRAS MODIFICAR INFORMACION DESDE LA BASE DE DATOS.</h4>

        <div class="panel"> 
            <div id="cat1" class="cat1">
                <h5>EDICION DE CATEGORIAS</h5>
                <table class="tabla-cat">
                    <tr>
                        <th>CATEGORIAS</th> <th>TIPO</th> <th>OPCIONES</th>
                    </tr>
                    
                    <?php
                        for ($i=0; $i < count($lista) ; $i++) { 
                            $id =  $lista[$i]['id_categoria'];
                            $nombre = $lista[$i]['categoria'];

                            echo "
                                    <tr>
                                    <td>$nombre</td>
                                    <td>$id</td>
                                    <td><a href ='categoria/actualizar'>MODIFICAR</a> | <a href =''>BORRAR </a></td>
                                </tr>
                            ";

                        }

                    ?>
                    <tr>
                        <td>Categoria 1</td>
                        <td>Tipo 1</td>
                        <td><a href ="modifcat.html">MODIFICAR</a> | <a href ="">BORRAR </a></td>
                    </tr>

                   

                </table>
            </div>   
                                        <!-- AGREGAR DE CATEGORIAS -->
            <div class="cat2">
                <h5>AGREGAR NUEVA CATEGORIA</h5> 
                <form action="altacat.php" class="form-control" method="post" name ="cate">
                <input id="nombreCategoria" placeholder="Nombre de la categoría:" class="form-control"
                        type="text" name="nombreCategoria" required/>

                <label for="categoria">Seleccione el tipo de categoría: </label>

                    <select class = "form-control" name = "">

                        <option value="">Tipo 1</option>
                        <option value="">Tipo 2</option>
                        <option value="">Tipo 3</option>

                    </select>

                <input type="submit" id="boton3" value="Agregar" onclick="valida_envia()">

                </form>
            </div>

            <script type="text/javascript">

                    function valida_envia(){
                        if(document.cate.nombreCategoria.value.length==0){
                            alert("Por favor, escriba el nombre de la categoría.")
                            document.cate.nombreCategoria.focus()
                            return 0;
                        }
                    }
            </script>

                                   <!-- EDICION DE INSTRUMENTOS-->
            <div id="tabla-inst">
                <h5>EDICION DE INSTRUMENTOS</h5>
                <table class="tabla-inst">
                    <tr>
                        <th>PRODUCTOS</th> <th>OPCIONES</th>
                    </tr>
    
                    <tr>
                        <td>Producto 1</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Producto 2</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Producto 3</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Producto 4</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Producto 5</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                    <tr>
                        <td>Producto 6</td>
                        <td><a href="modifprod.html">MODIFICAR</a> | <a href="">BORRAR</a></td>
                    </tr>
                                    
                </table>
            </div>
                                <!-- AGREGAR INSTRUMENTO -->
            <div class="inst2">
                <h5>AGREGA UN NUEVO INSTRUMENTO</h5>
                <form action="altaprod.php" method="post" name ="instrum" enctype="multipart/form-data">
                    <input placeholder="Nombre:" class="form-control" id="nombreInstrumento" type="text" name="nombreInstrumento" required/>
                    <input placeholder="Marca:" class="form-control" id="marcaInstrumento" type="text" name="marcaInstrumento" required/>
                    <textarea placeholder="Descripción:" class="form-control" id="descripcionInstrumento" name="descripcionInstrumento"></textarea>
                    <textarea placeholder="Detalles:" class="form-control" id="detallesInstrumento" name="detallesInstrumento"></textarea>
                    <input placeholder="Precio:" class="form-control" id="precioInstrumento" type="text" name="precioInstrumento" required/>
                    <input placeholder="Cantidad en stock:" class="form-control" id="cantidadInstrumento" type="text" name="cantidadInstrumento" required/>
                    <label for = "fotoInstrumento">Seleccione una imagen del instrumento: </label>
                    <input class="form-control" accept="image/jpeg" id="fotoInstrumento" type="file" name="fotoInstrumento">
                    
                    <label for = "categoria">Seleccione la categoria del instrumento: </label>

                    <select class = "form-control" name = "">

                        <option value="">Categoria 1</option>
                        <option value="">Categoria 2</option>
                        <option value="">Categoria 3</option>

                    </select>

                    <input type="submit" id="boton3" value="Agregar" onclick="valida_envia2()"/>
                </form>
                
                <script>

                    function valida_envia2(){
                        if(document.instrum.nombreInstrumento.value.length==0){
                            alert("Por favor, escriba el nombre del producto.")
                            document.instrum.nombreInstrumento.focus()
                            return 0;
                        }

                        if(document.instrum.marcaInstrumento.value.length==0){
                            alert("Por favor, escriba la marca del producto.")
                            document.instrum.marcaInstrumento.focus()
                            return 0;
                        }

                        if(document.instrum.precioInstrumento.value.length==0){
                            alert("Por favor, escriba el precio del producto.")
                            document.instrum.precioInstrumento.focus()
                            return 0;
                        }

                        if(document.instrum.cantidadInstrumento.value.length==0){
                            alert("Por favor, escriba cantidad en stock del producto.")
                            document.instrum.cantidadInstrumento.focus()
                            return 0;
                        }
                    }
                </script>
                
            </div>
        </div>

        <div class="back">
            <ul>
                <a href=""> VOLVER</a>
            </ul>
        </div>   

    </main>
