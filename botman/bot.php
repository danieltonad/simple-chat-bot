<?php
require_once 'config.php';
require_once 'carbinet.php';

session_start();
$_SESSION['name'] = "unknown";


// 
$_POST = json_decode(file_get_contents("php://input"),true);


$db = new controler();
$data_tmp;
$data = $_POST['data'];


// split data 
$raw = explode(" ",$data);
$count = 0;
$newData = "boy";
foreach ($raw as $info ) {
    
    $response = $db->getData("SELECT response FROM botman WHERE guess LIKE '%$info%' LIMIT 1 ");
    while($row = $response->fetch_assoc()) {
    $newData = $row['response'];
    }

    switch($newData){
    case 'datetime':
        $count++;
        break;
    case '(lecturer)':
        $count++;
        break;
    case '(courses)':
       $count++;
        break;
    case '(requirement)':
        $count++;
        break;
    case '(check result)':
        $count++;
        break;
    default:
        #ntn
        
        break;
}

}



    
  
// #others
// $newData = 'boy';
// $response = $db->getData("SELECT response FROM botman WHERE guess LIKE '%$data%' LIMIT 1 ");
// while($row = $response->fetch_assoc()) {
//     $newData = $row['response'];
// }

// 

if($count > 0){

    switch($newData){
        case 'datetime':
            echo Datetime($newData);
            break;
        case '(lecturer)':
            echo Lecturers();
            break;
        case '(courses)':
            echo Courses();
            break;
        case '(requirement)':
            echo Req();
            break;
        case '(check result)':
            echo result();
            break;
        default:
            echo "Sorry, Am unable to process your response ";
            
            break;
    }

}

else {
    echo "Sorry, Am unable to process your response ";
}






?>
