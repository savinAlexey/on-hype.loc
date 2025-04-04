<x-guest-layout>
    <div class="alert alert-info mb-4 small">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autofocus />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback d-block" />
        </div>

        <div class="d-flex justify-content-end mt-4">
            <x-primary-button class="btn btn-primary">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

