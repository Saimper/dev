<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Seguimiento</title>

        <link rel="stylesheet" href="estilo.css">
      
    </head>
    <div class="login-container">
  <h2>Iniciar sesión</h2>
  <form>
    <div class="form-group">
      <label for="email">Correo electrónico</label>
      <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico">
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña">
    </div>
    <button type="submit">Iniciar sesión</button>
  </form>
  <div class="forgot-password">
    <a href="#">¿Olvidaste tu contraseña?</a>
  </div>
</div> 


    </body>

</html>
