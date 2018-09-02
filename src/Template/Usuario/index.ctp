
 <?php


if($current_user['id_rol']==1)//rol de administrador
{
 echo $this->element('adminprofile');
}
 

if($current_user['id_rol']==2)//rol de profesor 
{
 echo $this->element('profesorprofile');
}



if($current_user['id_rol']==3)//rol de alumno 
{
 echo $this->element('alumnoprofile');
}
 
 
 ?>