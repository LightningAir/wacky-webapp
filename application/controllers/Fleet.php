<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* The controller for the Fleet view.
*/
class Fleet extends Application
{

    function __construct()
	{
		parent::__construct();
	}

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->data['pagebody'] = 'fleet';
        $source = $this->fleetModel->all();
        $this->data['fleet'] = $source;
        $this->render();
    }

    /**
    * Changes the view to the view for a single plane. Adds the plane's
    * information to the available data.
    */
    public function show($key) {

        $this->data['pagebody'] = 'plane';

        $source = $this->fleetModel->get($key);
        //Add plane's fields to the available data
        $this->data = array_merge($this->data, (array) $source);

        $this->render();
    }
}
