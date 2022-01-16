@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Todo List</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">Title</th>
                        <th scope="col ">Description</th>
                        <th scope="col ">Created At</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Membeli Sayur</td>
                        <td>Membeli sayur di pasar kebayoran</td>
                        <td>2 Juli 2021 - 09:00:45</td>
                        <td>
                            <span class="badge badge-info text-white ">Done</span>
                            <span class="badge badge-danger text-white ">Pending</span>
                        </td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <a href="# " class="btn btn-primary text-white ">
                                    <i class='bx bx-check'></i>
                                </a>
                                <a href="# " class="btn btn-info text-white ">
                                    <i class='bx bx-pencil'></i>
                                </a>
                                <a href="# " class="btn btn-danger text-white ">
                                    <i class='bx bx-trash'></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection