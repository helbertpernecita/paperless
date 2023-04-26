@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col col-md-8 offset-md-2 mt-4">
        <div class="card">
            <div class="card-header items-center text-center py-2">
                <h5>
                    {{ Auth::user()->name }} <br>
                </h5>
                <span>
                    {{ Auth::user()->email }}
                </span>
            </div>
            <div class="card-body">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
    
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
    
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection