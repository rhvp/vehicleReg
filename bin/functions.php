<?php 
function insert($conn, $data){

$query = "INSERT INTO car(";

$counter = 1;
foreach($data as $key=>$this_row){
    if(count($data) == $counter){
        $query .= $key;
    }else{
        $query .= $key.",";    
    }
    
    $counter++;
}

$query .= ") VALUES (";
 
    
$counter = 1;
foreach($data as $key=>$this_row){
    if(count($data) == $counter){
        $query .= "'".$this_row."'";
    }else{
        $query .= "'".$this_row."'".",";
    }
    $counter++;
}


$query .= ")";

    if(mysqli_query($conn,$query)){
        return true;
    }
    else{
        return false;
    }

    
}

?>