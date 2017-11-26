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

    <title>Profile | Twinzel</title>

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
        <a href="" class="author-name fn">
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

<!-- Top Header -->

<div class="container">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="top-header">
          <div class="top-header-thumb">
            <img src="img/cover.jpg" alt="Cover">
          </div>
          <div class="profile-section">
            <div class="row">
              <div class="col-lg-5 col-md-5">
                <ul class="profile-menu">
                  <li>
                    <a href="stories.php">Stories</a>
                  </li>
                  <li>
                    <a href="aboutme.php">About Me</a>
                  </li>
                  <li>
                    <a href="friends.php">Friends</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-5 ml-auto col-md-5">
                <ul class="profile-menu">
                  <li>
                    <a href="photos.php">Photos</a>
                  </li>
                  <li>
                    <a href="videos.php">Videos</a>
                  </li>
                  <li>
                    <div class="more">
                      <svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg>
                      <ul class="more-dropdown more-with-triangle">
                        <li>
                          <a href="report.php">Report Abuse</a>
                        </li>
                        <li>
                          <a href="block.php">Block Profile</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="control-block-button">
              <a href="requests.php" class="btn btn-control bg-twinz">
                <svg class="twinz-happy-faces-icon"><use xlink:href="icons/icons.svg#twinz-happy-faces-icon"></use></svg>
              </a>
              <a href="messages.php" class="btn btn-control bg-twinz">
                <svg class="twinz-chat---messages-icon"><use xlink:href="icons/icons.svg#twinz-chat---messages-icon"></use></svg>
              </a>
              <div class="btn btn-control bg-twinz more">
                <svg class="twinz-settings-icon"><use xlink:href="icons/icons.svg#twinz-settings-icon"></use></svg>
                <ul class="more-dropdown more-with-triangle triangle-bottom-right">
                  <li>
                    <a href="#" data-toggle="modal" data-target="#update-profile-photo">Update Profile Picture</a>
                  </li>
                  <li>
                    <a href="#" data-toggle="modal" data-target="#update-header-photo">Update Cover Picture</a>
                  </li>
                  <li>
                    <a href="settings.php">Account Settings</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="top-header-author">
            <a href="profile.php" class="author-thumb">
              <img src="img/author-main1.jpg" alt="author">
            </a>
            <div class="author-content">
              <h4 href="profile.php" class="h4 author-name">
                <?php
                  $user_first = DB::query('SELECT user_first FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_first'];
                  $user_last = DB::query('SELECT user_last FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_last'];
                  echo $user_first .' '. $user_last;
                 ?>
              </h4>
              <div class="country">Melbourbe, Australia</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... end Top Header -->

<!-- Body Container -->

