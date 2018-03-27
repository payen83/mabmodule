<?php

class PhotoFrame_Model extends Core_Model_Default
{
    public function __construct($params = array())
    {
        parent::__construct($params);
        $this->_db_table = 'Photo_Frames_Db_Table';
        return $this;
    }

}