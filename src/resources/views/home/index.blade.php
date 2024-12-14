<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    {{--@if(!empty($users))
        @foreach($users as $user)
            {{ $user['name'] }}<br>
        @endforeach
    @else
        <p>No users</p>
    @endif--}}

    {{--@forelse($users as $user)
        {{ $user['name'] }}<br>
    @empty
        <p>No users</p>
    @endforelse--}}

    {{--@for($i = 1; $i <= 10; $i++)
        @if($i == 5)
            @continue
        @endif
        {{ $i }}<br>
        @if($i == 8)
            @break
        @endif
    @endfor--}}

    @foreach($users as $user)
        {{ $loop->iteration }} - {{ $user['name'] }}<br>
    @endforeach

</body>
</html>