<?php
// common include
include('inc/connection.php');

// set template
$tpl = "indextpl.html";
$sezione = basename(__FILE__, '.php');
$_section = $sezione;
if(isset($_POST['flat'])){
exec('sudo -H -u mpd mixerpreset flat');
}
if(isset($_POST['classical'])){
exec('sudo -H -u mpd mixerpreset classical');
}
if(isset($_POST['club'])){
exec('sudo -H -u mpd mixerpreset club');
}
if(isset($_POST['dance'])){
exec('sudo -H -u mpd mixerpreset dance');
}
if(isset($_POST['headphones'])){
exec('sudo -H -u mpd mixerpreset headphones');
}
if(isset($_POST['bass'])){
exec('sudo -H -u mpd mixerpreset bass');
}
if(isset($_POST['treble'])){
exec('sudo -H -u mpd mixerpreset treble');
}
if(isset($_POST['large_hall'])){
exec('sudo -H -u mpd mixerpreset large_hall');
}
if(isset($_POST['live'])){
exec('sudo -H -u mpd mixerpreset live');
}
if(isset($_POST['party'])){
exec('sudo -H -u mpd mixerpreset party');
}
if(isset($_POST['pop'])){
exec('sudo -H -u mpd mixerpreset pop');
}
if(isset($_POST['raggae'])){
exec('sudo -H -u mpd mixerpreset raggae');
}
if(isset($_POST['rock'])){
exec('sudo -H -u mpd mixerpreset rock');
}
if(isset($_POST['ska'])){
exec('sudo -H -u mpd mixerpreset ska');
}
if(isset($_POST['soft_rock'])){
exec('sudo -H -u mpd mixerpreset soft_rock');
}
if(isset($_POST['soft'])){
exec('sudo -H -u mpd mixerpreset soft');
}
if(isset($_POST['techno'])){
exec('sudo -H -u mpd mixerpreset techno');
}
header('Location: index.php');
?>
