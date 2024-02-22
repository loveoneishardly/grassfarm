<?php
    session_start();
    include_once('controllers/AppController.php');
    include_once('controllers/QrCode.php');

    if(isset($_GET['check'])) {
        $check_session = 0;
		if(!isset($_SESSION["sansang"])){
            $check_session = "";
        } else {
            if($_SESSION["sansang"] != "1"){
                $check_session = $_SESSION["sansang"];
            }
        }

        ob_start();

        switch ($_GET['check']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_index":
                include("pages/login.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }

    if(isset($_POST['for'])) {
        switch ($_POST['for']) {
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "_taomaqrcode":
                $ID = $_POST['mavungtrong'];
                $res = (new CreateQRCode())->CreateQRcodeVungTrong($ID);
                echo $res;
            break;
            default:
                echo "Chức năng không tồn tại";
        }
    }

    if(isset($_GET['for'])) {
        switch ($_GET['for']) {
            case "check_captcha":
                if (isset($_POST['captcha'])){
                    if (strtolower($_SESSION['captcha']) != strtolower(trim($_POST['captcha']))){
                        echo json_encode(array("trangthai" => 'false', "cap" => $_SESSION['captcha']));
                    } else {
                        echo json_encode(array("trangthai" => 'true', "cap" => $_SESSION['captcha']));
                    }
                }
            break;
            case "loadlistvungtrong":
                $iddonvi = $_GET['iddonvi'];
                $res = (new AppController())->LoadListVungTrong($iddonvi);
                echo json_encode($res);
            break;
            default:
                echo "Chức năng không tồn tại";
            break;
        }
    }

    if(isset($_GET['page'])) {
        
        // if(!isset($_SESSION["sansang"])){
        //         header("Location: go?check=_home");
        // } else {
        //     if($_SESSION["sansang"] != "1"){
        //         header("Location: go?check=_home");
        //     }
        // }
        
        ob_start();

        switch ($_GET['page']) {
            case "_home":
                include("pages/index.php");
            break;
            case "_main":
                include("pages/manage.php");
            break;
            default:
                include("pages/ferror.php");
            break;
        }
        echo ob_get_clean();
    }
?>