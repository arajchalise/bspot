<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    @foreach($properties as $property)
        <div class="col-lg-4 col-md-6">
            <img src="{{ asset('images') }}/{{ $property->photo }}" style="width: 100%; height: 80%;">
            <h5>{{ $property->property_name }}</h5>
            <p>{!! substr($property->description, 0, 200) !!}</p><a href="{{URL::current()}}/{{ $property->id }}">ReadMore</a>
        </div>
    @endforeach
</body>
</html>
