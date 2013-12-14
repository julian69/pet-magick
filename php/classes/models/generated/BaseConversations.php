<?php

/**
 * BaseConversations
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $CONVERSATION_ID
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseConversations extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('conversations');
        $this->hasColumn('CONVERSATION_ID', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}