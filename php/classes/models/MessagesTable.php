<?php

/**
 * MessagesTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MessagesTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object MessagesTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Messages');
    }

//====================================================================== SUBMIT

      public  function submit($from, $to, $message){

				$now = date('Y-m-d H:i:s');

    	 		$msg = new Messages();
	            $msg->FROM_USER_ID = $from;
	            $msg->TO_USER_ID = $to;
	            $msg->MESSAGE = $message;
	            $msg->STATUS = 0; // hacer q sea 0 por default en la BD
	            $msg->DATE = $now;

	            $msg->save();

            //me devuelve el id del mensaje, todo lo siguiente es para poder imprimirlo en el chat.

        $msgSent = $msg->ID_MESSAGE;

        $q = Doctrine_Query::create()
                ->select('m.ID_MESSAGE, m.MESSAGE, m.DATE, m.STATUS, m.FROM_USER_ID, m.TO_USER_ID, u.NAME, u.LASTNAME, u.NICKNAME')
                ->from('messages m')
                ->innerJoin('m.Users u')
                ->AndWhere('m.ID_MESSAGE = ?', $msgSent);
                

        $rta = $q->execute();

        $json = array();

        foreach($rta as $m) 
        {

           $json[] = $m->toArray();
        }

        $rta = json_encode($json);



        return $rta;


    }// End submit


//====================================================================== READ


    public function getAllMessages($from){

            $q = Doctrine_Query::create()
                ->select('m.ID_MESSAGE, m.MESSAGE, m.DATE, m.STATUS, m.FROM_USER_ID, m.TO_USER_ID, u.NAME, u.LASTNAME, u.NICKNAME')
                ->from('messages m')
                ->innerJoin('m.Users u')
                ->AndWhere('m.FROM_USER_ID = ?', $from)
                ->AndWhere('m.TO_USER_ID = ?', $_SESSION['id'] )
                ->orWhere('m.FROM_USER_ID = ?', $_SESSION['id'])
                ->AndWhere('m.TO_USER_ID = ?', $from )
                ->orderBy('m.DATE ASC');


                 $rta = $q->execute();

                 $json = array();

                 foreach($rta as $m) 
                 {
                    $json[] = $m->toArray();
                 }

                 $rta = json_encode($json);

                for ($i=0; $i < sizeof($json); $i++) { 
                    
                     $q = Doctrine_Query::create()
                        ->update('messages m')
                        ->set('m.STATUS' , '?', '1')
                        ->AndWhere('m.ID_MESSAGE = ?', $json[$i]['ID_MESSAGE']) 
                        ->AndWhere('m.TO_USER_ID = ?', $_SESSION['id'])
                        ->AndWhere('m.STATUS = ?', '0');

                     $q->execute();
                  }

                  return $rta;
    }// End read


  public function getNewMessages($from){

                $q = Doctrine_Query::create()
                ->select('m.ID_MESSAGE, m.MESSAGE, m.DATE, m.STATUS, m.FROM_USER_ID, m.TO_USER_ID, u.NAME, u.LASTNAME, u.NICKNAME')
                ->from('messages m')
                ->innerJoin('m.Users u')
                ->AndWhere('m.FROM_USER_ID = ?', $from)
                ->AndWhere('m.TO_USER_ID = ?', $_SESSION['id'] )
                ->AndWhere('m.STATUS = ?', '0')
                ->orderBy('m.DATE ASC');


                 $rta = $q->execute();

                 $json = array();

                 foreach($rta as $m) 
                 {

                     $json[] = $m->toArray();
                 }

                 if(sizeof($json) == 0)
                    return null;

                 $rta = json_encode($json);

                for ($i=0; $i < sizeof($json); $i++) { 
                    
                     $q = Doctrine_Query::create()
                        ->update('messages m')
                        ->set('m.STATUS' , '?', '1')
                        ->AndWhere('m.ID_MESSAGE = ?', $json[$i]['ID_MESSAGE']) 
                        ->AndWhere('m.TO_USER_ID = ?', $_SESSION['id']);
                     $q->execute();
                  }

                  return $rta;
    }// End read




     public function getHeaders($to){

            $q = Doctrine_Query::create()
                ->select('*')
                ->from('messages m')
                ->groupBy('m.FROM_USER_ID');


            $subq = $q->createSubquery()
                ->select("u.ID_USER, u.NAME, u.LASTNAME, u.NICKNAME, CONCAT(LEFT(m.MESSAGE,35),'...') AS MESSAGE, m.DATE, m.STATUS")
                ->from('users u')
                ->innerJoin('u.Messages m')
                ->AndWhere('m.TO_USER_ID = ?', $to)
                ->orderBy('m.DATE DESC');


                 $rta = $subq->execute();

                 $json = array();

                 foreach($rta as $m) 
                 {

                     $json[] = $m->toArray();
                 }

                 $rta = json_encode($json);
                 return $rta;
    }// End read




     public function getNewHeaders($to){

            $q = Doctrine_Query::create()
                ->select('*')
                ->from('messages m')
                ->groupBy('m.FROM_USER_ID');
           

            $subq = $q->createSubquery()
                ->select("u.ID_USER, u.NAME, u.LASTNAME, u.NICKNAME, CONCAT(LEFT(m.MESSAGE,35),'...') AS MESSAGE, m.DATE, m.STATUS")
                ->from('users u')
                ->innerJoin('u.Messages m')
                ->AndWhere('m.TO_USER_ID = ?', $to )
                ->AndWhere('m.DATE > ?', $_SESSION['last-header'] )
                ->orderBy('m.DATE DESC');


                 $rta = $subq->execute();

                 $json = array();
                
                 foreach($rta as $m) 
                 {

                     $json[] = $m->toArray();
                 }

                 if(sizeof($json) == 0)
                    return null;

                 $rta = json_encode($json);

                  return $rta;
    }// End read


}

