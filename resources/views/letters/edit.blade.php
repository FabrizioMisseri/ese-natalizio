@extends('layout.app')

@section('content')
    <form action=" {{ route('letters.update', $letter->id) }} " method="POST">
        @method('PUT')
        @csrf

        <input type="text" value=' {{ $letter->name }} ' name="name" placeholder="nome">
        <input type="text" value=' {{ $letter->lastname }} ' name="lastname" placeholder="cognome">
        <input type="text" value=' {{ $letter->address }} ' name="address" placeholder="indirizzo">
        <input type="text" value=' {{ $letter->city }} ' name="city" placeholder="citta">
        <input type="date" value=' {{ $letter->arrival_date }} ' name="arrival_date">
        <select value=' {{ $letter->gift }} ' name="gift" id="">
            <option value="">seleziona</option>
            <option value="giocattoli" @selected($letter->gift === 'giocattoli')>giocattoli</option>
            <option value="vestiti" @selected($letter->gift === 'vestiti')>vestiti</option>
            <option value="droga" @selected($letter->gift === 'droga')>droga</option>
            <option value="porno" @selected($letter->gift === 'porno')>porno</option>
            <option value="cagne" @selected($letter->gift === 'cagne')>cagne</option>
            <option value="cura della persona" @selected($letter->gift === 'cura della persona')>cura della persona</option>
        </select>
        <textarea name="letter_text" rows="10"placeholder='scrivi lettera'> {{ $letter->letter_text }} </textarea>
        <input type="number" value=' {{ $letter->rating }} ' name="rating" placeholder="rating">
        <input type="number" value=' {{ $letter->is_delivered }} ' name="is_delivered" placeholder="consegna">

        <button type="submit">submittalo</button>
    </form>
@endsection
