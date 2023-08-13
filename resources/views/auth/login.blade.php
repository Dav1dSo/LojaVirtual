<html>

<head>
    @include('includes.headerbootstrap')
</head>
<style>
    .container {
        margin-top: 10rem;
    }
</style>

<body>
    @include('includes.navbar')
    <div class="container col-lg-8">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 my-3">
                <h1 class="text-center"><a class="navbar-brand" href="/">FULL<strong class="text-info">Ecommerce</strong></a></h1>
                <p class="text-center lead">Faça seu login</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 w-50 mx-auto">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" required autofocus autocomplete="username" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 w-50 mx-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="remember_me" checked name="remember">
                        <label class="form-check-label" for="remember_me">Relembrar</label>
                    </div>
                </div>
                <div class="d-grid gap-2 col-1 mx-auto">
                    <input type="submit" class="btn btn-primary" type="button"></input>
            </form>
            <div class="col-lg-2"></div>
        </div>
        @include('includes.footer')
    </div>
</body>
@include('includes.scriptsbootstrap')

</html>


{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
