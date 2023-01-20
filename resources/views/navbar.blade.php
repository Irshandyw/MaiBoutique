<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/isi"><b>Mai Boutique</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/isi">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"href="/search">Search</a>
          </li>
          @if (Auth::user()->email!=="bypass@gmail.com")
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"href="/cart">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/history">History</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/profile">Profile</a>
          </li>
        </ul>

      </div>
      <ul class="navbar-nav">
      @if (Auth::user()->email=="bypass@gmail.com")
      <a class="nav-link active" aria-current="page" href="/add-item">
        Add Item
    </a>
      @endif
        <li class="nav-item dropdown" >
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
        </a>

        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
    </div>
  </nav>


<style>
nav ul li{
    display: inline-block;
    margin: 0 20px;
}

</style>
