<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Author" content="Dustin Schroeder, Lucas Michels, and Miles Rausch" />
	<meta name="Description" content="Linux.Awayken.Com is a guide to what my CSC292 Introduction to Unix course took on as a small group project: installing linux on mobile devices." />

	<link rel="stylesheet" type="text/css" href="http://linux.awayken.com/style/penguin.css" title="Gotta Go" />
	<link rel="shortcut icon" href="favicon.ico" />

	<title>Awayken.com | Linux</title>
</head>

<body>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>

<script type="text/javascript">
_uacct = "UA-96981-1";
urchinTracker();
</script>
<div id="banner"><h1>Installing Linux On Mobile Devices</h1></div>

<div id="navigation"><ul>
<li><a href="http://linux.awayken.com" title="Home">Home</a></li>
<li><a href="?page=fedora" title="Fedora Core 3 Linux">Fedora Core 3 Linux</a></li>
<li><a href="?page=gentoo" title="GENTOO Linux">GENTOO Linux</a></li>
<li><a href="?page=ubuntu" title="Ubuntu Linux">Ubuntu Linux</a></li>
<li><a href="?page=screenshots" title="Screenshots">Screenshots</a></li>
</ul></div>

<div id="main">

<?php if ($page==fedora) { ?>

<h2>April 5, 2005</h2>

<p>Fedora Core 3 Linux is a very easy, point-and-click kind of install.</p>

<h3>Details:</h3>
<ul><li>Personal desktop</li>
<li>Automatic partitioning</li>
<li>Remove all partitions</li>
<li>Automatic connection</li>
<li>No firewall</li>
<li>User name: csc292</li>
<li>Password: csc292</li>
<li>Install default</li></ul>

<h3 class="problems">Problems:</h3>
<ul><li>It then went through and detected what it could but the screen was still weird.</li>
<li>The Ethernet and wireless failed often in startup, but they worked in environment.</li>
<li>Of course, we had setbacks as people misplaced, lost, or forgot disks.</li></ul>

<h3 class="fixes">Fixes:</h3>
<ul><li>Changed resolutions to solve the screen issue.</li>
<li>By using the Activate/Disactivate options in the Ethernet control panel, I was able to get the eth0 working (but not the wireless).</li></ul>

<?php } elseif ($page==gentoo) { ?>

<h2>April 7, 2005</h2>

<p>GENTOO Linux is a very command driven, highly-interactive install.</p>

<h3>Details:</h3>
<ul><li>Our kernel was: linux-2.6.11-gentoo-r5</li>
<li>Root password: csc292</li>
<li>Three users: miles, dustin, and lucas</li>
<li>Mostly followed directions word for word</li></ul>

<h3 class="problems">Problems:</h3>
<ul><li>No ethernet</li>
<li>Missing several programs (we just have to emerge them)</li>
<li>dhcpcd doesn't run automatically</li>
<li>kernel does not have devfs support yet</li></ul>

<h3 class="fixes">Fixes:</h3>
<ul><li>emerge --sync</li>
<li>emerge world</li>
<li>Installed support for the ethernet card into the kernel, recompiled, and it works (lots of help from Seth and Mike)</li>
<li>Installed the DEVFS file system</li>
<li>emerged dhcpcd to add dhcp support</li>
<li>Changed eth0 to use dhcp instead of ip-specific</li>
<li>emerged lynx, xfce4 (more help from Seth and Mike), firefox, and gimp</li>
<li>Fixed and added framebuffer setup (help from Dan)</li></ul>

<h2>April 14, 2005</h2>

<p>Tried to install GENTOO Linux on a tablet.  Rushed through the install and botched it.</p>

<h3>Details:</h3>
<ul><li>Used the 2004.3 LiveCD to boot off of.</li>
<li>Got the install done in record time, just before class started</li></ul>

<h3 class="problems">Problems:</h3>
<ul><li>fstab file setup incorrectly.</li>
<li>File systems got all screwed up.</li></ul>

<h3 class="fixes">Fixes</h3>
<ul><li>Dan tried to fix it, but in the end I just decided to put it out of its misery.</li>
<li>The major fix was to just start over with Ubuntu.</li></ul>

<?php } elseif ($page==ubuntu) { ?>

<h2>April 7, 2005</h2>

<p>Ubuntu Linux has an install that is very similar to Fedora Core 3.  It is largely point and click.  The install, however, is not graphical, but a textual-graphical interface.  In any case, the install was easy, painfree, and quick.</p>

<h3>Details:</h3>
<ul><li>I used the Ubuntu 5.04 install discs</li>
<li>There were no real configuration questions in the install</li></ul>

<h3 class="problems">Problems:</h3>
<ul><li>Pen doesn't work properly</li>
<li>Won't autodetect USB mouse</li>
<li>Didn't come with GCC</li></ul>

<h3 class="fixes">Fixes:</h3>
<ul><li>Used the advanced Add or Remove Programs to get GCC</li></ul>

<?php } elseif ($page==screenshots) { ?>

	<h3>Fedora Core 3 Linux</h3>

	<p class="image"><a href="images/fedora_big.png" target="_blank" title="Fedora Core 3 Linux Screenshot"><img border="0" src="images/fedora_thumb.png" width="640" height="480" alt="A thumbnail version of our screenshot taken in Fedora Core 3 Linux" /></a></p>

	<h3>GENTOO Linux (Xfce)</h3>

	<p class="image"><a href="images/gentoo_x_big.png" target="_blank" title="GENTOO Linux Screenshot (Xfce)"><img border="0" src="images/gentoo_x_thumb.png" width="640" height="480" alt="A thumbnail version of our screenshot taken in GENTOO Linux" /></a></p>

	<h3>GENTOO Linux (Kde)</h3>

	<p class="image"><a href="images/gentoo_k_big.png" target="_blank" title="GENTOO Linux Screenshot (Kde)"><img border="0" src="images/gentoo_k_thumb.png" width="640" height="480" alt="A thumbnail version of our screenshot taken in GENTOO Linux" /></a></p>

	<h3>Ubuntu Linux</h3>

	<p class="image"><a href="images/ubuntu_big.png" target="_blank" title="Ubuntu Linux Screenshot"><img border="0" src="images/ubuntu_thumb.png" width="640" height="480" alt="A thumbnail version of our screenshot taken in Ubuntu Linux" /></a></p>

<?php } else { ?>
	<h2>Due: April 14, 2005</h2>

	<p><b>A team</b>: Miles Rausch (<i>team leader</i>), Dustin Schroeder, and Lucas Michels.</p>

	<p><b>B team</b>: Andrew Brunick and Carl Simonson</p>

	<h3>Goals:</h3>

	<ol><li class="done">Installation of Fedora Core 3 Linux on Laptop</li>
	<li class="done">Installation of GENTOO Linux Laptop</li>
	<li class="skip">Dual booting Windows XP and GENTOO Linux on Laptop</li>
	<li class="skip">Installation of Fedora Core 3 Linux on Tablet</li>
	<li class="skip">Installation of GENTOO Linux on Tablet</li>
	<li class="skip">Dual booting Windows XP and GENTOO Linux on Tablet</li>
	<li class="done">Installation of Ubuntu linux on Tablet</li>
	<li>Getting the pen to work in Ubuntu</li></ol>

	<p>We have heavily relied on the following sites for help.</p>

	<ul><li><a href="http://www.ubuntu.com/wiki" target="_blank" title="Ubuntu Linux Wiki">Ubuntu Linux Wiki</a></li>
	<li><a href="http://www.gentoo.org/doc/en/handbook/index.xml" target="_blank" title="GENTOO Linux Handbook">GENTOO Linux Handbook</a></li>
	<li><a href="http://fedora.redhat.com/download/" target="_blank" title="Fedora Core 3 Linux Download Page">Fedora Core 3 Linux Download Page</a></li></ul>

	<h2>Tom's Requirements</h2>

	<h3>Project Description</h3>

	<p>Installing various distibutions on mobile computing devices.</p>

	<h3>Why?</h3>

	<p><b>Lucas</b>: To learn more about installing linux on different machines.  And to learn more command-line based actions.</p>

	<p><b>Dustin</b>: I wanted to install a Linux, to see how you would go about it compared to Windows.</p>

	<p><b>Miles</b>: I wanted a successful install of Linux.  I was particularly interested in working with Gentoo Linux; it feels like you have more power over your system.  I was also interested in getting a Desktop Environment up and going.</p>

	<h3>Accomplishments, Major Steps, Challenges, Set-backs</h3>

	<p><b>Accomplishments</b>: Installed Fedora.  Installed Gentoo.  Kde and Xfce desktop environments working.  Installed Ubuntu.</p>

	<p><b>Set-backs</b>: New technology (pen not supported), times we could meet, wireless issues, various others.</p>

	<h3>Significant Resources Used or Created</h3>

	<p><b>Resources</b>: Gateway Solo Laptop (courtesy Wayne Pauli and CEX), Gateway m285 Tablet PC (courtesy Tom Halverson, Dr.), Fedora Core 3 install discs, Gentoo 2004.3 Minimal LiveCD, Ubuntu 5.04 install disc, EH200, EH200 lan internet, Seth, Mike, Dan and Matt (a little), and the websites above.</p>

	<h3>Wish list</h3>

	<p><b>Wish list</b>: Implementing Tablet PC functionality, Dual-booting.</p>

	<h3>How would someone carry on?</h3>

	<p><b>Implement Tablet PC functionality.</b></p>

<?php } ?></div>

</body>
</html>