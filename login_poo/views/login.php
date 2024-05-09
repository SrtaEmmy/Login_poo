<h1>Login</h1>

<form method="post">

    <label for="email">Email</label>
    <input type="email" name="email"> <br>

    <label for="password">Password</label>
    <input type="password" name="password"><br><br>

    <input type="submit"> <br><br>

    <a href="index.php?class=signup&method=index">Regístrate</a>

    <?php if(isset($error) && $error!=0): ?>
       <p style="color: red;"><?php echo $error ?></p>
    <?php endif ?>
</form>