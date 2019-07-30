<?php

use Illuminate\Database\Capsule\Manager as Capsule;

function generate_custom_invoice_number_hook($vars) {
   $invoiceid = $vars['invoiceid'];
   $customnumber = "FH-".$invoiceid;
   
   if (isset($customnumber)) {
       try {
           $updatedInvoiceNumber = Capsule::table('tblinvoices')
                                   ->where('id', $invoiceid)
                                   ->update(['invoicenum' => $customnumber,]);
       }
       catch (\Exception $e) {
           // Deal with error
       }
   }
}
add_hook("InvoiceCreationPreEmail",1,"generate_custom_invoice_number_hook");
?>