

<div class="container">
   
<form wire:submit.prevent="save">
   
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" wire:model="selectedCategory" id="category">
          <option value="">Select Category</option>
          @foreach($categories as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
        @error('selectedCategory')<span  class="text-danger" class="error"> {{ $message }}</span> @enderror
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="form-group">
        <label for="subcategory">Subcategory:</label>
        <select class="form-control" wire:model="selectedSubcategory" id="subcategory">
          <option value="">Select Subcategory</option>
          @foreach($subcategories as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
        @error('selectedSubcategory')<span class="text-danger" class="error"> {{ $message }}</span> @enderror
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="subcategory-field">Subcategory Field:</label>
        <select class="form-control" wire:model="selectedSubcategoryField" id="subcategory-field">
          <option value="">Select Subcategory Field</option>
          @foreach($subcategoryFields as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
        </select>
        <span class="error">

       @error('selectedSubcategoryField')<span class="text-danger"  class="error"> {{ $message }}</span> @enderror

      </div>

        @if ($selectedSubcategoryField)
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="field-option">Field Option:</label>
        <select class="form-control" wire:model="" id="field-option">
          <option value="">Select Field Option</option>
          @foreach($fieldOptions as $data)
          <option value="{{$data->id}}">{{$data->name}}</option>
          @endforeach
          
        </select>
       
      @error('selectedFieldOption') <span  class="text-danger" class="error"> {{ $message }}</span> @enderror

      </div>
    </div>
    @endif
  </div>
 
  <!-- Additional form fields -->

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control"  id="name"  wire:model="product.name">
      </div>
      @error('product.name') <span  class="text-danger" class="error"> {{ $message }}</span> @enderror
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="description">Product Description:</label>
        <textarea class="form-control" name="description" id="description"   wire:model="product.description"></textarea>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="price">Product Price:</label>
        <input type="number" class="form-control" name="price" id="price"  wire:model="product.reward_pionts_credit" >
      </div>
    </div>
  </div>

  <button type="submit">Submit</button>
</form>

</div>
