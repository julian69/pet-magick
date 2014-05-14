<?php

/**
 * ProjectsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProjectsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProjectsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Projects');
    }

    public function insertProjects($ref){

    		$Projects = new Projects();
            $Projects->TITLE = $ref['title'];
            $Projects->DESCRIPTION = $ref['description'];
            $Projects->USER_ID = $ref['user_id'];
            $Projects->ALBUM_ID = $ref['album_id'];

            $Projects->save();
          //  return $Projects->ID_PROJECT;
    }// end insertProjects

  /*  public function getAlbumIdByProject($id){

        $q = Doctrine_Query::create()
            ->select('p.ALBUM_ID')
            ->from('Projects p')
            ->where('p.ID_PROJECT = ?',$id);

        $r = $q->execute();
        $r = $r->toArray();
        return $r[0]['ALBUM_ID'];
    }
    */
    
    public function deleteProject($id)
    {
        $q= Doctrine_Query::create()
            ->delete('Projects p')
            ->where('p.ID_PROJECT =?', $id);
        $q->execute();
    }

    public function editProject($ref)
    {
        $q = Doctrine_Query::create()
        ->update('Projects p')
        ->set('p.TITLE', '?', $ref['title'] )
        ->set('p.DESCRIPTION', '?', $ref['description'] )
        ->where('p.ID_PROJECT  = ?', $ref['project_id']);
        $rta = $q->execute();
    }

    public function howmuch_projects(){

         $q = Doctrine_Query::create()
        ->select('p.ID_PROJECT')
        ->from('Projects p');

        $r = $q->execute();
        return $r->toArray();

    }

}