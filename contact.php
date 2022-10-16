<?php
include ('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/contact.css">
<div class="contact-page">
      <div class="container">
        <div class="contact-us">
          <h2 class="contact-heading">Contact Us</h2>
        </div>
        <div class=" contact-us contact-descp">
          <p class="contact-paragraph">
            lets talk about todays situation and crime </p>
            <p class="emergency-num"> Toll Fee Number:100</p>
         
        </div>
      </div>
      <div class="mid-section">
        <div class="row">
          <div class="col-md-2 left-contact">
            <div class="address-section">
              <div class="icon-section">
                <span>
                  <Icon class=" address" path={mdiMapMarker} />
                </span>
              </div>
              <div class="details-address">
                <h4>Address</h4>
                <p>4671 Kathmandu Road</p>
                <p>Kathmandu</p>
              </div>
            </div>
            <div class="address-section">
              <div class="icon-section">
                <span>
                  <Icon class=" address" path={mdiMapMarker} />
                </span>
              </div>
              <div class="details-address">
                <h4>Phone</h4>
                <p>++9772129053</p>
              </div>
            </div>

            <div class="address-section">
              <div class="icon-section">
                <span>
                  <Icon class=" address" path={mdiEmail} />
                </span>
              </div>
              <div class="details-address">
                <h4>Email</h4>
                <p>aashmahumagain99@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 left-contact">
            <div class="map">
              <iframe
                class="map-section"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13960.836443522088!2d85.32271256472673!3d27.690463980605955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a52cce15cb%3A0x23ba5de75230f29a!2sNational%20Investigation%20Department!5e0!3m2!1sen!2snp!4v1650343426046!5m2!1sen!2snp"
                width="100%"
                height="300px"
                right="12px"
              ></iframe>
            </div>
          </div>

          <div class="col-md-4 left-contact right-contact">
            <div class="send-message">
              <div class="message-section">
                <h3>Send message</h3>
              </div>
              <div class="name">
                <input type="text" name="name" placeholder="Full Name"></input>
              </div>
              <div class=" name email">
                <input type="text" name="name" placeholder="Email"></input>
              </div>
              <div class="name">
                <input
                  type="text"
                  name="name"
                  placeholder="PhoneNumber"
                ></input>
              </div>
              <div class="name textarea">
                <input
                  type="textarea"
                  name="name"
                  placeholder="Type Your Message....."
                ></input>
              </div>
              <button class="btn-content">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
include('footer.php');
?>