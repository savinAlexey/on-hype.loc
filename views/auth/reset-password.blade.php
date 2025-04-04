<x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}" class="needs-validation" novalidate>
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control"
                          type="email"
                          name="email"
                          :value="old('email', $request->email)"
                          required
                          autofocus
                          autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback d-block" />
        </div>

        <!-- Password -->
        <div class="mb-3">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control"
                          type="password"
                          name="password"
                          required
                          autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="invalid-feedback d-block" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="form-control"
                          type="password"
                          name="password_confirmation"
                          required
                          autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback d-block" />
        </div>

        <div class="d-flex justify-content-end">
            <x-primary-button class="btn btn-primary">
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

