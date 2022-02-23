<?php
	
	/****************************************************************************
	* Author -IPROSOFT                											*
	*																			*
	* Copyright (c) IPROSOFT. All rights reserved.								*
	* Item sold exclusively on CodeCanyon.net									*
	****************************************************************************/
	
	/**
	* Constants used in widgets configuration
	*/
	
	/**
	* Font used in Facebook widgets, can be overwritten by each item settings
	* 'arial', 'lucida grande', 'segoe ui', 'tahoma', 'trebuchet ms', 'verdana'
	*/
	define( 'SB_FONT', 'verdana' );
	
	/**
	* Facebook widgets layout color
	* 'light', 'dark' 
	*/
	define( 'SB_SCHEME', 'light' );
	
	/**
	* Facebook button layout
	* 'standard', 'button_count', 'box_count'
	*/
	define( 'SB_LAYOUT', 'button_count' );
	
	/**
	* Your's Facebook aplication's ID
	*/
	define( 'SB_APP_ID', '113869198637480' );
	
	/**
	* Dafault Facebook Fanpage URL used in widgets
	*/
	define( 'SB_FANPAGE', 'https://www.facebook.com/' );
	
	/**
	* Dafault page URL used in widgets
	*/
	define( 'SB_URL', 'https://www.facebook.com/facebook' );
	
	/**
	* Default language used in Facebook widgets
	* http://msdn.microsoft.com/en-us/library/ee825488%28v=cs.20%29.aspx
	* Change - to _, ex: ru-RU baceme ru_RU 
	*/
	define( 'SB_LANG', 'en_US' );
	
	/**
	* Default language used in all widgets
	*/
	define( 'SB_LANG_ALL', 'en' );
	
	
class SocialButtons{
	
	/*
	* Default Facebook Header settings
	*/
	protected static $header_settings = array(
		'image' => false,
		'title' => 'This is title',
		'description' => 'This is description',
		'admins' => false,
		'app-id' => SB_APP_ID,
		'type' => 'article',
		'site_name' => 'This is site name',
		'url' => SB_URL
	);
	
	/*
	* Default Like Button settings
	*/
	protected static $like_settings = array(
		'send' => 'false',
		'href' => SB_URL,
		'width' => '100',
		'layout' => SB_LAYOUT,
		'show-faces' => 'false',
		
		/* 'like', 'recommend' */
		'action' => 'like',
		
		'font' => SB_FONT,
		'colorscheme' => SB_SCHEME,
	);
	

	/*
	* Default Share Button settings
	*/
	protected static $share_settings = array(
		'type' => SB_LAYOUT,
		'href' => SB_URL,
		'phrase' => 'Share'
	);
	
	/*
	* Default Comments settings
	*/
	protected static $comments_settings = array(
		'href' => SB_URL,
		'width' => '500',
		'num-posts' => 10,
		'colorscheme' => SB_SCHEME,
	);
	
	/*
	* Default LikeBox settings
	*/
	protected static $like_box_settings = array(
		'href' => SB_URL,
		'width' => '100',
		'height' => '100',
		'border' => 'false',
		'show-faces' => 'false',
		'stream' => 'false',
		'header' => 'false',
		'colorscheme' => SB_SCHEME,
	);
	
	/*
	* Default Recommendations settings
	*/
	protected static $recommendations_settings = array(
		'app-id' => SB_APP_ID,
		'width' => '300',
		'height' => '300',
		'font' => SB_FONT,
		'header' => 'false',
		'colorscheme' => SB_SCHEME,
		'linktarget' => '_top',
		'site' => false
	);
	

	/*
	* Default Activity Feed settings
	*/
	protected static $activity_settings = array(
		'app-id' => SB_APP_ID,
		'width' => '300',
		'height' => '300',
		'font' => SB_FONT,
		'header' => 'false',
		'colorscheme' => SB_SCHEME,
		'recommendations' => 'false',
		'linktarget' => '_top',
		'site' => false
	);
	
	/*
	* Default Send Button settings
	*/
	protected static $send_settings = array(
		'href' => SB_URL,
		'colorscheme' => SB_SCHEME,
		'font' => SB_FONT,
	);
	
	/*
	* Default Login Button settings
	*/
	protected static $login_settings = array(
		'show-faces' => 'false',
		'width' => 200,
		'max-rows' => 1,
		'scope' => 'email',
		/* small, medium, large, xlarge */
		'size' => 'medium',
		'registration-url' => false
	);
	
