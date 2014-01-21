<?php
	$title = "Projects";
	include("head.php");
?>
<style>
	img.project{
		border: 2px   #29c solid;
	}
</style>
  <div class="bg-content"> 
      <!-- content -->
      <div id="content"><div class="ic"></div>
    	<div class="container">
        	<div class="row">
        		<article class="span12">
              		<h4>Projects</h4>
            	</article>
        		<div class="clear"></div>
        		<ul class="thumbnails thumbnails-1 list-services">
      				<li class="span4">
            			<div class="thumbnail thumbnail-1"> <img class="project" src="img/this_website.png" alt="" />
                  			<section> <a href="https://github.com/Lamez/Portfolio-Website" class="link-1">This Website</a>
                				<p align="left"><strong>Language</strong>: HTML, JS, CSS, PHP</p>
                                <p align="left"><strong>Status</strong>: Incompleted, Active</p>
                                <p align="left">Whoa, that's meta. I took the "off the shelf" approach to creating this website. I am not much of a designer, but more of a devloper. That being said, this website is bassed of the template "Codester".</p> 
              				</section>
                		</div>
          			</li>
              		<li class="span4">
            			<div class="thumbnail thumbnail-1"> <img class="project" src="img/trianglegame.png" alt="" />
                  			<section> <a href="https://github.com/Lamez/Triangle-Game" class="link-1">Cracker Barrel Triangle Game</a>
                				<p align="left"><strong>Language</strong>: C++</p>
                                <p align="left"><strong>Status</strong>: Incomplete, Active</p>
                                <p align="left">This project was to teach me how to solve puzzles using the general backtracking algorithm. The idea of the game is, you select your starting peg, then you jump a peg to an empty location and remove the middle peg, kind of like checkers. You win when you only have one peg left.</p> 
              				</section>
                		</div>
          			</li>
                	<li class="span4">
            			<div class="thumbnail thumbnail-1"> <img class="project" src="img/feed_me.png" alt="" />
                  			<section> <a href="https://github.com/Lamez/FeedMe" class="link-1">FeedMe</a>
                				<p align="left"><strong>Language</strong>: HTML, JS, CSS, PHP</p>
                                <p align="left"><strong>Status</strong>: Incompleted, Active</p>
                                <p align="left">This project takes any given website and turns into a phone application. The idea is to have this back-end system website to parse the given website and turn it into a RSS feed which would periodically be updated. The phone application will read the RSS feed and produce usuable content to the user. This porject will teach me about mobile development.</p> 
              				</section>
                		</div>
          			</li>
                    <li class="span4">
            			<div class="thumbnail thumbnail-1"> <img class="project" src="img/proxy.png" alt="" />
                  			<section> <a href="/downloads/building_a_transparent_proxy_server.pdf" class="link-1">Transparent Proxy Server</a>
                				<p align="left"><strong>Language</strong>: English</p>
                                <p align="left"><strong>Status</strong>: Completed, inactive</p>
                                <p align="left">I really wanted to create a transparent proxy server, mainly as a learning experience and to say I have done so. The whole learning process took me about a year, I worked on it off and on. To display my efforts and to help my fellow nerds I created a white paper on how create one on your own.</p> 
              				</section>
                		</div>
          			</li>
            	</ul>
      		</div>
        </div>
 	 </div>
</div>
<?php include("foot.php"); ?>