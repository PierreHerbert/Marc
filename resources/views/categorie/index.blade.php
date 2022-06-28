@include('crud.partials.header')

<section id="Categorie">
    


    <div class="bg-light p-4 rounded">
        <div class="ajouter">
            <a href="{{ route('categorie.create') }}" class="btn btn-primary btn-sm float-right">Ajouter une Categorie</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="5%">No</th>
             <th width="20%">Name</th>
             <th width="20%" colspan="3">Action</th>
          </tr>
            @foreach ($categories as $key => $categorie)
            <tr>
                <td class="numero">{{ $categorie->id }}</td>
                <td class="titre">{{ $categorie->nom }}</td>
                <td class="actions">
                    <a class="btn btn-primary btn-sm" href="{{ route('categorie.edit', $categorie->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['categorie.destroy', $categorie->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</section>