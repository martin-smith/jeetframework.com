<? require_once('header.php'); ?>
            
            <aside id="sidebar">
                <nav>
                    <a href="#basic">Basic</a>
                    <a href="#nested">Nested</a>
                    <a href="#cycle">Cycle</a>
                    <a href="#spanning">Spanning</a>
                    <a href="#offsets">Offsets</a>
                    <a href="#ordering">Ordering</a>
                    <a href="#centering">Centering</a>
                    <a href="#editing">Editing</a>
                    <a href="#mobile">Mobile</a>
                    <a href="#stack">Stack</a>
                    <a href="#ui">UI</a>
                </nav>
            </aside>
            
            <section class="basics">
                
                <article>
                    <div class="code" id="frontpage_head">
                        <h1>Hi there! I'm Jeet</h1>
                        <p>
                            I make short work of creating responsive, semantic, flexible, fun, websites.
                        </p>
                        <p>
                            Grab some popcorn and check out the video to get a feel for how I work.
                        </p>
                    </div>
                    <div class="result">
                        <div class="vid_wrap">
                            <iframe width="640" height="480" src="//www.youtube.com/embed/dcCTDAL7mi0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </article>
                
                <article class="basic" id="basic">
                    <div class="code">
                        <pre class="html">
&lt;aside&gt;Sidebar&lt;/aside&gt;
&lt;article&gt;Article&lt;/article&gt;</pre>
                        <pre class="styl">
aside
    col(1/3)
article
    col(2/3)</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Basic</h4>
                            <p>
                                It's that easy. But look carefully at the gutter between these two elements and, say, the gutters between the navigation buttons at the top of the page. <a href="http://youtu.be/ueZ6tvqhk8U?t=16s" target="_blank">One of these things is not like the other</a>! It's because we're using percentage-based gutters. So 2% of a 1000px container is going to be bigger than 2% of a 100px container. It works, but it effectively defeats the whole purpose of using grids since they're meant to be uniform.
                            </p>
                            <p>
                                How can we fix this?
                            </p>
                        </header>
                        <div class="demo">
                            <aside>Sidebar</aside>
                            <article>Article</article>
                        </div>
                    </div>
                </article>
                
                <article class="nested" id="nested">
                    <div class="code">
                        <pre class="html">
&lt;aside&gt;Sidebar&lt;/aside&gt;
&lt;article&gt;Article&lt;/article&gt;</pre>
                        <pre class="styl">
aside
    col(1/3 1.5/2.5 7/8)
article
    col(2/3 1.5/2.5 7/8)</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Nested</h4>
                            <p>
                                If we pass the ratios of parent containers like so: <code>&lt;div class=&quot;result&quot;&gt;</code> is the container of these <code>&lt;aside&gt;</code> and <code>&lt;article&gt;</code> elements and it's set to <code>col(1.5/2.5 7/8)</code>. The parent of <code>&lt;div class=&quot;result&quot;&gt;</code> is <code>&lt;section class=&quot;basics&quot;&gt;</code> and it's set to <code>col(7/8)</code>. So if we're setting the <code>&lt;aside&gt;</code>'s column size to <b>1/3</b> we need to say <i>"1/3 of 1.5/2.5 of 7/8"</i> like so: <code>col(1/3 1.5/2.5 7/8)</code>.
                            </p>
                            <p>
                                You need to do this with every parent that is using <code>col()</code> so if you're doing some crazy-deep nesting, you may end up with something that looks like this: <code>col(1/2 1/3 1/2 1/4 1/7 2.5/8)</code>. Typically you won't run into this, but if you do, don't be scared. Just step through your code and you'll get the hang of it. Then you'll be the coolest kid on the block with your nice, percentage-based, consistent, gutters.
                            </p>
                            <p>
                                The only other grid that attempts to do this correctly is Scott Kellum's <a href="http://singularity.gs" target="_blank">Singularity.gs</a>. Singularity's syntax isn't my cup of tea, but it really is a brilliant system and the only other system that provides incredibly flexible ratio/percentage-based columns while maintaining a consistent gutter. 
                            </p>
                            <p>
                                Props aside, we've worked hard to make Jeet 3's syntax very intuitive but if you still find it too hard to manage, just start off using the basic syntax like above. You'll get great columns/gutters in a more flexible/semantic/intuitive syntax than other frameworks, and when you're ready you can start using nested ratios.
                            </p>
                        </header>
                        <div class="demo">
                            <aside>Sidebar</aside>
                            <article>Article</article>
                        </div>
                    </div>
                </article>
                
                <article class="cycle" id="cycle">
                    <div class="code">
                        <pre class="html">
