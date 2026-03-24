<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Overview</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">

   
    <x-headertwo />

    <main class="py-12 mt-20">
         <a href="{{ route('budgets.create') }}" class="inline-flex items-center mb-5 ml-7 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700">
            + Add New Budget
        </a>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if (session('success'))
                <div class="mb-6 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 shadow-sm">
                    <p class="font-bold">Success</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Month</th>
                                    <th scope="col" class="px-6 py-3">Year</th>
                                    <th scope="col" class="px-6 py-3">Amount</th>
                                    <th scope="col" class="px-6 py-3">Date Created</th>
                                    <th scope="col" class="px-6 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($budgets as $budget)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ date("F", mktime(0, 0, 0, $budget->month, 10)) }}
                                        </th>
                                        <td class="px-6 py-4">{{ $budget->year }}</td>
                                        <td class="px-6 py-4 font-semibold text-green-600">
                                            ${{ number_format($budget->amount, 2) }}
                                        </td>
                                        <td class="px-6 py-4 text-xs text-gray-400">
                                            {{ $budget->created_at->format('M d, Y') }}
                                        </td>
                                        <td class="px-6 py-4 text-right space-x-3">
                                            <a href="{{ route('budgets.edit', $budget) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                            <form action="{{ route('budgets.destroy', $budget) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="font-medium text-red-600 hover:underline" onclick="return confirm('Delete this?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="bg-white border-b">
                                        <td colspan="5" class="px-6 py-10 text-center text-gray-500 italic">No records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-6">
                        {{ $budgets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>