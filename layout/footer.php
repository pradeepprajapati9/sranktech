<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" >
<footer class="text-white pt-5 pb-4" style="background: linear-gradient(135deg, #0d0d0d, #1a1a1a);">
  <div class="container">
    <div class="row">

      <!-- Brand & Contact -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="mb-3 d-flex align-items-center">
          <img src="img/logo.png" alt="Sranktech" height="40" class="me-2">
          <h5 class="mb-0">Sranktech</h5>
        </div>
        <p class="small">
          D-80 Red FM Road <br>
          Noida , Uttarpradesh <br>
          Thane, Maharashtra 400601
        </p>
        <p class="mb-1">
          📞 <a href="tel:+919137765578" class="text-white text-decoration-none">+91 9137765578</a>
        </p>
        <p>📧 <a href="mailto:info@sranktech.com" class="text-white text-decoration-none">info@sranktech.com</a></p>
      </div>

      <!-- Navigation Links -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5 class="mb-3 border-bottom pb-2">Quick Links</h5>
        <div class="d-flex justify-content-between">
          <ul class="list-unstyled">
            <li><a href="index.html" class="text-white text-decoration-none">Home</a></li>
            <li><a href="about-us.html" class="text-white text-decoration-none">About Us</a></li>
            <li><a href="careers.html" class="text-white text-decoration-none">Careers</a></li>
          </ul>
        </div>
      </div>

      <!-- Newsletter & Social Media -->
      <div class="col-lg-4 col-md-12">
        <h5 class="mb-3 border-bottom pb-2">Stay Updated</h5>
        <form class="mb-3">
          <div class="input-group">
            <input type="email" class="form-control" placeholder="Your email" aria-label="Email">
            <button class="btn btn-primary" type="submit">Subscribe</button>
          </div>
        </form>
        <div class="d-flex gap-2">
          <a href="https://wa.me/919137765578" target="_blank" class="btn btn-outline-light btn-sm rounded-circle">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="https://www.instagram.com/sranktechstudio/" target="_blank" class="btn btn-outline-light btn-sm rounded-circle">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://x.com/SrankTech" target="_blank" class="btn btn-outline-light btn-sm rounded-circle">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="https://www.linkedin.com/company/sranktech/" target="_blank" class="btn btn-outline-light btn-sm rounded-circle">
            <i class="bi bi-linkedin"></i>
          </a>
        </div>
      </div>

    </div>

    <hr class="border-secondary mt-4">
    <div class="text-center small">
      © <script>document.write(new Date().getFullYear());</script> SrAnkTech. All Rights Reserved.
    </div>
  </div>
</footer>



