<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SocialButtons Class</title>
   
    <!-- Darmowa biblioteka styli CSS -->
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- KONIEC -->
	<style>
		  body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			font-family: Helvetica,Arial,sans-serif !important;
		  }
	</style>
	<script src="../assets/FB.Share.js" type="text/javascript"></script>
	<link href="../assets/FB.Share.css" rel="stylesheet" type="text/css" />
<?php
	
	/**
	* Before using class You must include class file.
	* If it's located in the same folder just leave line as it is, 
	* but if You have classes in different folder or You want to put it in another location
	* change line to something like this:
	* require_once( '/path/to/folder/class.SocialButtons.php' );
	*/
	
	require_once( dirname( dirname( __FILE__ ) ) . '/class/class.SocialButtons.php' );
	
	/**
	* Also before calling any buttons You must be sure that Facebook/Google/Tweeter (depends what buttons You will use) are included.
	* If You don't have them included before copy and paste lines in Your script footer area 
	*/
	/* If You will use old share button pass argument as true */
	echo SocialButtons::scriptFacebook( true );
	
	echo SocialButtons::scriptGoogle();
	echo SocialButtons::scriptTweet();
	echo SocialButtons::scriptPinterest();
	echo SocialButtons::generateFacebookHeader();
	/**
	* Simple Like button with defined link
	*/
