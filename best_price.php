<!DOCTYPE html>
<html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Webstertech Solutions</title>   
<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<?php include 'includes/head.php' ?>
</head>

<body>

<!-- This section is for Splash Screen -->
<section id="jSplash">
	<div id="circle"></div>
</section>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="slider-text">
    	<div id="slidecaption"></div>
    </div>  
	
	<div class="slider-wrapper">
		<div class="responisve-container">
			<div class="container">
			<div class="row clearfix">
			<div class="span12">
			<div class="slider">
				 
				<div class="slide">	
					<!-- <img    src="images/01_waves.png" 
							width="100%" height="115" style="position:absolute"
							data-position="400,7" data-in="left" data-delay="" data-out="left"> -->
					<img 	src="images/box1.png" class="img-responsive"
							 style="margin:120px 0px 0px 450px" data-in="bottomLeft" data-out="fade" width="100%" >
					
					<p 		class="claim teaser light-green small" 			
							data-position="150,80" data-in="top" data-step="1" data-out="top">What we Offer</p>
									
					<p 		class="teaser turky orange small" 	
							data-position="210,80" data-in="bottom" data-step="2" data-delay="500">Best in-class Design</p>		
					<p 		class="teaser turky red small" 	
							data-position="255,80" data-in="bottom" data-step="2" data-delay="1500">Quality Assurance</p>
					<p 		class="teaser turky grey small" 	
							data-position="300,80" data-in="bottom" data-step="2" data-delay="2500">Upgrades</p>	
					<p 		class="teaser turky sky_blue small" 	
							data-position="345,80" data-in="bottom" data-step="2" data-delay="3500">Customer Support</p>
					<p 		class="teaser turky yellow small" 	
							data-position="390,80" data-in="bottom" data-step="2" data-delay="4500">User-Friendly Interface</p>
					<p 		class="teaser turky color1 small" 	
							data-position="435,80" data-in="bottom" data-step="2" data-delay="5500">Complete Web Development Package</p>
					
				</div>
				<div class="slide" data-in="slideRight">
					<p 		class="claim teaser light-green"			
							data-position="150,80" data-in="top" data-step="1" data-out="top" data-ease-in="easeOutBounce" >Our Principles</p>
													
					<p 		class="teaser orange" 	
							data-position="210,80" data-in="left" data-step="2" data-delay="500">Understand Customer Needs</p>		
					<p 		class="teaser red" 	
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="3000">Develop Best User Interface</p>		
					<p 		class="teaser grey turky"		
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="5500" data-out="none">Latest Technologies</p>
					<p 		class="teaser sky_blue turky"		
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="8000" data-out="none">Rigorous Coding</p>
					<p 		class="teaser yellow turky"		
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="10500" data-out="none">Vigilant Testing</p>
					<p 		class="teaser color1 turky"		
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="13000" data-out="none">Strict Deadlines</p>
					<p 		class="teaser color2 turky"		
							data-position="210,80" data-in="left" data-step="2" data-special="cycle" data-delay="15500" data-out="none">Customer Satisfaction Guaranteed</p>

					<img 	src="images/box2.png" 
							 style="margin:120px 0px 0px 450px" data-in="fade" data-delay="500" class="img-responsive" width="100%" data-out="bottomRight">
				</div>
			</div>	
			</div>
			</div>
			</div>
		</div>
	</div>
	   
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        <a id="nextsection" href="#price"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
         <div id="logo">
        	<a id="goUp" href="#home-slider">WEBSTERTECH SOLUTIONS</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li><a href="index.php#home-slider" class="external">Home</a></li>
				<li><a href="index.php#work" class="external">Our Services</a></li>
				<li><a href="index.php#about" class="external">About Us</a></li>
                <li><a href="index.php#contact" class="external">Contact</a></li>
                <li class="current"><a href="best_price.php">Our Best Price</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- Our Our Best Prize Section -->
