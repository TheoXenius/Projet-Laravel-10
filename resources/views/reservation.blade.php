@extends('base')

@section('title', 'Reservation')

@section('content')
  <body>
    <div class="form-container">
    <form class="form-center" action="">
      <h4>Réservation</h4>
      <hr />
      <div class="name-field"></div>
      <div>
        <label>Nom</label>
        <input type="text" />
      </div>
      <div>
        <label>Prénom</label>
        <input type="text" />
      </div>
      <div>
        <label>Heure de Réservation</label>
        <input type="text" />
      </div>
      <div>
        <label>Nombre de personne</label>
        <input type="text" />
      </div>
      <div>
        <label>Numéro de télephone</label>
        <input type="text" />
      </div>
      <label>Adresse Mail</label>
      <input type="email" />
      <input type="submit" value="Envoyer" />
    </form>
    </div>
  </body>
  @endsection
