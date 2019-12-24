@extends('admin.layouts.master')

@section('title')
Thêm loại  sản phẩm 
@endsection
@section('content')

	<div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh mục</h6>
            </div>
<div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="{{route('producttype.store')}}" method="post">
                        	@csrf
                            <fieldset class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm">
                                @error('name')
                                <div class="alert alert-danger">Tên loại sản phẩm không được bỏ trống</div>
                                @enderror
                            </fieldset>

                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control cateProduct " name="idcategory">
                                    @foreach($category as $cate)
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
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