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
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

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

            <div class="input-field">
                <input id="password" type="password" class="pswrd @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>

            <div class="input-field">

                <input id="password-confirm" type="password" class="pswrd" name="password_confirmation" required
                    autocomplete="new-password">

                {{-- <span class="show">SHOW</span> --}}
                <label>Confirm Password</label>
            </div>


            <div class="button">
                <div class="inner"></div>
                <button>Reset Password</button>
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
