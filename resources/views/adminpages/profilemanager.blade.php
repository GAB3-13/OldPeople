<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    {{-- @include('header') --}}

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <!-- Add more columns as needed -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($individual as $data)
                <tr>
                    <td>{{ $data->individualId }}</td>
                    <td>{{ $data->fname }}</td>
                    <!-- Display other columns -->
                    <td>
                        <form method="post" action="{{ route('updateStatus', $data->id) }}">
                            @csrf
                            <button type="submit">Approve</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
