<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/assets/styles/homepage_globals.css" />
    <link rel="stylesheet" href="/assets/styles/homepage_style.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="jadeproject">
      <div class="overlap-wrapper">
        <div class="overlap">
          <div class="div-general">
            <div class="overlap-group">
              <header class="header">
                <p class="heading-designer">New York Based Web Developer, Designer, Photographer, and Video Creator.</p>
                <div class="text-wrapper">Selection of projects 2021-2024</div>
              </header>
              <div class="div-container">
                <a href="https://pierregeorges.ch/cinematheque-suisse.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link" src="https://c.animaapp.com/SKT0iiSF/img/link.png"
                /></a>
                <div id="line_1">
                <!-- <div class="div">
                  <div class="heading-link">Street Lamp<br />Canon EOS 541</div>
                  <p class="p">
                    <span class="span">Street Lamp<br /></span> <span class="text-wrapper-2">Canon EOS 541</span>
                  </p>
                </div>
                <a href="https://pierregeorges.ch/luxury-tribune.php" target="_blank" rel="noopener noreferrer"
                  ><img class="img" src="https://c.animaapp.com/SKT0iiSF/img/link-1.png"
                 /></a> -->
                </div>
                <p class="heading-link-2">
                  <span class="span">Disco Ball<br /></span> <span class="text-wrapper-2">Canon EOS 541</span>
                </p>
                <a href="https://pierregeorges.ch/vernier.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link-2" src="https://c.animaapp.com/SKT0iiSF/img/link-2.png"
                /></a>
                <p class="heading-link-3">
                  <span class="span">Baby Skating<br /></span> <span class="text-wrapper-2">Canon EOS 541</span>
                </p>
                <a href="https://pierregeorges.ch/marr-collins.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link-3" src="https://c.animaapp.com/SKT0iiSF/img/link-3.png"
                /></a>
                <p class="heading-link-4">
                  <span class="span">Roses<br /></span> <span class="text-wrapper-2">Canon EOS 541</span>
                </p>
                <a href="https://pierregeorges.ch/cardis.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link-4" src="https://c.animaapp.com/SKT0iiSF/img/link-4.png"
                /></a>
                <div class="heading-link-5">Running<br />Olympus Zoom AF</div>
                <a href="https://pierregeorges.ch/punch.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link-5" src="https://c.animaapp.com/SKT0iiSF/img/link-5.png"
                /></a>
                <p class="heading-link-6">
                  <span class="span">Vines<br /></span> <span class="text-wrapper-2">Canon EOS 541</span>
                </p>
                <a href="https://pierregeorges.ch/inside-out.php" target="_blank" rel="noopener noreferrer"
                  ><img class="link-6" src="https://c.animaapp.com/SKT0iiSF/img/link-6.png"
                /></a>
                <p class="heading-link-7">
                  <span class="span">Fountain<br /></span> <span class="text-wrapper-2">Olympus Zoom AF</span>
                </p>
              </div>
            </div>
            <footer class="footer">
              <div class="div-container-2">
                <div class="link-contact">jreyes88@fordham.edu</div>
                <p class="list-item-link">
                  <a href="https://twitter.com/pierre__georges" target="_blank" rel="noopener noreferrer"
                    ><span class="text-wrapper-3">Twitter<br /></span
                  ></a>
                  <a href="https://www.instagram.com/jadee.pdf" target="_blank" rel="noopener noreferrer"
                    ><span class="text-wrapper-3">Instagram<br /></span
                  ></a>
                  <a
                    href="https://www.linkedin.com/in/jade-reyes-1aab63256?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BDFo%2FUTivQyCv6BX5ojmGuA%3D%3D"
                    target="_blank"
                    rel="noopener noreferrer"
                    ><span class="text-wrapper-3">Linkedin<br /></span
                  ></a>
                  <a href="https://medium.com/@pierregeorges" target="_blank" rel="noopener noreferrer"
                    ><span class="text-wrapper-3">Medium</span></a
                  >
                </p>
              </div>
            </footer>
          </div>
          <div class="heading-link-8">Jade Reyes</div>
          <div class="list-item-link-2">Projects</div>
          <div class="list-item-link-3">About</div>
          <div class="list-item-link-4">Archives</div>
          <div class="list-item-contact">
          <a href="/contacts">Contact</a>
          </div>
        </div>
      </div>
    </div>
    <script>
            $(document).ready(function () {
                $.ajax({
                    url: `http://localhost:8888/projects`,
                    type: "GET",
                    dataType: "json",
                  success: function (data) {
                      console.log(data);
                      $('#line_1').append(`
                       <div class="div">
                  <div class="heading-link">${data[0].project_name}<br />${data[0].camera_type}</div>
                  <p class="p">
                    <span class="span">${data[0].project_name}<br /></span> <span class="text-wrapper-2">${data[0].camera_type}</span>
                  </p>
                </div>
                <a href="https://pierregeorges.ch/luxury-tribune.php" target="_blank" rel="noopener noreferrer"
                  ><img class="img" src="${data[0].image_url}"
                 /></a>
                      `);
                    
                            } 
                            });

                            })


        </script>
  </body>
</html>
