@extends('layouts.app')

@section('title','Editar tareas')

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
                <h2 style="margin-top: 25px;">Esta editando la tareas #{{$tareas->id}}</h2>
             </center>
        <main>
            <section class="edit-nueva-task">
                <form method="POST" action="/tareas/{{$tareas->id}}" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <h1>Crear nueva Tarea</h1>
                    <input class="campo-texto" value ="{{$tareas->name}}" type="text" name="nombreTarea"/>
                    <textarea class="campo-descripcion" placeholder="Describe tu tarea" name="descripcion">{{$tareas->descripcion}}</textarea>
                    <input value ="{{$tareas->dia}}" class="campo-texto" type="text" placeholder="¿Cuando?" name="dia"/>
                    <input type="file" class="campo-imagen" name="imagen"/>
                    <div class="botones">
                        <input class="boton-atras" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
                        <input class="boton-crear" type="submit" value = "Editar"/>
                    </div>
                </form>
            </section>

        </main>
        <center>
        <footer>Yulissa Lopez Cortes</footer>
        </center>
</html>

