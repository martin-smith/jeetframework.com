        </div>
        <!-- end .page -->
        
        <footer>
            <div>
                <section>
                    <ul>
                        <li>
                            <b>Creator/curator/docs</b>
                            <p>
                                TutsPlus and Packt Publishing author <a href="https://twitter.com/ccccory">Cory Simmons</a>
                            </p>
                        </li>
                        <li>
                            <b>Ratio Grid</b>
                            <p>
                                L.A. Noire and Saint's Row IV animator <a href="http://monkeez.com">Mitchell Coote</a>
                            </p>
                        </li>
                        <li>
                            <b>Axis CSS and Roots Integration</b>
                            <p>
                                Roots/Axis creator/curator <a href="https://twitter.com/jescalan">Jeff Escalante</a>
                            </p>
                        </li>
                        <li>
                            <b>NPM Package</b>
                            <p>
                                TutsPlus and Packt Publishing author <a href="https://twitter.com/GabrielManricks">Gabriel Manricks</a> 
                            </p>
                        </li>
                        <li>
                            <b>SCSS/SASS Port</b>
                            <p>
                                All around helpful guy <a href="https://twitter.com/ozamorowski">Oskar Zamorowski</a>
                            </p>
                        </li>
                        <li>
                            <b>Motivation</b>
                            <p>
                                The wonderful community behind Jeet really helps motivate us to constantly make it better than ever.
                            </p>
                        </li>
                    </ul>
                </section>
            </div>
        </footer>
        
        <a href="#top" class="back_to_top">Back to Top</a>
        
        <!--[if lt IE 9]>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.0.3.min.js"><\/script>')</script>
        <!--<![endif]-->
        <script src="js/vendor/jquery.placeholder.min.js"></script>
        <script>
            $(function(){
                $('input, textarea').placeholder();
                $('.chromeframe').on('click', function() {
                    $(this).slideUp('fast');
                });
                $('.hamburger > button').click(function() {
                    $('.hamburger > nav').toggle();
                });
                
                // Fade in/out top button
                $(window).scroll(function() {
                    sT = $(window).scrollTop();
                    if(sT > 150) {
                        $('.back_to_top').fadeIn('fast');
                    } else {
                        $('.back_to_top').fadeOut('fast');
                    }
                });
                
                $('a[href="#"]').click(function(e) {
                    e.preventDefault();
                });
                
            });
        </script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-37008926-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>
</html>