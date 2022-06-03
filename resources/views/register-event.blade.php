<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin-bottom: 10px;
            display: block;
        }
    </style>
</head>
<body>
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
    <h2>{{ $event->title }}</h2>
    <form 
    method="POST" 
    action="https://script.google.com/macros/s/AKfycbyJIaetIHk5vIEuftIYerNsr7UW4RaViBps7qDIE7PR-AY3G1gsQdHYcRXbbxTaQs6x3A/exec"
    >
  <input name="Email" type="email" placeholder="Email" required>
  <input name="Name" type="text" placeholder="Name" required>
  <button type="submit">Send</button>
</form>
</body>
</html>