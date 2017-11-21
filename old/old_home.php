<?php

  include_once('./php/session.php');
  // include_once('./php/logout.php');
  include_once('./php/loginClass.php');
  include_once('./php/title.php');
  // include('./php/pdo.php');

 ?>

<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Twinzel</title>

    <!-- Main Font -->
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
            <a href="home.php">
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
      <a href="home.php" class="logo">
        <img src="img/logo-landing.png" alt="Twinzel">
      </a>

      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <ul class="left-menu">
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
            <a href="home.php">
              <img src="img/author-page.jpg" alt="author" class="avatar">
              <span class="icon-status online"></span>
            </a>
          </div>
          <a href="home.php" class="author-name fn">
            <div class="author-title">
              <svg class="twinz-dropdown-arror-icon"><use xlink:href="icons/icons.svg#twinz-dropdown-arrow-icon"></use></svg>
            </div>
            <span class="author-subtitle"></span>
          </a>
        </div>
      </div>

      <div class="ui-block-title ui-block-title-small">
        <h6 class="title">MAIN SECTIONS</h6>
      </div>

      <ul class="left-menu">
        <li>
          <a href="home.php">
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
          <a href="settings.php">
            <svg class="twinz-menu-icon"><use xlink:href="icons/icons.svg#twinz-menu-icon"></use></svg>
            <span>Profile Settings</span>
          </a>
        </li>
        <li>
          <a href="createFavorites.php">
            <svg class="twinz-star-icon left-menu-icon" data-toggle="tooltip" data-placement="right" data-original-title="CREATE FAVORITE"><use xlink:href="icons/icons.svg#twinz-star-icon"></use></svg>
            <span>Create Favorites Page</span>
          </a>
        </li>
        <li>
          <a href="logout.php" name="logoutMobile">
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
          <a href="terms.php">
            <span>Terms of Service</span>
          </a>
        </li>
        <li>
          <a href="faqs.php">
            <span>Privacy Policy</span>
          </a>
        </li>
        <li>
          <a href="careers.php">
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
    <h6>Profile Page</h6>
  </div>

  <div class="header-content-wrapper">
    <form class="search-bar w-search notification-list friends-requests">
      <div class="form-group with-button">
        <input class="form-control js-user-search" placeholder="Search Twinzel..." type="text">
        <button>
          <svg class="twinz-magnifying-glass-icon"><use xlink:href="icons/icons.svg#twinz-magnifying-glass-icon"></use></svg>
        </button>
      </div>
    </form>

    <a href="findFriends.php" class="link-find-friend">Find Friends</a>

    <div class="control-block">
      <div class="control-icon has-items">
        <svg class="twinz-happy-face-icon js-notification-open"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
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
              <form class="form-group with-button custom-status" method="post" action="php/title.php">
                <input class="form-control" placeholder="New Twinzler" type="text" name="customTitle">

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
									<a href="terms.php">
										<span>Terms of Service</span>
									</a>
								</li>
								<li>
									<a href="faqs.php">
										<span>FAQs</span>
									</a>
								</li>
								<li>
									<a href="careers.php">
										<span>We Are Hiring!</span>
									</a>
								</li>
								<li>
									<a href="contacts.php">
										<span>Contacts</span>
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
                  <!-- <form method="post" action="php/logout.php"> -->
                    <a href="php/logout.php">
                      <svg class="twinz-logout-icon"><use xlink:href="icons/icons.svg#twinz-logout-icon"></use></svg>
                      <span>Log Out</span>
                    </a>
                  <!-- </form> -->
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="home.php" class="author-name fn">
          <div class="author-title" name="user-name">
            <?php
              $user_first = DB::query('SELECT user_first FROM users WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['user_first'];
              echo $user_first;
             ?>
            <svg class="twinz-dropdown-arrow-icon"><use xlink:href="icons/icons.svg#twinz-dropdown-arrow-icon"></use></svg>
          </div>
          <span class="author-subtitle" name="user-title">
            <?php
              $user_title = DB::query('SELECT title FROM title WHERE user_id=:user_id', array(':user_id'=>isLoggedIn()))[0]['title'];
              echo $user_title;
             ?>
          </span>
        </a>
      </div>

    </div>
  </div>

</header>

<!-- ... end Header -->

<!-- Responsive Header -->

<header class="header header-responsive" id="site-header-responsive">

  <div class="header-content-wrapper">
    <ul class="nav nav-tabs mobile-app-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#request" role="tab">
          <div class="control-icon has-items">
            <svg class="twinz-happy-face-icon"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
            <!-- <div class="label-avatar bg-blue">6</div> -->
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#chat" role="tab">
          <div class="control-icon has-items">
            <svg class="twinz-chat---messages-icon"><use xlink:href="icons/icons.svg#twinz-chat---messages-icon"></use></svg>
            <!-- <div class="label-avatar bg-purole">6</div> -->
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#notification" role="tab">
          <div class="control-icon has-items">
            <svg class="twinz-thunder-icon"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
            <!-- <div class="label-avatar bg-primary">6</div> -->
          </div>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#search" role="tab">
          <svg class="twinz-magnifying-glass-icon"><use xlink:href="icons/icons.svg#twinz-magnifying-glass-icon"></use></svg>
          <svg class="twins-close-icon"><use xlink:href="icons/icons.svg#twinz-close-icon"></use></svg>
        </a>
      </li>
    </ul>
  </div>

  <!-- Tab panes -->
  <div class="tab-content tab-content-responsive">

    <div class="tab-pane" id="request" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <a href="eventsMobile.html" class="view-all bg-blue">View All Events</a>
      </div>
    </div>
    <div class="tab-pane" id="chat" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <a href="messagesMobile.html" class="view-all bg-purple">View All Messages</a>
      </div>
    </div>
    <div class="tab-pane" id="notification" role="tabpanel">
      <div class="mCustomScrollbar" data-mcs-theme="dark">
        <a href="notifications.html" class="view-all bg-primary">View All Notifications</a>
      </div>
    </div>
    <div class="tab-pane" id="search" role="tabpanel">
      <form class="search-bar w-search notification-list friend-requests">
        <div class="form-group with-button">
          <input type="form-control js-user-search" placeholder="Search Twinzel..." type="text">
        </div>
      </form>
    </div>
  </div>
  <!-- ... end Tab panes -->

</header>

<!-- ... end Responsive Header -->


<div class="header-spacer"></div>


<!-- Top Header -->

<div class="container">
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="ui-block">
        <div class="top-header">
          <div class="top-header-thumb">
            <img src="img/cover.jpg" alt="cover">
          </div>
          <div class="profile-section">
            <div class="row">
              <div class="col-lg-5 col-md-5">
                <ul class="profile-menu">
                  <li>
                    <a href="profile.php" class="active">Stories</a>
                  </li>
                  <li>
                    <a href="aboutMe.html">Profile</a>
                  </li>
                  <li>
                    <a href="friends.html">Friends</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-5 ml-auto col-md-5">
                <ul class="profile-menu">
                  <li>
                    <a href="photos.html">Photos</a>
                  </li>
                  <li>
                    <a href="videos.html">Videos</a>
                  </li>
                  <li>
                    <div class="more">
                      <svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></run></svg>
                      <ul class="more-dropdown more-with-triangle">
                        <li>
                          <a href="report.html">Account</a>
                        </li>
                        <li>
                          <a href="block.html">Privacy</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="control-block-button">
              <a href="requests.html" class="btn btn-control bg-twinz">
                <svg class="twinz-happy-face-icon"><use xlink:href="icons/icons.svg#twinz-happy-face-icon"></use></svg>
              </a>
              <a href="messages.html" class="btn btn-control bg-twinz">
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
                    <a href="settings.html">Account Settings</a>
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
              <a href="profile.php" class="h4 author-name">$User Name</a>
              <div class="country">$Location, Country</div>
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
      <div id="newsfeed-items-grid">

        <!-- Like Button Right -->

        <div class="ui-block">
          <article class="hentry post">
            <div class="post__author author vcard inline-items">
              <img src="img/author-page.jpg" alt="author">
              <div class="author-date">
                <a class="h6 post__author-name fn" href="profile.php">You</a>
                <div class="post__date">
                  <time class="published" datetime="2017-03-24T18:38">
                    $ days ago
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
                  <!--<li>
                    <a href="#">Turn Off Notifications</a>
                  </li>
                  <li>
                    <a href="#">Report</a>
                  </li>-->
                </ul>
              </div>
            </div>
            <h4>Make your first post to get rewarded.</h4>
            <div class="post-additional-info inline-items">
              <ul class="friends-harmonic">
                <!--<li>
                  <a href="#">
                    <img src="img/friend-harmonic7.jpg" alt="friend">
                  </a>
                </li>-->
              </ul>
              <div class="names-people-likes">
                <!--<a href="#">Ellen</a>, <a href="#">Mark</a> and <a href="#">12 more</a> liked this-->
                Nobody powered this post! yet...
              </div>
              <div class="comments-shared">
                <a href="#" class="post-add-icon inline-items">
                  <svg class="twinz-heart-icon"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
                  <span>0</span>
                </a>
                <a href="#" class="post-add-icon inline-items">
                  <svg class="twinz-speech-balloon-icon"><use xlink:href="icons/icons.svg#twinz-speech-balloon-icon"></use></svg>
                  <span>0</span>
                </a>
                <a href="#" class="post-add-icon inline-items">
                  <svg class="twinz-share-icon"><use xlink:href="icons/icons.svg#twinz-share-icon"></use></svg>
                  <span>0</span>
                </a>
              </div>
            </div>
            <div class="control-block-button post-control-button">
              <a href="#" class="btn btn-control">
                <svg class="twinz-like-post-icon"><use xlink:href="icons/icons.svg#twinz-thunder-icon"></use></svg>
              </a>
              <a href="#" class="btn btn-control">
                <svg class="twinz-comments-post-icon"><use xlink:href="icons/icons.svg#twinz-comments-post-icon"></use></svg>
              </a>
              <a href="#" class="btn btn-control">
                <svg class="twinz-share-icon"><use xlink:href="icons/icons.svg#twinz-share-icon"></use></svg>
              </a>
            </div>
          </article>
        </div>

        <!-- ... end Like Button Right -->

      </div>
      <!--<a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="twinz-three-dots-icon"><use xlink:href="icons/icons.svg#twinz-three-dots-icon"></use></svg></a>-->
    </div>

    <!-- ... end Main Content -->


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
    </div>

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

    <!-- ... end Top Header -->


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

<script src="js/mediaelement-and-player.min.js"></script>
<script src="js/mediaelement-playlist-plugin.min.js"></script>

</body>
</html>
