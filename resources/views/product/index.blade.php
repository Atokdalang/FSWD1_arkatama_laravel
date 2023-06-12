@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4"><i class="fas fa-shopping-cart"></i> Product</h1>

            <a class="btn btn-primary mb-2" href="{{ route('product.create') }}" role="button">
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
                                <th>Image 1</th>
                                <th>Image 2</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($product->image1)
                                            <img src="{{ asset('storage/' . $product->image1) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $product->image1 }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>
                                    <td>
                                        @if ($product->image2)
                                            <img src="{{ asset('storage/' . $product->image2) }}" class="img-fluid"
                                                style="max-width: 100px;" alt="{{ $product->image2 }}">
                                        @else
                                            <!-- Tampilkan placeholder atau pesan gambar tidak tersedia -->
                                        @endif
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Are you sure? ');"
                                            action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            <a href="{{ route('product.edit', $product->id) }}"
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
