<?php

include_once('./php/session.php');
include_once('./php/loginClass.php');
include_once('./php/post.php');

 ?>

<!DOCTYPE html>
<html>
<head>

  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Stories | Twinzel</title>

    <script src="js/webfontloader.min.js"></script>
    <script>
      WebFont.load({
        google: {
          families: ['Roboto:300,400,500,700:latin']
        }
      });
    </script>

    <!-- Bootstrap CSS -->
  	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-reboot.css">
  	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="Bootstrap/dist/css/bootstrap-grid.css">

  	<!-- Theme Styles CSS -->
  	<link rel="stylesheet" type="text/css" href="css/theme-styles.css">
  	<link rel="stylesheet" type="text/css" href="css/blocks.css">
  	<link rel="stylesheet" type="text/css" href="css/fonts.css">

  	<!-- Styles for plugins -->
  	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
  	<link rel="stylesheet" type="text/css" href="css/mediaelement-playlist-plugin.min.css">
  	<link rel="stylesheet" type="text/css" href="css/mediaelementplayer.css">
    <link rel="stylesheet" type="text/css" href="css/simplecalendar.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">


  	<!-- Lightbox popup script-->
  	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

</head>

<body>

  <!-- Fixed Sidebar Left -->
  <div class="fixed-sidebar">
    <div class="fixed-sidebar-left sidebar--small" id="sidebar-left">
      <a href="#" class="logo">
        <img src="img/logoO.png" alt="Twinzel">
      </a>

      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="left-menu">
          <li>
            <a href="#" class="js-sidebar-open">
              <svg class="twinz-menu-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="OPEN MENU"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="stories.php">
              <svg class="twinz-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="icons/icons.svg#twinz-newsfeed-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="friends.php">
              <svg class="twinz-happy-faces-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FRIENDS"><use xlink:href="icons/icons.svg#twinz-happy-faces-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="interests.php">
              <svg class="twinz-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAVORITES"><use xlink:href="icons/icons.svg#twinz-star-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="musicPlayer.php">
              <svg class="twinz-headphones-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MUSIC PLAYER"><use xlink:href="icons/icons.svg#twinz-headphones-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="events.php">
              <svg class="twinz-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data original-title="EVENTS"><use xlink:href="icons/icons.svg#twinz-calendar-icon"></use></svg>
            </a>
          </li>
          <li>
            <a href="rewards.php">
              <svg class="twinz-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="REWARDS"><use xlink:href="icons/icons.svg#twinz-badge-icon"></use></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1">
      <a href="stories.php" class="logo">
        <img src="img/logo-landing.png" alt="Twinzel">
      </a>

      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="left-menu">
          <li>
            <a href="stories.php">
              <svg class="twinz-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="icons/icons.svg#twinz-newsfeed-icon"></use></svg>
              <span class="left-menu-title">Stories</span>
            </a>
          </li>
          <li>
            <a href="friends.php">
              <svg class="twinz-happy-faces-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FRIENDS"><use xlink:href="icons/icons.svg#twinz-happy-faces-icon"></use></svg>
              <span class="left-menu-title">Friends</span>
            </a>
          </li>
          <li>
            <a href="interests.php">
              <svg class="twinz-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAVORITES"><use xlink:href="icons/icons.svg#twinz-star-icon"></use></svg>
              <span class="left-menu-title">Interests</span>
            </a>
          </li>
          <li>
            <a href="musicPlayer.php">
              <svg class="twinz-headphones-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MUSIC PLAYER"><use xlink:href="icons/icons.svg#twinz-headphones-icon"></use></svg>
              <span class="left-menu-title">Music Player</span>
            </a>
          </li>
          <li>
            <a href="events.php">
              <svg class="twinz-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="EVENTS"><use xlink:href="icons/icons.svg#twinz-calendar-icon"></use></svg>
              <span class="left-menu-title">Events</span>
            </a>
          </li>
          <li>
            <a href="rewards.php">
              <svg class="twinz-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="REWARDS"><use xlink:href="icons/icons.svg#twinz-badge-icon"></use></svg>
              <span class="left-menu-title">Rewards</span>
            </a>
          </li>
        </ul>
        <div class="profile-completion">
          <div class="skills-item">
            <div class="skills-item-info">
              <span class="skills-item-title">Profile Status</span>
              <span class="skills-item-count"><span class="count-animate" data-speed="1000" data-refresh-interval="50" data-to="0" data-from="0"></span><span class="units">0%</span></span>
            </div>
            <div class="skills-item-meter">
              <span class="skills-item-meter-active bg-primary" style="width: 0%"></span>
            </div>
          </div>
          <span>Complete <a href="profileEdit.php">your profile</a> to get rewards!</span>
        </div>
      </div>
    </div>
  </div>

