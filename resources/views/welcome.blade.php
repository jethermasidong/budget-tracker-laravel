<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://api.fontshare.com/v2/css?f[]=sentient@400,700&display=swap" rel="stylesheet">
    
    <title>Kagu | Budget Tracker</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col font-sentient">

    <x-header />

    <main class="grow flex items-center justify-center p-4">
        <div class="bg-white p-8 rounded-2xl shadow-xl border-t-4 border-blue-500 max-w-md w-full">
            <h1 class="text-3xl font-bold text-gray-800">
                Kagu <span class="text-blue-500 ">Budget</span>
            </h1>
            <p class="mt-4 text-gray-600">
                If this text looks like a clean serif font, 
                <strong class="text-blue-600 underline">Sentient is active!</strong>
            </p>
        </div>
    </main>

</body>
</html>