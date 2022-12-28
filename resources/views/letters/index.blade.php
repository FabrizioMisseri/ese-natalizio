@extends('layout.app')

@section('content')
    {{-- Banner --}}
    <section class="bg-secondary">
        <div class="container py-4">
            <h2 class="text-center">Tutte le nostre lettere</h2>
        </div>
    </section>
    {{-- /Banner --}}
    {{-- Table --}}
    <section>
        <div class="container mt-4">
            <div class="text-end mb-4">
                <a href="{{ route('letters.create') }}" class="btn btn-primary">New Letter</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">lastname</th>
                        <th scope="col">gift</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($letters as $letter)
                        <tr>
                            <th scope="row">{{ $letter->name }}</th>
                            <td>{{ $letter->lastname }}</td>
                            <td>{{ $letter->gift }}</td>
                            <td>
                                <a href=" {{ route('letters.show', $letter->id) }} " class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <a href="" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Table --}}
@endsection
