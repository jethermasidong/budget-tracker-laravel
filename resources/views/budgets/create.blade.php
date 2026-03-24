<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Budget</title>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <x-input-error :messages="$errors->all()" class="mb-4" />

                <form action="{{ route('budgets.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block font-medium text-sm text-gray-700">Month (1-12)</label>
                        <input type="number" name="month" min="1" max="12" required 
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">Year</label>
                        <input type="number" name="year" value="{{ date('Y') }}" required
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">Amount</label>
                        <input type="number" step="0.01" name="amount" required
                            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                    </div>

                    <div class="flex items-center gap-4">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Save Budget
                        </button>
                        <a href="{{ route('budgets.index') }}" class="text-gray-600 hover:underline">Cancel</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>
</html>

    
