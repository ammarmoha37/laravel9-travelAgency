@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('slider')
    @include('home.slider')
@endsection

@section('content')

		<!-- <div class="banner">
			<div class="owl-five owl-carousel owl-theme">
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
            		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            		</iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
	            <div class="item-video">
	            	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	            </div>
        	</div>
		</div> -->
		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>popular Packages</h2>
			</div>
		</div>
		<!-- Popular Packages End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						

						@foreach($packagelist1 as $rs)
						<div class="box-wrap" itemprop="event" itemscope itemtype="https://schema.org/Package">
							<div class="img-wrap" itemprop="image">
								<img src="{{Storage::url($rs->image)}}" style="width:800px; height:300px" alt="Packages picture">
							</div>
								<a href="{{route('package', ['id'=>$rs->id])}}" class="learn-desining-banner" itemprop="name"> {{$rs->title}}</a>
							<div class="box-body" itemprop="description">
							<p>{{$rs->description}}</p>
								<section itemprop="time">
									@php
										$average = $rs->comment->average('rate');
									@endphp
									<div class="review-rating ">
										<p><span>Rate : </span></p>
									{{number_format($average, 2)}}
										<i class="fa fa-star @if ($average<1) -o empty @endif"></i>
										<i class="fa fa-star @if ($average<2) -o empty @endif"></i>
										<i class="fa fa-star @if ($average<3) -o empty @endif"></i>
										<i class="fa fa-star @if ($average<4) -o empty @endif"></i>
										<i class="fa fa-star @if ($average<5) -o empty @endif"></i>
										({{$rs->comment->count('id')}})
									</div>
									<p><span>Status:</span> {{$rs->status}} </p>
									<p><span>Fee:</span> {{$rs->price}} </p>
								</section>
							</div>
						</div>
						@endforeach

						
					</div>
				</div>
			</div>
		</div>
		<!-- Learn Packages End -->
		<!-- <section class="whyUs-section">
			<div class="container">
				<div class="featured-points">
					<ul>
						<li><i class="fas fa-book"></i> free books for students</li>
						<li><i class="fas fa-money-check-alt"></i> affordable fees</li>
						<li><i class="fas fa-chalkboard-teacher"></i> experienced teachers</li>
						<li><i class="fas fa-book"></i> free books for students</li>
					</ul>
				</div>
				<div class="whyus-wrap">
					<h1>why us?</h1>
					<p itemprop="description">Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsumLorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>

					<a href="#" class="read-more-btn">read more</a>
				</div>
			</div>
		</section> -->
		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>gallery</h2>
			</div>
		</section>
		<section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img1.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img2.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img3.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img4.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img5.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img6.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img7.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img8.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img9.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img10.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img11.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="{{asset('assets')}}/img/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="{{asset('assets')}}/img/gallery-img12.jpg" alt="gallery-images" style="width: 450; height:250">
				</a>
			</div>
		</section>
		<!-- End of gallery Images -->
		<!-- <section class="page-heading">
			<div class="container">
				<h2>upcomming events</h2>
			</div>
		</section> -->
		<!-- <section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="{{asset('assets')}}/img/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="{{asset('assets')}}/img/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End of Events section -->
		<!-- <section class="what-other-say"> -->
			<!-- <div class="container">
				<div class="wrap-others-say" itemprop="review" itemscope itemtype="http://schema.org/ReviewAction">
					<h1>what other say about us</h1>
					<div id="carousel" class="flexslider">
						<ul class="slides">
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="hidden">
										<h3>Sagar Sapkota</h3>
										<h4>UI Designer</h4>
									</figcaption>
								</figure>
							</li>
							<li class="img-wrap">
								<figure itemprop="image">
									<img src="{{asset('assets')}}/img/review-big-img.jpg" alt="Person Image">
									<figcaption class="fig">
										<h3 class="hidden">Sagar Sapkota</h3>
										<h4 class="hidden">UI Designer</h4>
									</figcaption>
								</figure>
							</li>
						</ul>
					</div>

					<div id="slider" class="flexslider">
						<ul class="slides">
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Very Satisfaied with their service</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">Quick, efficient and meets your expectations</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						    <li>
						    	<div class="testimonial-holder" itemprop="description">
						    		<strong class="title">The website was according our imagination</strong>
						    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
						    		<div class="rateYo"></div>
						    	</div>
						    </li>
						</ul>
					</div>
				</div>
			</div> -->
			<!-- <div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">what our customer say</h2>
				<div class="three owl-carousel owl-theme">
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="{{asset('assets')}}/img/customer-img.jpg" alt="Person image">
									<figcaption>
										<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
								</p>
							</div>
						</div>
					</div>
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="{{asset('assets')}}/img/customer-img.jpg" alt="Person image">
									<figcaption>
										<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									"22222Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End of Others talk -->
		<!-- <section class="page-heading">
			<div class="container">
				<h2>latest news</h2>
			</div>
		</section>
		<section class="latest-news">
			<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
				<div class="owl-two owl-carousel">
					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('assets')}}/img/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('assets')}}/img/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="{{asset('assets')}}/img/latest-new-img.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description">
							<a href=""><h1>Orientation Programme for new Students.</h1></a>
							<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

							<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- Latest News CLosed -->
		<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
@endsection