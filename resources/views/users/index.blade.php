@include('layouts.header')
@include('layouts.main')
@yield('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">User Profile</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="POST" action="{{route('user.post',$user->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                            ><i class="bx bx-user"></i
                                ></span>
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="John Doe"
                                            aria-label="John Doe"
                                            value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                                            aria-describedby="basic-icon-default-fullname2"
                                            disabled
                                    />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-address">Address</label>
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                            ><i class="bx bx-buildings"></i
                                ></span>
                                    <input
                                            type="text"
                                            id="basic-icon-default-company"
                                            class="form-control"
                                            value="{{$user->address}}"
                                            name="address"
                                            placeholder="ACME Inc."
                                            aria-label="ACME Inc."
                                            aria-describedby="basic-icon-default-company2"
                                    />
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                                <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                            ><i class="bx bx-phone"></i
                                ></span>
                                    <input
                                            type="text"
                                            id="basic-icon-default-phone"
                                            class="form-control phone-mask"
                                            value="{{$user->phone_number}}"
                                            name="phone_number"
                                            placeholder="658 799 8941"
                                            aria-label="658 799 8941"
                                            aria-describedby="basic-icon-default-phone2"
                                    />
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row">
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="photograph" type="file" id="formFile"/>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end">
                                    <img src="{{asset($user->photograph)}}" alt="{{$user->name}}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')