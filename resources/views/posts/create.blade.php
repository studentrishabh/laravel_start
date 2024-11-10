<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create New Post</h1>
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{old('name')}}" required>
    @error('name')<div>{{ $message }}</div>@enderror
</br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="{{old('email')}}" required>
    @error('email')<div>{{ $message }}</div>@enderror
</br>
    <label for="mobile">mobile:</label>
    <input type="text" id="mobile" name="mobile" value="{{old('mobile')}}" required>
    @error('mobile')<div>{{ $message }}</div>@enderror
</br>
    <label for="city">City:</label>
    <select name="city" id="city">
        <option value="select">select</option>
        <option value="noida">Noida</option>
        <option value="gorgaon">Gurgaon</option>
        <option value="delhi">Delhi</option>
        <option value="patna">Patna</option>
    </select>
    @error('city')<div>{{ $message }}</div>@enderror
</br>
    <label for="status">Status:</label>
    <select name="status" id="status">
        <option value="select">select</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    @error('status')<div>{{ $message }}</div>@enderror
</br>
    <label for="password">Password</label>
    <input type="password" name="password">
    @error('password')
   <div>{{$message}}</div>     
    @enderror
</br>
    <button type="submit">Create Post</button>
</form>

    
</body>
</html>