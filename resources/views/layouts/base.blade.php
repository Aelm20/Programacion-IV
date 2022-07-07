<!DOCTYPE html>
    <html>

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <title> MaaS</title>
                <link rel="stylesheet"  href="{!! asset('css/app.css') !!}" >

            </head>

      <body>
            <!---------Encabezado-------->
            <header>
                <a href="{{url('/welcome')}}">
                <h2> Monitoring as a Services </h2>
                </a>
                    <nav class="menu">
                        <ul>
                            <a href="#" >Nuestro Equipo</a>
                            <a href="#">Servicios</a>
                            <a href="#">Registrate</a>

                        </ul>
                    </nav>
            </header>

            <!--------contenido---------->
            <main class="container">
                @yield('content')
            </main>

            <!--------Pie de pagina------->
            <Footer>
                <div class="footer-content">
                 <h3>InformticsGuards SpA</h3>
                    <nav>
                         <ul>
                             <a href="{{url('/contact')}}" > Contáctanos </a><br/>
                             <a href="{{url('/about')}}" >Acerca de nosotros</a>
                        </ul>
                    </nav>
                <p>&copy;2022 . designed by Alexaris Luna</p>
                </div>
            </Footer>
        </body>
</html>
