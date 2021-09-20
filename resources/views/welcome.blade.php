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
        <main>
<!--CREAR NUEVA TAREA-->
            <section class="crear-nueva-task">
                <form method="POST" action="/" enctype="multipart/form-data" >
                    @csrf
                    <h1>Crear nueva Tarea</h1>
                    <input class="campo-texto" type="text" placeholder="Nombre de tu tarea" name="nombreTarea"/>
                    <textarea class="campo-descripcion" placeholder="Describe tu tarea" name="descripcion"></textarea>
                    <input class="campo-texto" type="text" placeholder="¿Cuando?" name="dia"/>
                    <input type="file" class="campo-imagen" name="imagen"/>
                    <input class="boton-crear" type="submit" value = "Crear"/>
                </form>
            </section>
<!--FIN CREAR NUEVA TAREA-->
<!--TABLA TAREAS-->
            <section class="lista-task">

                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tarea</th>
                            <th>Dia</th>
                            <th>Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tareas as $tr)
                        <tr>
                            <th>{{$tr->id}}</th>
                            <td>{{$tr->name}}</td>
                            <td>{{$tr->dia}} </td>
                            <td><a href="/tareas/{{$tr->id}}" class="ver-mas"><i class="fas fa-plus-circle"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </section>
<!--FIN TABLA TAREAS-->
        </main>
<!--FOOTER-->
        <center>
        <footer>Yulissa Lopez Cortes</footer>
        </center>
<!--FOOTER-->
</html>
