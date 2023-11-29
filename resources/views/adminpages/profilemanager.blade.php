<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
</head>
<body>
    @include('header')
    <div class="content">
        <h1>Un-Approved users</h1>
    <table>
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>First Name</th>
                <th>Last Name</th>
                {{-- <th>Email</th> --}}
                <th>Phone</th>
                <th>DOB</th>
                <th>roleID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($unapprovedIndividuals as $data)
                <tr>
                    {{-- <td>{{ $data->individualID }}</td> --}}
                    <td>{{ $data->fName }}</td>
                    <td>{{ $data->lName }}</td>
                    {{-- <td>{{ $data->email }}</td> --}}
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->dob }}</td>
                    <td>{{ $data->roleID }}</td>
                    <td>
                        <form method="post" action="{{ route('updateStatus') }}" accept-charset="UTF-8">
                            @csrf
                            <input type="hidden" name="individualID" value="{{ $data->individualID }}">
                            <button type="submit">Approve</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Approved users</h1>
    <table>
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>First Name</th>
                <th>Last Name</th>
                {{-- <th>Email</th> --}}
                <th>Phone</th>
                <th>DOB</th>
                <th>roleID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($approvedIndividuals as $data)
                <tr>
                    {{-- <td>{{ $data->individualID }}</td> --}}
                    <td>{{ $data->fName }}</td>
                    <td>{{ $data->lName }}</td>
                    {{-- <td>{{ $data->email }}</td> --}}
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->dob }}</td>
                    <td>{{ $data->roleID }}</td>
                    <td>
                        <form method="post" action="{{ route('unapproveupdateStatus') }}" accept-charset="UTF-8">
                            @csrf
                            <input type="hidden" name="individualID" value="{{ $data->individualID }}">
                            <button type="submit">UnApprove</button>
                        </form>                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <style>
      
.content {
    margin-left: 250px; 
    padding: 20px;
}

    </style>
</body>
</html>
