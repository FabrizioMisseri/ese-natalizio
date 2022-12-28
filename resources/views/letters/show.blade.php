@extends('layout.app')

@section('content')
    <section>
        <div class="container">
            <h2>letter {{ $letter->id }}</h2>

            <dl>
                <dt>Nome</dt>
                <dd>{{ $letter->name }}</dd>
                <dt>last_cognome</dt>
                <dd>{{ $letter->lastname }}</dd>
                <dt>Text</dt>
                <dd>{{ $letter->letter_text }}</dd>
                <dt>gift</dt>
                <dd>{{ $letter->gift }}</dd>
            </dl>

        </div>
    </section>
@endsection
