<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!--First Name -->
        <div>
            <x-input-label for="firstname" :value="__('First Name')" />

            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" required />
        </div>
        <!--Last Name -->
        <div>
            <x-input-label for="lastname" :value="__('Last Name')" />

            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" required />
        </div>
        <!-- Phonenum -->
        <div>
            <x-input-label for="phonenum" :value="__('Phone num')" />

            <x-text-input id="phonenum" class="block mt-1 w-full" type="text" name="phonenum" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select name="role" id="role">
                <option value="A">Admin</option>
                <option value="U">User</option>
            </select>
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
