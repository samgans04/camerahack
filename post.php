
<? php

$ date = tanggal ( 'dMYHis' );
$ imageData = $ _POST [ 'kucing' ];

if (! empty ( $ _POST [ 'cat' ])) {
error_log ( "Diterima" . "\ r \ n" , 3 , "Log.log" );

}

$ filteredData = substr ( $ imageData , strpos ( $ imageData , "," ) + 1 );
$ unencodedData = base64_decode ( $ filteredData );
$ fp = fopen ( 'cam' . $ date . '.png' , 'wb' );
fwrite ( $ fp , $ unencodedData );
fclose ( $ fp );

keluar ();
?>
