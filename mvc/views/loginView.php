<main id="login">        
             
             <div class="login">
                 <div>
                     <h5>INICIAR SESION</h5>
                     <img src="img/login.png" alt="login">
                 </div>
                 <form method="post" action="usuario/login" name="login">
                     <p>Ingresa tus datos:</p>
                     <div><input class="form-control" type="email" placeholder="Correo electrónico:" name="email" required/></div>
                     <div><input class="form-control" type="password" placeholder="Contraseña:" name="clave" required/></div>
                     <div><input type="submit" id="boton2" onclick="valida_envia()" value="INGRESAR" ></div>
                 </form>
     
                 <script type="text/javascript">
     
                     function valida_envia(){
                     
                         if(document.login.email.value.length==0){
                             alert("Por favor, escriba su correo electrónico.")
                             document.login.email.focus()
                             return 0;
                         }
     
                         if(document.login.clave.value.length==0){
                             alert("Por favor, escriba su contraseña")
                             document.login.clave.focus()
                             return 0;
                         }
                     }
                 </script>
     
                 <ul>¿No tenés cuenta?<br>
                     <a href="altauser.html">¡Registrate!</a>
                 </ul>
             </div>
         </main>