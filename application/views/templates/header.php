<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title ?> - Dengue Information</title>
<?php 
echo link_tag('styles/style.css');
if($script != "")
$this->load->view('scripts/'.$script);
?>
</head>
<body>
<div id="main_container">
<div id="header">
<div id="logo"><a href="home.html"><img src="<?php echo "$base/images/PLACEHOLDER.gif"; ?>" alt="" title="" border="0"></a></div>
        
        <div id="menu">
            <ul>                                        
                <li><a class="current" href="home.html" title="">home</a></li>
                <li><a href="services.html" title="">services</a></li>
                <li><a href="#" title="">clients</a></li>
                <li><a href="#" title="">testimonials</a></li>
                <li><a href="contact.html" title="">contact us</a></li>
            </ul>
        </div>
        
    </div>
    
    <div class="green_box">
    	<div class="clock">
        <img src="<?php echo "$base/images/map.png"; ?>" alt="" title="">             
        </div>
        <div class="text_content">
        <h1>PLACEHOLDER</h1>
        <p class="green">
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed 
do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim 
ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui 
officia deserunt mollit anim id est laborum." 
        </p>
        <div class="read_more"><a href="#">read more</a></div>
        </div>
        <?php if($this->session->userdata('logged_in') != TRUE ) {?>
        <div id="right_nav">
	<?php 
$attributes = array(
						'id' => 'TPlogin'
					);
echo form_open('login/check',$attributes); ?>
				<label>Username:</label>
				<input name="TPusername-txt" type="text"/><br/>
				<label>Password:</label>
				<input name="TPpassword-txt" type="password"/><br/>
				<input type="submit" value="Login"/>
			</form>
        </div>       
        <?php }?>
    
    </div>