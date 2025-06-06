<header class="header">
  <nav class="navbar navbar-expand-lg">
    <div class="search-panel">
      <div class="search-inner d-flex align-items-center justify-content-center">
        <div class="close-btn">
          Close 
          <i class="fa fa-close"></i>
        </div>
        <form id="searchForm" action="#">
          <div class="form-group">
            <input type="search" name="search" placeholder="What are you searching for...">
            <button type="submit" class="submit">Search</button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <div class="navbar-header">
        <!-- Navbar Header-->
        <a href="index.html" class="navbar-brand">
          <div class="visible brand-text brand-big text-uppercase">
            <strong class="text-primary">Dark</strong><strong>Admin</strong>
          </div>
          <div class="brand-text brand-sm">
            <strong class="text-primary">D</strong>
            <strong>A</strong>
          </div>
        </a>
        <div class="list-inline-item logout">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Logout">
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>