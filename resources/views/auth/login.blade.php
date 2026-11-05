<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>

    <div class="flex items-center justify-center p-12">
    <div class="w-full" >

        <form method="POST" action="/login">
            @csrf

            <div class="mb-5">
                <x-form-label for="email" >Email</x-form-label>
                <x-form-input name="email" id="email" type="email" :value="old('email')" required/>
            </div>
             <x-form-error name="email"/>

            <div class="mb-5">
                <x-form-label for="password" >Password</x-form-label>
                <x-form-input name="password" id="password" type="password" required/>
            </div>
             <x-form-error name="password"/>

                                   
            
        <div class="flex justify-center gap-4">
            <a href="/"
                class="hover:shadow-form  rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Cancel
            </a>
            <x-form-button>Log In</x-form-button>
        </div>
    </div>

        </form>
    </div>
</div>

   
</x-layout>