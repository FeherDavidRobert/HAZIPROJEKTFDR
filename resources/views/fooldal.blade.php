<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <form method=POST>
        @csrf
        <div class="container-fluid bg-success text-dark">
    <h1>HÁZIDOLGOZAT Fehér Dávid Róbert</h1>

<div class="row my-4">
    <div class="col">
        <input type="text id="vezeteknev" name="vezeteknev" placeholder="Vezetéknév" class="form-controll" value="{{old('vezeteknev')}}">
    </div>
</div>

<div class="row my-4">
    <div class="col">
        <input type="text" id="keresztnev" name="keresztnev" placeholder="Keresztnév" class="form-controll" value="{{old('keresztnev')}}">
    </div>
</div>

<div class="row my-4">
    <div class="col">
        <input type="date" name="szuletesiev" id="szuletesiev" class="form-controll" value="{{old('szuletesiev')}}">
    </div>
</div>

<div class="row my-4">
    <div class="col">
        <button type="submit" class="btn btn-warning">Adatok rögzítése</button>
    </div>
</div>











</div>




    </form>
</body>
</html>