<div class="p-4">
{{ $body }}
    <textarea    
        wire:model="body"
        
        class=" shadow appearance-none border rounded w-full py-2 
                px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"   
        rows="3"
        placeholder="Post Something"
        >

    </textarea>

        <div class="flex justify-end">
            <button
            wire:click="createPost"
            class=" mt-2 bg-blue-500 px-4 py-2 text-white hover:bg-blue-400 rounded-md">POST</button>

        </div>
</div>
