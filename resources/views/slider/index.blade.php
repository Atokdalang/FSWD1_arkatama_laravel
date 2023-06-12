@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4"><i class="fas fa-sliders-h"></i> Slider</h1>
            <a class="btn btn-primary mb-2" href="{{ route('slider.create') }}" role="button">
                <i class="fas fa-plus"></i> Create</a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Caption</th>
                                <th>Image</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->caption }}</td>
                                    <td>
                                        @if ($slider->image)
                                            <img src="{{ asset('storage/' . $slider->image) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $slider->image }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>

                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                                            <a href="{{ route('slider.edit', $slider->id) }}"
                                                class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
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
