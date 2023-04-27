{{-- 
@foreach($users as $user)
    {{ $user->id }}
@endforeach --}}

@json($users, JSON_PRETTY_PRINT);