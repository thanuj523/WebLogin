<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .dashboard-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-bottom: none;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.3rem;
        }
        .btn-logout {
            color: rgba(255,255,255,0.8);
            border: 1px solid rgba(255,255,255,0.3);
            border-radius: 6px;
            padding: 6px 12px;
            transition: all 0.3s;
        }
        .btn-logout:hover {
            color: white;
            background: rgba(255,255,255,0.1);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- ✅ FIXED: Correct link to welcome page -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-rocket me-2"></i>MyApp
            </a>
            <div class="navbar-nav ms-auto">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-logout">
                        <i class="fas fa-sign-out-alt me-1"></i>Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card dashboard-card">
                    <div class="card-header">
                        <h4 class="mb-0"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <div class="w-20 h-20 rounded-circle bg-indigo-100 d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="fas fa-user-check text-indigo-600 fa-2x"></i>
                            </div>
                            <h3>Welcome back, {{ Auth::user()->name }}! 👋</h3>
                            <p class="text-muted">You are successfully logged in to your account.</p>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="fas fa-envelope text-primary fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Email Address</h6>
                                        <p class="mb-0 text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center p-3 bg-light rounded">
                                    <i class="fas fa-calendar-check text-success fa-lg me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Member Since</h6>
                                        <p class="mb-0 text-muted">{{ Auth::user()->created_at->format('F j, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Click on <strong>MyApp</strong> in the navigation bar to return to the welcome page.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>