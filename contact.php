<?php include 'nav/header.php'; ?>

<div class="container">
    <form method="POST" action="contact_form_process.php" class="contact_form text-center">
        <h4> Let's get in touch... </h4>

        <div class="col-md-6 col-md-offset-3" style="font-weight:bold; padding:10px"> 
            <div class="col-md-6 pull-left"> 
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a style="color:#94c130" href="tel:00919019494942"> +919019494942 </a>
            </div>
              
            <div class="col-md-6 pull-right">   
                <i class="fa fa-at"></i>
                <a style="color:#94c130" href="mailTo:support@teelos.in"> support@teelos.in </a>
            </div>
        </div>

        <?php if (basename($_SERVER['REQUEST_URI']) == "success") { ?>
                <div class="col-md-6 col-md-offset-3 alert-info" style="border-radius:5px; color:#000; padding:10px; margin-top:5px; margin-bottom:5px;">
                    Thank you! <br />
                    We recieved your message and we will get back to you within 24 hours.
                </div>
        <?php } ?>

        <div class="col-md-6 col-md-offset-3" style="padding:0px">
            <div class="col-md-6">
                <input type="text" id="fname" name="fname" class="form-control" placeholder="First name">
            </div>
            <div class="col-md-6">
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Last name">
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail">
        </div>

        <div class="col-md-6 col-md-offset-3">
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone number" aria-describedby="phone">
        </div>

        <div class="col-md-6 col-md-offset-3">
            <textarea type="textarea" id="message" name="message" class="form-control" placeholder="Message" aria-describedby="message" rows="4" cols="50"> </textarea>
        </div>

        <div class="col-md-6 col-md-offset-3 custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="newsletter">
            <label class="custom-control-label" for="newsletter">Subscribe to our newsletter</label>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <button class="btn btn-success contact_submit_btn" type="submit">Send</button>
            <hr>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <p>
                By clicking
                <em>Sign up</em> you agree to our
                <a href="" target="_blank">terms of service</a>
            </p>
        </div>
    </form>
</div>

<?php include 'nav/footer.php'; ?>