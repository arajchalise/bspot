<!DOCTYPE html>
<html>
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Business For</th>
                    <th scope="col">Property Type</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($properties as $property)
                    <tr>
                        <td>{{ $property->property_name }}</td>
                        <td>{{ $property->location }}</td>
                        <td>{!! $property->description !!}</td>
                        <td>{{ $property->business_type }}</td>
                        <td>{{ $property->type }}</td>
                        <td><img src="{{ asset('images') }}/{{ $property->photo }}" style="width: 70px; height: 70px;"></td>
                        <td><a href="/property/{{ $property->id }}/edit">Edit</a>
                        <a href="/property/{{ $property->id }}/destroy">Delete</a>
                    </td>
                    </tr>
              @endforeach
            </tbody>
        </table>
</body>
</html>
