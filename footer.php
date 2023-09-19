<footer class="footer" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Connect With Us</h4>
                    <ul>
                        <li><a href="#">302 S Abel St, 95035, Milpitas</a></li>
                        <li><a href="#">cpa@accountgpt.co</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#" style="color: yellow;">How it works?</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">    
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>About Us</h4>
                    <ul>
                        <li><a href="#">Get to know about us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Newsletter</h4>
                    <ul>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </footer>

    <script>
       
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {

            anchor.addEventListener('click', function (e) {

                e.preventDefault();
    
                document.querySelector(this.getAttribute('href')).scrollIntoView({

                    behavior: 'smooth'

                });

            });

        });

    </script>

<?php wp_footer(); ?>

</body>
</html>
