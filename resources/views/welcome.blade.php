<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>CRUD</title>
  </head>
  <body>

    <form action="{{url('form')}}" method="POST" >
      

      
    @csrf
    <div class="container" style="padding-top: 1%;">
        <div class="card">

            <div class="card-body col-md-12">
                <h5 class="card-title">Add user</h5>
                <div class="row">

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" >
                        @error('first_name')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name" >
                        @error('last_name')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email" >
                        @error('email')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number" name="phone_number" >
                        @error('phone_number')
                        <span style="color:red">{{$message}}</span>
                        @enderror 
                    </div> 

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="State" aria-label="State" name="state" >
                        @error('state')
                        <span style="color:red">{{$message}}</span>
                        @enderror 
                    </div>

                    <div class="col-md-6" style="padding-top: 1%;">
                        <input type="text" class="form-control" placeholder="Country" aria-label="Country" name="country" >
                        @error('country')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col" style="padding-top: 1%;">
                        <button type="submit" class="btn btn-primary">Submit</button>                    
                    </div>
                    
                </div>
            </div>
        </div>
    </form>

        <div class="card" style="margin-top: 5%;">
            <div class="card-body">
                <h5 class="card-title">Users</h5>
                <table class="table table-striped">
                <thead>
                    <tr>    
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                    </tr>       
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                       <td> {{$customer['first_name']}}</td>
                       <td> {{$customer['last_name']}}</td>
                       <td> {{$customer['email']}}</td>
                       <td> {{$customer['phone_number']}}</td>
                       <td> {{$customer['state']}}</td>
                       <td> {{$customer['country']}}</td>
                      <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-modal-{{$customer->id}}">Update</button></td>
                      <td> <a href="/customers-delete/{{$customer['id']}}" class="btn btn-danger" >Delete  </a></td>
  
  <!-- Modal -->
                    <div class="modal fade" id="edit-modal-{{$customer->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{route('customers-update')}}" method="POST">     
                                @csrf
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Users</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="hidden" name="id" value="{{$customer->id}}">
                                        <input type="text" class="form-control " placeholder="First name" aria-label="First name" name="first_name1" requried value="{{$customer->first_name}}">
                                        @error('first_name1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div> 

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name1" requried value="{{$customer->last_name}}">
                                        @error('last_name1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email1" requried value="{{$customer->email}}">
                                        @error('email1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone number" name="phone_number1" requried value=" {{$customer->phone_number}}">
                                        @error('phone_number1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="State" aria-label="State" name="state1" requried value="{{$customer->state}}">
                                        @error('state1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6" style="padding-top: 1%;">
                                        <input type="text" class="form-control" placeholder="Country" aria-label="Country" name="country1" requried value="{{$customer->country}}" >
                                        @error('country1')
                                        <span style="color:red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="col" style="padding-top: 1%;">
                                    <button type="submit" class="btn btn-primary" value="update">update</button>                 
                                    </div> --}}
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                    </tr>
                    @endforeach                 
                    </tbody>
                </table>
            </div>
        </div>
    </div>


  </body>
</html>





