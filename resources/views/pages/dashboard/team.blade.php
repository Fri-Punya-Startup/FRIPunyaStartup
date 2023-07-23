<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>Dashboard Team</h1>

    @if (isset($teamName))
        <h2>Team Name: {{ $teamName }}</h2>

        @if (isset($startup))
            <h3>Startup: {{ $startup->startup_name }}</h3>
        @endif

        @if ($users->count() > 0)
            <h3>Team Members:</h3>
            <ul>
                @foreach ($users as $user)
                    <li>{{ $user }}</li>
                @endforeach
            </ul>
        @else
            <p>No team members found.</p>
        @endif
    @else
        <p>You don't have a team.</p>
        <h3>All Teams:</h3>
        <ul>
            @foreach ($team as $team)
                <li>{{ $team->name_team }}</li>
            @endforeach
        </ul>
        <form action="" method="post">
            @csrf
            <label for="Refferal">Refferal</label>
            <input type="text" name="refferal" id="refferal">
            <button type="submit"> Join Now </button>
        </form>
    @endif
</body>
</html>
