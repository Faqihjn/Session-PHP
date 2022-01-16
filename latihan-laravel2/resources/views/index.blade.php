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
                    @forelse($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>{{ $todo->created_at }}</td>
                        <td>
                            @if($todo->done_at)
                            <span class="badge badge-info text-white ">Done</span>
                            @else
                            <span class="badge badge-danger text-white ">Pending</span>
                            @endif
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
                    @empty
                    <tr>
                        <td colspan="5">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
