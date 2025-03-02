<x-layout>
    <!-- Page title -->
    <x-slot:page_title>
        Edit Category: {{ $category->name }}
    </x-slot:page_title>

    <!-- Header buttons -->
    <x-slot:header_buttons>
        <a href="{{ route('categories.index') }}" class="btn btn-outline-success">All Categories</a>
    </x-slot:header_buttons>

    <!-- Edit category form -->
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ route('categories.update', $category)  }}">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Category Name</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="example: Dog, Cat, Crocodile"
                        value="{{ $category->name }}"
                        autofocus
                    >
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-success">Update</button>

                <!-- Cancel button -->
                <a href="{{ route('categories.index') }}" class="btn">Cancel</a>
            </form>
        </div>
    </div>
</x-layout>