<div class="container">
  <div class="row">

    <!-- Main Content -->

    <div class="col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-xs-12">

      <?php

      $user_id = Check::isLoggedIn();

      $dbstories = DB::query('SELECT * FROM stories WHERE user_id=:user_id ORDER BY story_time DESC', array(':user_id'=>$user_id));
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

               <a href="php/comment.php?post_id=<?php echo $story['story_id']; ?>" class="btn btn-control" id="do_comment<?php echo $story['story_id']; ?>">
                 <svg class="twinz-comments-post-icon"><use xlink:href="icons/icons.svg#twinz-comments-post-icon"></use></svg>
               </a>
               <a href="php/comment.php?post_id=<?php echo $story['story_id']; ?>" class="btn btn-control" id="do_share<?php echo $story['story_id']; ?>">
                 <svg class="twinz-share-icon"><use xlink:href="icons/icons.svg#twinz-share-icon"></use></svg>
               </a>
             </div>
           </article>
         </div>
       </div>

       <?php

        }

         ?>


    </div>























    <!-- Left Sidebar -->

    <div class="col-xl-3 order-xl-1 col-lg-6 order-lg-2 col-md-6 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Profile Intro</h6>
        </div>
        <div class="ui-block-content">
					<ul class="widget w-personal-info item-block">
						<li>
							<span class="title">About Me:</span>
							<span class="text">Hi, I’m James, I’m 36 and I work as a Digital Designer for the  “Daydreams” Agency in Pier 56.</span>
						</li>
						<li>
							<span class="title">Favourite TV Shows:</span>
							<span class="text">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,  American Guy.</span>
						</li>
						<li>
							<span class="title">Favourite Music Bands / Artists:</span>
							<span class="text">Iron Maid, DC/AC, Megablow, The Ill, Kung Fighters, System of a Revenge.</span>
						</li>
					</ul>

					<div class="widget w-socials">
						<h6 class="title">Other Social Networks:</h6>
						<a href="#" class="social-item bg-facebook">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							Facebook
						</a>
						<a href="#" class="social-item bg-twitter">
							<i class="fa fa-twitter" aria-hidden="true"></i>
							Twitter
						</a>
						<a href="#" class="social-item bg-dribbble">
							<i class="fa fa-dribbble" aria-hidden="true"></i>
							Dribbble
						</a>
					</div>
				</div>
      </div>

      <div class="ui-block">
        <div class="ui-block-title">
          <h6 class="title">Recent Videos</h6>
        </div>
        <div class="ui-block-content">
          <ul class="widget w-last-video">
            <li>
              <a href="https://vimeo.com/ondemand/viewfromabluemoon4k/147865858" class="play-video play-video--small">
                <svg class="twinz-play-icon"><use xlink:href="icons/icons.svg#twinz-play-icon"></use></svg>
              </a>
              <img src="img/video8.jpg" alt="video">
              <div class="video-content">
                <div class="title">System of a Revenge - Hypnotize...</div>
                <time class="published" datetime="2017-03-24T18:18">3:25</time>
              </div>
              <div class="overlay"></div>
            </li>
            <li>
              <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video play-video--small">
                <svg class="twinz-play-icon"><use xlink:href="icons/icons.svg#twinz-play-icon"></use></svg>
              </a>
              <img src="img/video7.jpg" alt="video">
              <div class="video-content">
                <div class="title">Green Goo - Live at Dan’s Arena</div>
                <time class="published" datetime="2017-03-24T18:18">5:48</time>
              </div>
              <div class="overlay"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>

<!-- ... end Left Sidebar -->

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

  <div class="ui-block">
    <div class="ui-block-title">
      <h6 class="title">Recent Pictures</h6>
    </div>
    <div class="ui-block-content">
      <ul class="widget w-last-photo js-zoom-gallery">
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
        <li>
          <a href="img/last-photo10-large.jpg">
            <img src="img/last-photo10-large.jpg" alt="photo">
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="ui-block">
    <div class="ui-block-title">
      <h6 class="title">Friends (86)</h6>
    </div>
    <div class="ui-block-content">
      <ul class="widget w-faved-page js-zoom-gallery">
        <li>
          <a href="#">
            <img src="img/avatar38-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar24-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar36-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar35-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar34-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar33-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar32-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar31-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar30-sm.jpg" alt="author">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar29-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar28-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar27-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar26-sm.jpg" alt="user">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="img/avatar25-sm.jpg" alt="user">
          </a>
        </li>
        <li class="all-users">
          <a href="#">+74</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="ui-block">
    <div class="ui-block-title">
      <h6 class="title">James’s Badges</h6>
    </div>
    <div class="ui-block-content">

      <ul class="widget w-badges">
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge1.png" alt="author">
            <div class="label-avatar bg-primary">2</div>
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge4.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge3.png" alt="author">
            <div class="label-avatar bg-blue">4</div>
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge6.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge11.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge8.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge10.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge13.png" alt="author">
            <div class="label-avatar bg-breez">2</div>
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge7.png" alt="author">
          </a>
        </li>
        <li>
          <a href="24-CommunityBadges.html">
            <img src="img/badge12.png" alt="author">
          </a>
        </li>
      </ul>

    </div>
  </div>
</div>

<!-- ... end Right Sidebar -->

</div>
</div>

<!-- Window-popup Update Header Photo -->

