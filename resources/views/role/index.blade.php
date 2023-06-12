@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4"><i class="fas fa-user-cog"></i> Role</h1>

            <a href="{{ route('role.create') }}" class="btn btn-primary mb-2"><i class="fas fa-plus">
                </i> Create New
            </a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <form action="{{ route('role.destroy', $role->id) }}" method="POST"
                                            class="d-inline">
                                            <a href="{{ route('role.edit', $role->id) }}" class="btn btn-warning"><i
                                                    class="fas fa-edit">
                                                </i> Edit
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure?')">
                                                <i class="fas fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
