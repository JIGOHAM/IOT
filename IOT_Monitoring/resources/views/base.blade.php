<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monitoring Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background color */
            overflow-y: hidden;
        }

        .navbar {
            background-color: #343a40; /* Dark background color */
        }

        .navbar-brand {
            color: #ffffff; /* White text color */
            font-weight: bold; /* Bold font weight */
        }

        .sidebar {
            background-color: #6c757d; /* Dark sidebar background color */
            color: #ffffff; /* White text color */
            height: 100vh;
        }

        .sidebar-link {
            color: #ffffff; /* White text color */
        }

        .sidebar-link:hover {
            color: #ffffff; /* White text color on hover */
            background-color: #495057; /* Darker background color on hover */
        }

        .content {
            padding: 20px;
        }

        .card {
            background-color: #ffffff; /* White card background color */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1); /* Box shadow for card */
        }

        .card-header {
            background-color: #6c757d; /* Dark card header background color */
            color: #ffffff; /* White text color */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Monitoring Dashboard</a>
        </div>
        <form class="d-flex" role="search" style="margin-right: 2%">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a class="btn btn-outline-primary" href="/login">Connexion</a>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 sidebar">
                <ul class="nav flex-column mt-3">
                    <li class="nav-item">
                        <a class="nav-link sidebar-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebar-link" href="#">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sidebar-link" href="#">Analytics</a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9 content">
                @yield('content')
            </div>
        </div>
    </div>

</body>
@yield('scripts')
</html>
