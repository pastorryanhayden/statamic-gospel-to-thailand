<?php

namespace Statamic\Addons\DocRaptorController;

use Statamic\Extend\Controller;

class DocRaptorControllerController extends Controller
{
    /**
     * Maps to your route definition in routes.yaml
     *
     * @return mixed
     */
    public function index()
    {
        return $this->view('index');
    }
}
