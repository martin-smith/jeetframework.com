<? require_once('header.php'); ?>

<section class="demos">
    
    <header>
        <h1>The Tao of Jeet Framework</h1>
        <p>
            Most frameworks out there assume you're going to do XYZ and force certain markup/styling on you. Jeet doesn't assume anything about your workflow. This gives you power without saddling you with the burden of having to overwrite anything.
        </p>
        <p>
            These examples are from <a href="http://getbootstrap.com/getting-started/#examples" target="_blank">Bootstrap 3</a>. If you have another framework you'd like to see Jeet tested against, just Tweet <a href="https://twitter.com/jeetframework">@JeetFramework</a> and I'll gladly recreate a simple layout the Jeet way.
        </p>
    </header>
    
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
            <a href="http://youtube.com">Screencast</a>
        </nav>
    </figure>
    
</section>

<? require_once('footer.php'); ?>