<?php
 
$user = strip_tags(trim($_REQUEST['username']));
 
if(strlen($user) <= 0)
{
  echo json_encode(array('code'  =>  -1,
  'result'  =>  'Invalid username, please try again.'
  ));
  die;
}

$query = "Select * from users where username = '$user' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
 
if($count == 0)
{
  echo json_encode(array('code'  =>  1,
  'result'  =>  "Success,username $user is still available"
  ));
  die;
}
else
{
  echo  json_encode(array('code'  =>  0,
  'result'  =>  "Sorry but username $user is already taken."
  ));
  die;
}
die;
?>
