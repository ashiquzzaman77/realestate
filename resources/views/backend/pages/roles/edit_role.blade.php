@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="page-content">
        <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Add Role</h6>

                        <form action="{{ route('update.role') }}" id="myForm" class="forms-sample" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $role->id }}">

                            <div class="row mb-3 ">
                                <label class="col-sm-3 col-form-label">Role Name</label>
                                <div class="col-sm-9 form-group">
                                    <input type="text" class="form-control" autocomplete="off"
                                        value="{{ $role->name }}" name="name">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-2 px-3">Update Role</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>



    {{-- validate code  --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    amenitie_name: {
                        required: true,
                    },
                },
                messages: {
                    amenitie_name: {
                        required: 'Please Enter Amenitie Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
