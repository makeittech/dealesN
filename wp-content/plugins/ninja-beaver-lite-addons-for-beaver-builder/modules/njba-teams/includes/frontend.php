<div class="njba-teams-main njba-teams-layout-<?php echo $settings->team_layout; ?>">	 <div class="njba-teams-body">	    	<div class="njba-teams-wrapper">			    <?php					$layout = $settings->team_layout;					$number_teams = count($settings->teams);					switch ( $layout ) {						case '1':							include('layout_1.php');						break;						case '2':							include('layout_2.php');						break;					}				?>		</div><!--njba-teams-wrapper-->	</div><!--njba-teams-body--></div><!--njba-teams-main-->		