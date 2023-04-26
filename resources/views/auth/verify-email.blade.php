@extends('layouts.guest')
@section('guest-content')

    <div class="mx-auto max-w-sm">
        <div class="card">
            <div class="card-header">
                <div class="py-3 text-sm text-gray-600">
                    <strong>Thanks for signing up! </strong> <br><br>
                    <div class="mb-3">
                        {{ __('Before getting started, could you verify your email address by clicking on the link we just emailed to you?') }}
                        <div class="text-center py-2">
                            <a href="https://mail.google.com" class="btn btn-sm btn-primary">{{ __('Check Your Email') }}</a>
                        </div>
                    </div>
                    
                    {{ __('If you didn\'t receive the email, we will gladly send you another.') }} <br>
                    @if (session('status') == 'verification-link-sent')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div>
                            <button type="submit" class="text-primary float-right">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </div>
                    </form>
                    
                </div>
            </div>
           

            <div class="py-1 text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="underline text-sm text-red-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
    
@endsection
