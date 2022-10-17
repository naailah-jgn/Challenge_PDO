<?php
        require_once '../challenge_pdo/connec.php';
        $pdo = new PDO(DSN, USER, PASS);
        

        //if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
        //}
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : '';
            $lastname = trim($_POST['lastname']);
            $statement = $pdo->prepare("INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)");
            $statement ->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $statement ->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $newFriend = $statement->execute();
        

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
</head>
<body>
    <main>
       <form action="" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname" required >
        
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname" required>

        <input type="submit" name="send" value="submit">

       </form>
    </main>
    
</body>
</html>