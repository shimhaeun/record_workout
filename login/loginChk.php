<?php
extract($_POST);
if (isset($_POST)) {
    require_once '../config/config.php';
    $c = new MemberClass();

    $user = $c->getUser($userid, $password);

    if ($user != false) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['userID'] = $user['userID'];
        $_SESSION['admin'] = $user['admin'];
        echo json_encode(array('result' => '1'));
    } else {
        echo json_encode(array('result' => '0'));
    }
} else {// 입력받은 데이터에 문제가 있을 경우
    echo json_encode(array('result' => '-2'));
}
?>