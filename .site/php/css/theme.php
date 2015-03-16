<?php
namespace homework_fru1tme_theme;

//Some prep
header("content-type: text/css");

//Set default colors
$globalLogoDefault = "#99F";
$globalLogoHover = "#999";
$globalMenuBarBorder = "#AAA";
$globalMenuTabBorder = "#AAA";

$windowBackground = "#F9F9F9";
$windowText = "inherit";

$menuTabHover = "#00F";
$menuTabActive = "#0F0";

$sidebarBackground = "#EEE";

$sidebarLinkBackgroundDefault = "#FFF";
$sidebarLinkBackgroundHover = "#F9F9F9";
$sidebarLinkDefault = "#99F";
$sidebarLinkHover = "#000";

//Anything before
echo <<<CSS
@charset "UTF-8";
CSS;

echo <<<template

#global-menu-bar {
	border-color: $globalMenuBarBorder;
}
#global-logo a:link, #global-logo a:visited {
	color: $globalLogoDefault;
}
#global-logo a:hover, #global-logo a:active {
	color: $globalLogoHover;
}
#global-menu ul, #global-menu li {
	border-color: $globalMenuTabBorder;
}

.window-container > div {
	background-color: $windowBackground;
	color: $windowText;
}

.tabs li:hover {
	box-shadow: 4px -4px 15px -15px $menuTabHover inset,
			-4px -4px 15px -15px $menuTabHover inset;
}
.tabs li.active {
	box-shadow: 4px -4px 15px -15px $menuTabActive inset,
			-4px -4px 15px -15px $menuTabActive inset;
}

.sidebar-container > div {
	background-color: $sidebarBackground;
}
.sidebar-container a {
	background-color: $sidebarLinkBackgroundDefault;
	color: $sidebarLinkDefault;
}
.sidebar-container a:hover,
.sidebar-container a:active {
	background-color: $sidebarLinkBackgroundHover;
	color: $sidebarLinkHover;
}



template;
?>

