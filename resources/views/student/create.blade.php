@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <div class="row">

                  @if (session('status'))
                      <div class="alert alert-success">{{session('status')}}</div>
                  @endif

                <div class="col-6 m-auto">
                  <div class="card card-secondary">
                   <div class="card-header">
                     <h3 class="card-title">Add new employee</h3>
                   </div>

                     <form  action="{{ route('employee.store') }}" method="POST">
                      @csrf
                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label
                               for="exampleInputEmail1">First Name
                            </label>
                               <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require>
                         </div>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror
                  
                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
                        </div>
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                           <label for="exampleInputFile">Middle Name</label>
                   
                          <input type="text" class="form-control" id="midname" name="midname" placeholder="Enter your Middle Name">
                        </div>
                          @error('midname') <span class="text-danger">{{$message}}</span> @enderror


                        <div class="form-group col-12">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                        </div>
                          @error('address') <span class="text-danger">{{$message}}</span> @enderror



                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Zip</label>
                          <input type="number" class="form-control" id="zip" name="zip" placeholder="">
                        </div>
                        @error('zip') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">Age</label>
                          <input type="number" class="form-control" id="age" name="age" placeholder="">
                        </div>
                        @error('age') <span class="text-danger">{{$message}}</span> @enderror
              
                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success col-12">Submit</a>
                </div>

           
              </form>


                </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection