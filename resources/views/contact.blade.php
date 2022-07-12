@extends('layouts.base')

@section ('content')

    <link rel="stylesheet"  href="{!! asset('css/app.css') !!}" >
    <h3> ¡Contactate con nosotros!</h3>
    <section class="contac">
        <input class="controls" type="text" name="Nombre y/o Empresa" value="" placeholder=" Nombre y/o Empresa">
        <input class="controls" type="text" name="Telefono" value="" placeholder=" Teléfono">
        <input class="controls" type="text" name="E-mail" value="" placeholder=" E-mail">
        <input class="controls1" type="text" name="Tu mensaje" value="" placeholder=" Tu mensaje">
        <input class="button" type="submit" name="" value=" Envia tu mensaje">
    </section>

@endsection

