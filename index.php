<?php
require_once("ipaDistrubution.php");
$folder = "";
if( isset( $_REQUEST['f'] ) )
	$folder = $_REQUEST['f'] . "/";
?>
<html class="pixel-ratio-2 retina ios ios-11 ios-11-0 ios-gt-10 ios-gt-9 ios-gt-8 ios-gt-7 ios-gt-6 watch-active-state"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui"><meta name="apple-mobile-web-app-capable" content="yes"><link rel="stylesheet" href="css/framework7.ios.min.css"><link rel="stylesheet" href="css/framework7.ios.colors.min.css"><link rel="stylesheet" href="css/main.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://unpkg.com/ionicons@4.4.2/dist/css/ionicons.min.css" rel="stylesheet"><script type="text/javascript" src="js/framework7.min.js"></script></head><body id="body"><div class="statusbar-overlay"></div><div class="views tabs navbar-through toolbar-through"><script>
    document.addEventListener('touchmove', function (event) {
  if (event.scale !== 1) { event.preventDefault(); }
}, false); </script><div class="bg"></div>
<div data-page="index-4" class="page4"><div class="container"><div class="container"><div class="box-s"><form method="post"><span class="title-s p-b-34 p-t-27">Signer IPA </span><div class="txt2">only url's .ipa</div><div class="wrap-input100 validate-input" data-validate="Enter username"><input name="url" size="50" placeholder="الصق الرابط الذي تريد توقيعه" class="input100" required><span class="focus-input100" data-placeholder="🚀"></span></div><div class="container-login100-form-btn" onclick="makesgin()"><input  name="submit" type="submit" value="🚀	وقّع" class="login100-form-btn"  onclick="window.location.href='/'"></div></form></div></div><div class="app-card-2"><div class="content-block" style="margin-top:0px; margin-bottom:0px; padding-top:10px; padding-bottom:10px;"><h4 style="margin:0px;">عمليات التوقيع الاخيره</h4></div><div class="list-block media-list"><ul><?php
$plists = glob( 'ipa/' . $folder . "*.ipa");
if( is_array( $plists ) && count( $plists ) > 0 ) {
foreach( $plists as $plist_path ) {
$ipa = new ipaDistrubution( $plist_path, $folder );

$link = $ipa->applink;
$provision_profile = $ipa->mobileprovision;
$icon = $ipa->appicon;
$app_name = $ipa->appname;
$bundle_version = $ipa->bundleversion;
?><div class="item-content"><div class="item-media"><img class="app-icon" src="<?=$icon?>"></div><div class="item-inner"><div class="item-title-row"><div class="item-title"><?=$app_name?></div><div class="item-after"><a href="#" onclick="window.location='itms-services://?action=download-manifest&url=<?=$link?>';" class="button button-fill button-round" style="background: #F0F1F6; color: #007AFF; font-weight:bold;">GET</a></div></div><div class="item-subtitle">Version:<?=$bundle_version?></div></div></div><?php
}
} else {
?>

<?php
}
?></ul></div><br><center><div id="unmake"><div class="outer"></div><div class="inner"></div>
</div></center><script>function makesgin() {
   var element = document.getElementById("unmake");
   element.classList.add("ajaxloader3");
}</script><?php if (!isset($_POST['submit'])) die();
    $destination_folder = 'rsn/files/'; // لا تغير شي هنا
    $url = $_POST['url']; $newfname = $destination_folder . basename($url);
    $file = fopen ($url, "rb");
    if ($file) { $newf = fopen ($newfname, "wb");
      if ($newf)
      while(!feof($file)) { fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 ); }
    }
    if ($file) { fclose($file); }
    if ($newf) { fclose($newf); }
    // مكان اوامر التوقيع قم بتغييرها حسب مسار الملفات عندك
$output = shell_exec('chmod +x /Users/abdulsalmabdullh/Documents/test/rsn/sgin.sh ');// هذا
$output = shell_exec('/Users/abdulsalmabdullh/Documents/test/rsn/sgin.sh ');// وهذا 
    ?></div></div></div><div class="txt2">made with love &lt;3 by @IOS4bd</div><center><a href="twitter:///user?screen_name=IOS4bd" class="button"><ion-icon name="logo-twitter"></ion-icon>follow me</a></center></div><script src="https://unpkg.com/ionicons@4.4.2/dist/ionicons.js"></script></body></html>



