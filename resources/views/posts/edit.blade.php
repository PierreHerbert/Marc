@include('crud.partials.header')

<x-head.tinymce-config/>
<section id="Posts">
    <div class="bg-light p-4 rounded">
        <h2>Update post</h2>
        <div class="lead">
            Edit post.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ $post->title }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input value="{{$post->images}}" 
                        type="file" 
                        class="form-control" 
                        name="images" >

                    @if ($errors->has('images'))
                        <span class="text-danger text-left">{{ $errors->first('images') }}</span>
                    @endif
                </div>

                <select name="categorie" id="categorie-select">
                    @foreach ($categories as $key => $categorie)
                        @if($post->categorie_id == $categorie->id)
                            <option value="{{$categorie->id}}" selected>{{$categorie->nom}}</option>
                        @else
                        <option value="{{$categorie->id}}" >{{$categorie->nom}}</option>
                        @endif
                    @endforeach
                </select>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ $post->description }}" 
                        type="text" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea id="myeditorinstance" name="body">{{$post->body}}</textarea>

                    @if ($errors->has('body'))
                        <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Save changes</button>
                <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
</section>
