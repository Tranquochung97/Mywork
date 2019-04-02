<?php
$flag=0;
        if (!empty($_POST['ten']) && !empty($_POST['email']) && !empty($_POST['diachi'])) {
            $ten=$_POST['ten'];
            $email=$_POST['email'];
            $diachi=$_POST['diachi'];
            $thongtin=$_POST['ten'].'-'.$_POST['email'].'-'.$_POST['diachi'];
            setcookie('khachhang',$thongtin,time()+3600,'/','',0,0);
            $flag=1;
           }
    

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
    <form action="" name="frmkhachhang" method="post">
        <table>
        <tr>
            <td colspan="2">Thông tin khách hàng</td>
        </tr>
            <tr>
                <td>Họ và tên :</td>
                <td><input type="text" name="ten" value="<?php if(!empty($_POST['ten'])){ echo $ten;} ?>" ></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="text" name="email" value="<?php if(!empty($_POST['email'])){ echo $email;} ?>"></td>
            </tr>
            <tr>
                <td>Địa chỉ :</td>
                <td><input type="text" name="diachi" value="<?php if(!empty($_POST['diachi'])){ echo $diachi;} ?>"></td>
            </tr>
            <tr>
    
                <td  colspan="2"><input type="submit" name="submit"  value="Thực hiện "></td>
            </tr>
        </table>
    </form>
    <?php
    if ($flag==1) {
        ?>
        <table>
            <tr>
                <td colspan="2">Thông tin khách hàng :   </td>
                <td>

                    <?php  echo $_COOKIE['khachhang'];?>
                </td>

            </tr>
        </table>
        <?php
    }
    ?>
</body>
</html>