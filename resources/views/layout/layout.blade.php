<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8">
            <title> InformaticsGuards SpA</title>
            <link rel="stylesheet" href="file:///C:/laragon/www/programacionale/resources/css/app.css">

        </head>

    <body>

    <!---------Encabezado-------->
        <header>

                <a href="">
                <h2> Monitoring as a Services </h2>
                </a>
                    <nav class="menu">
                        <ul>
                            <a href="#" >Nuestro Equipo</a>
                            <a href="#">Nuestros Servicios</a>
                            <button type ="sumbit">
                                Registrate
                            </button>
                        </ul>
                    </nav>
                </div>
        </header>

    <!----------Contenido--------->

    <main class="py-main"
        @yield('content')
    </main>

    <!--------Pie de pagina------->
        <Footer>
            <div class="footer-content">
                <h3>InformticsGuards SpA</h3> <hr/>
                 <nav "id= estil">
                    <ul>
                        <a href="#" >Acerca de nosotros</a> <br/>
                        <a href="{{route(/contact')}}"> Conactanos</a>
                    </ul>
                 </nav>
            </div>
                <p>&copy;2022 . designed by Alexaris Luna</p>
        </Footer>
    </body>
</html>
