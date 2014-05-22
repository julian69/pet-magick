<?php

/**
 * PopupsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PopupsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PopupsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Popups');
    }

     public function upload($ref){
     	
     	$q = Doctrine_Query::create()
	        ->update('Popups p')
	        ->set('p.CONTENT', '?', htmlspecialchars($ref['content']) )
	        ->where('p.SECTION = ?', $ref['section']);
	        $q->execute();
     }


    public  function getPopUps($ref){

          $q = Doctrine_Query::create()
            ->select('p.CONTENT')
            ->from('Popups p')
            ->where('p.SECTION = ?', $ref);

          $rta = $q->execute();
          $rta->toArray();
           return $rta[0]['CONTENT'];
    }



}