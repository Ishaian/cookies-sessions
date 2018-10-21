<?php
/**
 * Created by PhpStorm.
 * User: lilian
 * Date: 15/10/18
 * Time: 15:49
 */

if (!empty($_POST['loginname']))
{
    $_SESSION['loginname'] = $_POST['loginname'];
    header('Location: index.php');
}
