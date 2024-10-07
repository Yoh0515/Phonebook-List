<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1 class="text-[50px] text-center p-12">Phonebook Contact</h1>
    <div class="flex justify-center items-center">
        <table class="`w-full `text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-black" >
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Address</th>
                    <th scope="col" class="px-6 py-3">Contact</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">1</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Rommel Liad</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Makiwalo</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">123241413</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <i class="fa-regular fa-pen-to-square pr-[10px] text-[15px] cursor-pointer"></i>
                        <i class="fa-solid fa-trash text-[15px] cursor-pointer"></i>
                    </td>
                </tr>
                <tr class="border-b">
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">2</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Rommel Figura</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Makiwalo Modnragon</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">123241413</td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <i class="fa-regular fa-pen-to-square pr-[10px] text-[15px] cursor-pointer"></i>
                        <i class="fa-solid fa-trash text-[15px] cursor-pointer"></i>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>