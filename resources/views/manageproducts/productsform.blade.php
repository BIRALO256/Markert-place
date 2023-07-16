@extends('layouts.master')


@section('top')
    <!-- Log on to codeastro.com for more projects! -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="category">Category:</label>
        <select class="form-control" wire:model="selectedCategory" id="category">
          <option value="">Select Category</option>
          <option value="">Category 1</option>
          <option value="">Category 2</option>
        </select>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="form-group">
        <label for="subcategory">Subcategory:</label>
        <select class="form-control" wire:model="" id="subcategory">
          <option value="">Select Subcategory</option>
          <option value="">Subcategory 1</option>
          <option value="">Subcategory 2</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="subcategory-field">Subcategory Field:</label>
        <select class="form-control" wire:model="selectedSubcategoryField" id="subcategory-field">
          <option value="">Select Subcategory Field</option>
          <option value="">Field 1</option>
          <option value="">Field 2</option>
        </select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="field-option">Field Option:</label>
        <select class="form-control" wire:model="selectedFieldOption" id="field-option">
          <option value="">Select Field Option</option>
          <option value="">Option 1</option>
          <option value="">Option 2</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Additional form fields -->

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="name">Product Name:</label>
        <input type="text" class="form-control" name="name" id="name">
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label for="description">Product Description:</label>
        <textarea class="form-control" name="description" id="description"></textarea>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="price">Product Price:</label>
        <input type="number" class="form-control" name="price" id="price">
      </div>
    </div>
  </div>
</div>





@endsection