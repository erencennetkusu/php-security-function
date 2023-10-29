<?php



 function getSecurity( $data ) {

    if ( is_array( $data ) ) {

        $varible = array_map( 'htmlspecialchars', $data );
        $response = array_map( 'stripslashes', $varible );
        $respon = str_replace( [ 'INSERT', 'DELETE', 'UPDATE', 'delete', 'insert', 'update', 'JOIN', 'SHOW', 'DECLARE', 'ALTER', 'CREATE', 'ADD' ], ' ', $response );
        return $respon;
    } else {

        $varible = htmlspecialchars( $data );
        $response = stripslashes( $varible );
        $respon = str_replace( [ 'INSERT', 'DELETE', 'UPDATE', 'delete', 'insert', 'update', 'JOIN', 'SHOW', 'DECLARE', 'ALTER', 'CREATE', 'ADD' ], ' ', $response );
        return $respon;
    }
}


$arrayData = ["SELECT * FROM users","UPDATE product SET product.name='test'"];


echo getSecurity($arrayData);