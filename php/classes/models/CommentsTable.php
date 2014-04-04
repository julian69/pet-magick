<?php

/**
 * CommentsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CommentsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CommentsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Comments');
    }

    public function post($array)
    {

        $comment = htmlspecialchars($array['comment']);
        
    	$c = new Comments;
        $c->COMMENT = $comment;
        $c->DATE = date('Y-m-d H:i:s');
        $c->USER_ID = $_SESSION['id'];
        $c->TRIBUTE_ID = $array['tribute'];
        $c->save();

        $lm = $c->ID_COMMENT;

        $q = Doctrine_Query::create()
            ->select('c.*, u.NAME, u.LASTNAME, p.PIC')
            ->from('Comments c')
            ->leftJoin('c.Users u')
            ->leftJoin('u.Pics p')
            ->where('c.ID_COMMENT =?', $lm);
        $ob = $q->execute();


    
        $ar = $ob->toArray();

         $dNewDate = strtotime($ar[0]['DATE']);
         $ar[0]['DATE'] = date('l jS F Y', $dNewDate);

        if(isset($ar[0]['Users']['Pics']['PIC']))
        {
            $pic = $ar[0]['Users']['Pics']['PIC'];
            $ar[0]['Users']['Pics']['PIC'] = 'img/users/'.$pic;
            $ar[0]['Users']['Pics']['THUMB'] = 'img/users/thumb/'.$pic;
        }
        else
        {
            $ar[0]['Users']['Pics']['PIC'] = 'img/users/default.jpg';
            $ar[0]['Users']['Pics']['THUMB'] = 'img/users/thumb/default.jpg';
        }   

        $ob = json_encode($ar);



        return $ob;


    }

    public function getComments($id)
    {
        $q = Doctrine_Query::create()
            ->select('c.*, u.NAME, u.LASTNAME, p.PIC')
            ->from('Comments c')
            ->leftJoin('c.Users u')
            ->leftJoin('u.Pics p')
            ->where('c.TRIBUTE_ID =?', $id);
        $ob = $q->execute();

        if($ob)
            return $ob->toArray();
        else
            return false;
    }
}