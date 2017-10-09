namespace CommonUtils;

function GetTimeStamp(){
    return strval(intval(time()));
}

function GetSHA1($str = "abc"){
    return sha1($str);
}

function GetNonce(){
    $str='1234567890';
    $randStr = str_shuffle($str);//´òÂÒ×Ö·û´®
    $count = rand(8,10);
    $rands= substr($randStr,0,$count);
    return $rands;
}