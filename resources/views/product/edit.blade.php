@extends('master')
@section('title')
    Edit product
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('update_product')}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="product_id" value="{{$product->id}}">

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control" value="{{$product->category_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Brand name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control" value="{{$product->brand_name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="price" class="form-control" value="{{$product->price}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control-file" >
                                        <img src="{{asset($product->image)}}" alt="" style="height: 100px; width: 100px">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="product_description" id="" cols="30" rows="2" class="form-control" > {{$product->product_description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Product Stutas</label>
                                    <div class="col-md-8">
                                        <label for=""> <input type="radio" name="status" {{$product->status == 1? 'checked': ''}} value="1">Published</label>
                                        <label for=""> <input type="radio" name="status" {{$product->status == 0? 'checked': ''}}  value="0">Unpublished</label>

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <input type="submit" name="" class="btn btn-outline-success btn-block" value="update product">
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