<div class="body-end-code">
<div class="code-embed w-embed w-script">
</div>
<div class="w-embed w-script">
<script src="npm/swiper%4011/swiper-bundle.min.js"></script>
<script
src="js/jquery-3.5.1.min.dc5e7f18c8.js?site=67866de816449649829a9316"
type="text/javascript"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
<script>
const swiperTwo = new Swiper('.slider-two', {
    centeredSlides: false,
    slidesPerView: 1.1,
    loop: true,
    speed: 800,
    spaceBetween: 20,
    navigation: {
        nextEl: '.slider-two-next',
        prevEl: '.slider-two-prev',
    },
    pagination: {
        el: ".slider-two-pagination",
        clickable: true,
    },
    breakpoints: {
        480: {
            slidesPerView: 1,
            spaceBetween: 16
        },
        768: {
            slidesPerView: 2.75,
            spaceBetween: 16
        },
        1024: {
            slidesPerView: 3.2,
            spaceBetween: 20
        },
    }
});
</script>
</div>
<div class="w-embed w-script">
<script>
var Webflow = Webflow || [];
Webflow.push(function() {
    function setupTabLoop(tabMenuSelector, tabButtonSelector, nextBtnSelector, prevBtnSelector, observeVisibility = false, tabContainerSelector = null) {
        var tabTimeout;
        var isVisible = !observeVisibility; // If observation is disabled, assume always visible
        var navbar = document.querySelector(".w-nav-menu"); // Get the Webflow navbar

        function startTabLoop() {
            if (!isVisible || navbar.classList.contains("w--open")) return; // Don't change tabs if navbar is open
            clearTimeout(tabTimeout);
            tabTimeout = setTimeout(nextTab, 5000);
        }

        function nextTab() {
            if (!isVisible || navbar.classList.contains("w--open")) return; // Don't change tabs if navbar is open
            var $menu = $(tabMenuSelector);
            var $next = $menu.children('.w--current:first').next();
            if ($next.length) {
                $next.click();
            } else {
                $menu.children(tabButtonSelector).first().click();
            }
            startTabLoop();
        }

        function stopTabLoop() {
            clearTimeout(tabTimeout);
        }

        if (observeVisibility && tabContainerSelector) {
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    isVisible = entry.isIntersecting;
                    if (isVisible) {
                        startTabLoop();
                    } else {
                        stopTabLoop();
                    }
                });
            }, {
                threshold: 0.5
            });

            observer.observe(document.querySelector(tabContainerSelector));
        }

        // Start the first tab loop immediately
        if (!observeVisibility) {
            startTabLoop();
        }

        // Reset loop on manual clicks
        $(tabButtonSelector).click(function() {
            startTabLoop();
        });

        $(nextBtnSelector).click(function() {
            nextTab();
        });

        $(prevBtnSelector).click(function() {
            clearTimeout(tabTimeout);
            var $menu = $(tabMenuSelector);
            var $prev = $menu.children('.w--current:first').prev();
            if ($prev.length) {
                $prev.click();
            } else {
                $menu.children(tabButtonSelector).last().click();
            }
            startTabLoop();
        });

        // Prevent navbar from closing when switching tabs
        document.addEventListener("visibilitychange", function() {
            if (document.hidden && navbar.classList.contains("w--open")) {
                navbar.setAttribute("data-keep-open", "true");
            }
        });

        // Restore navbar when returning to tab
        document.addEventListener("focus", function() {
            if (navbar.getAttribute("data-keep-open") === "true") {
                navbar.classList.add("w--open");
                navbar.removeAttribute("data-keep-open");
            }
        });
    }

    // First tab group: Always rotates
    setupTabLoop('.tabs-menu-1', '.tab-button-1', '#next-btn-1', '#prev-btn-1');

    // Second tab group: Starts rotating only when visible
    setupTabLoop('.tabs-menu-2', '.tab-button-2', '#next-btn-2', '#prev-btn-2', true, '.tabs-container-2');
});
</script>
</div>
<div class="w-embed w-script">
<script>
document.addEventListener("visibilitychange", function() {
    const navbarMenu = document.querySelector(".w-nav-menu");
    const navbarButton = document.querySelector(".w-nav-button");

    if (navbarMenu && navbarButton) {
        if (document.hidden && navbarMenu.style.display === "block") {
            navbarButton.setAttribute("data-keep-open", "true"); // Mark navbar as open
        }
    }
});

