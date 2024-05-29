<html lang="en">

<head>
    @include('components.head')
    <style>
        body {
            background: linear-gradient(to left, rgb(91, 187, 255, 0.7), white);
            font-family: Poppins, sans-serif;
            margin: 0;
            /* Remove default margin */
            overflow-x: hidden;
            /* Hide horizontal overflow */

        }

        .login-container {
            background: rgba(255, 255, 255, 0.693);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            /* Include padding and border widths in total width */
        }

        .login-title {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            font-weight: 700
        }

        .login-subtitle {
            font-size: 1rem;
            color: #3c3c3c;
            margin-bottom: 1.5rem;
        }

        .form-control::placeholder {
            font-size: 0.9rem;
            color: #aaa;
        }

        .form-group {
            position: relative;
        }

        .form-group .form-control {
            padding-left: 40px;
        }

        .form-group .form-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #005eab;
        }

        .login-footer {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
        }

        .signup-link {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    @include('components.navbar')


    <div class="row justify-content-center" style="padding-top: 80px;"> <!-- Added "px" for padding-top -->
        <div class="login-container">
            <div class="text-center mb-4">
                <div class="login-title">Login</div>
                <div class="login-subtitle">Masuk sekarang untuk mengetahui lebih banyak tentang RBS!</div>
            </div>

            <form action="{{ route('login.process') }}" method="POST"> <!-- Set the form action and method -->
                @csrf <!-- Include the CSRF token -->
                <div class="form-group">
                    <i class="fas fa-user form-icon"></i>
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>
                @error('Email')
                    <small>{{ $message }} </small>
                @enderror
                <div class="form-group mt-3">
                    <i class="fas fa-lock form-icon"></i>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                @error('password')
                    <small>{{ $message }} </small>
                @enderror
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
                </div>

                <div class="login-footer">
                    <div></div>
                    <a href="{{ route('signup') }}" class="signup-link">Sign up</a>
                </div>
            </form>
        </div>
    </div>


    @include('components.script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: '{{ $message }}',
            });
        </script>
    @endif

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: "error",
                title: '{{ $message }}',
            });
        </script>
    @endif
</body>

</html>
