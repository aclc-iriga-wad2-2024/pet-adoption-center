<x-layout>
    <!-- Page title -->
    <x-slot:page_title>
        Category: {{ $category->name }}
    </x-slot:page_title>

    <!-- Header buttons -->
    <x-slot:header_buttons>
        <a href="{{ route('categories.index') }}" class="btn btn-outline-success">All Categories</a>
    </x-slot:header_buttons>

    <!-- Category info -->
    <div class="row">
        <div class="col-md-6">
            <h5 class="fw-bold">Category Details</h5>
            <p><strong>Name:</strong> {{ $category->name }}</p>
        </div>
    </div>

    <!-- Action buttons -->
    <div class="mt-3">
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-outline-primary btn-sm">
            Edit
        </a>

        <!-- Delete Form -->
        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this category?');">
                Delete
            </button>
        </form>
    </div>
</x-layout>
