<?php require_once 'assets/include/config.inc.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Početna strana | Besplatni mali oglasi</title>
<meta name="author" content="Milan Janković">
<meta name="subject" content="Besplatni mali oglasi">
<meta name="Description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Classification" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta name="Keywords" content="besplatni,mali,oglasi.video,slika,">
<meta name="Language" content="Србија">
<meta HTTP-EQUIV="Expires" content="Never">
<meta HTTP-EQUIV="CACHE-CONTROL" content="PUBLIC">
<meta name="Copyright" content="Milan Janković">
<meta name="Designer" content="Milan Janković">
<meta name="Publisher" content="Milan Janković">
<meta name="distribution" content="Global">
<meta name="Robots" content="INDEX,FOLLOW">
<meta name="zipcode" content="18000">
<meta name="city" content="Niš">
<meta name="country" content="Srbija">
<meta property="og:title" content="Početna strana | Besplatni mali oglasi">
<meta property="og:site_name" content="Besplatni Oglasi">
<meta property="og:url" content="http://besplatni-oglasi.esy.es/početna-strana">
<meta property="og:description" content="Potpuno besplatn mali oglasi sa ili bez forogtafije">
<meta property="og:type" content="article">
<meta property="og:image" content="">
<?php include_once("assets/include/meta-search-engines.inc.php") ?>
    <!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
  

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php include_once("assets/include/analyticstracking.php") ?>

<?php include_once("assets/include/facebook_sdk.php") ?>


<?php include_once("assets/include/header.inc.php") ?>

<?php include_once("assets/include/nav.inc.php") ?>

<?php include_once("assets/include/show-instant-search-resault.inc.php") ?>

<div class="container">
<br>
<h3>Moje poruke</h3>
<br>
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Mail <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Poruke</a></li>
                    <li><a href="#">Konrakti</a></li>
                    <li><a href="#">Zadaci</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Split button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default">
                    <div class="checkbox" style="margin: 0;">
                        <label>
                            <input type="checkbox">
                        </label>
                    </div>
                </button>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span><span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Sve</a></li>
                    <li><a href="#">Nijedna</a></li>
                    <li><a href="#">Pročitane</a></li>
                    <li><a href="#">Nepročitane</a></li>
                    <li><a href="#">Obeležene</a></li>
                    <li><a href="#">Neobeližene</a></li>
                </ul>
            </div>
            <button type="button" class="btn btn-default" data-toggle="tooltip" title="Refresh">
                   <span class="glyphicon glyphicon-refresh"></span>   </button>
            <!-- Single button -->
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Još <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Obeleži kao pročitano</a></li>
                    <li class="divider"></li>
                    <li class="text-center"><small class="text-muted">Izaberite poruku</small></li>
                </ul>
            </div>
            <div class="pull-right">
                <span class="text-muted"><b>1</b>–<b>50</b> od <b>277</b></span>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <a href="#" class="btn btn-danger btn-sm btn-block" role="button">Nova poruka</a>
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><span class="badge pull-right">42</span> Primaljene poruke </a>
                </li>
                <li><a href="">Obeležene</a></li>
                <li><a href="">Važne</a></li>
                <li><a href="">Poslate poruke</a></li>
                <li><a href=""><span class="badge pull-right">3</span>Skice</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Glavne</a></li>
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                    Socojalne mreže</a></li>
                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>
                    Promocije</a></li>
                <li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">
                </span></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                            <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                                class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span></a><a href="#" class="list-group-item">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                        </label>
                                    </div>
                                    <span class="glyphicon glyphicon-star-empty"></span><span class="name" style="min-width: 120px;
                                        display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                                    <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                                        class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                        </span></span></a><a href="#" class="list-group-item read">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">
                                                </label>
                                            </div>
                                            <span class="glyphicon glyphicon-star"></span><span class="name" style="min-width: 120px;
                                                display: inline-block;">Bhaumik Patel</span> <span class="">This is big title</span>
                                            <span class="text-muted" style="font-size: 11px;">- Hi hello how r u ?</span> <span
                                                class="badge">12:10 AM</span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                                </span></span></a>
                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">Ovaj tab je prazan..</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    Ovaj tab je prazan.</div>
            </div>


        </div>
    </div>
</div>







<?php include_once("assets/include/footer.inc.php") ?>

<?php include_once("assets/include/jqueryscript.inc.php") ?>

<?php include_once("assets/include/ajax-live-search-script.php") ?>

<script type="text/javascript" src="/assets/js/list-grid-script-view-add-page.js"></script>

<?php include_once("assets/include/piwik_script.php") ?>
  </body>
</html>