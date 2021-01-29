<?php
// find
require __DIR__.'/common.php';
// require __DIR__.'/condb.php';
$data = (object)json_decode(file_get_contents("php://input"),true);

// IF REQUEST METHOD IS NOT POST
if($_SERVER["REQUEST_METHOD"] != "POST"):
    $returnData = msg(0,404,'Page Not Found!');

 // CHECKING EMPTY FIELDS
 elseif(!isset($data->keyword) 
    || empty(trim($data->keyword))
    ):

    $fields = ['fields' => ['keyword']];
    $returnData = msg(0,422,'Please Fill in all Required Fields!',$fields);

else:
  $keyword = trim($data->keyword);
  if(strlen($keyword) <=0):
    $returnData = msg(0,422,'검색어를 입력하세요');
 else:
     try{
        use goodus ;
        db.test.find({ service_start : /^2021/ , support : { $exists : true }} ,
                       { _id :0 } )
        $returnData = msg(1,201,'You have successfully search');

         }
     catch(PDOException $e){
         $returnData = msg(0,500,$e->getMessage());
     }
 endif;
 
endif;

echo json_encode($returnData);