<?php
include("Netgloo/GetTweetsInPhp.php");
?>
<?php 
    // Set configurations
    $configs = [
      // Set here tokens from your Twitter's app
      'consumer_key' => 'vf68nOdsoV8hPHXWwZ3WcEnAM', 
      'consumer_secret' => 'JIusgamfCf6sPXofqapgwLNgzh2K4W78mSSpT6mT4Sxr7DTpqC',

      // The Twitter account name
      'screen_name' => 'netglooweb',

      // The number of tweets
      'count' => 5,
    ];

    // Get latest tweets using the function get_tweets
    $tweets = \Netgloo\GetTweetsInPhp::get_tweets($configs);

    // ...

    // For each tweet show the HTML text and the attached image
    foreach ($tweets as $tweet) {

      echo "<p>";
      echo $tweet->n_html_text;

      if ($tweet->n_has_media_photo) {
        echo "<img src='{$tweet->n_media_photo_url}' width='100%' />";
      }

      echo "</p>";

    }
    ?>
    