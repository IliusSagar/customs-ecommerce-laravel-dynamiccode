

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/')}}">Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li> --}}


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('categories.list')}}">List Category </a></li>
            <li><a class="dropdown-item" href="{{ route('categories.add')}}">Add Category </a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Brand
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('brands.list')}}">List Brand </a></li>
              <li><a class="dropdown-item" href="{{ route('brands.add')}}">Add Brand </a></li>

            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sub Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('subcategories.list')}}">List SubCategory </a></li>
              <li><a class="dropdown-item" href="{{ route('subcategories.add')}}">Add SubCategory </a></li>

            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Coupon
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('coupons.list')}}">List Coupon </a></li>
              <li><a class="dropdown-item" href="{{ route('coupons.add')}}">Add Coupon </a></li>

            </ul>
          </li>


      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
