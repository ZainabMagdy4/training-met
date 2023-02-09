<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>User Authentication</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Register</h4>
                <br>
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <form action="{{ route('register.action') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Username <span class="text-danger">*</span></label>
                        <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Phone_no <span class="text-danger">*</span></label>
                        <input class="form-control" type="integer" name="phone" value="{{ old('phone') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Age <span class="text-danger">*</span></label>
                        <input class="form-control" type="integer" name="age" value="{{ old('age') }}" />
                    </div>
                    <div class="mb-3">
                        <label>Sex <span class="text-danger">*</span></label>
                        <input class="form-control" type="radio" name = 'sex' value="male">Male
                        <input class="form-control" type="radio" name = 'sex' value="female">Female
                    </div>
                    <div class="mb-3">
                        <label>Password <span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    <div class="mb-3">
                        <label>Password Confirmation<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" name="password_confirm" />
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Register</button>
                        <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                    </div>
                    <a href="login">Already register?! Login Here.</a>
                </form>
            </div>
        </div>
    </div>
    
</body>
<script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js></script>
</html>