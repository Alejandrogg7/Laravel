<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: gray;
                color: black;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                Vista Editar Responsables                
                </div>
                <div>
                <form method="POST" action="/editarresponsablebd">
                @csrf
                <div>
                        <label for="">Descripción ticket/tarea</label>
                        <input type="text" name="description_text" value="{{ $objectToUpdate->descripcion }}">
                        <input type="hidden" name="id_responsable_hidden" value="{{ $objectToUpdate->id }}">
                </div>
                
                <div>
                        <label for="">Responsable</label>
                        <input type="text" name="responsable_text" value="{{ $objectToUpdate->responsable }}">
                </div> 

                <div>
                        <label for="">Fecha</label>
                        <input type="date" name="fecha_date" value="{{ $objectToUpdate->fecha_solicitud }}">
                </div> 

                <div>
                        <input type="submit" value="Editar" id="">
                </div> 
                </form> 
                </div>
                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>