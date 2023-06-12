@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4"><i class="fas fa-sticky-note"></i> Detail Product</h1>

            <a class="btn btn-primary mb-2" href="{{ route('detail.create') }}" role="button">
                <i class="fas fa-plus"></i> Create
            </a>

            <div class="card mb-4">
                <div class="card-body">
                    <table id="datatablesSimple" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Image 3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $detail)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $detail->category->name }}</td>
                                    <td>{{ $detail->name }}</td>
                                    <td>Rp. {{ number_format($detail->price, 0, ',', '.') }}</td>
                                    <td>{{ $detail->description }}</td>
                                    <td>
                                        @if ($detail->image1)
                                            <img src="{{ asset('storage/' . $detail->image1) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $detail->image1 }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>
                                    <td>
                                        @if ($detail->image2)
                                            <img src="{{ asset('storage/' . $detail->image2) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $detail->image2 }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>
                                    <td>
                                        @if ($detail->image3)
                                            <img src="{{ asset('storage/' . $detail->image3) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $detail->image3 }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('detail.destroy', $detail->id) }}" method="POST">
                                            <a href="{{ route('detail.edit', $detail->id) }}"
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
