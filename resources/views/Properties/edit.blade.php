<!DOCTYPE html>
<html>
<head>
    <title>Edit {{ $property->property_name }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

</head>
<body>
    <form action="{{ route('update') }}" method="POST">
        {{ csrf_field() }}
        <input type="text" name="id" value="{{ $property->id }}" hidden>
        <div class="form-group row">
            <label for="businessType" class="col-sm-3 col-form-label">Select Type of Business</label>
            <div class="col-sm-7">
                <select class="form-control" name="btype">
                    <option>Select Type</option>
                    <option value="Rent">Rent</option>
                    <option value="Sale">Sale</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="type" class="col-sm-3 col-form-label">Select Type of Business</label>
            <div class="col-sm-7">
                <select class="form-control" name="type">
                    <option>Select Type</option>
                    <option value="Appartment">Rent</option>
                    <option value="Sale">Sale</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-3"><label for="name">Property Name</label></div>
            <div class="col-sm-7"><input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Property name" name="name" value="{{ $property->property_name }}"></div>
      </div>
      <div class="form-group row">
            <div class="col-sm-3"><label for="name">Property Description</label></div>
            <div class="col-sm-7">
                <textarea name="description" rows="15" style="width: 100%;" name="description">{!! $property->description !!}</textarea>
            </div>
      </div>
      <div class="form-group row">
            <div class="col-sm-3"><label for="name">Property Location</label></div>
            <div class="col-sm-7"><input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Property name" name="loc" value="{{ $property->location }}"></div>
      </div>
      <div class="form-group row">
            <div class="col-sm-3"><label for="name">Photo</label></div>
            <div class="col-sm-7">
                <input type="file" name="photo">
            </div>
      </div>
        <input type="submit" name="" value="Update" class="btn btn-success">
    </form>
</body>
</html>
