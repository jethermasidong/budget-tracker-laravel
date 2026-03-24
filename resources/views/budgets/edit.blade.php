<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            
            <x-input-error :messages="$errors->all()" class="mb-4" />

            <form action="{{ route('budgets.update', $budget) }}" method="POST" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label class="block font-medium text-sm text-gray-700">Month (1-12)</label>
                    <input type="number" name="month" min="1" max="12" value="{{ $budget->month }}" required 
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700">Year</label>
                    <input type="number" name="year" value="{{ $budget->year }}" required
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                </div>

                <div>
                    <label class="block font-medium text-sm text-gray-700">Amount</label>
                    <input type="number" step="0.01" name="amount" value="{{ $budget->amount }}" required
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
                        Update Budget
                    </button>
                    <a href="{{ route('budgets.index') }}" class="text-gray-600 hover:underline">Cancel</a>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>