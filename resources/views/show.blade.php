@extends('layouts.app')

@section('title','Listado de tareas')

@section('contenido')
        <header>
            <div class="titulo">
                <h1>Mi Lista de Tareas </h1>
            </div>
            <div class="dias-semana">
                <center>
                <ul>
                    <li>L</li>
                    <li>M</li>
                    <li>W</li>
                    <li>J</li>
                    <li>V</li>
                    <li>S</li>
                    <li>D</li>
                </ul>
            </center>
            </div>
        </header>

            <center>
                <h2 style="margin-top: 25px;">Descripcion tarea #{{$tareas->id}}</h2>
             </center>
        <main>

            <section class="descripcion">
                 <img src="/imagen/{{$tareas->imagen}}" alt="Imagen de la tarea">
                <div class="contenido-tarea">
                    <h2>{{$tareas->name}}</h2>
                    <h4>Descripcion:</h4>
                    <p>{{$tareas->descripcion}}</p>
                    <h4>Fecha:</h4>
                    <p>{{$tareas->dia}}</p>
                    <center>
                        <input class="boton-atras" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
                        <a href="/tareas/{{$tareas->id}}/edit" class="ver-mas"><i class="fas fa-plus-circle"></i></a>
                    </center>
                 </div>
            </section>

        </main>
        <center>
        <footer>Yulissa Lopez Cortes</footer>
        </center>
</html>
