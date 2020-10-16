<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap and custom CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/site.css">
    <title>Mediawiki RestAPI Example - New Jersey Wikipedia Photo Gallery</title>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <header>
    			<h1 class="page-heading">Welcome to New Jersey Wikipedia Photo Gallery </h1>
    		</header>
    	</div>
    	<div class="main">
      <?php
        $url = 'https://en.wikipedia.org/w/api.php?action=query&&format=json&generator=images&titles=New%20Jersey&prop=imageinfo&iiprop=user|url&gimlimit=max'; // path to your JSON file
        $data = file_get_contents($url); // get the contents of the source url into a variable
        $items = json_decode($data, true); // to decode the JSON feed
  		?>
          <ul class="photo-gallery">
        	<?php $icount = 0; //to keep a count of list items
                $mcount = 0; //to keep count of modal items and assign value to each div id for displaying corresponding modal window
          foreach ($items['query']['pages'] as $item) :
              $photo = [
                'title' => $item['title'],
          			'user' => $item['imageinfo'][0]['user'],
          			'url' => $item['imageinfo'][0]['url']
              ];
            ?>
          		  <li class="photo-item-<?php echo $icount;?>">
          					<div class="photo-image" data-toggle="modal" data-target="#galleryModal<?php echo $mcount;?>"><image src='<?php echo $photo['url'];?>' width="200px;"/></div>
          					<div class="photo-user"> <strong><em>User</em>:</strong> <?php echo $photo['user']; ?> </div>
                </li>

                <!-- Modal -->
                <div class="modal fade" id="galleryModal<?php echo $mcount;?>" tabindex="-1" role="dialog" aria-labelledby="galleryModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel"><?php echo $photo['title']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <image class="modal-image" src='<?php echo $photo['url']; ?>'/><br/>
                        <span class="modal-user"><strong>User:</strong> <?php echo $photo['user']; ?></span>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $mcount++;
                      $icount++;
                      endforeach;
                ?>
          </ul>

    	</div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
