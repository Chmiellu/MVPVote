<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section id="last">
      <div class="full">
      <a href="dashboard.php"><button class="btn btn-dark text-light px-3">Wróć do głosowania</button></a> 
        <h3>Wyślij do nas wiadomość</h3>
 
        <div class="lt">

          <form class="form-horizontal"
                method="post" action="contact.php">
            <div class="form-group">
              <div class="col-sm-12">

                <input
                  type="text"
                  class="form-control"
                  id="name"
                  placeholder="Nazwa użytkownika"
                  name="name"
                  value=""
                />
              </div>
            </div>
 
            <div class="form-group">
              <div class="col-sm-12">

                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Email"
                  name="email"
                  value=""
                />
              </div>
            </div>

            <textarea
              class="form-control"
              rows="10"
              placeholder="MESSAGE"
              name="message">
            </textarea>
 
            <button
              class="btn btn-primary send-button"
              id="submit"
              type="submit"
              value="Wyślij">
              <form class="form-horizontal" method="post" action="contactcontact.php">
              <i class="fa fa-paper-plane"></i>
              <span class="send-text">Wyślij</span>
            </button>
          </form>

        </div>

        <div class="rt">
          <ul class="contact-list">
            <li class="list-item">
              <i class="fa fa-map-marker fa-1x">
                <span class="contact-text place">
                  Pierściec ul. Leguś
                </span>
             </i>
            </li>
 
            <li class="list-item">
              <i class="fa fa-envelope fa-1x">
                <span class="contact-text gmail">
                  <a href="mailto:yourmail@gmail.com" title="Send me an email">
                    tomekchmiel2001@gmail.com</a>
                </span>
              </i>
            </li>
 
            <li class="list-item">
              <i class="fa fa-phone fa-1x">
                <span class="contact-text phone">
                792292832
                </span>
              </i>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>