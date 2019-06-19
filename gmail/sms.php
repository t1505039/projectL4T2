<?php
$phoneNumber=$_GET['phoneNumber'];
try{
$soapClient = new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
$paramArray = array(
'userName'
=> "01708713775",
'userPassword'
=> "5747ab9dbb",
'mobileNumber'
=> "$phoneNumber",
'smsText'
=> "This is a SMS",
'type'
=> "TEXT",
'maskName'
=> '',
'campaignName'
=> 'Khojo',
);
$value = $soapClient->__call("OneToOne", array($paramArray));
echo $value->OneToOneResult;
} catch (Exception $e) {
echo $e->getMessage();
}
