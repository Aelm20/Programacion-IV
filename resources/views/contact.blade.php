@extends('layouts.base')

@section ('content')

    <link rel="stylesheet"  href="{!! asset('css/app.css') !!}" >
    <h3> Envianos tu informacion -MaaS-</h3>
    <section class="contac">
        <input class="control" type="text" name="Nombre y/o Empresa" value="" placeholder="Nombre y/o Empresa">
        <input class="control" type="text" name="Telefono" value="" placeholder="Telefono">
        <input class="control" type="text" name="E-mail" value="" placeholder="E-mail">
        <input class="control" type="text" name="Tu mensaje" value="" placeholder="TU Mensaje">
        <input class="button" type="submit" name="" value="Eviar">
    </section>
@endsection

