@extends('shared.main')

@section('content')
<main class="container mt-3">
    @if (request()->get('saved'))
        <div class="alert alert-info">
            Saved!
        </div>
    @endif
    <form action="{{ route('save-contacts') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="The contacts name">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="...">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="...">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
           <button type="submit" class="btn btn-primary mb-3">Save Contacts</button>
        </div>
    </form>
</main> 
@endsection
   