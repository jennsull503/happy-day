<?php

  require(DIR_WS_INCLUDES . 'counter.php');
//require('unishop_theme/unishop_functions.php');

?>
 <?php if ($main_page_url) { ?>
<!-- dropdown footer block -->
<!-- <div id="footer_higher">
    <div class="container">
        <div id="footer_higher_content">
                <?php //require(DC_BLOCKS . 'footer_facebook.php'); ?>
                <?php //require(DC_BLOCKS . 'footer_twitter.php'); ?>
                <?php //require(DC_BLOCKS . 'footer_news.php'); ?>
                <?php //require(DC_BLOCKS . 'footer_ads.php'); ?>
        </div>
    </div>
</div> -->
<!-- end dropdown footer block -->
<?php } ?>
<!-- footer info -->
<div class="footer_bg_color">

    <div id="back-top"><a href="#top"></a></div>
    <div id="footer">
        <div class="container">

            <div class="four columns footer-block footer-copyright">
                <?php require(DC_BLOCKS . 'footer_newsletter.php'); ?>
				<div class="clear"></div>
				<img src="images/creditcards.png" alt="Easy Shipping Modules accepts debit and credit cards" style="margin-bottom: 5px;max-width: 300px;" class="scale-with-grid" />
				<span id="siteseal">
					<script type="text/javascript" src="https://seal.starfieldtech.com/getSeal?sealID=zQlGUkhV4O7seCJP58yRgzzYn5OncaW9Oj3f2cMOZ1IMkdNk8Nec8"></script>
				</span>				
				<div id="copyright">
					<a class="logo_footer" href=""><img src="images/esm-logo-small.png" style="max-width: 250px;margin-top: 5px;" alt="Easy Shipping Modules" class="scale-with-grid" /></a>					
				</div>				
            </div>
            <?php include(DC_BLOCKS . 'footer_links.php'); ?>
			<div class="clear"></div>
			<div>
				<p style="text-align:center;">&copy; 2013 - 2014 Easy Shipping Modules, Inc. All Rights Reserved. || We've had <?php echo '<strong>' . $counter_now . '</strong> visits since ' . $counter_startdate_formatted; ?></p><br />
				<p style="text-align:center;"><a href="<?php echo tep_href_link(FILENAME_TERMS); ?>">General Terms of Use</a> | 
				<a href="<?php echo tep_href_link(FILENAME_CONDITIONS); ?>"><?php echo BOX_INFORMATION_CONDITIONS; ?></a> | 
				<a href="<?php echo tep_href_link(FILENAME_PRIVACY); ?>"><?php echo MODULE_BOXES_INFORMATION_BOX_PRIVACY; ?></a> | 
				<a href="<?php echo tep_href_link(FILENAME_POLICIESAGREEMENT); ?>">Agreement Policies</a> | 
				<a href="<?php echo tep_href_link(FILENAME_ACCEPTABLEUSE); ?>">Acceptable Use</a> | 
				<a href="<?php echo tep_href_link(FILENAME_DATARETENTION); ?>">Data Retention</a> | 
				<a href="policies_refund.php">Payment & Refund Policies</a> </p><br />

				<?php /*** Begin Header Tags SEO ***/
				if (HEADER_TAGS_DISPLAY_PAGE_TOP_TITLE == 'true') {	?>
					<div style="text-align:center; color:#aaa; font-size:10px;"><?php echo $header_tags_array['title'] . ' - ' . $header_tags_array['htc_description']; ?></div>
				<?php } /*** End Header Tags SEO ***/ ?>
			</div>
        </div>
    </div>
</div>
<!-- end footer info -->
<?php require(DC_BLOCKS . 'socials_links.php'); ?>