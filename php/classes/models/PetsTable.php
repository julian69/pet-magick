<?php

/**
 * PetsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PetsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PetsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Pets');
    }


    public function getPetListByUser($id)
    {
        $q = Doctrine_Query::create()
            ->select('p.ID_PET, p.NAME, p.BREED, p.PIC_ID')
            ->from('Pets p') 
            ->AndWhere('p.USER_ID = ?',$id);
        $rta = $q->execute(); //devuelvo el objeto doctrine
        
        return $rta;
    }

    public function getPetsByUser($id)
    {
    	$q = Doctrine_Query::create()
			->from('Pets p') 
			->AndWhere('p.USER_ID = ?',$id);
		$rta = $q->execute(); //devuelvo el objeto doctrine
		
		return $rta;
    }

    public function getPetsByCat($id)
    {
        $q = Doctrine_Query::create()
            //->select('p.USER_ID, u.ID_USER, u.NAME, u.LASTNAME, u.NICKNAME, ph.PIC, k.Country, r.Region, c.City')
            ->select('p.USER_ID, u.NAME, u.LASTNAME, u.NICKNAME, ph.PIC, k.Country, r.Region, c.City')
            ->from('Pets p')
            ->innerJoin('p.Users u')
            ->leftJoin('u.Pics ph') // van con leftJoin, sino, si el usuario no tiene nada cargado, no trae nada
            ->leftJoin('u.Countries k')
            ->leftJoin('u.Regions r')
            ->leftJoin('u.Cities c')
            ->where('p.ANIMAL_CATEGORY_ID = ?', $id)
            ->groupBy('p.USER_ID');
        
        $r = $q->execute();    
        
        return $r->toArray();
    }


    //UPDATE
    public function updateInfo($array)
    {


        $q = Doctrine_Query::create()
                    ->update('Pets p')
                    ->set('p.NAME', '?', $array['name'] )
                    ->set('p.BREED', '?', $array['breed'] )
                    ->set('p.TRAITS', '?', $array['traits'] )
                    ->set('p.STORY', '?', $array['story'] );
                    
        if(isset($array['delete-pic']))
            $q->set('p.PIC_ID', 'null');

        if(!empty($array['pic']) && is_numeric($array['pic']))
            $q->set('p.PIC_ID', '?', $array['pic'] );
       

                    $q->where('p.ID_PET = ?', $array['p']);
            $rta = $q->execute();
            return $rta; 
    }
       
    public function getAlbumIdByPet($id)
    {   
        $q = Doctrine_Query::create()
            ->select('p.ALBUM_ID')
            ->from('Pets p')
            ->where('p.ID_PET = ?',$id);

        $r = $q->execute();
        $r = $r->toArray();
        return $r[0]['ALBUM_ID'];

    }

    public function setAlbum($albumId, $petId)
    {
        $q = Doctrine_Query::create()
            ->update('Pets p')
            ->set('p.ALBUM_ID', '?', $albumId )
            ->where('p.ID_PET = ?', $petId);

        $rta = $q->execute();
    }   

}