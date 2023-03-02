<form method="post" action="{{route('wishlist.store')}}">
    @csrf
    <input type="text" name="name" placeholder="Item name" required/>
    <input type="number" name="price" min="0.00" max="10000000.00" step="0.01" placeholder="price">
    <input type="text" name="store_name" placeholder="Store name">
    <input type="text" name="store_url" placeholder="Store/Item URL">
    <select name="category" required>
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
    <p>Can you afford to buy this item twice?</p>
    <div>
        <input type="radio" id="afford-yes" name="afford" value="yes" required>
        <label for="afford-yes">Yes</label>
    </div>
    <div>
        <input type="radio" id="afford-no" name="afford" value="no">
        <label for="afford-no">No</label>
    </div>
    <p>Can you rent this item?</p>
    <div>
        <input type="radio" id="rent-yes" name="rent" value="yes"  required>
        <label for="rent-yes">Yes</label>
    </div>
    <div>
        <input type="radio" id="rent-no" name="rent" value="no">
        <label for="rent-no">No</label>
    </div>
    <div>
        <p>Set reminder</p>
        <input type="number" name="reminder_number">
        <select name="reminder_unit">
            <option value="hour">hour/hours</option>
            <option value="day">day/days</option>
            <option value="week">week/weeks</option>
        </select>
    </div>
    <label for="reflection">Reflection:</label>
    <textarea id="reflection" name="reflection"></textarea>
    <p>Add tags</p>
    <div>
        <input type="checkbox" id="high-quality" name="high-quality">
        <label for="high-quality">High-quality</label>
    </div>
    <div>
        <input type="checkbox" id="low-quality" name="low-quality">
        <label for="low-quality">Low-quality</label>
    </div>
    <div>
        <input type="checkbox" id="healthy" name="healthy">
        <label for="healthy">Healthy</label>
    </div>
    <div>
        <input type="checkbox" id="sustainable" name="sustainable">
        <label for="sustainable">Sustainable</label>
    </div>
    <button type="submit">Add</button>
</form>
