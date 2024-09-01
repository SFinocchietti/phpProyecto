<!-- <nav>
    <div class="navbar">
        <a href="#" class="logo">Logo</a>
        <div>
            <button class="btn-ingresar"> Ingresar</button>
            <button class="btn-registrate"> Registrarte</button>
        </div>
    </div>
</nav>
 -->


<?php
// Lógica para manejar el estado del navbar
$mostrar_formulario_ingreso = false;

if (isset($_POST['mostrar_formulario_ingreso'])) {
    $mostrar_formulario_ingreso = true;
}
?>

<nav>
    <div class="navbar">
        <a href="#" class="logo">Logo</a>
        <div>
            <?php if ($mostrar_formulario_ingreso): ?> 
                <form action="index.php" method="POST" class="login-form">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Ingresar</button>
                </form>
            <?php else: ?>
                <form method="POST" style="display:inline;">
                    <input type="hidden" name="mostrar_formulario_ingreso" value="1">
                    <button type="submit" class="btn-ingresar">Ingresar</button>
                </form>
                <button class="btn-registrate">Registrarte</button>
            <?php endif; ?>
        </div>
    </div>
</nav>
