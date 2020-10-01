<?php 

/*   echo 'Hola amikos como estan, el dia \' es feliz y 
        nosotros estamos felices \\ enojados de estar aqui </br>';

  $courses = ['backend' => 'PHP']; */

/*   $teacher = 'Edgar';
  $Edgar = 'Maestro de sistemas web';

  echo "$teacher es ${$teacher}"; */

  /* echo "$user->name quiere aprender {$courses['backend']} </br>"; 
  echo "$user->name quiere aprender {$courses['backend']} </br>";*/


  function getTeacher(){
    return 'teacher';
  }

  $teacher = 'Edgar';

  echo "{ ${getTeacher()} } enseña PHP"
 ?>