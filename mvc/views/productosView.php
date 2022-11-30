
    <main id="productos">
    <div class='container'>
        <div class="row">
            <div class="col-12">
                <h1 class="text-center pb-5"> Nuestras Mejores Anvorrrrrguesas  </h1>
            </div>
        
        <div class='col-12'>
         <hr/>
        </div>
        </div>

        <?php
            foreach ($listaProductos as $producto) {
                # code...
                //print_r($producto);
                $id_producto = $producto['id_producto'];
                $nombre_prod = $producto['nombre_prod'];
                $precio = $producto['precio'];
                $img = $producto['img'];
                $descripcion = $producto['descripcion'];

                echo "
                                <div class='row'>
                                    <div class='col-3'>
                                        <img src='$img' width='300px' alt='$nombre_prod' >
                                    </div>
                                    <div class='col-3'>
                                        <h2>$nombre_prod</h2>
                                    </div>
                                    <div class='col-1'>
                                        <p> $ $precio</p>
                                    </div>
                                    <div class='col-5'>
                                        <p>$descripcion</p>
                                    </div>
                                    <div class='col-12'>
                                        <hr/>
                                    </div>
                                </div>
                        
                        ";

            }

        ?>
    </div>

<!--         <div class="news-cards">
            <img src="../img/kebab-1.png" alt="hamburgesa1" >
            <h2>Hamburguesa kebab</h2>
            <p>Hamburguesa de pollo con jamon queso tomate lechuga.</p>
        </div>
 -->






    </main>