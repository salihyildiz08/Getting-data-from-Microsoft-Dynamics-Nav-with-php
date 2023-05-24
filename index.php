<?php

  include 'ntlm/Client.php';

  $pageURL = $baseURL.rawurlencode($cur).'/Page/SalesLines';  // Siparişlerin olduğu web servis.

// Initialize Page Soap Client 

             $page = new NTLMSoapClient($pageURL);

/*
    $params'da 11 numaralı müşterinin siparişleri için where komutu kullandık.
*/

             $params = array('filter' => array( 
                 array('Field' => 'Sell_to_Customer_No',

              'Criteria' => 11
            ),
            array('Field' => 'Outstanding_Quantity',
            'Criteria' =>'>0'
          )
           ),
             'setSize' => 0); 

             $result = $page->ReadMultiple($params); 
             $stoks = $result->ReadMultiple_Result->SalesLines;
/*
$stoks ile bütün satırları alıyoruz. foreach ile ekrana basıyoruz
örnek olarak içine 1 veri yazdım.
*/

             if (is_array($stoks)) { 
              foreach($stoks as $cust) {
                $cust->Sell_to_Customer_Name 
              }
            }




?>