<?php 

namespace Facade;

class Log
{
    protected $adapter;
    protected $filter;
    protected $normalize;

    public function __construct()
    {
        // Log storage adapter
        $this->adapter = new \stdClass;
        $this->adapter->log = function(string $content) { echo $content; return true; };

        // Filter incoming content
        $originalText = new \Decorator\TextInput();
        $this->filter = new \Decorator\PlainTextFilter($originalText);

        // Normalize log content before saving
        $this->normalize = new \stdClass;
        $this->normalize->prepare = function(string $content) { return $content; };
    }

    public function log(string $content)
    {
        $filteredContent = $this->filter->formatText($content);
        $normilizedContent = ($this->normalize->prepare)($filteredContent);
        ($this->adapter->log)($normilizedContent);
    }
}