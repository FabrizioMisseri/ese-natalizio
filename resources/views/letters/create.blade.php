@extends('layout.app')

@section('content')
    <form action=" {{ route('letters.store') }} " method="POST">
        @csrf

        <input type="text" name="name" placeholder="nome">
        <input type="text" name="lastname" placeholder="cognome">
        <input type="text" name="address" placeholder="indirizzo">
        <input type="text" name="city" placeholder="citta">
        <input type="date" name="arrival_date">
        <select name="gift" id="">
            <option value="">seleziona</option>
            <option value="giocattoli">giocattoli</option>
            <option value="vestiti">vestiti</option>
            <option value="droga">droga</option>
            <option value="porno">porno</option>
            <option value="cagne">cagne</option>
            <option value="cura della persona">cura della persona</option>
        </select>
        <textarea name="letter_text" rows="10"placeholder='scrivi lettera'></textarea>
        <input type="number" name="rating" placeholder="rating">
        <input type="number" name="is_delivered" placeholder="consegna">

        <button type="submit">submittalo</button>
    </form>
@endsection
