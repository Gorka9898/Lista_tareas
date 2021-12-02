<?php

echo "estas en tarea";



?>

<!Doctype html>
<html>

<head>
    <title>
        Ejercicio Tarea
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>



    <div class="container" style="width: 60%; margin-left:20%">



        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------CONTENEDOR 1---------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->

        <div id="cabecera" style="border: 1px solid black;height:70px; background-color:lightgrey; border-radius:1%; margin-bottom:50px">
            <h1 style="width: 80%; float:left; font-size:20px; margin:20px;">Task List</h1>
            <select id="Tareas" style="width: 10%; margin-top:20px; background-color:lightgrey;">
                <option>Tareas</option>

            </select>
        </div>


        <!------------------------------------------------------------------------------------------------------------------------------->
        <!---------------------------------------------------------CONTENEDOR 2---------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->




        <div style="border: 1px solid black; margin-bottom: 50px;">



            <div id="cuerpo1" style="border: 1px solid black;height:70px; background-color:lightgrey; border-radius:1%;" class="d-flex">

                <h1 style=" font-size:20px; margin:20px" class="col-12">New Task</h1>



            </div>



            <h5 style="margin: 20px; margin-left:35px" class="col-12">Task</h5>

            <form method="post" action="/tarea">
                {{ csrf_field() }}
                <input type="text" class="col-12" style="width:90%; margin-left:4%;" name="tarea1">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <p>Es necesario rellenar este campo para poder continuar el proceso!!!</p>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div style="width: 100%;margin: 20px;">
                    <button type="submit" style="margin: 20px;"> <strong>+</strong> Add Task</button>
                </div>


            </form>

        </div>

        <!------------------------------------------------------------------------------------------------------------------------------->
        <!--------------------------------------------------------CONTENEDOR 3----------------------------------------------------------------------->
        <!------------------------------------------------------------------------------------------------------------------------------->



        <div style="border: 1px solid black;">



            <div id="cuerpo2" style="border: 1px solid black;height:70px; background-color:lightgrey; border-radius:1%;" class="d-flex">

                <h1 style=" font-size:20px; margin:20px" class="col-12">Current Task</h1>




            </div>



            <h5 style="margin: 20px; margin-left:35px; border-bottom: 1px solid lightgrey; border-width:60%;width:90%; " class="col-12">Task</h5>


            <div style="margin: 5%;">
                @foreach($tareas as $key => $data)

                <table style="border: 1px solid black; display: flex; align-items:center; ">

                    <tr>

                        <td>
                            <p style="float: left;">Nombre de la tarea: &nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </td>
                        <td>
                            <p style="float: left;color:green;"> {{$data->nombre}} &nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </td>

                        <td>

                            <form method="POST" action="/tarea/{{ $data->id}}">
                                {{ csrf_field() }}
                                @method('delete')<input type="submit" name="borrar tarea" value="borrar tarea"></button>
                            </form>
                        </td>

                    </tr>



                </table> <br>


                @endforeach
            </div>





        </div>



    </div>







</body>

</html>