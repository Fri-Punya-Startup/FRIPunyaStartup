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
            <h2>Nama Tim: {{ $team->name_team }}</h2>
            <p>Owner: {{ $team->startup->owner->name }}</p>
            <p>Startup: {{ $team->startup->startup_name }}</p> <!-- Check the column name here -->
            <h3>Anggota Tim:</h3>
            <ul>
                @foreach ($team->members as $member)
                    <li>{{ $member->name }}</li>
                @endforeach
            </ul>
            <hr>
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
