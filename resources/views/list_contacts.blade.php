@extends('shared.main')

@section('content')
    <div class="container mt-1">
        <div class="row">
            @forelse ($contacts as $contact)
                <div class="col-4">
                    <div class="card m-1">
                        <div class="card-body">
                        <h5 class="card-title">{{ $contact->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $contact->phone }}</h6>
                        <p class="card-text">
                            {{$contact->address}}
                            -
                            {{$contact->email}}
                        </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-info">
                    No contacts!
                </div>
            @endforelse
        </div>
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
@endsection