&lt;div class=&quot;block&quot;&gt;Block 1&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 2&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 3&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 4&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 5&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 6&lt;/div&gt;
&lt;div class=&quot;block&quot;&gt;Block 7&lt;/div&gt;</pre>
                        <pre class="styl">
.block
    col(1/4 1.5/2.5 7/8, cycle: 4)
</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Cycle and Uncycle</h4>
                            <p>
                                So it'd be cool if we had a big image gallery, or some products in a store, or pretty much anything that has equal height, if we could just dump items into a container and they automatically wrap down to the next row. We do this with the <code>cycle</code> argument.
                            </p>
                            <p>
                                Pass your ratios as you normally would, then pass how many elements until they drop down to the next row.
                            </p>
                            <p>
                                Now you might want to cycle differently at various breakpoints, in which case you <b>need</b> to <code>uncycle</code> what you previously cycled, and set a new cycle argument like so: <code>col(1/2 1.5/2.5 7/8, uncycle: 4, cycle: 2)</code> which would turn off cycling on every 4th element and start cycling every 2nd element. Make sure to adjust your initial ratio. For instance, I changed this to <b>1/2</b> so only 2 blocks would appear per row at smaller sizes.
                            </p>
                            <p>
                                <b>Bonus!</b> <code>cycle</code> will fix Safari/Opera's insanely horrible subpixel rounding crap which is an error present in every percentage based grid. So it's good to familiarize yourself with it - even if you don't have a need for blocks at the time.
                            </p>
                        </header>
                        <div class="demo">
                            <div class="block">Block 1</div>
                            <div class="block">Block 2</div>
                            <div class="block">Block 3</div>
                            <div class="block">Block 4</div>
                            <div class="block">Block 5</div>
                            <div class="block">Block 6</div>
                            <div class="block">Block 7</div>
                        </div>
                    </div>
                </article>
                
                <article class="spans" id="spanning">
                    <div class="code">
                        <pre class="html">
&lt;nav&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
&lt;/nav&gt;</pre>
                        <pre class="styl">
nav a
    span(1/3)</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Spans</h4>
                            <p>
                                A lot of frameworks make you choose between columns or spans by setting a global gutter variable. Jeet understands there are different parts to every website that require a different tool. So, you want a horizontal navigation list with no gutters between each item?
                            </p>
                            <p>
                                <b>Bonus!</b> You don't have to pass multiple ratios to <code>span()</code> because it doesn't need to calculate gutters. Just pass one ratio and enjoy.
                            </p>
                        </header>
                        <div class="demo">
                            <nav>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                            </nav>
                        </div>
                    </div>
                </article>
                
                <article class="offsets" id="offsets">
                    <div class="code">
                        <pre class="html">
&lt;a href=&quot;#&quot; class=&quot;logo&quot;&gt;Logo&lt;/a&gt;
&lt;nav&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
&lt;/nav&gt;</pre>
                        <pre class="styl">
.logo
    col(1/4 1.5/2.5 7/8)
