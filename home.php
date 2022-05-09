<section>
<?php
$session= \Config\Services::session();

?>
<?php if(isset($session->success)):     ?>
<div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
<?= $session->success?>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>


</div>
<?php endif; ?>
<div class="jumbotron p-5"style="background-color: #d9b3ff">
    <div class="container">
  <h1 class="display-4">Welcome to my blog!</h1>
  <p class="lead">This is a simple blog that i've decided to start, to share my interests and experiences.</p>
  <hr class="my-4">
  <p class="lead">You want to live forever! But you have to admit it's unlikely.</p>
  <p class="lead">So what are the things you absolutely have to do?</p>
  <?php if(!session()->get('isLoggedIn')): ?>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/login" role="button">Bucket List</a>
  </p>
  <?php else: ?>
    <p class="lead">
    <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Bucket List</a>
  </p>
  <?php endif; ?>

<div class="parent-radio-box mt-5 d-flex flex-row align-items-center justify-content-between">
    <div class="radio-box">
        <input type="checkbox" id="html" name="fav_language" value="HTML">
        <label for="html">Create a cookbook with recipes from all over the world</label><br>
        <input type="checkbox" id="css" name="fav_language" value="CSS">
        <label for="css">Visit the Eiffel Tower in Paris</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">Learn to dive</label> 
    </div>

    <div class="radio-box">
        <input type="checkbox" id="html" name="fav_language" value="HTML">
        <label for="html">Build a snowman</label><br>
        <input type="checkbox" id="css" name="fav_language" value="CSS">
        <label for="css">Visit a volcano</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">Send a message in a bottle</label> 
    </div>

    <div class="radio-box">
        <input type="checkbox" id="html" name="fav_language" value="HTML">
        <label for="html">Ride in a hot air balloon</label><br>
        <input type="checkbox" id="css" name="fav_language" value="CSS">
        <label for="css">Go skiing</label><br>
        <input type="checkbox" id="javascript" name="fav_language" value="JavaScript">
        <label for="javascript">Ride on an elephant</label> 
    </div>
</div>
</div>
</section>
<section class="blog-section">
        <div class="container d-flex flex-row custom flex-wrap mt-5 mb-5">
            <?php if($news) :?>
                <?php foreach ($news as $newsItem) :?>
                    <div class="news-box p-3 w-50 d-flex flex-column justify-content-around align-items-center">
                        <div class="news-item-title-box">
                            <h3><a href="/blog/<?=$newsItem['slug'] ?>"><?= $newsItem['title'] ?></a></h3>
                        </div>

                        <div class="news-item-image-box w-100">
                            <img class="w-100"src="<?=$newsItem['img_url']?>">
                        </div>
                       
                    </div>
                <?php endforeach ?>
            <?php endif ?>
        </div>

</section>