<!-- ... end Fixed Sidebar Left -->

<!-- Fixed Sidebar Left Responsive -->

<div class="fixed-sidebar fixed-sidebar-responsive">
  <div class="fixed-sidebar-left sidebar--small" id="sidebar-left-responsive">
    <a href="stories.php" class="logo js-sidebar-open">
      <img src="img/logo.png" alt="Twinzel">
    </a>
  </div>
  <div class="fixed-sidebar-left sidebar--large" id="sidebar-left-1-responsive">
    <a href="stories.php" class="logo">
      <img src="img/logo-landing.png" alt="Twinzel">
    </a>
    <div class="mCustomScrollbar" data-mcs-theme="dark">
      <div class="control-block">
        <div class="author-page author vcard inline-items">
          <div class="author-thumb">
            <a href="profile.php">
              <img src="img/author-page.jpg" alt="author" class="avatar">
              <!-- <span class="icon-status online"></span> -->
            </a>
          </div>
          <a href="profile.php" class="author-name fn">
            <div class="author-title">
              <?php
                $user_first = DB::query('SELECT user_first FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_first'];
                echo $user_first;
               ?>
              <svg class="twinz-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#twinz-dropdown-arrow-icon"></use></svg>
            </div>
            <span class="author-subtitle">
              <?php
                $user_title = DB::query('SELECT user_title FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_title'];
                echo $user_title;
               ?>
            </span>
          </a>
        </div>
      </div>
      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">MAIN SECTIONS</h6>
      </div>
      <ul class="left-menu">
        <li>
          <a href="stories.php">
            <svg class="twinz-newsfeed-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="NEWSFEED"><use xlink:href="icons/icons.svg#twinz-newsfeed-icon"></use></svg>
            <span class="left-menu-title">Stories</span>
          </a>
        </li>
        <li>
          <a href="friends.php">
            <svg class="twinz-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FAVORITES"><use xlink:href="icons/icons.svg#twinz-star-icon"></use></svg>
            <span class="left-menu-title">Friends</span>
          </a>
        </li>
        <li>
          <a href="interests.php">
            <svg class="twinz-happy-faces-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="FRIENDS"><use xlink:href="icons/icons.svg#twinz-happy-faces-icon"></use></svg>
            <span class="left-menu-title">Interests</span>
          </a>
        </li>
        <li>
          <a href="musicPlayer.php">
            <svg class="twinz-headphones-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="MUSIC PLAYER"><use xlink:href="icons/icons.svg#twinz-headphones-icon"></use></svg>
            <span class="left-menu-title">Music Player</span>
          </a>
        </li>
        <li>
          <a href="events.php">
            <svg class="twinz-calendar-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="EVENTS"><use xlink:href="icons/icons.svg#twinz-calendar-icon"></use></svg>
            <span class="left-menu-title">Events</span>
          </a>
        </li>
        <li>
          <a href="rewards.php">
            <svg class="twinz-badge-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="REWARDS"><use xlink:href="icons/icons.svg#twinz-badge-icon"></use></svg>
            <span class="left-menu-title">Rewards</span>
          </a>
        </li>
      </ul>
      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">YOUR ACCOUNT</h6>
      </div>
      <ul class="account-settings">
        <li>
          <a href="createFavorites.php">
            <svg class="twinz-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="CREATE FAVORITE"><use xlink:href="icons/icons.svg#twinz-star-icon"></use></svg>
            <span>Create a Page</span>
          </a>
        </li>
        <li>
          <a href="settings.php">
            <svg class="twinz-menu-icon"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
            <span>Profile Settings</span>
          </a>
        </li>
        <li>
          <a href="php/logout.php" name="logoutMobile">
            <svg class="twinz-logout-icon"><use xlink:href="icons/icons.svg#twinz-logout-icon"></use></svg>
            <span>Log Out</span>
          </a>
        </li>
      </ul>

      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">About Twinzel</h6>
      </div>

      <ul class="about-twinzel">
        <li>
          <a href="tos.php">
            <span>Terms of Service</span>
          </a>
        </li>
        <li>
          <a href="privacy.php">
            <span>Privacy Policy</span>
          </a>
        </li>
        <li>
          <a href="faqs.php">
            <span>FAQs</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- ... end Fixed Sidebar Left Responsive -->

