<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>All Posts</h1>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="{{ route('posts.create') }}">Create New Post</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>mobile</th>
            <th>City</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr id="post-{{ $post->id }}">
                <td>{{ $post->name }}</td>
                <td>{{ $post->email }}</td>
                <td>{{ $post->mobile }}</td>
                <td>{{ $post->city }}</td>
                <td>{{ $post->status }}</td>
                <td>
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}" onclick="updatePost">
                        <button>Edit</button>
                    </a>

                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                        <button>view</button>
                    </a>
                    <button onclick="deletePost({{ $post->id }})">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function updatePost(postId) {
        $.ajax({
            url: `/posts/${postId}`,
            type: 'PUT',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                mobile: $('#mobile').val(),
                city: $('#city').val(),
                status: $('#status').val(),
                password: $('#password').val(),
                // _token: '{{ csrf_token() }}' // Add CSRF token for security
            },
            success: function(response) {
                alert(response.success); 
            },
            error: function() {
                alert(' Please try again.');
            }
        });
    }
</script>





<script>
    function deletePost(postId) {
        if (confirm("Are you sure you want to delete this post?")) {
            $.ajax({
                url: `/posts/delete/${postId}`,
                type: 'DELETE',
                data: {
                    // _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert(response.success);
                    // location.reload();
                },
            });
        }
    }
</script>
