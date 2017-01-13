<?php
  
  $data = $_POST;

  // Vars
  $to  = $data['email'];
  $subject = 'Formulario Web';
  
  // body
  $message = '
    <html>
      <head>
        <title>Datos del usuario:</title>
      </head>
      <body>
        <p><label>Nombres: </label>' . $data['firstname'] . '</p>
        <p><label>Apellidos: </label>' . $data['lastname'] . '</p>
        <p><label>Celular: </label>' . $data['phone'] . '</p>
        <p><label>Email: </label>' . $data['email'] . '</p>
        <p><label>Comentarios: </label>' . $data['comments'] . '</p>
      </body>
    </html>
  ';
  
  // Header Content-type
  $header  = 'MIME-Version: 1.0' . "\r\n";
  $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  // Header aditional
  $name = $data['firstname'] . ' ' . $data['lastname'];
  $header .= 'To: ' . $name . ' <' . $data['email'] . '>' . "\r\n";
  $header .= 'From: Web Longines <info@ancora.com.pe>' . "\r\n";
  $header .= 'Cc: Katthy Lizarbe <contacto@ancora.com.pe>' . "\r\n";

  // Send
  mail($to, $subject, $message, $header);
  
  // Add register
  $data['comments'] = str_replace(',', '', $data['comments']);
  addRegister($data);

  // Redirect
  header("Location: index.php?contact=1#confirmation");

  /*function addRegister($data) {

    // Name
    $filename = 'registers.csv';

    if (file_exists($filename)) {
      print 'llego';exit;
    }
    else {

      // Headers
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=' . $filename);

      // Create file
      $output = fopen('php://output', 'w');

      // Asigned Columns
      fputcsv($output, array(
        'Nombres', 
        'Apellidos', 
        'Celular', 
        'Edad'
      ));
      
      // Insert registers
      fputcsv($output, $data);

      // Insert Empty and Footer
      fputcsv($output, array());

      exit;

    }
  }*/

  function addRegister($data) {

    $registers = array();
    if (($file = fopen("registers.csv", "r")) !== FALSE) {
      while (($dataCurrent = fgetcsv($file, 1000)) !== FALSE) {
        $registers[] = $dataCurrent;
      }
    }
    fclose($file);
    $fileNew = fopen("registers.csv", "w");
    foreach ($registers as $row) {
      fputcsv($fileNew, $row);
    }
    fputcsv($fileNew, $data);
    fclose($file);

  }

?>