<?php

class PhotoFramesController extends Application_Controller_Default
{
    public function addPhoto()
    {
        $values = $this->getRequest()->getPost();
    }
}
