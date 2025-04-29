<x-default-layout title="Track" section_title="Track Details">
    <div class="py-10">
        <div class="max-w-2xl mx-auto bg-gray-900 rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-semibold text-gray-200 mb-4">Track Details</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h3 class="text-gray-400">Artist</h3>
                    <p class="text-gray-300">Artist Name</p>
                </div>
                <div>
                    <h3 class="text-gray-400">Title</h3>
                    <p class="text-gray-300">Song Title</p>
                </div>
                <div>
                    <h3 class="text-gray-400">Audio File</h3>
                    <p class="text-gray-300">audio.mp3</p>
                </div>
                <div>
                    <h3 class="text-gray-400">Genre</h3>
                    <p class="text-gray-300">Pop</p>
                </div>
                <div>
                    <h3 class="text-gray-400">Album</h3>
                    <p class="text-gray-300">Album Name</p>
                </div>
            </div>
            <div class="mt-6 flex gap-2">
                <a href="{{ route('songs.edit', 1) }}"
                    class="bg-yellow-400 text-gray-900 px-4 py-2 rounded-lg hover:bg-yellow-500 transition duration-300">
                    Edit
                </a>
                {{-- <form action="{{ route('songs.destroy', 1) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-red-500 text-gray-100 px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                        Delete
                    </button>
                </form> --}}
            </div>
        </div>
    </div>
</x-default-layout>