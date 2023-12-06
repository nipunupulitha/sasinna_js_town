<!DOCTYPE html>
<html lang="en">
<head>
    {{--  <meta name="csrf-token" content="{{ csrf_token() }}">  --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        

    <div class="row">
        <form  action="{{ route('user.store') }}"  method="post" enctype="multipart/form-data">
            @csrf

    <section class="container">
        <div class="card">
            <div class="card-header">
                <h5>Customers details</h5>
            </div>



                <div class="form-group" >
                  <label for="name">Full Name</label>
                    <input type="name"
                           name="name"
                           class="form-control"
                           id="name"
                           aria-describedby=""
                           placeholder="Enter Name">
                </div>

                <div class="form-group" >
                    <label for="mobile">Mobile</label>
                      <input type="number"
                             name="mobile"
                             class="form-control"
                             id="mobile"
                             aria-describedby=""
                             placeholder="Enter Mobile Number">
                  </div>

                  <div class="form-group" >
                    <label for="nic">NIC</label>
                      <input type="text"
                             name="nic"
                             class="form-control"
                             id="nic"
                             aria-describedby=""
                             placeholder="Enter NIC number">
                  </div>





            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="province" id="province" class="form-control">
                                <option value="">Select Province</option>
                                @foreach(App\Models\Province::orderBy('name')->get() as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="district" id="district" class="form-control">
                                <option value="">Select District</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label"></label>
                            <select name="town" id="town" class="form-control">
                                <option value="">Select Town</option>

                            </select>
                        </div>
                    </div>
                </div>
                </div>
            </div>


    </section>


    <div class="col-md-6 offset-md-4">
        <button type="submit"  class="btn btn-primary ">Submit</button>

    </div>



</form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('#province').on('change', function() {
                get_district_by_province();
            });
                function get_district_by_province(){
                    var province_id = $('#province').val();
                    $.post('{{route('getDistricts')}}',{_token:'{{ csrf_token() }}', province_id:province_id}, function(data){
                        $('#district').html(null);
                        $('#district').append($('<option value="">Select District</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#district').append($('<option>', {
                                value: data[i].id,
                                text: data[i].name
                            }));

                        }
                });
            }
     </script>
     <script type="text/javascript">
        $('#district').on('change', function() {
                get_district_by_district();
            });
                function get_district_by_district(){
                    var district_id = $('#district').val();
                    $.post('{{route('getTowns')}}',{_token:'{{ csrf_token() }}', district_id:district_id}, function(data){
                        $('#town').html(null);
                        $('#town').append($('<option value="">Select Town</option>', {

                        }));
                        for (var i = 0; i < data.length; i++) {
                            $('#town').append($('<option>', {
                                value: data[i].name,
                                text: data[i].name
                            }));

                        }
                });
            }
     </script>
</html>
