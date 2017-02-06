<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>soundscape</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/9.2.0/nouislider.min.css">
  <link rel="stylesheet" href="css/music.css" rel="stylesheet">
  <link rel="stylesheet" href="css/playerprofile.css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="music.html" id="logo">SoundScape</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!--
      <div class="navbar-nav search">
        <input type="text" placeholder="Search"/>
      </div>-->

      <div class="navbar-right user">
        
        <div class="user__info">        
          <span class="user__info__img">          
            <img src="https://static1.squarespace.com/static/519d9fe3e4b0dd1ef2ceba77/t/587ffc2b3a0411f1e5c2e9f8/1484782645369/Sneaky+profile+small-2.jpg?format=300w" alt="Profile Picture" class="img-responsive" />            
          </span>          
          <p class="user__info__name">          
            <?php echo $_SESSION["current_user"]; ?>            
          </p>          
        </div>
        
        <div class="user__actions" style="margin-top: -5px;">        
          <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <i class="ion-chevron-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
              <li><a href="#">Private Session</a></li>
              <li><a href="#">Account</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Log Out</a></li>
            </ul>
          </div>          
        </div> 

      </div> <!--/user-->
    </div><!--/nav navbar-nav navbar-right-->
  </div><!--/container-->
</nav>

<section class="content">

  <div class="content__left">
  
    <section class="navigation">

      <div class="search2">
        <input type="text" placeholder="Search"/>
      </div>
      
      <div class="navigation__list"><!-- Main -->
        <div class="search">
          <input type="text" placeholder="Search"/>
        </div>
        <div class="navigation__list__header" 
             role="button" 
             data-toggle="collapse" 
             href="#main" 
             aria-expanded="true" 
             aria-controls="main">
          Main
        </div>
        
        <div class="collapse in" id="main">
        
          <a href="#" class="navigation__list__item">
            <i class="ion-ios-browsers"></i>
            <span>Browse</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-person-stalker"></i>
            <span>Activity</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-radio-waves"></i>
            <span>Radio</span>
          </a>
          
        </div>

      </div><!-- /navigation__list -->
      
      <div class="navigation__list"><!-- Your Music -->

        <div class="navigation__list__header" 
             role="button" 
             data-toggle="collapse" 
             href="#yourMusic" 
             aria-expanded="true" 
             aria-controls="yourMusic">
          Your Music
        </div>
        
        <div class="collapse in" id="yourMusic">
        
          <a href="#" class="navigation__list__item">
            <i class="ion-headphone"></i>
            <span>Songs</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Albums</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-person"></i>
            <span>Artists</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-document"></i>
            <span>Local Files</span>
          </a>
          
        </div>

      </div><!-- /navigation__list -->

      <div class="navigation__list"><!-- Playlists -->

        <div class="navigation__list__header" 
             role="button" 
             data-toggle="collapse" 
             href="#playlists" 
             aria-expanded="true" 
             aria-controls="playlists">
          Playlists
        </div>
        
        <div class="collapse in" id="playlists">
        
          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Doo Wop</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Pop Classics</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Love $ongs</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Hipster</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>New Music Friday</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Techno Poppers</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Summer Soothers</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Hard Rap</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Pop Rap</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>5 Stars</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Dope Dancin</span>
          </a>

          <a href="#" class="navigation__list__item">
            <i class="ion-ios-musical-notes"></i>
            <span>Sleep</span>
          </a>
          
        </div>

      </div><!-- /navigation__list -->

    </section><!--/navigation-->
      
    <section class="playlist">
      <a href="#">
        <i class="ion-ios-plus-outline"></i>
        New Playlist
      </a>
    </section>

    <section class="playing">
      <div class="playing__art">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/cputh.jpg" alt="Album Art" />
      </div>
      <div class="playing__song">
        <a class="playing__song__name">Some Type of Love</a>
        <a class="playing__song__artist">Charlie Puth</a>
      </div>
      <div class="playing__add">
        <i class="ion-checkmark"></i>
      </div>
    </section>
    
  </div> <!--/content__left-->
  
  <div class="content__whole" id="main-content">
    <div class="artist">
    
      <div class="artist__header userbg">   

        <div class="artist__info">        
          <div class="profile__img">          
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />            
          </div>          
          <div class="artist__info__meta">          
            <div class="artist__info__type">
              <?php echo $_SESSION["current_user"]; ?>            
            </div>            
            <div class="artist__info__name"></div>
            <div class="artist__info_meta">
              <p class="userstuff">
                <span class="fname"></span>
                <span class="lname"></span>
              </p>
              <p class="userstuff">
                <span class="age"></span>
                <span class="gender"></span>
                <span class="state"></span>
              </p>
              
            </div>            
            <div class="artist__info__actions">                       
              <button class="button-light">Follow</button>              
              <button class="button-light more">
                <i class="ion-ios-more"></i>
              </button>              
            </div>            
          </div> 
        </div>
        
        <div class="artist__navigation">        
          <ul class="nav nav-tabs" role="tablist">            
            <li role="presentation" class="active">
              <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Songs</a>
            </li>            
            <li role="presentation">
              <a href="#albums" aria-controls="related-artists" role="tab" data-toggle="tab">Albums</a>
            </li>            
            <li role="presentation">
              <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
            </li>              
            <li role="presentation">
              <a href="#upload" aria-controls="upload" role="tab" data-toggle="tab">Upload</a>
            </li>        
          </ul>             
        </div>

      </div><!--/artist__header-->
      
      <div class="artist__content">      
        <div class="tab-content">      
          <!-- Overview -->
          <div role="tabpanel" class="tab-pane active" id="artist-overview">            
            <div class="overview">            
              <div class="overview__artist">
                
                <div class="section-title">Songs</div><!-- songs-->
                <div class="tracks">
                  <!--
                  <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                    <img id="play-button-image" src="images/pause.png">
                  </a>-->

                  <div class="track">
                    <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                      <div class="track__art">
                        <img src={song.cover} alt="When It's Dark Out" />
                      </div>
                    </a>
                    <div class="track__number">1</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>

                    <div class="track__title song1">{song.name}</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">147,544,165</div>
                  </div><!--/track-->


                  <div class="track">
                    <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                      <div class="track__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/tth.jpg" alt="These These Things Happen" />
                      </div>
                    </a>
                    <div class="track__number">2</div>
                    <div class="track__added">
                      <i class="ion-plus not-added"></i>
                    </div>
                    <div class="track__title song">I Mean It</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">74,568,782</div>
                  </div><!--/track-->

                  <div class="track">
                    <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                      <div class="track__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                      </div>
                    </a>
                    <div class="track__number">3</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>
                    <div class="track__title song">Calm Down</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">13,737,506</div>
                  </div><!--/track-->

                  <div class="track">
                    <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                      <div class="track__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/tth.jpg" alt="These These Things Happen" />
                      </div>
                    </a>                    
                    <div class="track__number">4</div>
                    <div class="track__added">
                      <i class="ion-plus not-added"></i>
                    </div>
                    <div class="track__title song">Some Kind Of Drug</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">12,234,881</div>
                  </div><!--/track-->

                  <div class="track">
                    <a class="play-button" data-artist="unknown" data-title="steppin out" data-audio="music/steppin-out.mp3" data-cover="images/songcover.png">
                      <div class="track__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                      </div>
                    </a>
                    <div class="track__number">5</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>
                    <div class="track__title song">Let's Get Lost</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">40,882,954</div>
                  </div><!--/track-->

                </div>
                <button class="show-more button-light">Show 5 More</button>
              
              </div><!--/overview__artist-->

              
              
            </div><!--/overview-->
          
          </div><!--/tab-pane active id=artist-overview-->
          <!-- / -->
          <!-- Related Artists -->
          <div role="tabpanel" class="tab-pane" id="albums">          
            <div class="overview__albums">              
              <div class="overview__albums__head">                
                <span class="section-title">Albums</span>                  
                <span class="view-type">                  
                  <i class="fa fa-list list active"></i>                    
                  <i class="fa fa-th-large card"></i>                    
                </span>                
              </div>                
              <div class="album">

                <div class="album__info">                  
                  <div class="album__info__art">                    
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />                      
                  </div>                    
                  <div class="album__info__meta">                    
                    <div class="album__year">2015</div>                      
                    <div class="album__name">When It's Dark Out</div>                      
                    <div class="album__actions">                      
                      <button class="button-light save">Save</button>                        
                      <button class="button-light more">
                        <i class="ion-ios-more"></i>
                      </button>                        
                    </div>                      
                  </div>                    
                </div>
                
                <div class="album__tracks">                  
                  <div class="tracks">                      
                    <div class="tracks__heading">                      
                      <div class="tracks__heading__number">#</div>                        
                      <div class="tracks__heading__title">Song</div>                        
                      <div class="tracks__heading__length">                        
                        <i class="ion-ios-stopwatch-outline"></i>                          
                      </div>                        
                      <div class="tracks__heading__popularity">                        
                        <i class="ion-thumbsup"></i>                          
                      </div>                        
                    </div>
                    <div class="track">
                      <div class="track__number">1</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">Intro</div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">1:11</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">2</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">Random</div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:00</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">3</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Me, Myself & I</span>
                        <span class="feature">Bebe Rexha</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">4:11</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">4</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">One Of Them</span>
                        <span class="feature">Big Sean</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:20</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-down-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">5</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Drifting</span>
                        <span class="feature">Chris Brown</span>
                        <span class="feature">Tory Lanez</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">4:33</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">6</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Of All Things</span>
                        <span class="feature">Too $hort</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:34</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>                      
                    <div class="track">
                      <div class="track__number">7</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Order More</span>
                        <span class="feature">Starrah</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:29</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">8</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">                        
                        <span>Calm Down</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">2:07</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">9</div>
                      <div class="track__added">
                        <i class="ion-plus not-added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Don't Let Me Go</span>
                        <span class="feature">Grace</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:11</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-down-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">10</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">                        
                        <span>You Got Me</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:28</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">11</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">What If</span>
                        <span class="feature">Gizzle</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">4:13</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">12</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">                        
                        <span>Sad Boy</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:23</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">13</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Some Kind Of Drug</span>
                        <span class="feature">Marc E. Bassy</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">3:42</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">14</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Think About You</span>
                        <span class="feature">Quin</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">2:59</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">15</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Everything Will Be OK</span>
                        <span class="feature">Kehlani</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">5:11</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">16</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">For This</span>
                        <span class="feature">Iamnobodi</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">4:11</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>
                    
                    <div class="track">
                      <div class="track__number">17</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title featured">                        
                        <span class="title">Nothing to Me</span>
                        <span class="feature">Keyshia Cole</span>
                        <span class="feature">E-40</span>                          
                      </div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>                        
                      <div class="track__length">5:30</div>                        
                      <div class="track__popularity">                        
                        <i class="ion-arrow-graph-up-right"></i>                          
                      </div>
                    </div>

                  </div>
                  
                </div>
                
              </div><!--/album-->
              
            </div><!--/overview__albums-->
          </div><!--/tab-pane id=albums-->
          <!-- / -->
          <!-- About // Coming Soon-->
          <div role="tabpanel" class="tab-pane" id="artist-about">
            About
          </div>         
          <div role="tabpanel" class="tab-pane" id="upload">
            <p class="user__info__name">Upload Your Songs</p>
            <p>File types accepted: MP3, AAC, WMA, FLAC, ALAC, WAV</p>
            <form action="php/upload_song.php" method="post" enctype="multipart/form-data">
              <label for="song_filename" class="control-label user__info__name">Song File:</label>
              <input type="file" name="song_file">
              <label for="song_name" class="control-label user__info__name">Song Name:</label><br>
              <input type="text" name="song_name"><br>
              <input type="submit" value="upload" class="btn" style="margin-top: 15px;">
            </form>
          </div>
          <!-- / -->
        </div>        
      </div><!--/artist__content-->
    </div><!--/artist-->   
  </div><!--/content__whole-->

  <div class="content__middle g-easy">-->
  
    <div class="artist is-verified">
    
      <div class="artist__header">   

        <div class="artist__info">        
          <div class="profile__img">          
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />            
          </div>          
          <div class="artist__info__meta">          
            <div class="artist__info__type">Artist</div>            
            <div class="artist__info__name">G-Eazy</div>            
            <div class="artist__info__actions">            
              <button class="button-dark">
                <i class="ion-ios-play"></i>
                Play
              </button>              
              <button class="button-light">Follow</button>              
              <button class="button-light more">
                <i class="ion-ios-more"></i>
              </button>              
            </div>            
          </div> 
        </div>
        
        <div class="artist__listeners">        
          <div class="artist__listeners__count">15,662,810</div>          
          <div class="artist__listeners__label">Monthly Listeners</div>          
        </div>
        
        <div class="artist__navigation">        
          <ul class="nav nav-tabs" role="tablist">            
            <li role="presentation" class="active">
              <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a>
            </li>            
            <li role="presentation">
              <a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Artists</a>
            </li>            
            <li role="presentation">
              <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
            </li>        
          </ul>          
          <div class="artist__navigation__friends">          
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/17.jpg" alt="" />
            </a>            
            <a href="#">
              <img src="http://zblogged.com/wp-content/uploads/2015/11/5.png" alt="" />
            </a>            
            <a href="#">
              <img src="https://i2.wp.com/1.gravatar.com/avatar/3a5dde7b9a06f990a18248fbf543fde1.png?resize=80%2C80" alt="" />
            </a>            
          </div>          
        </div>

      </div><!--/artist__header-->
      
      <div class="artist__content">      
        <div class="tab-content">      
          <!-- Overview -->
          <div role="tabpanel" class="tab-pane active" id="artist-overview">            
            <div class="overview">            
              <div class="overview__artist">            
                <!-- Latest Release-->
                <div class="section-title">Latest Release</div>
                <div class="latest-release">
                  <div class="latest-release__art">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                  </div>
                  <div class="latest-release__song">
                    <div class="latest-release__song__title">Drifting (Track Commentary)</div>
                    <div class="latest-release__song__date">
                      <span class="day">4</span>
                      <span class="month">December</span>
                      <span class="year">2015</span>
                    </div>
                  </div>
                </div>
                <!-- / -->
                <!-- Popular-->
                <div class="section-title">Popular</div>
                <div class="tracks">
                  <div class="track">
                    <div class="track__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                    </div>
                    <div class="track__number">1</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>
                    <div class="track__title">Me, Myself & I</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">147,544,165</div>
                  </div>
                  <div class="track">
                    <div class="track__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/tth.jpg" alt="These Things Happen" />
                    </div>
                    <div class="track__number">2</div>
                    <div class="track__added">
                      <i class="ion-plus not-added"></i>
                    </div>
                    <div class="track__title">I Mean It</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">74,568,782</div>
                  </div>
                  <div class="track">
                    <div class="track__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                    </div>
                    <div class="track__number">3</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>
                    <div class="track__title">Calm Down</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">13,737,506</div>
                  </div>
                  <div class="track">
                    <div class="track__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                    </div>
                    <div class="track__number">4</div>
                    <div class="track__added">
                      <i class="ion-plus not-added"></i>
                    </div>
                    <div class="track__title">Some Kind Of Drug</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">12,234,881</div>
                  </div>
                  <div class="track">
                    <div class="track__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/tth.jpg" alt="These Things Happen" />
                    </div>
                    <div class="track__number">5</div>
                    <div class="track__added">
                      <i class="ion-checkmark-round added"></i>
                    </div>
                    <div class="track__title">Let's Get Lost</div>
                    <div class="track__explicit">
                      <span class="label">Explicit</span>
                    </div>
                    <div class="track__plays">40,882,954</div>
                  </div>
                </div>
                <button class="show-more button-light">Show 5 More</button>
                <!-- / -->
              
              </div><!--/overview__artist-->
            
              <div class="overview__related">
                <div class="section-title">Related Artists</div>                
                <div class="related-artists">                
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg" alt="Hoodie Allen" />                      
                    </span>                    
                    <span class="related-artist__name">Hoodie Allen</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/mikestud.jpg" alt="Mike Stud" />                      
                    </span>                    
                    <span class="related-artist__name">Mike Stud</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/drake.jpeg" alt="Drake" />                      
                    </span>                    
                    <span class="related-artist__name">Drake</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/jcole.jpg" alt="J. Cole" />                      
                    </span>                    
                    <span class="related-artist__name">J. Cole</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/bigsean.jpg" alt="Big Sean" />                      
                    </span>                    
                    <span class="related-artist__name">Big Sean</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/wiz.jpeg" alt="Wiz Khalifa" />                      
                    </span>                    
                    <span class="related-artist__name">Wiz Khalifa</span>                    
                  </a>                  
                  <a href="#" class="related-artist">                  
                    <span class="related-artist__img">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/yonas.jpg" alt="Yonas" />                      
                    </span>                    
                    <span class="related-artist__name">Yonas</span>                    
                  </a>                  
                </div><!--/related-artists-->
              </div><!--overview__related-->
              <div class="overview__albums">              
                <div class="overview__albums__head">                
                  <span class="section-title">Albums</span>                  
                  <span class="view-type">                  
                    <i class="fa fa-list list active"></i>                    
                    <i class="fa fa-th-large card"></i>                    
                  </span>                
                </div>                
                <div class="album">

                  <div class="album__info">                  
                    <div class="album__info__art">                    
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />                      
                    </div>                    
                    <div class="album__info__meta">                    
                      <div class="album__year">2015</div>                      
                      <div class="album__name">When It's Dark Out</div>                      
                      <div class="album__actions">                      
                        <button class="button-light save">Save</button>                        
                        <button class="button-light more">
                          <i class="ion-ios-more"></i>
                        </button>                        
                      </div>                      
                    </div>                    
                  </div>
                  
                  <div class="album__tracks">                  
                    <div class="tracks">                      
                      <div class="tracks__heading">                      
                        <div class="tracks__heading__number">#</div>                        
                        <div class="tracks__heading__title">Song</div>                        
                        <div class="tracks__heading__length">                        
                          <i class="ion-ios-stopwatch-outline"></i>                          
                        </div>                        
                        <div class="tracks__heading__popularity">                        
                          <i class="ion-thumbsup"></i>                          
                        </div>                        
                      </div>
                      <div class="track">
                        <div class="track__number">1</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">Intro</div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">1:11</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">2</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">Random</div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:00</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">3</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Me, Myself & I</span>
                          <span class="feature">Bebe Rexha</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">4:11</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">4</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">One Of Them</span>
                          <span class="feature">Big Sean</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:20</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-down-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">5</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Drifting</span>
                          <span class="feature">Chris Brown</span>
                          <span class="feature">Tory Lanez</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">4:33</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">6</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Of All Things</span>
                          <span class="feature">Too $hort</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:34</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>                      
                      <div class="track">
                        <div class="track__number">7</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Order More</span>
                          <span class="feature">Starrah</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:29</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">8</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">                        
                          <span>Calm Down</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">2:07</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">9</div>
                        <div class="track__added">
                          <i class="ion-plus not-added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Don't Let Me Go</span>
                          <span class="feature">Grace</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:11</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-down-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">10</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">                        
                          <span>You Got Me</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:28</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">11</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">What If</span>
                          <span class="feature">Gizzle</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">4:13</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">12</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">                        
                          <span>Sad Boy</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:23</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">13</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Some Kind Of Drug</span>
                          <span class="feature">Marc E. Bassy</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">3:42</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">14</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Think About You</span>
                          <span class="feature">Quin</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">2:59</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">15</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Everything Will Be OK</span>
                          <span class="feature">Kehlani</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">5:11</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">16</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">For This</span>
                          <span class="feature">Iamnobodi</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">4:11</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>
                      
                      <div class="track">
                        <div class="track__number">17</div>
                        <div class="track__added">
                          <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title featured">                        
                          <span class="title">Nothing to Me</span>
                          <span class="feature">Keyshia Cole</span>
                          <span class="feature">E-40</span>                          
                        </div>
                        <div class="track__explicit">
                          <span class="label">Explicit</span>
                        </div>                        
                        <div class="track__length">5:30</div>                        
                        <div class="track__popularity">                        
                          <i class="ion-arrow-graph-up-right"></i>                          
                        </div>
                      </div>

                    </div>
                    
                  </div>
                  
                </div><!--/album-->
                
              </div><!--/overview__albums-->
              
            </div>
          
          </div>
          <!-- / -->
          <!-- Related Artists -->
          <div role="tabpanel" class="tab-pane" id="related-artists">          
            <div class="media-cards">            
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Hoodie Allen</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/mikestud_large.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Mike Stud</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/drake_large.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Drake</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/jcole_large.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">J. Cole</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/bigSean_large.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Big Sean</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/wiz.jpeg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Wiz Khalifa</a>                
              </div>
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/yonas.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Yonas</a>                
              </div>              
              <div class="media-card">              
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/childish.jpg);">                
                  <i class="ion-ios-play"></i>                  
                </div>                
                <a class="media-card__footer">Childish Gambino</a>                
              </div>              
            </div>          
          </div>
          <!-- / -->
          <!-- About // Coming Soon-->
          <div role="tabpanel" class="tab-pane" id="artist-about">
            About
          </div>
          <!-- / -->
        </div>        
      </div><!--/artist__content-->

    </div><!--/artist-->    
  </div><!--/content__middle-->

  <div class="content__right edm">  
    <div class="social">    
      <div class="friends">      
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Im an EDM artist who does makes cool edm music. Hit me up for stuff and yea.          
        </a>        
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Behdad Nejat         
        </a>        
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Paris, France        
        </a>        
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Tony Russo          
        </a>        
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Alyssa Marist          
        </a>        
        <a href="#" class="friend">        
          <i class="ion-android-person"></i>          
          Ron Samson          
        </a>        
      </div>      
      <button class="button-light">Find Friends</button>      
    </div>    
  </div>  
