<!DOCTYPE html>
<html>

<body>
    <?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $status = $_POST["status"];

    echo "Name:" . $name . "<br>";
    echo "Age:" . $age . "<br>";
    echo "Sex:" . $sex . "<br>";
    echo "Status:" . $status . "<br>";

    ?>

</body>

</html>