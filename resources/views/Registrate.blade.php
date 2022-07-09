@extends('layouts.base')

@section ('content')

    <link rel="stylesheet"  href="{!! asset('css/app.css') !!}" >
    <section class="Register">
        <h3>Registrate</h3>
        <input class="ctrl1" type="text" name="Nombre" value="" placeholder=" Nombre">
        <input class="ctrl1" type="text" name="Apellido" value="" placeholder=" Apellido">
        <input class="ctrl" type="text" name="Usuaio o E-mail" value="" placeholder=" Usuaio o E-mail">
        <input class="ctrl" type="password" name="Contraseña" value="" placeholder=" Contraseña">
        <input class="ctrl" type="password" name="Confirma-contraseña" value="" placeholder=" Confirme la contraseña">
        <p> Al registrate estas aceptando nuestras políticas y condiciones </p>
        <input class="button" type="submit" name="" value="Registrate">
    </section>

@endsection
