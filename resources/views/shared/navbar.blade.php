<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MC Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item  {{ request()->is('/') ? 'border-bottom' : '' }}">
            <a class="nav-link  {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Create Contacts</a>
          </li>
          <li class="nav-item  {{ request()->is('list-contacts') ? 'border-bottom' : '' }}">
            <a class="nav-link  {{ request()->is('list-contacts') ? 'active' : '' }}" href="{{ route('list-contacts') }}">View Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>