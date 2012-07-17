<?php
// src/Acme/TweetBundle/Entity/Makeover.php
namespace Acme\TweetBundle\Entity;

class Makeover
{
  protected $tweets;

  public function getTweets()
  {
    return $this->tweets;
  }
  public function setTweets($tweets)
  {
    $this->tweets = $tweets;
  }

  public function stackTweets($tweets)
  {
    $stack = array();

    // Original representation given by Twitter should be good enough to pass on to the View
    // This process was intentionally added to get a bit of a feel of what it's like to process data much larger in size  
    foreach ($tweets as $index => $tweet) {
      $stack[$index]["profile_image_url"] = $tweet->{"profile_image_url"};
      $stack[$index]["from_user"]         = $tweet->{"from_user"};
      $stack[$index]["text"]              = $tweet->{"text"};
    }
 
    return $stack;
  } 
}