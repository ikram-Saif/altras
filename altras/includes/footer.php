
<footer>
    <div class="contain">
        <div class="flex">
            <div class="col">
                <div class="inner">
                    <h4>Legal</h4>
                    <ul class="lst">
                        <li><a href="antiMoney.php">Anti money laundering</a></li>
                        <li><a href="complaintPolicy.php">Complaint Policy</a></li>
                        <li><a href="consumerProtection.php">Consumer protection</a></li>
                        <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="terms-of-use.php">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Address</h4>
                    <ul class="lst">
                        <li>156 Great Charles Street Queensway Birmingham West Midlands B3 3HN UNITED KINGDOM</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="inner">
                    <h4>Contact Info</h4>
                    <ul class="lst flagLSt flex">
                        <li><span><img src="<?= $baseurl ?>images/gb.svg"></span><a href="tel:+13152921905">+13152921905</a></li>
                        <li><span><img src="<?= $baseurl ?>images/us.svg"></span><a href="tel:+13152921905">+13152921905</a></li>
                        <li><span><img src="<?= $baseurl ?>images/ca.svg"></span><a href="tel:+13436880846">+13436880846</a></li>
                        <li><span><img src="<?= $baseurl ?>images/fr.svg"></span><a href="tel:+33176633282">+33176633282</a></li>
                        <li><span><img src="<?= $baseurl ?>images/ie.svg"></span><a href="tel:+35316571584">+35316571584</a></li>
                        <li><span><img src="<?= $baseurl ?>images/it.svg"></span><a href="tel:+3968958014">+3968958014</a></li>
                        <li><span><i class="fa fa-envelope-o"></i></span><a href="" class="footerMailLnk">info@altras.co.uk</a></li>
                    </ul>
                </div>
            </div>

            
            <div class="col">
                <div class="inner">
                    <h4>Join our mailing list</h4>
                    <form action="" method="post">
                        <label for="email">Stay up to date with the latest news and deals!</label>
                        <div class="inside">
                            <input type="text" name="email" id="email" class="txtBox" placeholder="Enter your email address">
                            <button type="submit" class="webBtn blueBtn">Subscribe!</button>
                        </div>
                    </form>
                    

                    
                </div>
                <div class="inner">
                    <h4>Follow us</h4>
                    <ul class="social flex">
                        <li><a href="https://facebook.com/Altrasinternational" target="_blank" class="facebook"><img src="<?= $baseurl ?>images/facebook.png"></a></li>
                        <li><a href="https://twitter.com/altras_int" target="_blank" class="twitter"><img src="<?= $baseurl ?>images/twitter.png"></a></li>
                        <li><a href="https://www.instagram.com/altras_int" target="_blank" class="instagram"><img src="<?= $baseurl ?>images/instagram.png"></a></li>
                        <li><a href="?" target="_blank" class="linkedin"><img src="<?= $baseurl ?>images/linkedin.png"></a></li>
                        <li><a href="https://www.youtube.com/user/altras1970/featured" target="_blank" class="youtube"><img src="<?= $baseurl ?>images/youtube.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
    <div class="copyright relative">
        <div class="contain">
            <div class="inner semi">
                <p>All rights reserved to Altras International Limited</p>
                <!-- <ul class="list relative">
                    <li><a href="about.php">About us</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                        <li><a href="calculate.php">Calculate</a></li>
                        <li><a href="branches.php">Our Branches</a></li>
                        <li><a href="signup.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="faq.php">Faq's</a></li>
                </ul> -->
            </div>
        </div>
    </div>
</footer>
<div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons fa fa-comments-o"></i>
  </div>
  
  <div class="chat-box">
    <div class="chat-box-header">
      <p>Let's Chat? - Online</p>
      <span class="chat-box-toggle minimizeToggle"><i class="fi-minus"></i></span>
      <span class="chat-box-toggle"><i class="fi-cross"></i></span>
    </div>
    <div class="chat-box-body" id="inboxNew">
      <div class="chat-box-overlay">   
      </div>
      <div class="chat-logs chat">
         <div class="buble me">
            <div class="ico"><img src="<?= $baseurl ?>images/users/4.jpg" alt=""></div>
            <div class="outerText">
                <div class="txt">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, temporibus porro ipsam facere ipsum tenetur quaerat laudantium saepe beatae et est laborum doloremque.</p>
                    <p>In debitis maiores libero excepturi! Incidunt, consectetur eius eveniet inventore quidem exercitationem! Vel alias qui officiis similique optio non dolore assumenda itaque.</p>
                </div>
            </div>
        </div>
        <div class="buble you">
            <div class="ico"><img src="<?= $baseurl ?>images/users/1.jpg" alt=""></div>
            <div class="outerText">
                <div class="myName">
                    Aleena Justin
                </div>
                <div class="txt">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, temporibus porro ipsam facere ipsum tenetur quaerat laudantium saepe beatae et est laborum doloremque.</p>
                    <p>In debitis maiores libero excepturi! Incidunt, consectetur eius eveniet inventore quidem exercitationem! Vel alias qui officiis similique optio non dolore assumenda itaque.</p>
                </div>
            </div>
        </div>
      </div><!--chat-log -->
    </div>
    <div class="chat-input">      
      <form>
        <input type="text" id="chat-input" placeholder="Send a message..."/>
        <button type="button" class="atchBtn uploadImg atchBtnNew" data-image-src=""><i class="fa fa-paperclip"></i></button>
        <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
      <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
      </form>      
    </div>
  </div>
<!-- Main Js -->
<script type="text/javascript" src="<?= $baseurl ?>js/main.js?v=1.0"></script>
<script type="text/javascript">
      AOS.init({
        easing: 'ease-in-out-sine',
        disable: window.innerWidth <= 767
      });
</script>
<div class="popup" data-popup="transectionDetails">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="crosBtn"></div>
                    <div class="minimizeBtn"></div>
                    <h2>Transection History</h2>
                        <ul class="transectionLstngPopup">
                            <li>Transection No <span>2437704</span></li>
                            <li>Transection Date <span>2020-02-27 / 10:09</span></li>
                            <li>Status <span>Decline</span></li>
                            <li>Receiver Name <span>Asma Muhammad</span></li>
                            <li>Receiver Country <span>United State</span></li>
                            <li>Receiver City <span>France</span></li>
                            <li>Receiver Phone <span>+32-283-3827</span></li>
                            <li>Received Amount <span>$6589</span></li>
                            <li>Sent Amount <span>$6500</span></li>
                            <li>Exchange Rate <span>$98</span></li>
                            <li>Bank Delivery Fees <span>$10</span></li>
                            <li>Service Fees <span>$06</span></li>
                            <li>Total Paid <span>$9284</span></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" data-popup="receiverDetail">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="crosBtn"></div>
                    <h2>Receiver Details</h2>
                        <ul class="transectionLstngPopup">
                            <li>Name <span>Asma Muhammad</span></li>
                            <li>Country <span>United State</span></li>
                            <li>City <span>France</span></li>
                            <li>Transfer Purpose <span>Family Maintenance</span></li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" data-popup="transectionStatus">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="crosBtn"></div>
                    <h2>Transection Status</h2>
                    <ul class="transectionLstngPopup transectionStatusLst">
                        <li>Transection delivery has been failed <span>2020-02-27 / 10:09</span></li>
                        <li>Recipient has been called and informed about the transection <span>2020-02-27 / 10:09</span></li>
                        <li>Transection delivery has been deposited into recipients Bank account <span>2020-02-27 / 10:09</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


