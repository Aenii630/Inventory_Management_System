<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">
    <h2>✏️ Edit Item</h2>
    <hr>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Item Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $item->name) }}">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Category</label>
                <select name="category" class="form-control @error('category') is-invalid @enderror">
                    <option value="">-- Select Category --</option>
                    <option value="Electronics" {{ old('category', $item->category) == 'Electronics' ? 'selected' : '' }}>Electronics</option>
                    <option value="Clothing" {{ old('category', $item->category) == 'Clothing' ? 'selected' : '' }}>Clothing</option>
                    <option value="Food" {{ old('category', $item->category) == 'Food' ? 'selected' : '' }}>Food</option>
                    <option value="Furniture" {{ old('category', $item->category) == 'Furniture' ? 'selected' : '' }}>Furniture</option>
                    <option value="Other" {{ old('category', $item->category) == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                @error('category')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $item->description) }}</textarea>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Purchase Price (Rs.)</label>
                <input type="number" step="1" min="1000" name="purchase_price" class="form-control @error('purchase_price') is-invalid @enderror" value="{{ old('purchase_price', $item->purchase_price) }}">
                @error('purchase_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label>Selling Price (Rs.)</label>
                <input type="number" step="1" min="1000" name="selling_price" class="form-control @error('selling_price') is-invalid @enderror" value="{{ old('selling_price', $item->selling_price) }}">
                @error('selling_price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-4 mb-3">
                <label>Quantity</label>
                <input type="number" step="1" min="0" name="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $item->quantity) }}">
                @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary">Update Item</button>
        <a href="{{ route('items.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</body>
</html>