<?php

class TwitterClient
{
    public function getTweets($handle)
    {
        return [
            'This is my first tweet',
            'This is my second tweet'
        ];
    }
}

class Paginator
{
    public function paginate(array $tweets,int $value)
    {
        //paginate each tweet by spacific value
        return $tweets;
    }
}

class TwitterManager
{
    protected $client;

    protected $paginator;

    public function __construct(TwitterClient $client, Paginator $paginator)
    {
        $this->paginator = $paginator;
        $this->client = $client;
    }

    public function getTweetsByUser($handle)
    {
        return $this->paginator->paginate($this->client->getTweets($handle), 10);
    }
}

$twitterClient = new TwitterClient;
$paginator = new Paginator();
$twitterManager = new TwitterManager($twitterClient,  $paginator);

var_dump($twitterManager->getTweetsByUser('odil'));