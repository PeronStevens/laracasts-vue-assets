<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- CSS -->
        <link href="css/app.css" rel="stylesheet">
    </head>
    <body>
        <div id="app" class="container mx-auto">
            <header class="py-5 col-12" >
                <img src="https://assets.laracasts.com/images/logo.svg" alt="Laracasts">
            </header>
            <main class="flex" >
                <aside class="col-sm-3" >
                    <section class="mb-4" >
                        <h5 class="list-title" >The Brand</h5>
                        <ul>
                            <li><router-link link to="/" exact>Logos</router-link></li>
                            <li><router-link link to="/logo-symbol">Logo Symbol</router-link></li>
                            <li><router-link link to="/colors">Colors</router-link></li>
                            <li><router-link link to="/typography">Typography</router-link></li>                            
                        </ul>                        
                    </section>
                    <section>
                        <h5 class="list-title" >Doodles</h5>                        
                        <ul>
                            <li><router-link link to="/mascot">Mascot</router-link></li>
                            <li><router-link link to="/illustrations">Illustrations</router-link></li>
                            <li><router-link link to="/loaders">Loaders and Animations</router-link></li>
                            <li><router-link link to="/wallpapers">Wallpapers</router-link></li>                            
                        </ul>                        
                    </section>
                </aside>

                <div class="primary col-sm-9" >
                    <router-view></router-view>
                </div>
            </main>            
        </div>
    </body>
    <script src="js/app.js" ></script>
</html>