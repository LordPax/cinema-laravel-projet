<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Film : {{ $film->titre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li>Titre : {{ $film->titre }}</li>
                        <li>Id : {{ $film->id_film }}</li>
                        <li>Genre : <a href="{{ route('showfilmsbygenre', $film->id_genre) }}">{{ $film->genre->nom }}</a></li>
                        <li>Producteur : {{ $film->id_producteur }}</li>
                        <li>Résumé : {{ $film->resum }}</li>
                        <li>Début : affiche {{ $film->date_debut_affiche }}</li>
                        <li>Fin affiche : {{ $film->date_fin_affiche }}</li>
                        <li>Durée minute : {{ $film->duree_minute }}</li>
                        <li>Année production : {{ $film->annee_production }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
