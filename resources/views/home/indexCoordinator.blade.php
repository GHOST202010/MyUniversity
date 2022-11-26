<!doctype html>
<html lang="es">

<head>
    <title>Coordinación</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="icon" href="/registro01/images/leones.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/home01/css/style.css">
    <link rel="stylesheet" href="/home01/css/registro.css">
    <script src="/home01/js/funciones.js"></script>
</head>

<body>
    @if ($searchSubject and $searchSubject->consultaRealizada)
        <script>
            visible_mat()
        </script>
    @endif
    @if ($searchStudent and $searchStudent->consultaRealizada)
        <script>
            visible_alum()
        </script>
    @endif
    @if ($searchTeacher and $searchTeacher->consultaRealizada)
        <script>
            visible_prof()
        </script>
    @endif
    @if ($searchBeca and $searchBeca->consultaRealizada)
        <script>
            visible_becas()
        </script>
    @endif
    <div class="container d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4">
                <a href="/home" class="logo"><img src="/registro01/images/leones.png" alt="logo Leones"
                        style="width: 80px; height: 80px;"> <span>MyUniversity</span></a>
                <ul class="list-unstyled components mb-5">
                    <br><br><br>
                    <li class="active">
                        <span class="fa fa-user mr-3" id="alum"></span><button class="btn-transparent"
                            onclick="visible_alum()">Alumnos</button>
                    </li>
                    <li class="active">
                        <span class="fa fa-user mr-3"></span><button class="btn-transparent"
                            onclick="visible_becas()">Becas</button>
                    </li>
                    <li>
                        <span class="fa fa-user mr-3"></span><button class="btn-transparent"
                            onclick="visible_prof()">Profesores</button>
                    </li>
                    <li>
                        <span class="fa fa-sticky-note mr-3"></span><button class="btn-transparent"
                            onclick="visible_mat()">Materias</button>
                    </li>
                    <li>
                        <span class="fa fa-paper-plane mr-3"></span><button class="btn-transparent"
                            onclick="visible_contact()">Contacto</button>
                    </li><br><br><br><br><br><br>
                    <li>
                        <br><br><br><a href="/logout"><span class="fa fa-cogs mr-3"></span> Cerrar sesión</a>
                    </li>
                </ul>
                <div class="footer">
                    <p style="font-size: small;">
                        MyUniversity es un sistema de uso académico creado por Robinson Ian Cabrera Hernandez, Perez
                        Garcia Cristian Rolando, Hernandez Michel Jose Luis
                    </p>
                </div>

            </div>
        </nav>

        <div class="cont-am">
            <div id="contenido" class="p-4 p-md-5 pt-5">
                <h1 class="mb-4">Coordinación</h1>
                <h3>Sistema de gestión de Alumnos Y docentes dentro de esta institución MyUniversity</h3> <br><br>
                <p style="color: black;">La coordinación está encargada de la administración del cuerpo estudiantil y
                    docente, además del manejo de las materias impartidas en MyUniversity. Esta institución se toma muy
                    en serio la educación y el bienestar de los alumnos,
                    tomando en cuenta el desempeño y preparación de los docentes.
                </p>
            </div>
            <div id="sec_alum" class="p-4 p-md-5 pt-5" style="display: none;">
                <h1 class="mb-4">Gestión de Alumnos</h1>
                <h2>Alta de alumnos</h2>
                <form action="/home/studentRegistration" method="POST" name="prueba01">
                    @csrf
                    @if ($errors->has('students'))
                        <script>
                            visible_alum()
                        </script>
                    @endif
                    <div>
                        <br><label for="Nombre" style="color: black; font-size: large;">Nombre de alumno</label> <br>
                        <input type="text" placeholder="Nombre Alumno" class="input_bus" name="name"
                            @if ($errors->has('students')) value="{{ old('name') ?? '' }}" @endif><br>
                        @if ($errors->has('students') and $errors->has('name'))
                            <i>Ingrese un nombre</i><br>
                        @endif
                        <label for="Semestre" style="color: black; font-size: large;">Semestre</label> <br>
                        <input type="text" placeholder="Semestre" class="input_bus" name="semester"
                            @if ($errors->has('students')) value="{{ old('semester') ?? '' }}" @endif><br>
                        @if ($errors->has('students') and $errors->has('semester'))
                            <i>Ingrese un número válido</i><br>
                        @endif
                        <label for="Carrera" style="color: black; font-size: large;">Carrera</label><br>
                        <input type="text" placeholder="Carrera" class="input_bus" name="degree"
                            @if ($errors->has('students')) value="{{ old('degree') ?? '' }}" @endif> <br>
                        @if ($errors->has('students') and $errors->has('degree'))
                            <i>Ingrese una carrera existente</i><br>
                        @endif
                        <label for="email" style="color: black; font-size: large;">Correo</label><br>
                        <input type="text" placeholder="Correo" class="input_bus" name="email"
                            @if ($errors->has('students')) value="{{ old('email') ?? '' }}" @endif> <br>
                        @if ($errors->has('students') and $errors->has('email'))
                            <i>Ingrese un correo con valido. Ejemplo fulanito@alumnos.udg.mx</i><br>
                        @endif
                        <label for="password" style="color: black; font-size: large;">Contraseña</label><br>
                        <input type="password" placeholder="Contraseña" class="input_bus" name="password"
                            @if ($errors->has('students')) value="{{ old('password') ?? '' }}" @endif> <br>
                        @if ($errors->has('students') and $errors->has('password'))
                            <i>Ingrese una contraseña mayor a 8 caracteres</i><br>
                        @endif
                        <label for="password_confirmation" style="color: black; font-size: large;">
                            Confirmar contraseña</label><br>
                        <input type="password" placeholder="Confirmar contraseña" class="input_bus"
                            name="password_confirmation"
                            @if ($errors->has('students')) value="{{ old('password_confirmation') ?? '' }}" @endif>
                        <br>
                        @if ($errors->has('students') and $errors->has('password_confirmation'))
                            <i>Las contraseñas no coinciden</i><br>
                        @endif
                    </div>

                    <br><br><button class="btn btn-success">Enviar</button><br><br>
                </form>
                <h2>Búsqueda de alumno</h2>
                <form action="/home/studentSearch" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="input_bus" type="text" placeholder="Nombre del alumno" style="color: black;"
                            name="name">
                        <button class="btn btn-outline-secondary" id="button-addon2">Buscar</button>

                    </div>
                </form>

                <br><br>
                <table class="table table-dark">
                    <tr class="table-active">
                        <th>Código del Alumno</th>
                        <th>Nombre del Alumno</th>
                        <th>Semestre del Alumno</th>
                        <th>Correo del alumno</th>
                        <th>Dar de baja</th>
                    </tr>

                    @if ($searchStudent)
                        <script>
                            visible_alum()
                        </script>
                        @foreach ($searchStudent as $student)
                            <tr class="table-active">
                                <th>{{ $student->id }}</th>
                                <th>{{ $student->name }}</th>
                                <th>{{ $student->semester }}</th>
                                <th>{{ $student->user->email }}</th>
                                <th><a href="/home/eliminarStudent/{{ $student->id }}">Eliminar</a></th>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div id="sec_prof" class="p-4 p-md pt-5" style="display: none;">
                <h1 class="mb-4">Gestión de Profesores</h1>
                <h2>Alta de Profesores</h2>
                <form method="POST" action="/home/teacherRegistration">
                    @csrf
                    @if ($errors->has('teachers'))
                        <script>
                            visible_prof()
                        </script>
                    @endif
                    <div>
                        <br><label for="Nombre" style="color: black; font-size: large;">Nombre del
                            profesores</label> <br>
                        <input type="text" placeholder="Nombre Profesor" class="input_bus" name="name"
                            @if ($errors->has('teachers')) value="{{ old('name') ?? '' }}" @endif><br>
                        @if ($errors->has('teachers') and $errors->has('name'))
                            <i>Ingrese un nombre</i><br>
                        @endif
                        <label for="Genero" style="color: black; font-size: large;">Género</label><br>
                        <select class="input" name="gender">
                            <option value="{{ old('gender') ?? '' }}">Género</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select><br>
                        @if ($errors->has('teachers') and $errors->has('gender'))
                            <i>Ingrese su género</i><br>
                        @endif
                        <label for="email" style="color: black; font-size: large;">Correo</label><br>
                        <input type="text" placeholder="Correo" class="input_bus" name="email"
                            @if ($errors->has('teachers')) value="{{ old('email') ?? '' }}" @endif> <br>
                        @if ($errors->has('teachers') and $errors->has('email'))
                            <i>Ingrese un correo válido. Ejemplo fulanito@docentes.udg.mx</i><br>
                        @endif
                        <label for="password" style="color: black; font-size: large;">Contraseña</label><br>
                        <input type="password" placeholder="Contraseña" class="input_bus" name="password"
                            @if ($errors->has('teachers')) value="{{ old('password') ?? '' }}" @endif> <br>
                        @if ($errors->has('teachers') and $errors->has('password'))
                            <i>Ingrese una contraseña mayor a 8 caracteres</i><br>
                        @endif
                        <label for="password_confirmation" style="color: black; font-size: large;">Confirmar
                            contraseña</label><br>
                        <input type="password" placeholder="Confirmar contraseña" class="input_bus"
                            name="password_confirmation"
                            @if ($errors->has('teachers')) value="{{ old('password_confirmation') ?? '' }}" @endif>
                        <br>
                        @if ($errors->has('teachers') and $errors->has('password_confirmation'))
                            <i>Las contraseñas no coinciden</i><br>
                        @endif
                    </div>
                    <br><br><button class="btn btn-success">Enviar</button><br><br>
                </form>
                <h2>Búsqueda de profesor</h2>
                <form action="/home/teacherSearch" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="input_bus" type="text" placeholder="Nombre del Profesor"
                            style="color: black;" name="name">
                        <button class="btn btn-outline-secondary" id="button-addon2">Buscar</button>
                    </div>
                </form>

                <br><br>
                <table class="table table-dark">
                    <tr class="table-active">
                        <td>Código del profesor</td>
                        <td>Nombre del Profesor</td>
                        <td>Correo del Profesor</td>
                        <td>Dar de baja</td>
                        <!-- <td>Dar de baja</td> -->
                    </tr>
                    @if ($searchTeacher)
                        <script>
                            visible_prof()
                        </script>
                        @foreach ($searchTeacher as $teacher)
                            <tr class="table-active">
                                <th>{{ $teacher->id }}</th>
                                <th>{{ $teacher->name }}</th>
                                <th>{{ $teacher->user->email }}</th>
                                <th><a href="/home/eliminarTeacher/{{ $teacher->id }}">Eliminar</a></th>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div id="sec_becas" class="p-4 p-md pt-5" style="display: none;">
                <h1 class="mb-4">Gestión de Becas</h1>
                <h2>Alta de Becas</h2>
                <form method="POST" action="/home/becaRegistration">
                    @csrf
                    @if ($errors->has('becas'))
                        <script>
                            visible_becas()
                        </script>
                    @endif
                    <div>
                        <br><label for="Nombre" style="color: black; font-size: large;">Nombre de la beca</label>
                        <br>
                        <input type="text" placeholder="Nombre Beca" class="input_bus" name="name"
                            @if ($errors->has('becas')) value="{{ old('name') ?? '' }}" @endif><br>
                        @if ($errors->has('becas') and $errors->has('name'))
                            <i>Ingrese un nombre</i><br>
                        @endif
                    </div>
                    <div>
                        <label for="amount" style="color: black; font-size: large;">Cantidad de dinero para cada
                            alumno</label><br>
                        <input type="number" name="amount"
                            @if ($errors->has('becas')) value="{{ old('amount') ?? '' }}" @endif>
                        <br>
                        @if ($errors->has('becas') and $errors->has('amount'))
                            <i>Ingrese un número válido</i><br>
                        @endif
                    </div>
                    <div>
                        <label for="capacity" style="color: black; font-size: large;">Número de beneficiaros que
                            tendrá la beca</label><br>
                        <input type="number" placeholder="Cupos de la beca" class="input_bus" name="capacity"
                            @if ($errors->has('becas')) value="{{ old('capacity') ?? '' }}" @endif> <br>

                        @if ($errors->has('becas') and $errors->has('capacity'))
                            <i>Ingrese un número válido</i><br>
                        @endif
                    </div>
                    <div>
                        <label for="password" style="color: black; font-size: large;">Descripción</label><br>
                        <textarea name="description">
