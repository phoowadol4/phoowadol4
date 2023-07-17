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
    <div class="flex items-center justify-center h-screen">
        <form method="POST" action="process.php" class="bg-white shadow-md rounded-md p-20">
            <h1 class="text-2xl font-bold text-center ">แบบประเมินความพึงพอใจ</h1>
            <br>
            <h1 class="text-md">ส่วนที่ 3 ข้อเสนอแนะ</h1>
            <div >
                <textarea id="comments" name="comments"
                    class=" block p-6 w-full text-md text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ข้อเสนอแนะ.."></textarea>
                <div class="flex justify-between mx-4 mt-4">
                    <a href="form3.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">back</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 
                    ">submit</button>
                </div>
        </form>
    </div>
</body>

</html>