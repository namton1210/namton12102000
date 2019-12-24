@extends('client.layout.master')

@section('title')
Trang chủ
@endsection
 @section('hinhanh')
 @include('client.layout.hinhanh')
 @endsection
 @section('footer')
	@include('client.layout.footer')
 @endsection
 @section('content')
 <div class="banner-bottom">

		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div> 
					<!-- pop-up-box -->     
					<script src="assets/client/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://www.youtube.com/embed/ZQa6GUVnbNM"></iframe>
					</div>
					
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active" ><a  href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" >@if(isset($prodt)) {{ $prodt[0]->categories->name}}@endif </a></li>
						<li role="presentation"><a href="#audio" role="tab" id="audio-tab" data-toggle="tab" aria-controls="audio" >@if(isset($proloa)) {{ $proloa[0]->categories->name }} @endif </a></li>
						<li role="presentation"><a  href="#video" role="tab" id="video-tab" data-toggle="tab" aria-controls="video" > @if(isset($promaytinh)){{ $promaytinh[0]->categories->name }} @endif</a></li>
						<li role="presentation"><a  href="#tv" role="tab" id="tv-tab" data-toggle="tab" aria-controls="tv">@if(isset($prododung)) {{ $prododung[0]->categories->name }} @endif </a></li>
						<li role="presentation"><a  href="#kitchen" role="tab" id="kitchen-tab" data-toggle="tab" aria-controls="kitchen">@if(isset($prodobep)){{ $prodobep[0]->categories->name }} @endif </a></li>
					</ul>
					
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in"  id="home"  aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
								 @if(isset($prodt))
								@foreach($prodt as $pro)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt="" class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>

									<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
										
									</div>
								</div> 
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										
											 
											<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
										
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								
								<div class="clearfix"> </div>
								@endforeach
							    @endif
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="audio" aria-labelledby="audio-tab">
							<div class="agile_ecommerce_tabs">
								@if(isset($proloa))
								@foreach($proloa as $pro)
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
										<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
										<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
										<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="clearfix"> </div>
								@endforeach
								@endif
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="video" aria-labelledby="video-tab">
							<div class="agile_ecommerce_tabs">
								<div class="col-md-4 agile_ecommerce_tab_left">
									@if(isset($promaytinh))
									@foreach($promaytinh as $pro)
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}/a></h5>
									<div class="simpleCart_shelfItem">
										@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
									<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="clearfix"> </div>
								@endforeach
								@endif
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
							<div class="agile_ecommerce_tabs">
								@if(isset($prododung))
								@foreach($prododung as $pro)
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
									<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="clearfix"> </div>
								@endforeach
								@endif
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
							<div class="agile_ecommerce_tabs">
								@if(isset($prodobep))
								@foreach($prodobep as $pro)
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<form >
											<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>										
										</form>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="col-md-4 agile_ecommerce_tab_left">
									
									<div class="hs-wrapper">
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#myModal3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5><a href="single.html">{{$pro->name}}</a></h5>
									<div class="simpleCart_shelfItem">
									@if($pro->promotional>0)
										<span class="item_price">
											{{number_format($pro->promotional)}}
										</span>
										<del>{{number_format($pro->price)}}</del>
                                         @else
                                         {{number_format($pro->price)}}
                                         @endif
										<button type="submit" class="w3ls-cart" ><a href="{{route('addCart',['id'=>$pro->id])}}">Thêm vào giỏ hàng</a></button>
									</div>
								</div>
								<div class="clearfix"> </div>
								@endforeach
								@endif
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> 
 @endsection
