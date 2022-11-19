<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <header class="header_reset">Reset Password</header>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="input-field">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>Email Address</label>
            </div>


            <div class="button">
                <div class="inner"></div>
                <button>Send Password Reset Link</button>
            </div>

        </form>

    </div>

    <script>
        var input = document.querySelector('.pswrd');
        var show = document.querySelector('.show');
        show.addEventListener('click', active);

        function active() {
            if (input.type === "password") {
                input.type = "text";
                show.style.color = "#1DA1F2";
                show.textContent = "HIDE";
            } else {
                input.type = "password";
                show.textContent = "SHOW";
                show.style.color = "#111";
            }
        }
    </script>

</body>

</html>
