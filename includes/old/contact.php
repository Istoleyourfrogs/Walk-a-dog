<?php
require_once "includes/header.inc.php";
?>
<!-- happyclient start -->
<section class="clients section grey-background">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Contact us</h2>
            <p>Need information or have a question for us? We are here to help!</p>
            <span class="colorborder"></span>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <form method="post" action="../contact.inc.php">
                    <div class="form-group">
                        <label for="ContactName">Name</label>
                        <input type="text" class="form-control" id="ContactName" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="ContactEmail">Email address</label>
                        <input type="email" class="form-control" id="ContactEmail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="ContactMessage">Your message</label>
                        <textarea class="form-control" rows="5" id="ContactMessage" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12" >
                <div style="width: 100%" class="googlemaps">
                        <iframe width="100%" height="500" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;coord=46.094617, 19.662093&amp;q=Marka%20Ore%C5%A1kovi%C4%8Ba%2016%2C%20Subotica%2C%20Serbia+(walk%C2%B7a%C2%B7dog)&amp;ie=UTF8&amp;t=k&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            <a href="https://www.maps.ie/map-my-route/">Plot a route map</a>
                        </iframe>
                </div>
                <br />
            </div>
        </div>

    </div>
</section>
<!-- happyclient end -->

<?php
require_once "includes/footer.inc.php";
?>