<!DOCTYPE html>
<html>
<head>
    <title>Protected-Page</title>
    <meta charset ="utf-8"/>
</head>
<body>
    <?php 
    if(isset($_POST['password']) AND $_POST['password'] == "123456789")
    {
    ?>
    <h1> Here is the access code : </h1>
    <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

    <p>
    This page is reserved for NASA staff. Do not forget to visit it regularly because the access codes are changed weekly.
    <br>
    NASA thanks you for your visit.
    </p>
    <?php
    }
    else{
        echo '<p> Incorr!ect password';
    }
    ?>
</body>
</html>