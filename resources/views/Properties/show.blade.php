<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
        <div class="row" style="width: 95%; margin-left: auto; margin-right: auto; margin-bottom: 50px;">
            <div class="col-lg-6 col-md-6">
                <img src="{{ asset('images') }}/{{ $prop[0]->photo }}" style="width: 100%; height: 100%; ">
            </div>
            <div class="col-lg-6 col-md-6">
                <h4>{{ $prop[0]->property_name }}, {{ $prop[0]->location }}</h4>
                <p>{!! $prop[0]->description !!}</p>
            </div>

        </div>
</body>
</html>