<div class="modal fade" id="update-header-photo">
  <div class="modal-dialog ui-block window-popup update-header-photo">
    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
    </a>
    <div class="ui-block-title">
      <h6 class="title">Update Cover Picture</h6>
    </div>
    <a href="#" class="upload-photo-item">
      <svg class="twinz-computer-icon"><use xlink:href="icons/icons.svg#twinz-computer-icon"></use></svg>
      <h6>Upload Picture</h6>
      <span>From Your Device</span>
    </a>
    <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">
      <svg class="twinz-photos-icon"><use xlink:href="icons/icons.svg#twinz-photos-icon"></use></svg>
      <h6>My Photos</h6>
      <span>Choose From Photos</span>
    </a>
  </div>
</div>

<!-- ... end Window-popup Update Header Photo -->

<!-- Window-popup Update Profile Photo -->

<div class="modal fade" id="update-profile-photo">
  <div class="modal-dialog ui-block window-popup update-profile-photo">
    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
    </a>
    <div class="ui-block-title">
      <h6 class="title">Update Profile Picture</h6>
    </div>
     <form id="profileform">
     <input id="profileimg" style="display: none;" type="file" />
      <a href="#" id="uprofileimg" class="upload-photo-item">
        <svg class="twinz-computer-icon"><use xlink:href="icons/icons.svg#twinz-computer-icon"></use></svg>
        <h6>Upload Picture</h6>
        <span>From Your Device</span>
      </a>
    <a href="#" class="upload-photo-item" data-toggle="modal" data-target="#choose-from-my-photo">
      <svg class="twinz-photos-icon"><use xlink:href="icons/icons.svg#twinz-photos-icon"></use></svg>
      <h6>My Photos</h6>
      <span>Choose From Photos</span>
    </a>
  </form>
  </div>
</div>

<!-- ... end Window-popup Update Profile Photo -->

<!-- Window-popup Choose from my Photo -->

<div class="modal fade" id="choose-from-my-photo">
  <div class="modal-dialog ui-block window-popup choose-from-my-photo">
    <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
      <svg class="twinz-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
    </a>
    <div class="ui-block-title">
      <h6 class="title">Choose From Photos</h6>

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#home" role="tab" aria-expanded="true">
            <svg class="twinz-photos-icon"><use xlink:href="icons/icons.svg#twinz-photos-icon"></use></svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#profile" role="tab" aria-expanded="false">
            <svg class="twinz-albums-icon"><use xlink:href="icons/icons.svg#twinz-albums-icon"></use></svg>
          </a>
        </li>
      </ul>
    </div>
    <div class="ui-block-content">
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-expanded="true">
          <div class="choose-photo-item" data-mh="choose-item">
            <div class="radio">
              <label class="custom-radio">
                <img src="img/choose-photo1.jpg" alt="photo">
                <input type="radio" name="optionsRadios">
              </label>
            </div>
          </div>

          <!-- Space Holder -->

          <div class="tab-pane" data-mh="choose-item">

          </div>

          <!-- ... end Space Holder -->

          <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
          <a href="#" class="btn btn-primary btn-lg btn--half-width">Save Picture</a>

        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-expanded="false">
          <div class="choose-photo-item" data-mh="choose-item">
            <figure>
              <img src="img/choose-photo10.jpg" alt="photo">
              <figcaption>
                <a href="#">Eastern Australia Vacations</a>
                <span>Last Added: 2 hours ago</span>
              </figcaption>
            </figure>
          </div>

          <!-- Space Holder -->

          <div class="tab-pane" data-mh="choose-item">

          </div>

          <!-- ... end Space Holder -->

          <a href="#" class="btn btn-secondary btn-lg btn--half-width">Cancel</a>
  				<a href="#" class="btn btn-primary btn-lg disabled btn--half-width">Save Picture</a>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- ... end Window-popup Choose from my Photo -->

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
    $("a#post_like").click(function()
    {
    $("#likeCommentShare").submit();
    return false;
    });
  </script>

  <script>
    $(function(){
      $("#uprofileimg").on('click', function(e){
          e.preventDefault();
          $("#profileimg:hidden").trigger('click');
          $("#profileimg:hidden").on('change', function() {
            document.getElementById("profileform").submit();
          });
      });
    });
  </script>

</body>
</html>
