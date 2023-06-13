<?php
include "config/connection.php";
include "config/security.php";
$id = $_SESSION['id'];
$getData = mysqli_query($conn, "select * from tbuser where id='$id'");
$row = mysqli_fetch_assoc($getData);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teman Kanvas</title>

    <!-- Link -->

    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./assets/faviconTK.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="#headline" id="logo" class="logo" alt="TemanKanvas"><img src="./assets/Logo1.svg"></a>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <li><a href="#product">Product</a></li>
                <li><a href="#benefit">Benefit</a></li>
                <li><a href="#workflow">Workflow</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li style=" font-size:var(--text_2); font-family:regular;">
                    <?php echo "Hi, ", isset($row['username']) ? $row['username'] : ''; ?>
                </li>
                <div class="sign_button">
                    <li><button class="sign"><a href="logout.php">Logout</a></button></li>
                </div>
            </ul>

        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>

    <button onclick="topFunction()" id="top-button" class="top-button" title="Back to top"><i
            class="fa-solid fa-arrow-up"></i></button>

    <!-- Headline -->
    <div id="headline">
        <div id="main_illustration">
            <div id="illustration">
                <img src="assets/heading_illustration.png" width="100%" ; height="auto">
            </div>
            <div id="illustration_text">
                <p id="headline_tk">Teman Kanvas</p>
                <h1>Professional design team with unlimited revisions and cost savings</h1>
                <p>The service can be a great option for businesses looking for a high-quality, custom website design
                    that is tailored to their needs and goals, while also being affordable and cost-effective.</p>
            </div>
        </div>
        <div id="icon">
            <img src="assets/yahoo.png" width="8%" ; height="auto">
            <img src="assets/google.png" width="8%" ; height="auto">
            <img src="assets/netflix.png" width="8%" ; height="auto">
            <img src="assets/paypal-logo.png" width="8%" ; height="auto">
            <a id="button" href="#pricing">
                <p class="see">SEE<br>PRICING</p>
                <p class="see"><i class="material-icons">south</i></p>
            </a>
        </div>
    </div>

    <!-- Testimonial -->
    <section id="testimonial">
        <div class="testi_wrapper">
            <div class="testi_slider">
                <div class="testi">
                    <img src="./assets/Testimonial1.png" alt="Testimonial1">
                    <img src="./assets/Testimonial2.png" alt="Testimonial2">
                    <img src="./assets/Testimonial3.png" alt="Testimonial3">
                    <img src="./assets/Testimonial4.png" alt="Testimonial4">
                </div>

                <div class="testi">
                    <img src="./assets/Testimonial1.png" alt="Testimonial1">
                    <img src="./assets/Testimonial2.png" alt="Testimonial2">
                    <img src="./assets/Testimonial3.png" alt="Testimonial3">
                    <img src="./assets/Testimonial4.png" alt="Testimonial4">
                </div>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section id="product" style="padding-top: 150px">
        <div class="title">
            <h1>Our Product</h1>
        </div>
        <div id="box_ourproductBox">
            <?php
            $sql = "select * from tbproduct";
            $query = mysqli_query($conn, $sql);
            while ($result = mysqli_fetch_array($query)) {
                $name = $result['product_name'];
                $desc = $result['description'];
                $photo = $result['photo'];
                ?>
                <div class="ourproductBox" id="ourproductBox">
                    <div class="portofolio">
                        <img class="image" src="./admin/images/produk/<?php echo $photo; ?>" width="100%" alt="">
                    </div>
                    <h4>
                        <?php echo $desc; ?>
                    </h4>
                    <h1>
                        <?php echo $name; ?>
                    </h1><br>
                    <a href="#pricing">See Pricing ></a>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <!-- Benefit -->
    <section id="benefit" style="padding-top: 150px">
        <div class="title">
            <h1>Benefit You Will Enjoy</h1>
        </div>
        <div id="box_productBox">
            <?php
            $sql = "select * from tbbenefit";
            $query = mysqli_query($conn, $sql);
            while ($result = mysqli_fetch_array($query)) {
                $name = $result['benefit_name'];
                $desc = $result['description'];
                $icon = $result['icon'];
                ?>
                <div class="productBox" id="productBox">
                    <div class="icon"><img src="./assets/<?php echo $icon; ?>" width="20%" alt=""></div>
                    <h1>
                        <?php echo $name; ?>
                    </h1><br>
                    <h3>
                        <?php echo $desc; ?>
                    </h3>
                </div>
                <?php
            }
            ?>
        </div>
    </section>

    <!-- Workflow -->
    <section id="workflow" style="padding-top: 150px">
        <div class="title">
            <h1>Our Workflow</h1>
        </div>
        <div id="workflowContent">
            <div class="workflow_container">
                <img class="workflow_picture" src="./assets/Consultation_workflow.png" alt="Discuss" ; height="auto">
                <div class="info-workflow">
                    <h1>Consultation</h1>
                    <h3>After payment, the user will consult with the designer team to determine the work steps and
                        ideas to be realized</h3>
                </div>
            </div>

            <div class="workflow_container">
                <img class="workflow_picture" id="workflow_picture1" src="./assets/Research_workflow.png" alt="Design" ;
                    height="auto">
                <div class="info-workflow" id="info-workflow1">
                    <h1>Research</h1>
                    <h3>After consulting, designers conduct research to find design inspiration that matches the
                        user's brief</h3>
                </div>
            </div>

            <div class="workflow_container">
                <img class="workflow_picture" src="./assets/Design_workflow.png" alt="Consultation" ; height="auto">
                <div class="info-workflow">
                    <h1>Design</h1>
                    <h3>After getting a reference and according to the brief, then the designer begins the design
                        stage</h3>
                </div>
            </div>


            <div class="workflow_container">
                <img class="workflow_picture" src="./assets/Discuss_workflow.png" alt="Research" ; height="auto">
                <div class="info-workflow">
                    <h1>Discuss</h1>
                    <h3>After providing several design options to the user, the designer and user again discussed to
                        determine the final sketch to be executed in high resolution</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section id="pricing" style="padding-top:150px">
        <div class="title">
            <h1>Pricing</h1>
        </div>
        <div id="pricing1">
            <div class="card_wrapper">
                <div class="basic text">
                    <h2>Basic</h2>
                </div>
                <br><br>
                <div class="card_detail">
                    <p><span class="fas fa-check check"></span>Ideal for simple design</p>
                    <p><span class="fas fa-check check"></span>Limited revisions</p>
                    <p><span class="fas fa-check check"></span>Max 1 Design / day</p>
                </div>
                <br><br>
                <div class="card_price">
                    <p class="week">150K<sub>/Week</sub></p>
                </div>
                <br><br>
                <a href="#popupbasic" class="card_button first">Purchase</a>
            </div>
            <div class="card_wrapper">
                <div class="advance text">
                    <h2>Advance</h2>
                </div>
                <br><br>
                <div class="card_detail">
                    <p><span class="fas fa-check check"></span>Ideal for various industries</p>
                    <p><span class="fas fa-check check"></span>Limited revisions</p>
                    <p><span class="fas fa-check check"></span>Max 3 Designs / day</p>
                </div>
                <br><br>
                <div class="card_price">
                    <p class="plan">500K<sub>/Month</sub></p>
                </div>
                <br><br>
                <a href="#popupadvance" class="card_button second">Purchase</a>
            </div>
            <div class="card_wrapper">
                <div class="premium text">
                    <h2>Premium</h2>
                </div>
                <br><br>
                <div class="card_detail">
                    <p><span class="fas fa-check check"></span>Ideal for advanced design</p>
                    <p><span class="fas fa-check check"></span>Unlimited revisions</p>
                    <p><span class="fas fa-check check"></span>Max 5 Design / day</p>
                </div>
                <br><br>
                <div class="card_price">
                    <p class="axe">1.500K<sub>/3 Month</sub></p>
                </div>
                <br><br>
                <a href="#popuppremium" class="card_button third">Purchase</a>
            </div>
        </div>
        <div id="popupbasic">
            <div class="popup" id="popup_content_basic">
                <h1 class="payment basic_">Payment</h1>
                <div class="close_popup">
                    <a href="#pricing" class="popup_close">&times;</a>
                </div>
                <div class="qrcode_basic">
                    <img src="./assets/QRcode_basic.jpg" width="300px" height="auto">
                </div>
                <h1 class="scan_me first">Scan Me</h1>
            </div>
        </div>
        <div id="popupadvance">

            <div class="popup" id="popup_content_advance">
                <h1 class="payment advance_">Payment</h1>
                <div class="close_popup">
                    <a href="#pricing" class="popup_close">&times;</a>
                </div>
                <div class="qrcode_advance">
                    <img src="./assets/Qrcode_advance.jpg" width="300px" height="auto">
                </div>
                <h1 class="scan_me second">Scan Me</h1>
            </div>
        </div>
        <div id="popuppremium">
            <div class="popup" id="popup_content_premium">
                <h1 class="payment premium_">Payment</h1>
                <div class="close_popup">
                    <a href="#pricing" class="popup_close">&times;</a>
                </div>
                <div class="qrcode_premium">
                    <img src="./assets/Qrcode_premium.jpg" width="300px" height="auto">
                </div>
                <h1 class="scan_me third">Scan Me</h1>
            </div>
        </div>
    </section>

    <!-- footer -->
    <section id="footer">
        <footer class="footer">
            <div class="left-footer">
                <a href="#" alt="TemanKanvas"><img src="./assets/Logo1.svg" alt="" class="logo-footer"></a><br><br>
                <p>Teman Kanvas is an Indonesian-based company that specializes in providing custom-made canvas prints
                    for personal or business purposes. Teman Kanvas also offers professional design services to assist
                    customers in creating the perfect canvas print.</p>
            </div>
            <div class="middle-footer">
                <h2>Links</h2><br>
                <a href="#product">Product</a>
                <a href="#benefit">Benefit</a>
                <a href="#workflow">Workflow</a>
                <a href="#pricing">Pricing</a><br><br><br>
                <h2>Contact Us</h2><br>
                <div class="socials">
                    <a href="mailto:clay.aiken@itbss.ac.id" target="_blank"><i class="fa-regular fa-envelope"></i></a>
                    <a href="https://www.instagram.com/clay_aiken_" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://wa.me/6281200000000" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="right-footer">
                <h2>Address</h2><br>
                <p>Jl. L.J. Sutoyo, No. 1, Parit Tokaya, Pontianak, Kalimantan Barat, 78121</p><br>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d992.4741021335096!2d109.33653974992073!3d-0.05045162805693121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d59a3d454dea5%3A0xbc7c3387d2c5e50f!2sJl.%20Letnan%20Jendral%20Sutoyo%20No.1%2C%20Parit%20Tokaya%2C%20Kec.%20Pontianak%20Sel.%2C%20Kota%20Pontianak%2C%20Kalimantan%20Barat%2078121!5e0!3m2!1sid!2sid!4v1679761777293!5m2!1sid!2sid"
                        width="400" height="100" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <center>
                Copyright © 2023, Teman Kanvas. All Rights Reserved.
            </center>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/2c04a65836.js" crossorigin="anonymous"></script>
</body>

</html>