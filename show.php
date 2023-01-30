<!DOCTYPE html>
<html>

<body>
    <?php
    $name =$_GET["name"];
    $age=$_GET["age"];
    $gender=$_GET["gender"];
    $status=$_GET["status"];
    if ($age < "15" && $gender == "male" && $status == "unmarried"){
        $titaltxt="DC.";
        $gender = "Male";
        $status="unmarried";
    }else if($age > "14" && $gender == "male" && $status == "unmarried"){
        $titaltxt="Mr.";
        $gender = "Male";
        $status="unmarried";
    }else if($age > "14" && $gender == "male" && $status == "married"){
        $titaltxt="Mr.";
        $gender = "Male";
        $status="unmarried";
    }else if($age < "15" && $gender == "male" && $status == "married"){
        $titaltxt="DC.";
        $gender = "Male";
        $status="unmarried";
    }else if($age < "15" && $gender == "female" && $status == "unmarried"){
        $titaltxt="girl.";
        $gender = "female";
        $status="unmarried";
    }else if($age > "14" && $gender == "female" && $status == "unmarried"){
        $titaltxt="ms.";
        $gender = "female";
        $status="unmarried";
    }else if($age > "14" && $gender == "female" && $status == "married"){
        $titaltxt="Mrs.";
        $gender = "female";
        $status="married";
    }else if($age < "15" && $gender == "female" && $status == "married"){
        $titaltxt="girl.";
        $gender = "female";
        $status="married";
    }
    echo "<font style='font-size:24px'>your information</font>"."<br>";
    echo "name:".$titaltxt.$name."<br>";
    echo "age:".$age."<br>";
    echo "sex:".$gender."<br>";
    echo "status:".$status."<br>";
    ?>

</body>

</html>
