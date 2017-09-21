@extends('layouts.app')
@push('style')
<style>

    .wrapper {
        background-color: whitesmoke;
        padding: 50px;
        box-shadow: 5px 5px grey;
    }

    #blah {
        margin-top: 15px;
        max-width: 120px;
        max-height: 80px;
        border-radius: 15px;
    }
</style>

@endpush
@section('content')
    <div class="container-fluid">
        <div class="container wrapper">
            <div class="row">
                <form class="form-group">
                    <div class="form-group col-md-5">
                        <label for="name">Youre name</label>
                        <input type="text" class="form-control " id="name">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="last_name">Youre last name</label>
                        <input type="text" class="form-control" id="last_name">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="date">Your birthday</label>
                        <input type="date" class="form-control" id="date">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email">Image</label>
                        <input type='file' id="imgInp"/>
                        <img id="blah" src="#" alt="your image"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });
</script>
@endpush