nav
    col(1/2 1.5/2.5 7/8, offset: 1/4)</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Offsets</h4>
                            <p>
                                Want to put a bit more space between items? Leave bit off of your <code>col()</code> (or <code>span()</code>) elements, then pass the <code>offset</code> as a param to one of your elements.
                            </p>
                            <p>
                                You can also use a negative value for your offset to have it offset in the opposite direction.
                            </p>
                            <p>
                                <b>Bonus!</b> Again, don't worry about copying the parent ratios over to the <code>offset</code> param. It pulls the data from the first param in <code>col()</code>
                            </p>
                        </header>
                        <div class="demo">
                            <a href="#" class="logo">Logo</a>
                            <nav>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                            </nav>
                        </div>
                    </div>
                </article>
                
                <article class="ordering" id="ordering">
                    <div class="code">
                        <pre class="html">
&lt;article&gt;Article&lt;/article&gt;
&lt;nav&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
    &lt;a href=&quot;#&quot;&gt;Link&lt;/a&gt;
&lt;/nav&gt;</pre>
                        <pre class="styl">
article
    col(3/5 1.5/2.5 7/8)
nav
    col(2/5 1.5/2.5 7/8)

// Mobile
bp()
article
    shift(2/5 1.5/2.5 7/8)
nav
    shift(-3/5 1.5/2.5 7/8)
endbp()
</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Source Ordering</h4>
                            <p>
                                We use a mixin called <code>shift()</code> to re-position content. Look at the below example and then resize your browser to see <code>&lt;article&gt;</code> and <code>&lt;nav&gt;</code> switch places.
                            </p>
                            <p>
                                Use a negative shift to move items to the left, and a positive shift to move them to the right.
                            </p>
                            <p>
                                If you end up deciding you don't want things to be shifted, you can use the <code>unshift()</code> mixin which accepts no params to... well... "unshift" elements.
                            </p>
                        </header>
                        <div class="demo">
                            <article>Article</article>
                            <nav>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                                <a href="#">Link</a>
                            </nav>
                        </div>
                    </div>
                </article>
                
                <article class="centering" id="centering">
                    <div class="code">
                        <pre class="html">
&lt;header&gt;
    &lt;div&gt;
        Full-width Background / Centered Content
    &lt;/div&gt;
&lt;/header&gt;</pre>
                        <pre class="styl">
