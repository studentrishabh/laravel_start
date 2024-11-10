<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>View Post</h1>

    <form action="{{ route('posts.show', ['id' => $post->id]) }}" method="get">
        @csrf
        @method('get')
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label h5">Name:</label>
            <span id="name" class="form-control form-control-sm">{{ $post->name }}</span>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label h5">Email:</label>
            <span id="email" class="form-control form-control-sm">{{ $post->email }}</span>
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label h5">Mobile:</label>
            <span id="mobile" class="form-control form-control-sm">{{ $post->mobile }}</span>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label h5">city:</label>
            <span id="city" class="form-control form-control-sm">{{ $post->city }}</span>
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label h5">Status:</label>
            <span id="is_active" class="form-control form-control-sm">
                {{ $post->is_active == 1 ? 'Active' : 'Inactive' }}
            </span>
        </div>
    </div>
</form>
</body>
</html>