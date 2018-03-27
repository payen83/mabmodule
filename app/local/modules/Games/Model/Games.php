<?php

class Games_Model extends Core_Model_Default
{
    public function __construct($params = array())
    {
        parent::__construct($params);
        $this->_db_table = 'Games_Db_Table';
        return $this;
    }

}