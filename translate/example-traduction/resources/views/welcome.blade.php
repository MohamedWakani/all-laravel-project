<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Default light mode */
:root {
    --background-color: #ffffff;
    --text-color: #333333;
}

/* Dark mode */
.dark-mode {
    --background-color: #333333;
    --text-color: #ffffff;
}

body {
    background-color: var(--background-color);
    color: var(--text-color);
}

    </style>
</head>
<body>
    <a href="{{ route('languageConverter','ar') }}">Ar</a>
    <a href="{{ route('languageConverter','en') }}">En</a>
    <a href="{{ route('languageConverter','fr') }}">Fr</a>
    <button id="toggleModeButton">Toggle Dark Mode</button>
    <h1>{{__('private.med')}}</h1>
</body>
<script>
    const toggleModeButton = document.querySelector('#toggleModeButton');
    const body = document.body;

    toggleModeButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
    });
</script>

</html>