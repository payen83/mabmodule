<?php

class Ebook_Model extends Core_Model_Default
{
    public function __construct($params = array())
    {
        parent::__construct($params);
        $this->_db_table = 'Ebook_Db_Table';
        return $this;
    }

}