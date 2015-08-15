<script src="jquery.js">

$(document).ready(function(){
  $("div").focusin(function(){
    $(this).css("background-color","gray");
  });
});
</script>


<form action="LoginValidation.php" method='post'>
<input type='hidden' name='s' value='0'>
<input type='hidden' name='login' value='1'>
<div align='center' id='login_box'>
  
  <p><br><br></p>
  <table style='width: 200px;'>
    <tr class='Normal'>
      <td nowrap align='right'>Login:</td>
      <td nowrap><input type='text' name='username' id='username' size='20' value=''></td>
    </tr>
    <tr class='Normal'>
      <td nowrap align='right'>Password:</td>
      <td nowrap><input type='password' name='password' id='password' size='20' value=''></td>
    </tr>
    <tr class='Normal'>
      <td colspan='2' align='center' nowrap><div style='margin: 4px 0px 0px 0px;'><input type='checkbox' name='auto_login' id='auto_login' value='1'><label for='auto_login' style='font-size: 8pt'>Login automatically in the future.</label></div></td>
    </tr>
    <tr class='Normal'>
      <td colspan='2' align='center'><br>
          <input type='submit' name='submit' value='Login' style="border:1px solid #9FB8FF;color:#FFFFFF;background-color:#9FB8FF;" onClick='history.go(-1)' >
      </td>
    </tr>
  </table>
  
</div>


