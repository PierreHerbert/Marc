@include('crud.partials.header')

<x-head.tinymce-config/>
<section id="Posts">
    <div class="bg-light p-4 rounded">
        <h2>Add new post</h2>
        <div class="lead">
            Add new post.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="" 
                        type="file" 
                        class="form-control" 
                        name="images" 
                        placeholder="Image" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input value="{{ old('description') }}" 
                        type="text" 
                        class="form-control" 
                        name="description" 
                        placeholder="Description"
                        maxlength = "120" required>

                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                <select name="categorie" id="categorie-select">
                    @foreach ($categories as $key => $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                    @endforeach
                </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea id="myeditorinstance" name="body">Hello, World!</textarea>

                    @if ($errors->has('body'))
                        <span class="text-danger text-left">{{ $errors->first('body') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Ajouter</button>
                <a href="{{ route('posts.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
</section>