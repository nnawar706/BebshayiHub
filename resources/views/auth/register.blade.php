<html>
    <head>
        <title>Ajker Deal | Register</title>
        <link rel="stylesheet" href="/css/auth.css">
    </head>
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="company()">
                        Company
                    </button>
                    <button type="button" class="toggle-btn" onclick="investor()">
                        Investor
                    </button>
                </div>

                <form id="company" class="input-group">
                    <input type="text" class="input-field" placeholder="Email">
                    <input type="password" class="input-field" placeholder="Password">
                    <button type="submit" class="submit-btn">Register</button>
                </form>

                <form id="investor" class="input-group">
                    <input type="text" class="input-field" placeholder="Email">
                    <input type="text" class="input-field" placeholder="Email">
                    <input type="password" class="input-field" placeholder="Password">
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
            
        </div>

        <script>
            var x = document.getElementById("company");
            var y = document.getElementById("investor");
            var z = document.getElementById("btn");

            function company()
            {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }

            function investor()
            {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

        </script>
    </body>
</html>