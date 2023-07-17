<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['gender']) && isset($_POST['age'])&& isset($_POST['date'])&& isset($_POST['ever'])) {
      $timestamp = date('Y-m-d H:i:s');
      $_SESSION['gender'] = $_POST['gender'];    
      $_SESSION['age'] = $_POST['age'];
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['ever'] = $_POST['ever'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.healthserv.gistnu.nu.ac.th/surveys/submit-survey',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
  "sex": "'.$_POST["gender"].'",
  "answerer": "I am",
  "age": '.$_POST["age"].',
  "date_time": "2023-07-05T11:30:00.000Z",
  "countEver": "'.$_POST["ever"].'"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
echo $response;
    }
  }
  ?>