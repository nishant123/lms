<?php include "header.php"; ?>
<?php


    try {
      

        $q = $pdo->prepare("SELECT * FROM instructors WHERE email=? AND status=?");
        $q->execute([$_GET['email'],1]);
        $total = $q->rowCount();
        if(!$total) {
            throw new Exception("Information is incorrect");
        } 
        else {
            $result = $q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                // $password = $row['password'];
                // if(!password_verify($_POST['password'], $password)) {
                //     throw new Exception("Password does not match");
                // }
            }
        }
        $_SESSION['instructor'] = $row;
        $_SESSION['success_message'] = "You are logged in successfully";
        header('location: '.BASE_URL.'instructor-dashboard');
        exit;
    } catch(Exception $e) {
        $error_message = $e->getMessage();
        $_SESSION['error_message'] = $error_message;
        header('location: '.BASE_URL.'login');
        exit;
    }

?>