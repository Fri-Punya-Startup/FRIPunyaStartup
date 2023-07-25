<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota Tim</title>
</head>
<body>
    <h1>Daftar Anggota Tim</h1>

    @foreach ($data as $team)
        <h2>Tim: {{ $team['team_name'] }}</h2>
        <p>Nama Startup: {{ $team['startup_name'] }}</p>
        <p>{{ $team['description'] }}</p>

        
        <ul>
            @foreach ($team['anggota'] as $anggota)
                @if ($team['owner_name'] == $anggota->name)
                    <li>{{ $anggota->name }} (Ketua)</li>
                @else
                    <li>{{ $anggota->name }}</li>
                @endif
            @endforeach
        </ul>
    @endforeach
</body>
</html>