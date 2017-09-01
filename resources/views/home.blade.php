<!DOCTYPE html>
<html lang="eng">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="navbar-navigation">
			@include('layout.navbartop')
		</div>
		<div class="header-main">
	   	 	@include('includes.header')
	    </div>
	    <!-- Page Content -->
		<a  name="services"></a>
		<div class="content-section-a">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-5 col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Hardisk</h2>
		                <p class="lead"><a target="_blank" href=""></a></p>
						<div class="nav-linked">
		                	<a href="" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>		            	
		            </div>
		            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/hardrive.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div><!-- /.content-section-a -->

		<div class="content-section-b">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Flash Disk</h2>
		                <p class="lead">Jasa Recovery Flasdisk <a target="_blank" href=""></a></p>
		                <div class="nav-linked">
		                	<a href="" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>
		            </div>
		            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/flashdisk.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div> <!-- /.content-section-b -->

		<div class="content-section-a">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-5 col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery CD / DVD </h2>
		                <p class="lead"><a target="_blank" href=""></a></p>
						<div class="nav-linked">
		                	<a href="" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>		            	
		            </div>
		            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/cd-drive.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div><!-- /.content-section-a -->

		<div class="content-section-b">
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
		                <hr class="section-heading-spacer">
		                <div class="clearfix"></div>
		                <h2 class="section-heading">Recovery Handphone</h2>
		                <p class="lead">Jasa Recovery Handphone <a target="_blank" href=""></a></p>
		                <div class="nav-linked">
		                	<a href="" class="btn btn-lg btn-default">Selengkapnya..</a>
		                </div>
		            </div>
		            <div class="col-lg-5 col-sm-pull-6  col-sm-6">
		                <img class="img-responsive" src="{{asset('frontend/img/images/phones.png')}}" alt="">
		            </div>
		        </div>
		    </div><!-- /.container -->
		</div> <!-- /.content-section-b -->		
			
		<a  name="contact"></a>
		<div class="banner">
			<div class="container">
			    <div class="row">
			        <div class="col-lg-6">
			            {{-- <h2>Connect to Start Bootstrap:</h2> --}}
			        </div>
			        <div class="col-lg-6">
			            <ul class="list-inline banner-social-buttons">
			                <li>
			                    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
			                </li>
			                <li>
			                    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
			                </li>
			                <li>
			                    <a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram"></i> <span class="network-name">Instagram</span></a>
			                </li>
			            </ul>
			        </div>
			    </div>
			</div><!-- /.container -->
		</div><!-- /.banner -->

		<!-- Footer -->
	    <footer>
	        @include('includes.footer')
	    </footer>
    </body>
</html>

