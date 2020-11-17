<?php include "includes/header.php"?>
<!-- START LEFT COL -->
     
           <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
  
            <p>Flexbox or “Flexible Box” is a module that is used to layout, align, and distribute space among elements in a container. Flexbox does this  in an efficient manner even when the size of the element is unknown or dynamic (A Complete Guide to Flexbox). “The main idea behind the flex layout is to give the container the ability to alter its items’ width/height (and order) to best fill the available space (mostly to accommodate all kinds of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow”(A Complete Guide to Flexbox). Unlike other layouts flexbox is direction agnostic, and is more flexible in areas such as orientation changing, resizing,stretching, and shrinking (A Complete Guide to Flexbox). According to “A Complete Guide to Flexbox” flexbox is best used for components of an application, and for smaller scale layouts rather than larger layouts.
            </p>
            <br>
            <p>Flexbox is based on “flex-flow directions” rather than the traditional flow of block and inline elements. Elements are placed on a main axis ,which may run horizontally from left to right, but not always as the direction is determined by the flex direction property. The starting position is referred to as the main-start and the end point is the main end. Elements may be placed along the cross axis which runs perpendicular to the main axis. The starting point of the cross axis is referred to as the cross start and the end point is the cross-end (A Complete Guide to Flexbox).                
            </p>
            <br>
            <p>There are two main components in a flexbox. The first is the flex-container which is the element, such as a div or a header, that contains all of the flex items. Flex items are the  second main components of a flexbox, and are “the direct child elements of a flex-container. For example, the links in the navigational section inside a header div would be flex-items in that flex-container” (Saxena). In order to make an element a flex-container the display property should be set to flex, and if you don't want the element to behave like a block element then set the display property to inline-flex (Saxena). 
            While flexbox is a great tool it isn't supported in most modern browsers. However it is limited in support when it comes to mobile browsers with the exception of Chrome and Firefox.
            </p>
           

        </section>
<!-- END LEFT COL -->


<!-- START RIGHT COL -->
        <aside>
            <h3>Flexbox Resources</h3>
            <ul>
                <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/#flexbox-background" target="_blank">A Complete Guide to Flexbox</a></li>
                <li><a href="https://blog.zipboard.co/getting-started-with-css-flexbox-f5b2b5a5b87d" target="_blank">Getting Started with CSS Flexbox</a></li>
            </ul>
            
        </aside>
<!-- END RIGHT COL -->


<?php include "includes/footer.php"?>