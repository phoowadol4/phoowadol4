<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
    <!-- <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Website</th>
                <th scope="col">Company</th>
            </tr>
        </thead>
        <tbody> -->
            <?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.healthserv.gistnu.nu.ac.th/surveys',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6ImJvb256YTc3IiwiaWF0IjoxNjg5NTgzNjAzLCJleHAiOjE2ODk1ODcyMDN9.m-TTPzy0J3gBI1gbEtMl7q9jL5e6Aw8H0SPQAU3QugA'
),
));
$response = curl_exec($curl);
// $obj = json_decode($response);
// $ssd = '';
//                         $ssd .= '<tr>
//                                     <th scope="row">'.$obj[$i]->result.'</th>
//                                     <td>'.$obj[$i]->result->id.'</td>
//                                     <td>'.$obj[$i]->result->sex.'</td>
//                                     <td>'.$obj[$i]->result->answerer.'</td>
//                                     <td>'.$obj[$i]->result->age.'</td>
//                                     <td>'.$obj[$i]->result->date_time.'</td>                                 
//                                     <td>'.$obj[$i]->result->countEver.'</td>
//                                 </tr>';
                    
//                     echo $ssd;
curl_close($curl);
echo $response;
?>
<!-- </body>

</html> -->