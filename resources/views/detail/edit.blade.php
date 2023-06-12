@extends('layouts.main')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Edit Detail Product</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('detail.update', $detail->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select" aria-label="category" id="category" name="category">
                                <option selected disabled>- Choose Category -</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $detail->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="{{ $detail->name }}" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" value="{{ $detail->price }}" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image1" class="form-label">Image 1</label>
                            <input class="form-control" type="file" name="image1" id="image1" accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <div class="mb-3">
                            <label for="image2" class="form-label">Image 2</label>
                            <input class="form-control" type="file" name="image2" id="image2" accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <div class="mb-3">
                            <label for="image3" class="form-label">Image 3</label>
                            <input class="form-control" type="file" name="image3" id="image3" accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('detail.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
