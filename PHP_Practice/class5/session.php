<?php
session_start();

?>
<html>

<body>
    <?php
    $_SESSION['name'] = "la grandee";
    $_SESSION['class'] = "webii";

    echo "session variables are set<br>";
    ?>
</body>

</html>