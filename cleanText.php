<?php
function badWordFilter($data){
    $originals = array("fucking","shit","damn");
    $replacements = array("silly","low quality","wow");
    $data = str_ireplace($originals,$replacements,$data);
    return $data;
}
if(isset($_POST['bio'])){
	$bio = $_POST['bio'];
}else {$bio = "";}



$cleaned = badWordFilter($bio);
//conver the data to array
$returnData = array('returned_val' => $cleaned);
//convert the php array to json to be handled by javascript

echo json_encode($returnData);
?>