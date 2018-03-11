<div class="twitter-feed">
  <?php 
  $number_of_tweets = 10;
  $twitter_screenname_to_load = 'MetrolinaHPC';
  $tweets = getTweets($number_of_tweets, $twitter_screenname_to_load, array("trim_user" => false));
  //var_dump($tweets);
  // echo '<pre>';
  // print_r($tweets);
  //  echo '</pre>';

  foreach($tweets as $tweet) { ?>
<?php 
  // echo '<pre>';
  // print_r($tweet);
  //  echo '</pre>'; 
?> 
  <div class="the-tweet">
    <a href="<?php echo $tweet['entities']['urls'][0]['url']; ?>">
  
      <div class="text">
        <div class="user-image">
          <img src=" <?php echo $tweet['user']['profile_image_url_https']; ?>">
        </div>
        <?php if( $tweet['text'] != '' ) { ?>
          <div class="actual-text">
            <?php echo $tweet['text']; ?>
          </div>
        <?php } ?>
      </div> 
      <?php if($tweet['entities']['media'][0]['media_url'] != '') { ?>
       <!-- <div class="image">
          <img src="<?php echo $tweet['entities']['media'][0]['media_url']; ?>">
        </div>-->
      <?php } ?>
      </a>
    </div> <!-- the tweet -->
  <?php } ?>
  <div class="italic-tweets">more tweets &#8594;</div>
</div>
