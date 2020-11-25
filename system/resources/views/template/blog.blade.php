<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html> <!--<![endif]-->

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CoolBlue</title>

    <link rel="stylesheet" type="text/css" media="screen" href="{{url('public')}}/css/coolblue.css" />

    <!--[if lt IE 9]>
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{url('public')}}/js/jquery-1.6.1.min.js"><\/script>')</script>

    <script src="js/scrollToTop.js"></script>

</head>

<body id="top">

<!--header -->
@include('template.section.header')
	
<!-- content-wrap -->
<div id="content-wrap">

    <!-- content -->
    <div id="content" class="clearfix">

   	    <!-- main -->
        <div id="main">

            <!-- post -->
      	    <article class="post single">

                <!-- primary -->
         	    <div class="primary">

            	    <h2><a href="index.html">A Blog Post</a></h2>

                    <p class="post-info"><span>Filed under</span> <a href="index.html">templates</a>, <a href="index.html">internet</a></p>

                    <div class="image-section">
              		    <img src="images/img-post.jpg" alt="image post" height="206" width="498"/>
         	        </div>

				    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
					Cras id urna. Morbi tincidunt, orci ac <a href="index.html">convallis aliquam</a>, lectus turpis varius lorem, eu
				    posuere nunc justo tempus leo.</p>

				    <p>
				    Donec mattis, purus nec placerat bibendum, <a href="index.html">dui pede condimentum</a>
				    odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra
				    condimentum, lorem tellus eleifend magna, <a href="index.html">eget fringilla velit</a> magna id neque. Curabitur vel urna.
				    In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
				    Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
				    posuere nunc justo tempus leo.</p>

                <!-- /primary -->
                </div>


            <aside>

            	<p class="dateinfo">JAN<span>31</span></p>

                <div class="post-meta">
               	    <h4>Post Info</h4>
                    <ul>
                  	    <li class="user"><a href="#">Erwin</a></li>
                        <li class="time"><a href="#">12:30 PM</a></li>
                        <li class="comment"><a href="#">10 Comments</a></li>
                        <li class="permalink"><a href="#">Permalink</a></li>
                    </ul>
                </div>

               <div class="post-meta">
                    <h4>tags</h4>
					<ul class="tags">
			         	<li><a href="index.html" rel="tag">Clean</a></li>
			            <li><a href="index.html" rel="tag">Blog</a></li>
			            <li><a href="index.html" rel="tag">Minimal</a></li>
			         </ul>
               </div>

            </aside>

        <!-- /post -->
        </article>

        <!-- post-bottom-section -->
        <div class="post-bottom-section">

		    <h4>3 comments</h4>

            <div class="primary">

            	<ol class="commentlist">

						<li class="depth-1">

							<div class="comment-info">
								<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
								<cite>
									<a href="index.html">Erwin</a> Says: <br />
									<span class="comment-data"><a href="#comment-63" title="">January 31st, 2010 at 10:00 pm</a></span>
								</cite>
							</div>

							<div class="comment-text">
								<p>Comments are great!</p>

								<div class="reply">
									<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 						</div>
							</div>

							<ul class="children">

								<li class="depth-2">

									<div class="comment-info">
										<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
										<cite>
											<a href="index.html">Erwin</a> Says: <br />
											<span class="comment-data"><a href="#" title="">January 31st, 2010 at 8:15 pm</a></span>
										</cite>
									</div>

									<div class="comment-text">
										<p>And here is a threaded comment.</p>
										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 								</div>
									</div>

								</li>

								<li class="depth-2">

									<div class="comment-info">
										<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
										<cite>
											<a href="index.html">Erwin</a> Says: <br />
											<span class="comment-data"><a href="#" title="">January 31st, 2010 at 8:15 pm</a></span>
										</cite>
									</div>

									<div class="comment-text">
										<p>And here is another threaded comment.</p>

										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 								</div>
									</div>

									<ul class="children">

										<li class="depth-3">

											<div class="comment-info">
												<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
												<cite>
													<a href="index.html">Erwin</a> Says: <br />
													<span class="comment-data"><a href="#" title="">January 31st, 2010 at 8:10 pm</a></span>
												</cite>
											</div>

											<div class="comment-text">
												<p>Threaded comments are cool!</p>

												<div class="reply">
													<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 										</div>
											</div>

										</li>

									</ul>

								</li>

							</ul>

						</li>

						<li class="thread-alt depth-1">

							<div class="comment-info">
								<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
								<cite>
									<a href="index.html">Erwin</a> Says: <br />
									<span class="comment-data"><a href="#comment-63" title="">January 31st, 2010 at 8:00 pm</a></span>
								</cite>
							</div>

							<div class="comment-text">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero.
								Suspendisse bibendum.</p>

								<div class="reply">
									<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 						</div>
							</div>

							<ul class="children">

								<li class="depth-2">

									<div class="comment-info">
										<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
										<cite>
											<a href="index.html">Erwin</a> Says: <br />
											<span class="comment-data"><a href="#" title="">January 31st, 2010 7:35 pm</a></span>
										</cite>
									</div>

									<div class="comment-text">
										<p>Donec libero. Suspendisse bibendum.</p>

										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 								</div>
									</div>

                           <ul class="children">

										<li class="depth-3">

											<div class="comment-info">
												<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
												<cite>
													<a href="index.html">Erwin</a> Says: <br />
													<span class="comment-data"><a href="#" title="">January 31st, 2010 at 7:20 pm</a></span>
												</cite>
											</div>

											<div class="comment-text">
												<p>Threaded comments are cool!</p>

												<div class="reply">
													<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 										</div>
											</div>

										</li>

									</ul>



								</li>

							</ul>

						</li>

						<li class="depth-1">

							<div class="comment-info">
								<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
								<cite>
									<a href="index.html">Erwin</a> Says: <br />
									<span class="comment-data"><a href="#comment-63" title="">January 31st, 2010  at 6:08 pm</a></span>
								</cite>
							</div>

							<div class="comment-text">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.
								Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu
								posuere nunc justo tempus leo.</p>

								<div class="reply">
									<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 						</div>

							</div>

							<ul class="children">

								<li class="depth-2">

									<div class="comment-info">
										<img alt="" src="images/gravatar.jpg" class="avatar" height="42" width="42" />
										<cite>
											<a href="index.html">Erwin</a> Says: <br />
											<span class="comment-data"><a href="#comment-63" title="">January 31st, 2010 at 6:08 pm</a> </span>
										</cite>
									</div>

									<div class="comment-text">
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

										<div class="reply">
											<a rel="nofollow" class="comment-reply-link" href="index.html">Reply</a>
		 								</div>
									</div>

								</li>

							</ul>

						</li>

                <!-- /comment-list -->
				</ol>

            <!-- /primary -->
            </div>

         </div>

         <div class="post-bottom-section">

		    <h4>Leave a Reply</h4>

            <div class="primary">

            	<form action="index.html" method="post" id="commentform">

               	    <div>
					    <label for="name">Name <span>*</span></label>
						<input id="name" name="name" value="Your Name" type="text" tabindex="1" />
					</div>
                    <div>
						<label for="email">Email Address <span>*</span></label>
						<input id="email" name="email" value="Your Email" type="text" tabindex="2" />
					</div>
                    <div>
						<label for="website">Website</label>
						<input id="website" name="website" value="Your Website" type="text" tabindex="3" />
					</div>
                    <div>
						<label for="message">Your Message <span>*</span></label>
						<textarea id="message" name="message" rows="10" cols="18" tabindex="4"></textarea>
					</div>
                    <div class="no-border">
					    <input class="button" type="submit" value="Submit Comment" tabindex="5" />
					</div>

               </form>

            </div>

         </div>

        <!-- /main -->
        </div>

        <!-- sidebar -->
		@include('template.section.sidebar')

    <!-- content -->
	</div>

