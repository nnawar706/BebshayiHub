<html>
    <head>
        <title>Bebshayi Hub | Login</title>
        <link rel="stylesheet" href="/css/auth.css">
    </head>
    <body>
        <div class="hero">
            
            <div class="form-box">
                <div class="alert-message">
                    @if($message = Session::get('msg'))
                    <ul class="errors">
                        <li class="alert">{{ $message }}</li>
                    </ul>
                    @endif
                </div>
                
                @if ($errors->any())
                <div class="alert-danger">
                    <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li class="alert">{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                
                <form action="{{ route('login') }}" method="post"  id="company" class="input-group">
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