<?php include('header.php');?>

    <div class="slider-container">
        <div class="img-container-contacts">
            <img src="img/logo.png" alt="slider" class="slider-logo">
        </div>
    </div>
    <div class="map-container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89631.1308185419!2d11.762089843359389!3d45.4098873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477edac1fe735887%3A0x117dd29ca1ef095!2sMind%20Academy!5e0!3m2!1sit!2sit!4v1748628743050!5m2!1sit!2sit"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="details-title">Address</p>
                <p class="details">12345 Random Str., Random State,
                    Random City</p>
                <p class="details-title">Phone</p>
                <p class="details">+ 39 123 4567890</p>
                <p class="details-title">Email</p>
                <p class="details">info@ozerzoom.com</p>
            </div>
            <div class="col-md-6">
                <form action="#" class="contact-form" method="post">
                    <input type="text" name="name" id="name" placeholder="name"><br>
                    <input type="text" name="surname" id="surname" placeholder="surname"><br>
                    <textarea name="message" id="message" placeholder="message" draggable="false"></textarea>
                    <input type="submit" class="send-btn" value="Send">
                </form>
            </div>
        </div>
    </div>

<?php include('footer.php');?>