<?php

if(isset($_POST['submit'])){
  require_once 'db_init.php';

  $select = $_POST['select'];

  if ($select == '') {
    header('Location: ../../index.php?error1');
    exit();
  }

  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  if (empty($uid) || empty($pwd)) {
    header('Location: ../../index.php?error2');
    exit();
  }else{
    $sql = "SELECT * FROM user WHERE '$uid' = user_uid AND '$select' = user_role;";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
      header('Location: ../../index.php?error5');
      exit();
    }else{
      if($row = mysqli_fetch_assoc($result)){
        $hashedpwdcheck = password_verify($pwd, $row['user_password']);
        if($hashedpwdcheck == false){
          header('Location: ../../index.php?error6');
          exit();
        }elseif($hashedpwdcheck == true){
          $_SESSION['user_uid'] = $row['user_uid'];
          $_SESSION['user_name'] = $row['user_name'];
          $_SESSION['user_access'] = $row['user_access'];
          $_SESSION['user_role'] = $row['user_role'];
          //activity reg
          $date = date('Y-m-d H:i:s');
          $login = "logged in the system";
          $type = "user login";
          $sql = "INSERT INTO activity (user, a_name, a_type, a_date) values (?,?,?,?);";
          $stmt = mysqli_stmt_init($conn);
          $stmt->prepare($sql);
          $stmt->bind_param("ssss", $_SESSION['user_name'], $type, $login, $date);
          $stmt->execute();
          //end activity reg
          if($select == 'User'){
            header('Location: ../pages/user/user_main.php');
            exit();
          }elseif($select == 'Admin'){
            header('Location: ../pages/admin/admin_main.php');
            exit();
          }else{
            header('Location: ../../index.php?error12');
            exit();
          }
        }
      }
    }
  }
}


 ?>
