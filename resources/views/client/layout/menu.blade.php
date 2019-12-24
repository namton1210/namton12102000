



<div class="navigation">
		
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ml-auto text-center mr-xl-5">
						<li><a href="/" class="act">Trang chủ</a></li>	
						<!-- Mega Menu -->
						
						@foreach($category as $cate)
						<li class="dropdown">
						<li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$cate->name}} <span class="caret"></span></a>
							@if(count($cate->productType)>0)
								<ul class="dropdown-menu">
									@foreach($cate->productType as $protype)
										<a class="dropdown-item" href="{{ $protype->slug }}.html">{{ $protype->name }}</a>
									@endforeach
									{{-- <div class="dropdown-divider"></div> --}}
								</ul>
							@endif
						</li> 
							 </li>
						@endforeach
						
					</ul>
				</div>
			</nav>
		
	</div>