{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <div>
                    <a href="{{route('register')}}"
                        class="flex items-center justify-end mt-4">
                        <b>Register..</b>                       
                    </a>
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
            
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}


 <x-guest-layout>
  <div class="container py-16">
    <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
        <h2 class="text-2xl uppercase font-medium mb-1">
            LOGIN
        </h2>
        <p class="text-gray-600 mb-6 text-sm">
            Login if you are a returing customer
        </p>
        <x-jet-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="text-gray-600 mb-2 block">
                        Email Address <span class="text-primary">*</span>
                    </label>
                    <input type="email" name="email" class="input-box" placeholder="example@mail.com" :value="old('email')" required autofocus>
                </div>
                <div>
                    <label class="text-gray-600 mb-2 block">Password <span class="text-primary">*</span></label>
                    <input type="password" class="input-box" placeholder="type password" name="password" required autocomplete="current-password" >
                </div>
            </div>
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center">
                    <input type="checkbox" id="agreement" name="remember"
                        class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                        Remember Me
                    </label>
                </div>
                <a href="{{ route('password.request') }}" class="text-primary" >Forgot Password?</a>
            </div>
            <div class="mt-4">
                <button type="submit"
                    class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                    Login
                </button>
            </div>
        </form>

        <!-- login with social -->
        <div class="mt-6 flex justify-center relative">
            <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
            <div class="text-gray-600 uppercase px-3 bg-white relative z-10">
                OR LOGIN IN WITH
            </div>
        </div>
        <div class="mt-4 flex gap-4">
            <a href="#"
                class="block w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm">
                Facebook
            </a>
            <a href="#"
                class="block w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto font-medium text-sm">
                Google
            </a>
        </div>
        <!-- login with social end -->

        <p class="mt-4 text-gray-600 text-center">
            Don't have an account? <a href="{{route('register')}}" class="text-primary">Register Now
            </a>
        </p>
    </div>
</div>
</x-guest-layout>