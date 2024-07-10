<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking</title>
    <!-- Include CSS files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Add custom styles here */
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Bus Booking</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Search Form -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Search Buses</h2>
        <form action="" method="GET">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <select class="form-control mb-3" name="source" required>
                        <option value="" disabled selected>Select Source</option>
                        <!-- Populate with source locations -->
                        @foreach($sources as $source)
                            <option value="{{ $source->id }}">{{ $source->source_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-control mb-3" name="destination" required>
                        <option value="" disabled selected>Select Destination</option>
                        <!-- Populate with destination locations -->
                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}">{{ $destination->destination_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Available Buses -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Available Buses</h2>
        <div class="row">
            <!-- Display available buses -->
            @foreach($buses as $bus)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $bus->bus_name }}</h5>
                            <p class="card-text">Operator: {{ $bus->operator->operator_name }}</p>
                            <p class="card-text">Source: {{ $bus->source->source_name }}</p>
                            <p class="card-text">Destination: {{ $bus->destination->destination_name }}</p>
                            <a href="#" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2024 Bus Booking. All rights reserved.
    </footer>

    <!-- Include JavaScript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
