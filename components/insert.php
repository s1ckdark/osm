<?php
// insert
// data.client
// data.type
// data.date
// data.time
// data.assign
// db insert query

require __DIR__.'/common.php';
require __DIR__.'/condb.php';
$data = (object) json_decode(file_get_contents("php://input"),true);
// IF REQUEST METHOD IS NOT POST
if($_SERVER["REQUEST_METHOD"] != "POST"):
    $returnData = msg(0,404,'Page Not Found!');

 // CHECKING EMPTY FIELDS
elseif(!isset($data->client) 
    || !isset($data->type) 
    || !isset($data->date)
    || !isset($data->time)
    || !isset($data->assign)
    || empty(trim($data->client))
    || empty(trim($data->type))
    || empty(trim($data->date))
    || empty(trim($data->time))
    || empty(trim($data->assign))
    ):

    $fields = ['fields' => ['client','type','date','time','assign']];
    $returnData = msg(0,422,'Please Fill in all Required Fields!',$fields);

// IF THERE ARE NO EMPTY FIELDS THEN-
else:
    
    $client = trim($data->client);
    $type = trim($data->type);
    $date = trim($data->date);
    $time = trim($data->time);
    $assign = trim($data->assign);

    if(strlen($client) <=0):
        $returnData = msg(0,422,'고객사를 선택해주세요');

    elseif(strlen($type) <=0):
        $returnData = msg(0,422,'지원DB TYPE을 선택해주세요');     

    elseif(strlen($date) <=0):
        $returnData = msg(0,422,'지원일자를 선택해주세요');  

    elseif(strlen($time) <=0):
        $returnData = msg(0,422,'지원시간을 입력해주세요');       

    elseif(strlen($assign) <=0):
        $returnData = msg(0,422,'지원자가 누락되었습니다.)');    
    else:
        try{

            use goodus ;
            db.test.update({ company: $client, dbtype : $type} ,
                {
                $push: { support: { s_day : $date,
                                    s_time : $time ,
                                    s_eng : $assign } }
                })

                $returnData = msg(1,201,'You have successfully registered.');

        }
        catch(PDOException $e){
            $returnData = msg(0,500,$e->getMessage());
        }
    endif;
    
endif;

echo json_encode($returnData);
