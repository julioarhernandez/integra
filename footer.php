<!--Zoho  Web-Optin Form Starts Here-->
<link href="https://campaigns.zoho.com/css/ui.theme.css" rel="stylesheet" type="text/css" />
<link href="https://campaigns.zoho.com/css/ui.datepicker.css" rel="stylesheet" type="text/css" />
<link href="https://campaigns.zoho.com/css/ui.core.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://campaigns.zoho.com/js/jquery-1.11.0.min.js"></script>
<script type='text/javascript' src='https://campaigns.zoho.com/js/jquery-migrate-1.2.1.min.js'></script>
<script type="text/javascript" src='https://campaigns.zoho.com/js/ui.datepicker.js'  charset="utf-8"></script>
<script type="text/javascript" src="https://campaigns.zoho.com/js/jquery.form.js"></script>
<script type="text/javascript" src="https://campaigns.zoho.com/js/optin_min.js"></script>
<script type="text/javascript">
var $ZC = jQuery.noConflict();
var trackingText='ZCFORMVIEW';
$ZC(document).ready( function($) {
$ZC("#zc_trackCode").val(trackingText);
	$ZC("#fieldBorder").val($ZC("[changeItem='SIGNUP_FORM_FIELD']").css("border-color"));
	_setOptin(false,function(th){
	/*Before submit, if you want to trigger your event, "include your code here"*/
});

/*Load Captcha For this*/ 
 loadCaptcha('https://campaigns.zoho.com/campaigns/CaptchaVerify.zc?mode=generate');

 /*Tracking Enabled*/ 
 trackSignupEvent(trackingText);
 });
