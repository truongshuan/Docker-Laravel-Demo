<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>
<body>
    <h1>Hello</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Crated At</th>
        </tr>
        <tbody>
            @foreach($data as $item)
            <tr>
                <th> {{ $item->name}}</th>
                <th>
                    {{ $item->status == 1 ? 'Active' : 'Disable'}}
                </th>
                <th>{{ $item->created_at->format('d/m/Y')}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
