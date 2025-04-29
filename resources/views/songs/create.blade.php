<x-default-layout title="Add New Song" section_title="Add New Song">
    <div class="py-10">
        <div class="max-w-2xl mx-auto bg-gray-900 rounded-lg shadow-lg p-6">
            <form action="" method="POST" class="flex flex-col gap-4">
                @csrf
                @method("POST")
                <div class="grid gap-4">
                    <div class="text-white">
                        <input 
                            class="w-full px-4 py-2 border-2 rounded-md bg-gray-800 border-none focus:border-none focus:outline-none"
                            id="artist_name" type="text" name="artist_name" placeholder="Artist name">
                    </div>
                    <div class="flex flex-row gap-4">
                        <div class="text-white flex-1">
                            <input 
                                class="w-full px-4 py-2 border-2 rounded-md bg-gray-800 border-none focus:border-none focus:outline-none"
                                type="text" id="song_title" name="song_title" placeholder="Song title">
                        </div>
                        <div class="text-white flex-1">
                            <input 
                                class="w-full px-4 py-2 border-2 rounded-md bg-gray-800 border-none focus:border-none focus:outline-none"
                                type="text" id="audio_file" name="audio_file" placeholder="Audio name">
                        </div>
                    </div>
                    <div class="flex flex-row gap-4 text-gray-600">
                        <div class="flex-1">
                            <select 
                                class="w-full px-4 py-2 border-2 text-gray-400 rounded-md bg-gray-800 border-none focus:border-none focus:outline-none"
                                id="album_id" name="album_id">
                                <option value="" disabled selected>Select Albums</option>
                                <option value="2">Album 2</option>
                                <option value="3">Album 3</option>
                            </select>
                        </div>
                        <div class="flex-1">
                            <select 
                                class="w-full px-4 py-2 border-2 text-gray-400 rounded-md bg-gray-800 border-none focus:border-none focus:outline-none"
                                id="genre_id" name="genre_id">
                                <option value="" disabled selected>Select Albums</option>
                                <option value="2">Pop</option>
                                <option value="3">Metal</option>
                                <option value="3">EDM</option>
                                <option value="3">Rock</option>
                                <option value="3">Jpop</option>
                                <option value="3">Kpop</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex justify-end mt-4">
                <a href="{{ route('songs.index') }}" 
                    class="border-red-400 border-2 text-red-400 px-4 py-2 rounded-lg hover:border-red-600 hover:text-red-600 transition duration-300">
                    Cancel
                </a>
                <button 
                    class="bg-green-400 text-gray-900 px-4 py-2 rounded-lg hover:bg-yellow-500 transition duration-300">
                    Add
                </button>
            </div>
        </div>
    </div>
    

</x-default-layout>