@extends('base')
@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create Todo</h5>

            <form>
                <div class="form-group">
                    <label for="example-todo-title">Tuliskan judul to-do</label>
                    <input type="text" class="form-control" id="example-todo-title" aria-describedby="emailHelp" placeholder="Enter to-do title" required>
                    <small id="emailHelp" class="form-text text-muted">Judul to-do minimal berisi 5 karakter.</small>
                </div>

                <div class="form-group">
                    <label for="example-todo-desc">Jelaskan deskripsi to-do</label>
                    <textarea rows="3" class="form-control" id="example-todo-desc" aria-describedby="emailHelp" placeholder="Enter to-do description"></textarea>
                    <small id="emailHelp" class="form-text text-muted">Kamu dapat menuliskan deskripsi to-do secara detail pada kolom ini.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection