<x-layout>
    <x-slot:heading>
        Edit Job {{$job->title}}

    </x-slot:heading>

    <div class="flex items-center justify-center p-12">
    <div class="w-full" >
        <form method="POST" action="/jobs/{{$job->id}}">
            @csrf
            @method('PATCH')
            {{-- //i didnt mean post i mean patch because browsers dont support patch  --}}

            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Title
                </label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    placeholder="Happiness Engineer"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                    required
                    value="{{$job->title}}"
                    >
            </div>

            @error('title')
                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
            @enderror


            <div class="mb-5">
                <label for="salary" class="mb-3 block text-base font-medium text-[#07074D]">
                    Salary
                </label>
                <input 
                    type="text" 
                    name="salary" 
                    id="salary" 
                    placeholder="$100,000 per year"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" 
                    required
                    value="{{$job->salary}}"
                    >
            </div>

             @error('salary')
                <p class="text-xs text-red-500 font-semibold">{{$message}}</p>
            @enderror
                                   
            
        <div class="flex justify-between gap-4">
            <div class="flex items-center">
                <button form="delete-form"
                    class="hover:shadow-form  rounded-md bg-[#c62b00] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Delete
                </button>

            </div>

            <div class="flex items-center gap-x-6">
                <button
                    class="hover:shadow-form  rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    update
                </button>

                <div>
                    <a href="/jobs/{{$job->id}}"
                        class="hover:shadow-form  rounded-md bg-[#35f0be] py-3 px-8 text-center text-base font-semibold text-black outline-none">
                        Cancel
                    </a>
                </div>
                
            </div>
        </div>
    </div>

        </form>
    </div>

    <form method="POST" action="/jobs/{{$job->id}}" class="hidden" id='delete-form'>
        @csrf
        @method('DELETE')
        {{-- //since i wamt a different form and different function to handle that button i will use another form and hidden attrinute cus i only want to use it inside a specific button and thats it   --}}


    </form>
</div>

   
</x-layout>