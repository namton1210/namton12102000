@extends('admin.layouts.master')

@section('title')
  Danh sách loại sản phẩm
@endsection

@section('content')
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Loại Sản Phẩm</h6>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%"  cellspacing="0">
                  <thead>
                      <tr>
                          <th>STT</th>
                          <th>Name</th>
                          <th>Mô tả</th>
                          <th>Thông tin</th>
                          <th>Danh mục sản phẩm</th>
                          <th>Loại sản phẩm</th>
                          <th>Status</th>
                          <th>Chỉnh sửa</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>STT</th>
                          <th>Name</th>
                          <th>Mô tả</th>
                          <th>Thông tin</th>
                          <th>Danh mục sản phẩm</th>
                          <th>Loại sản phẩm</th>
                          <th>Status</th>
                          <th>Chỉnh sửa</th>
                      </tr>
                  </tfoot>
                  <tbody>
            @foreach($product as $key => $value)
                        <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$value->name}}</td>
                              <td>{!! $value->description !!}</td>
                              <td>
                                <b>Số Lượng</b>:{{$value->quantity}}<br/>
                                <b>Đơn Giá</b>:{{$value->price}}<br/>
                                <b>Khuyến mại</b>:{{$value->promotional}}<br/>
                                <b>Hình minh họa</b>:
                                <img src="{{asset('img/upload/product')}}{{ '/'.$value->image }}" width="100" height="100">
                              </td>
                              <td>{{$value->categories['name']}}</td>
                              <td>{{$value->productTypes['name']}}</td>
                              <td>
                                 @if($value->status==1)
                                {{ "Hiển thị" }}
                              @else
                                {{ "Không hiển thị" }}
                              @endif   
                              </td>
                            <td>
                              <button class="btn btn-primary editProduct" title="{{ "Sửa ".$value->name }}" data-toggle="modal" data-target="#edit" type="button" data-id="{{ $value->id }}"><i class="fas fa-edit"></i></button>
                              <button class="btn btn-danger deleteProduct" title="{{ "Xóa ".$value->name }}" data-toggle="modal" data-target="#delete" type="button" data-id="{{ $value->id }}"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
            @endforeach
                  </tbody>
              </table>
              <div class="pull-right">{{ $product->links() }}</div>
          </div>
      </div>
  </div>
  <!-- Edit Modal-->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa product <span class="title"></span></h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin: 5px">
                <div class="col-lg-12">
           <form role="form" id="updateProduct" method="post" enctype="multipart/form-data">
                        
                            <fieldset class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control name" name="name" placeholder="Nhập tên loại sản phẩm">
                              @error('name')
                             <div class="alert alert-danger errorName"></div>
                               @enderror
                            </fieldset>

                               <div class="form-group">
                                <label for="quantity">Số lượng</label> 
                                <input type="number" name="quantity" min="1" value="1" class="form-control quantity">
                                @error('quantity')
                               <div class="alert alert-danger errorQuantity"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for="price">Đớn giá</label> 
                                <input type="text" name="price" placeholder="Nhập đơn giá" class="form-control price">
                                 @error('price')
                                 <div class="alert alert-danger errorPrice"></div>
                                @enderror
                                </div>

                                <div class="form-group">
                                <label for="promotional">Giá khuyến mại</label> 
                                <input type="number" name="promotional" value="0" placeholder="Nhập giá khuyến mại nếu có " class="form-control promotional">
                                 @error('promotional')
                                <div class="alert alert-danger errorPromotional"></div>
                                @enderror
                                </div>
                                 <img class="img img-thumbnail imageThum" width="100" height="100" lign="center">
                                <div class="form-group">
                                <label for="price">Ảnh minh họa</label> 
                                <input type="file" name="image" class="form-control image">
                                 @error('image')
                                <div class="alert alert-danger errorImage"></div>
                                @enderror
                                </div>

                             <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <textarea name="description" id="demo"  cols="5" rows="5" class="form-control description"></textarea>
                                     @error('description')
                                <div class="alert alert-danger errorDescription"></div>
                                @enderror
                              </div>

                            <div class="form-group">
                                <label>Danh mục sản phẩm</label>
                                <select class="form-control cateProduct" name="idcategory"></select>
                            </div>
                                      
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control proTypeProduct" name="idproducttype">
                              </select>
                            </div>
                                    
                            <div class="form-group">
                                <label>status</label>
                                <select class="form-control status" name="status">
                                    <option value="1" class="ht">Hiển Thị</option>
                                    <option value="0" class="kht">Không Hiển Thị</option>
                                   
                                </select>
                            </div>

                          

                            <input type="submit" class="btn btn-danger" value="Sửa">
                            <button type="reset" class="btn btn-primary">Nhập Lại</button>
                             <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        </form>
                </div>
            </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- delete Modal-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left: 183px;">
                    <button type="button" class="btn btn-success delProduct">Có</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                <div>
            </div>
        </div>
    </div>
@endsection