<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>REGISTER</title>
    <link rel="stylesheet" href="{{ asset('assets/login/css/style_register.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="container">
        <header>REGISTER</header>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-field">
                <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror"
                    name="fname" value="{{ old('fname') }}" required autocomplete="fname">

                @error('fname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>First Name</label>

            </div>

            <div class="input-field">
                <input id="lname" type="lname" class="form-control @error('lname') is-invalid @enderror"
                    name="lname" value="{{ old('lname') }}" required autocomplete="lname">

                @error('lname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>Last Name</label>
            </div>

            <div class="input-field">
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                    name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>Phone</label>
            </div>

            <div class="input-field">
                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}" required autocomplete="address">

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>Address</label>
            </div>

            <div class="input-field">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label>Email</label>
            </div>
            <div class="input-field">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="show">SHOW</span>
                <label>Password</label>
            </div>

            <div class="input-field">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                {{-- <span class="show">SHOW</span> --}}
                <label>Password Confirm</label>
            </div>
            {{-- <div class="col-md-12 mt-2">
                <label class="mb-2">Choose Image :</label>
                <input type="file" class="form-control" name="image"></br>
            </div> --}}

            <input type="file" class="form-control" name="image" hidden>

            <div class="button">
                <div class="inner"></div>
                <button>REGISTER</button>
            </div>

        </form>

        <div class="signup">
            Not a member? <a href="#">Signup now</a>
        </div>
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
