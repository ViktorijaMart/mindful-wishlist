@extends('layouts.app')

@section('content')
    <form method="post" action="{{route('wishlist.store')}}" class="wishlist-form create-form">
        @csrf
        <h2 class="wishlist-form_title">Add new wish</h2>
        <input type="text" name="name" placeholder="Item name" required/>
        <input type="number" name="price" min="0.00" max="10000000.00" step="0.01" placeholder="Price" required>
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
        <div class="radios_yes-no">
            <div class="radio_yes-no">
                <input type="radio" id="afford-yes" name="afford" value="yes"  class="checkbox" required>
                <label for="afford-yes">Yes</label>
            </div>
            <div class="radio_yes-no">
                <input type="radio" id="afford-no" name="afford" value="no"  class="checkbox">
                <label for="afford-no">No</label>
            </div>
        </div>
        <p>Can you rent this item?</p>
        <div class="radios_yes-no">
            <div class="radio_yes-no">
                <input type="radio" id="rent-yes" name="rent" value="yes"  class="checkbox" required>
                <label for="rent-yes">Yes</label>
            </div>
            <div class="radio_yes-no">
                <input type="radio" id="rent-no" name="rent" value="no" class="checkbox">
                <label for="rent-no">No</label>
            </div>
        </div>
        <div>
            <p>Set reminder</p>
            <div class="create-form_reminder">
                <input type="number" name="reminder_number">
                <select name="reminder_unit">
                    <option value="H">hour/hours</option>
                    <option value="D">day/days</option>
                    <option value="W">week/weeks</option>
                </select>
            </div>
        </div>
        <label for="reflection">Reflection:</label>
        <textarea id="reflection" name="reflection" cols="50" rows="6"></textarea>
        <p>Add tags</p>
        <div class="create-form_tags">
            <div class="create-form_tag">
                <input type="checkbox" id="high-quality" name="high-quality" class="checkbox">
                <label for="high-quality">High-quality</label>
            </div>
            <div class="create-form_tag">
                <input type="checkbox" id="low-quality" name="low-quality" class="checkbox">
                <label for="low-quality">Low-quality</label>
            </div>
            <div class="create-form_tag">
                <input type="checkbox" id="healthy" name="healthy" class="checkbox">
                <label for="healthy">Healthy</label>
            </div>
            <div class="create-form_tag">
                <input type="checkbox" id="sustainable" name="sustainable" class="checkbox">
                <label for="sustainable">Sustainable</label>
            </div>
        </div>
        <button type="submit" class="button--bigger create-form_button">Add</button>
    </form>
@endsection
