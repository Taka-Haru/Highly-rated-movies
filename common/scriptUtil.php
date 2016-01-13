<?php

//トップページへのリンクの関数
function return_top(){
    return "<a href='".ROOT_URL."'>トップページ</a>";
}


//セッションの値を取得する関数
function contact_session($name){
    if(isset($_POST['mode']) && $_POST['mode'] == 'REINPUT'){
        if(isset($_SESSION[$name])){
            return $_SESSION[$name];
        }
    }
}
//POSTの値をセッションに格納する関数
function confirm_session($name){
    if(!empty($_POST[$name])){
        $_SESSION[$name] = $_POST[$name];
        return $_POST[$name];
    }else{
        $_SESSION[$name] = null;
        return null;
    }
}


// 取得データをシャッフルさせる関数
function shuffle_assoc($list) {
    if (!is_array($list)) return $list;
    $keys = array_keys($list);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key) {
        $random[$key] = $list[$key];
    }
    return $random;
}
