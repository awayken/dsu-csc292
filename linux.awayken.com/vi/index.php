<html>
<head>
<title>Miles Rausch - vi Project</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<body>

<div id="content">

<div class="links">
<p><a href="Miles Rausch - vi.ppt" title="Miles Rausch - vi.ppt">Miles Rausch - vi.ppt</a> (the actual PowerPoint)</p>
<p><a href="Miles Rausch - vi.htm" title="Miles Rausch - vi">Miles Rausch - vi.htm</a> (PowerPoint made into a webpage)</p>
<p><a href="?page=main" title="vi Search, Replace, Buffer Slides">Slides</a> | <a href="?page=tutorial" title="vi Search, Replace, Buffer Tutorial">Tutorial</a></p>
</div>

<?php  if(!$page || $page=="main") {  ?>

<div class="slide">
<h1>Miles Rausch - vi</h1>
	<h3>search, replace, and buffers</h3>
</div>

<div class="slide">
<h2>What Will I Cover?</h2>
	<h3>Search</h3>
	<p>Commands</p>
	<p?Why?</p>

	<h3>Replace</h3>
	<p>Commands</p>
	<p?Why?</p>

	<h3>Buffers</h3>
	<p>Commands</p>
	<p?Why?</p>
</div>

<div class="slide">
<h2>Real Quick vi Briefing</h2>
	<h3>According to Answers.com</h3>
	<p>Stands for Visual Interface.</p>
	<p>A Unix full-screen text editor that can be run from a terminal or the system console.</p>
	<p>It is a fast, programmer-oriented utility.</p>
	<p>It rocks harder than Mt. Rushmore.</p>
</div>

<div class="slide">
<h2>Search Command</h2>
	<h3>/string</h3>
	<p>Search forward for string</p>
	<h3>?string</h3>
	<p>Search back for string</p>
	<h3>n</h3>
	<p>Search for next instance of string</p>
	<h3>N</h3>
	<p>Search for previous instance of string</p>
</div>

<div class="slide">
<h2>Why Search?</h2>
	<h3>To find information amongst information</h3>
	<h3>To navigate</h3>
	<h3>Fundamental necessity of modern word processing programs</h3>
	<h3>Can use pattern matching</h3>
</div>

<div class="slide">
<h2>Replace Command</h2>
	<h3>:[range]s/pattern/string/flags</h3>
	<p>Replace pattern with string according to flags.  Is usually used with a [range].  Range for entire file can be 1,$ or %</p>
	<h3>g</h3>
	<p>Flag - Replace all occurences of pattern</p>
	<h3>c</h3>
	<p>Flag - Confirm replaces</p>
	<h3>&</h3>
	<p>Repeat last :s command</p>
</div>

<div class="slide">
<h2>Why Replace?</h2>
	<h3>Update a file</h3>
	<h3>To make many corrections</h3>
	<h3>To update a file for regional differences</h3>
</div>

<div class="slide">
<h2>Buffers Command</h2>
	<h3>:e filename</h3>
	<p>This will load the filename into the vi buffer</p>
	<h3>:e#</h3>
	<p>This will switch between buffers, effectively switching between open files.</p>
</div>

<div class="slide">
<h2>Why Buffers?</h2>
	<h3>Vi provides facilities to edit several files at once.</h3>
	<h3>It stores each text file in its own text buffer.</h3>
	<h3>Text buffers exist inside Vi; even when they are not visible.</h3>
	<h3>Only 2 buffers - active and inactive</h3>
</div>

<div class="slide">
<h2>Demonstration</h2>
	<h3>Are there any question or comments?</h3>
	<h3>On to the demonstration then</h3>
</div>

<?php  } elseif ($page == "tutorial") {  ?>

<div class="slide">
<h1>The Tutorial</h1>
	<h3>search...</h3>
</div>

<div class="slide" style="width: 600px; overflow: auto;">
<h2>search.doc</h2>
	<p>This was written by my cousin David, also.  He's kinda getting into this whole comedy writing thing.</p>
	<p>Tonite, Ortonville suffered an embarrasing lost to one of our rival towns Milbank.  I, David Rausch - I'm sure you've all heard of me 'cuz i'm famous, played tonite.  This was the cause of much celebration among some of the fans, and much celebration within my mind.  I bet you the Milbank fans were furious and much afraid of Ortonville's secret weapon.  I am such a secret weapon that almost no one we play has heard of me.  Can you believe that!?</p>
	<p>The famous David is not so famous when he becomes a weapon of secrecy.</p>
	<p>I am let loose to wreak famous havoc on opposing teams when our team is in greatest need - mostly when were down by more than 20.  I accept my benched role because of my feelings of sadness for the other teams.  I wouldn't want to play a secret weapon like myself either.</p>
	<p>Sometimes I am so secret my coach even forgets that I'm there!</p>
	<p>When coach looks my way, I know he is not really looking at me, but through me. I am so secret its like I'm not even there!  The last 2 games (Milbank included) the secret weapon has been released onto the court.</p>
	<p>Its been fun to get back into the flow of playing again.  Its weird being seen again after being a famous secret for so long.  Whether playing basketball or being a secret weapon, basketball has been fun and i have no qualms being either.  My role on the team is to accept what coach does and believe that it is for the good of the team.  If secret weapons need to stay secret than thats alright with me, I can still have a good time.</p>
	<p>If the secret weapon continues to be unleashed, hopefully I can drop the famous bomb on opposing teams (make a basket) and create disruption within their minds and/or soul or souls if they have more than one.</p>
	<p>Freaks.  Famous.</p>
	<p>Either way I am content and love doing nothing as much as I like doing something.</p>
	<p>Enjoy. If you don't laugh, i have failed in my purpose of writing it and have wasted more of my life than is acceptable.  It has made me realize how tired i am and that i have no real life.lol</p>
	<p>THE FAMOUS -</p>
	<p>David Rausch</p>
</div>

<div class="slide">
<h2>Search</h2>
	<h3>vi search.doc</h3>
	<h3>/famous</h3>
	<p>Hit "n" to move forward and find more results.</p>
</div>

<div class="slide">
<h2>Search</h2>
	<h3>?famous</h3>
	<p>Hit "N" to move backward and fine less results.</p>
</div>

<div class="slide">
<h2>Search</h2>
	<h3>/[a-z]hi[a-z]</h3>
	<p>Note the words that are found: this, thing, within, within, nothing, something</p>
</div>

<div class="slide">
<h1>The Tutorial</h1>
	<h3>... replace ...</h3>
</div>

<div class="slide" style="width: 600px; overflow: auto;">
<h2>replace.doc</h2>
	<p>This was written by my cousin David, also.  He's kinda getting into this whole comedy writing thing.</p>
	<p>Tonite, Ortonville suffered an embarrasing lost to one of our rival towns Milbank.  I, David Rausch - I'm sure you've all heard of me 'cuz i'm famous, played tonite.  This was the cause of much celebration among some of the fans, and much celebration within my mind.  I bet you the Milbank fans were furious and much afraid of Ortonville's secret weapon.  I am such a secret weapon that almost no one we play has heard of me.  Can you believe that!?</p>
	<p>The famous David is not so famous when he becomes a weapon of secrecy.</p>
	<p>I am let loose to wreak famous havoc on opposing teams when our team is in greatest need - mostly when were down by more than 20.  I accept my benched role because of my feelings of sadness for the other teams.  I wouldn't want to play a secret weapon like myself either.</p>
	<p>Sometimes I am so secret my coach even forgets that I'm there!</p>
	<p>When coach looks my way, I know he is not really looking at me, but through me. I am so secret its like I'm not even there!  The last 2 games (Milbank included) the secret weapon has been released onto the court.</p>
	<p>Its been fun to get back into the flow of playing again.  Its weird being seen again after being a famous secret for so long.  Whether playing basketball or being a secret weapon, basketball has been fun and i have no qualms being either.  My role on the team is to accept what coach does and believe that it is for the good of the team.  If secret weapons need to stay secret than thats alright with me, I can still have a good time.</p>
	<p>If the secret weapon continues to be unleashed, hopefully I can drop the famous bomb on opposing teams (make a basket) and create disruption within their minds and/or soul or souls if they have more than one.</p>
	<p>Freaks.  Famous.</p>
	<p>Either way I am content and love doing nothing as much as I like doing something.</p>
	<p>Enjoy. If you don't laugh, i have failed in my purpose of writing it and have wasted more of my life than is acceptable.  It has made me realize how tired i am and that i have no real life.lol</p>
	<p>THE FAMOUS -</p>
	<p>David Rausch</p>
</div>

<div class="slide">
<h2>Replace</h2>
	<h3>vi replace.doc</h3>
	<h3>:s/cousin/friend</h3>
	<p>Will only replace one instance of "cousin" with "friend" on the first line.</p>
</div>

<div class="slide">
<h2>Replace</h2>
	<h3>:%s/famous/frugal/g</h3>
	<p>Will replace all instances of "famous" with "frugal"</p>
</div>

<div class="slide">
<h2>Replace</h2>
	<h3>:%s/[a-z]hi[a-z]/unix/g</h3>
	<p>Will replace all instances of ?hi? with "unix"</p>
</div>

<div class="slide">
<h1>The Tutorial</h1>
	<h3>... buffers</h3>
</div>

<div class="slide">
<h2>Buffers</h2>
	<h3>vi search.doc</h3>
	<h3>:e replace.doc</h3>
	<p>Now both files are loaded into buffers in VI.</p>
</div>

<div class="slide">
<h2>Buffers</h2>
	<h3>:e#</h3>
	<p>vi switches back to search.doc.</p>
</div>

<?php  }  ?>

</div>
</body>
</html>