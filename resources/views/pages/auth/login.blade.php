{{-- TAMPILAN SEMENTARA --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Login Form</h2>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password:</label>
                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter password">
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" id="remember" name="remember" type="checkbox">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @if (session()->has('alert'))
        <script>
            alert(`{{ session('alert') }}`);
        </script>
    @endif
</body>

</html>

{{-- TAMPILAN SEMENTARA --}}
