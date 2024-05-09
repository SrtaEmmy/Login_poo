
    <h1>Hola <?php echo $user->getName() ?></h1>
    <p>Email: <?php echo $user->getEmail() ?> </p>
    <p>Teléfono: <?php echo $user->getPhone() ?></p>

    <?php if ($user->getRol() == 'admin'): ?>

        <p class="admin" >INTERFAZ DE ADMINISTRADOR</p>

    <?php else: ?>
        <p class="client" >Interfaz de Cliente</p>

    <?php endif ?>

 <form action="post">
    <input type="hidden" name="class" value="Logout">
    <input type="hidden" name="method" value="logout">
    <input type="submit" value="Cerrar sesión">
 </form>