</script>

	<!-- Footer top start -->
	<section id="footer-top" class="footer-top text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-4 footer-top-box">
					<div class="box-content box1" id="customForm">
						<h3>Suscribirse a Nuestro Boletín</h3>
						<form class="subscribe" method="POST" id="zcampaignOptinForm" action="https://zc1.maillist-manage.com/campaigns/weboptin.zc" target="_zcSignup">
						<div style="background-color: rgb(255, 235, 232);padding: 10px;color: rgb(210, 0, 0);font-size: 11px;margin: 20px 10px 10px;border: 1px solid rgb(255, 217, 211);position: absolute;top: 0px;left: 30px;width: 310px;display: none" id="errorMsgDiv">&nbsp;&nbsp;Por favor escriba bien el correo</div>
			              	<div class="input-group">
			              	
			                 <input changetype="CONTACT_EMAIL" name="CONTACT_EMAIL" changeitem="SIGNUP_FORM_FIELD" type="email" id="CONTACT_EMAIL" class="form-control" placeholder="Email">
			                 <span style="display:none" id="dt_CONTACT_EMAIL">1,true,6,Contact Email,2</span>
			                 <button  name="SIGNUP_SUBMIT_BUTTON" id="zcWebOptin" class="btn btn-primary" type="button">Suscribirse</button>
			              	</div>
			              	<input type="hidden" id="fieldBorder" value="rgb(235, 235, 235)">
			<input type="hidden" name="zc_trackCode" id="zc_trackCode" value="" onload="">
			<input type="hidden" id="submitType" name="submitType" value="optinCustomView">
			<input type="hidden" id="lD" name="lD" value="13351ef683b6a60b">
			<input type="hidden" name="emailReportId" id="emailReportId" value="">
			<input type="hidden" id="formType" name="formType" value="QuickForm">
			<input type="hidden" name="zx" id="cmpZuid" value="13f12970">
			<input type="hidden" name="zcvers" value="2.0">
			<input type="hidden" name="oldListIds" id="allCheckedListIds" value="">
			<input type="hidden" id="mode" name="mode" value="OptinCreateView">
			<input type="hidden" id="zcld" name="zcld" value="13351ef683b6a60b">
			<input type="hidden" id="document_domain" value="zoho.com">
			<input type="hidden" id="zc_Url" value="zc1.maillist-manage.com">
			<input type="hidden" id="zc_formIx" name="zc_formIx" value="f56fab4a3f5a2df5e9b34976dc26ece65c6f4f323bbff7db">
			            </form>
			            	<img src="https://zc1.maillist-manage.com/images/spacer.gif" id="refImage" onload="referenceSetter(this)" style="display:none;">
					</div><!-- Box 1 end -->
				</div>
				<div class="col-md-4 footer-top-box">
					<div class="box-content box2">
						<h3>Encuentranos en</h3>
						<p><i class="icon icon-location"> </i> 7230 SW 8 St, Miami, Fl 33144</p>
						<p><i class="icon icon-clock"> </i> Lunes a Viernes: 9.00 am a 6.00 pm</p>
                        
					</div>
				</div>
				<div class="col-md-4 footer-top-box">
					<div class="box-content box3">
						<h3>Redes Sociales</h3>
						<p class="footer-social social">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Footer top end -->

	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget_title">Ultimas Noticias</h3>
					
						<div class="latest-post-items media">
							<div class="latest-post-image pull-left">
								<a><img class="img-responsive latest-post-thumb" src="images/news/news1.jpg" alt="img"></a>
							</div>
							<div class="latest-post-content media-body">
								<h4><a href="#">Court Gives Final Approval Tction for Students</a></h4>
								<p class="post-meta">
									<span class="date"><i class="icon icon-calendar"></i> Aug 19, 2015</span>
									<span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">11</a></span>
								</p>
							</div>
						</div><!-- 1st Latest Post end -->

						<div class="latest-post-items media">
							<div class="latest-post-image pull-left">
								<a><img class="img-responsive latest-post-thumb" src="images/news/news2.jpg" alt="img"></a>
							</div>
							<div class="latest-post-content media-body">
								<h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
								<p class="post-meta">
									<span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
									<span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
								</p>
							</div>
						</div><!-- 2nd Latest Post end -->

						<div class="latest-post-items media">
							<div class="latest-post-image pull-left">
								<a><img class="img-responsive latest-post-thumb" src="images/news/news3.jpg" alt="img"></a>
							</div>
							<div class="latest-post-content media-body">
								<h4><a href="#">Injury Piper Goes North to Find Latest Merger Partner</a></h4>
								<p class="post-meta">
									<span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
									<span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
								</p>
							</div>
						</div><!-- 3rd Latest Post end -->
						<div class="latest-post-items media">
							<div class="latest-post-image pull-left">
								<a><img class="img-responsive latest-post-thumb" src="images/news/news4.jpg" alt="img"></a>
							</div>
							<div class="latest-post-content media-body">
								<h4><a href="#">Lawyers Object to Making Legal Briefs Briefer</a></h4>
								<p class="post-meta">
									<span class="date"><i class="icon icon-calendar"></i> Nov 24, 2015</span>
									<span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">09</a></span>
								</p>
							</div>
						</div><!-- 3rd Latest Post end -->
					
				</div>
				
				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget_title">Acceso Rapido</h3>
					<ul class="menu nav">
						<li><a href="#">Seguro de Auto</a></li>
						<li><a href="#">Seguro de Bote</a></li>
						<li><a href="#">Seguro Comercial</a></li>
                        <li><a href="#">Seguro de Camiones</a></li>
                        <li><a href="#">Liability</a></li>
						<li><a href="#">Seguro de Casa</a></li>
                        <li><a href="#">Compensacion de Trabajadores</a></li>


			
					</ul>

					
				</div><!--/ end recent post -->

				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					<h3 class="widget_title">About Us</h3>
					<p>We are an award winning company. No matter how big or small the case, every client receives the best service possible. Our attorney has the skills to help you get the settlement you deserve.</p>
					<!-- quick contact form -->
					<div class="qc-form">
						<div class="row">
		                    <div class="col-xs-12 col-md-12">
		                    	<div class="form-group">
		                            <input class="form-control" name="firstname" placeholder="Name" type="text" required />
		                        </div>
		                    </div>
		                   	<div class="col-xs-12 col-md-12">
		                    	<div class="form-group">
		                            <input class="form-control" name="email" placeholder="E-mail" type="text" required />
		                        </div>
		                    </div>
	                	</div>
	                    <div class="row">
	                    	<div class="col-xs-12 col-md-12">
	                    		<div class="form-group">
	                            	<textarea class="form-control" placeholder="Message..." rows="3" name="comment" required></textarea>
	                    		</div>
	                    	</div>
	                    </div>
					 	<div class="form-group">
							<button class="btn btn-lg btn-primary btn-block" type="submit">Send Your Message</button>
						</div>
					</div><!-- quick contact form end -->
			
				</div><!--/ end cases col -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="copyright-info">
         			 &copy; Copyright 2016 Integra Insurance Brokers Corp. Todos los derechos reservados.
        			</div>
				</div>

				<div class="col-sm-3 text-center">
					<img class="footer-logo" src="logofooter.png" alt="" />
				</div>

				<div class="col-sm-4 text-right">
					<ul class="nav footer-nav">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="faq">Faq</a></li>
					</ul>
				</div>


			</div><!--/ Row end -->

		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="icon icon-arrow-up2"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Copyright end -->