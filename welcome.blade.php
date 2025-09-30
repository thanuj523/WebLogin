<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | My Application</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 60px;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 15px;
        }

        .header p {
            font-size: 1.125rem;
            color: #718096;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .auth-section {
            background: white;
            border-radius: 20px;
            padding: 50px;
            margin-bottom: 50px;
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .auth-content {
            text-align: center;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #e0e7ff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
        }

        .user-icon i {
            font-size: 2rem;
            color: #4f46e5;
        }

        .auth-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .auth-description {
            color: #718096;
            margin-bottom: 30px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .button-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 32px;
            border-radius: 12px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            min-width: 160px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .btn-secondary {
            background: #f7fafc;
            color: #4f46e5;
            border: 2px solid #4f46e5;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background: #f1f5f9;
        }

        .btn-gray {
            background: #f7fafc;
            color: #4a5568;
        }

        .btn-gray:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background: #edf2f7;
        }

        .footer {
            text-align: center;
            color: #a0aec0;
            padding-top: 30px;
            border-top: 1px solid #e2e8f0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .auth-section {
                padding: 30px 20px;
            }
            
            .auth-title {
                font-size: 1.5rem;
            }
            
            .button-group {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 280px;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.75rem;
            }
            
            .user-icon {
                width: 70px;
                height: 70px;
            }
            
            .user-icon i {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <h1>Welcome to Our Platform</h1>
            <p>A powerful, intuitive solution designed to streamline your workflow and boost productivity.</p>
        </header>

        <!-- Auth Section -->
        <section class="auth-section">
            <div class="auth-content">
                @auth
                    <!-- User is logged in -->
                    <div class="user-icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <h2 class="auth-title">Welcome back, {{ auth()->user()->name }}! </h2>
                    <p class="auth-description">You're successfully logged in. Ready to continue your work?</p>
                    <div class="button-group">
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">
                            <i class="fas fa-tachometer-alt"></i>
                            Go to Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-gray">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                @else
                    <!-- User is not logged in -->
                    <div class="user-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2 class="auth-title">Hello, Guest! </h2>
                    <p class="auth-description">Sign in to your account or create a new one to get started.</p>
                    <div class="button-group">
                        <a href="{{ route('login') }}" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i>
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-secondary">
                            <i class="fas fa-user-plus"></i>
                            Register
                        </a>
                    </div>
                @endauth
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; {{ date('Y') }} My Application. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>