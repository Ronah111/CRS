<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- <x-header-content>
        Register New Apartment
    </x-header-content> --}}

    <!-- Bootstrap CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  
    <!-- Bootstrap Bundle with Popper -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- @include('navbars.auth.auth')
        @include('sidebars.leftsidebar') --}}
        {{-- <x-content-wrapper page="Create Users" breadCrumbOne="Home" breadCrumbTwo="Create Users" /> --}}
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                
                <div class="row  justify-content-center align-items-center">
                    <!--form to add new apartment  -->
                    <div class="register-box m-auto col-md-12 ">
                        
                        <div class="card card-outline  ">
                            <div class="card-header card-primary text-center ">
                                <h2 class="">Make an appointment</h2>
                            </div>
                            <div class="card-body col-md-8 offset-md-2">
                                @if(session('status'))
                                
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                        {{(1+1)}}
                                    </div>
                                @endif

                                <!--form-->
                                
                                <form method="post" action="{{ url('store') }}" id="form" >

                                    @csrf

                                    {{ csrf_field() }}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-4">
                                            <h2 class="text-center">Appointment Details</h2>
                                            
                                            <input type="text" disabled value="Required Fields"
                                                class="form-control text-center">
                                            <label>Name</label>
                                            <input label="name" name="name" placeholder="enter your name" id="name"
                                                class="form-control" type="text" required />
                                            <label>Student Number</label>    
                                            <input label="studentNo"  name="studentNo" id="studentNo"
                                                placeholder="enter your studentNo" class="form-control" type="text"
                                                required />
                                            <label>Registration Number</label>
                                            <input label="regNo" name="regNo" id="regNo"
                                                placeholder="enter registration number" class="form-control" type="text"
                                                required />
                                            <div class="form-group mb-3">
                                                <label for="">From</label>
                                                <input label="" name="from" id="from"
                                                placeholder="Beginning time" class="form-control" type="time"
                                                required />
                                                <label for="">To</label>
                                                <input label="" name="to" id="to"
                                                placeholder="End time in 24hours " class="form-control" type="time"
                                                required />

                                                <label for="">Date_of_booking</label>
                                                <input label="" name="date_of_booking" id="date_of_booking"
                                                placeholder="Date on which you want to use a computer " class="form-control" type="date"
                                                required />
                                                
                                            </div>
                                            
                                            

                                        </div>
                                        
                                            
                                            <!--nin info-->

                                        </div>
                                        <button name="Add appointment" type="submit" class="btn btn-primary btn-block">Make Appointment</button>

                                    </div>

                                </form>
                                <!--form-->

                            </div>
                            <!-- /.form-box -->
                        </div><!-- /.card -->
                    </div>
                    <!-- /.register-box -->
                    <!--form add user-->
                </div>
                <!-- /.row -->
        
            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    {{-- @include('footer.footer') --}}
    
    </div>
    <!-- ./wrapper -->
    {{-- @include('includes.scripts') --}}
    {{-- <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content'),

                }
            });

            $.ajax({
                url: "{{ route('fetchroles') }}",
                method: 'GET',

                beforeSend: function() {
                    $("#roleId").html('<option disabled selected>select role</option>');
                    $("#roleId").attr('disabled', true)
                },
                success: function(data) {
                    $("#roleId").attr('disabled', false)
                    $.each(data, function(key, value) {
                        $("#roleId").append('<option value=' + value.id + '>' + value
                            .name + '</option>');
                    });
                },
                error: function(data) {
                    alert(`The failed data is ${JSON.stringify(data)}`);
                }

            })

        });
    </script> --}}

</body>

</html>