// Restore menu when returning to tab
document.addEventListener("focus", function() {
    const navbarMenu = document.querySelector(".w-nav-menu");
    const navbarButton = document.querySelector(".w-nav-button");

    if (navbarButton?.getAttribute("data-keep-open") === "true") {
        navbarButton.click(); // Reopen navbar
        navbarButton.removeAttribute("data-keep-open"); // Reset
    }
});
</script>
</div>
<div class="w-embed w-script">
<script src="gh/timothydesign/script/split-type.js"></script>
<script src="ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script>
window.addEventListener("DOMContentLoaded", (event) => {
    // Split text into spans
    let typeSplit = new SplitType("[text-split]", {
        types: "words, chars",
        tagName: "span"
    });

    // Play animation once when in view
    function createScrollTrigger(triggerElement, timeline) {
        ScrollTrigger.create({
            trigger: triggerElement,
            start: "top 60%",
            once: true, // ensures it plays only once
            onEnter: () => timeline.play()
        });
    }

    $("[words-slide-from-right]").each(function() {
        let tl = gsap.timeline({
            paused: true
        });
        tl.from($(this).find(".word"), {
            opacity: 0,
            x: "1em",
            duration: 0.6,
            ease: "power2.out",
            stagger: {
                amount: 0.2
            }
        });
        createScrollTrigger($(this), tl);
    });

    // Avoid flash of unstyled content
    gsap.set("[text-split]", {
        opacity: 1
    });
});
</script>
</div>
<div class="w-embed w-script">
<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.querySelector(".w-nav-menu");
    const menuButton = document.querySelector(".w-nav-button");
    const navWrapper = document.querySelector(".w-nav");

    if (!navbar || !menuButton || !navWrapper) return;

    let isMenuOpen = navbar.classList.contains("w--open");

    // Monitor menu state
    const observer = new MutationObserver(() => {
        isMenuOpen = navbar.classList.contains("w--open");
    });
    observer.observe(navbar, {
        attributes: true,
        attributeFilter: ["class"]
    });

    // Prevent menu from closing when tab is changed
    document.addEventListener("visibilitychange", function() {
        if (document.hidden && isMenuOpen) {
            navbar.classList.add("w--open");
        }
    });

    // Prevent Webflow from automatically closing the menu when clicking outside
    document.addEventListener("click", function(event) {
        const clickedInsideNav = navWrapper.contains(event.target);
        if (!clickedInsideNav && isMenuOpen) {
            event.stopPropagation();
        }
    });

    // Allow closing only if the toggle button is clicked
    menuButton.addEventListener("click", function() {
        if (isMenuOpen) {
            navbar.classList.remove("w--open");
        } else {
            navbar.classList.add("w--open");
        }
    });

    // Prevent Webflow's default auto-close on focusout
    navbar.addEventListener("focusout", function(event) {
        if (isMenuOpen && !event.relatedTarget) {
            event.stopPropagation();
        }
    });
});
</script>
</div>
</div>
    </div>
    <script
        src="js/jquery-3.5.1.min.dc5e7f18c8-1.js?site=67f115e64d4efc2ac4e1a9e3"
        type="text/javascript"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="67f115e64d4efc2ac4e1a9e3/js/webflow.schunk.b7cad701f94860c2.js" type="text/javascript"></script>
    <script src="67f115e64d4efc2ac4e1a9e3/js/webflow.schunk.06a4889f971abe26.js" type="text/javascript"></script>
    <script src="67f115e64d4efc2ac4e1a9e3/js/webflow.schunk.ef7080c06606ca1c.js" type="text/javascript"></script>
    <script src="67f115e64d4efc2ac4e1a9e3/js/webflow.3fd3250c.5ed981e21b2d4d34.js" type="text/javascript"></script>
    <script></script>
    <script src="jquery-3.6.0.min.js"></script>
    <!-- Vimeo API -->
    <script type="text/javascript" src="api/player.js"></script>
    <script>
        // Initialize separate Vimeo players
        var player1 = new Vimeo.Player("vimeo-video-1");
        var player2 = new Vimeo.Player("vimeo-video-2");
        var player3 = new Vimeo.Player("vimeo-video-3");
        var player4 = new Vimeo.Player("vimeo-video-4");

        // Unmute and restart videos
        $("[vimeo-1=unmute]").click(function() {
            player1.setCurrentTime(0);
            player1.setMuted(false);
        });
        $("[vimeo-2=unmute]").click(function() {
            player2.setCurrentTime(0);
            player2.setMuted(false);
        });
        $("[vimeo-3=unmute]").click(function() {
            player3.setCurrentTime(0);
            player3.setMuted(false);
        });
        $("[vimeo-4=unmute]").click(function() {
            player4.setCurrentTime(0);
            player4.setMuted(false);
        });

        // Play videos
        $("[vimeo-1=play]").click(function() {
            player1.play();
        });
        $("[vimeo-2=play]").click(function() {
            player2.play();
        });
        $("[vimeo-3=play]").click(function() {
            player3.play();
        });
        $("[vimeo-4=play]").click(function() {
            player4.play();
        });

        // Pause videos
        $("[vimeo-1=pause]").click(function() {
            player1.pause();
        });
        $("[vimeo-2=pause]").click(function() {
            player2.pause();
        });
        $("[vimeo-3=pause]").click(function() {
            player3.pause();
        });
        $("[vimeo-4=pause]").click(function() {
            player4.pause();
        });
    </script>
 