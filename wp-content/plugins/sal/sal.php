<?php
/**
 * @package SAL
 * @version 0.1
 */
/*
Plugin Name: SAL
Plugin URI: http://seattleapplab.com/
Description: This is SAL plugin
Version: 0.1
Author URI: http://premsingh.com.np/
*/

/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_menu_page( 'My Plugin Options', 'Portfolio', 'manage_options', 'portfolio', 'portfolio_options' );
}

/** Step 3. */
function portfolio_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	?>
	<div class="wrap">
	<h2>Portfolio <a href="http://localhost/wordpress_test/wp-admin/post-new.php?post_type=page" class="add-new-h2">Add New</a></h2>



	<form id="posts-filter" method="get">

	

		<div class="tablenav top">

			<div class="alignleft actions bulkactions">
				<label for="bulk-action-selector-top" class="screen-reader-text">Select bulk action</label><select name="action" id="bulk-action-selector-top">
		<option value="-1" selected="selected">Bulk Actions</option>
		<option value="trash">Move to Trash</option>
	</select>
	<input type="submit" id="doaction" class="button action" value="Apply">
			</div>
			<div class="alignleft actions">
			<label for="filter-by-date" class="screen-reader-text">Filter by date</label>
			<select name="m" id="filter-by-date">
				<option selected="selected" value="0">All dates</option>
	<option value="201507">July 2015</option>
			</select>
	<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Filter">		</div>
	<div class="tablenav-pages one-page"><span class="displaying-num">2 items</span>
	<span class="pagination-links"><a class="first-page disabled" title="Go to the first page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page">«</a>
	<a class="prev-page disabled" title="Go to the previous page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">‹</a>
	<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Select Page</label><input class="current-page" id="current-page-selector" title="Current page" type="text" name="paged" value="1" size="1"> of <span class="total-pages">1</span></span>
	<a class="next-page disabled" title="Go to the next page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">›</a>
	<a class="last-page disabled" title="Go to the last page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">»</a></span></div>
			<br class="clear">
		</div>
	<table class="wp-list-table widefat fixed striped pages">
		<thead>
		<tr>
			<th scope="col" id="cb" class="manage-column column-cb check-column" style=""><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></th><th scope="col" id="title" class="manage-column column-title sortable desc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author" style="">Author</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
		</thead>

		<tbody id="the-list">
						<tr id="post-36" class="iedit author-self level-0 post-36 type-page status-publish hentry">
					<th scope="row" class="check-column">
									<label class="screen-reader-text" for="cb-select-36">Select page1</label>
					<input id="cb-select-36" type="checkbox" name="post[]" value="36">
					<div class="locked-indicator"></div>
								</th>
				<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress_test/wp-admin/post.php?post=36&amp;action=edit" title="Edit “page1”">page1</a></strong>
	<div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
	<div class="row-actions"><span class="edit"><a href="http://localhost/wordpress_test/wp-admin/post.php?post=36&amp;action=edit" title="Edit this item">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a class="submitdelete" title="Move this item to the Trash" href="http://localhost/wordpress_test/wp-admin/post.php?post=36&amp;action=trash&amp;_wpnonce=a7ead5e045">Trash</a> | </span><span class="view"><a href="http://localhost/wordpress_test/page1-4/" title="View “page1”" rel="permalink">View</a></span></div>
	<div class="hidden" id="inline_36">
		<div class="post_title">page1</div>
		<div class="post_name">page1-4</div>
		<div class="post_author">1</div>
		<div class="comment_status">open</div>
		<div class="ping_status">open</div>
		<div class="_status">publish</div>
		<div class="jj">29</div>
		<div class="mm">07</div>
		<div class="aa">2015</div>
		<div class="hh">11</div>
		<div class="mn">25</div>
		<div class="ss">03</div>
		<div class="post_password"></div><div class="post_parent">0</div><div class="page_template"></div><div class="menu_order">0</div></div></td>			<td class="author column-author"><a href="edit.php?post_type=page&amp;author=1">prem@mythem</a></td>
							<td class="comments column-comments"><div class="post-com-count-wrapper">
				<a href="http://localhost/wordpress_test/wp-admin/edit-comments.php?p=36" title="0 pending" class="post-com-count"><span class="comment-count">0</span></a>			</div></td>
				<td class="date column-date"><abbr title="2015/07/29 11:25:03 am">2015/07/29</abbr><br>Published</td>		</tr>
					<tr id="post-38" class="iedit author-self level-0 post-38 type-page status-publish hentry">
					<th scope="row" class="check-column">
									<label class="screen-reader-text" for="cb-select-38">Select page2</label>
					<input id="cb-select-38" type="checkbox" name="post[]" value="38">
					<div class="locked-indicator"></div>
								</th>
				<td class="post-title page-title column-title"><strong><a class="row-title" href="http://localhost/wordpress_test/wp-admin/post.php?post=38&amp;action=edit" title="Edit “page2”">page2</a></strong>
	<div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
	<div class="row-actions"><span class="edit"><a href="http://localhost/wordpress_test/wp-admin/post.php?post=38&amp;action=edit" title="Edit this item">Edit</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" title="Edit this item inline">Quick&nbsp;Edit</a> | </span><span class="trash"><a class="submitdelete" title="Move this item to the Trash" href="http://localhost/wordpress_test/wp-admin/post.php?post=38&amp;action=trash&amp;_wpnonce=460aa343e3">Trash</a> | </span><span class="view"><a href="http://localhost/wordpress_test/page2-2/" title="View “page2”" rel="permalink">View</a></span></div>
	<div class="hidden" id="inline_38">
		<div class="post_title">page2</div>
		<div class="post_name">page2-2</div>
		<div class="post_author">1</div>
		<div class="comment_status">open</div>
		<div class="ping_status">open</div>
		<div class="_status">publish</div>
		<div class="jj">29</div>
		<div class="mm">07</div>
		<div class="aa">2015</div>
		<div class="hh">11</div>
		<div class="mn">27</div>
		<div class="ss">39</div>
		<div class="post_password"></div><div class="post_parent">0</div><div class="page_template"></div><div class="menu_order">0</div></div></td>			<td class="author column-author"><a href="edit.php?post_type=page&amp;author=1">prem@mythem</a></td>
							<td class="comments column-comments"><div class="post-com-count-wrapper">
				<a href="http://localhost/wordpress_test/wp-admin/edit-comments.php?p=38" title="0 pending" class="post-com-count"><span class="comment-count">0</span></a>			</div></td>
				<td class="date column-date"><abbr title="2015/07/29 11:27:39 am">2015/07/29</abbr><br>Published</td>		</tr>
			</tbody>

		<tfoot>
		<tr>
			<th scope="col" class="manage-column column-cb check-column" style=""><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></th><th scope="col" class="manage-column column-title sortable desc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-author" style="">Author</th><th scope="col" class="manage-column column-comments num sortable desc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" class="manage-column column-date sortable asc" style=""><a href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>	</tr>
		</tfoot>

	</table>
		<div class="tablenav bottom">

			<div class="alignleft actions bulkactions">
				<label for="bulk-action-selector-bottom" class="screen-reader-text">Select bulk action</label><select name="action2" id="bulk-action-selector-bottom">
	<option value="-1" selected="selected">Bulk Actions</option>
		<option value="edit" class="hide-if-no-js">Edit</option>
		<option value="trash">Move to Trash</option>
	</select>
	<input type="submit" id="doaction2" class="button action" value="Apply">
			</div>
			<div class="alignleft actions">
			</div>
	<div class="tablenav-pages one-page"><span class="displaying-num">2 items</span>
	<span class="pagination-links"><a class="first-page disabled" title="Go to the first page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page">«</a>
	<a class="prev-page disabled" title="Go to the previous page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">‹</a>
	<span class="paging-input">1 of <span class="total-pages">1</span></span>
	<a class="next-page disabled" title="Go to the next page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">›</a>
	<a class="last-page disabled" title="Go to the last page" href="http://localhost/wordpress_test/wp-admin/edit.php?post_type=page&amp;paged=1">»</a></span></div>
			<br class="clear">
		</div>

	</form>


		<form method="get"><table style="display: none"><tbody id="inlineedit">
			
			<tr id="inline-edit" class="inline-edit-row inline-edit-row-page inline-edit-page quick-edit-row quick-edit-row-page inline-edit-page" style="display: none"><td colspan="5" class="colspanchange">

			<fieldset class="inline-edit-col-left"><div class="inline-edit-col">
				<h4>Quick Edit</h4>
		
				<label>
					<span class="title">Title</span>
					<span class="input-text-wrap"><input type="text" name="post_title" class="ptitle" value=""></span>
				</label>

				<label>
					<span class="title">Slug</span>
					<span class="input-text-wrap"><input type="text" name="post_name" value=""></span>
				</label>

		
					<label><span class="title">Date</span></label>
				<div class="inline-edit-date">
					<div class="timestamp-wrap"><label for="mm" class="screen-reader-text">Month</label><select name="mm">
				<option value="01">01-Jan</option>
				<option value="02">02-Feb</option>
				<option value="03">03-Mar</option>
				<option value="04">04-Apr</option>
				<option value="05">05-May</option>
				<option value="06">06-Jun</option>
				<option value="07" selected="selected">07-Jul</option>
				<option value="08">08-Aug</option>
				<option value="09">09-Sep</option>
				<option value="10">10-Oct</option>
				<option value="11">11-Nov</option>
				<option value="12">12-Dec</option>
	</select> <label for="jj" class="screen-reader-text">Day</label><input type="text" name="jj" value="29" size="2" maxlength="2" autocomplete="off">, <label for="aa" class="screen-reader-text">Year</label><input type="text" name="aa" value="2015" size="4" maxlength="4" autocomplete="off"> @ <label for="hh" class="screen-reader-text">Hour</label><input type="text" name="hh" value="11" size="2" maxlength="2" autocomplete="off"> : <label for="mn" class="screen-reader-text">Minute</label><input type="text" name="mn" value="25" size="2" maxlength="2" autocomplete="off"></div><input type="hidden" id="ss" name="ss" value="03">			</div>
				<br class="clear">
		
		<label class="inline-edit-author"><span class="title">Author</span><select name="post_author" class="authors">
		<option value="1">prem@mythem</option>
	</select></label>
				<div class="inline-edit-group">
					<label class="alignleft">
						<span class="title">Password</span>
						<span class="input-text-wrap"><input type="text" name="post_password" class="inline-edit-password-input" value=""></span>
					</label>

					<em class="alignleft inline-edit-or">
						–OR–				</em>
					<label class="alignleft inline-edit-private">
						<input type="checkbox" name="keep_private" value="private">
						<span class="checkbox-title">Private</span>
					</label>
				</div>

		
			</div></fieldset>

		
			<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

					<label>
					<span class="title">Parent</span>
		<select name="post_parent" id="post_parent">
		<option value="0">Main Page (no parent)</option>
		<option class="level-0" value="36">page1</option>
		<option class="level-0" value="38">page2</option>
	</select>
				</label>

		
				<label>
					<span class="title">Order</span>
					<span class="input-text-wrap"><input type="text" name="menu_order" class="inline-edit-menu-order-input" value="0"></span>
				</label>

		
				<label>
					<span class="title">Template</span>
					<select name="page_template">
		    									<option value="default">Default Template</option>
										</select>
				</label>

		
		
		
				<div class="inline-edit-group">
								<label class="alignleft">
						<input type="checkbox" name="comment_status" value="open">
						<span class="checkbox-title">Allow Comments</span>
					</label>
							</div>

		
				<div class="inline-edit-group">
					<label class="inline-edit-status alignleft">
						<span class="title">Status</span>
						<select name="_status">
													<option value="publish">Published</option>
							<option value="future">Scheduled</option>
													<option value="pending">Pending Review</option>
							<option value="draft">Draft</option>
						</select>
					</label>

		
				</div>

		
			</div></fieldset>

				<p class="submit inline-edit-save">
				<a href="#inline-edit" class="button-secondary cancel alignleft">Cancel</a>
				<input type="hidden" id="_inline_edit" name="_inline_edit" value="37f8975022">				<a href="#inline-edit" class="button-primary save alignright">Update</a>
					<span class="spinner"></span>
							<input type="hidden" name="post_view" value="list">
				<input type="hidden" name="screen" value="edit-page">
							<span class="error" style="display:none"></span>
				<br class="clear">
			</p>
			</td></tr>
		
			<tr id="bulk-edit" class="inline-edit-row inline-edit-row-page inline-edit-page bulk-edit-row bulk-edit-row-page bulk-edit-page" style="display: none"><td colspan="5" class="colspanchange">

			<fieldset class="inline-edit-col-left"><div class="inline-edit-col">
				<h4>Bulk Edit</h4>
					<div id="bulk-title-div">
					<div id="bulk-titles"></div>
				</div>

		
		
		
			</div></fieldset>

		
			<fieldset class="inline-edit-col-right"><div class="inline-edit-col">

		<label class="inline-edit-author"><span class="title">Author</span><select name="post_author" class="authors">
		<option value="-1">— No Change —</option>
		<option value="1">prem@mythem</option>
	</select></label>			<label>
					<span class="title">Parent</span>
		<select name="post_parent" id="post_parent">
		<option value="-1">— No Change —</option>
		<option value="0">Main Page (no parent)</option>
		<option class="level-0" value="36">page1</option>
		<option class="level-0" value="38">page2</option>
	</select>
				</label>

		
				<label>
					<span class="title">Template</span>
					<select name="page_template">
							<option value="-1">— No Change —</option>
		    									<option value="default">Default Template</option>
										</select>
				</label>

		
		
		
				<div class="inline-edit-group">
						<label class="alignleft">
					<span class="title">Comments</span>
					<select name="comment_status">
						<option value="">— No Change —</option>
						<option value="open">Allow</option>
						<option value="closed">Do not allow</option>
					</select>
				</label>
						</div>

		
				<div class="inline-edit-group">
					<label class="inline-edit-status alignleft">
						<span class="title">Status</span>
						<select name="_status">
								<option value="-1">— No Change —</option>
													<option value="publish">Published</option>
							
								<option value="private">Private</option>
													<option value="pending">Pending Review</option>
							<option value="draft">Draft</option>
						</select>
					</label>

		
				</div>

		
			</div></fieldset>

				<p class="submit inline-edit-save">
				<a href="#inline-edit" class="button-secondary cancel alignleft">Cancel</a>
				<input type="submit" name="bulk_edit" id="bulk_edit" class="button button-primary alignright" value="Update">			<input type="hidden" name="post_view" value="list">
				<input type="hidden" name="screen" value="edit-page">
							<span class="error" style="display:none"></span>
				<br class="clear">
			</p>
			</td></tr>
				</tbody></table></form>

	<div id="ajax-response"></div>
	<br class="clear">
	</div>
	<?php
	
}
