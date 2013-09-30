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
    
    <div class="row">
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/grid">Basic Grid</a></header>
                <p>
                    We take a look at how far grid systems have come since the time of <a href="http://960.gs" target="_blank">960.gs</a> by demoing Jeet's flexible, ratio-based, grid.
                </p>
                <p>
                    We've borrowed from the brilliant Harry Roberts (read the "<a href="http://csswizardry.com/2013/02/responsive-grid-systems-a-solution/">Building the grid system</a>" section) and decided that having to do math in your head was for suckers. Smart suckers, but suckers none-the-less. So we give you the option of defining your columns in fractions (or decimals) as you would objects in real life.
                </p>
                <p>
                    As an example, say you wanted <code>&lt;aside&gt;</code> to take up a quarter of it's containing element. Just say <code>col(1/4)</code>. Want an <code>&lt;article&gt;</code> to take up the remaining space? Just say <code>col(3/4)</code>. Nice huh? It gets a bit more complicated for nested elements (if you want consistent gutters - you do, they're pretty, watch the nested grids screencast).
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
                <header><a href="<? echo $p; ?>/demo/supafast">Installation, Overview, and Site Build</a></header>
                <p>
                    Installation is incredibly simple; our CLI tool is incredible powerful, yet simple; and site creation with Jeet is so fast it'll blow your socks off.
                </p>
                <p>
                    In this tutorial I'll walk you through the entire process. The explanation of almost the entire system takes about 40 minutes, but once you learn it, getting a project started and out the door only takes minutes.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/supafast"><img src="img/demo_supafast.jpg" alt="Screenshot of a site with logo in top left, horizontal nav in top right, sidebar on bottom left with vertical nav, and text area on bottom right"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/supafast">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/supafast">Code</a>
                <a href="http://youtu.be/piJSoU1vryM">Screencast</a>
            </nav>
        </figure>
        
    </div>
    
    <div class="row">
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
            <a href="<? echo $p; ?>/demo/nested"><img src="img/demo_nested.jpg" alt="Screenshot of light gray blocks scattered around in a layout fashion where darker blocks represent deeper nested elements"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/nested">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/nested">Code</a>
                <a href="http://youtu.be/lyf6236j-4s">Screencast</a>
            </nav>
        </figure>
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/typography">Typography</a></header>
                <p>
                    So typography is a big pain in the ass. Modular scale is confusing, and vertical rhythms take an incredibly long time to set up and usually just end up breaking at some point anyway.
                </p>
                <p>
                    That said, typography isn't something we should just ignore. We've namespaced the modular scale ratios, turned them into an easy to use, versatile mixin, and set up some beautiful and incredibly flexible defaults complete with a few settings for which modular scale ratio to use on desktop and mobile.
                </p>
                <p>
                    This is pretty handy. If you're using Stylus feel free to <a href="https://github.com/CorySimmons/jeet/blob/master/css/typography.styl">grab it</a> for whatever project you want.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/typography"><img src="img/demo_typography.jpg" alt="Some beautiful headers and paragraphs stacked on top of each other that get smaller as the page goes down"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/typography">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/typography">Code</a>
                <a href="http://youtu.be/JbSyeuj06jk">Screencast</a>
            </nav>
        </figure>
        <figure>
            <figcaption>
                <header><a href="<? echo $p; ?>/demo/fixed_nav">Sticky Elements</a></header>
                <p>
                    <b>Caution!</b> I'm not great at JS so the plugin has a leak in it somewhere that only affects Firefox but will dramatically slow down FF user's scroll speed. Probably best to avoid using this for now until we get the <a href="https://github.com/CorySimmons/jeet/issues/68">code refactored</a>.
                </p>
                <p>
                    Couldn't find a plugin that would fix elements relative to their container, so we made our own sticky plugin.
                </p>
                <p>
                    Slap both <code>jeet-fixed</code> and <code>jeet-pickup</code> on any element, assign some values (start off with <code>="0"</code> for both while you get a feel for things), and even set <code>jeet-speed</code> (accepts CSS transition speeds like 400ms or 3s).
                </p>
                <p>
                    <code>pickup</code> will activate/deactivate <code>fixed</code>'s top offset. Keep in mind that you can set <code>fixed</code> to a negative value equal to the space between it and the top of the viewport on load to get it to stick to the top of the viewport.
                </p>
                <p>
                    It's a bit tricky, but it gives you a lot of power wrapped up in some easy-to-use attributes. Check out the screencast below to learn more.
                </p>
            </figcaption>
            <a href="<? echo $p; ?>/demo/fixed_nav"><img src="img/demo_sticky.jpg" alt="A basic website mockup with a light red background some white blocks, and a blue sidebar that will stick to it's position as the user scrolls"></a>
            <nav>
                <a href="<? echo $p; ?>/demo/fixed_nav">Demo</a>
                <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/fixed_nav">Code</a>
                <a href="http://youtu.be/jehJfFaIx5E">Screencast</a>
            </nav>
        </figure>
    </div>
    
</section>

<? require_once('footer.php'); ?>