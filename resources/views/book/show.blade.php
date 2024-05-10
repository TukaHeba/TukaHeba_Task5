<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    @if (Auth::check() && Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("users.index")}}">Users</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route("books.index")}}">Books</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Classifications
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route("main-classifications.index")}}">Main Classifications</a></li>
                            <li><a class="dropdown-item" href="{{route("sub-classifications.index")}}">Sub Classifications</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            @if (Auth::check())
            <div class="d-flex">
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-light">Logout</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
    </nav>
    <div>
        @if (Auth::check() && Auth::user()->role == 'admin')
        <td><a href='{{route("books.create")}}' class="btn btn-primary">Add a New Book</a></td>
        @endif
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Publisher</th>
                    <th scope="col">Price</th>
                    <th scope="col">Main Classification</th>
                    <th scope="col">Sub Classification</th>
                    <th scope="col">Favorites?</th>
                    <th scope="col">Rates</th>
                    <th scope="col">Review</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publisher }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->mainClassification->name }}</td>
                    <td>{{ $book->subClassification->name }}</td>
                    <td>{{ $book->favorites ? 'Yes' : 'No' }}</td>
                    <td>{{ $book->rates->rate }}</td>
                    <td>{{ $book->reviews->review }}</td>>
                    <!-- @if (Auth::check() && Auth::user()->role == 'admin')
                    <td><a href='{{route("sub-classifications.edit", $book->id)}}' class="btn btn-outline-warning">EDIT</a></td>
                    <td>
                        <form action="{{ route('sub-classifications.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method ('DELETE')
                            <button type="submit" class="btn btn-outline-danger">DELETE</button>
                        </form>
                    </td>
                    @endif -->
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>