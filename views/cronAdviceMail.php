<?php print_r( round( $total_page ) ); 
for( $i = 0; $i < 3; $i++ ){
    file_get_contents( "http://www.familyfoodllc.com/service/login/cronAdviceMail?page=".$i );
}
?>