<!DOCTYPE html>
<html>
@include('partials.head') <!-- This is for your header -->
<body>
@include('partials.navi') <!-- This is for your navigation menu -->

<div id="zawartosc">
    <h2>Rejestracja</h2>
    <form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('auth.name') }}</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('name') border-red-500 @enderror">
        
        @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('auth.email') }}</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('email') border-red-500 @enderror">
        
        @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('auth.password') }}</label>
        <input id="password" type="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm @error('password') border-red-500 @enderror">
        
        @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('auth.confirm_password') }}</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
    </div>

    <div>
        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md">
            {{ __('auth.register') }}
        </button>
    </div>
</form>


</div>

</body>
</html>
