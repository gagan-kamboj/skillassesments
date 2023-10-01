<html>
    <title>Contact us</title>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
.contact-us-form h3 {
    text-align: center;
    font-size: 40px;
    color: #004d8e;
    margin-top: 10px;
}
.contact-us-form p {
    text-align: center;
    color: #ababab;
    font-size: 18px;
    margin-bottom: 38px
}

.form-control {
    padding: 10px;
    border-radius: 0;
    margin-top: 5px;
    border-color: #004d8e38;
}
button.send-button {
    background: #004d8e;
    border: none;
    color: white;
    display: block;
    margin: auto;
    width: 100%;
    padding: 10px;
    font-size: 20px;
}
        </style>
    </head>
    <body>
<button type="button" class="contact-us" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  CONTACT US
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
               <div class="contact-us-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row design">
                    <h3>Contact Us</h3>
                    <p>We will get back to you soon</p>
                    <div class="col-lg-6">
                    <form>
                    <input type="text" class="form-control" placeholder="First Name" id="first_name">
                    </form>
                    </div>
                    <div class="col-lg-6">
                    <form>
                    <input type="text" class="form-control" placeholder="Last Name" id="last_name">
                    </form>
                    </div>
                    <div class="col-lg-6">
                    <form>
                    <input type="text" class="form-control" placeholder="Email" id="Email">
                    </form>
                    </div>
                     <div class="col-lg-6">
                    <form>
                    <input type="number" class="form-control" placeholder="Phone Number" id="Email">
                    </form>
                    </div>
                    <div class="col-lg-12">
                    <form>
                    <textarea class="form-control" rows="3" id="message" Placeholder="Message"></textarea>
                    </form>
                    </div>
                    </div>
                    <button class="send-button">Send</button>
                </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    </body>
</html>