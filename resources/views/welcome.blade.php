<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 style="text-align: center;">Outdoor</h1>

    <div class="d-flex justify-content-center">
        <form action="{{route('saveRecord')}}" method="post">
            @csrf
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter Batch number" name="batchNum"
                    aria-describedby="basic-addon2">
                <input class="form-control" type="text" placeholder="Enter T-shirt quantity" name="quantity"
                    aria-describedby="basic-addon2">
                <!-- <input class="form-control" type="text" placeholder="Enter created date" name="manuDate"
                    aria-describedby="basic-addon2"> -->
                <!-- <input class="form-control" type="text" placeholder="Enter status" name="status"
                    aria-describedby="basic-addon2"> -->

                <select name="status" id="status" class="form-control">
                    <option value="" disabled selected>Select your status</option>
                    <option value="volvo">1 Stars</option>
                    <option value="saab">2 Stars</option>
                    <option value="mercedes">3 Stars</option>
                </select>
                <input class="form-control" type="textarea" placeholder="Enter your remarks" name="remarks">
                <div class="input-group-append" style="margin-left: 5px;">
                    <button type="submit" class="btn btn-primary" style="width: 100px;">Add</button>
                </div>
            </div>
        </form>
    </div>

    <div class="pt-5 mx-auto" style="width: 50%;">
        <table class="table table-striped">
            <!-- <colgroup>
                <col class="col-md-4">
                <col class="col-md-4">
                <col class="col-md-3">
            </colgroup> -->
            <tr>
                <th>Batch Number</th>
                <th>Quantity</th>
                <th>Manufacture Date</th>
                <th>Status</th>
                <th>Remarks</th>
                <th>Action</th>
            </tr>
            @foreach($list as $value)
            <tr>
                <td>{{$value->batchNum}}</td>
                <td>{{$value->quantity}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->status}}</td>
                <td>{{$value->remarks}}</td>
                <td>
                    <a href="{{url('/edit/'.$value->id)}}" style="text-decoration: none;"
                        class="btn btn-primary">Edit</a>
                    <a href={{"delete/".$value['id']}} style="text-decoration: none;" class="btn btn-danger">Delete</a>
                </td>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3"
                    viewBox="0 0 16 16">
                    <path
                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg> -->
            </tr>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>