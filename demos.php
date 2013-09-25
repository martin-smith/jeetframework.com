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
            <header><a href="<? echo $p; ?>/demo/starter_template">Starter Template</a></header>
            <p>
                Very simple layout with: full-width background header, centered content, text logo, links, content area, and hamburger style menu. 
            </p>
        </figcaption>
        <a href="<? echo $p; ?>/demo/starter_template"><img src="http://placekitten.com/400/300"></a>
        <nav>
            <a href="<? echo $p; ?>/demo/starter_template">Demo</a>
            <a href="https://github.com/CorySimmons/jeetframework.com/tree/master/demo/starter_template">Code</a>
            <a href="http://youtube.com">Screencast</a>
        </nav>
    </figure>
    
</section>

<? require_once('footer.php'); ?>