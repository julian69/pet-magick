<?php

/**
 * BaseUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ID
 * @property string $NOMBRE
 * @property string $APELLIDO
 * @property string $MAIL
 * @property string $PASSWORD
 * @property string $LOGGED
 * @property Doctrine_Collection $Mensajes
 * @property Doctrine_Collection $Mensajes_2
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuarios extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('usuarios');
        $this->hasColumn('ID', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             'fixed' => false,
             'unsigned' => true,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('NOMBRE', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('APELLIDO', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('MAIL', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             'fixed' => false,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('PASSWORD', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => true,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('LOGGED', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             'fixed' => true,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Mensajes', array(
             'local' => 'ID',
             'foreign' => 'ID_FROM'));

        $this->hasMany('Mensajes as Mensajes_2', array(
             'local' => 'ID',
             'foreign' => 'ID_TO'));
    }
}