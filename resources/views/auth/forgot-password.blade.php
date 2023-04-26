@extends('layouts.guest')
@section('guest-content')

    <div class="mx-auto max-w-sm">
        <div class="card">
            <div class="card-header">
                <h5 class="items-center text-center py-2">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </h5>
            </div>
            <div class="card-body">
                    <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email/Username Address -->
                    <div>
                        <x-input-label for="input_type" :value="__('Email/Username')" />
                        <x-text-input id="input_type" class="block mt-1 w-full" type="text" name="input_type" :value="old('input_type')" autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
        </div>
        </div>  
    </div>

@endsection
