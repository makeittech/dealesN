<div class="njba-quote-box-main  layout-<?php echo $settings->quotebox_layout; ?>">  	<div class="njba-quote-box-inner">  		 		<?php		$layout = $settings->quotebox_layout;			switch ( $layout ) {				case '1':						echo '<div class="njba-quote-box">';							echo '<div class="njba-quote-post">';								 echo ' <div class="njba-quote-post-name">';									 		$module->njba_profile_name(); 									 		$module->njba_profile_designation();								 echo '</div>';							echo '</div>';							echo '<div class="njba-quote-box-content">';							 		$module->njba_profile_content();							echo '</div>';										$module->njba_left_quotesign(); 									$module->njba_right_quotesign(); 						echo '</div>';				break;				case '2':						echo '<div class="njba-quote-box">';							echo '<div class="njba-quote-box-content">';							 		$module->njba_profile_content();							echo '</div>';								echo '<div class="njba-quote-post">';								 echo ' <div class="njba-quote-post-name">';									 		$module->njba_profile_name(); 									 		$module->njba_profile_designation();								 echo '</div>';							echo '</div>';									$module->njba_left_quotesign(); 									$module->njba_right_quotesign(); 						echo '</div>';				break;				case '3':						echo '<div class="njba-quote-box">';							$module->njba_left_quotesign(); 							echo '<div class="njba-quote-box-content">';									echo ' <div class="njba-quote-post-name">';									 		$module->njba_profile_name(); 									 		$module->njba_profile_designation();									 echo '</div>';							 		$module->njba_profile_content();							echo '</div>';								$module->njba_right_quotesign(); 						echo '</div>';				break;			}		 ?>	</div><!--njba-quote-box-inner-->	</div><!--njba-quote-box-main-->