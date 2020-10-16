<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and custom CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <title>Mediawiki RestAPI Example</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <header>
          <h1 class="page-heading">Mediawiki RestAPI Example</h1>
        </header>
      </div>
      <div class="main">
            <p><strong>Problem #1 -</strong> Create a Web display that uses the Wikipedia Mediawiki API to display a list of all current images on the New Jersey page with the
    username (if any) of the account that uploaded each image. </p>
            <p><strong>Coding Languages and Libraries used -</strong> PHP, HTML, CSS and Bootstrap Library. </p>
            <p><strong>Solution details -</strong> The web display to present this solution is built as a responsive website with two pages - main landing page and solution as photo gallery page to display the required elements as requested in the problem query. </p>
              <p>The photo gallery page is built with PHP, HTML and CSS using an API query constructed with properties and parameters given on Wikipedia Mediawiki Action API to pull the current images from <a href="https://en.wikipedia.org/wiki/New_Jersey">New Jersey page</a>. This photo gallery page is made responsive with 'container' element available in Bootstrap Library. Each image and corresponding username info on the page are displayed as unordered list elements with help of html div element. Clicking on each thumbnail image opens a large size image in modal displaying it's file name and username. The modal is built using bootstrap 'modal' component. The CSS added for responsive behavior is mainly for viewing the site on 3 different viewport sizes mobile, tablet and desktop views with help of media queries.</p>
            <p><strong>Source - </strong><br/>
              <ul>
                <li><a href="https://www.mediawiki.org/wiki/API:Main_page">Mediawiki Action API</a></li>
              </ul>
            </p>
              <div class="site-links"><a href="photo-gallery.php"><strong>Click here to view the solution &#8594;</strong></a></div>

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
