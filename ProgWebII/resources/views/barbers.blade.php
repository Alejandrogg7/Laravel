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
                background: url(https://static8.depositphotos.com/1371851/851/i/450/depositphotos_8513015-stock-photo-barber-shop-pole.jpg);
                background-size: 100% 100%;
                background-repeat: repeat-y;
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
                Vista Barberia                
                </div>
                <div class="links">
                    <table border="1">
                        <thead>
                            <th>
                                id
                            </th>
                            <th>
                                Descripción corte
                            </th>
                            <th>
                                Barbero
                            </th>
                            <th>
                                Fecha Turno
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                updated_at
                            </th>
                        </thead>
                        @foreach($barbers as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->descripcion_corte }}</td>
                            <td>{{ $item->barbero }}</td>
                            <td>{{ $item->fecha_turno }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>