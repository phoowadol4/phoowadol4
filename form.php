<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0 ">
    <title>แบบประเมินความพึงพอใจ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
    <style>
    body {
        background-color: rgb(147 197 253);
    }
    </style>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <form method="POST" action="process.php" class="bg-white shadow-md rounded-md p-10">
            <h1 class="text-2xl font-bold text-center ">แบบประเมินความพึงพอใจ</h1>
            <br>
            <h1 class="text-md">โปรดสละเวลาอันมีค่าของท่านให้การตอบแบบสอบถามฉบับนี้</h1>
            <h1 class="text-md mb-1">ส่วนที่ 1 ข้อมูลผู้ตอบแบบสอบถาม</h1>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">เพศ:</label>
                <div>
                    <input type="radio" name="gender" id="ชาย" value="ชาย"
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                        required>
                    <label for="ชาย">ชาย</label>
                </div>
                <div>
                    <input type="radio" name="gender" id="หญิง" value="หญิง"
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="หญิง">หญิง</label>
                </div>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="age">อายุ:</label>
                <input type="number" name="age" id="age" required
                    class="border border-gray-400 rounded-md px-3 py-2 w-full ">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="date">วันที่มาใช้บริการ:</label>
                <input type="date" name="date" id="date" required
                    class="border border-gray-400 rounded-md px-3 py-2 w-full">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">ผู้ป่วยมาใช้บริการที่นี่เป็นครั้งแรก:</label>
                <div>
                    <input type="radio" name="ever" id="ใช่" value="ใช่" required
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ใช่">ใช่</label>
                </div>
                <div>
                    <input type="radio" name="ever" id="ไม่" value="ไม่"
                        class="mr-2 w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="ไม่">ไม่</label>
                </div>
            </div>
            <br>
            <div class="flex justify-between mx-4 mt-4">
                <a href="success.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                <button type="submit"
                    class=" 
                text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">next</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>

</body>

</html>