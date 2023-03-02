<form method="post" action="{{route('wishlist.update', $wishItem->id)}}">
    @method('PUT')
    @csrf
    <input type="text" name="name" placeholder="{{$wishItem->name}}">
    <input type="number" name="price" min="0.00" max="10000000.00" step="0.01" placeholder="{{$wishItem->price}}">
    <input type="text" name="store_name" placeholder="{{$wishItem->store_name}}">
    <input type="text" name="store_url" placeholder="{{$wishItem->store_url}}">
    <select name="category">
        <option value="">Choose category</option>
        <option value="clothes">Clothes</option>
        <option value="cosmetics">Beauty</option>
        <option value="health">Health</option>
        <option value="fitness">Fitness</option>
        <option value="hobbies">Hobbies</option>
        <option value="household">Household</option>
        <option value="transport">Transport</option>
        <option value="games">Games</option>
        <option value="pets">Pets</option>
    </select>
    <textarea id="reflection" name="reflection">{{$wishItem->reflection}}</textarea>
    <button type="submit">Edit</button>
</form>
