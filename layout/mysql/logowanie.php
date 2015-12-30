<?php
  session_start();
  include 'db.php';
  if ($_POST['logowanie'])
  {
    if (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth']==FALSE)
    {
      if (!empty($_POST['login']) && !empty($_POST['password'])) 
      {
        $login=trim($_POST['login']);
        $password=trim($_POST['password']);
        $password=sha1(md5($password));
        $sql=$pdo->prepare("SELECT * FROM user WHERE login=:login AND password=:password");
        $sql->bindValue(":login",$login,PDO::PARAM_STR);
        $sql->bindValue(":password",$password,PDO::PARAM_STR);
        $sql->execute();
        if ($sql->rowCount()!=0) 
        {
          $_SESSION['user']=$login;
          $_SESSION['auth']=TRUE;
          header("Location:../../index.php");
        }
        else
          include '../error.php';
      }
      else
        include '../error.php';     
    }
  }
