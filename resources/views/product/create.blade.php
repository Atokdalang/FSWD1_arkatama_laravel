@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Create Product</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" aria-label="category" id="category" name="category">
                                <option selected disabled>- Choose Category -</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image 1</label>
                            <input class="form-control" type="file" name="image1" id="image1"
                                accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input class="form-control" type="file" name="image2" id="image2"
                                accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