header
    background rgba(#000, .15)
    > div
        center(250px)
</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Centering</h4>
                            <p>
                                Jeet comes with the <code>center()</code> mixin which accepts a max-width as it's first argument, and left/right padding as it's second. You can use it on anything, but it works best on wrapper elements. It's simple, effective, and useful.
                            </p>
                            <p>
                                One of my favorite uses for <code>center()</code> is to set a full-width background, then make the immediate child <code>&lt;div&gt;</code> of that element <code>center()</code>'d to center content.
                            </p>
                        </header>
                        <div class="demo">
                            <header>
                                <div>
                                    Full-width Background / Centered Content
                                </div>
                            </header>
                        </div>
                    </div>
                </article>
                
                <article class="edit" id="editing">
                    <div class="code">
                        <pre class="html">
&lt;section&gt;
    &lt;article&gt;
        &lt;header&gt;Header&lt;/header&gt;
        &lt;p&gt;
            Lorem ipsum dolor...
        &lt;/p&gt;
    &lt;/article&gt;
    &lt;aside&gt;Sidebar&lt;/aside&gt;
&lt;/section&gt;</pre>
                        <pre class="styl">
edit()</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Visual Editing</h4>
                            <p>
                                We've added a super-handy <code>edit()</code> mixin that accepts no params. It basically just gives everything a very light, translucent, gray color. You can see it in practice in all of these demos. It also sets an easing <code>transistion</code> that will animate your changes (pretty cool). These simple properties let you visualize all your elements containers and such without having to constantly be opening/closing Inspector.
                            </p>
                            <p>
                                <b>Note:</b> The rounded corners/padding that appear in most of this doc isn't part of <code>edit()</code> but can easily be added if that's your thing.
                            </p>
                        </header>
                        <div class="demo">
                            <section>
                                <article>
                                    <header>Header</header>
                                    <p>
                                        Lorem ipsum dolor...
                                    </p>
                                </article>
                                <aside>Sidebar</aside>
                            </section>
                        </div>
                    </div>
                </article>
                
                <article class="mobile" id="mobile">
                    <div class="code">
                        <pre class="html">
&lt;div&gt;
    They call &#039;em fingers but you never see them fing.
    Oh! There they go!
&lt;/div&gt;</pre>
                        <pre class="styl">
div
    flash(warning)
bp(550px, mf)
div
    flash(error)
endbp()</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Breakpoints and Mobile-first</h4>
                            <p>
                                Jeet makes setting breakpoints easy. There's no device specific sizing stuff like "hide on tablet" and all that junk because that stuff makes <a href="http://bradfrostweb.com/blog/post/7-habits-of-highly-effective-media-queries/#content" target="_blank">kittens get their heads bitten off by angels</a>. Instead, it just lets you specify a width by whatever value you want (<code>px</code>, <code>em</code>, <code>percentages</code>, etc. are all accepted).
                            </p>
                            <p>
                                After that, you can define if you want to make your design mobile-first. By default, it's not mobile-first because I'm lazy and used to desktop-first, but to turn your breakpoints into mobile-first, just pass <code>mf</code> as the second param, or do <code>bp(mobile_first: mf)</code>.
                            </p>
                        </header>
                        <div class="demo">
                            <div>
                                They call 'em fingers but you never see them fing. Oh! There they go!
                            </div>
                        </div>
                    </div>
                </article>
                
                <article class="stack" id="stack">
                    <div class="code">
                        <pre class="html">
&lt;aside&gt;Sidebar&lt;/aside&gt;
&lt;article&gt;Article&lt;/article&gt;</pre>
                        <pre class="styl">
aside
    col(1/3 1.5/2.5 7/8)
article
    col(2/3 1.5/2.5 7/8)

bp(1000px)
aside, article
    stack(align: left)
endbp()
</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Stacking Blocks</h4>
                            <p>
                                Another convenient mixin Jeet provides is <code>stack()</code> which accepts left and right padding in case you want something to be smaller and more centered, or you want to pass <b>0</b> and just have your content bump up against the edges of the page (assuming a <code>center()</code> wrapper element isn't applying padding already).
                            </p>
                            <p>
                                Scale your browser down and at 1000px width the <code>&lt;aside&gt;</code> and <code>&lt;article&gt;</code> will stack on top of each other.
                            </p>
                        </header>
                        <div class="demo">
                            <aside>Sidebar</aside>
                            <article>Article</article>
                        </div>
                    </div>
                </article>
                
                <article class="ui" id="ui">
                    <div class="code">
                        <pre class="html">
&lt;a href=&quot;#&quot;&gt;Button&lt;/a&gt;</pre>
                        <pre class="styl">
a
    button(red)
</pre>
                    </div>
                    <div class="result">
                        <header>
                            <h4>Flexible/Beautiful UI with Axis CSS</h4>
                            <p>
                                We wanted to focus on Jeet being a grid framework but we couldn't find a nice CSS library, and then we stumbled upon the gorgeous and incredibly powerful <a href="http://roots.cx/axis">Axis CSS</a> library.
                            </p>
                            <p>
                                Aside from offering a plethora of shortcut mixins that make writing Stylus seem more like a programming language, Axis offers typography, vertical-rhythm, beautiful gradients, forms, buttons, animation, and so much more. Jeet's friend and Roots/Axis creator, <a href="http://jenius.me">Jeff Escalante</a>, has a nice <a href="http://www.youtube.com/watch?v=Kv6H6mMDeuA">screencast</a> giving you an overview of some of the things Axis can do. 
                            </p>
                            <p>
                                As an example of some of the power Axis offers, most CSS frameworks like Bootstrap &amp; Co. will assume you want to use 5 button colors. Axis will let you pick <b>any</b> color you can imagine and pop out a beautiful button. If you're not into these incredibly subtle/beautiful gradient buttons, then use <code>simple-button()</code> for flat buttons.
                            </p>
                        </header>
                        <div class="demo">
                            <a href="#">Button</a>
                        </div>
                    </div>
                </article>
                
            </section>
            
<? require_once('footer.php'); ?>