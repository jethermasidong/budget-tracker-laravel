<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kagu Budget Tracker</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <x-headertwo />

    <div class="flex items-center justify-center h-screen">
    <div class="bg-[#3674B5] p-10 ml-28 mr-28 pt-36 -translate-y-64 border-2 border-black rounded-lg">
        
        <div class="flex gap-4 -mt-28 justify-center">
            <div class="border-2 h-28 border-black rounded-lg w-56">
                <p class="text-white ml-5 mt-3 text-lg"> Budget </p>
                <p class="text-white ml-5 font-bold text-2xl">
                    ₱{{ number_format($budget->amount ?? 0, 2) }}
                </p>
                <p class="text-white ml-5 text-xs">
                    For the {{ \Carbon\Carbon::create()
                        ->month($budget->month)
                        ->year($budget->year)
                        ->format('F Y') }}
                </p>
            </div>

            <div class="border-2 h-28 border-black rounded-lg w-56">
                <p class="text-white ml-5 mt-3 text-lg"> Income </p>
            </div>

            <div class="border-2 h-28 border-black rounded-lg w-56">
                <p class="text-white ml-5 mt-3 text-lg"> Expense </p>
            </div>

        </div> 
    </div>
</div>

</body>
</html>