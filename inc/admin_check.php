<?php
if(!$s_idx || $s_id!="admin"){
    echo "
        <script type=\"text/javascript\">
            alert(\"관리자 로그인이 필요합니다.\");
            location.href = \"http://localhost/web_project/login/login.php\";
        </script>
    ";
    exit;
};
?>