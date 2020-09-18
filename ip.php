<? php

jika (! kosong ( $ _SERVER [ 'HTTP_CLIENT_IP' ]))
    {
      $ ipaddress = $ _SERVER [ 'HTTP_CLIENT_IP' ]. "\ r \ n" ;
    }
elseif (! kosong ( $ _SERVER [ 'HTTP_X_FORWARDED_FOR' ]))
    {
      $ ipaddress = $ _SERVER [ 'HTTP_X_FORWARDED_FOR' ]. "\ r \ n" ;
    }
lain
    {
      $ ipaddress = $ _SERVER [ 'REMOTE_ADDR' ]. "\ r \ n" ;
    }
$ useragent = "Agen-Pengguna:" ;
$ browser = $ _SERVER [ 'HTTP_USER_AGENT' ];


$ file = 'ip.txt' ;
$ korban = "IP:" ;
$ fp = fopen ( $ file , 'a' );

fwrite ( $ fp , $ korban );
fwrite ( $ fp , $ ipaddress );
fwrite ( $ fp , $ useragent );
fwrite ( $ fp , $ browser );


fclose ( $ fp );
