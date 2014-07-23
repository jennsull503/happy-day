<?php
  if ($messageStack->size('header') > 0) {
    echo '<div>' . $messageStack->output('header') . '</div>';
  }
?>
<div id="header">

    <div class="container">
        <div id="logo" class="nine columns">

            <div id="nav_first1">
                <div id="nav_block_head1">
                    <div class="nav_block_head_field"><?php echo SERVICE_TOOLS; ?></div>
                    <span class="nav_block_head_button"> </span>
                    <div class="clear"></div>
                </div>
                <div class="nav_block_dropdown1">		
				
                    <ul class="links">
                        <li class="first"><a href="<?php echo $login_url; ?>"><?php echo $login_text; ?></a></li>
						<!-- check to see if the customer is logged in and only show them MyAccount, instead of Create Account -->
                        <?php if (tep_session_is_registered('customer_id')) { ?>
						<li><a href="<?php echo tep_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a></li>
						<?php } else { ?>
						<li><a href="<?php echo $create_account_url; ?>">Create Account</a></li>
						<?php } ?>						
						<li><a href="pricing.php">Pricing</a></li>					
						
                        <li class="last"><a href="<?php echo tep_href_link(FILENAME_CONTACT_US, '', 'SSL'); ?>"><?php echo MENU_TEXT_CONTACT_US; ?></a></li>
                    </ul>
                </div>
            </div>

            <div id="storeLogo">
                <a class="logo_inner" href=""><img src="images/esm-logo.png" style="max-height: 100px;" alt="Easy Shipping Modules" class="scale-with-grid" /></a>
                <p class="shopping_pleasure"><img src="images/esm-tagline.png" style="max-height: 100px;" alt="Easy Shipping Module Integration with osCommerce, Zen Cart, Loaded Commerce and more" class="scale-with-grid" /></p>
            </div>
        </div>
        <div id="header_blocks" class="seven columns">
            <div class="row">
                <div class="shopping_cart"><?php include(DC_BLOCKS . 'shopping_cart.php');?></div>
                <!-- <div class="currency"><?php require(DC_BLOCKS . 'currencies.php'); ?></div>
                <div class="language"><?php require(DC_BLOCKS . 'languages.php'); ?></div> -->
            </div>
            <div class="row">                
                <div id="nav_first">
                    <div id="nav_block_head">
                        <div class="nav_block_head_field"><?php echo CUSTOMER_TOOLS; ?></div>
                        <span class="nav_block_head_button"> </span>
                        <div class="clear"></div>
                    </div>
                    <div class="nav_block_dropdown">
                        <ul class="links">                            
							<li class="first"><a href="latest_news.php">Latest News</a></li>						
                            <li><a href="support.php">Support</a></li>
                            <li class="last"><a href="about.php">About Us</a></li>                            
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="nav-container">
    <div class="container">
        <div class="sixteen columns">
            <div id="menu_block_head">
                <div class="nav_block_head_field"><?php echo SELECT_CATEGORY; ?></div>
                <span class="menu_block_head_button"> </span>
                <div class="clear"></div>
            </div>
            <div class="menu_block_dropdown">
                <?php require(DC_BLOCKS . 'categories.php'); ?>
            </div>
            <?php include(DC_BLOCKS . 'search.php');?>
        </div>
    </div>
</div>

<?php
  if (isset($HTTP_GET_VARS['error_message']) && tep_not_null($HTTP_GET_VARS['error_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerError">
    <td class="headerError"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['error_message']))); ?></td>
  </tr>
</table>
<?php
  }
  if (isset($HTTP_GET_VARS['info_message']) && tep_not_null($HTTP_GET_VARS['info_message'])) {
?>
<table border="0" width="100%" cellspacing="0" cellpadding="2">
  <tr class="headerInfo">
    <td class="headerInfo"><?php echo htmlspecialchars(stripslashes(urldecode($HTTP_GET_VARS['info_message']))); ?></td>
  </tr>
</table>
<?php
  }
?>