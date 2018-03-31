
<?php 
include "header.php";
 ?>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Anasayfa</a></li>
			  <li class=""><a href="kadin.php">Kadın</a></li>
			  <li class=""><a href="erkek.php">Erkek</a></li>
			  <li class=""><a href="cocuk.php">Çocuk</a></li>
			</ul>


			<form  class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Oturum Aç <b class="caret"></b></a>
				<div class="dropdown-menu">

				<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Hatırla
					</label>
					<button type="submit" class="shopBtn btn-block"> Oturum Aç</button>
				  </div>
				</form>


				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<hr class="soften">
	<div class="well well-small">
	<h1>Mağazalarımız</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">
		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Newbury+Street,+Boston,+MA,+United+States&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>Contact Details</h4>
		<h5>
			2601 Mission St.<br/>
			San Francisco, CA 94110<br/><br/>
			 
			info@mysite.com<br/>
			﻿Tel 123-456-6780<br/>
			Fax 123-456-5679<br/>
			web:wwwmysitedomain.com
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>E-Posta Gönder</h4>


		<form action="islem.php" method="POST" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="Adınız" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="E-mail" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="Konu" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Gönder</button>

        </fieldset>
      </form>

		</div>
	</div>

	
</div>
<!-- 
Clients 
-->
<?php include 'footer.php'; ?>