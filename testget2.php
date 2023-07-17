<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>2.Advance</h2>
<table class="table">
    <thead>
        <tr>
        <th scope="col">status</th>
        <th scope="col">massage</th>
        <th scope="col">id</th>
        <th scope="col">sex</th>
        <th scope="col">answerer</th>
        <th scope="col">age</th>
        <th scope="col">date_time</th>
        <th scope="col">countEver</th>
        </tr>
    </thead>
    <tbody>

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
    'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6ImJvb256YTc3IiwiaWF0IjoxNjg5NTc5MTkyLCJleHAiOjE2ODk1ODI3OTJ9.BqqeHoP9Us8xsRpUaiXxySJ3jfGJ4bGtiVdehqMyqDQ'
  ),

));
                        $response = curl_exec($curl);
                        $obj = json_decode($response);
                        $html = '';
                        // for ($i=0; $i < count($obj); $i++) { 

                            $html .= '<tr>
                                        <th scope="row">'.$obj[$i]->status.'</th>
                                        <td>'.$obj[$i]->massage.'</td>
                                        <td>'.$obj[$i]->result.'</td>
                                        <td>'.$obj[$i]->result->id.'</td>
                                        <td>'.$obj[$i]->result->sex.'</td><td>'.$obj[$i]->result->answerer.'</td><td>'.$obj[$i]->result->age.'</td><td>'.$obj[$i]->result->date_time.'</td><td>'.$obj[$i]->result->countEver.'</td>
                                        
                                    </tr>';
                        // }
                        echo $html;
                        curl_close($curl);
                        // echo $response;
        ?>
    </tbody>
</table>
</body>
</html>