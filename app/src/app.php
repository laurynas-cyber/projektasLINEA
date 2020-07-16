
<?php 
    if (isset($_POST['submit'])) {
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    $pavarde = trim($_POST['pavarde']);


    if(!empty($vardas) && !empty($email) && !empty($message)) {       
        echo "<p>Vardas: $vardas</p>";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "laurynas.stanciauskas@gmail.com";
            $subject ="nauja zinute";
            $autorius = 'Nuo: ' . $vardas . ', ' . $email;
            $zinute = htmlspecialchars($message);
            mail($to, $subject, $autorius, $zinute, $from);
            echo "<script>alert ('dekojame. Jusu zinute gauta. Netrukus susisieksime.');</script>";
        }
}


include('db.php');
    }

