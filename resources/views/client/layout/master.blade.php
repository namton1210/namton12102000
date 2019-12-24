

<!DOCTYPE html>
<html lang="vi">
<head>
<title>Website thương mại điện tử -@yield('title')</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
 <link rel="stylesheet"  href="assets/admin/css/toastr.css">
<link href="assets/client/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/client/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/client/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/client/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="assets/client/css/lato.css" href="">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="assets/client/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="assets/client/js/jquery.min.js"></script>
<link rel="stylesheet" href="assets/client/css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='assets/client/css/opesan.css' rel='stylesheet' type='text/css'>

<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="assets/client/js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										@if(Auth::check())
										<li class="text-center border-right ">
						                 <a href="logout" title="Đăng Xuất"><i class="fas fa-user-friends"></i>{{ Auth::user()->name }}</a>
					                    </li>
										@else
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Đăng Nhập</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Đăng Ký</span></li>
										@endif
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="{{route('login')}}" method="post">		
												@csrf	
													<input name="email"  type="text" class="form-control" >						
													<input name="password" type="password" class="form-control">										
													<div class="sign-up">
														<input type="submit" value="Sign in"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	 
									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">

					                             <form action="{{route('register')}}" method="post">	
												@csrf
												    <div>
												    	<input type="hidden" name="_token"
												    	value="{{csrf_token()}}">
												    </div>
												   <div >	
													<input placeholder="Name" name="name"  class="form-control" type="text">
													@if($errors->has('name'))
								                    <div class="alert alert-danger">
									                 {{ $errors->first('name') }}
								                     </div>
		                                            @endif
		                                           </div>

		                                           <div >
													<input placeholder="Email Address" name="email" type="email" class="form-control">	
													@if($errors->has('email'))
								                         <div class="alert alert-danger">
									                         {{ $errors->first('email') }}
								                         </div>
		                                             @endif
                                                     </div>
                                                     <div >
													<input placeholder="Password" name="password" type="password" class="form-control" id="password1">
														@if($errors->has('password'))
								                          <div class="alert alert-danger">
									                        {{ $errors->first('password') }}
								                          </div>
		                                                @endif
													</div>
													<div >	
													<input placeholder="Confirm Password" name="re_password" type="password" class="form-control" id="password2">
													@if($errors->has('re_password'))
								                       <div class="alert alert-danger">
									                     {{ $errors->first('re_password') }}
								                       </div>
		                                             @endif
												     </div>
													<div class="sign-up">
														<input type="submit" value="Đăng kí"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="assets/client/js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								
							</script>
							<div id="OR" class="hidden-xs">OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	 
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">SHOP NAM TÔN<span></span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				
					<button class="w3view-cart" type="submit" name="submit" value=""><a href="{{route('cart.index')}}" title="Giỏ hàng bạn có {{Cart::count()}} mặt hàng"><i class="fa fa-cart-arrow-down" ></i></a></button>
				 
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	@include('client.layout.menu')
	
	<!-- //navigation -->
	<!-- banner -->
	@yield('hinhanh')
	<!-- //banner --> 
	<!-- banner-bottom -->
	-


@yield('content')
	
	<!-- //banner-bottom --> 
	<!-- modal-video -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						@if(isset($prodt))
						@foreach($prodt as $pro)
						<div class="col-md-5 modal_body_left">
							<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{$pro->name}}</h4>
							<p>{{$pro->description}} </p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
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
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						@endforeach
					@endif
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						@if(isset($proloa))
						@foreach($proloa as $pro)
						<div class="col-md-5 modal_body_left">
							<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{$pro->name}}</h4>
							<p>{{$pro->description}}</p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
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
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						@endforeach
						@endif
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				@if(isset($promaytinh))
				@foreach($promaytinh as $pro)
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{$pro->name}}</h4>
							<p>{{$pro->description}}</p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
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
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						@endforeach
						@endif
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					@if(isset($prododung))
					@foreach($prododung as $pro)
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{$pro->name}} </h4>
							<p>{{$pro->description}}</p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
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
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						@endforeach
						@endif
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					@if(isset($prodobep))
					@foreach($prodobep as $pro)
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="img/upload/product/{{$pro->image}}" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>{{$pro->name}} </h4>
							<p>{{$pro->description}}</p>
							
							<div class="modal_body_right_cart simpleCart_shelfItem">
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
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
						@endforeach
						@endif
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="assets/client/images/36.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Dry Vacuum Cleaner</h4>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$960</span> <i class="item_price">$920</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Vacuum Cleaner"> 
									<input type="hidden" name="amount" value="920.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="assets/client/images/37.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4>Kitchen & Dining Accessories</h4>
							<p>Ut enim ad minim veniam, quis nostrud 
								exercitation ullamco laboris nisi ut aliquip ex ea 
								commodo consequat.Duis aute irure dolor in 
								reprehenderit in voluptate velit esse cillum dolore 
								eu fugiat nulla pariatur. Excepteur sint occaecat 
								cupidatat non proident, sunt in culpa qui officia 
								deserunt mollit anim id est laborum.</p>
							<div class="rating">
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="assets/client/images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$280</span> <i class="item_price">$250</i></p>
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1"> 
									<input type="hidden" name="w3ls_item" value="Induction Stove"> 
									<input type="hidden" name="amount" value="250.00">   
									<button type="submit" class="w3ls-cart">Add to cart</button>
								</form>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span></a></li>
									<li><a href="#" class="brown"><span></span></a></li>
									<li><a href="#" class="purple"><span></span></a></li>
									<li><a href="#" class="gray"><span></span></a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //modal-video -->
	<!-- banner-bottom1 -->
	
	<!-- //banner-bottom1 --> 
	<!-- special-deals -->
	@yield('footer')
	
	<!-- //footer --> 
	<!-- cart-js -->
	
	<!-- //cart-js -->   
	<script type="text/javascript" src="assets/jquery.countdown.min.js"></script>
	<script src="assets/client/js/minicart.js"></script>
	 <script src="assets/client/js/custom.js" type="text/javascript" charset="utf-8" async defer></script>
	  <script src="assets/admin/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
	 <script src="assets/client/js/ajax.js" type="text/javascript" charset="utf-8" async defer></script>
	 @if(session('thongbao'))
	<script type="text/javascript">
		messageSuccess('{{ session('thongbao') }}');
	</script>
@endif

@if(session('error'))
	<script type="text/javascript">
		messageError('{{ session('error') }}');
	</script>
@endif
</body>
</html>