@extends('admin.layouts.master')

@section('title')
Thêm sản phẩm 
@endsection
@section('content')

	<div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h6>
            </div>
<div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        	@csrf
                            <fieldset class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm">
                                @error('name')
                                <div class="alert alert-danger">Tên loại sản phẩm không được bỏ trống</div>
                                @enderror
                            </fieldset>

                               <div class="form-group">
                                <label for="quantity">Số lượng</label> 
                                <input type="number" name="quantity" min="1" value="1" class="form-control">
                                @error('quantity')
                                <div class="alert alert-danger"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for="price">Đớn giá</label> 
                                <input type="text" name="price" placeholder="Nhập đơn giá" class="form-control">
                                 @error('price')
                                <div class="alert alert-danger"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for="promotional">Giá khuyến mại</label> 
                                <input type="number" name="promotional" value="0" placeholder="Nhập giá khuyến mại nếu có " class="form-control">
                                 @error('promotional')
                                <div class="alert alert-danger"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for="price">Ảnh minh họa</label> 
                                <input type="file" name="image" class="form-control">
                                 @error('image')
                                <div class="alert alert-danger"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea name="description" id="demo" cols="5" rows="5" class="form-control description"></textarea>
                                     @error('description')
                                <div class="alert alert-danger errorDescription "></div>
                                @enderror
                                </div>

                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control cateProduct" name="idcategory">
                                    @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                      
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control proTypeProduct" name="idproducttype">
                                    @foreach($producttype as $pro)
                                    <option value="{{$pro->id}}">{{$pro->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                   
                                </select>
                            </div>

                          

                            <button type="submit" class="btn btn-danger">Thêm </button>
                            <button type="reset" class="btn btn-primary">Nhập Lại</button>
                        </form>

                    </div>
                </div>
@endsection