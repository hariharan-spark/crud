<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>update</title>
  </head>
  <body>

    <form action="{{route('customers-update')}}" method="POST">     
    @csrf
    <div class="container" style="padding-top: 1%;">
        <div class="card">

            <div class="card-body col-md-12">
                <h5 class="card-title">Add user</h5>
                <div class="row">
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="hidden" name="id" value="{{$customers->id}}">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" requried value="{{$customers->first_name}}">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name" requried value="{{$customers->last_name}}">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" requried value="{{$customers->email}}">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number" name="phone_number" requried value=" {{$customers->phone_number}}">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="State" aria-label="State" name="state" requried value="{{$customers->state}}">
                    </div>
                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Country" aria-label="Country" name="country" requried value="{{$customers->country}}" >
                    </div>

                    <div class="col" style="padding-top: 1%;">
                     <button type="submit" class="btn btn-primary" value="update">update</button>                 
                    </div>
                    
                </div>
            </div>
        </div>
    </form>
  </body>
</html>