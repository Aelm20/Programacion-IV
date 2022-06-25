@extends('layouts.base')

@section ('content')

    <link rel="stylesheet"  href="{!! asset('css/app.css') !!}" >
    <section class="login">
        <h3> Inciar Sesión</h3>
            <input class="control" type="text" name="Usuaio o E-mail" value="" placeholder="Usuaio o E-mail">
            <input class="control" type="password" name="Contraseña" value="" placeholder="Contraseña">
            <input class="button" type="submit" name="" value="Ingresar">
                <p>¿Quieres pertenecer a nuestro equipo? <br> <a href="#">Más información aquí</a></p>
     </section>

@endsection





