<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class BaseController
 * @package AppBundle\Controller
 *
 * @author Anthony Howell <anthonyhowell@gmail.com>
 */
abstract class BaseController extends Controller
{

    /** @var \Component\PageRequet */
    private $pageRequest;


    /**
     * @return \Component\PageRequet
     */
    public function getPageRequest()
    {
        return $this->pageRequest;
    }

    /**
     * @param \Component\PageRequet $pageRequest
     */
    public function setPageRequest($pageRequest)
    {
        $this->pageRequest = $pageRequest;
    }

}