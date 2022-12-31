<?php
    session_start(); 
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!==true)
    {
        header("location: login.php");
        exit; 
    }
    $usrlevel=$_SESSION["userlevel"];
?>



<?php
include ('../SSMR/inc/sendEmail.php');
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>SSMR</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->   
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">




   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">SSMR</a>
		      </div>		      

		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll"  href="#intro" title="">Home</a></li>

						<?php 

						if($usrlevel == 1){	?> 
							<li><a class="smoothscroll"  href="#portfolio" title="">Photo Gallery</a></li>
							<li><a class="smoothscroll"  href="#about" title="">About Us</a></li>
							<?php } ?> 
   
						<li><a class="smoothscroll"  href="#contact" title="">Comment</a></li>
						<li><a  href="logout.php" title="">Logout</a></li>	
					</ul>
				</nav>    		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

	<!-- intro section
   ================================================== -->
   <section id="intro">   

   	<div class="intro-overlay"></div>	

   	<div class="intro-content">
   		<div class="row">

   			<div class="col-twelve">

	   			<h5>Hello, World.</h5>
	   			<h1>I'm Siti Syafur.</h1>

	   			<p class="intro-position">
	   				<span>Bachelor of Computer Science (Hons.) Student</span>
	   				<span>UITM Cawangan Kuala Terengganu Kampus Chendering</span> 
	   			</p>

	   			<a class="button stroke smoothscroll" href="#portfolio" title="">More Personal Info</a>

	   		</div>  
   			
   		</div>   		 		
   	</div> <!-- /intro-content -->   	 
  	

   </section> <!-- /intro -->


   <!-- about section
   ================================================== -->
   <section id="about">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>About</h5>
   			<h1>Let me introduce myself.</h1>

   			<div class="intro-info">

   				<img src="../SSMR/images/portfolio/profile-pic.JPG" alt="Profile Picture">

   				<p class="lead">21 years old and my dream is to be a Computer Scientist. Pursuing my bachelor's degree in Computer Science because I am passionate on Information Theory. I am all-around very positive, serious, optimistic and <em>non-lazy person</em> 🙂 </p>
   			</div>   		

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">

   		<div class="col-six tab-full">

   			<h3>Profile</h3>
   			<p>The details of our lives matter because it is proof that we exist - Natalie Goldberg</p>

  			<ul class="info-list">
   				<li>
   					<strong>Fullname:</strong>
   					<span>Siti Syafur Shaikh Mohd Raziff </span>
   				</li>
   				<li>
   					<strong>Birth Date:</strong>
   					<span><time datetime="2000-05-13 20:00">13<sup>th </sup>May 2000</time>
                        </span><!-- time and sup element for CSC318 -->
   				</li>
   				<li>
   					<strong>Job:</strong>
   					<span>Freelance in multimedia/videography</span>
   				</li>
   				<li><!-- list element for CSC318 -->
   					<strong>Email:</strong><!-- strong element for CSC318 -->
   					<span>syafuraziff@gmail.com</span>
   				</li>
                <li><!-- list element for CSC318 -->
   					<strong>Hobbies:</strong><!-- strong element for CSC318 -->
   					<span><ol><!-- ordered list element for CSC318 -->
                         <dl><!-- dl,dd,dt for CSC318 -->
                          <dt> <li>Reading</li></dt>
                          <dd>Anything in the form of texts that will distract me from images.</dd><br>
                          <br>
                          <dt><li>Movies</li></dt>
                          <dd>Intellectually-disguised guilty pleasures like <a href="https://www.youtube.com/watch?v=unXw_TQSpFw">how the Chinese Govt harvested organs from Chinese Falun Gong practioners.</a></dd><br>
                             <dt><li>Drawing</li></dt>
                          <dd>Sometimes, when I am feeling artsy.</dd>
                        </dl>
                        </ol></span>
   				</li>

   			</ul>

   		</div>

   		<div class="col-six tab-full">

   			<h3>Skills</h3>
   			<p>All the programming skills learned during my university education.</p>

				<ul class="skill-bars">
				   <li>
				   	<div class="progress percent90"><span>90%</span></div>
				   	<strong>HTML5</strong>
				   </li>
				   <li>
				   	<div class="progress percent85"><span>85%</span></div>
				   	<strong>CSS3</strong>
				   </li>
				   <li>
				   	<div class="progress percent70"><span>70%</span></div>
				   	<strong>JQuery</strong>
				   </li>
				   <li>
				   	<div class="progress percent95"><span>95%</span></div>
				   	<strong>PHP</strong>
				   </li>
				   <li>

				   	<div class="progress percent75"><span>75%</span></div>
				   	<strong>Wordpress</strong>
				   </li>
      
				</ul> <!-- /skill-bars -->		

   		</div>

   	</div>

   	<div class="row button-section">
   		<div class="col-twelve">
   			<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>

   			<a href="../SSMR/myResume.pdf" title="Download CV" class="button button-primary">Download CV</a>
   		</div>   		
   	</div>

   </section> <!-- /process-->    


   <!-- resume Section
   ================================================== -->
	<section id="resume" class="grey-section">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Resume</h5>
   			<h1>More of my credentials.</h1>

   			<p class="lead">The summary of my extrinsic life.</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Work Experience</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Freelance Storyboard Illustrator</h3>
	   					<p>Mac 2020 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Epique Motionworks</h4>
	   					<p>Assists the video director in producing storyboards needed for the production of videos such as music advertising and marketing videos.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-graduation-cap"></i>
	   				</div>

	   					   				<div class="timeline-header">
	   					<h3>Intern</h3>
	   					<p>16 August - 27 October 2020</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>University of Malaya</h4>
	   					<p> Trained by The IT Department for UM library about networks and other methods of programming such as how to use RFIDs and Barcodes to store data into our own databases.</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
   	
   	<div class="row resume-timeline">

   		<div class="col-twelve resume-header">

   			<h2>Education</h2>

   		</div> <!-- /resume-header -->

   		<div class="col-twelve">

   			<div class="timeline-wrap">

   				<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Bachelor's Degree</h3>
	   					<p>July 2020 - Present</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Universiti Teknologi MARA (UiTM) Cawangan Terengganu</h4>
	   					<p>Cgpa: 3.54</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>Diploma in Computer Science</h3>
	   					<p>July 2018 - June 2020</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>Universiti Teknologi MARA (UiTM) Cawangan Pahang</h4>
	   					<p>Cgpa: 3.34</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

	   			<div class="timeline-block">

	   				<div class="timeline-ico">
	   					<i class="fa fa-briefcase"></i>
	   				</div>

	   				<div class="timeline-header">
	   					<h3>High School Education</h3>
	   					<p>May 2013 - June 2017</p>
	   				</div>

	   				<div class="timeline-content">
	   					<h4>SMK Paya Besar</h4>
	   					<p>PT3: 6A<br>SPM:3A</p>
	   				</div>

	   			</div> <!-- /timeline-block -->

   			</div> <!-- /timeline-wrap -->   			

   		</div> <!-- /col-twelve -->
   		
   	</div> <!-- /resume-timeline -->
		
	</section> <!-- /features -->


	<!-- Portfolio Section
   ================================================== -->
	<section id="portfolio">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Portfolio</h5>
   			<h1>Check Out Some of My Works.</h1>

   			<p class="lead">The highlights of my works in different areas.</p>

   		</div>   		
   	</div> <!-- /section-intro--> 

   	<div class="row portfolio-content">

   		<div class="col-twelve">

   			<!-- portfolio-wrapper -->
	         <div id="folio-wrapper" class="block-1-2 block-mob-full stack">

	         	<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/Movie%20Poster.png" alt="movie">
	                  <a href="#modal-01" class="overlay">	                  	           
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
		     					       <h3 class="folio-title">Cerita Hahahantu</h3>	     					    
		     					    	 <span class="folio-types">
		     					       	  Multimedia
		     					       </span>
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>	               
	        		</div> <!-- /folio-item -->

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/rhb.png" alt="rhb">
	               	<a href="#modal-02" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">RHB Digital/It Hiring Advertisement</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Web Design
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->


	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/animation.gif">
	               	<a href="#modal-03" class="overlay">              		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Computer Animation</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Graphic Design
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

	            <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/NEETA.PNG" alt="Beetle">
	                  <a href="#modal-04" class="overlay">                  	                 
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Lampu Hijau</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  IamNeeta
		     					      </span>		     		
		     					   </div>  	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->     

	        		<div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/leisure.png" alt="Lighthouse">
	                  <a href="#modal-05" class="overlay">             		                  
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Leisure</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  Multimedia
		     					      </span>		     		
		     					   </div> 	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->

                 
                   <div class="bgrid folio-item">
	               <div class="item-wrap">
	               	<img src="images/portfolio/DSC_0198.JPG"  width="200" height="300" alt="Salad">
                    <img src="images/portfolio/gesuma%20(2).jpg"  width="200" height="200" alt="Salad">
                    <img src="images/portfolio/kelab.jpg"  width="100" height="100" alt="Salad">
	                  <a href="#modal-06" class="overlay">
	                     <div class="folio-item-table">
	                     	<div class="folio-item-cell">
	                     		<h3 class="folio-title">Gerakan Sukarelawan Mahasiswa</h3>	     					    
		     					    	<span class="folio-types">
		     					       	  EXTRA-CURRICULAR
		     					      </span>		     		
		     					   </div>	                      	
	                     </div>                    
	                  </a>
	               </div>
	        		</div> <!-- /folio-item -->   

	            <!-- modal popups - begin
	            ============================================================= -->
	            <div id="modal-01" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/Movie%20Poster.png" alt="Merdeka 2020" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Movie Poster</h4>		      
					      <p>The idea behind this poster is: I'm too lazy to draw from new ideas so I will just scan my previously drawn images and see what I can do with it and Voilà-this is the outcome, but alas still, the requirement for this assignment is to use my own picture so I had to graphically draw myself but as a crazy ghost . Click play if you love nightmares 👻👻👻</p>

						  <center><div class="categories">Web Development</div>	
							<br><br>
							<video width="240" height="160" controls>
							  <source src="../SSMR/2. graphic drawing process.mp4" type="video/mp4">\
							Your browser does not support the video tag.
							</video>
						 </div></center>
					      

			         <div class="link-box">
			            
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-01 -->

				   <div id="modal-02" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/1.3.jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>RHB Hiring video Advertisement</h4>		      
					      <p>This is the first storyboard that I did for Epique Motionworks. The rigorous brainstorming sessions that I had with the director eventually won us the tender to create a series of videos for the company. I am still working on the series until March next year.</p>

					      <div class="categories">Videography</div>			               
					   </div>

			         <div class="link-box">
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-02 -->

				   <div id="modal-03" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/animation.gif" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Clouds</h4>		      
					      <p>This is the continuation of my storyboard and movie poster project that are inspired from the infamous Studio Ghibli's character, Kaonashi. The reason a lot of my work features it is that it is very to draw them!</p>

					      <div class="categories">Storyboard Illustration and computer animation</div>			               
					   </div>

			         <div class="link-box">
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-03 -->

				   <div id="modal-04" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/NEETA.PNG" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Lampu Hijau by IamNeeta</h4>
					      <p>Another music video from the director that I work for. I'm putting this out here because this song needs more recognition. Enjoy this masterpiece from the band ♪‣</p>

					      <div class="categories">Branding</div>			               
					   </div>

			         <div class="link-box">
			            <a href="https://www.youtube.com/watch?v=-t7RRB9ivvo" target="_blank">Watch the video</a>
                         
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-04 -->

			


				   <!-- /redo modal-05 -->
				   <div id="modal-05" class="popup-modal slider mfp-hide">	

					<div class="media">
						<img src="images/portfolio/leisure.png" alt="" />
					</div>      	

				  <div class="description-box">
					 <h4>Typography</h4>		      
					 <p>This is my typography assignment using Adobe PS.The word leisure is what I was obsessing over for my last semesters and ironically, I was not at all at leisure. Regardless, I am grateful to have found things I am fond of such as poetry. My favourite are from Robert Frost titled The Road Not Taken. </p>

					 <br><br>
							<audio controls="controls" src="../SSMR/The Road not Taken by Robert Frost Read by Tom Hiddleston.mp3">
								Your browser does not support the HTML5 Audio element.
							</audio>

					 <div class="categories">Leisure</div>			               
				  </div>

				<div class="link-box">
				   
					 <a href="#" class="popup-modal-dismiss">Close</a>
				</div>		      

			  </div> <!-- /modal-06 -->

 <!-- /redo modal-05 -->

				   <div id="modal-06" class="popup-modal slider mfp-hide">	

				     	<div class="media">
				     		<img src="images/portfolio/gesuma%20(2).jpg" alt="" />
				     	</div>      	

					   <div class="description-box">
					      <h4>Kelab Gerakan Sukarelawan Mahasiswa</h4>		      
					      <p>I lost many hours and energy, sacrificed grades and sustained migraines for this club. But, regrets I have none. I tried my hardest to explore and learn during my time volunteering and there have been countless eye opening experiences that I experienced during my time working for this organization. </p>

					      <div class="categories">Leadership and Extracurricular Activities</div>			               
					   </div>

			         <div class="link-box">
			            
					      <a href="#" class="popup-modal-dismiss">Close</a>
			         </div>		      

				   </div> <!-- /modal-06 -->


				   <!-- modal popups - end
	            ============================================================= -->

	         </div> <!-- /portfolio-wrapper --> 

   		</div>  <!-- /twelve -->   

   	</div> <!-- /portfolio-content --> 
		
	</section> <!-- /portfolio --> 


	<!-- CTA Section
   ================================================== -->
	<section id="cta" class="grey-section">

   	<div class="row cta-content">

   		<div class="col-twelve section-ads">  


		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Academic Goals</h5>
   			<h1>Computer Science</h1>

   			<p class="lead">My goal is to be a Computer Scientist 😀</p><br><br><br>



   		</div> 
   	</div> <!-- /section-intro -->

   	      <div class="row add-bottom">

      	<div class="col-twelve">

      		<div class="table-responsive">

      			<table>
                    <caption><pre>Semester 4 of Degree Academic Targets</pre></caption><!-- caption element for CSC318 -->
					  <thead>
					    <tr>
					      <th>Subject Name</th>
					      <th>Course Code</th>
					      <th>Grade Targets</th>					    
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>	
                              SOFTWARE ENGINEERING</td>
					      <td>CSC577</td>
					      <td>A</td>					    
					    </tr>
					    <tr>
					      <td>DYNAMIC WEB PROGRAMMING</td>
					      <td>CSC574</td>
					      <td>A</td>			    
					    </tr>

					  </tbody>
                     <tfoot>
                        <tr>
                          <td>ENTERPRISE PROGRAMMING</td>
                          <td>CSC574</td>
                            <td>A</td>
                        </tr>
                    </tfoot>
					</table>

      		</div>     		

      	</div>
      	
      </div> <!--row -->
		
   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 

	
	<!-- services Section
   ================================================== -->
	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Summary:</h5>
   			<h1>Summary of CS110 and CS230 Courses</h1>

   			<p class="lead"> <q>tanggal tali leher itu Cukuplah seharian digembala
