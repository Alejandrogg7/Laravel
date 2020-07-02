<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
                margin-bottom: 35px;
            }

            .formu{
              background-color: white;
              border-radius: 3px;
              font-size: 0.8em;
              margin: 0 auto;
              padding: 35px;
              color: #999;
              padding-right: 40px;
            }

            input, textarea{
			      border: 0;
			      outline: none;
                  width: 100%;
	        	}

            .tabla{
              background-color: white;
              color: black;
              text-align: left;
              border-collapse: collapse;
              width: 100%;
              margin-left: 50px;
            }

            th, td{
              padding: 20px;
            }

            thead{
              background-color: #246355;
              color: white;
            }

            tr:nth-child(even){
              background-color: #ddd;
            }
            tr:hover td{
              background-color: #369681;
              color: white;
            }
            .contenedor{
              display: flex;
              flex-wrap: nowrap;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                Vista Responsables                
                </div>
                <div class="contenedor">
                <div class="formu">
                <form method="POST" action="/responsables" class="needs-validation" novalidate>
                @csrf
                <div class="form-row">
                <div class="col-md-10 mb-3">
                        <label for="validationTooltip01">Descripción ticket/tarea</label>
                        <input type="text" name="description_text" id="validationTooltip01" class="form-control" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div>
                
                <div class="col-md-10 mb-3">
                        <label for="validationTooltip02">Responsable</label>
                        <input type="text" name="responsable_text" id="validationTooltip02" class="form-control" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div> 

                <div>
                        <label for="validationTooltip03">Fecha</label>
                        <input type="date" name="fecha_date" id="validationTooltip03" class="form-control" required>
                        <div class="valid-tooltip">
                            Registro correcto!
                        </div>
                </div> 
                </div>

                <div>
                        <input type="submit" value="Guardar" id="" class="btn btn-primary">
                </div> 
                </form> 
                </div>
                <div class="links">
                    <table border="1" class="tabla">
                        <thead>
                            <th>
                                id
                            </th>
                            <th>
                                Descripción ticket/tarea
                            </th>
                            <th>
                                Responsable
                            </th>
                            <th>
                                Fecha solicitud
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                updated_at
                            </th>
                        </thead>
                    
                        @foreach($responsables as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->responsable }}</td>
                            <td>{{ $item->fecha_solicitud }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="/borrarresponsable/{{ $item->id }}">Eliminar</a>
                            </td>
                            <td>
                                <a href="/editarresponsable/{{ $item->id }}">Editar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>