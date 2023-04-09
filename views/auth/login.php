<div class="contenedor">
    <h1>UpTask</h1>
    <p>Crea y Administra tus proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>
        <form action="/" method="POST" class="formulario">
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" id="email" placeholder="Tu E-mail" name="email" />
            </div>
            <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Tu Password" name="password" />
            </div>
            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuentas? Crea una.</a>
            <a href="/olvide">¿Olvidaste tu password?</a>
        </div>
    </div> <!--.contenedor -sm-->
</div>