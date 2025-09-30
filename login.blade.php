<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | My Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            line-height: 1.6;
        }

        /* Navigation */
        .navbar {
            background: #1f2937;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .home-btn {
            color: white;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 16px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s;
        }

        .home-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 80px auto 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 80px);
        }

        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 500px;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 30px;
            border-bottom: none;
        }

        .card-header h3 {
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .card-body {
            padding: 40px;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-group-icon {
            position: absolute;
            left: 15px;
            color: #6b7280;
            z-index: 2;
        }

        .form-control {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        /* Alert Styles */
        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .alert-danger {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
        }

        .alert-heading {
            font-weight: 600;
            margin-bottom: 10px;
        }

        .alert ul {
            list-style: none;
            padding-left: 0;
        }

        .alert li {
            padding: 5px 0;
        }

        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 25px;
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-success {
            background: #10b981;
            color: white;
        }

        .btn-outline-success {
            background: transparent;
            color: #10b981;
            border: 2px solid #10b981;
        }

        .btn-outline-success:hover {
            background: #10b981;
            color: white;
        }

        /* Link Styles */
        .register-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .register-link:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .text-center {
            text-align: center;
        }

        .mt-4 {
            margin-top: 25px;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .modal.show {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 15px;
            max-width: 400px;
            width: 90%;
            margin: 20px;
            overflow: hidden;
        }

        .modal-header {
            background: #10b981;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-header h5 {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.2rem;
        }

        .close-btn {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-body {
            padding: 30px;
            text-align: center;
        }

        .modal-icon {
            font-size: 3rem;
            color: #10b981;
            margin-bottom: 20px;
        }

        .modal-body h4 {
            margin-bottom: 15px;
            color: #1f2937;
        }

        .modal-body p {
            color: #6b7280;
            margin-bottom: 25px;
        }

        .btn-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-container {
                flex-direction: column;
                gap: 15px;
                padding: 15px 20px;
            }

            .main-content {
                margin-top: 120px;
                padding: 20px 15px;
            }

            .card-body {
                padding: 30px 20px;
            }

            .card-header {
                padding: 25px 20px;
            }

            .btn-group {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .navbar-brand {
                font-size: 1.3rem;
            }

            .card-header h3 {
                font-size: 1.3rem;
            }

            .form-control {
                padding: 12px 12px 12px 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-rocket"></i>MyApp
            </a>
            <div class="navbar-nav">
                <a class="home-btn" href="{{ url('/') }}">
                    <i class="fas fa-home"></i>Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        <div class="login-card">
            <div class="card-header">
                <h3><i class="fas fa-sign-in-alt"></i>Welcome Back</h3>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <h6 class="alert-heading">Please fix the following errors:</h6>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <div class="input-group">
                            <i class="fas fa-envelope input-group-icon"></i>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <i class="fas fa-lock input-group-icon"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt"></i>Login to Your Account
                    </button>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-0">Don't have an account? 
                        <a href="{{ route('register') }}" class="register-link">
                            <i class="fas fa-user-plus"></i>Register here
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- Success Modal -->
    <div class="modal" id="successModal">
        <div class="modal-content">
            <div class="modal-header">
                <h5><i class="fas fa-check-circle"></i>Login Successful</h5>
                <button class="close-btn" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <i class="fas fa-user-check modal-icon"></i>
                <h4>Welcome back!</h4>
                <p>You have successfully logged in to your account.</p>
                <div class="btn-group">
                    <a href="{{ url('/') }}" class="btn btn-success">
                        <i class="fas fa-home"></i>Go to Home Page
                    </a>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-success">
                        <i class="fas fa-tachometer-alt"></i>Go to Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showModal() {
            document.getElementById('successModal').classList.add('show');
        }

        function closeModal() {
            document.getElementById('successModal').classList.remove('show');
        }

        // Close modal when clicking outside
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Show modal if login was successful
        @if(session('status'))
        document.addEventListener('DOMContentLoaded', function() {
            showModal();
        });
        @endif
    </script>
</body>
</html>