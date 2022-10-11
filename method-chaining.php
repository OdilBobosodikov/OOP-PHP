<?php

class SearchRequest
{
    protected $query;
    protected $limit;

    public function setQuery(string $query)
    {
        $this->query = $query;
        return $this;
    }

    public function setLimit(int $limit = 100)
    {
        $this->limit = $limit;
        return $this;
    }

    public function getQuery()
    {
        return $this->query;
    }

    public function getLimit()
    {
        return $this->limit;
    }

}

class SearchService
{
    public function search(SearchRequest $request)
    {
//        $request->getQuery();
        var_dump($request);
    }
}

$service = new SearchService();
$request = new SearchRequest();

//$request->setQuery('oop');
//$request->setLimit(100);

// or with method chaining

$request->setQuery('oop')->setLimit(100);
//To achieve that all methods should return value. If method is null, we need to return $this, it will return current object.
$service->search($request);






