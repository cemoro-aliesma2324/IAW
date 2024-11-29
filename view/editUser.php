<form action="managers/userManager.php" method="post">
    <input type="hidden" name="op" value="update">
    <input type="email" name="mail" value="<?php echo $userData['user']; ?>" required>
    <input type="text" name="name" value="<?php echo $userData['name']; ?>" required>
    <input type="submit" value="Actualizar">
</form>