?>
  </head>

  <body>

	<div class="container">

	<div class="page-header">
    <h2>Social Buttons PHP Class</h2>
	<p>This class can help You built services with easy use of social buttons and plugins. All Facebook, Google and Tweeter plugin in one place with easy configuration (each plugin has it own default settings) an eaven more easy use for Your project !</p>
	<p>
		<div class="media">
			<a class="pull-left" href="#">
				<img class="media-object" src="../assets/HTML5.png">
			</a>
			<div class="media-body">All plugins work in HTML5</div>
		</div>
	</p>
    </div>
	
	
	<div class="page-header">
    <h2>Defined Constants</h2>
    </div>
	
	<dl class="dl-horizontal">
		<dt><span class="label" style="color:#000"><strong>SB_FONT</strong></span></dt><dd>Font used in Facebook widgets, can be overwritten by each item settings: 'arial', 'lucida grande', 'segoe ui', 'tahoma', 'trebuchet ms', 'verdana'</dd>
		<dt><span class="label" style="color:#000"><strong>SB_SCHEME</strong></span></dt><dd>Facebook widgets layout color: 'light', 'dark' </dd>
		<dt><span class="label" style="color:#000"><strong>SB_LAYOUT</strong></span></dt><dd>Facebook button layout: 'standard', 'button_count', 'box_count'</dd>
		<dt><span class="label" style="color:#000"><strong>SB_APP_ID</strong></span></dt><dd>Your's Facebook aplication's ID</dd>
		<dt><span class="label" style="color:#000"><strong>SB_FANPAGE</strong></span></dt><dd>Dafault Facebook Fanpage URL used in widgets</dd>
		<dt><span class="label" style="color:#000"><strong>SB_URL</strong></span></dt><dd>Dafault page URL used in widgets</dd>
		<dt><span class="label" style="color:#000"><strong>SB_LANG</strong></span></dt><dd>Default language used in Facebook widgets</dd>
		<dt><span class="label" style="color:#000"><strong>SB_LANG_ALL</strong></span></dt><dd>Default language used in all widgets</dd>
    </dl>
	
	
	<div class="page-header">
		<h2>Important !</h2>
		<p></p>
    </div>

	<p>Before using class You must include class file.</p>
	<p>If it's located in the same folder just leave line as it is, </p>
	<p>but if You have classes in different folder or You want to put it in another location</p>
	<p>change line to something like this:</p>
	<p><pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">require_once( '/path/to/folder/class.SocialButtons.php' );</span></li></ol></pre></p>
	

	<p>Also before calling any buttons You must be sure that Facebook/Google/Tweeter/Pinterest (depends what buttons You will use) are included.</p>
	<p>If You don't have them included before copy and paste lines in Your script footer area</p>
	<p>If You will use old share button pass argument to scriptFacebook as true</p>
	<p><pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="tag">
	echo SocialButtons::scriptFacebook( true );
	echo SocialButtons::scriptGoogle();
	echo SocialButtons::scriptTweet();
	echo SocialButtons::scriptPinterest();
	</span></li></ol></pre></p>
	
	
	
	<div class="page-header">
    <h2>Facebook Meta header</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href=" https://developers.facebook.com/docs/technical-guides/opengraph/built-in-objects/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		With this function You can easliy generate Facebook meta header informations.
	</p>

	<dl class="dl-horizontal">
		<dt>image</dt><dd>image URL which should represent your object within the graph, default:<strong>false</strong></dd>
		<dt>title</dt><dd>title of your object as it should appear within the graph, default:<strong>This is title</strong></dd>
		<dt>description</dt><dd>description of your object as it should appear within the graph, default:<strong>This is description</strong></dd>
		<dt>admins</dt><dd>facebook admin ID, default:<strong>false</strong></dd>
		<dt>app-id</dt><dd>facebook aplication ID default:<span class="label"><strong>SB_APP_ID</strong></span></dd>
		<dt>type</dt><dd> type of your object, default:<strong>article</strong></dd>
		<dt>site_name</dt><dd>i your object is part of a larger web site, the name which should be displayed for the overall site, default:<strong>This is site name</strong></dd>
		<dt>url</dt><dd>canonical URL of your object that will be used as its permanent ID in the graph, default:<span class="label"><strong>SB_URL</strong></span></dd>
    </dl>
	
	<div class="bs-docs-example">
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::generateFacebookHeader( array(
		'image' => 'http://exaple.com/image.jpg',
		'title' => 'This is title',
		'description' => 'This is description',
		'admins' => '123456789',
		'app-id' => SB_APP_ID,
		'type' => 'article',
		'site_name' => 'This is site name',
		'url' => 'http://exaple.com/page.php'
	) );</span></li></ol></pre>
    </div>
	
	



	
	<div class="page-header">
    <h2>Like button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/like/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Like buttons You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>send</dt><dd>display button send with like default:<strong>false</strong></dd>
		<dt>href</dt><dd>the URL to like, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>width</dt><dd>button width, default:<strong> 100</strong></dd>
		<dt>layout</dt><dd>button layout, default:<span class="label"><strong> SB_LAYOUT</strong></span></dd>
		<dt>show-faces</dt><dd>specifies whether to display profile photos below the button (standard layout only), default:<strong> false</strong></dd>
		<dt>action</dt><dd>the verb to display on the button, default:<strong>like</strong></dd>
		<dt>font</dt><dd>the font to display in the button, default:<span class="label"><strong> SB_FONT</strong></span></dd>
		<dt>colorscheme</dt><dd>the color scheme for the like button, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
    </dl>
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::like( array(
			'href' => 'http://example.com',
			'width' => '100',
			'layout' => 'button_count'
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::like( array(
		'href' => 'http://example.com',
		'width' => '100',
		'layout' => 'button_count'
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::like( array(
			'href' => 'http://example.com',
			'width' => '100',
			'layout' => 'box_count'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::like( array(
		'href' => 'http://example.com',
		'width' => '100',
		'layout' => 'box_count'
	 ) );</span></li></ol></pre>
	

    <div class="page-header">
    <h2>Share Old button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		Displaying Share buttons You can set/change options:
	</p>
	<dl class="dl-horizontal">
		<dt>type</dt><dd> layout button type, default:<span class="label"><strong> SB_LAYOUT</strong></span></dd>
		<dt>href</dt><dd> link to share, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>phrase</dt><dd> button text</dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::share();

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::share();</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::share( array(
				'phrase' => 'Click me to Share'
		) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::share( array(
		'phrase' => 'Click me to Share'
	) );</span></li></ol></pre>
	
	

	<div class="page-header">
    <h2>Facebook Comments</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/comments/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Comments Plugin You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>href</dt><dd> link to comment, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>width</dt><dd>comments width, default:<strong> 500</strong></dd>
		<dt>num-posts</dt><dd>the number of comments to show by default, default:<strong> 10</strong></dd>
		<dt>colorscheme</dt><dd>the color scheme for the plugin, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::comments( array(
			'href' => 'http://example.com',
			'num-posts' => 10,
			'width' => '500',
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::comments( array(
		'href' => 'http://example.com',
		'num-posts' => 10,
		'width' => '500',
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::comments( array(
			'href' => 'http://example.com',
			'num-posts' => 3,
			'width' => '1100',
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::comments( array(
		'href' => 'http://example.com',
		'num-posts' => 30,
		'width' => '1100',
	 ) );</span></li></ol></pre>
	
	
	
	
	
	
	
	
	<div class="page-header">
    <h2>Like Box</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/like-box/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Like Box Plugin You can set/change options:
	</p>
		
	<dl class="dl-horizontal">
		<dt>href</dt><dd>the URL of the Facebook Page for this Like Box, default:<span class="label"><strong> SB_FANPAGE</strong></span></dd>
		<dt>width</dt><dd>plugin width, default:<strong> 100</strong></dd>
		<dt>height</dt><dd>plugin height, default:<strong> 100</strong></dd>
		<dt>border</dt><dd>specifies whether or not to show a border around the plugin, default:<strong> false</strong></dd>
		<dt>show-faces</dt><dd>specifies whether or not to display profile photos in the plugin, default:<strong><strong> false</strong></strong></dd>
		<dt>stream</dt><dd>specifies whether to display a stream of the latest posts from the Page's wall , default:<strong><strong> false</strong></strong></dd>
		<dt>header</dt><dd>specifies whether to display the Facebook header at the top of the plugin, default:<strong> false</strong></dd>
		<dt>colorscheme</dt><dd>the color scheme for the plugin, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::likeBox( array(
			'href' => 'https://www.facebook.com/facebook',
			'width' => '700',
			'height' => '100',
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::likeBox( array(
		'href' => 'https://www.facebook.com/facebook',
		'width' => '700',
		'height' => '100',
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::likeBox( array(
			'href' => 'https://www.facebook.com/facebook',
			'width' => '1100',
			'height' => '250',
			'show-faces' => 'true',
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::likeBox( array(
		'href' => 'https://www.facebook.com/facebook',
		'width' => '1100',
		'height' => '250',
		'show-faces' => 'true',
	 ) );</span></li></ol></pre>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 <div class="page-header">
    <h2>Sliding Like Box</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/like-box/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Pligin is displayed in sliding panel in right side of screen.
		Displaying Like Box Plugin You can only set options:
	</p>
		
	<dl class="dl-horizontal">
		<dt>href</dt><dd>the URL of the Facebook Page for this Like Box, default:<span class="label"><strong> SB_FANPAGE</strong></span></dd>
		<dt>border</dt><dd>specifies whether or not to show a border around the plugin, default:<strong> false</strong></dd>
		<dt>show-faces</dt><dd>specifies whether or not to display profile photos in the plugin, default:<strong><strong> false</strong></strong></dd>
		<dt>stream</dt><dd>specifies whether to display a stream of the latest posts from the Page's wall , default:<strong><strong> false</strong></strong></dd>
		<dt>header</dt><dd>specifies whether to display the Facebook header at the top of the plugin, default:<strong> false</strong></dd>
		<dt>colorscheme</dt><dd>the color scheme for the plugin, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::slideLikeBox( array(
			'href' => 'https://www.facebook.com/facebook',
			'show-faces' => 'true',
			'header' => 'true',
	 	) );
		
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">echo SocialButtons::slideLikeBox( array(
		'href' => 'https://www.facebook.com/facebook'
	 ) );</span></li></ol></pre>
	
	
	 
	 
	 
	 
	 
	 
	 
	 
	<div class="page-header">
    <h2>Recommendations Box</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/recommendations/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Recommendations Box Plugin You can set/change options:
	</p>
		
	<dl class="dl-horizontal">
		<dt>app-id</dt><dd>will display recommendations for all types of actions, custom and global, associated with this app-id, default:<span class="label"><strong> SB_APP_ID</strong></span></dd>
		<dt>width</dt><dd>plugin width, default:<strong> 300</strong></dd>
		<dt>height</dt><dd>plugin height, default:<strong> 300</strong></dd>
		<dt>font</dt><dd>the font to display in the button, default:<span class="label"><strong> SB_FONT</strong></span></dd>
		<dt>header</dt><dd>specifies whether to display the Facebook header at the top of the plugin, default:<strong> false</strong></dd>
		<dt>colorscheme</dt><dd>the color scheme for the plugin, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
		<dt>linktarget</dt><dd>specifies the context in which content links are opened, default:<strong> _top</strong></dd>
		<dt>site</dt><dd>the domain to show recommendations for, default:<strong> false</strong></dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::recommendations( array(
			'app-id' => '113869198637480',
			'width' => '700',
			'height' => '100',
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::recommendations( array(
		'app-id' => '113869198637480',
		'width' => '700',
		'height' => '100',
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::recommendations( array(
			'site' => 'http://codecanyon.net/'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::recommendations( array(
		'site' => 'http://codecanyon.net/'
	 ) );</span></li></ol></pre>
	 
	
	
		
		

	<div class="page-header">
    <h2>Activity Feed</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/activity/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Activity Feed Plugin You can set/change options:
	</p>
		
	<dl class="dl-horizontal">
		<dt>app-id</dt><dd>will display activity for all types of actions, custom and global, associated with this app-id, default:<span class="label"><strong> SB_APP_ID</strong></span></dd>
		<dt>width</dt><dd>plugin width, default:<strong> 300</strong></dd>
		<dt>height</dt><dd>plugin height, default:<strong> 300</strong></dd>
		<dt>font</dt><dd>the font to display in the button, default:<span class="label"><strong> SB_FONT</strong></span></dd>
		<dt>header</dt><dd>specifies whether to display the Facebook header at the top of the plugin, default:<strong> false</strong></dd>
		<dt>colorscheme</dt><dd>the color scheme for the plugin, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
		<dt>recommendations</dt><dd>specifies whether to always show recommendations in the plugin, default:<strong> false</strong></dd>
		<dt>linktarget</dt><dd>specifies the context in which content links are opened, default:<strong> _top</strong></dd>
		<dt>site</dt><dd>the domain to show activity for, default:<strong> false</strong></dd>
    </dl>
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::activity( array(
			'app-id' => '113869198637480',
			'width' => '700',
			'height' => '100',
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::activity( array(
		'app-id' => '113869198637480',
		'width' => '700',
		'height' => '100',
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::activity( array(
			'site' => 'http://codecanyon.net/',
			'width' => '1100',
			'height' => '250'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::activity( array(
		'site' => 'http://codecanyon.net/',
		'width' => '1100',
		'height' => '250'
	 ) );</span></li></ol></pre>
	 
	 
	 

	 <div class="page-header">
    <h2>Send button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/send/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Send buttons You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>href</dt><dd>the URL to send, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>font</dt><dd>the font to display in the button, default:<span class="label"><strong> SB_FONT</strong></span></dd>
		<dt>colorscheme</dt><dd>the color scheme for the send button, default:<span class="label"><strong> SB_SCHEME</strong></span></dd>
    </dl>
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::send( array(
			'href' => 'http://example.com'
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::send( array(
		'href' => 'http://example.com'
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::send( array(
			'href' => 'http://example.com',
			'colorscheme' => 'dark'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::send( array(
		'href' => 'http://example.com',
		'colorscheme' => 'dark'
	 ) );</span></li></ol></pre>
	 
	 
	 
	<div class="page-header">
    <h2>Login Button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.facebook.com/docs/reference/plugins/login/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Login Button You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>show-faces</dt><dd>specifies whether or not to display profile photos in the plugin, default:<strong> false</strong></dd>
		<dt>width</dt><dd>plugin width, default:<strong> 100</strong></dd>
		<dt>max-rows</dt><dd>the maximum number of rows of profile pictures to display, default:<strong> 1</strong></dd>
		<dt>scope</dt><dd>a comma separated list of extended permissions, default:<strong> email</strong></dd>
		<dt>size</dt><dd>different sized buttons: small, medium, large, xlarge, default:<strong> medium</strong></dd>
		<dt>registration-url</dt><dd>registration page url, default:<strong> false</strong></dd>
    </dl>
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::login( array(
			'scope' => 'email,publish_actions'
	 	) );

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::login( array(
		'scope' => 'email,publish_actions'
	 ) );</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::login( array(
			'scope' => 'email,publish_actions',
			'size' => 'xlarge'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::login( array(
		'scope' => 'email,publish_actions',
		'size' => 'xlarge'
	 ) );</span></li></ol></pre>
	 
	 
	<div class="page-header">
    <h2>Google Button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://developers.google.com/+/web/+1button/?hl=en" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Google Button You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>annotation</dt><dd>the annotation to display next to the button: none, bubble, inline. , default:<strong> bubble</strong></dd>
		<dt>href</dt><dd>URL to +1, if false: current page, default:<strong> false</strong></dd>
		<dt>size</dt><dd>different sized buttons: small, medium, standard, tall. default:<strong> standard</strong></dd>
		<dt>width</dt><dd>plugin width, default:<strong> 100</strong></dd>
		<dt>align</dt><dd>the maximum number of rows of profile pictures to display, default:<strong> ''</strong></dd>
		<dt>expandTo</dt><dd>preferred positions to display hover and confirmation bubbles, which are relative to the button: top, right, bottom, left, default:<strong> ''</strong></dd>
    </dl>
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::google();

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::google();</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::google( array(
			'href' => 'http://google.com',
		'size' => 'tall'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::google( array(
		'href' => 'http://google.com',
		'size' => 'tall'
	 ) );</span></li></ol></pre>

	 
	 <div class="page-header">
    <h2>Twitter Button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://dev.twitter.com/docs/tweet-button" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Twitter Button You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>url</dt><dd>URL to tweet, if false: current page, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>text</dt><dd>default Tweet text. default:<strong> Tweet</strong></dd>
		<dt>count</dt><dd>display counter, default:<strong> ''</strong></dd>
		<dt>size</dt><dd>button size, default:<strong> ''</strong></dd>
		<dt>expandTo</dt><dd>preferred positions to display hover and confirmation bubbles, which are relative to the button: top, right, bottom, left, default:<strong> ''</strong></dd>
    </dl>

	<div class="bs-docs-example">
	<?php
		echo SocialButtons::tweet();

	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::tweet();</span></li></ol></pre>
	
	
	<div class="bs-docs-example">
	<?php
		echo SocialButtons::tweet( array(
			'url' => 'http://tweeter.com',
			'count' => 'vertical',
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::tweet( array(
		'url' => 'http://tweeter.com',
		'count' => 'vertical',
	 ) );</span></li></ol></pre>
	 
	 
	 
	 <div class="page-header">
    <h2>Twitter Follow Button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="https://dev.twitter.com/docs/tweet-button" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Twitter Follow Button You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>login</dt><dd>user login on Tweeter, default:<span class="label"><strong> ''</strong></span></dd>
		<dt>lang</dt><dd>button language. default:<strong> SB_LANG_ALL</strong></dd>
		<dt>show-screen-name</dt><dd>display user login on button, default:<strong> 'true'</strong></dd>
		<dt>size</dt><dd>button size, default:<strong> ''</strong></dd>
		<dt>expandTo</dt><dd>preferred positions to display hover and confirmation bubbles, which are relative to the button: top, right, bottom, left, default:<strong> ''</strong></dd>
    </dl>


	<div class="bs-docs-example">
	<?php
		echo SocialButtons::tweeterFollow( array(
			'login' => 'IproSoft_pl'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::tweeterFollow( array(
		'login' => 'IproSoft_pl'
	 ) );</span></li></ol></pre>
	 
	 
	 
	<div class="page-header">
    <h2>Pinterest Button</h2>
    </div>
	<h4>Info: </h4>
	<p>
		<a href="http://business.pinterest.com/widget-builder/" class="btn btn-info btn-mini" target="_blank"><i class="icon-white icon-question-sign"></i> Full documentation</a>
	</p>
	<p>
		Displaying Pinterest Button You can set/change options:
	</p>
	
	<dl class="dl-horizontal">
		<dt>url</dt><dd>url to Pion, default:<span class="label"><strong> SB_URL</strong></span></dd>
		<dt>media</dt><dd>image to Pin, default:<strong> http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg</strong></dd>
		<dt>pin-config</dt><dd>where display pin count ('above', 'beside', 'none'), default:<strong> 'above'</strong></dd>
		<dt>description</dt><dd>default description for url, default:<strong> 'description'</strong></dd>
    </dl>


	<div class="bs-docs-example">
	<?php
		echo SocialButtons::pinIt( array(
			'url' => 'http://google.com'
	 	) );
	?> 
	
     </div>
	<pre class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="atn">	echo</span> <span class="tag">SocialButtons::pinIt( array(
		'url' => 'http://google.com'
	 ) );</span></li></ol></pre>
	 
	 
<?php

?>
	</div>
	 <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
  </body>
</html>