<!-- /content-out -->
</div>
		
<!-- extra -->
<div id="extra-wrap"><div id="extra" class="clearfix">

	    <div id="gallery" class="clearfix">

		    <h3>Flickr Photos </h3>

		    <p class="thumbs">
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            <a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
			<a href="index.html"><img src="{{url('public')}}/images/thumb.png" width="42" height="43" alt="thumbnail" /></a>
            </p>

        </div>

	    <div class="col first">

		    <h3>Contact Info</h3>

		    <p>
		    <strong>Phone: </strong>+1234567<br/>
		    <strong>Fax: </strong>+123456789
		    </p>

		    <p><strong>Address: </strong>123 Put Your Address Here</p>
            <p><strong>E-mail: </strong>me@coolblue.com</p>
		    <p>Want more info - go to our <a href="#">contact page</a></p>

            <h3>Updates</h3>

            <ul class="subscribe-stuff">
      	        <li><a title="RSS" href="index.html" rel="nofollow">
				<img alt="RSS" title="RSS" src="{{url('public')}}/images/social_rss.png" /></a>
			    </li>
      	        <li><a title="Facebook" href="index.html" rel="nofollow">
				<img alt="Facebook" title="Facebook" src="{{url('public')}}/images/social_facebook.png" /></a>
			    </li>
			    <li><a title="Twitter" href="index.html" rel="nofollow">
				<img alt="Twitter" title="Twitter" src="{{url('public')}}/images/social_twitter.png" /></a>
			    </li>
			    <li><a title="E-mail this story to a friend!" href="index.html" rel="nofollow">
				<img alt="E-mail this story to a friend!" title="E-mail this story to a friend!" src="{{url('public')}}/images/social_email.png" /></a>
			    </li>
            </ul>

            <p>Stay up to date. Subscribe via
		    <a href="index">RSS</a>, <a href="index">Facebook</a>,
		    <a href="index">Twitter</a> or <a href="index">Email</a>
		    </p>

	    </div>

	    <div class="col">

   	        <h3>Site Links</h3>

		    <div class="footer-list">
			    <ul>
				    <li><a href="index.html">Home</a></li>
				    <li><a href="index.html">Style Demo</a></li>
				    <li><a href="index.html">Blog</a></li>
				    <li><a href="index.html">Archive</a></li>
				    <li><a href="index.html">About</a></li>
				    <li><a href="index.html">Template Info</a></li>
				    <li><a href="index.html">Site Map</a></li>
			    </ul>
		    </div>

            <h3>Friends</h3>

		    <div class="footer-list">
			    <ul>
				    <li><a href="index.html">consequat molestie</a></li>
				    <li><a href="index.html">sem justo</a></li>
				    <li><a href="index.html">semper</a></li>
				    <li><a href="index.html">magna sed purus</a></li>
				    <li><a href="index.html">tincidunt</a></li>
				    <li><a href="index.html">consequat molestie</a></li>
				    <li><a href="index.html">magna sed purus</a></li>
			    </ul>
		    </div>

	    </div>

        <div class="col">

            <h3>Credits</h3>

            <div class="footer-list">
			    <ul>
				    <li><a href="http://jasonlarose.com/blog/110-free-classy-social-media-icons">
						110 Free Classy Social Media Icons by Jason LaRose
				    </a>
				    </li>
                    <li><a href="http://wefunction.com/2009/05/free-social-icons-app-icons/">
						Free Social Media Icons by WeFunction
				    </a>
				    </li>
                    <li><a href="http://iconsweets2.com/">
						Free Icons by Yummygum
				    </a>
				    </li>
			    </ul>
		    </div>

            <h3>Recent Comments</h3>

	        <div class="recent-comments">
                <ul>
			        <li><a href="index.html" title="Comment on title">Whoa! This one is really cool...</a><br /> &#45; <cite>Erwin</cite></li>
			        <li><a href="index.html" title="Comment on title">Wow. This theme is really awesome...</a><br /> &#45; <cite>John Doe</cite></li>
			        <li><a href="index.html" title="Comment on title">Type your comment here...</a><br />&#45; <cite>Naruto</cite></li>
			        <li><a href="index.html" title="Comment on title">And don't forget this theme is free...</a><br /> &#45; <cite>Shikamaru</cite></li>
                    <li><a href="index.html" title="Comment on title">Just a simple reply test. Thanks...</a><br /> &#45; <cite>ABCD</cite></li>
			    </ul>
		    </div>

        </div>

        <div class="col">

            <h3>Archives</h3>

	        <div class="footer-list">
			    <ul>
				    <li><a href="index.html">January 2010</a></li>
				    <li><a href="index.html">December 2009</a></li>
				    <li><a href="index.html">November 2009</a></li>
				    <li><a href="index.html">October 2009</a></li>
				    <li><a href="index.html">September 2009</a></li>
			    </ul>
		    </div>

            <h3>Recent Bookmarks</h3>

	        <div class="footer-list">
			    <ul>
				    <li><a href="index.html">5 Must Have Sans Serif Fonts for Web Designers</a></li>
				    <li><a href="index.html">The Basics of CSS3</a></li>
				    <li><a href="index.html">10 Simple Tips for Launching a Website</a></li>
				    <li><a href="index.html">24 ways: Working With RGBA Colour</a></li>
				    <li><a href="index.html">30 Blog Designs with Killer Typography</a></li>
				    <li><a href="index.html">The Principles of Great Design</a></li>
			    </ul>
		    </div>

	    </div>

<!-- /extra -->
</div></div>
@include('template.section.footer')

</body>
</html>
