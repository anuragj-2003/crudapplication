<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>CRUD Operation</title>
</head>
<body>
    <div class="bg-dark py-3">
        <h2 class="text-white text-center">CRUD OPERATION</h2>
    </div>
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('products.index')}}" class="btn btn-dark">Go Back</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg borde-0 my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Add Product </h3>
                    </div>
                    <form action="{{ route('products.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input value="{{ old('name') }}" type="text" name="name" id="name"
                                    class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name">
                                @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="price" class="@error('price') is-invalid @enderror form-label h5">Price</label>
                                <input value="{{ old('price') }}" type="text" name="price" id="price"
                                    class="form-control form-control-lg" placeholder="price">
                                @error('price')
                                <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label h5">Description</label>
                                <textarea name="description" id="description" class="form-control form-control-lg"
                                    placeholder="description" rows="2" cols="30">{{ old('name') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label h5">Image</label>
                                <input type="file" name="image" id="image" class="form-control form-control-lg"
                                    placeholder="Image">
                            </div>
                            <div class="mb-3">
                                <label for="totalprice" class="form-label h5">Total Price</label>
                                <input type="text" name="totalprice" id="totalprice" class="form-control form-control-lg"
                                    placeholder="Total Price" readonly>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-dark btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('price').addEventListener('input', function() {
            const price = parseFloat(this.value) || 0;
            document.getElementById('totalprice').value = price.toFixed(2);
        });
    </script>
</body>
</html>
