           <div class="panel-group panel panel-default checkoutfield wcfew_list_item" style="width:90%; display:none;">
           <div class="panel-heading">

           <table class="heading-table">
			<tr>
			    <td width="20%">
			     <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="">
                  <span class="glyphicon glyphicon-edit pull-left"></span>
			     </a>
			    </td>
			    
				<td width="30%">
	              <label  class="new-field-label"></label>
        
                </td>
	            <td width="30%">
	  	          <input type="text" placeholder="<?php _e('Placeholder Text','wcfew'); ?>">
	            </td>
			 
			    <td width="20%">
		          <span class="glyphicon glyphicon-remove-circle pull-right "></span>
		         </td>
                </tr>
		    </table>

           </div>
           <div id="" class="panel-collapse collapse">
			  <table class="table"> 
			   
			 
			   
			   <tr>
	           <td><label><?php _e('Field Type','wcfew'); ?></label></td>
		       <td>
		          <select class="checkout_field_type" name="" >
			        <option value="text"  ><?php _e('Text','wcfew'); ?></option>
			        <option value="textarea" ><?php _e('Textarea','wcfew'); ?></option>
			        <option value="password" ><?php _e('Password','wcfew'); ?></option>
			        <option value="checkbox" ><?php _e('Checkbox','wcfew'); ?></option>
			        <option value="wcfewselect" ><?php _e('Select','wcfew'); ?></option>
			        <option value="multiselect"><?php _e('Multi Select','wcfew'); ?></option>
			        <option value="radio" ><?php _e('Radio Select','wcfew'); ?></option>
			        <option value="datepicker" ><?php _e('Date Picker','wcfew'); ?></option>
					
			       </select>
		       </td>
	           </tr>
			   <tr>
                <td><label><?php  _e('Label','wcfew'); ?></label></td>
	            <td><input type="text" class="checkout_field_label" name="" value="" size="35"></td>
               </tr>
			   
			
			   
			   <tr>
	           <td><label><?php _e('Class','wcfew'); ?></label></td>
		       <td>
		       <select class="checkout_field_width" name="">
			    
				<option value="form-row-wide" ><?php _e('Full Width','wcfew'); ?></option>
			    <option value="form-row-first" ><?php _e('First Half','wcfew'); ?></option>
			    <option value="form-row-last" ><?php _e('Second Half','wcfew'); ?></option>
				
				
			     
			   </select>
		       </td>
	           </tr>
			   
			   
		       <tr>
                <td><label ><?php  _e('Required','wcfew'); ?></label></td>
                <td><input class="checkout_field_required" type="checkbox" name=""  value="1"></td>
			   </tr>
			   
			   
			   <tr>
                <td><label><?php  _e('Clearfix','wcfew'); ?></label></td>
                <td><input class="checkout_field_clear" type="checkbox" name="" value="1"></td>
			   </tr>
			   
			   
			   <tr>
                <td><label><?php  _e('Placeholder ','wcfew'); ?></label></td>
	            <td><input type="text" class="checkout_field_placeholder" name="" value="" size="35"></td>
               </tr>
			   
			   
			   <tr class="add-field-options" style="">
	           <td>
		         <label><?php _e('Options','wcfew'); ?></label>
		       </td>
		       <td>
		       <input type="text" class="checkout_field_options" name="" placeholder="<?php _e('Separated by comma. For Example: option1,option2','wcfew'); ?>" value="" size="35">
		       </td>
	           </tr>
			   
			 
			   
			   <tr>
                <td><label><?php  _e('Visibility','wcfew'); ?></label></td>
	            <td>
		           <select class="checkout_field_visibility" name="" >
		             <option value="always-visible"><?php _e('Always Visibile','wcfew'); ?></option>
					 <option value="product-specific"><?php _e('Conditional - Product Specific','wcfew'); ?></option>
					 <option value="category-specific"><?php _e('Conditional - Category Specific','wcfew'); ?></option>
			       </select>
		        </td>
	           </tr>
			   
			   <tr class="checkout_field_products_tr" style="display:none;">
			    <td>
                 <label><?php echo __('Select Products','wcfew'); ?></label>
	            </td>
			    <td>
			     <select class="checkout_field_products" data-placeholder="<?php _e('Choose Products','wcfew'); ?>" name="" multiple  style="width:600px">
                  <?php foreach ($posts_array as $post) { ?>
				  <option value="<?php echo $post->ID; ?>">#<?php echo $post->ID; ?>- <?php echo $post->post_title; ?></option>
				  <?php } ?>
                 </select>
                </td>
			   </tr>
			   <tr class="checkout_field_category_tr" style="display:none;" >
			    <td>
                 <label for="notice_category"><?php echo __('Select Categories','wcfew'); ?></label>
	            </td>
			    <td>
			     <select class="checkout_field_category" data-placeholder="<?php _e('Choose Categories','wcfew'); ?>" name=""  multiple style="width:600px">
                  <?php foreach ($categories as $category) { ?>
				  <option value="<?php echo $category->term_id; ?>">#<?php echo $category->term_id; ?>- <?php echo $category->name; ?></option>
				  <?php } ?>
                 </select>
                </td>
			    </tr>
			   
			   <tr>
                <td><label><?php  _e('Validate','wcfew'); ?></label></td>
	            <td>
		           <select name="" class="checkout_field_validate" multiple>
			         <option value="state" ><?php _e('state','wcfew'); ?></option>
			         <option value="postcode" ><?php _e('postcode','wcfew'); ?></option>
			         <option value="email" ><?php _e('email','wcfew'); ?></option>
			         <option value="phone" ><?php _e('phone','wcfew'); ?></option>
			       </select>
		       </td>
	 
               </tr>
			      <tr>
			     <td width="40%"><label for="<?php echo $key; ?>_clear"><?php  _e('Chose Options','wcfew'); ?></label></td>
			     <td  width="60%">
			      <table>
			        
			   
			        <tr class="disable_datepicker_tr" style="display:none;">
                        <td><input class="checkout_field_disable_past_dates" type="checkbox" name=""  value="1"></td>
						<td><label ><?php  _e('Disable Past Date Selection In Datepicker','wcfew'); ?></label></td>
			        </tr>
					
					<tr>
                       <td><input class="checkout_field_orderedition" type="checkbox" name=""  value="1"></td>
					   <td><label ><?php  _e('Show field detail on order edition page','wcfew'); ?></label></td>
			        </tr>
					
					<tr>
                       <td><input class="checkout_field_emailfields" type="checkbox" name=""  value="1"></td>
					   <td><label ><?php  _e('Show field detail on woocommerce order emails','wcfew'); ?></label></td>
			        </tr>
			      
			        </table>
				   </td>
				 </tr>
			 
			   
			   </table>
		   </div>
        </div>