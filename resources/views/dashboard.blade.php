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
    <div class="bg-white p-10 ml-28 mr-28 pt-36 -translate-y-64 border-2 border-black rounded-lg">
        
        <div class="flex gap-4 -mt-28 justify-center">
            <div class="border-2 h-36 border-black rounded-lg w-56">
                <div class="flex col-auto mt-5 ml-5 gap-1 mb-3">
                    <x-heroicon-o-wallet class="w-6 h-6 text-[#3674B5]"/>
                    <p class="text-black text-lg"> Budget </p>
                </div>
                <div class="mb-5">
                    <p class="text-black ml-5 font-bold text-2xl">
                        ₱{{ number_format($budget->amount ?? 0, 2) }}
                    </p>
                    <p class="text-text black ml-5 text-xs">
                        For the month of {{ \Carbon\Carbon::create()
                            ->month($budget->month)
                            ->year($budget->year)
                            ->format('F Y') }}
                    </p>
                </div>
            </div>

            <div class="border-2 h-36 border-black rounded-lg w-56">
                <div class="flex col-auto  mt-5 ml-5 gap-1 ">
                    <x-heroicon-o-banknotes class="w-6 h-6 text-[#3674B5]"/>
                    <p class="text-black text-lg"> Income </p>
                </div>
            </div>

            <div class="border-2 h-36 border-black rounded-lg w-56">
                <div class="flex col-auto  mt-5 ml-5 gap-1 ">
                    <x-heroicon-o-credit-card class="w-6 h-6 text-[#3674B5]"/>
                    <p class="text-black text-lg"> Expense </p>
                </div>
            </div>

        </div> 
    </div>
</div>

</body>
</html>