Lupuskan algoritma yang menghantui kepala. </q>-Malique</p>

   		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row services-content">

   		<div id="owl-slider" class="owl-carousel services-list">

	      	<div class="service">	

	      		<span class="icon"><i class="icon-earth"></i></span>            

	            <div class="service-content">	

	            	 <h3>Web Development and design</h3>

		            <p class="desc">CSC318 : A- <br> ITS332 : A 
	         		</p>
	         		
	         	</div> 	         	 

				</div> <!-- /service -->

				<div class="service">	

					<span class="icon"><i class="icon-window"></i></span>                          

	            <div class="service-content">	

	            	<h3>Programming</h3>  

		            <p class="desc">CSC118 : A- <br> CSC128 : A <br> CSC138: A <br> CSC238:B+ <br> CSC248: A-
	         		</p>

	            </div>	                          

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-paint-brush"></i></span>		            

	            <div class="service-content">

	            	<h3>Computer Science Theory</h3>

		            <p class="desc">CSC159 : B- <br> CSC204 : A- <br> CSC305: A-  <br> CSC248: A-.
	        			</p> 

	            </div> 	            	               

			   </div> <!-- /service -->

				<div class="service">

					<span class="icon"><i class="icon-toggles"></i></span>	              
	            <div class="service-content">

	            	<h3>Others</h3>

		            <p class="desc">ACC106: A- <br> CTU101: A <br> CTU151: A<br>ITT300: B- <br> ITT320: A- <br>ECO120: B
	        			</p> 

	            </div>	
             

				</div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-image"></i></span>	            

	            <div class="service-content">

	            	<h3>Information Theory and databases</h3>

		            <p class="desc">ITS232: B+ <br> ITS332: A <br> ITT270: A<br>ITT300: B- <br> ITT320: A-
	        			</p> 

	            </div>	               

			   </div> <!-- /service -->

			   <div class="service">

			   	<span class="icon"><i class="icon-chat"></i></span>	   	           

	            <div class="service-content">

	            	 <h3>Statistics and Mathematics</h3>

		            <p class="desc">MAT133: B <br> MAT183: C+ <br>MAT210: C+<br>STA116: C <br>MAT263: B
	        			</p> 
	        			
	            </div>	               

			   </div> <!-- /service -->

	      </div> <!-- /services-list -->
   		
   	</div> <!-- /services-content -->
		
	</section> <!-- /services -->	


	<!-- stats Section
   ================================================== -->
	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							150
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div> <!-- /stat -->					

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							20
						</h3>

						<h5 class="stat-title">
							Happy Lecturers
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							1
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div> <!-- /stat -->									

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							1200
						</h3>

						<h5 class="stat-title">
							Crazy Ideas to debug codes
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1234567
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div> <!-- /stat -->

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							72
						</h3>

						<h5 class="stat-title">
							Sleep(Hr/semester)
						</h5>

					</div> <!-- /stat -->

				</div> <!-- /stats-list -->

			</div> <!-- /twelve -->
		</div> <!-- /row -->

	</section> <!-- /stats -->

	
   <!-- contact
   ================================================== -->
	<section id="contact">

		<div class="row section-intro">
   		<div class="col-twelve">

   			<h5>Contact</h5>
   			<h1>I'd Love To Hear From You.</h1>

   			<p class="lead"><q>If you do not listen, you're deaf, if you do listen too much, you're autistic</q> -roughly paraphrased book.</p>

   		</div> 
   	</div> <!-- /section-intro -->

   	<div class="row contact-form">

   		<div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="POST" action="/SSMR/inc/sendEmail.php">
      			<fieldset>

                  <div class="form-field">
 						   <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>
                  <div class="form-field">
	      			   <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
	               </div>
                  <div class="form-field">
	     				   <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
	               </div>                       
                  <div class="form-field">
	                 	<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
	               </div>                      
                 <div class="form-field">
                     <button class="submitform">Submit</button>
                     <div id="submit-loader">
                        <div class="text-loader">Sending...</div>                             
       				      <div class="s-loader">
								  	<div class="bounce1"></div>
								  	<div class="bounce2"></div>
								  	<div class="bounce3"></div>
								</div>
							</div>
                  </div>

      			</fieldset>
      		</form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">            	
            </div>            
            <!-- contact-success -->
      		<div id="message-warning">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br>
      		</div>

         </div> <!-- /col-twelve -->
   		
   	</div> <!-- /contact-form -->

   	
   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            H-27 Taman Guru <br>
            Kuantan, Pahang<br>
            25150 MY
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>syafuraziff@gmail.com<br>	     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call or Whatsapp Me At</h5>

   			<p>
			   	Mobile: (+60) 1125639935<br>
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->


   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>SSMR editing by Siti Syafur Shaikh Mohd Raziff</span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
