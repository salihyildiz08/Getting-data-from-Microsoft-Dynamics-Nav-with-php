MERHABA İYİ GÜNLER, HELLO GOOD DAY,

ÖNCELİKLE NTLM KLASÖRÜNÜ İNDİRİNİZ VE PROJENİZE DAHİL EDİNİZ.

DOWNLOAD NTLM FOLDER FIRST AND ADD IT TO YOUR PROJECT.

NTLM klasörü içinde Client.php scriptine gidiniz.

Go to the Client.php script in the NTLM folder.

->Burada ->Here

-> $baseURL = 'http://192.1.1.1:1010/DynamicsNAV100/WS/'; ->$cur='SASTARSOFT NAV2018';

->değişkelerini kendinize göre uyarlayınız. ->Customize your variables.

Daha sonra NTLM klasörü içinde NTLMUserID.php scriptine gidip burayıda kendinize göre uyarlayınız.
Then go to the NTLMUserID.php script in the NTLM folder and adapt it for yourself.
->Microsoft Dynamics Nav'da Web service için oluşturduğumuz kullanıcı ve parolayı kullanıyoruz. ->We use the user and password we created for the Web service in Microsoft Dynamics Nav.

->define('USERPWD','verilerin çekileceği ip adresi veya uzantı maili : şifre'); ->->define('USERPWD','ip address or extension mail from which data will be pulled : Password');

->burayıda kendinize göre uyarlayınız. ->Customize it for yourself here.
 -> include 'ntlm/Client.php'; ->dahil ediniz.
 
 
 -> daha sonra index.php içinde ki yapı ile verileri alabilirsiniz.
