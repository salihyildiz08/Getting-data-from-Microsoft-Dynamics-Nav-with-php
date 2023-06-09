MERHABA İYİ GÜNLER, HELLO GOOD DAY,

ÖNCELİKLE NTLM KLASÖRÜNÜ İNDİRİNİZ VE PROJENİZE DAHİL EDİNİZ.

DOWNLOAD NTLM FOLDER FIRST AND ADD IT TO YOUR PROJECT.

NTLM klasörü içinde Client.php scriptine gidiniz.

Go to the Client.php script in the NTLM folder.

php
Copy code
$baseURL = 'http://192.1.1.1:1010/DynamicsNAV100/WS/';
$cur='SASTARSOFT NAV2018';
değişkenleri kendinize göre uyarlayınız.

Customize your variables according to your needs.

Daha sonra NTLM klasörü içinde NTLMUserID.php scriptine gidip burayı da kendinize göre uyarlayınız.

Then go to the NTLMUserID.php script in the NTLM folder and adapt it for yourself.

php
Copy code
define('USERPWD','verilerin çekileceği ip adresi veya uzantı maili : şifre');
burayı da kendinize göre uyarlayınız.

Customize it for yourself here.

php
Copy code
include 'ntlm/Client.php';
dahil ediniz.

Include it in your project.

Son olarak, index.php içindeki yapıyla verileri alabilirsiniz.

Finally, you can retrieve the data using the structure in the index.php file.
