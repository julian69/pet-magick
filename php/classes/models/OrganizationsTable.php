<?php

/**
 * OrganizationsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class OrganizationsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object OrganizationsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Organizations');
    }

    public function insertOrganizations($ref){
            //var_dump($ref); exit;
    		$Organizations = new Organizations();
            $Organizations->NAME = $ref['name'];
            $Organizations->DESCRIPTION = htmlspecialchars($ref['description']);
            $Organizations->USER_ID = $ref['user_id'];
            $Organizations->ALBUM_ID = $ref['album_id'];
           /// $Organizations->PIC_ID = '';

            $Organizations->save();
    }// end insertOrganizations

    public function deleteOrganization($id){
        
        $q= Doctrine_Query::create()
            ->delete('Organizations o')
            ->where('o.ID_ORGANIZATION =?', $id);
        $q->execute();
    }

}