<!-- Header -->

<header class="header" id="site-header">
  <div class="page-title">
    <h6>Stories</h6>
  </div>
  <div class="header-content-wrapper">
    <form class="search-bar w-search notification-list friends-requests" onsubmit="stripBadAss(search_bar)" method="get">
      <div class="form-group with-button">
        <input class="form-control js-user-search" placeholder="Search Twinzel..." type="text" name="search_bar">
        <button>
          <svg class="twinz-magnifying-glass-icon"><use xlink:href="icons/icons.svg#twinz-magnifying-glass-icon"></use></svg>
        </button>
      </div>
    </form>
    <a href="findFriends.php" class="link-find-friend">Find Friends</a>
    <div class="control-block">
      <div class="control-icon has-items">
        <svg class="twinz-happy-faces-icon js-notification-open"><use xlink:href="icons/icons.svg#twinz-happy-faces-icon"></use></svg>
        <!-- <div class="label-avatar bg-blue">18</div> -->

        <div class="more-dropdown more-width-triangle triangle-top-center">
          <a href="requests.php" class="view-all bg-blue"> View All Requests</a>
        </div>
      </div>
      <div class="control-icon has-items">
        <svg class="twinz-chat---messages-icon js-notification-open"><use xlink:href="icons/icons.svg#twinz-chat---messages-icon"></use></svg>
        <!-- <div class="label-avatar bg-purple">8</div> -->

        <div class="more-dropdown more-with-triangle triangle-top-center">
          <a href="messages.php" class="view-all bg-purple">View All Messages</a>
        </div>
      </div>
      <div class="control-icon has-items">
        <svg class="twinz-thunder-icon js-notification-open"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
        <!-- <div class="label-avatar bg-primary">28</div> -->

        <div class="more-dropdown more-with-triangle triangle-top-center">
          <a href="notifications.php" class="view-all bg-primary">View All Notifications</a>
        </div>
      </div>
      <div class="author-page author vcard inline-items more">
        <div class="author-thumb">
          <img src="img/author-page.jpg" alt="author" class="avatar">
          <span class="icon-status-online"></span>
          <div class="more-dropdown more-with-triangle">
            <div class="mCustomScrollbar" data-mcs-theme="dark">
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Custom Status</h6>
              </div>
              <form class="form-group with-button custom-status" method="post" action="php/title.php" onsubmit="stripBadAss(customTitle)">
                <input class="form-control" placeholder="New Twinzler" type="text" name="customTitle" maxlength="25">
                <button class="bg-primary" name="title" type="submit">
                  <svg class="twinz-check-icon"><use xlink:href="icons/icons.svg#twinz-check-icon"></use></svg>
                </button>
              </form>
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Chat Settings</h6>
              </div>
              <ul class="chat-settings">
                <li>
                  <a href="#">
                    <span class="icon-status online"></span>
                    <span>Online</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-status away"></span>
                    <span>Away</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-status disconected"></span>
                    <span>Disconnected</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="icon-status status-invisible"></span>
                    <span>Invisible</span>
                  </a>
                </li>
              </ul>
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">About Twinzel</h6>
              </div>
              <ul>
                <li>
                  <a href="tos.php">
                    <span>Terms of Service</span>
                  </a>
                </li>
                <li>
                  <a href="faqs.php">
                    <span>FAQs</span>
                  </a>
                </li>
              </ul>
              <div class="ui-block-title ui-block-title-small">
                <h6 class="title">Your Account</h6>
              </div>
              <ul class="account-settings">
                <li>
                  <a href="settings.php">
                    <svg class="twinz-menu-icon"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
                    <span>Profile Settings</span>
                  </a>
                </li>
                <li>
                  <a href="php/logout.php">
                    <svg class="twinz-logout-icon"><use xlink:href="icons/icons.svg#twinz-logout-icon"></use></svg>
                    <span>Log Out</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="profile.php" class="author-name fn">
          <div class="author-title" name="user-name">
            <?php
              $user_first = DB::query('SELECT user_first FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_first'];
              echo $user_first;
             ?>
            <svg class="twinz-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#twinz-dropdown-arrow-icon"></use></svg>
          </div>
          <span class="author-subtitle" name="user-title">
            <?php
              $user_title = DB::query('SELECT user_title FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_title'];
              echo $user_title;
             ?>
          </span>
        </a>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- ...end Header -->

