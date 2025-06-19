<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrolling Nav</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
        }
        section {
            padding: 100px 0;
        }
        #navbar {
            background:rgb(27, 16, 11);
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="70" tabindex="0">

<nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#page-top">Ready-to-Use Digital product</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="bg-primary text-white text-center" style="padding: 100px 0;">
    <div class="container d-flex align-items-center flex-column">
        <h1 class="fw-bold">Welcome to my Digital Product</h1>
        <p class="lead">Online Courses or Tutorial and E-book - all in one place</p>
    </div>
</header>

<section id="about" class="bg-light">
    <div class="container">
        <h2 class="text-center">About this website</h2>
        <p class="text-center lead">This is the great place to talk about digital product. This website serves solely as a gateway to the main site.
        Our focus here is to showcase the benefits of digital products compared to physical goods.That is:</p>
            <ol>
                <li>
                    <h5> 🔁Low Production Costs</h5>
                    <ul>
                        <li>Once created, they can be distributed to many people without additional cost.</li>
                        <li>No need for raw materials, factories, or warehouses.</li>
                        <br>
                        <p>Example: An eBook or software can be sold thousands of times without reprinting.</p>
                    </ul>
                    
                </li>
                <li>
                    <h5>⚡ Fast & Global Distribution</h5>
                    <ul>
                        <li>Instantly downloadable or accessible online by anyone around the world.</li>
                        <li>No physical shipping process required.</li>
                        <br>
                        <p>Example: An online course can be purchased and accessed immediately from anywhere.</p>
                    </ul>
                </li>
                <li>
                    <h5> ♻️ Highly Scalable</h5>
                    <ul>
                        <li>Without printing, storage, and shipping costs, the profit margin is usually higher.</li>
                        <br>
                        <p>Example: A mobile app can be downloaded by millions without extra production cost.</p>
                    </ul>
                </li>
                <li>
                    <h5>💰 Higher Profit Margins</h5>
                    <ul>
                        <li>Without printing, storage, and shipping costs, the profit margin is usually higher.</li>
                        <br>
                    </ul>
                </li>
                <li>
                    <h5> 🛠️ Easy to Update and Improve</h5>
                    <ul>
                        <li>Can be updated anytime in case of errors or feature upgrades.</li>
                        <br>
                        <p>Example: Software or apps can receive regular updates without replacing any physical part.</p>
                    </ul>
                </li>
                <li>
                    <h5> ♻️ Environmentally Friendly</h5>
                    <ul>
                        <li>Produces no physical waste or emissions from shipping.</li>
                        <br>
                        <p>Example: An eBook requires no paper, ink, or plastic packaging.</p>
                    </ul>
                </li>
                <li>
                    <h5>🧳 No Physical Storage Needed</h5>
                    <ul>
                        <li>No need for warehouses, display shelves, or logistics costs.</li>
                        <br>
                    </ul>
                </li>
                <li>
                    <h5>⏳ Potential for Passive Income</h5>
                    <ul>
                        <li>Once created, it can continue generating income without ongoing active work.</li>
                        <br>
                        <p>Example: Design templates, plugins, digital music, and eBooks.</p>
                    </ul>
                </li>
                <li>
                    <h5>📊 Easy to Track and Analyze</h5>
                    <ul>
                        <li>downloads, usage, or views can be tracked accurately.</li>
                        <li>Helps with market analysis through real-time data.</li>
                        <br>
                    </ul>
                </li>
            </ol>
</section>


<section id="services">
    <div class="container">
        <h2 class="text-center">Services</h2>
        <p class="text-center lead">We specialize in delivering high-quality digital products designed to simplify your workflow and enhance your digital experience.
             Our offerings include:</p>
             <ul>
                <li>
                    <h5>E-books & Guides</h5>Comprehensive digital books and manuals on various topics to support learning and growth.
                </li>
                <br>
                <li>
                    <h5>Online Courses or Tutorials</h5>step-by-step learning materials to help users master new skills at their own pace.
                </li>
            </ul>  
    </div>
</section>

<section id="contact" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-4">Contact Us</h2>
    <p class="mb-4 lead">
      Want to get in touch or explore our digital product collection?  
      Feel free to reach out through the following channels:
    </p>

    <!-- Lynk store -->
    <a href="https://lynk.id/moelunk" class="btn btn-primary mb-3" target="_blank">
      🔗 Visit Our Lynk Store
    </a>

    <!-- Social media icons (Font Awesome required) -->
    <div class="mb-3">
      <a href="https://wa.me/6282139516603" target="_blank" class="mx-2">
        <i class="fab fa-whatsapp fa-2x"></i>
      </a>
      <a href="https://instagram.com/moelunk" target="_blank" class="mx-2">
        <i class="fab fa-instagram fa-2x"></i>
      </a>
      <a href="https://tiktok.com/@moelunk" target="_blank" class="mx-2">
        <i class="fab fa-tiktok fa-2x"></i>
      </a>
      <a href="mailto:hello@muhosekarang.com" target="_blank" class="mx-2">
        <i class="fas fa-envelope fa-2x"></i>
      </a>
    </div>

    <p class="text-muted">We'll get back to you as soon as possible!</p>
  </div>
</section>

<footer class="py-5 bg-dark text-white text-center">
    <div class="container">
        <p class="m-0">Copyright &copy; Your Website 2025</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.querySelectorAll('a.nav-link').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 70,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

</body>
</html>
HTML;
?>

  
   










































