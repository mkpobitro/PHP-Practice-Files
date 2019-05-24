<?php 
  include ('header.php');
?>
    <div class="login">
      <div class="container login-wrap">
        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
          <div class="login-form">
            <div class="sign-in-htm">
              <div class="avatarc">
                <img src="images/logoblack.png" alt="">
              </div>
              <div class="group">
                <input id="user" placeholder="User Name" required="required" type="text" class="input">
              </div>
              <div class="group">
                <input id="pass" type="password" placeholder="Password" class="input" data-type="password">
              </div>
              <div class="group">
                <input id="check" type="checkbox" class="check" checked>
                <label for="check"><span class="icon"></span> Keep me Signed in</label>
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign In">
              </div>
              <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <label for="tab-2">Dont Have Any Account?</label>
              </div>
            </div>
            <div class="sign-up-htm">
              <div class="avatarc">
                <img src="images/logoblack.png" alt="">
              </div>
              <div class="group">
                <input id="sname" placeholder="User Name" type="text" class="input">
              </div>
              <div class="group">
                <input id="password" placeholder="Password" type="password" class="input" data-type="password">
              </div>
              <div class="group">
                <input id="repassword" type="password" placeholder="Repeat Password" class="input" data-type="password">
              </div>
              <div class="group">
                <input id="email" placeholder="Email Address" type="text" class="input">
              </div>
              <div class="group">
                <input type="submit" class="button" value="Sign Up">
              </div>
              <div class="foot-lnk">
                <label for="tab-1">Already Member?</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--toper -->
    <div class="toper">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-scroll marginbot-30">
              <a href="#body" id="totop" class="btn btn-circle">
              <i class="fa fa-angle-double-up animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End toper -->

    <?php 
      include ('footer.php');
?>
      