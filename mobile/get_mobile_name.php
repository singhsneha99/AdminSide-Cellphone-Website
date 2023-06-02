<?php
$link = mysqli_connect("localhost", "root", "", "mobile");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Get search term
$searchTerm = $_GET['term'];
//$searchTerm = 'p';
// Get matched data from skills table
$query = $link->query("SELECT * FROM product WHERE mobile_name LIKE '%".$searchTerm."%' ORDER BY mobile_name ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['id'] = $row['id'];
        $data['value'] = $row['mobile_name'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);


//$subject_name = $_POST['subject_name'];
//$subject_name = 'P';
//$sql1port = "select subject_name from subjects where subject_name LIKE '$subject_name%'";
//$/resultport = mysqli_query($link, $sql1port);
//while($row = mysqli_fetch_array($resultport)){
//	$name[] = $row;
//}
// $sname = implode(',',$name);
 // print_r(json_encode($sname));
 

?>


