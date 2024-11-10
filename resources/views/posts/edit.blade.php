<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit View</h1>
    <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
        @csrf
   @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name', $post->name) }}">
        @error('name')<div>{{ $message }}</div>@enderror
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email', $post->email) }}">
        @error('email')<div>{{ $message }}</div>@enderror
        <br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="{{ old('mobile', $post->mobile) }}">
        @error('mobile')<div>{{ $message }}</div>@enderror
        <br>
  
        <label for="city">City:</label>
        <select name="city" id="city">
            <option value="">Select</option>
            <option value="noida" {{ old('city', $post->city) == 'noida' ? 'selected' : '' }}>Noida</option>
            <option value="gurgaon" {{ old('city', $post->city) == 'gurgaon' ? 'selected' : '' }}>Gurgaon</option>
            <option value="delhi" {{ old('city', $post->city) == 'delhi' ? 'selected' : '' }}>Delhi</option>
            <option value="patna" {{ old('city', $post->city) == 'patna' ? 'selected' : '' }}>Patna</option>
        </select>
        @error('city')<div>{{ $message }}</div>@enderror
        <br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="">Select</option>
            <option value="active" {{ old('status', $post->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status', $post->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status')<div>{{ $message }}</div>@enderror
        <br>
    
        <button type="submit">Update Post</button>
    </form>    
</body>
</html>