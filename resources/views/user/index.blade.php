@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4"><i class="fas fa-user"></i> User</h1>

            <a href="{{ route('user.create') }}" class="btn btn-primary mb-2">
                <i class="fas fa-plus"></i>
                Create User
            </a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Avatar</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $user->profile_image) }}" alt="avatar"
                                            width="50" height="50">
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>
                                        @if ($user->role)
                                            <span
                                                class="badge {{ $user->role->name == 'admin' ? 'bg-success' : 'bg-primary' }}">{{ $user->role->name }}</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            class="d-inline">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i> Edit
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
