    <main id="productos">
    <h1 > Nuestras Mejores Anvorrrrrguesas  </h1>

    <?php
        foreach ($listaProductos as $producto) {
            # code...
            //print_r($producto);
            $id_producto = $producto['id_producto'];
            $nombre_prod = $producto['nombre_prod'];
            $precio = $producto['precio'];
            $img = $producto['img'];
            $nombre_prod = $producto['descripcion'];

            echo "<div class='news-cards'>
                    <img src='$img' alt='$nombre_prod' >
                    <h2>$nombre_prod</h2>
                    <p>$nombre_prod</p>
                </div>";

        }

    ?>
   

<!--         <div class="news-cards">
            <img src="../img/kebab-1.png" alt="hamburgesa1" >
            <h2>Hamburguesa kebab</h2>
            <p>Hamburguesa de pollo con jamon queso tomate lechuga.</p>
        </div>
 -->






    </main>