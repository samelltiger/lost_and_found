<?php
    session_start();
    header('Content-type:text/html;charset=utf-8');
    if(isset($_SESSION['username']) ){
            session_unset();//free all session variable
            session_destroy();//销毁一个会话中的全部数据
            // setcookie(session_name(),'',time()-3600);//销毁与客户端的卡号
            echo "<script>alert('注销成功,请重新登录...');location='../login.php'</script>";
        }else{
            echo "<script>alert('注销失败,请稍后再试');";
        }