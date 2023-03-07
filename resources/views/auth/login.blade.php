<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <fieldset>
        <legend>Log in</legend>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="auth_form_remember">
                <label for="remember_me">
                    <span>{{ __('Remember me') }}</span>
                    <input id="remember_me" type="checkbox" name="remember">
                </label>
            </div>

            <div class="auth_form_login">
                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
        </form>
    </fieldset>

</x-guest-layout>
