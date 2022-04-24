<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- 'profile' is a method name that we created in a Client model--}}
    @forelse ($client->profile as $item)

        {{ $item['client_id'] }} <br>
        {{ $item['phone'] }} <br>

    @empty
        <p>No more profiles on this city</p>
    @endforelse


</body>
</html>