@extends('layouts.main')

@section('content')
    <main>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-5 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-2 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="{{ asset('storage/' . $user->profile_image) }}">
                        <span class="font-weight-bold">{{ $user->name }}</span>
                        <span class="text-black-50">{{ $user->email }}</span>
                        @if ($user->role)
                            <span
                                class="badge {{ $user->role->name == 'admin' ? 'bg-success' : 'bg-primary' }}">{{ $user->role->name }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <form action="{{ route('admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Name</label><input type="text"
                                        class="form-control" id="name" name="name" value="{{ $user->name }}"
                                        required>
                                </div>

                                <div class="col-md-12"><label for="address" class="labels">Alamat</label><input
                                        type="text" class="form-control" id="address" name="address"
                                        value="{{ $user->address ?? '' }}" required></div>

                                <div class="col-md-12"><label for="email" class="labels">Email</label><input
                                        type="text" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}" required></div>

                                <div class="col-md-12"><label for="password" class="labels">Create Password</label><input
                                        type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="col-md-12"><label for="phone" class="labels">Phone</label><input
                                        type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $user->phone }}" required></div>
                            </div>
                            <div class="col-md-12"><label for="profile_image" class="labels">Profile Image</label><input
                                    type="file" class="form-control" id="profile_image" name="profile_image"></div>
                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                    Profile</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
