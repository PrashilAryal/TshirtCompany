<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outdoor|Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Edit Record!</h1>
    <div class="d-flex justify-content-center">

        <form action="{{route('updateRecord')}}" method="post">
            @csrf
            <div class="input-group">
                <input type="text" name="batchNum" class="form-control" value="{{$data->batchNum}}">
                <input type="text" name="quantity" class="form-control" value="{{$data->quantity}}">
                <!-- <input type="text" name="manuDate" class="form-control" value="{{$data->manuDate}}"> -->
                <input type="text" name="status" class="form-control" value="{{$data->status}}">
                <input type="text" name="remarks" class="form-control" value="{{$data->remarks}}">
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="input-group-append" style="margin-left: 5px;">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>