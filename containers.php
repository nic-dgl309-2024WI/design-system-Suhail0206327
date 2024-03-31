<?php include 'navigation.php'?>
      <main class="l-p-3">
        <h1 class="c-heading u-text-align-center">containers</h1>
        <p class="l-mt-1 l-text-wrapper">
          Containers and layouts are key elements for organizing the content.
          Below you can see the containers used in this design system
        </p>

        <div class="l-mt-3 c-container">
          <h2 class="c-sub-heading">min width container</h2>
          <div class="l-pl-3">
            <h3 class="u-fs-normal u-fc-uppercase">name</h3>
            <p>l-min-width-container</p>
            <h3 class="u-fs-normal u-fc-uppercase">values</h3>
            <p>width: min-content;</p>
            <h3 class="u-fs-normal u-fc-uppercase">description</h3>
            <p>
              This container will take the width of the widest content inside.
              It will remove unwanted white spaces and is responsive
            </p>
          </div>
        </div>
        <div class="l-mt-3 c-container">
          <h2 class="c-sub-heading">max width container</h2>
          <div class="l-pl-3">
            <h3 class="u-fs-normal u-fc-uppercase">name</h3>
            <p>l-max-width-container</p>
            <h3 class="u-fs-normal u-fc-uppercase">values</h3>
            <p>width: max-content;</p>
            <h3 class="u-fs-normal u-fc-uppercase">description</h3>
            <p>
              This container will take the width of the widest content inside.
              It will go beyond even the parent elements width. 
            </p>
          </div>
        </div>

        <div class="l-mt-3 c-container">
            <h2 class="c-sub-heading">max width wrapper</h2>
            <div class="l-pl-3">
              <h3 class="u-fs-normal u-fc-uppercase">name</h3>
              <p>l-max-width-container</p>
              <h3 class="u-fs-normal u-fc-uppercase">values</h3>
              <p>  max-width: 350px; <br>
                margin-left: auto;<br>
                margin-right: auto;<br>
                padding-left: 16px;<br>
                padding-right: 16px;</p>
              <h3 class="u-fs-normal u-fc-uppercase">description</h3>
              <p>
                This container have doesn't expand beyond 350px and the content will be centered with a padding. 
              </p>
            </div>
        
        </div>
        <div class="l-mt-3 c-container">
            <h2 class="c-sub-heading">max width wrapper</h2>
            <div class="l-pl-3">
              <h3 class="u-fs-normal u-fc-uppercase">name</h3>
              <p>l-max-min-width</p>
              <h3 class="u-fs-normal u-fc-uppercase">values</h3>
              <p>  width: 85%;<br>
                min-width: 100px;<br>
                max-width: 1000px;<br>
                margin: 4rem auto;<br>
                text-align: center;<br>
              <h3 class="u-fs-normal u-fc-uppercase">description</h3>
              <p>
                This container will not shrink below 100px and will not expand above 1000px. The content will be center aligned.
              </p>
            </div>
        
        </div>
        
        <div class="l-mt-3 c-container">
            <h2 class="c-sub-heading">max win width</h2>
            <div class="l-pl-3">
              <h3 class="u-fs-normal u-fc-uppercase">name</h3>
              <p>l-max-min-width</p>
              <h3 class="u-fs-normal u-fc-uppercase">values</h3>
              <p>  width: 85%;<br>
                min-width: 100px;<br>
                max-width: 1000px;<br>
                margin: 4rem auto;<br>
                text-align: center;<br>
              </p>
              <h3 class="u-fs-normal u-fc-uppercase">description</h3>
              <p>
                This container will not shrink below 100px and will not expand above 1000px. The content will be center aligned.
              </p>
            </div>
        
        </div>
        <div class="l-mt-3 c-container">
            <h2 class="c-sub-heading">text wrapper</h2>
            <div class="l-pl-3">
              <h3 class="u-fs-normal u-fc-uppercase">name</h3>
              <p>l-text-wrapper</p>
              <h3 class="u-fs-normal u-fc-uppercase">values</h3>
              <p>max-width: 80ch;<br>
min-width: 60ch;</p>
              <h3 class="u-fs-normal u-fc-uppercase">description</h3>
              <p>
               This is a text wrapper it will give the paragraphs an width between 60 to 80 characters width
              </p>
            </div>
        
        </div>
        <h2>Examples</h2>
<section class="c-container__example">
  
    <div class="c-container__example1">
        <p>l-min-width-container</p>
    </div>
   
    <div class="c-container__example2">
        <p>l-max-width-container</p>
    </div>
    <div class="c-container__example3">
        <p>l-max-width-wrapper</p>
    </div>
    <div class="c-container__example4">
        <p>l-max-min-width</p>
    </div>
</section>
          
      </main>
   

    <script src="design-system.js"></script>
  </body>
</html>
