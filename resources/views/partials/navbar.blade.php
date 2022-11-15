@if ($title != 'Create' && $title != 'Edit')

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('index') }}">{{ $title }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link {{ ($title === "History") ? 'active' : '' }}" href="{{ route('history') }}">History</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  {{-- Tombol Plus Create --}}
<div class="create">
  <a href="{{ route('create') }}">
      <img class="plus" src="img/plus.svg">
  </a>
  </div>

  @else

  <div class="back mb-3">
    <a href="{{ route('index') }}"><img src="img/left.svg" class="left-icon"></a>
  </div>

  @endif
