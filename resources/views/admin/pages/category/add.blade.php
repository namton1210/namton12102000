@extends('admin.layouts.master')

@section('title')
Thêm danh mục sản phẩm 
@endsection
@section('content')

	<div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh mục</h6>
            </div>
<div class="row">
                    <div class="col-lg-12">

                        <form role="form" action="{{route('category.store')}}" method="post">
                        	@csrf
                            <fieldset class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Nhập tên danh mục">
                            </fieldset>

                            
                                      

                            <div class="form-group">
                                <label>status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                   
                                </select>
                            </div>

                          

                            <button type="submit" class="btn btn-danger">Submit Button</button>
                            <button type="reset" class="btn btn-primary">Reset Button</button>

                        </form>

                    </div>
                </div>
@endsection