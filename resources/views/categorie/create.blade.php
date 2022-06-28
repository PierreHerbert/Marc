@include('crud.partials.header')

<section >
    <form method="POST" action="{{ route('categorie.store') }}" >
    @csrf
        <input type="text" name="nom" placeholder="Nom de la catégorie" value="{{ old('nom') }}">
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="" class="btn btn-default">Back</a>
    </form>

</section>