<!-- Responsive Header -->

<header class="header header-responsive" id="site-header-responsive">
	<div class="header-content-wrapper">
		<ul class="nav nav-tabs mobile-app-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#request" role="tab">
					<div class="control-icon has-items">
						<svg class="twinz-happy-face-icon"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
						<!-- <div class="label-avatar bg-blue"></div> -->
					</div>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#chat" role="tab">
					<div class="control-icon has-items">
						<svg class="twinz-chat---messages-icon"><use xlink:href="icons/icons.svg#twinz-chat---messages-icon"></use></svg>
						<!-- <div class="label-avatar bg-purple"></div> -->
					</div>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#notification" role="tab">
					<div class="control-icon has-items">
						<svg class="twinz-thunder-icon"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
						<!-- <div class="label-avatar bg-primary">Put the number of notifications here</div> -->
					</div>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="tab" href="#search" role="tab">
					<svg class="twinz-magnifying-glass-icon"><use xlink:href="icons/icons.svg#twinz-magnifying-glass-icon"></use></svg>
					<svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
				</a>
			</li>
		</ul>
	</div>
	<!-- Tab panes -->
	<div class="tab-content tab-content-responsive">
		<div class="tab-pane " id="request" role="tabpanel">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">FRIEND REQUESTS</h6>
					<!-- <a href="#">Find Friends</a>
					<a href="#">Settings</a> -->
				</div>
				<ul class="notification-list friend-requests">
					<!-- <li>
						<div class="author-thumb">
							<img src="img/avatar58-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">Stagg Clothing</a>
							<span class="chat-message-item">9 Friends in Common</span>
						</div>
									<span class="notification-icon">
										<a href="#" class="accept-request">
											<span class="icon-add without-text">
												<svg class="twinz-happy-face-icon"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
											</span>
										</a>

										<a href="#" class="accept-request request-del">
											<span class="icon-minus">
												<svg class="twinz-happy-face-icon"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
											</span>
										</a>
									</span>
						<div class="more">
							<svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg>
						</div>
					</li> -->
				</ul>
				<a href="#" class="view-all bg-blue">Check all your Events</a>
			</div>
		</div>
		<div class="tab-pane " id="chat" role="tabpanel">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Chat / Messages</h6>
					<!-- <a href="#">Mark all as read</a>
					<a href="#">Settings</a> -->
				</div>
				<ul class="notification-list chat-message">
					<!-- <li class="chat-group">
						<div class="author-thumb">
							<img src="img/avatar11-sm.jpg" alt="author">
							<img src="img/avatar12-sm.jpg" alt="author">
							<img src="img/avatar13-sm.jpg" alt="author">
							<img src="img/avatar10-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<a href="#" class="h6 notification-friend">You, Faye, Ed &amp; Jet +3</a>
							<span class="last-message-author">Ed:</span>
							<span class="chat-message-item">Yeah! Seems fine by me!</span>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 16th at 10:23am</time></span>
						</div>
										<span class="notification-icon">
											<svg class="twinz-chat---messages-icon"><use xlink:href="icons/icons.svg#twinz-chat---messages-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg>
						</div>
					</li> -->
				</ul>
				<a href="#" class="view-all bg-purple">View All Messages</a>
			</div>
		</div>
		<div class="tab-pane " id="notification" role="tabpanel">
			<div class="mCustomScrollbar" data-mcs-theme="dark">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<!-- <a href="#">Mark all as read</a>
					<a href="#">Settings</a> -->
				</div>
				<ul class="notification-list">
					<!-- <li>
						<div class="author-thumb">
							<img src="img/avatar66-sm.jpg" alt="author">
						</div>
						<div class="notification-event">
							<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
							<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
						</div>
										<span class="notification-icon">
											<svg class="twinz-heart-icon"><use xlink:href="icons/icons.svg#twinz-heart-icon"></use></svg>
										</span>
						<div class="more">
							<svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg>
							<svg class="twinz-little-delete"><use xlink:href="icons/icons.svg#twinz-little-delete"></use></svg>
						</div>
					</li> -->
				</ul>
				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>
		</div>
		<div class="tab-pane " id="search" role="tabpanel">
				<form class="search-bar w-search notification-list friend-requests" onsubmit="stripBadAss(search_mobile)">
					<div class="form-group with-button">
						<input class="form-control js-user-search" placeholder="Search Twinzel..." type="text" name="search_mobile">
					</div>
				</form>
		</div>
	</div>
	<!-- ... end  Tab panes -->