	/*
	* Default Google Plus One settings
	*/
	protected static $google_settings = array(
		/* 'none', 'bubble', 'inline' */
		'annotation' => 'bubble',
		'href' => false,
		
		/* 'small', 'medium', 'standard', 'tall */
		'size' => 'standard',
		'width' => 100,
		
		/* 'left', 'right' */
		'align' => '',
		
		/* 'top', 'right', 'bottom', 'left */
		'expandTo' => '',
	);
	
	/*
	* Default Tweet Button settings
	*/
	protected static $tweeter_settings = array(
		'url' => SB_URL,
		'text' => 'Tweet This link: ',
		'lang' => SB_LANG_ALL,
		/* 'none', 'horizontal', 'vertical' */
		'count' => 'horizontal',
		/* '', 'large' */
		'size' => ''
	);
		
	/*
	* Default Tweet Follow settings
	*/
	protected static $tweeter_follow_settings = array(
		'show-count' => 'false',
		'login' => 'IproSoft_pl',
		'lang' => SB_LANG_ALL,
		'show-screen-name' => 'true',
		/* '', 'large' */
		'size' => '',
		'dnt' => 'true'
	);
	
	public function __construct(){}
	
	/*
	* Facebook header
	* As argument array of Facebook options
	* 
	* Example with full options:
	* 	SocialButtons::generateFacebookHeader( array(
	* 		'image' => 'http://exaple.com/image.jpg',
	* 		'title' => 'This is title',
	* 		'description' => 'This is description',
	* 		'admins' => '123456789',
	* 		'app-id' => SB_APP_ID,
	* 		'type' => 'article',
	* 		'site_name' => 'This is site name',
	* 		'url' => 'http://exaple.com/page.php'
	* 	) );
	*
	* https://developers.facebook.com/docs/technical-guides/opengraph/built-in-objects/
	*/
	public static function generateFacebookHeader( array $options = array() )
	{
		$header = '';
		
		foreach( self::$header_settings as $key => $value )
		{
			if( ( isset( $options[$key] ) && $options[$key] != false ) || $value != false )
			{
				$header .= "\t" . '<meta property="fb:' . $key . '" content="' . ( isset( $options[$key] ) ? $options[$key] : $value ) . '" />' . "\n";
			}
		}
		
		return "\n" . $header;
	}
	
	/*
	* Facebook like button
	* 
	* Example:
	* 	SocialButtons::like( array(
	*		'href' => 'http://example.com',
	*		'width' => '100',
	* 	) );
	*
	* https://developers.facebook.com/docs/reference/plugins/like/
	*/
	public static function like( array $options = array() )
	{
		
		$like = '<div class="fb-like"';
		
		$like .= self::helper( $options, self::$like_settings );
		
		return $like . '></div>';
	}

	/**
	* Facebook Share button
	* Using this button You must include JavaScript file FB.Share.js in Yous's site
	* 
	* Example:
	* 	SocialButtons::share( array(
	*		'href' => 'http://example.com',
	*		'phrase' => 'Share this',
	* 	) );
	* 
	*/
	public static function share( array $options = array() )
	{
		$share = '<a data-name="fb_share"';
		
		$share .= ' data-type="' . ( isset( $options['type'] ) ? $options['type'] : self::$share_settings['type'] ) . '"';
		$share .= ' data-url="' . ( isset( $options['href'] ) ? $options['href'] : self::$share_settings['href'] ) . '"';
		
		$share .= ' href="http://www.facebook.com/sharer.php">';
		
		$share .= ( isset( $options['phrase'] ) ? $options['phrase'] : self::$share_settings['phrase'] );
		
		return $share . '</a>';
		
    }
	
	/**
	* Facebook comment box
	*
	* Example:
	* 	SocialButtons::comments( array(
	*		'href' => 'http://example.com',
	*		'num-posts' => 10,
	*		'width' => '500',
	* 	) );
	* https://developers.facebook.com/docs/reference/plugins/comments
	*/
	public static function comments( array $options = array() )
	{
		$comments = '<div class="fb-comments"';
		
		$comments .= self::helper( $options, self::$comments_settings );
		
		return $comments . '></div>';
	
	}
	
