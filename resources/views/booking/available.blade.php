<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Card with Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/booking.css">
</head>
<body>
    <div class="card booking-card shadow-sm">
        <div class="position-relative">
            <div class="badge bg-warning text-dark position-absolute top-0 end-0 m-3">Group Discount Available</div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div class="text-center">
                        <h5 class="mb-0">@yield('adult')</h5>
                        <small class="text-muted">/ Adult</small>
                    </div>
                    <div class="text-center">
                        <h5 class="mb-0">@yield('child')</h5>
                        <small class="text-muted">/ Child</small>
                    </div>
                </div>
                <button class="btn btn-primary w-100">Check Availability</button>
                <p class="text-center mt-3 mb-0 small">
                    Need help with booking? <a href="{{route('contactus')}}" class="text-decoration-none">Send Us A Message</a>
                </p>
            </div>
        </div>
    </div>
    <div class="input-group mt-4">
        <input type="text" class="form-control" placeholder="Search Here...">
        <button class="btn btn-primary" type="button">
            <i class="bi bi-search"></i>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
