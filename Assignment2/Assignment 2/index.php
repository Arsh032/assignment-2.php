<html>
    <head>
        <title>Brampton Library</title>
        <link rel="stylesheet" href="styles.css">        
    </head>
    <body>
        <div class="banner">
         <div class="navbar">
            <ul>
            <li><a href="home.html">Home</a></li>

                <li><a href="logincheck.php">Login</a></li>
                <li><a href="register.html">register</a></li>
                <li><a href="guest.html">guest</a></li>
                <li><a href="#contact-CTA">Contact us</a></li>

            </ul>
            <form class="d-flex" role="search">

        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
</div>

         </div>

        </div>
        
    </body>
    



    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      
  

    
    

        
  </body>

        <!--ContactUs page-->
        <section class="contact-CTA" id="contact-CTA">
        <h3>thebramptonlibrary.ca</h3>
        <button id="modalBtn">Contact Us</button>
        <!-- The Modal -->
        <div id="ContactModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <form action="Contact us">
              <h4>Subscribe us!!!! </h4>
              <div>
                <input type="text" name="fname" placeholder="First Name">
              </div>
              <div>
                <input type="text" name="lname" placeholder="Last Name">
              </div>
              <div>
                <input type="email" name="email" placeholder="Email">
              </div>
              <div>
                <textarea type="address" placeholder="Address"></textarea>
              </div>
              <div>
                <!--<input type="submit" value="Submit" name="submit">-->
                <a href="#" class="btn btn-1">

                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
            
                  Submit
                </a>
              </div>
            </form>
          </div>
        </div>
      </section>
  </main>
  <script>      // Make our popup form
    // Get the modal
    var modal = document.getElementById("ContactModal");
    // Get the button that opens the modal
    var btn = document.getElementById("modalBtn");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the button, open the modal
    btn.onclick = function () {
      modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  </script>


</body>

</html>
</html>