<html>
    <head>
        <title>Ajker Deal | Login</title>
        <link rel="stylesheet" href="/css/auth.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                
                @if ($errors->any())
                <div class="alert-danger">
                    <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li class="alert">{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                <form id="company" class="input-group">
                    @csrf
                    <input type="email" name="email" class="input-field" placeholder="Email" autofocus>
                    
                    <input type="password" name="password" class="input-field" placeholder="Password">
                    
                    <button type="submit" class="submit-btn">Log In</button>
                </form>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                setTimeout(function(){
                    $('.alert-danger').fadeOut('slow');
                }, 5000);
            });
        </script>
    </body>
</html>