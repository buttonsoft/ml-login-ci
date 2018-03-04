<form method="post" action="<?php echo base_url().'index.php/login/check_login' ?>">
<center>
    <h1><strong>Please Login</strong></h1>
    <!-- message notification -->
    <?php 
    $msg = $this->session->flashdata('msg'); 
    if ((isset($msg)) && (!empty($msg))) : ?>
        <strong><?php echo $msg; ?></strong>
        <br /><br />
    <?php endif; ?>
    <table>
        <tr>
            <td>Username : </td>
            <td><input type="text" name="username" placeholder="Username" required="" autofocus /></td> 
        </tr>
        <tr>
            <td>Password : </td>
            <td><input type="password" name="password" placeholder="Password" required="" autofocus /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Login" /></td>
        </tr>
    </table>
</center>
</form>