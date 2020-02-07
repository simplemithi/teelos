<?php include 'nav/header.php'; ?>

<div class="container">
    <form class="contact_form text-center">
        <h4> Let's get in touch... </h4>

        <div class="col-md-6 col-md-offset-3">
            <input type="text" id="fname" class="form-control" placeholder="First name">
        </div>
        <div class="col-md-6 col-md-offset-3">
            <input type="text" id="lname" class="form-control" placeholder="Last name">
        </div>

        <div class="col-md-6 col-md-offset-3">
            <input type="email" id="email" class="form-control" placeholder="E-mail">
        </div>

        <div class="col-md-6 col-md-offset-3">
            <input type="text" id="phone" class="form-control" placeholder="Phone number" aria-describedby="phone">
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