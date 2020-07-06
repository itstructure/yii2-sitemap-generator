<?php

namespace Itstructure\Sitemap;

/**
 * Class SitemapArrayItem
 * @package Itstructure\Sitemap
 */
class SitemapArrayItem
{
    /**
     * @var array
     */
    public $item = [];

    /**
     * SitemapArrayItem constructor.
     * @param array $item
     */
    public function __construct(array $item)
    {
        $this->item = $item;
    }

    /**
     * @param $name
     * @param null $default
     * @return mixed|null
     */
    public function getItemParam($name, $default = null)
    {
        return isset($this->item[$name]) ? $this->item[$name] : $default;
    }

    /**
     * @return mixed|null
     */
    public function getSitemapLoc()
    {
        return $this->getItemParam('loc');
    }

    /**
     * @return mixed|null
     */
    public function getSitemapLastmod()
    {
        return $this->getItemParam('lastmod');
    }

    /**
     * @return mixed|null
     */
    public function getSitemapChangefreq()
    {
        return $this->getItemParam('changefreq');
    }

    /**
     * @return mixed|null
     */
    public function getSitemapPriority()
    {
        return $this->getItemParam('priority');
    }

    /**
     * @return mixed|null
     */
    public function getSitemapAlternateLinks()
    {
        return $this->getItemParam('alternateLinks', []);
    }
} 