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
            <x-form-field>
                <x-form-label for='title'>Title</x-form-label>
                <x-form-input name="title" id="title" placeholder="Happiness Engineer" required/>
            </x-form-field>

            <x-form-error name='title'/>

            <div class="mb-5">
                <x-form-label for="salary" >Salary</x-form-label>
                <x-form-input name="salary" id="salary" placeholder="$100,000 per year" required/>
            </div>

             <x-form-error name="salary"/>
                                   
            
        <div class="flex justify-center gap-4">
            <button
                class="hover:shadow-form  rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Save
            </button>
            <x-form-button>Cancel</x-form-button>
        </div>
    </div>

        </form>
    </div>
</div>

   
</x-layout>