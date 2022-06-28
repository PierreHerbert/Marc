@include('crud.partials.header')

<section id="Posts">
    


    <div class="bg-light p-4 rounded">
        <div class="ajouter">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">Add post</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="5%">No</th>
             <th width="20%">Name</th>
             <th width="30%">Image</th>
             <th width="25%">Description</th>
             <th width="20%" colspan="3">Action</th>
          </tr>
            @foreach ($posts as $key => $post)
            <tr>
                <td class="numero">{{ $post->id }}</td>
                <td class="titre">{{ $post->title }}</td>
                <td class="image">
                    <img src="{{asset('images/posts/'.$post->images)}}" alt="">
                </td>
                <td class="descrition">
                    <p>{{$post->description}}</p>
                </td>
                <td class="actions">
                    <a class="btn btn-info btn-sm" href="{{ route('posts.show', $post->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('posts.edit', $post->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $posts->links() !!}
        </div>

    </div>
</section>