<x-layout>
    <x-slot:heading>
        Create Job

    </x-slot:heading>

    <div class="flex items-center justify-center p-12">
    <div class="w-full" >
        <form method="POST" action="/jobs">
            @csrf

            <div class="mb-5">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new Job</h2>
                <h2 class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you</h2>
                
            </div>
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Title
                </label>
                <input type="text" name="title" id="title" placeholder="Happiness Engineer"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                    Salary
                </label>
                <input type="text" name="salary" id="salary" placeholder="$100,000 per year"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
                   
            
        <div class="flex justify-center gap-4">
            <button
                class="hover:shadow-form  rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Save
            </button>
            <button
                class="hover:shadow-form  rounded-md bg-[#35f0be] py-3 px-8 text-center text-base font-semibold text-black outline-none">
                Cancel
            </button>
        </div>
    </div>
        </form>
    </div>
</div>

   
</x-layout>