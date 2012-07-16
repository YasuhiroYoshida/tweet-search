<?php

namespace Acme\TweetBundle\Controller;
use Symfony\Component\ClassLoader\UniversalClassLoader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TmhOAuth;
use Acme\TweetBundle\Entity\SearchWord;
use Acme\TweetBundle\Entity\Makeover;
use Acme\TweetBundle\Form\Type\TweetSearchType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

	public function indexAction(Request $request)
	{
        // Create an entity that is going to take care of a search word
        $searchWord = new SearchWord();
        $searchWord->setSearchWord('Enter a search word');
        
        // Create a form object
        $form = $this->createForm(new TweetSearchType(), $searchWord);

        // This will eventually refers to fetched tweets
        $tweets = array();

        
        // When a search word is submitted, it's a POST method that is used
        // And when proven valid, it will trigger communication with Twitter Search API
        if ($request->getMethod() == 'POST') {
	        $form->bindRequest($request);

  		    if ($form->isValid()) {
  		    	// Obtain access to an OAuth 1.0A library written by @themattharris
            require_once $this->container->get('kernel')->getRootdir() 
                . "/../vendor/tmhOAuth/tmhOAuth.php";

  		    	// Send a query upon successful authentication 
  		    	$twitter = new tmhOAuth(array("host" => "search.twitter.com"));
  		    	$twitter->request("GET", $twitter->url("search"), 
  		    			array("q" => $form->get('search_word')->getData(),));
  		    	
  		    	// Receive + decode results from Twitter 
  		    	$results = json_decode($twitter->response["response"])->{"results"};
        		
        		// Have the results processed so that the representation will be more suitable for the view 
        		$makeover = new Makeover();
        		$tweets = $makeover->stackTweets($results);
        	}

    	}
    
    	// Give the representation to the View 
    	return $this->render(
    			'AcmeTweetBundle:Default:index.html.twig', 
    			array('form' => $form->createView(), 'tweets' => $tweets,)
    		   );

	}

}
