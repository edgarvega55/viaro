<?php 
    /* Template Name: Contact Template */
    get_header();
?>
<!-- #region title -->
<div id="main-pages" class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1> <?= get_the_title() ?> </h1>
            </div>
        </div>
    </div>
</div>
<!-- #endregion title -->

<!-- #region breadcrumb -->
<div class="col-12 container-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb nav-breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost/viaro/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= get_the_title() ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- #endregion breadcrumb -->

<!-- #region form -->
<div class="col-12 contact">
    <div class="container-fluid">
        <div class="row contact-big" id="contact-big-display">
            <div class="col-6">
                <h2>Contact Form</h2>
                <br>
                <form  method="POST" id="contact-form" >
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Your Name" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Enter Your Email" required="true">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter Your Phone" required="true">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="6" placeholder="Enter Your Message" required="true"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-contact-page" id="btn-send">Send</button> <a class="icon-sendin-content"><i class="fas fa-spinner fa-spin fa-2x icon-sending"></i></a>
                </form>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12268.281055608764!2d-75.56369595134697!3d39.76053079421741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fd100dc4c1d1%3A0x4b32df589233cc42!2s20+Trolley+Square%2C+Wilmington%2C+DE+19806!5e0!3m2!1sen!2sus!4v1482431306112" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>
                            </div>
                            <div class="col-6">
                                <h4>United States Headquarters</h4>
                                <p>Viaro Networks, Inc.</p>
                                <p>20C Trolley Square</p>
                                <p>Wilmington, DE 19806</p>
                                <p>Tel: +1 (888) 962-2774</p>
                                <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                                <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                            <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d573.9200219291391!2d-90.50992655068747!3d14.607146054620562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3cbc7b6b1c3%3A0xc4a9b19dd065c47d!2sSixtino+I%2C+6A+Avenida+6-63%2C+Guatemala!5e0!3m2!1sen!2sgt!4v1482431033104" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>       
                            </div>
                            <div class="col-6">
                                <h4>Latin America Headquarters</h4>
                                <p>6a. Av. 6-44 Z.10 Edificio Sixtino I</p>
                                <p>Oficina 407, Guatemala, 01010</p>
                                <p>Tel: +011 (502) 54823186</p>
                                <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                                <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-little" id="contact-little-display">
            <div class="col-12 contact-form">
                <h2>Contact Form</h2>
                <br>
                <form id="contact-form-little" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name-little" id="name-little" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email-little" id="email-little" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone-little" id="phone-little" placeholder="Enter Your Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message-little" id="message-little" rows="6" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-contact-page" id="btn-send">Send</button> <a class="icon-sendin-content"><i class="fas fa-spinner fa-spin fa-2x icon-sending"></i></a>
                    <br><br>
                    <div class="alert alert-success alert-message-send" role="alert"></div>           
                </form>
            </div>
            <div class="col-12">
                <div class="row contact-address">
                    <div class="col-7">
                        <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12268.281055608764!2d-75.56369595134697!3d39.76053079421741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fd100dc4c1d1%3A0x4b32df589233cc42!2s20+Trolley+Square%2C+Wilmington%2C+DE+19806!5e0!3m2!1sen!2sus!4v1482431306112" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>
                    </div>
                    <div class="col-5">
                        <h4>United States Headquarters</h4>
                        <p>Viaro Networks, Inc.</p>
                        <p>20C Trolley Square</p>
                        <p>Wilmington, DE 19806</p>
                        <p>Tel: +1 (888) 962-2774</p>
                        <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                        <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                    </div>
                </div>
                <div class="row contact-address">
                    <div class="col-7">
                    <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d573.9200219291391!2d-90.50992655068747!3d14.607146054620562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3cbc7b6b1c3%3A0xc4a9b19dd065c47d!2sSixtino+I%2C+6A+Avenida+6-63%2C+Guatemala!5e0!3m2!1sen!2sgt!4v1482431033104" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>       
                    </div>
                    <div class="col-5">
                        <h4>Latin America Headquarters</h4>
                        <p>6a. Av. 6-44 Z.10 Edificio Sixtino I</p>
                        <p>Oficina 407, Guatemala, 01010</p>
                        <p>Tel: +011 (502) 54823186</p>
                        <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                        <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row contact-smaller" id="contact-smaller-display">
            <div class="col-12 contact-form">
                <h2>Contact Form</h2>
                <br>
                <form id="contact-form-smaller" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name-smaller" id="name-smaller" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email-smaller" id="email-smaller" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="phone-smaller" id="phone-smaller" placeholder="Enter Your Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message-smaller" id="message-smaller" rows="6" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger btn-contact-page" id="btn-send">Send</button> <a class="icon-sendin-content"><i class="fas fa-spinner fa-spin fa-2x icon-sending"></i></a>
                    <br><br>
                    <div class="alert alert-success alert-message-send" role="alert"></div>     
                </form>
            </div>
            <div class="col-12">
                <div class="row contact-address">
                    <div class="col-12">
                        <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12268.281055608764!2d-75.56369595134697!3d39.76053079421741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fd100dc4c1d1%3A0x4b32df589233cc42!2s20+Trolley+Square%2C+Wilmington%2C+DE+19806!5e0!3m2!1sen!2sus!4v1482431306112" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>
                    </div>
                    <div class="col-12">
                        <br>
                        <h4>United States Headquarters</h4>
                        <p>Viaro Networks, Inc.</p>
                        <p>20C Trolley Square</p>
                        <p>Wilmington, DE 19806</p>
                        <p>Tel: +1 (888) 962-2774</p>
                        <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                        <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                    </div>
                </div>
                <div class="row contact-address">
                    <div class="col-12">
                    <iframe class="frame-address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d573.9200219291391!2d-90.50992655068747!3d14.607146054620562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a3cbc7b6b1c3%3A0xc4a9b19dd065c47d!2sSixtino+I%2C+6A+Avenida+6-63%2C+Guatemala!5e0!3m2!1sen!2sgt!4v1482431033104" style="border:0" allowfullscreen="" width="280" height="202" frameborder="0"></iframe>       
                    </div>
                    <div class="col-12">
                        <br>
                        <h4>Latin America Headquarters</h4>
                        <p>6a. Av. 6-44 Z.10 Edificio Sixtino I</p>
                        <p>Oficina 407, Guatemala, 01010</p>
                        <p>Tel: +011 (502) 54823186</p>
                        <p>Email: <a href="mailto:info@viaro.net">info@viaro.net</a></p>
                        <p>Website: <a href="https://viaro.net/">www.viaro.net</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #endregion form -->
<?php 
    get_footer();
?>