<x-layouts.layout>
    <div class="max-h-full overflow-x-auto">
        <a class="btn btn-success" href={{route("alumnos.create")}}>Crear nuevo alumno</a>
        <div class="overflow-x-auto">
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->nombre}}</td>
                        <td>{{$alumno->dni}}</td>
                        <td>{{$alumno->email}}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</x-layouts.layout>
