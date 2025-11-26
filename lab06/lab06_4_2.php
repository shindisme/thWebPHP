<?php
function postIndex($index, $value = "")
{
    if (!isset($_POST[$index]))    return $value;
    return trim($_POST[$index]);
}

function checkUserName($string)
{
    if (preg_match("/^[a-zA-Z0-9._-]*$/", $string))
        return true;
    return false;
}


function checkEmail($string)
{
    if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/", $string))
        return true;
    return false;
}

function checkPassword($string)
{
    if (preg_match("/^(?=.*[0-9])(?=.*[A-Z]).{8,}$/", $string)) {
        return true;
    }
    return false;
}
function checkPhoneNumber($string)
{
    if (preg_match("/^0[0-9]{9}$/", $string)) {
        return true;
    }
    return false;
}
function checkBirthDay($string)
{
    if (preg_match("/^\d{2}[-\/]\d{2}[-\/]\d{4}$/", $string)) {
        return true;
    }
    return false;
}

$sm = postIndex("submit");
$username = postIndex("username");
$email = postIndex("email");
$password = postIndex("password");
$phone = postIndex("phone");
$date = postIndex("date");

?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lab6_4</title>
    <style>
    fieldset {
        width: 50%;
        margin: 100px auto;
    }

    .info {
        width: 600px;
        color: #006;
        background: #6FC;
        margin: 0 auto
    }

    #frm1 input {
        width: 300px
    }
    </style>
</head>

<body>
    <fieldset>
        <legend style="margin:0 auto">Đăng ký thông tin </legend>
        <form method="post" enctype="multipart/form-data" id='frm1'>
            <table align="center">
                <tr>
                    <td width="88">UserName</td>
                    <td width="317"><input type="text" name="username" value="<?php echo $username; ?>" />*</td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" name="password" />*</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $email; ?>" />*</td>
                </tr>
                <tr>
                    <td>Ngày sinh</td>
                    <td><input type="text" name="date" value="<?php echo $date; ?>" />*</td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td><input type="text" name="phone" value="<?php echo $phone; ?>" /></td>
                </tr>

                <tr>
                    <td colspan=" 2" align="center"><input type="submit" value="submit" name="submit"></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php

    if ($sm != "") {
    ?>
    <div class=" info">Lỗi<br />
        <?php

            if (!checkUserName($username))
                echo "Username: Các ký tự được phép: a-z, A-Z, số 0-9, ký tự ., _ và - <br>";
            if (!checkEmail($email))
                echo "Định dạng email sai!<br>";
            if (!checkPassword($password))
                echo "Mật khẩu tối thiểu 8 ký tự, có ít nhật 1 chữ cái in hoa <br>";
            if (!checkPhoneNumber($phone)) {
                echo "Số điện thoại phải bắt đầu từ 0 và tối đa là 10 <br>";
            }
            if (!checkBirthDay($date)) {
                echo "Ngày sinh phải đúng định dang dd/mm/yyyy hoặc dd-mm-yyyy <br>";
            } else echo "Không lỗi <br>"
            ?>

    </div>
    <?php

    }
    ?>
</body>

</html>