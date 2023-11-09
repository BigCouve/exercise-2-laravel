<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts show page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container">
    <x-navbar />

    <a href="/contact/create" class="d-flex justify-content-end my-5">
        <button type="button" class="btn btn-primary">Add Contact</button>
    </a>

    @if (empty($contacts))
        <x-no-results-found />
    @else
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr class="text-center">
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        <a href="#">
                            <button type="button" class="btn btn-primary">
                                <i class="fas fa-edit"></i> Editar
                            </button>
                        </a>
                        
                        <a href="#">
                            <button type="button" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Deletar
                            </button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>