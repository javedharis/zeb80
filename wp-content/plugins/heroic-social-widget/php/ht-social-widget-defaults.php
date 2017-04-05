<?php

if(!class_exists('HT_Social_Widget_Defaults')){
	class HT_Social_Widget_Defaults {

		/**
		* Get the social media default items
		* You can add an icon - just copy one of the existing blocks, rename the provider_id and name it, set the color and that is it
		*/
		public static function get_social_media_defaults(){
			$defaults = array( 

							array( 'provider_id' => 'fa-adn',
								'enabled' => false,
								'name' => __('ADN', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-android',
								'enabled' => false,
								'name' => __('Android', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#A4C639',
								'url' => '',
							),

							array( 'provider_id' => 'fa-apple',
								'enabled' => false,
								'name' => __('Apple', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#e4e4e5',
								'url' => '',
							),

							array( 'provider_id' => 'fa-behance',
								'enabled' => false,
								'name' => __('behance', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1769ff',
								'url' => '',
							),

							array( 'provider_id' => 'fa-behance-square',
								'enabled' => false,
								'name' => __('behance square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1769ff',
								'url' => '',
							),

							array( 'provider_id' => 'fa-bitbucket',
								'enabled' => false,
								'name' => __('Bitbucket', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#205081',
								'url' => '',
							),

							array( 'provider_id' => 'fa-bitbucket-square',
								'enabled' => false,
								'name' => __('Bitbucket square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#205081',
								'url' => '',
							),

							array( 'provider_id' => 'fa-buysellads',
								'enabled' => false,
								'name' => __('BuySellAds', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#c90100',
								'url' => '',
							),

							array( 'provider_id' => 'fa-btc',
								'enabled' => false,
								'name' => __('Bitcoin', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-codepen',
								'enabled' => false,
								'name' => __('CodePen', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-css3',
								'enabled' => false,
								'name' => __('CSS3', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-dashcube',
								'enabled' => false,
								'name' => __('dashcube', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#6e6e6e',
								'url' => '',
							),

							array( 'provider_id' => 'fa-delicious',
								'enabled' => false,
								'name' => __('Delicious', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#3399ff',
								'url' => '',
							),

							array( 'provider_id' => 'fa-deviantart',
								'enabled' => false,
								'name' => __('Deviantart', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#4e6252',
								'url' => '',
							),

							array( 'provider_id' => 'fa-digg',
								'enabled' => false,
								'name' => __('Digg', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-dribbble',
								'enabled' => false,
								'name' => __('Dribble', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#444444',
								'url' => '',
							),

							array( 'provider_id' => 'fa-dropbox',
								'enabled' => false,
								'name' => __('Dropbox', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#007ee5',
								'url' => '',
							),

							array( 'provider_id' => 'fa-drupal',
								'enabled' => false,
								'name' => __('Drupal', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#0077c0',
								'url' => '',
							),

							array( 'provider_id' => 'fa-empire',
								'enabled' => false,
								'name' => __('Empire', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-facebook',
								'enabled' => false,
								'name' => __('Facebook', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#3b5998',
								'url' => '',
							),

							array( 'provider_id' => 'fa-facebook-square',
								'enabled' => false,
								'name' => __('Facebook square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#3b5998',
								'url' => '',
							),

							array( 'provider_id' => 'fa-flickr',
								'enabled' => false,
								'name' => __('Flickr', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#0063dc',
								'url' => '',
							),

							array( 'provider_id' => 'fa-forumbee',
								'enabled' => false,
								'name' => __('forumbee', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#83ad13',
								'url' => '',
							),

							array( 'provider_id' => 'fa-foursquare',
								'enabled' => false,
								'name' => __('FourSquare', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#0072b1',
								'url' => '',
							),

							array( 'provider_id' => 'fa-git',
								'enabled' => false,
								'name' => __('git', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-git-square',
								'enabled' => false,
								'name' => __('git square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-github',
								'enabled' => false,
								'name' => __('github', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#4183c4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-github-alt',
								'enabled' => false,
								'name' => __('github alt', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#4183c4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-github-square',
								'enabled' => false,
								'name' => __('github square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#4183c4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-gittip',
								'enabled' => false,
								'name' => __('git tip', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-google',
								'enabled' => false,
								'name' => __('Google', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#dd4b39',
								'url' => '',
							),

							array( 'provider_id' => 'fa-google-plus',
								'enabled' => false,
								'name' => __('Google Plus', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#dd4b39',
								'url' => '',
							),

							array( 'provider_id' => 'fa-google-plus-square',
								'enabled' => false,
								'name' => __('Google Plus square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#dd4b39',
								'url' => '',
							),

							array( 'provider_id' => 'fa-hacker-news',
								'enabled' => false,
								'name' => __('Hacker News', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#ff6600',
								'url' => '',
							),

							array( 'provider_id' => 'fa-html5',
								'enabled' => false,
								'name' => __('HTML5', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#e34f26',
								'url' => '',
							),

							array( 'provider_id' => 'fa-instagram',
								'enabled' => false,
								'name' => __('Instagram', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#3f729b',
								'url' => '',
							),

							array( 'provider_id' => 'fa-joomla',
								'enabled' => false,
								'name' => __('Joomla', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-jsfiddle',
								'enabled' => false,
								'name' => __('JS Fiddle', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-linkedin',
								'enabled' => false,
								'name' => __('LinkedIn', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#0976b4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-linkedin-square',
								'enabled' => false,
								'name' => __('LinkedIn square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#0976b4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-linux',
								'enabled' => false,
								'name' => __('Linux', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#333333',
								'url' => '',
							),

							array( 'provider_id' => 'fa-maxcdn',
								'enabled' => false,
								'name' => __('MaxCDN', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#f8711e',
								'url' => '',
							),

							array( 'provider_id' => 'fa-medium',
								'enabled' => false,
								'name' => __('Medium', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-openid',
								'enabled' => false,
								'name' => __('OpenID', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-pagelines',
								'enabled' => false,
								'name' => __('Page Lines', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-pied-piper',
								'enabled' => false,
								'name' => __('Pied Piper', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-pied-piper-alt',
								'enabled' => false,
								'name' => __('Pied Piper alt', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-pinterest',
								'enabled' => false,
								'name' => __('Pinterest', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1769ff',
								'url' => '',
							),

							array( 'provider_id' => 'fa-pinterest-square',
								'enabled' => false,
								'name' => __('Pinterest square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1769ff',
								'url' => '',
							),

							array( 'provider_id' => 'fa-qq',
								'enabled' => false,
								'name' => __('QQ', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),


							array( 'provider_id' => 'fa-rebel',
								'enabled' => false,
								'name' => __('Rebel', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#517fa4',
								'url' => '',
							),

							array( 'provider_id' => 'fa-reddit',
								'enabled' => false,
								'name' => __('Reddit', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#ff4500',
								'url' => '',
							),

							array( 'provider_id' => 'fa-reddit-square',
								'enabled' => false,
								'name' => __('Reddit square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#ff4500',
								'url' => '',
							),

							array( 'provider_id' => 'fa-renren',
								'enabled' => false,
								'name' => __('Ren Ren', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#007bb6',
								'url' => '',
							),

							array( 'provider_id' => 'fa-sellsy',
								'enabled' => false,
								'name' => __('Sellsy', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1f78b9',
								'url' => '',
							),

							array( 'provider_id' => 'fa-share-alt',
								'enabled' => false,
								'name' => __('Share alt', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-share-alt-square',
								'enabled' => false,
								'name' => __('Share square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-skype',
								'enabled' => false,
								'name' => __('Skype', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#00aff0',
								'url' => '',
							),

							array( 'provider_id' => 'fa-slack',
								'enabled' => false,
								'name' => __('Slack', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-soundcloud',
								'enabled' => false,
								'name' => __('Sound Cloud', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#f80',
								'url' => '',
							),

							array( 'provider_id' => 'fa-spotify',
								'enabled' => false,
								'name' => __('Spotify', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#7ab800',
								'url' => '',
							),

							array( 'provider_id' => 'fa-stack-exchange',
								'enabled' => false,
								'name' => __('Stack Exchange', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-stack-overflow',
								'enabled' => false,
								'name' => __('Stack Overflow', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#fe7a15',
								'url' => '',
							),

							array( 'provider_id' => 'fa-steam',
								'enabled' => false,
								'name' => __('Steam', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-steam-square',
								'enabled' => false,
								'name' => __('Steam square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-stumbleupon',
								'enabled' => false,
								'name' => __('Stumble Upon', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#eb4924',
								'url' => '',
							),

							array( 'provider_id' => 'fa-stumbleupon-circle',
								'enabled' => false,
								'name' => __('Stumble Upon circle', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#eb4924',
								'url' => '',
							),

							array( 'provider_id' => 'fa-tencent-weibo',
								'enabled' => false,
								'name' => __('Tencent Weibo', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-trello',
								'enabled' => false,
								'name' => __('Trello', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#256a92',
								'url' => '',
							),

							array( 'provider_id' => 'fa-tumblr',
								'enabled' => false,
								'name' => __('Tumblr', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#35465c',
								'url' => '',
							),

							array( 'provider_id' => 'fa-tumblr-square',
								'enabled' => false,
								'name' => __('Tumblr square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#35465c',
								'url' => '',
							),

							array( 'provider_id' => 'fa-twitch',
								'enabled' => false,
								'name' => __('Twitch', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#6441a5',
								'url' => '',
							),

							array( 'provider_id' => 'fa-twitter',
								'enabled' => false,
								'name' => __('Twitter', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#55acee',
								'url' => '',
							),

							array( 'provider_id' => 'fa-twitter-square',
								'enabled' => false,
								'name' => __('Twitter square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#55acee',
								'url' => '',
							),

							array( 'provider_id' => 'fa-vimeo-square',
								'enabled' => false,
								'name' => __('Vimeo square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#1ab7ea',
								'url' => '',
							),

							array( 'provider_id' => 'fa-vine',
								'enabled' => false,
								'name' => __('Vine', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#00b488',
								'url' => '',
							),

							array( 'provider_id' => 'fa-vk',
								'enabled' => false,
								'name' => __('VK', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-weibo',
								'enabled' => false,
								'name' => __('Weibo', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-weixin',
								'enabled' => false,
								'name' => __('Weixin', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#000000',
								'url' => '',
							),

							array( 'provider_id' => 'fa-whatsapp',
								'enabled' => false,
								'name' => __('WhatsApp', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#60b82d',
								'url' => '',
							),

							array( 'provider_id' => 'fa-windows',
								'enabled' => false,
								'name' => __('Windows', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#00bcf2',
								'url' => '',
							),

							array( 'provider_id' => 'fa-wordpress',
								'enabled' => false,
								'name' => __('WordPress', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#21759b',
								'url' => '',
							),

							array( 'provider_id' => 'fa-xing',
								'enabled' => false,
								'name' => __('Xing', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#026466',
								'url' => '',
							),

							array( 'provider_id' => 'fa-xing-square',
								'enabled' => false,
								'name' => __('Xing square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#026466',
								'url' => '',
							),

							array( 'provider_id' => 'fa-yahoo',
								'enabled' => false,
								'name' => __('Yahoo', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#400191',
								'url' => '',
							),

							array( 'provider_id' => 'fa-youtube',
								'enabled' => false,
								'name' => __('YouTube', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#e52d27',
								'url' => '',
							),

							array( 'provider_id' => 'fa-youtube-play',
								'enabled' => false,
								'name' => __('YouTube play', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#e52d27',
								'url' => '',
							),

							array( 'provider_id' => 'fa-youtube-square',
								'enabled' => false,
								'name' => __('YouTube square', 'ht-social-widget'),
								'style' => '',
								'background' => '',
								'color' => '#e52d27',
								'url' => '',
							),
	

			);

			return $defaults;

		}
	} //end class
} //end class test


