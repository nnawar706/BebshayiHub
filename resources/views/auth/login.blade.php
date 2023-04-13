<html>
    <head>
        <title>Ajker Deal | Login</title>
        <link rel="stylesheet" href="/css/auth.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <form id="company" class="input-group">
                    <input type="email" name="email" class="input-field" placeholder="Email" autofocus>
                    
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                    
                    <input type="password" name="password" class="input-field" placeholder="Password">
                    
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
            </div>
        </div>
    </body>
</html>