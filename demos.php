<? require_once('header.php'); ?>

<section class="demos">
    
    <header>
        <h1>The Tao of Jeet Framework</h1>
        <p>
            Most frameworks out there assume you're going to do XYZ and force certain markup/styling on you. Jeet doesn't assume anything about your workflow. This gives you power without saddling you with the burden of having to overwrite anything.
        </p>
        <p>
            If you know of a framework you'd like to see stacked up to Jeet, then just Tweet <a href="https://twitter.com/jeetframework">@JeetFramework</a> and I'll gladly recreate a simple layout the Jeet way.
        </p>
    </header>
    
    <div>
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/grid">Basic Grid</a></header>
                <p>
                    We take a look at how far grid systems have come since the time of <a href="http://960.gs" target="_blank">960.gs</a> by demoing Jeet's flexible, ratio-based, grid.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/grid"><img src="img/demo_grid.jpg" alt="A screenshot from the video taken to show Jeet's grid system"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/grid">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/grid">Code</a>
                <a href="http://youtu.be/sTOaBV2ge10">Screencast</a>
            </nav>
        </figure>
        <figure>
            <figcaption>
                <header><a href="http://youtu.be/P58-OCVnJ20">Browser Support</a></header>
                <p>
                    Most frameworks claim to support XYZ browsers, but there's always half the stuff they support, half the stuff kinda works, and the third half of stuff is just flat out broken. We want to be honest about our support so you know exactly where things start to fall off.
                </p>
                <p>
                    In this screencast I'll show you exactly what Jeet 3 can and can't do as of September 26th, 2013.
                </p>
                <p>
                    Long story short, we're IE8+ but just be wary of the cycle param and use conditional classes to fix stuff that's broken.
                </p>
            </figcaption>
            <a href="http://youtu.be/P58-OCVnJ20"><img src="img/demo_browser_support.jpg" alt="Jeet 3's grid displayed perfectly in IE7"></a>
            <nav>
                <a href="http://youtu.be/P58-OCVnJ20">Screencast</a>
            </nav>
        </figure>
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/bootstrap">Starter Template</a></header>
                <p>
                    Here's a recreation of Bootstrap's "<a href="http://getbootstrap.com/getting-started/#examples" target="_blank">Starter Template</a>" example complete with a hamburger menu (shrink your viewport to see it in action).
                </p>
                <p>
                    Compare the markup of the two, then look at how small our <code>custom.styl</code> file is that creates the exact same layout from scratch with better browser support.
                </p>
                <p>
                    We'll gladly/quickly recreate any other demo by any other framework. Just Tweet <a href="https://twitter.com/jeetframework">@JeetFramework</a> preferably with the #jeetshowdown tag so we can track them.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/bootstrap"><img src="img/demo_bootstrap.jpg" alt="A screenshot of a website with a off-black navigation bar, some links, and a bit of text centered in the screen"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/bootstrap">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/bootstrap">Code</a>
            </nav>
        </figure>
    </div>
    
    <div>
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/nested">Nested Grids</a></header>
                <p>
                    A few months ago most responsive, fluid, frameworks (including <a href="https://github.com/CorySimmons/jeet/tree/jeet2">Jeet 2</a>) were happily destroying the entire purpose behind grid systems without a second thought. As you nested elements, a gutter that was a 2% <code>margin-right</code> would get smaller and smaller (because 2% of 1000px container is bigger than 2% of a nested 500px element).
                </p>
                <p>
                    Well, with Bootstrap 3 and Foundation 4, the solution was to add padding to the left and right of every element, then apply a negative margin offset. This is okay unless you want to use background colors on that element, in which case, you'd have to nest an element inside of it just to have a background color. This isn't optimal as it creates a ton of extra markup. Consider having to nest an element inside of almost every element on your page. You're effectively doubling your markup.
                </p>
                <p>
                    A few notable standouts that have done a great job at dodging this problem and providing consistent gutters as you nest are: <a href="http://neat.bourbon.io">Bourbon Neat</a>, <a href="http://shelvesgrid.org">Shelves</a>, and <a href="http://singularity.gs">Singularity.gs</a>. That said, I feel Jeet's grid system is more flexible than the first two and more intuitive than the last. It's the perfect combination of power and ease.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/bootstrap"><img src="img/demo_nested.jpg" alt="Screenshot of light gray blocks scattered around in a layout fashion where darker blocks represent deeper nested elements"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/nested">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/nested">Code</a>
                <a href="http://youtu.be/lyf6236j-4s">Screencast</a>
            </nav>
        </figure>
    </div>
    
</section>

<? require_once('footer.php'); ?>