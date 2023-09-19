<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="features">
        <div class="feature-content">
            <h1>AccountGPT</h1>
            <h2>Your AI Tax Expert</h2>
            <div class="typewriter-container">
                <div class="typewriter">       
                <h1 style="margin-top: 50px;">Find Answers To Your Tax Questions Here.</h1>
                </div>
            </div>
            <div class="feature-list">
                <a href="login.html"><button class="color-change-button" style="margin-top: 50px;" href="login.html">Get Started</button></a>
                <ul style="margin-top: 60px; margin-left: 50px;" >
                <li><i class="fas fa-check mr-2" style="background-color: purple; color: #FFD700;"></i><span style="padding-left: 10px; font-weight: 500;">Ask Your Questions</span></li>
                <li><i class="fas fa-check mr-2" style="background-color: purple; color: #FFD700;"></i><span style="padding-left: 10px; font-weight: 500;">Get AI Powered Answers</span></li>
                <li><i class="fas fa-check mr-2" style="background-color: purple; color: #FFD700;"></i><span style="padding-left: 10px; font-weight: 500;">Make Informed Decisions.</span></li>
                </ul>
            </div>
        </div>
        <div class="feature-image">
            <img src="<?php bloginfo('template_url'); ?>/images/main.gif" alt="Image">
        </div> 
    </section>


    <section class="new-section" style="margin-left: 50px; margin-top: 80px;">
        <div class="section-content">
            <h1 style="background: linear-gradient(45deg, transparent 30%, #FFD700 30%, #FFD700 80%, transparent 90%); display: inline; margin-left: 330px;">Why AccountGPT?</h1>
        </div>
        <div class="image-container" style="width: 95%;">
            <div class="image-text">
                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="Image 1">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="image-text">
                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="Image 2">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="image-text">
                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="Image 3">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
            <div class="image-text">
                <img src="<?php bloginfo('template_url'); ?>/images/img1.jpg" alt="Image 1">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
    </section>

    <section class="explore-container" style="margin-top: 130px;">
        <div class="explore-content">
            <div class="text-and-button">
                <p>Explore our tax knowledge base and have your tax questions answered by AccountGPT today!</p>
                <a href="login.html"><button>Get Started</button></a>
            </div>
        </div>
    </section>

    <section class="container3">
        <div id="section1" class="title"><h1>How it works?</h1></div>
        <div class="content" style="margin-top: 80px;">
            <div class="left-section">
                <h2>Section 1</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi.</p>
                <a href="login.html"><button style="border-radius: 30px;">Learn More</button></a>
            </div>
            <div class="right-section">
                <video controls>
                    <source src="video.mp4" type="<?php bloginfo('template_url'); ?>/video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </section>

    <div class="FAQ" style="margin-top: 150px;">
        <div id="section2" class="title"><h1>FAQ's</h1></div>
    <div class="accordion" style="margin-top: 60px; margin-right: 7px; margin-left: 7px;">
        <div class="contentBx">
            <div class="label">List One</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Two</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Three</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Four</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Five</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Six</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Seven</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
        <div class="contentBx">
            <div class="label">List Eight</div>
            <div class="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div>
        </div>
    </div>
    </div>

    <script>
        const accordion = document.getElementsByClassName('contentBx');
        for(i = 0; i<accordion.length; i++){
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>

<?php get_footer();
