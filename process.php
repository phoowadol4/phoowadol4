<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['gender']) && isset($_POST['date'])&& isset($_POST['age'])&& isset($_POST['ever'])) {
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['age'] = $_POST['age'];
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
    // echo $response;
        }
      

    header("Location: form2.php");
    exit();
    }elseif (isset($_POST['rd_1']) && isset($_POST['rd_2'])&& isset($_POST['rd_3'])&& isset($_POST['rd_4'])&& isset($_POST['rd_5'])&& isset($_POST['rd_6'])&& isset($_POST['rd_7'])) {
    $_SESSION['rd_1'] = $_POST['rd_1'];
    $_SESSION['rd_2'] = $_POST['rd_2'];
    $_SESSION['rd_3'] = $_POST['rd_3'];
    $_SESSION['rd_4'] = $_POST['rd_4'];
    $_SESSION['rd_5'] = $_POST['rd_5'];
    $_SESSION['rd_6'] = $_POST['rd_6'];
    $_SESSION['rd_7'] = $_POST['rd_7'];
    
    


    header("Location: form3.php");
    exit();
} elseif (isset($_POST['rd_8']) && isset($_POST['rd_9'])&& isset($_POST['rd_10'])&& isset($_POST['rd_11'])&& isset($_POST['rd_12'])&& isset($_POST['rd_13'])&& isset($_POST['rd_14'])&& isset($_POST['rd_15'])) {
    $_SESSION['rd_8'] = $_POST['rd_8'];
    $_SESSION['rd_9'] = $_POST['rd_9'];
    $_SESSION['rd_10'] = $_POST['rd_10'];
    $_SESSION['rd_11'] = $_POST['rd_11'];
    $_SESSION['rd_12'] = $_POST['rd_12'];
    $_SESSION['rd_13'] = $_POST['rd_13'];
    $_SESSION['rd_14'] = $_POST['rd_14'];
    $_SESSION['rd_15'] = $_POST['rd_15'];


    header("Location: orther.php");
    exit();
    }elseif (isset($_POST['comments'])) {
    $_SESSION['comments']=$_POST['comments'];

    // header("Location: success.php");
    // exit();

    echo "เพศ: " . $_SESSION['gender'] . "<br>";
    echo "วันที่มาใช้บริการ: " . $_SESSION['date'] . "<br>";
    echo "ผู้ตอบแบบสอบถาม: " . $_SESSION['people'] . "<br>";
    echo "อายุ: " . $_SESSION['age'] . "<br>";
    echo "ท่านมาใช้บริการที่นี่ครั้งแรก: " . $_SESSION['ever'] . "<br>";
    echo "1.ให้การต้อนรับด้วยอัธยาศัยที่ดี สุภาพยิ้มแย้มแจ่มใสและกระตือรือร้น	:: " . $_SESSION['rd_1'] . "<br>";
    echo "2.ให้บริการด้วยความเต็มใจ เอาใจใส่รับฟังปัญหาสุขภาพ: " . $_SESSION['rd_2'] . "<br>";
    echo "3.เจ้าหน้าที่ได้แจ้งขั้นตอน และเงื่อนไขการบริการให้ผู้มาติดต่อทราบอย่างชัดเจน	: " . $_SESSION['rd_3'] . "<br>";
    echo "4.เจ้าหน้าที่มีความรู้ ความสามารถและเชี่ยวชาญ	:: " . $_SESSION['rd_4'] . "<br>";
    echo "5.ให้บริการด้วยความสะดวก รวดเร็ว	:: " . $_SESSION['rd_5'] . "<br>";
    echo "6.ความเร็วในการให้ความช่วยเหลือเมื่อท่านขอความช่วยเหลือ	:: " . $_SESSION['rd_6'] . "<br>";
    echo "7.เจ้าหน้าที่ให้ความสนใจและเต็มใจช่วยแก้ปัญหาต่างๆให้กับท่าน	:: " . $_SESSION['rd_7'] . "<br>";
    echo "8.ระดับความพอใจในการให้บริการของเจ้าหน้าที่: " . $_SESSION['rd_8'] . "<br>";
    echo "9.ผู้รับบริการสามารถติดต่อสื่อสารกับ รพ.สต. ได้สะดวก: " . $_SESSION['rd_9'] . "<br>";
    echo "10. รพ.สต. ให้บริการตรงต่อเวลาที่นัดหมาย	: " . $_SESSION['rd_10'] . "<br>";
    echo "ด้านสิ่งอำนวยความสะดวก. <br>";
    echo "11.ความสะอาดของสถานที่: " . $_SESSION['rd_11'] . "<br>";
    echo "12.ความหลากหลายของช่องทางการให้บริการ: " . $_SESSION['rd_12'] . "<br>";
    echo "13. มีสิ่งอำนวยความสะดวกในสถานที่ให้บริการ เช่น ป้ายบอกทาง
    ที่นั่งรอ: " . $_SESSION['rd_13'] . "<br>";
    echo "ความพึงพอใจด้านคุณภาพการให้บริการในภาพรวม. <br>";
    echo "14.ได้รับบริการที่ตรงตามความต้องการ ถูกต้อง ครบถ้วน
    ไม่ผิดพลาด: " . $_SESSION['rd_14'] . "<br>";
    echo "15.ความพึงพอใจโดยรวมที่ได้รับจากการบริการจาก รพสต.: " . $_SESSION['rd_15'] . "<br>";
    echo "ข้อเสนอแนะ :" . $_SESSION['comments'] . "<br>";
    session_unset();
    session_destroy();

  }

?>