@extends('base')

@section('title')
    Accueil
@endsection

@section('styles')
<head>
    <!-- Autres balises head -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-TBDQF5J7J4blC+HNHGpn3bV6Hyuc+2uKwfazB2+gdxftFjDS2+oLhAl6qmGvX9zF" crossorigin="anonymous">
</head>

<style>
    .jumbotron-bg {
        background-image: url('{{ asset("images/background_acceuil.png") }}');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 0; /* Ajustez le rembourrage selon vos besoins */
    }

    .jumbotron h1 {
        margin-bottom: 20px; /* Ajustez l'espacement en fonction de vos besoins */
    }

    /* Stylisation des boutons */
    .btn-custom {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        margin-right: 10px;
    }

    /* Stylisation des icônes */
    .fa-chevron-left,
    .fa-chevron-right {
        font-size: 18px;
        margin-right: 5px; /* Espacement entre l'icône et le texte */
    }

    /* CSS pour redimensionner la vidéo */
    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* Ratio 16:9 pour les vidéos YouTube */
        padding-top: 30px;
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none; /* Supprimer les bordures de la vidéo */
    }

</style>
@endsection

@section('content')

<div class="row">
    <div class="col-md-6">
        <h2>Activités En Vedette</h2>
        <p>Découvrez nos activités variées conçues pour divertir, éduquer et inspirer. Il y en a pour tous les goûts!</p>
    </div>
</div>

@endsection
