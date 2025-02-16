<!DOCTYPE html>
<html>
@include('partials.head') <!-- This is for your header -->
<body>
@include('partials.navi') <!-- This is for your navigation menu -->

<div id="zawartosc">
    <h2>Logowanie</h2>
    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Pole email -->
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('auth.email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror">
        
        @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Pole hasło -->
    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('auth.password') }}</label>
        <input id="password" type="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('password') border-red-500 @enderror">
        
        @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <!-- Zapamiętaj mnie -->
    <div class="flex items-center">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
            <span class="ml-2 text-sm text-gray-600">{{ __('auth.remember_me') }}</span>
        </label>
    </div>

    <!-- Przycisk logowania -->
    <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md">
            {{ __('auth.login') }}
        </button>
    </div>

    <!-- Link do zapomnianego hasła -->
    <div class="mt-4">
        <a href="{{ route('password.request') }}" class="text-sm text-indigo-600 hover:text-indigo-500">{{ __('auth.forgot_password') }}</a>
    </div>
</form>


</div>

</body>
</html>
