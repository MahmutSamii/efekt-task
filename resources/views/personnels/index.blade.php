@include('layouts.header')
@include('layouts.main')
@yield('content')
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <a href="{{route('personnels.create')}}" class="btn btn-primary btn-sm float-end mt-3">Create Person</a>
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
        <div class="card">
            <h5 class="card-header">Hoverable rows</h5>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($personnels as $person)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$person->name}}</strong>
                            </td>
                            <td>{{$person->surname}}</td>
                            <td>
                                {{$person->phone_number}}
                            </td>
                            <td>{{$person->address}}</td>
                            <td class="d-flex flex-row">
                                <a href="{{route('personnels.edit',$person->id)}}"
                                ><i class="bx bx-edit-alt me-1"></i></a
                                >
                                <a href="{{route('personnels.destroy',$person->id)}}"
                                ><i class="bx bx-trash me-1"></i></a
                                >
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="content-backdrop fade"></div>
</div>
@include('layouts.footer')