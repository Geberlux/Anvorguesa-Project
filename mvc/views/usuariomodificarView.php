<main id="usuariomodificar">
    <form name="fvalida" method="post" action="usuario/actualizar" class="position-absolute start-50 translate-middle-x" id="topardo" >
        <div>
    
            <label for="nombre">Nombre:</label></br>
            <input id="nombre" type="text" name="nombre" required />
        
        </div>
    
        <div>
            
            <label for="apellido">Apellido:</label></br>
            <input id="apellido" type="text" name="apellido" required />
        
        </div>
                
        <div>
            
            <label for="contrasenia">Contraseña:</label></br>
            <input id="contrasenia" type="password" name="contrasenia" required />
        
        </div>
  
    
    <button type="submit" class="btn btn-primary" value="Enviar" >Modificar</button>
    <!--<input type="submit" value="Enviar"  onclick="valida_envia()"/> -->

    
    
    </form>
</main>