	/**
	* Facebook box Like
	* Displays thumbnails of fanpage fans and like count
	*
	* Example:
	* 	SocialButtons::likeBox( array(
	*		'href' => 'http://facebook.com/FanpageAdress',
	*		'width' => '700',
			'height' => '100',
	* 	) );
	* 
	* https://developers.facebook.com/docs/reference/plugins/like-box/
	*/
	public static function likeBox( array $options = array() )
	{
		$like = '<div class="fb-like-box"';
		
		$like .= self::helper( $options, self::$like_box_settings );
		
		return $like . '></div>';

	}
	
	
	/**
	* Facebook Recommendations Box
	* The Recommendations Box shows personalized recommendations to your users.
	*
	* Example:
	* 	SocialButtons::recommendations( array(
	*		'width' => '700',
	*		'height' => '100',
	* 	) );
	* 
	* https://developers.facebook.com/docs/reference/plugins/recommendations
	*/
	public static function recommendations( array $options = array() )
	{
		$recommend = '<div class="fb-recommendations"';
		
		$recommend .= self::helper( $options, self::$recommendations_settings );
		
		return $recommend . '></div>';
		
	}
	
	/**
	* Facebook Activity Feed
	* The Activity Feed plugin displays the most interesting recent activity taking place on your site.
	*
	* Example:
	* 	SocialButtons::activity( array(
	*		'width' => '700',
	*		'height' => '100',
	* 	) );
	* 
	* https://developers.facebook.com/docs/reference/plugins/activity/
	*/
	public static function activity( array $options = array() )
	{
		$activity = '<div class="fb-activity"';
		
		$activity .= self::helper( $options, self::$activity_settings );
		
		return $activity . '></div>';
		
	}
	
	/**
	* Facebook Send Button
	* Pozwala na wysłanie linku do innego użytkownika Facebook
	*
	* Example:
	* 	SocialButtons::sendButton( array(
	*		'href' => 'http://example.com'
	* 	) );
	*
	* https://developers.facebook.com/docs/reference/plugins/send/
	*/
	public static function send( array $options = array() )
	{
		$send = '<div class="fb-send"';
		
		$send .= self::helper( $options, self::$send_settings );
		
		return $send . '></div>';
		
    }

	/**
	* Facebook Login Button
	*
	* Example:
	* 	SocialButtons::login( array(
	*		'scope' => 'email,publish_actions',
	* 	) );
	*
	* https://developers.facebook.com/docs/reference/login/
	*/
	public static function login( array $options = array() )
	{
		$login = '<div class="fb-login-button"';
		
		$login .= self::helper( $options, self::$login_settings );

		return $login . '></div>';
		
    }

	/**
	* Button Google Plus One
	*
	* Example:
	* 	SocialButtons::google( array(
	*		'href' => 'http://example.com',
	*		'size' => 'medium',
	* 	) );
	* 
	* https://developers.google.com/+/web/+1button/
	*/
	public static function google( array $options = array() )
	{

		$plusone = '<div class="g-plusone"';
		
		$plusone .= self::helper( $options, self::$google_settings );

		return $plusone . '></div>';

    }
	

	/**
	* Button Tweeter
	*
	* Example:
	* 	SocialButtons::tweet( array(
	*		'url' => 'http://example.com',
	*		'count' => 'none',
	* 	) );
	* 
	* https://tweeter.com/about/resources/buttons#tweet
	*/
	public static function tweet( array $options = array() )
	{

		$tweeter = '<a href="https://twitter.com/share" class="twitter-share-button"';
		
		$tweeter .= self::helper( $options, self::$tweeter_settings );
		
		return $tweeter . '></a>';

    }

	
	/* Button Tweeter
	*
	* Example:
	* 	SocialButtons::tweeterFollow( array(
	*		'login' => 'IproSoft_pl'
	* 	) );
	* 
	* https://tweeter.com/about/resources/buttons#follow
	*/
	public static function tweeterFollow( array $options = array() )
	{
		$tweeter = '<a href="https://twitter.com/' . ( isset( $options['login'] ) ? $options['login'] : self::$tweeter_follow_settings['login'] ) . '" class="twitter-follow-button"';
		
		$tweeter .= self::helper( $options, self::$tweeter_follow_settings );
		
		return $tweeter . '></a>';

    }
	
	
	/*
	* Default Pinterest Button settings
	*/
	protected static $pin_settings = array(
		'url' => SB_URL,
		'media' => 'http://farm8.staticflickr.com/7027/6851755809_df5b2051c9_z.jpg',
		'pin-do' => 'buttonPin',
		/* 'above', 'beside', 'none' */
		'pin-config' => 'above',
		'description' => 'description'
	);
	
	
	/* Pinterest Button
	*
	* Example:
	* 	SocialButtons::pinIt( array(
	*		'url' => 'http://google.com'
	* 	) );
	* 
	* http://business.pinterest.com/widget-builder/
	*/
	public static function pinIt( array $options = array() )
	{
		
		$pin = '<a href="//pinterest.com/pin/create/button/?';
		$pin .= 'url=' . ( isset( $options['url'] ) ? $options['url'] : self::$pin_settings['url'] );
		$pin .= '&media=' . ( isset( $options['media'] ) ? $options['media'] : self::$pin_settings['media'] );
		$pin .= '&description=' . ( isset( $options['description'] ) ? $options['description'] : self::$pin_settings['description'] ) . '"';
		
		
		$pin .= self::helper( $options, self::$pin_settings );
		
		return $pin . '><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>';

    }
	
	
	
