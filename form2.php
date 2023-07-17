<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0 ">
    <title>แบบประเมินความพึงพอใจ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <style>
    body {
        background-color: #4682B4;
    }
    </style>
</head>

<body>

    <div class="container mx-auto items-center h-screen ">
        <div class="flex items-center justify-center h-auto">
            <form method="POST" action="process.php" class="bg-white shadow-md rounded-md p-8">
                <h1 class="text-2xl text-center">แบบประเมินความพึงพอใจ</h1>
                <br>
                <h1 class="text-md mb-1">ส่วนที่ 2 สอบถามความพึงพอใจต่อการให้บริการใน รพ.สต.</h1>
                <h1 class="text-md">โปรดทำเครื่องหมาย ลงในช่อง ระดับความพึงพอใจที่ตรงตามความรู้สึกของท่านมากที่สุด</h1>
                <table class="w-center">
                    <thead>
                        <tr>
                            <th class="border px-1 py-1"></th>
                            <th class="border px-1 py-1">น้อยที่สุด</th>
                            <th class="border px-1 py-1">น้อย</th>
                            <th class="border px-1 py-1">ปานกลาง</th>
                            <th class="border px-1 py-1">มาก</th>
                            <th class="border px-1 py-1">มากที่สุด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-1 py-1">ด้านบุคลากรและเจ้าหน้าที่</td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">1.ให้การต้อนรับด้วยอัธยาศัยที่ดี
                                สุภาพยิ้มแย้มแจ่มใสและกระตือรือร้น</td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_1" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_1" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_1" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_1" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_1" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2.เจ้าหน้าที่ให้คำแนะนำ หรือตอบข้อซักถามและการให้
                                ข้อมูลต่างๆ<br>ได้อย่างถูกต้อง ครบถ้วน น่าเชื่อถือ
                            </td>
                            <td class="border px-7 py-2 ">
                                <input type="radio" name="rd_2" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2 ">
                                <input type="radio" name="rd_2" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_2" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_2" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_2" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">3.เจ้าหน้าที่ได้แจ้งขั้นตอน
                                และการบริการให้ผู้มาติดต่อทราบอย่างชัดเจน</td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_3" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_3" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_3" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_3" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_3" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">4.เจ้าหน้าที่มีความรู้ ความสามารถและเชี่ยวชาญ</td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_4" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_4" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_4" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_4" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_4" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">5.ให้บริการด้วยความสะดวก รวดเร็ว</td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_5" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_5" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_5" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_5" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_5" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">6.ความเร็วในการให้ความช่วยเหลือเมื่อท่านขอความช่วยเหลือ</td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_6" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_6" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_6" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_6" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_6" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">7.เจ้าหน้าที่ให้ความสนใจและเต็มใจช่วยแก้ปัญหาต่างๆให้กับท่าน
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_7" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_7" value="2"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-7 py-2">
                                <input type="radio" name="rd_7" value="3"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_7" value="4"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_7" value="5"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                    required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="flex justify-between mx-4 mt-4">
                    <a href="form.php"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 
                    ">next</button>
                </div>
            </form>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>