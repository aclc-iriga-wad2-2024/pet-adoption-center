<div class="h-100 d-flex flex-column">
    <div class="navbar justify-content-center flex-shrink-0 px-3" style="height: 72px; border-bottom: 1px solid #444;">
        <a href="#" class="text-white text-decoration-none d-flex justify-content-start">
            <span class="fs-5 fw-bold">Pet Adoption Center</span>
        </a>
    </div>

    <div class="d-flex flex-column flex-grow-1 justify-content-between py-4 overflow-y-auto" style="scrollbar-width: thin; scrollbar-color: auto;">
        <div class="flex-grow-1 px-3">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a
                        href="{{ route('categories.index') }}"
                        class="nav-link fs-6 text-white opacity-50 py-3 {{ Route::is('categories.*') ? 'opacity-100' : ''}}"
                    >
                        <i class="fas fa-fw fa-grid-2 me-1"></i>
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('breeds.index') }}"
                        class="nav-link fs-6 text-white opacity-50 py-3 {{ Route::is('breeds.*') ? 'opacity-100' : ''}}"
                    >
                        <i class="fas fa-fw fa-grid-2 me-1"></i>
                        Breeds
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('customers.index') }}"
                        class="nav-link fs-6 text-white opacity-50 py-3 {{ Route::is('customers.*') ? 'opacity-100' : ''}}"
                    >
                        <i class="fas fa-fw fa-grid-2 me-1"></i>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        href="{{ route('adoptions.index') }}"
                        class="nav-link fs-6 text-white opacity-50 py-3 {{ Route::is('adoptions.*') ? 'opacity-100' : ''}}"
                    >
                        <i class="fas fa-fw fa-grid-2 me-1"></i>
                        Adoptions
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
