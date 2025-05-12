<?php
$data = [];

if(isset($_GET['option'])){

    switch ($variable) {
        case 'status':
            $data['status'] = 'SUCCESS';
            $data['data'] = 'API running ok';
            break;
        
        default:
            $data['status'] = 'error';        
            break;
    }

}else{
    $data['status'] = 'error';
}






?>