<div id="price" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Our Best Price</h2>
                    <h3 class="title-description">Useful and Indispensable.</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
		<!-- price plan section -->
		
		<div class="row">
        	<div class="span8 price_table">
			 <h3 class="title design_title">Design Your Own Web Package</h3>
			<center> 
				<table width="670" class="price_table">
                <form name="form1"  method="post" action="#">
                <tr>
                    <td width="5">*</td>
                    <td width="300"><div align="left">Web domain required :</div></td>
                    <td>
                      <label>
                      www.
                      <input name="domain" type="text" style="width:152px;"/><br />
                      </label>
                      <strong>*</strong> Domain name price is not included in total estimation
                    </td>
              	</tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><div align="left"><strong>Ex :</strong> www.yourcomapanyname.com, www.yourcomapanyname.org</div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td><div align="left">Web space required :</div></td>
                <td><div align="left">
                  <select style="width:200px;">
                    <option value="0">select</option>
                    <option value="600">20Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;600 Rs/year</option>
                    <option value="700">30Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;700 Rs/year</option>
                    <option value="800">50Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;800 Rs/year</option>
                    <option value="1000">100Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000 Rs/year</option>
                    <option value="1200">250Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1200 Rs/year</option>
                    <option value="1350">350Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1350 Rs/year</option>
                    <option value="1500">500Mb&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1500 Rs/year</option>
                    <option value="2000">1GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2000 Rs/year</option>
                    <option value="3000">2GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3000 Rs/year</option>
                    <option value="4000">3GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4000 Rs/year</option>
                    <option value="5000">4GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5000 Rs/year</option>
                    <option value="6000">5GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6000 Rs/year</option>
                    <option value="7000">8GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7000 Rs/year</option>
                    <option value="8000">10GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8000 Rs/year</option>
                    <option value="9000">20GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9000 Rs/year</option>
                    <option value="10000">100GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10000 Rs/year</option>
                    <option value="13000">200GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13000 Rs/year</option>
                    <option value="15000">300GB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15000 Rs/year</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td><div align="left">Website type : </div></td>
                <td><div align="left">
                  <select style="width:200px;">
                    <option value="0">select</option>
                    <option value="3000">Full Flash&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 3000</option>
                    <option value="1000">Full static (HTML)&nbsp;Rs. 1000</option>
                    <option value="2000">Mixed&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 2000</option>
                    <option value="7000">3d Flash site &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 7000</option>
                    <option value="12000">Full dynamic&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 12000</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td><div align="left">Number of pages required : </div></td>
                <td><div align="left">
                  <select  style="width:200px;">
                    <option value="0">select</option>
                    <option value="2000">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 2000</option>
                    <option value="3000">8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 3000</option>
                    <option value="5000">10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 5000</option>
                    <option value="6500">20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 6500</option>
                    <option value="9000">30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 9000</option>
                    <option value="20000">50 to 100&nbsp;&nbsp;&nbsp;&nbsp;Rs. 20000</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td><div align="left">Number of photo galleries required : </div></td>
                <td><div align="left">
                  <select  style="width:200px;">
                    <option value="0">select</option>
                    <option value="500">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 500</option>
                    <option value="700">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 700</option>
                    <option value="1000">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 1000</option>
                    <option value="1500">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 1500</option>
                    <option value="2000">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 2000</option>
                    <option value="2500">6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 2500</option>
                    <option value="5000">7 to 10&nbsp;&nbsp;&nbsp;Rs. 5000</option>
                  </select><br />
                <strong>*</strong> Each photo gallery contains 10 pics and consumes atleast 3 MB of space accordingly.
                </div>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td><div align="left"><strong>Dynamic options</strong></div></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td><div align="left">User poll collection : </div></td>
                <td>
                    <label>
                      <div align="left">
                        <input type="checkbox" value="1000" style="margin-right:10px;"/>Rs 1000
                        </div>
                    </label>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">
                Login facility(?):</div> </td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox"  value="6000" style="margin-right:10px;" >Rs 6000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">Shopping cart integration : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox" value="12000" style="margin-right:10px;"/>Rs 12000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">SMS service integration : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox" value="3000" style="margin-right:10px;"/>Rs 3000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">Online video streaming integration : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox" value="9000" style="margin-right:10px;"/>Rs 9000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">Online streaming audio music integration : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox"  value="7000" style="margin-right:10px;"/>Rs 7000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">Adscence integration : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox" value="500" style="margin-right:10px;"/>Rs 500
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td align="center" valign="top">&nbsp;</td>
                <td><div align="left">Content management system : </div></td>
                <td align="left" valign="top"><label>
                  <div align="left">
                    <input type="checkbox" value="8000" style="margin-right:10px;"/>Rs 8000
                    </div>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">*</td>
                <td><div align="left">Number of sample designs of the site required to analyze :</div></td>
                <td><div align="left">
                  <select  size="1"  style="width:200px;">
                    <option value="">select&nbsp;&nbsp;&nbsp;</option>
                    <option value="0">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</option>
                    <option value="500">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 500</option>
                    <option value="1500">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 1500</option>
                    <option value="2500">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 2500</option>
                    <option value="3500">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 3500</option>
                    <option value="4500">6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 4500</option>
                    <option value="8000">10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. 8000</option>
                  </select>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">*</td>
                <td valign="top"><div align="left" class="style22">Free Goodies : </div></td>
                <td><div align="left" >999 individual E-mail id's, <br />
                  Chat programs, <br />
                  Blog, <br />
                  Bulletin board, <br />
                  Guest book, <br />
                  Web statistics, <br />
                  One free update every month.</div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td>Your name :</td>
                <td><input type="text"  style="width:195px;" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td>Your email address :</td>
                <td><input type="text" style="width:195px;" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td valign="top">*</td>
                <td valign="top">Your address :</td>
                <td><textarea  cols="28" rows="5"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>*</td>
                <td> 	Phone number :</td>
                <td><input type="text" style="width:195px;" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td height="1" colspan="3" align="center" valign="middle" bgcolor="#8faf02"></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
                <tr>
                <td>&nbsp;</td>
                <td><strong>YOUR TOTAL ESTIMATION :</strong></td>
                <td>
                <label>
                  <strong>Rs</strong>. 
                    <input type="text" style="width:170px;"  />
                    </label>
                 </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td align="left"><label>
                  <input type="submit" class="price_submit"  value="Submit" />
                </label></td>
                
              </tr>
              </form>
              </table>
				</center>
				
            </div>
			
			<div class="span4 price_image">
            	

            </div>
        </div>
		
        <!-- price plan ends -->
        
        <div class="row">
        	<div class="span12">
            	<hr>
            </div>
        </div>
       
        <!-- Information Block -->
        <div class="row">
        	<div class="span12">
            	<h3 class="spec">Information Block</h3>
                
                <div class="info-block">
                	<div class="info-text">
                		<h3><span class="color-text">NEW</span> Brushed- Responsive One Page Template</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque diam, luctus at laoreet in, auctor ut tellus. Etiam enim lacus, ornare et tempor, rhoncus rhoncus sem. Aliquam volutpat arcu et nibh mollis eleifend pharetra lorem scelerisque. Donec vel enim purus, id viverra neque. Cras in velit ante, eget pellentesque sem. Duis tincidunt erat quam.</p>
                        <a class="button" target="_blank" href="">Purchase</a> 
                	</div>
                </div>
            </div>	
        </div>
        <!-- End Information Block -->
     </div>   
  </div>     
<!-- End Contact Section -->
<?php include 'includes/footer.php' ?>

<!-- script section -->
<?php include 'includes/script.php' ?>
</body>
</html>