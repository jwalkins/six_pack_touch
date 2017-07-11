<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Edinburgh based Touch Rugby side with mixed, men's, and women's teams. Beginners to experienced touch players welcome! Six Pack compete in ETS, STS, In2Touch and Active Touch leagues throughout Edinburgh. ">
    <meta name="keywords" content="Edinburgh Touch Rugby, Touch Rugby, Scottish Touch, Six Pack Touch Rugby">
    <meta name="author" content="James Walkinshaw">

    <title>Six Pack Touch Rugby | Edinburgh | Homepage |</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/sytlesheet.css">

    <!-- Google Fonts API -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">

    <!-- Slick Carousel Images CDN
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">-->

</head>

<body id="page-top" class="index">

    <!-- ==============================================
      Navigation Section
    ================================================ -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="navbar-right">
            <a class="hidden-xs" href="https://www.facebook.com/sixpacktouch/?fref=ts" target="_blank" title="Like Six Pack Touch on Facebook">
                <span class="fa fa-facebook-square"></span>
            </a>
            <a class="hidden-xs" href="https://www.instagram.com/sixpacktouch/" target="_blank" title="Follow Six Pack Touch on Instagram">
                <span class="fa fa-instagram"></span>
            </a>
        </div>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" id="collapse-button" data-toggle = "collapse" data-target = ".navbar-collapse" aria-expanded = "false">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                <a class="navbar-brand page-scroll" href="#page-top" title="Back to Top of Page">
                <img src="images/site_logo.png" alt="site logo">
                </a>
                <div>
                    <a class="fa fa-facebook-square navbar-brand visible-xs" href="https://www.facebook.com/sixpacktouch/?fref=ts" target="_blank"></a>
                    <a class="fa fa-instagram navbar-brand visible-xs" href="https://www.instagram.com/sixpacktouch/" target="_blank"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a class="page-scroll" title="Find out more about Touch Rugby and Six Pack "href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" title="Follow us on Instagram" href="#instagram">Instagram</a>
                    </li>
                    <li>
                        <a class="page-scroll" title="Come and join us - find our training and playing areas" href="#find_us">Play Touch</a>
                    </li>
                    <li>
                        <a class="page-scroll" title="Contact Six Pack" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll visible-lg visible-md" title="Six Pack Timeline" href="#six-pack-timeline">Timeline</a>
                    </li>
                    <li>
                        <a class="page-scroll" title="Our Six Pack committee members" href="#commitee">Committee</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" title="Some actions shots" href="#gallery">Gallery</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- ==============================================
      Header Section
    ================================================ -->
    <header>
        <div class="container-fluid" id="top">
            <div class="intro-text">
                <div class="intro-lead-in"><span class="intro">Touch Rugby in the heart of Edinburgh</span></div>
                <div class="intro-heading"><span class="intro">Six Pack</span></div>
                <!--<a href="#services" class="page-scroll btn btn-primary btn-lg">Find Out More</a>-->
                <div><p><span class="intro">Scroll to join us and find out more.</span></p>
                <a class="page-scroll" href="#sts" title="Down to About Six Pack Touch"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
                </div>
            </div>
        </div>
    </header>

    <!-- ==============================================
      Fixtures & Results Section
    ================================================ -->
    <section id="fixtures-results">
      <div class="container">
        <h2 class="text-center">Six Pack Touch Fixtures &amp; Results 2017</h2>
        <!-- TO BE WORKED ON TO COLLAPSE ALL ETS MENS ETC TEAMS ONE BY ONE -->
        <div class="col-sm-12 text-center">
            <button type="button" class="ets-btn btn btn-info text-center" data-toggle="collapse" data-target="#fixtures-collapse">
                Show Six Pack Fixtures &amp; Results 2017
            </button>
            <div id="fixtures-collapse" class="collapse">
              <?php
                include 'webscrape/webscrape_v2.php'
              ?>
            </div>
        </div>
      </div>
    </section>

    <!-- ==============================================
      Edinburgh STS Charity Money Raised
    ================================================ -->
    <section id="sts">
      <br>
        <div class="container">
            <div class="col-xs-12 text-center">
              <h2>A HUGE thank you!</h2>
                <h3>Thank you to all involved with the Edinburgh STS where we managed to raise a fantastic £520 for Marie Curie</h3>
                <img class="text-center img-responsive" src="images/sts/edinburgh-sts-money-raised.png" alt="Edinburgh STS Money Raised">
            </div>
        </div>
    </section>

    <!-- ==============================================
      Edinburgh STS Section
    ================================================ -->
    <section id="sts">
      <br>
        <div class="container-fluid">
            <div class="col-md-6 text-center">
                <div>
                    <h2>Six Pack Roosters win Stirling STS</h1>
                    <p>A huge effort from the Six Pack Roosters saw them emerge victorious at this year's Stirling STS.
                      <br>
                      A rain soaked day did not prevent an enthralling tournament,
                      Six Pack Roosters went unbeaten through their group and progressed to the Cup finals,
                       where they beat Sparks 4 - 2 in the quarter final, Galaxy Scotland 4 - 1 in the semi final
                       and lastly, beating Blue Jays 5 - 3 to lift the Cup.
                    </p>
                    <br>
                    <p>2 wins from 4 allowed the Six Pack Sharks to enter the Shield,
                      where they battled their way through to the Shield final until finally
                      being edged out 5 - 3 against a competitive Buffalos side.
                    </p>
                    <br>
                    <p>
                      The Cup win puts Roosters at the top of the STS table, with 2 tournaments to play.
                      <br>
                      The penultimate STS will be held in Aberdeen on 22nd July 2017,
                      with Glasgow wrapping up the series on 26th August 2017.
                    </p>
                    <br>
                    <p>
                        A huge thank you must go out to all teams, players, referees, friends and supporters
                        who helped make it a great day out. Special plaudits must to to Stirling for hosting
                        a fantastic Ceilidh long into the evening to top off a fantastic day.
                    </p>
                    <br>
                    <p>Head over to our <a target="_blank" title="Follow Six Pack Touch on Instagram" alt="Six Pack Touch on Instagram" href="https://www.instagram.com/sixpacktouch/">Instagram Page</a> to see action shots from the day.
                    </p>
                    <br>
                </div>
            </div>
            <div class="col-md-6">
                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                  <div style="padding:8px;">
                    <div style=" background:#F8F8F8; line-height:0; margin-top:40px; text-align:center; width:100%;">
                      <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC);">
                      </div>
                    </div>
                      <p style=" margin:8px 0 0 0; padding:0 4px;">
                        <a href="https://www.instagram.com/p/BU8wISFA31T/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">First silverware of the year with a win at Stirling STS. Great tournament run by Stirling Touch! #scottishtouchseries #scottishtouch #sixpacktouch #sixpack #stirling #touchislife #sts #firstwinoftheseason</a>
                      </p>
                      <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Six Pack touch (@sixpacktouch) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-06-05T07:19:07+00:00">Jun 5, 2017 at 12:19am PDT</time>
                      </p>
                    </div>
                  </blockquote>
                  <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
            </div>
        </div>
        <div class="col-lg-12 text-center">
                <a class="page-scroll" href="#about" title="Down Find Us"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
        </div>
    </section>

    <!-- ==============================================
      About Section
    ================================================ -->
    <section id="about">
        <div class="container text-center">
            <div>
                <h1>About Six Pack Touch</h1>
                <h2 class="section-heading">Work Hard, Play Hard. <span class="glyphicons-person-running"></span></h2>
                <p>Six Pack aims to be both a highly successful and social Touch Rugby Club, with many players going on to International honours throughout their Six Pack careers. We currently compete in 2 leagues during the summer months, Edinburgh Touch Superleague (ETS) Touch League on Monday evenings and the In2Touch League on Wednesday evenings. We also compete in the Scottish Touch Series (STS) Tournaments, which are held on 4 Saturdays from May - August. During the Winter months, we keep our fitness and friendships up with Edinburgh's Active Touch league and winter training sessions.</p>
                <p>It's always important to relax though, and our social beast, Jonnie Ralfe is always on hand to organise a gathering. From Christmas parties to days out at the rugby sevens, don't be surprised if there's a drink or four after a tournament or at the end of a long season.</p>
                <hr>
                <h2>Our Teams - <a class="glyphicon glyphicon-calendar" title="Keep up to date with Six Pack, subscribe to our calendar" href="https://stanza.co/schedules/six_pack_2017" target="_blank"></a></h2>
                <p>There's a team for everyone. Six Pack runs men's, women's and mixed teams throughout the year. Find your perfect team, regardless of whether you want an evening run around or test yourself against the best players Scottish Touch has to offer.</p>
                <hr>
                <h2>Join Us! - <a class="page-scroll glyphicon glyphicon-send" title="email Six Pack" href="#contact"></a></h2>
                <p>We love to welcome new members, if you want to play Touch Rugby in Edinburgh and fancy giving Six Pack a try, please do <a class="page-scroll" title="email Six Pack" href="#contact">get in contact</a> with one of our awesome committee members and they will answer any questions or queries you might have. Alternatively, just pop along to one of our <a title="Six Pack training times and locations" class="page-scroll" href="#train-with-us">training sessions</a>.</p>
                <hr>
                <h2>Six Pack Abroad - Our 10 Year Anniversary - <span class="page-scroll glyphicon glyphicon-plane"></span></h2>
                <p>2017 brings with it our 10 year anniversary, as an extravagant celebration, Six Pack will be travelling to <a target="_blank" title="Six Pack at Gif-sur-Yvette" href="https://www.facebook.com/events/267397450359098/">Gif-sur-Yvette</a> hosted by <a target="_blank" title="Touch Roosters 91 Club Website" href="http://www.touchrugby91.com/index.php?lg=uk&lien=lien_1">Touch Roosters 91</a> on the <b>27th May 2017</b>. A fantastic way to kick off the summer of touch and we hope for more tournaments like this in the future.</p>
            </div>
            <hr>
    </section>

    <!-- ==============================================
      Instagram Photos Section
    ================================================ -->
    <section id="instagram">
        <div class="col-xs-12 text-center">
                <br>
                <h2 class="section-heading">Join us on Instagram<a target="_blank" title="Follow Six Pack Touch on Instagram" alt="Six Pack Touch on Instagram" href="https://www.instagram.com/sixpacktouch/"><img src="images/IG_glyphicon.png" onmouseover="this.src='images/IG_glyphicon_BW.png'"
                onmouseout="this.src='images/IG_glyphicon.png'"></a></h2>
                <br>
        </div>
        <!-- Carousel on medium + size devices -->
        <div class="container-fluid text-center hidden-sm hidden-xs">
            <iframe src="//lightwidget.com/widgets/d3ec305cb61a56f4a6efa64a89a6a1a5.html" scrolling="no" allowtransparency="true" class="lightwidget-widget"></iframe>
        </div>
        <!-- Grid on sm & xs devices -->
        <div class="container-fluid text-center visible-sm visible-xs">
            <iframe src="//lightwidget.com/widgets/3766ccba59e650d0b035dd670f54488c.html" scrolling="no" allowtransparency="true" class="lightwidget-widget"></iframe>
        </div>
        <div class="col-lg-12 text-center">
                <a class="page-scroll" href="#find_us" title="Down Find Us"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
        </div>
    </section>

    <!-- ==============================================
      Find Us Section
    ================================================ -->
    <section id="find_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Find Us - Where we train &amp; play</h2>
                    <h3 class="section-subheading text-muted">Click a marker to find our training and playing locations throughout Edinburgh.</h3>
                    <h3>Never miss a Six Pack moment, <a target="_blank" title="Add Six Pack Calendar to Google Calendar, iPhone, Android &amp; More" href="https://stanza.co/schedules/six_pack_2017">subscribe to our Calendar</a></h3>
                </div>
            </div>
            <div id="map-wrapper">
                <div id="map-canvas" class="mapping">
                </div>
            </div>

        </div>
        <br>
        <div class="container-fluid text-center">
            <div class="col-lg-8">
                <h2>Leagues &amp; Tournaments with Us: <a class="glyphicon glyphicon-calendar" title="Keep up to date with Six Pack, subscribe to our calendar" href="https://stanza.co/schedules/six_pack_2017"></a></h2>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th><a target="_blank" title="Add to your Calendar" href="https://stanza.co/schedules/six_pack_2017">Dates</a></th>
                            <th>League / Tournament</th>
                            <th title="Tournament / League Location" class="hidden-xs hidden-sm">Location</th>
                            <th title="Mixed / Men's / Women's">Teams</th>
                            <th title="Beginner / Intermediate / Advanced">Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Wednesdays from 26th April 2017 - 28th June 2017</th>
                            <th><a target="_blank" title="Edinburgh In2Touch Website" href="http://www.in2touch.com/worldwide/venue.php?venue=86&news_item=1344">In2Touch Edinburgh</a></th>
                            <th class="hidden-xs hidden-sm"><a target="_blank" title="Open In2Touch Location in Google Maps" href="https://goo.gl/bHFLQx">Edinburgh Academicals Rugby Club</a></th>
                            <th>Mixed &amp; Men's</th>
                            <th title="Beginner / Intermediate">Beg / Int</th>
                        </tr>
                        <tr>
                            <th>Mondays from 8th May 2017 - 21st August 2017</th>
                            <th><a target="_blank" title="Edinburgh Touch Superleague Website" href="http://www.touchsuperleague.org.uk/edinburgh/">Edinburgh Touch Superleague (ETS)</a></th>
                            <th class="hidden-xs hidden-sm"><a target="_blank" title="Open ETS Location in Google Maps" href="https://goo.gl/F4SLQe">Peffermill Playing Fields</a></th>
                            <th>Mixed, Men's &amp; Women's</th>
                            <th title="Intermediate / Advanced">Int / Adv</th>
                        </tr>
                        <tr>
                            <th>Saturday 13th May 2017</th>
                            <th>Scottish Touch Series (STS) Round 1</th>
                            <th class="hidden-xs hidden-sm"><!--<a target="_blank" title="Open STS Location in Google Maps" href="">-->EDINBURGH - Peffermill<!--</a>--></th>
                            <th>Mixed</th>
                            <th title="Intermediate / Advanced">Int / Adv</th>
                        </tr>
                        <tr>
                            <th>Saturday 3rd June 2017</th>
                            <th>Scottish Touch Series (STS) Round 2</th>
                            <th class="hidden-xs hidden-sm"><!--<a target="_blank" title="Open STS Location in Google Maps" href="#">-->STIRLING - TBC<!--</a>--></th>
                            <th>Mixed</th>
                            <th title="Intermediate / Advanced">Int / Adv</th>
                        </tr>
                        <tr>
                            <th>Saturday 22nd July 2017</th>
                            <th>Scottish Touch Series (STS) Round 3</th>
                            <th class="hidden-xs hidden-sm"><!--<a target="_blank" title="Open STS Location in Google Maps" href="#">-->ABERDEEN - TBC<!--</a>--></th>
                            <th>Mixed</th>
                            <th title="Intermediate / Advanced">Int / Adv</th>
                        </tr>
                        <tr>
                            <th>Saturday 26th August 2017</th>
                            <th>Scottish Touch Series (STS) Round 4</th>
                            <th class="hidden-xs hidden-sm"><!--<a target="_blank" title="Open STS Location in Google Maps" href="#">-->GLASGOW - TBC<!--</a>--></th>
                            <th>Mixed</th>
                            <th title="Intermediate / Advanced">Int / Adv</th>
                        </tr>
                        <tr>
                            <th>Winter Active Touch 2018 to be confirmed...</th>
                            <th>TBC</th>
                            <th class="hidden-xs hidden-sm">TBC</th>
                            <th>TBC</th>
                            <th>All</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4" id="train-with-us">
                <h2>Train with Us</h2>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th class="hidden-xs hidden-sm">Summer / Winter</th>
                            <th><a target="_blank" title="Add to your Calendar" href="https://stanza.co/schedules/six_pack_2017">Dates</a></th>
                            <th>Times</th>
                            <th>Location</th>
                            <th>Teams</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="hidden-xs hidden-sm" title="Summer">S</th>
                            <th>Mondays from 27th March (for 6 weeks)</th>
                            <th>6:30 - 8:30PM</th>
                            <th><a target="_blank" title="Open Academy New Field Location in Google Maps" href="https://goo.gl/ZKGpaz">Inverleith Park (near Tennis Courts)</a></th>
                            <th>All Ages / Levels</th>
                        </tr>
                        <tr>
                            <th class="hidden-xs hidden-sm" title="Winter">W</th>
                            <th>Winter 2018 TBC</th>
                            <th>6:30 - 8:30PM</th>
                            <th><a target="_blank" title="Open Inverleith Park Location in Google Maps" href="https://goo.gl/rgBPlh">Edinburgh Academy New Field</a></th>
                            <th>All Ages / Levels</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 text-center">
                <a class="page-scroll" href="#contact" title="Continue to contact Six Pack"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>

    <!-- ==============================================
      Contact Section
    ================================================ -->
    <section id="contact">
        <div class="container img-responsive">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Six Pack</h2>
                    <h3 class="section-subheading text-muted">If you have any questions, please email us and one of our committee members will get back to you shortly.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone" id="phone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-lg btn-msg">Send Message</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <a class="page-scroll" href="#touch-worldwide" title="Continue to find out more about Touch Rugby Worldwide"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>


    <!-- ==============================================
      Touch Worldwide Section
    ================================================ -->
    <section id="touch-worldwide">
        <div class="container-fluid">
            <div class="col-md-6 text-center">
                <div>
                    <h2 class="section-heading">Touch Rugby Worldwide</h2>
                </div>
                <br>
                <p> Touch Rugby is a fantastic sport, originally a training technique for Rugby League, it grew into its own sport throughout the 1960s (<a target="_blank" title="Touch Rugby on Wikipedia" href="https://en.wikipedia.org/wiki/Touch_(sport)">Wiki</a>) in Australia with the first recognised tournament being played in 1978. It brings together all ages, genders and skill levels, and allows people to reach sporting goals.
                </p>
                <p>Whether you goal is keeping fit, playing international level sport or just making friends, Touch Rugby offers a fantastic oppotunity for all.
                </p>
                <p>For full FIT Touch Rules, you can<a title="Download Official Touch Rules" target="_blank" href="documents/FIT Playing Rules 4th Edition.pdf"> download the PDF here</a>.</p>
                <p>Want to find our more about Touch Rugby in general? Here are some great<a title="Touch Rugby in YouTube" target="_blank" href="https://www.youtube.com/results?search_query=touch+rugby+for+beginners"> YouTube Introduction Videos </a>to get you started.</p>
                <p>You can even find a sneak peak of<a title="Six Pack STS Edinburgh Final 2014" target="_blank" href="https://www.youtube.com/watch?v=KBRNYVZdOXc"> Six Pack in action </a>during the 2014 STS Edinburgh Final.</p>
            </div>
            <hr class="hidden-md hidden-lg">
            <div class="col-md-6 visible-lg visible-md">
                <img class="img-responsive" src="images/about/1.jpg" title="Six Pack at the Edinburgh STS Tournament" alt="Six Pack at Edinburgh STS Tournament">
            </div>
            <div class="col-lg-12 text-center">
                <a class="page-scroll" href="#six-pack-timeline" title="Continue for the History of Six Pack"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>

    <!-- ==============================================
      Six Pack Timeline Section
    ================================================ -->
    <section id="six-pack-timeline" class="visible-lg visible-md">
        <div class="container-fluid">
                <div>
                    <h2 class="section-heading">Six Pack Timeline</h2>
                </div>
                <ul class="timeline">
                    <li>
                      <div class="timeline-badge"><p>2007</p></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Six Pack Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                          <p>The brainchild of Mikey Short and Iain Gray, Six Pack was founded in 2007 with the aim of developing the skills of younger touch players in Scotland and progressing them towards international honours.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge"><p>2009</p></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Six Pack Develops</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Six Pack win the Edinburgh Open and Touch Superleague Advanced League in 2009 and start to become a force within Scottish Touch.</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge"><p>2010</p></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">League Wins &amp; One Day Tournaments</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Further league wins in 2010, including a season-long sweep in one-day tournaments leading to a Scottish Touch Series victory.</p>
                        </div>
                      </div>
                    </li>
                    <li class="timeline-inverted">
                      <div class="timeline-badge"><p>2014</p></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">STS Victories</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Scottish Touch Series victories continued in 2013 &amp; 14, including the top spot at the Edinburgh Open.</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="timeline-badge"><p>2017</p></div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4 class="timeline-title">Our 10 Year Anniversary!</h4>
                        </div>
                        <div class="timeline-body">
                          <p>Entering our 10th year and Six Pack is still going from strength to strength, with plaenty of leagues, tournaments and socials throughout the fantastic summer and long winter evenings. </p>
                        </div>
                      </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <a class="page-scroll" href="#commitee" title="Our Committee"><span class="blink glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>
        </div>
      </div>
    </section>



    <!-- ==============================================
      Commitee Section
    ================================================ -->
    <section id="commitee">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Committee</h2>
                    <h3 class="section-subheading text-muted">Out team of hard working Six Packers who keep everything ticking over.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/1.jpg" class="img-responsive img-circle" alt="Iain Gray - President">
                        <p class="text-muted">Iain Gray</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/2.jpg" class="img-responsive img-circle" alt="Ross Taylor - Coach">
                        <p class="text-muted">Ross Taylor</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/3.jpg" class="img-responsive img-circle" alt="Michael Bottom - Fixture Secretary">
                        <p class="text-muted">Michael Bottom</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/4.jpg" class="img-responsive img-circle" alt="Hugh McMichael - Kit Secretary">
                        <p class="text-muted">Hugh McMichael</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/5.jpg" class="img-responsive img-circle" alt="Jonnie Ralfe - Social Beast">
                        <p class="text-muted">Jonnie Ralfe</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/6.jpg" class="img-responsive img-circle" alt="Ailsa Falconer - Accounts Secretary">
                        <p class="text-muted">Ailsa Falconer</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/7.jpg" class="img-responsive img-circle" alt="Karen McMichael - Admin Secretary">
                        <p class="text-muted">Karen McMichael</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4">
                    <div class="team-member">
                        <img src="images/team/8.jpg" class="img-responsive img-circle" alt="James Walkinshaw - Website">
                        <p class="text-muted">James Walkinshaw</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
      Carousel Photos Section
    ================================================
    <section id="gallery">
        <div class="container-fluid text-center">
            <div class="col-xs-12">
                <br>
                <h2 class="section-heading">Six Packers in Action</h2>
                <br>
            </div>
            <div class="carousel-photos">
                <div><img src="images/carousel/1.jpg" alt="carousel image 1"></div>
                <div><img src="images/carousel/2.jpg" alt="carousel image 2"></div>
                <div><img src="images/carousel/3.jpg" alt="carousel image 3"></div>
                <div><img src="images/carousel/4.jpg" alt="carousel image 4"></div>
                <div><img src="images/carousel/5.jpg" alt="carousel image 5"></div>
                <div><img src="images/carousel/6.jpg" alt="carousel image 6"></div>
                <div><img src="images/carousel/7.jpg" alt="carousel image 7"></div>
                <div><img src="images/carousel/8.jpg" alt="carousel image 8"></div>
                <div><img src="images/carousel/9.jpg" alt="carousel image 9"></div>
                <div><img src="images/carousel/10.jpg" alt="carousel image 10"></div>
                <div><img src="images/carousel/11.jpg" alt="carousel image 12"></div>
                <div><img src="images/carousel/12.jpg" alt="carousel image 12"></div>
            </div>
        </div>
    </section>
    -->

    <!-- ==============================================
      Footer Section
    ================================================ -->
    <footer>
        <div class="container-fluid text-center">
            <div class="col-sm-4">
                &copy; Six Pack Touch 2017
            </div>
            <div class="col-sm-4">
                <div>Kit Provided By:<a title="Visit BLK Website" target="_blank" href="http://www.blksport.com/"><img src="images/kit_logo.png" alt="Six Pack Kit Provider BLK"></a></div>
                <div></div>
            </div>
            <div class="col-sm-4">
                <a title="Website Design by Six Packer - James Walkinshaw" href="mailto:sixpacktouch@gmail.com?subject=Touch Rugby Query">Six Pack Web Design</a>
            </div>

        </div>
    </footer>

    <a href="#0" class="cd-top">Top</a>

    <!-- ==============================================
      Scripts Section
    ================================================ -->

    <script src="js/modernizr.js"></script> <!-- Modernizr -->

    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/custom_script.js"></script>

    <!-- Google Map API & JavaScript -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMJffbv1ZCbnXlMBRbXLiQAVcwBvfSKAk&callback=initMap"></script>
    <script src="js/google_maps.js"></script>

    <!-- Slick Carousel CDN -->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- Own Slick Implementation -->
    <script src="js/slick_snippets.js"></script>

    <!-- Fort Awesome Glyphicons -->
    <script src="https://use.fortawesome.com/f07b9ec1.js"></script>

    <!-- Google Analytics-->
     <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-93829327-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- LightWidget WIDGET -->
    <script src="//lightwidget.com/widgets/lightwidget.js"></script>

    <!-- Change ets-btn text on click -->
    <script src="js/button-toggle.js"></script>

</body>

</html>
