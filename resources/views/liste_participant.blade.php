<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Liste des Régions</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @if($liste->count() > 0)
    <div class="container text-center mt-10">
    <h2>Liste Region</h2>
    <hr>
    <a href="/region_create" class="btn btn-primary">Ajout Région</a>
    <table class="table table-light">
        <tr>
            <th>CNI</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Tel</th>
            <th>Email</th>
            <th>Sexe</th>
            <th>Etat</th>
            <th>Status</th>
        </tr>
        <tbody>

            @foreach($liste as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->label}}</td>
                <td>
                    <a href="/region_delete/{{$r->id}}" class="btn btn-outline-danger">Supp</a>
                    <a href="/form_update_region/{{$r->id}}" class="btn btn-outline-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    </div>
</body>

</html>