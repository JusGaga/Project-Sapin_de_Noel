
<?php
require_once "ressources.php";
require_once "fonctions.php";


        $query  = "select * from utilisateur_inscrit;";
        //print( $query );
        $res = query( $query );
        
        //print_r($res );

        $tab = [];
        while ( $ligne = $res->fetch_assoc())
            $tab[] = $ligne;

        $ligne = $tab[0];
        $id        = $ligne[ 'id' ];
        $pseudo  = $ligne[ 'pseudo' ];

        $dict[ 'list' ] = $tab;
        $dict[ 'id' ] = $id;
        $dict[ 'pseudo' ] = $pseudo;
       
        

        print( json_encode( $dict ) );
?>