</section>
<section class="current-track">
  <div class="current-track__actions">  
    <a class="ion-ios-skipbackward"></a>    
    <a class="ion-ios-play play"></a>    
    <a class="ion-ios-skipforward"></a>    
  </div>
  
  <div class="current-track__progress">  
    <div class="current-track__progress__start">0:01</div>    
    <div class="current-track__progress__bar">      
      <div id="song-progress"></div>      
    </div>    
    <div class="current-track__progress__finish">3:07</div>    
  </div>
  
  <div class="current-track__options">  
    <a href="#" class="lyrics">Lyrics</a>    
    <span class="controls">    
      <a href="#" class="control">
        <i class="ion-navicon"></i>
      </a>      
      <a href="#" class="control">
        <i class="ion-shuffle"></i>
      </a>      
      <a href="#" class="control">
        <i class="fa fa-refresh"></i>
      </a>      
      <a href="#" class="control devices">
        <i class="ion-iphone"></i>
        <span>Devices Available</span>
      </a>
      <a href="#" class="control volume">        
        <i class="ion-volume-high"></i>      
        <div id="song-volume"></div>        
      </a>      
    </span>    
  </div>
  
</section>

<!--000000000000000000000000000000000000000000000000000000000000000000000 -->
<script src="js/jquery-3.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/9.2.0/nouislider.min.js"></script>
<script type="text/javascript" src="js/playerprofile.js"></script>
</body>
</html>