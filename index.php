<?php
$json = file_get_contents(__DIR__ . '/data.json');
$contacts = json_decode($json, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>JSON</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      padding: 5px;
    }
  </style>
</head>
<body>
 
  <table>
    <tr>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Address</th>
      <th>Phone</th>
    </tr>
    
    <?php foreach($contacts as $contact) : ?>
      <tr>
        <td><?php echo $contact['firstName']?></td>
        <td><?php echo $contact['lastName']?></td>
        <td><?php echo $contact['address']['city'] . ' ' . $contact['address']['street']?></td>
        <td>
          <?php echo implode('<br>', $contact['phoneNumber']);?>
        </td>
      </tr>
    <?php endforeach; ?>
    
  </table>
  
</body>
</html>