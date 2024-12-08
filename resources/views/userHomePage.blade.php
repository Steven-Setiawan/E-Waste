@extends('layout.layout')

@section('content')
    <div class="row mx-1">
        <div class="col-12">
            <img src="{{asset('img/bg/Landing_enhanced.png')}}" class="mx-auto d-block" width="50%" alt="">
        </div>
    </div>
    
    <!-- Hapus <?php /* */ ?> untuk uncomment bagian card -->
    <!-- Disini mau nampilin collection center kah? -->

    <?php /*
    <div class="row">
        @foreach (SOMETHING as SOMETHING)
            <div class="card" style="width: 18rem;">
                <img src="{{asset(ASSET_LOCATION)}}" class="card-img-top" alt="" height="400px" width="100%">
                <div class="card-body">
                    <h5 class="card-title">{{}}</h5>
                    <h6 class="card-text">{{}}</h6>
                    <p class="card-text">{{}}</p>
                    <div class="d-grid mx-auto">
                        <a href="#" class="btn btn-danger">Update</a>
                    </div>
                    <div class="d-grid mx-auto">
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    */ ?>

@endsection