</header>

<!-- ... end Responsive Header -->

<div class="header-spacer"></div>

<!-- END OF TEMPLATE HEADER -->

<!-- Status/Multimedia/Blog Container -->

<div class="container">
  <div class="row">

    <main class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="news-feed-form">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">
                <svg class="twinz-status-icon"><use xlink:href="icons/icons.svg#twinz-status-icon"></use></svg>
                <span>Status</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">
                <svg class="twinz-multimedia-icon"><use xlink:href="icons/icons.svg#twinz-multimedia-icon"></use></svg>
                <span>Multimedia</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">
                <svg class="twinz-blog-icon"><use xlink:href="icons/icons.svg#twinz-blog-icon"></use></svg>
                <span>Story</span>
              </a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">
              <form method="post" onsubmit="stripBadAss(status_body)">
                <div class="author-thumb">
                  <img src="img/author-page.jpg" alt="author">
                </div>
                <div class="form-group with-icon label-floating is-empty">
                  <label class="control-label">Share what you are thinking here...</label>
                  <textarea class="form-control" placeholder="" name="status_body" maxlength="445"></textarea>
                </div>
                <div class="add-options-message">
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                    <svg class="twinz-happy-face-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                    <svg class="twinz-computer-icon"><use xlink:href="icons/icons.svg#twinz-computer-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                    <svg class="twinz-small-pin-icon"><use xlink:href="icons/icons.svg#twinz-small-pin-icon"></use></svg>
                  </a>
                  <button class="btn btn-primary btn-md-2" type="submit" name="status_post">Post Status</button>
                  <!-- <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> -->
                </div>
              </form>
            </div>
            <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">
              <form method="post" onsubmit="stripBadAss(media_body)">
                <div class="author-thumb">
                  <img src="img/author-page.jpg" alt="author">
                </div>
                <div class="form-group with-icon label-floating is-empty">
                  <label class="control-label">Share what your media here...</label>
                  <textarea class="form-control" placeholder="" name="media_body" maxlength="445"></textarea>
                </div>
                <div class="add-options-message">
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                    <svg class="twinz-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#twinz-camera-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                    <svg class="twinz-computer-icon"><use xlink:href="icons/icons.svg#twinz-computer-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                    <svg class="twinz-small-pin-icon"><use xlink:href="icons/icons.svg#twinz-small-pin-icon"></use></svg>
                  </a>
                  <button class="btn btn-primary btn-md-2">Post Media</button>
                  <!-- <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> -->
                </div>
              </form>
            </div>
            <div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">
              <form method="post" onsubmit="stripBadAss(story_body)">
                <div class="author-thumb">
                  <img src="img/author-page.jpg" alt="author">
                </div>
                <div class="form-group with-icon label-floating is-empty">
                  <label class="control-label">Share a story here...</label>
                  <textarea class="form-control" placeholder="" name="story_body" maxlength="63206"></textarea>
                </div>
                <div class="add-options-message">
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">
                    <svg class="twinz-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="icons/icons.svg#twinz-camera-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">
                    <svg class="twinz-computer-icon"><use xlink:href="icons/icons.svg#twinz-computer-icon"></use></svg>
                  </a>
                  <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">
                    <svg class="twinz-small-pin-icon"><use xlink:href="icons/icons.svg#twinz-small-pin-icon"></use></svg>
                  </a>
                  <button class="btn btn-primary btn-md-2">Post Story</button>
                  <!-- <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <?php

      $user_id = Check::isLoggedIn();

      // if (isset($_GET['post_id'])) {
      //   $post_id = DB::query('SELECT post_id FROM stories WHERE story_body=:story_body', array(':story_body'=>$story['story_body']));
      //   DB::query('UPDATE stories SET story_likes=story_likes+1 WHERE story_id=:story_id', array(':story_id'=>$_GET['post_id']));
      //   DB::query('INSERT INTO likes VALUES (\'\', :story_id, :user_id)', array(':story_id'=>$_GET['post_id'], ':user_id'=>$user_id));
      // }

    $dbstories = DB::query('SELECT * FROM stories /*WHERE user_id=:user_id*/ ORDER BY story_time DESC'/*, array(':user_id'=>$user_id)*/);
      $post_story = "";
      foreach($dbstories as $story) {

       ?>

       <div id="newsfeed-items-grid">
         <div class="ui-block">
           <article class="hentry post has-post-thumbnail">
             <div class="post__author author vcard inline-items">
               <img src="img/author-page.jpg" alt="author">
               <div class="author-date">
                 <a class="h6 post__author-name fn" href="profile.php">
                   <?php
                    $post_user = $story['user_id'];
                     $user_first = DB::query('SELECT user_first FROM users WHERE user_id=:user_id', array(':user_id'=>$post_user))[0]['user_first'];
                     echo $user_first;
                    ?>
                 </a> shared a new post
                 <div class="post__date">
                   <time class="published">
                     <?php
                      $post_time = $story['story_time'];
                      echo '<time class="timeago" datetime="' . $post_time . '"></time>';
                     ?>
                   </time>
                 </div>
               </div>
               <div class="more"><svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg>
                 <ul class="more-dropdown">
                   <li>
                     <a href="#">Edit Post</a>
                   </li>
                   <li>
                     <a href="#">Delete Post</a>
                   </li>
                 </ul>
               </div>
             </div>
             <?php
             $post_story = $story['story_body'];
             if (strlen($post_story) <= 25) {
               echo '<h3 style="white-space: pre-line;">' . $post_story . '</h3>';
             } elseif (strlen($post_story) > 25 && strlen($post_story) <= 34) {
               echo '<h4 style="white-space: pre-line;">' . $post_story . '</h4>';
             } else {
               echo '<p style="white-space: pre-line;">' . $post_story . '</p>';
             }
             ?>
             <div class="post-additional-info inline-items">
               <ul class="friends-harmonic">

               </ul>
               <div class="names-people-likes">
                 <!--<a href="#">Ellen</a>, <a href="#">Mark</a> and <a href="#">12 more</a> liked this-->
                 <?php
                 $post_likes = $story['story_likes'];
                 if ($post_likes == 0) {
                   echo "Nobody powered this post! yet...";
                 } else {
                   echo "";
                 }
                 ?>
               </div>
               <div class="comments-shared">
                 <a href="#" class="post-add-icon inline-items">
                   <svg class="twinz-heart-icon"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
                   <span>
                     <?php
                      $post_likes = $story['story_likes'];
                      echo $post_likes;
                     ?>
                   </span>
                 </a>
                 <a href="#" class="post-add-icon inline-items">
                   <svg class="twinz-speech-balloon-icon"><use xlink:href="icons/icons.svg#twinz-speech-balloon-icon"></use></svg>
                   <span>
                     <?php
                     $post_comments = $story['story_comments'];
                     echo $post_comments;
                     ?>
                   </span>
                 </a>
                 <a href="#" class="post-add-icon inline-items">
                   <svg class="twinz-share-icon"><use xlink:href="icons/icons.svg#twinz-share-icon"></use></svg>
                   <span>
                     <?php
                     $post_shares = $story['story_shares'];
                     echo $post_shares;
                     ?>
                   </span>
                 </a>
               </div>
             </div>
             <div class="control-block-button post-control-button">

               <?php

               if (!DB::query('SELECT story_id FROM likes WHERE story_id=:story_id AND user_id=:user_id', array(':story_id'=>$story['story_id'], 'user_id'=>$user_id))) {

                ?>

               <form action="stories.php?post_id=<?php echo $story['story_id']; ?>" method="post" id="post<?php echo $story['story_id']; ?>">
               <a href="php/like.php?post_id=<?php echo $story['story_id']; ?>" class="btn btn-control" name="do_like<?php echo $story['story_id']; ?>">
                 <svg class="twinz-like-post-icon"><use xlink:href="icons/icons.svg#twinz-heart-icon"></use></svg>
               </a>
              </form>

              <?php

              } else {

               ?>

               <form action="stories.php?post_id=<?php echo $story['story_id']; ?>" method="post" id="post<?php echo $story['story_id']; ?>">
               <a href="php/like.php?post_id=<?php echo $story['story_id']; ?>" class="btn btn-control" name="do_like<?php echo $story['story_id']; ?>">
                 <svg class="twinz-like-post-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
               </a>
              </form>

              <?php

              }

               ?>


               <!-- <a href="php/comment.php?post_id=<?php// echo $story['story_id']; ?>" class="btn btn-control" id="do_comment<?php echo $story['story_id']; ?>">
                 <svg class="twinz-comments-post-icon"><use xlink:href="icons/icons.svg#twinz-comments-post-icon"></use></svg>
               </a> -->


               <a href="php/share.php?post_id=<?php echo $story['story_id']; ?>" class="btn btn-control" id="do_share<?php echo $story['story_id']; ?>">
                 <svg class="twinz-share-icon"><use xlink:href="icons/icons.svg#twinz-share-icon"></use></svg>
               </a>
             </div>
           </article>
           <div id="toggleComment<?php echo $story['story_id']; ?>" style="display: none;">
             <form class="comment-form inline-items" action="stories.php?post_id=<?php echo $story['story_id']; ?>" method="post" id="post<?php echo $story['story_id']; ?>">
   						<div class="post__author author vcard inline-items">
   							<img src="img/author-page.jpg" alt="author">
   							<div class="form-group with-icon-right ">
   								<textarea class="form-control" placeholder=""></textarea>
   								<div class="add-options-message">
   									<a href="php/comment.php?post_id=<?php echo $story['story_id']; ?>" class="options-message" data-toggle="modal" data-target="#update-header-photo" id="do_comment<?php echo $story['story_id']; ?>">
   										<svg class="twinz-plus-icon"><use xlink:href="icons/icons.svg#twinz-plus-icon"></use></svg>
   									</a>
   								</div>
   							</div>
   						</div>
   					</form>
          </div>
         </div>
       </div>

       <?php

        }

         ?>

        <!-- include_once('./php/post.php');
          if (DB::query('SELECT COUNT(*) FROM stories WHERE :user_id=user_id', array(':user_id'=>Check::isLoggedIn())) >= 1) {
            echo $post_story;
          } else {
            echo "";
          } -->

    </main>

    <!-- Left Sidebar -->

    <aside class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="widget w-wethear">
          <a href="#" class="more"><svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg></a>
          <div class="wethear-now inline-items">
            <div class="temperature-sensor">64°</div>
            <div class="max-min-temperature">
              <span>58°</span>
              <span>76°</span>
            </div>

            <svg class="twinz-weather-partly-sunny-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-partly-sunny-icon"></use></svg>
          </div>
          <div class="wethear-now-description">
            <div class="climate">Partly Sunny</div>
            <span>Real Feel: <span>67°</span></span>
            <span>Chance of Rain: <span>49%</span></span>
          </div>
          <ul class="weekly-forecast">
            <li>
              <div class="day">sun</div>
              <svg class="twinz-weather-sunny-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-sunny-icon"></use></svg>

              <div class="temperature-sensor-day">60°</div>
            </li>
            <li>
              <div class="day">mon</div>
              <svg class="twinz-weather-partly-sunny-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-partly-sunny-icon"></use></svg>
              <div class="temperature-sensor-day">58°</div>
            </li>
            <li>
              <div class="day">tue</div>
              <svg class="twinz-weather-cloudy-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-cloudy-icon"></use></svg>

              <div class="temperature-sensor-day">67°</div>
            </li>
            <li>
              <div class="day">wed</div>
              <svg class="twinz-weather-rain-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-rain-icon"></use></svg>

              <div class="temperature-sensor-day">70°</div>
            </li>
            <li>
              <div class="day">thu</div>
              <svg class="twinz-weather-storm-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-storm-icon"></use></svg>
              <div class="temperature-sensor-day">58°</div>
            </li>
            <li>
              <div class="day">fri</div>
              <svg class="twinz-weather-snow-icon"><use xlink:href="icons/icons-weather.svg#twinz-weather-snow-icon"></use></svg>

              <div class="temperature-sensor-day">68°</div>
            </li>
            <li>
              <div class="day">sat</div>
              <svg class="twinz-weather-wind-icon-header"><use xlink:href="icons/icons-weather.svg#twinz-weather-wind-icon-header"></use></svg>
              <div class="temperature-sensor-day">65°</div>
            </li>
          </ul>
          <div class="date-and-place">
            <h5 class="date">Saturday, March 26th</h5>
            <div class="place">San Francisco, CA</div>
          </div>
        </div>
      </div>
    </aside>

