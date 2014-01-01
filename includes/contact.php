<?php
	$title = "Contact";
	include("head.php");
?>
<div class="bg-content"> 
      <!-- content -->
      <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
        <article class="span8">
              <h3>Contact Me</h3>
              <div class="inner-1">
            <form id="contact-form">
                  <div class="success"> Your message has been sent succesfuly!<strong> We will be in touch soon.</strong> </div>
                  <fieldset>
                <div>
                    <label class="name">
                    <input type="text" value="Your name">
                  <br>
                    <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                  <div>
                    <label class="phone">
                    <input type="tel" value="Telephone">
                    <br>
                    <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div>
                    <label class="email">
                    <input type="email" value="Email">
                    <br>
                    <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div>
                    <label class="message">
                    <textarea>Message</textarea>
                    <br>
                    <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                    </div>
                <div class="buttons-wrapper"> <a class="btn btn-1" data-type="reset">Clear</a> <a class="btn btn-1" data-type="submit">Send</a></div>
              </fieldset>
                </form>
          </div>
            </article>
        <article class="span4">
              <h3>Contact info</h3>
              <div class="map">
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=lubbocktexas&amp;aq=&amp;sll=31.968599,-99.901813&amp;sspn=23.168934,43.022461&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Lubbock,+Texas&amp;ll=32.7688,-101.821289&amp;spn=6.464575,9.338379&amp;z=6&amp;iwloc=A&amp;output=embed"></iframe>
          <address class="address-1">
          	<span>&zwnj;</span><u>James Little</u><br />
          	<span>Mobile:</span>(806)577-8990<br />
            <span>E-mail:</span><a href="#" class="mail-1">james.little@member.fsf.org</a>
          <div class="overflow">

           </div>
          </address>
          </article>
      </div>
        </div>
  </div>
    </div>
<?php include("foot.php"); ?>