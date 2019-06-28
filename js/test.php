<?php    
$test = include_once("../../wp-config.php");
include_once("../../wp-includes/wp-db.php");

$sql = $wpdb->get_results("SELECT * FROM bRVBzYp5m_spr_installment");

print_r(json_encode($sql));




//  (object)
// $a = json_encode($sql);
// $a[0] = '';
// $a[strlen($a) - 1 ] = '';
// print_r($a);
// $return = json_decode(json_encode($sql),true);
// print_r($return);
// $replace = str_replace('{', '[',$sql);
// print($replace);
// foreach ($sql as $key) {
//     print_r(json_encode($key));
// }
// exit;
// print($a);
// echo end($a);

?>