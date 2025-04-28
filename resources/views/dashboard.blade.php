<x-default-layout title="Dashboard" section_title="Dashboard">
    <div class="flex flex-col gap-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-200">Total Songs</h2>
                <p class="text-gray-400">150</p>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-200">Total Albums</h2>
                <p class="text-gray-400">30</p>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-gray-200">Total Genres</h2>
                <p class="text-gray-400">10</p>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-3 gap 4">
        <div class="col-span-3 overflow-x-auto">
            <table class="min-w-full text-left text-gray-200">
                <thead>
                    <tr class="border-b border-gray-800 text-sm leading-normal">
                        <th class="px-4 py-2 border-b border-gray-700">#</th>
                        <th class="px-4 py-2 border-b border-gray-700">Genres</th>
                        <th class="px-4 py-2 border-b border-gray-700">Total Songs</th>
                        <th class="px-4 py-2 border-b border-gray-700">Total Albums</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-700">1</td>
                        <td class="px-4 py-2 border-b border-gray-700">Pop</td>
                        <td class="px-4 py-2 border-b border-gray-700">50</td>
                        <td class="px-4 py-2 border-b border-gray-700">10</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-700">2</td>
                        <td class="px-4 py-2 border-b border-gray-700">Rock</td>
                        <td class="px-4 py-2 border-b border-gray-700">40</td>
                        <td class="px-4 py-2 border-b border-gray-700">8</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-700">3</td>
                        <td class="px-4 py-2 border-b border-gray-700">Jazz</td>
                        <td class="px-4 py-2 border-b border-gray-700">30</td>
                        <td class="px-4 py-2 border-b border-gray-700">5</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 border-b border-gray-700">4</td>
                        <td class="px-4 py-2 border-b border-gray-700">Classical</td>
                        <td class="px-4 py-2 border-b border-gray-700">20</td>
                        <td class="px-4 py-2 border-b border-gray-700">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>