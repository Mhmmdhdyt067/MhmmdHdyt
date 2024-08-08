@extends('dashboard.main')
@section('container')

<div class="card card-custom card-stretch">
    <!--begin::Header-->
    <div class="card-header py-3">
        <div class="card-title align-items-start flex-column">
            <h3 class="card-label font-weight-bolder text-dark">Profile Information</h3>
            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Form-->
    <form class="form">
        <!--begin::Body-->
        <div class="card-body">
            <div class="row">
                <label class="col-xl-3"></label>
                <div class="col-lg-9 col-xl-6">
                    <h5 class="font-weight-bold mb-6">Information</h5>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
                <div class="col-lg-9 col-xl-6">
                    <div class="image-input image-input-outline" id="kt_profile_avatar"
                        style="background-image: url(assets/media/users/blank.png)">
                        <div class="image-input-wrapper" style="background-image: url(assets/media/users/300_21.jpg)">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right">Name</label>
                <div class="col-lg-9 col-xl-6">
                    <h3>{{ auth()->user()->name }}</h3>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-xl-3 col-lg-3 text-right">Email</label>
                <div class="col-lg-9 col-xl-6">
                    <h4>{{ auth()->user()->email }}</h4>
                </div>
            </div>
        </div>
        <!--end::Body-->
    </form>
    <!--end::Form-->
</div>

@endsection