@if ($errors->has('becas'))
{{ old('description') ?? '' }}
@endif
</textarea>
                        <br>
                        @if ($errors->has('becas') and $errors->has('description'))
                            <i>Ingrese una descripción</i><br>
                        @endif
                    </div>
                    <div>
                        <label for="endDate" style="color: black; font-size: large;">Fecha en que termina la
                            beca</label><br>
                        <input type="date" name="endDate" id=""
                            @if ($errors->has('becas')) value="{{ old('endDate') ?? '' }}" @endif>
                        <br>
                        @if ($errors->has('becas') and $errors->has('endDate'))
                            <i>Ingrese una fecha válida</i><br>
                        @endif
                    </div>
                    <br><br><button class="btn btn-success">Enviar</button><br><br>
                </form>
                <h2>Búsqueda de becas</h2>
                <form action="/home/becaSearch" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="input_bus" type="text" placeholder="Nombre del Profesor"
                            style="color: black;" name="name">
                        <button class="btn btn-outline-secondary" id="button-addon2">Buscar</button>
                    </div>
                </form>
                <br><br>
                <table class="table table-dark">
                    <tr class="table-active">
                        <td>Nombre de la beca</td>
                        <td>Descripción de la beca</td>
                        <td>Cantidad de dinero por alumno</td>
                        <td>Cupos de la beca totales</td>
                        <td>Fecha de finalización de la beca</td>
                        <td>Nombre de los alumnos registrados</td>
                        <td>ID de los alumnos registrados</td>
                        <td>Eliminar beca</td>
                    </tr>
                    @if ($searchBeca)
                        <script>
                            visible_becas()
                        </script>
                        @foreach ($searchBeca as $beca)
                            <tr class="table-active">

                                <th>{{ $beca->name }}</th>
                                <th>{{ $beca->description }}</th>
                                <th>{{ $beca->amount }}</th>
                                <th>{{ $beca->capacity }}</th>
                                <th>{{ $beca->endDate }}</th>
                                <th>
                                    <ol>
                                        @foreach ($beca->students as $student)
                                            <li>{{ $student->name }}</li>
                                        @endforeach
                                    </ol>
                                </th>
                                <th>
                                    <ul>
                                        @foreach ($beca->students as $student)
                                            <li>{{ $student->id }}</li>
                                        @endforeach
                                    </ul>
                                </th>
                                <th><a href="/home/eliminarBeca/{{ $beca->id }}">Eliminar</a></th>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div id="sec_mat" class="p-4 p-md pt-5" style="display: none;">
                <h1 class="mb-4">Gestión de Materias</h1>
                <h2>Alta de Materias</h2>
                <form method="POST" action="/home/subjectRegistration">
                    @csrf
                    @if ($errors->has('subjects'))
                        <script>
                            visible_mat()
                        </script>
                    @endif
                    <div>
                        <br><label for="Clave" style="color: black; font-size: large;">Clave de materia</label>
                        <br>
                        <input type="text" placeholder="Clave de la materia" class="input_bus" name="clave"
                            @if ($errors->has('subjects')) value="{{ old('clave') ?? '' }}" @endif><br>
                        @if ($errors->has('subjects') and $errors->has('clave'))
                            <i>Ingrese la clave de la materia</i><br>
                        @endif
                        <label for="Nombre de la materia" style="color: black; font-size: large;">Nombre de la
                            materia</label><br>
                        <input type="text" placeholder="Nombre de la materia" class="input_bus" name="name"
                            @if ($errors->has('subjects')) value="{{ old('name') ?? '' }}" @endif> <br>
                        @if ($errors->has('subjects') and $errors->has('name'))
                            <i>Ingrese el nombre de la materia</i><br>
                        @endif
                        <label for="Seccion" style="color: black; font-size: large;">Sección de la
                            materia</label><br>
                        <input type="text" placeholder="Sección de la materia" class="input_bus" name="section"
                            @if ($errors->has('subjects')) value="{{ old('section') ?? '' }}" @endif> <br>
                        @if ($errors->has('subjects') and $errors->has('section'))
                            <i>Ingrese el nombre de la sección</i><br>
                        @endif
                        <label for="horario de la materia" style="color: black; font-size: large;">Horario de la
                            materia</label><br>
                        <input type="text" placeholder="Horario de la materia" class="input_bus" name="schedule"
                            @if ($errors->has('subjects')) value="{{ old('schedule') ?? '' }}" @endif> <br>
                        @if ($errors->has('subjects') and $errors->has('schedule'))
                            <i>Ingrese un horario</i><br>
                        @endif
                    </div>
                    <br><br><button class="btn btn-success">Enviar</button><br><br>
                </form>
                <h2>Búsqueda de Materias</h2>
                <form action="/home/subjectSearch" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input class="input_bus" type="text" placeholder="Nombre de la materia"
                            style="color: black;" name="name">
                        <button class="btn btn-outline-secondary" id="button-addon2">Buscar</button>
                    </div>
                </form>

                <br><br>
                <table class="table table-dark">
                    <tr class="table-active">
                        <th>ID</th>
                        <th>Clave de la materia</th>
                        <th>Nombre de la materia</th>
                        <th>Sección de la materia</th>
                        <th>Horario de la materia</th>
                        <th>Dar de baja</th>
                    </tr>
                    @if ($searchSubject)
                        <script>
                            visible_mat()
                        </script>
                        @foreach ($searchSubject as $subject)
                            <tr class="table-active">
                                <th>{{ $subject->id }}</th>
                                <th>{{ $subject->clave }}</th>
                                <th>{{ $subject->name }}</th>
                                <th>{{ $subject->section }}</th>
                                <th>{{ $subject->schedule }}</th>
                                <th><a href="/home/eliminarSubject/{{ $subject->id }}">Eliminar</a></th>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
            <div id="sec_cont" class="p-4 p-md pt-5" style="display: none;">
                <span class="fa fa-teacher mr-2"></span>
                <h4>Robinson Ian Cabrera Hernandez</h4><br>
                <span class="fa fa-phone mr-2"></span>
                <h4>3312456587</h4><br>
                <span class="fa fa-teacher mr-2"></span>
                <h4>Perez Garcia Cristian Rolando</h4><br>
                <span class="fa fa-phone mr-2"></span>
                <h4>3313546891</h4><br>
                <span class="fa fa-teacher mr-2"></span>
                <h4>Hernandez Michel Jose Luis</h4><br>
                <span class="fa fa-phone mr-2"></span>
                <h4>3313206548</h4><br>
                <span class="fa fa-at"></span>
                <h4>my.university.pagina@gmail.com</h4>
            </div>
        </div>
    </div>



</body>

</html>
