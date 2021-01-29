<?php
// update
// require __DIR__.'/common.php';
// require __DIR__.'/condb.php';
$data = json_decode(file_get_contents("php://input"),true);

// IF REQUEST METHOD IS NOT POST
if($_SERVER["REQUEST_METHOD"] != "POST"):
    $returnData = msg(0,404,'Page Not Found!');
else:
    // $result = query
    // while($r = mysql_fetch_assoc($result)){
    //     $row[ = $r;
    // }
    $returnData['client'] = "volvo";
    $returnData['type'] = "mongo";
    $returnData['date'] = "2021-01-31";
    $returnData['time'] = 4;
    $returnData['assign'] = "최영준";

endif;

echo json_encode($returnData);
