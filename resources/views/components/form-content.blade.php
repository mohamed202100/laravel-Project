<div>
    @csrf
    <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{old('name')}}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="{{old('email')}}">
        @error('email')
            <div style="color: red;">{{ $message }}</div>
        @enderror
</div>
