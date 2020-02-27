<?php
// 受け取った値を好きに処理する。
$name   = $_POST["name"];
$tel    = $_POST["tel"];
$age    = $_POST["age"];
$sex    = $_POST["sex"];
$doui   = $_POST["doui"];
$hidden = $_POST["hidden"];

if($doui == null){
    $data["message"] = "同意してください。";
}else{
    $data["message"] = "登録しました。";
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);