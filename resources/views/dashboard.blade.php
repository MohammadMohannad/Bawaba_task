<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Application</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @foreach($applicants as $app)
                <div class="col-sm-4 mt-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-4">
                                    <img src="{{asset('storage/'.$app->image)}}"  alt="" class="img-fluid rounded-circle" style="width:100px; height:100px; object-fit:cover;">
                                </div>
                                <div class="col-8 d-flex justify-content-center flex-column" style="height:100px">
                                    <h5 class="card-title"> {{$app->name}}</h5>
                                    <p class="card-text">{{$app->age}}</p>
                                </div>
                            </div>
                           <a href="mailto:{{$app->email}}" class="card-text text-decoration-none text-dark">Email: <span class="text-primary">{{$app->email}}</span></p>
                           <a href="tel:{{$app->phone_number}}" class="card-text text-decoration-none text-dark">Phone Number: <span class="text-primary">{{$app->phone_number}}</span></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>