<div class="contenedor olvide">
    <?php include_once __DIR__ . '/../templates/nombre-sitio.php'; ?>
    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu acceso UpTask</p>
        <form action="/olvide" method="POST" class="formulario" novalidate>
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu E-mail" name="email" />
            </div>
            <input type="submit" class="boton" value="Enviar Instrucciones">
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una cuenta? Iniciar Sesión.</a>
            <a href="/crear">¿Aún no tienes una cuentas? Crea una.</a>
        </div>
    </div> <!--.contenedor -sm-->
</div>