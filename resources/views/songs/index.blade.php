<x-default-layout title="Songs" section_title="Songs">
    <div class="flex">
        <a href="{{ route('songs.create') }}"
            class="bg-yellow-400 text-gray-900 px-4 py-2 rounded-lg hover:bg-yellow-500 transition duration-300">
            <div>+ Add New Song</div>
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-gray-300">
            <thead>
                <tr class="border-b border-gray-800 text-sm leading-normal">
                    <th class="px-4 py-2 text-left ">#</th>
                    <th class="px-4 py-2 text-left ">Artist</th>
                    <th class="px-4 py-2 text-center">Title</th>
                    <th class="px-4 py-2 text-center ">Audio File</th>
                    <th class="px-4 py-2 text-center">Genre</th>
                    <th class="px-4 py-2 text-center">Album</th>
                    <th class="px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-200">
                <tr class="border-b border-gray-800 hover:bg-gray-700">
                    <td class="px-4 py-2 text-left ">1</td>
                    <td class="px-4 py-2 text-left">Artist Name</td>
                    <td class="px-4 py-2 text-center">Song Title</td>
                    <td class="px-4 py-2 text-center">audio.mp3</td>
                    <td class="px-4 py-2 text-center">Pop</td>
                    <td class="px-4 py-2 text-center">Album Name</td>
                    <td class="px-4 py-2 flex justify-center gap-1">
                        <a href="{{ route('songs.show', 1) }}"
                        class="border border-blue-400 rounded-medium p-2 inline-block">
                            <i class="ph ph-eye block text-blue-400"></i>
                        </a>
                        <a href="{{ route('songs.edit', 1) }}"
                        class="border border-yellow-400 rounded-medium p-2 inline-block">
                            <i class="ph ph-note-pencil block text-yellow-200"></i>
                        </a>
                        <button class=" border border-red-500 p-2">
                            <i class="ph ph-trash block text-red-500"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-default-layout>