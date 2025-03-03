<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopstat UI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-md rounded-lg p-6 w-full max-w-4xl">
    <div class="flex items-center mb-4 justify-between">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/40" alt="User Profile">
            </div>
            <div class="ml-3">
                <h2 class="text-lg font-semibold text-black">Wildan</h2>
                <p class="text-gray-500">Creative Director</p>
                <p class="text-gray-500">Work Location: [Specify Location]</p> <!-- Add specific work location here -->
            </div>
        </div>
        <div class="flex-shrink-0 ml-3">
            <img class="h-12" src="https://via.placeholder.com/100x40" alt="Logo"> <!-- Logo goes here -->
        </div>
    </div>

    <div class="mb-4">
        <input type="text" placeholder="Search" class="border border-gray-300 rounded-md p-2 w-full" />
    </div>

    <div class="bg-red-50 p-4 rounded-lg mb-4">
        <h3 class="text-xl font-bold text-black mb-2">December Report</h3>
        <p class="text-gray-700 mb-4">Retrieve December report, analyze key data for informed strategic decisions.</p>
        <div class="flex flex-col sm:flex-row justify-between">
            <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 mb-2 sm:mb-0">Analyze This</button>
            <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Download</button>
        </div>
    </div>

    <div class="overflow-x-auto px-2">
        <table class="min-w-full bg-white border border-black rounded-lg">
            <thead>
            <tr class="bg-red-200 text-black text-xs">
                <th class="py-2 px-3 border border-black">Select</th>
                <th class="py-2 px-3 border border-black">Employee ID</th>
                <th class="py-2 px-3 border border-black">Photo</th>
                <th class="py-2 px-3 border border-black">Month</th>
                <th class="py-2 px-3 border border-black">Name</th>
                <th class="py-2 px-3 border border-black">Job Title</th>
            </tr>
            </thead>
            <tbody>
            <tr class="hover:bg-red-100 text-sm">
                <td class="py-2 px-3 border border-black">
                    <input type="checkbox">
                </td>
                <td class="py-2 px-3 border border-black">001</td>
                <td class="py-2 px-3 border border-black">
                    <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/40" alt="Employee">
                </td>
                <td class="py-2 px-3 border border-black">Dec</td>
                <td class="py-2 px-3 border border-black">John Doe</td>
                <td class="py-2 px-3 border border-black">Marketing Manager</td>
            </tr>
            <tr class="hover:bg-red-100 text-sm">
                <td class="py-2 px-3 border border-black">
                    <input type="checkbox">
                </td>
                <td class="py-2 px-3 border border-black">002</td>
                <td class="py-2 px-3 border border-black">
                    <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/40" alt="Employee">
                </td>
                <td class="py-2 px-3 border border-black">Dec</td>
                <td class="py-2 px-3 border border-black">Jane Smith</td>
                <td class="py-2 px-3 border border-black">Software Engineer</td>
            </tr>
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
