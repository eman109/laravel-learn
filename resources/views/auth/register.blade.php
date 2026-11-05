<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <div class="flex items-center justify-center p-12">
    <div class="w-full" >

        <form method="POST" action="/register">
            @csrf

            <x-form-field>
                <x-form-label for='first-name'>First Name</x-form-label>
                <x-form-input name="first-name" id="first-name" required/>
            </x-form-field>
            <x-form-error name='first-name'/>

            <div class="mb-5">
                <x-form-label for="last-name" >Last Name</x-form-label>
                <x-form-input name="last-name" id="last-name" required/>
            </div>
             <x-form-error name="last-name"/>

            <div class="mb-5">
                <x-form-label for="email" >Email</x-form-label>
                <x-form-input name="email" id="email" type="email" required/>
            </div>
             <x-form-error name="email"/>

            <div class="mb-5">
                <x-form-label for="password" >Password</x-form-label>
                <x-form-input name="password" id="password" type="password" required/>
            </div>
             <x-form-error name="password"/>

            <div class="mb-5">
                <x-form-label for="password_confirmation" >Confirm Password</x-form-label>
                <x-form-input name="password_confirmation" id="password_confirmation" type="password_confirmation" required/>
            </div>
             <x-form-error name="password_confirmation"/>
                                   
            
        <div class="flex justify-center gap-4">
            <a href="/"
                class="hover:shadow-form  rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Cancel
            </a>
            <x-form-button>Register</x-form-button>
        </div>
    </div>

        </form>
    </div>
</div>

   
</x-layout>