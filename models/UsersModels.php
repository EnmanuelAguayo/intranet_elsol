<?php

class Users extends Conexion{
    
    public function login(){
      $conectar = parent::conectar();
      parent::set_names();

      if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['enviar'])){
        
        #1 recepcion de datos del formulario para inicio de sesion
        $email = $_POST['emailUser'];
        $pass = $_POST['passUser'];

        if (isset($_POST['g-recaptcha-response'])) {
          $secretkey = "6Lda_EUfAAAAAEyoy9frTRl7fZB0OUoItnzhbFhY";
          $captcha = $_POST['g-recaptcha-response'];
          $ip = $_SERVER['REMOTE_ADDR'];
          $responseCaptcha = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
          $captchaResponseJson = json_decode($responseCaptcha, true);
        }

        #2 validar datos   
          /*
            Referencias => m1, m2, m3
            m1 = credenciales incorrectas
            m2 = completar todos los datos
            m3 = completar todos los datos y validar captcha
            m4 = validar captcha
          */

        if(empty($email) or empty($pass)){
            
            // m3 y m2
            if (!$captchaResponseJson['success']) {
              header("Location: " . Conexion::ruta() . "view/index.php?m=3");
            }else{
              header("Location: " . Conexion::ruta() . "view/index.php?m=2");
            }
  
        }else{
          if (!$captchaResponseJson['success']) {
            // m4
            header("Location: " . Conexion::ruta() . "view/index.php?m=4");
          }else{
            $sql = "SELECT * FROM tm_users WHERE usu_email = ? AND usu_pass = ? AND usu_estado = 1";
            $stmt = $conectar->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $pass);
            $stmt->execute();
            $resultado = $stmt->fetch();
  
            if(is_array($resultado) and count($resultado) > 0){
  
              $_SESSION['usu_id'] = $resultado['usu_id'];
              $_SESSION['usu_email'] = $resultado['usu_email'];
              $_SESSION['usu_name'] = $resultado['usu_name'];
              $_SESSION['usu_lastname'] = $resultado['usu_lastname'];
              $_SESSION['rol_id'] = $resultado['rol_id'];
  
             
            }else{
              // m1
              header("Location: " . Conexion::ruta() . "view/index.php?m=1");
              $this->errors .= "credenciales incorrectas </br>";
            }
          }
        }
      }
    }
  }

  





?>