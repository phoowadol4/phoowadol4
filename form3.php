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
        <div class="flex items-center justify-center h-auto ">
            <form method="POST" action="process.php" class="bg-white shadow-md rounded-md p-7">
                <h1 class="text-2xl text-center">แบบประเมินความพึงพอใจ</h1>
                <br>
                <h1 class="text-sm">โปรดทำเครื่องหมาย ลงในช่อง ระดับความพึงพอใจที่ตรงตามความรู้สึกของท่านมากที่สุด</h1>
                <table class="w-center">
                    <thead>
                        <tr>
                            <th class="border px-1 py-1"></th>
                            <th class="border  py-1">น้อยที่สุด</th>
                            <th class="border px-1 py-1">น้อย</th>
                            <th class="border  py-1">ปานกลาง</th>
                            <th class="border px-2 py-1">มาก</th>
                            <th class="border  py-1">มากที่สุด</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">8.ระดับความพอใจในการให้บริการของเจ้าหน้าที่</td>
                            <td class="border px-6 py-2 ">
                                <input type="radio" name="rd_8" value="1"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_8" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_8" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_8" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_8" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">9.ผู้รับบริการสามารถติดต่อสื่อสารกับ รพ.สต. ได้สะดวก</td>
                            <td class="border px-6 py-2 ">
                                <input type="radio" name="rd_9" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2 ">
                                <input type="radio" name="rd_9" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_9" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_9" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_9" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">10. รพ.สต. ให้บริการตรงต่อเวลาที่นัดหมาย</td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_10" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_10" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_10" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_10" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_10" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-1 py-1">ด้านสิ่งอำนวยความสะดวก</td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">11.ความสะอาดของสถานที่</td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_11" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_11" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_11" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_11" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_11" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">12.ความหลากหลายของช่องทางการให้บริการ</td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_12" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required >
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_12" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_12" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_12" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_12" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>

                        <tr>
                            <td class="border px-4 py-2">13. มีสิ่งอำนวยความสะดวกในสถานที่ให้บริการ เช่น ป้ายบอกทาง
                                ที่นั่งรอ</td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_13" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_13" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_13" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_13" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_13" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-1 py-1">ความพึงพอใจด้านคุณภาพการให้บริการในภาพรวม</td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>
                            <td class="border px-1 py-1 "></td>

                        </tr>
                        <tr>
                            <td class="border px-4 py-2">14.ได้รับบริการที่ตรงตามความต้องการ ถูกต้อง ครบถ้วน
                                ไม่ผิดพลาด</td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_14" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_14" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_14" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_14" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_14" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">15.ความพึงพอใจโดยรวมที่ได้รับจากการบริการจาก รพ.สต.
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_15" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_15" value="2" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_15" value="3" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required> 
                            </td>
                            <td class="border px-4 py-2">
                                <input type="radio" name="rd_15" value="4" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                            <td class="border px-6 py-2">
                                <input type="radio" name="rd_15" value="5" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex justify-between mx-4 mt-4">
                    <a href="form2.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 
                    ">next</button>
                </div>
                </div>
                
            </form>
        </div>
        <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>