<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page | CellPak Solutions</title>
    <meta name="description" content="About Us | CellPak Solutions">

    <?php include 'head.php'; ?>
</head>

<body id="page-landing" class="page inner-page landing-page">

    <?php include 'header.php'; ?>

    <section id="page-banner">
        <img class="img-responsive inline" src="ui/images/banner-landing-page.jpg">
    </section>

    <main class="content-wrapper">
        <div class="container">
            <div class="row">                
                <section class="col-xs-12 main-content">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1>Download of the Month</h1>
                        </div>
                    </div>
                    <hr /> <!--   Horizontal Line   -->
                    <div class="row landing-wrapper">
                        <div class="col-xs-12 col-sm-8">
                            <h3>Jargon Buster - Design & Print</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4">
                                    <img class="img-responsive" src="ui/images/landing-page-images.png">
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <p>We now offer our expertise across the broader Card and Device markets: everything from membership cards to top-up cards, M2M SIMs, and many categories of FMCE and luxury personal electronics.</p>
                                    <p>We're known as thought leaders and innovators in our niche but above all, we're known for simply getting the job done (and well).  We are highly creative and happy to challenge, but our solutions will always be real world and results-focussed - we know when and how to be pragmatic.</p>
                                    <p>We're also very proud of our reputation for being approachable, genuine and caring.</p>
                                    <p>We believe in delivering beyond expectations, being speedy and responsive, and above all working in true partnership.</p>
                                    <p>We strive to add lots of value but never any fuss.</p>
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <form action="" id="free-download" method="POST" role="form">
                                <img class="img-responsive free-download-image" src="ui/images/form-free-download.png">                                
                                <label for="">Required <span>*</span></label>
                                <div class="form-group">
                                    <label for="name"><strong>Name</strong> <span>*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="email"><strong>Email Address</strong> <span>*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="company"><strong>Company Name</strong> <span>*</span></label>
                                    <input type="text" class="form-control" id="company" name="company" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="job"><strong>Job Title</strong></label>
                                    <input type="text" class="form-control" id="job" name="job" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="web"><strong>Web Address</strong></label>
                                    <input type="url" class="form-control" id="web" name="web" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="tel"><strong>Telephone Number</strong> <span>*</span></label>
                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="">
                                </div>
                               
                                    <label for="tel"><strong>Subscribe to our monthly email</strong> <span>*</span></label>
                                 <div class="form-group">
                                    <input type="radio" name="newsletter" id="Yes" value="Yes">
                                    <label class="checkbox-inline" for="Yes"><span></span> Yes </label>
                                    <input type="radio" name="newsletter" id="No" value="No">
                                    <label class="checkbox-inline" for="No"><span></span> No </label>
                                </div>
                                <p>We respect your privacy. View our <a href="#">Privacy Policy</a></p>
                                <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary btn-learnmore">Learn more</button>
                                </div>
                            </form>
                        </div>                        
                    </div>
                    
                </section>
            </div>
        </div>    
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>