<!-- ... end Left Sidebar -->

<!-- Right Sidebar -->

<div class="col-xl-3 order-xl-3 col-lg-6 lrder-lg-3 col-md-6 col-sm-12 col-xs-12">
  <div class="ui-block">
    <div class="widget w-action">
      <img src="img/logoO.png" alt="Twinzel">
      <div class="content">
        <h4 class="title">TWiNZEL</h4>
        <span>THE BEST SOCIAL NETWORK FOR TRAVELLERS!</span>
        <a href="index.php" class="btn btn-bg-secondary btn-md">Learn More</a>
      </div>
    </div>
  </div>
</div>

<!-- ... end Right Sidebar -->

<!-- BEGINNING OF TEMPLATE FOOTER -->

  <!-- Back to top button -->
  <a class="back-to-top" href="#">
    <img src="icons/back-to-top.svg" alt="Back to top" class="back-icon">
  </a>

  <!-- jQuery first, then Other JS. -->
  <script src="js/jquery-3.2.0.min.js"></script>
  <!-- Js effects for material design. + Tooltips -->
  <script src="js/material.min.js"></script>
  <!-- Helper scripts (Tabs, Equal Height, Scrollbar, etc) -->
  <script src="js/theme-plugins.js"></script>
  <!-- Init functions -->
  <script src="js/main.js"></script>

  <!-- Load more news AJAX script -->
  <script src="js/ajax-pagination.js"></script>

  <!-- Select / Sorting script -->
  <script src="js/selectize.min.js"></script>

  <!-- Lightbox popup script -->
  <script src="js/jquery.magnific-popup.min.js"></script>

  <!-- Datepicker input field script-->
  <script src="js/moment.min.js"></script>
  <script src="js/daterangepicker.min.js"></script>

  <!-- Widget with events script-->
  <script src="js/simplecalendar.js"></script>
  <!-- Swiper / Sliders -->
  <script src="js/swiper.jquery.min.js"></script>

  <!-- Time ago jQuery -->
  <script src="js/jquery.timeago.js"></script>

  <!-- Code Stripper -->
  <script src="js/strip.js"></script>

  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/mediaelement-playlist-plugin.min.js"></script>

  <!-- Anchor acts like button -->
  <script>
    $("a#do_comment<?php echo $story['story_id']; ?>").click(function()
    {
    $("#post<?php echo $story['story_id']; ?>").submit();
    return false;
    });
  </script>

</body>
</html>