	/* Sliding Like Box
	*
	* Example:
	* 	SocialButtons::slideLikeBox( array(
	*		'href' => 'http://facebook.com/FanpageAdress'
	* 	) );
	* 
	*/
	public static function slideLikeBox( array $options = array() )
	{
		
		$like = '<div id="slide-fb-like-box">';
		
		$options['width'] = 244;
		$options['height'] = 290;
		
		$like .= self::likeBox( $options );
		
		return $like . '</div>
		<script type="text/javascript">
		window.onload = function() {
			$("#slide-fb-like-box").hover(
				function() {
					$(this).stop(true,false).animate({right: -24}, "slow");
				},
				function() {
					$("#slide-fb-like-box").stop(true,false).animate({right: -308}, "slow");
				}
			);
		};
		</script>
		<style>
		#slide-fb-like-box {
			background: url("../assets/button_facebook.png") no-repeat scroll 0 0 transparent;
			cursor: pointer;
			display: block;
			height: 335px;
			padding-left: 58px;
			padding-top: 6px;
			position: fixed;
			right: -308px;
			text-align: center;
			top: 125px;
			width: 300px;
			z-index: 9999;
		}
		</style>
		';

	}
	
	
	/**
	* Facebook standard JavaScript Code to make buttons work properly
	* If You will use old share button pass argument as true
	*/
	public static function scriptFacebook( $old )
	{
		return '
			<div id="root"></div>
			<script src="http://connect.facebook.net/' . SB_LANG . '/all.js#xfbml=1"></script>
			<script type="text/javascript">
			FB.init({
			  ' . ( SB_APP_ID  ? 'appId  : ' . SB_APP_ID . ',' : '' ) . '
			  status : true, // check login status
			  cookie : true, // enable cookies to allow the server to access the session
			  xfbml  : true, // parse XFBML
			  oauth  : true // enable OAuth 2.0
			});
			</script>
			' . ( $old ? '
			<script src="assets/FB.Share.js" type="text/javascript"></script>
			<link href="assets/FB.Share.css" rel="stylesheet" type="text/css" />
			' : '' );
	}
	
	/**
	* Google standard JavaScript Code to make buttons work properly
	*/
	public static function scriptGoogle()
	{
		return '	
			<script type="text/javascript" src="https://apis.google.com/js/platform.js">
			  {lang: "' . SB_LANG_ALL . '"}
			</script>
		';
		return '	
			<script type="text/javascript">
				window.onload = function() {
					var g = document.createElement(\'script\'),
					s = document.getElementsByTagName(\'script\')[0];
					g.async = true;
					g.innerText = \'{lang: "' . SB_LANG_ALL . '"}\'; 
					g.src = \'https://apis.google.com/js/plusone.js\';
					s.parentNode.insertBefore(g, s);
				};
			</script>
		';
		
    }
	
	/**
	* Tweeter standard JavaScript Code to make buttons work properly
	*/
	public static function scriptTweet()
	{
		
		return "
		<script type=\"text/javascript\">
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
		</script>
		";
		
    }
	
	/**
	* Pinterest standard JavaScript Code to make buttons work properly
	*/
	public static function scriptPinterest()
	{
		
		return "<script type=\"text/javascript\">
				(function(d){
				  var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
				  p.type = 'text/javascript';
				  p.async = true;
				  p.src = '//assets.pinterest.com/js/pinit.js';
				  f.parentNode.insertBefore(p, f);
				}(document));
				</script>";
		
    }
	
	
	/**
	* Helper function
	*/
	private static function helper( array &$options,  array &$default_options  )
	{
		$data = '';
		
		foreach( $default_options as $key => $value )
		{
			if( ( isset( $options[$key] ) && $options[$key] != false ) || $value != false )
			{
				$data .= ' data-' . $key . '="' . ( isset( $options[$key] ) ? $options[$key] : $value ) . '"';
			}
		}
		
		return $data;
	}
}
?>