<?php
if ( ! defined( 'ABSPATH' ) ) exit;
 ?>
<style>
#TB_ajaxContent{
		width:100% !important;
	}
	#TB_window {
		height: auto !important;
		width:98% !important;
		margin-left: 10px!important;
		left: 10px;
	}
	#TB_iframeContent{
		width:100% !important;
	}
</style>
<style>
		
		.wpsm_ac_h_i{
			background:url('<?php echo DAZZ_CSW_PLUGIN_URL.'assets/img/bg.jpg'; ?>') 50% 0 repeat fixed;
			
			
			font-family: Myriad Pro ;
			cursor: pointer;
			text-align: center;
			margin-bottom:0px;
			border-bottom: 5px solid #000000;
			margin-right: 20px;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b{
			color: white;
			font-size: 30px;
			font-weight: bolder;
			padding: 0 0 15px 0;
		}
		.wpsm_ac_h_i .wpsm_ac_h_b .dashicons{
			font-size: 40px;
			position: absolute;
			margin-left: -45px;
			margin-top: -10px;
		}
		 .wpsm_ac_h_small{
			font-weight: bolder;
			color: white;
			font-size: 18px;
			padding: 0 0 15px 15px;
		}

		.wpsm_ac_h_i a{
		text-decoration: none;
		}
		@media screen and ( max-width: 600px ) {
			.wpsm_ac_h_i{ padding-top: 60px; margin-bottom: 0px; }
			.wpsm_ac_h_i .WlTSmall { display: none; }
		}
		.texture-layer {
			background: rgba(0,0,0,0.2);
			padding-top: 0px;
			padding: 27px 0 23px 0;
		}
		.wpsm_ac_h_i  li {
			color:#fff;
			font-size: 20px;
			line-height: 1.3;
			font-weight: 600;
			
		}
		.wpsm_ac_h_i .btn-danger{
			font-size: 29px;
			background-color: #d43f3a;
			border-radius:1px;
			margin-right:10px;
				 
		 }
		.wpsm_ac_h_i .btn-success{
			font-size: 29px;
			border-radius:1px;
			background-color: #f3f3f3;
			color:#444;
		}
		.wpsm_ac_h_i ul{ text-align: left;
			padding-left: 50px
		}
		.wpsm_ac_h_i ul li i{
			margin-right:10px;
		}
		.portfolio_demo_btn2 {
    border: 1px solid #919499;
    border-radius: 0px;
    margin-bottom: 10px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    padding: 12px 12px;
    display: inline-block;
    border-radius: 2px;
    cursor: pointer;
    letter-spacing: 1px;
    outline: none;
    position: relative;
    text-decoration: none !important;
    background-color: #31a3dd;
    border-color: #31a3dd;
    color: #fff;
    -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    transition: all ease 0.5s;
    padding-left: 22px;
    padding-right: 22px;
}

		</style>
<div  style="text-align:right;width:100%;overflow:hidden;padding-right:10px;"><h5>We Need your Support, please rate us on wordpress</h5>
		<a class="portfolio_read_more_btn" target="_blank" style="background:#31a3dd;color:#fff;margin-right:10px;margin-bottom:10px;vertical-align:middle;font-weight:700;box-shadow: 0 0 26px rgba(0, 0, 0, 0.2);" href="https://wordpress.org/plugins/coming-soon-wp/"><span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>
				<span class="dashicons dashicons-star-filled"></span>  Rate Here</a>	</div>
<div class="coming-soon-wp-panel">

								
        
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><?php _e('Dashboard','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><?php _e('SEO','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Design','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Social','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Contact Info','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Help','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
					<li role="presentation"><a href="#Section7" aria-controls="messages" role="tab" data-toggle="tab"><?php _e('Pro Features','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
                    <li role="presentation"><a href="<?php echo home_url(); ?>?dazz_cs_preview=true&TB_iframe=true&width=900&height=80" class="thickbox"  ><?php _e('Live Preview','DAZZ_CSW_TEXT_DOMAIN'); ?></a></li>
					
				</ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
						<?php require_once('dashboard.php'); ?>
					</div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
						<?php require_once('seo.php'); ?>
					</div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
						<?php require_once('design.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section4">
						<?php require_once('social.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section5">
						<?php require_once('contact.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section6">
						<?php require_once('help.php'); ?>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="Section7">
						<?php require_once('pro.php'); ?>
					</div>
                </div>
            </div>
			<br />
			
			
        <div class="dazz_cs_loding" id="dazz_loding_image"></div>
		<button data-dialog="somedialog" class="dialog-button" style="display:none;">Open Dialog</button>
		<div id="somedialog" class="dialog" style="position: fixed; z-index: 9999;">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
					<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
						<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
					</svg>
				</div>
				<div class="dialog-inner">
					<h2><strong></strong><?php _e('Setting Saved Successfully','DAZZ_CSW_TEXT_DOMAIN'); ?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button" ><?php _e('Close','DAZZ_CSW_TEXT_DOMAIN');?></button></div>
				</div>
			</div>
		</div>
  <?php require_once('fs.php'); ?>
</div>

<div class="wpsm_ac_h_i ">
			<div class="texture-layer">
				
						
				<div class="wpsm_ac_h_b"><a class="btn btn-danger btn-lg " href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">Upgrade To Pro Version Only In  $19</a><a class="btn btn-success btn-lg " href="http://wpshopmart.com/coming-soon-pro-demo-page/" target="_blank">View Demos</a></div>
					<div style="overflow:hidden;display:block;width:100%">
						
						
						<div class="col-md-4">
							<ul>
								<li> <i class="fa fa-check"></i> 8 Coming Soon Design Templates </li>
								<li> <i class="fa fa-check"></i> 7+ Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> User White list Access  </li>
								<li> <i class="fa fa-check"></i> Landing Pages access </li>
								<li> <i class="fa fa-check"></i> Ip access </li>
								<li> <i class="fa fa-check"></i> Contact form integrated  </li>
								<li> <i class="fa fa-check"></i> landing Page option  </li>
								<li> <i class="fa fa-check"></i> Google Map integrated</li>
								<li> <i class="fa fa-check"></i> Redirect to another website</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								
								<li> <i class="fa fa-check"></i> Countdown Auto Launch </li>
								<li> <i class="fa fa-check"></i> 5+ Additional Pages </li>
								<li> <i class="fa fa-check"></i> Slideshow Background images </li>
								<li> <i class="fa fa-check"></i> Youtube Video Background </li>
								<li> <i class="fa fa-check"></i> Service Section  </li>
								<li> <i class="fa fa-check"></i> About Us Section </li>
								<li> <i class="fa fa-check"></i> Team Section </li>
								<li> <i class="fa fa-check"></i> 500+ Google Font integrated</li>
								<li> <i class="fa fa-check"></i> Subscriber List Option</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								
								<li> <i class="fa fa-check"></i> Mailchimp Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> Madmimi Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> Icontact Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> Constant Contact Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> Campaign Monitor Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> GetResponse Newsletter Integrated</li>
								<li> <i class="fa fa-check"></i> Full SEO COntrol</li>
								<li> <i class="fa fa-check"></i> All Wordpess themes supported </li>
								<li> <i class="fa fa-check"></i> All Browser supported </li>
							</ul>
						</div>
						
					</div>
				
			</div>
		</div>
		
		<a href="http://wpshopmart.com/plugins/coming-soon-pro/" target="_blank">	
				<img src="<?php echo DAZZ_CSW_PLUGIN_URL.'assets/images/temp.jpg'; ?>" style="width:100%;height:auto"  />
				</a>	