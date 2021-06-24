@extends('layouts.main')

@section('content')

<section class="container mt-5">
    <h1>Soggiorni disponibili</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Tipo</th>
      <th scope="col">Indirizzo</th>
      <th scope="col">CAP</th>
      <th scope="col">Città</th>
      <th scope="col">Nazione</th>
      <th scope="col">Stanze</th>
      <th scope="col">Letti</th>
      <th scope="col">Prezzo</th>
      <th scope="col">Prezzo bambini</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($vacanze as $vacanza)
        <tr>
            <td>{{ $vacanza['type']  }}</td>
            <td>{{ $vacanza['address']  }}</td>
            <td>{{ $vacanza['postal_code']  }}</td>
            <td>{{ $vacanza['city']  }}</td>
            <td>{{ $vacanza['state']  }}</td>
            <td>{{ $vacanza['rooms']  }}</td>
            <td>{{ $vacanza['beds']  }}</td>
            <td>{{ $vacanza['price']  }}</td>
            <td>{{ $vacanza['citkid_price']  }}</td>
        </tr>
      @endforeach

  </tbody>
</table>

</section>

<section class="container">{{ $vacanzas->links() }}</section>


@endsection