@include('layouts.header')
@include('layouts.main')
@yield('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Personnels</span></h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{route('personnels.update',$personnel->id)}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="basic-default-name" value="{{$personnel->name}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Surname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="surname" id="basic-default-name" value="{{$personnel->surname}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-email">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="address" id="basic-default-name" value="{{$personnel->address}}"/>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="phone_number" id="basic-default-name" value="{{$personnel->phone_number}}"/>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-backdrop fade"></div>
</div>
@include('layouts.footer')