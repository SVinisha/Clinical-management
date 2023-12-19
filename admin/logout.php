<?php
setcookie("email", $email, time() - (86400 * 30), "/");
 unset($_COOKIE['email']);
?>

<script language="javascript">
document.location="../index.php";
</script>

