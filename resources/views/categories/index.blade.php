<x-layout>
    <!-- Page title -->
    <x-slot:page_title>
        Categories
    </x-slot:page_title>

    <!-- Header buttons -->
    <x-slot:header_buttons>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a>
    </x-slot:header_buttons>

    <!-- Success message (if any) -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Categories table -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th style="width: 30px;">#</th>
                <th>Breed Name</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}.</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="text-secondary text-decoration-none fw-bold">
                            {{ $category->name }}
                        </a>
                    </td>
                    <td>
                        <div class="d-flex justify-content-end gap-2">
                            <!-- View button -->
                            <a href="{{ route('categories.show', $category) }}" class="btn btn-outline-secondary btn-sm">
                                View
                            </a>

                            <!-- Edit button -->
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-outline-primary btn-sm">
                                Edit
                            </a>

                            <!-- Delete form -->
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-outline-danger btn-sm"
                                    onclick="return confirm('Are you sure to delete {{ $category->name }} category?');"
                                >
                                    Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
