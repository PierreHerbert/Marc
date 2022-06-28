@include('crud.partials.header')

<section >
    <form method="POST" action="{{ route('categorie.update', $categorie->id) }}" >
    @method('patch')
    @csrf
        <input type="text" name="nom" placeholder="Nom de la catégorie" value="{{ $categorie->nom }}">
        <button type="submit" class="btn btn-primary">Modifier</button>
        <a href="" class="btn btn-default">Back</a>
    </form>

</section>