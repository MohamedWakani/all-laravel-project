<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Gestion de Formation</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Gestion de Formation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('institutions/index') }}">Institutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formations.create') }}">Create Formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('formations.index') }}">Saved Formations</a>
                </li>
                <!-- Add more navigation links as needed -->
            </ul>
        </div>
    </nav>
    
    <h1>Welcome to Gestion de Formation</h1>
    <!-- Add content and links to navigate to other parts of the application -->
</body>
</html>
