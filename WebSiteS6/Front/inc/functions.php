<?php
include("connection.php");

mysqli_set_charset(dbconnect(), 'utf8' );
function getAllPublication()
{
   $sql="SELECT * FROM Publication";
    $sql=sprintf($sql);
    $result = mysqli_query(dbconnect(),$sql);
    return $result;
}



function getFiche($id)
{
    $sql="SELECT * FROM Publication WHERE idPublication='%s'";
    $sql=sprintf($sql,$id);
    $result = mysqli_query(dbconnect(),$sql );   
    return $result;
}

function getPublicationParDate($date)
{
    $sql="SELECT * FROM Publication WHERE datePublication='%s'";
    $sql=sprintf($sql,$date);
    $result = mysqli_query(dbconnect(),$sql );   
    return $result;
}

function getAllCategory()
{
    $sql="SELECT * FROM Categorie ";
    $sql=sprintf($sql);
    $result = mysqli_query(dbconnect(),$sql );
    return $result;
}

function getPublicationParCategory($id)
{
    $sql="SELECT * FROM Publication WHERE idCategorie='%s' ";
    $sql=sprintf($sql,$id);
    $result = mysqli_query(dbconnect(),$sql );
    return $result;
}

function getAllPays()
{
    $sql="SELECT * FROM Pays ";
    $sql=sprintf($sql);
    $result = mysqli_query(dbconnect(),$sql );
    return $result;
}

function getPublicationParPays($id)
{
    $sql="SELECT * FROM Publication WHERE idPays='%s' ";
    $sql=sprintf($sql,$id);
    $result = mysqli_query(dbconnect(),$sql );
    return $result;
}

function recherchePublication($mot)
{
    $sql="SELECT * FROM Publication WHERE contenu like '%s' or titre like '%s' or resume like '%s' ";
    $sql=sprintf($sql,"%".$mot."%","%".$mot."%","%".$mot."%");
    $result = mysqli_query(dbconnect(),$sql );
    return $result;
}

function insertMessage($nom,$mail,$sujet,$message)
{
    
    $sql="INSERT INTO Lecteur values(NULL,'%s','%s','%s','%s')";
    $sql=sprintf($sql, $nom,$mail, $sujet,$message);
    mysqli_query(dbconnect(), $sql);

}

function getMessage()
{
     $sql="SELECT * FROM Lecteur ";
    $sql=sprintf($sql);
    $result = mysqli_query(dbconnect(),$sql);
    return $result;
}
 function verifAccount($login,$mdp)
    {
        $sql = "SELECT * from Personnel where login = '%s' and mdp = '%s' ";

        $sql=sprintf($sql, $login,SHA1($mdp));
        $result = mysqli_query(dbconnect(), $sql);   
        return $result;
    }

function insertPublication($idPays,$idCategorie,$titre,$resume,$contenu,$image,$date)
{
    $sql="INSERT INTO Publication values(NULL,%s,%s,'%s','%s' ,'%s','%s','%s')";
    $titre = str_replace("'", "\'", $titre);
    $resume = str_replace("'", "\'", $resume);
    $contenu = str_replace("'", "\'", $contenu);
    $sql=sprintf($sql,$idPays,$idCategorie,$titre,$resume,$contenu,$image,$date);
    var_dump($sql);
    mysqli_query(dbconnect(), $sql);
}

 function supprimerPublication($id)
      {
        $sql = "DELETE FROM Publication where idPublication='%s'";
        $sql = sprintf($sql,$id);
        $this->db->query($sql); 
      }

/*function get_news($id)
{
    $sql="SELECT * FROM news WHERE id='%s'";
    $sql=sprintf($sql,$id);
    $news_req = mysqli_query(dbconnect(),$sql );
    $result=mysqli_fetch_assoc($news_req);
    mysqli_free_result($news_req);    
    return $result;
}

function get_comment($news_id)
{
    $sql="SELECT * FROM commentaires WHERE news_id='%s'";
    $sql=sprintf($sql,$news_id);
    $comment_req = mysqli_query(dbconnect(), $sql );
    $result = array();
    while ($comment = mysqli_fetch_array($comment_req)) {
        $result[] = $comment;
    }
    mysqli_free_result($comment_req);
    return $result;
}

function insert_comment($comment)
{
    
    $sql="INSERT INTO commentaires SET news_id='%d', auteur='%s', texte='%s', date=NOW()";
    $sql=sprintf($sql, $comment['news_id'],$comment['auteur'], $comment['texte']);
    mysqli_query(dbconnect(), $sql);

}*/

?>