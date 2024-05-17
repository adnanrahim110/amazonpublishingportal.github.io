<?php
function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            foreach($addr as $add){
                if(filter_var($add, FILTER_VALIDATE_IP))
                {
                    return $add;
                }
            }
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$to = "abdullah.qamar137@gmail.com";
$curl = curl_init();
$data = [
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'phone' => (isset($_POST['phone'])?$_POST['phone']:''),
    'message' => (isset($_POST['message'])?$_POST['message']:''),
    'domain' => "amazonpublishingportal.com",
];
$keys_to_skip = array_keys($data);
foreach($_POST as $key=>$value){
    if(!in_array($key, $keys_to_skip)){
        $data[$key] = $value;
    }
}
try{
    $userIp = getUserIP();
    $requestIP = json_decode(file_get_contents('https://ipinfo.io/'.$userIp.'/json'));
    foreach($requestIP as $k=>$v){
        $data['ipinfo_'.$k] = $v;
    }
}catch(Exception $ex){}
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://terminal.amazonpublishingportal.com/api/brand-form-submissions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
$response = json_decode(curl_exec($curl));
curl_close($curl);
header("location: ../thankyou");
?>
