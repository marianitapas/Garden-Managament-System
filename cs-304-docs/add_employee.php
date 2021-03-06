<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="stylesheet" href="./style_add_supplier.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<title>Add a Supplier</title>
    </head>	
    <body>
		<div id="Homepage" class="tabcontent">
				<h1>Homepage</h1>
		</div>
		<div id="Inventory" class="tabcontent">
			<h1>Inventory</h1>
		</div>
		<div id = "Schedule" class="tabcontent">
			<h1>Schedule</h1>
        </div>	
        <form action="homepage.html" method="post">
            <div class="pages-btn">
            <button class="headertab" onclick="openTab('Homepage', this, 'red')" id="defaultOpen">Homepage</button>
            </div>
        </form>
        
        <form action="add_inventory.php" method="post">
            <div class="pages-btn">
                <button class="headertab" onclick="openTab('Inventory', this, 'yellow')">Inventory</button>
            </div>
        </form>

        <form action="add_schedule.php" method="post">
            <div class="pages-btn">
            <button class="headertab" onclick="openTab('Schedule', this, 'green')">Schedule</button>
            </div>
        </form>
        
        
        <h1 style="color: white"></h1>
        <br>

         <h3>Add an Employee</h3> 
        <div class="container">
        <form action="insert_employee.php" method="post">
            <div class="row">
                <div class="col-25">
                    <label>First Name</label>
                </div>
                <div class="col-75">
                    <input id="fname" name="e-fname" type="text" placeholder="Type
                    Here">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Last Name</label>
                </div>
                <div class="col-75">
                    <input id="lname" name="e-lname" type="text" placeholder="Type
                    Here">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Address</label>
                </div>
                <div class="col-75">
                    <input id="address" name="e-address" type="text" placeholder="Type
                    Here">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Phone Number</label>
                </div>
                <div class="col-75">
                    <input id="phone" name="e-phone" type="text" placeholder="Type
                    Here">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Sin Number</label>
                </div>
                <div class="col-75">
                    <input id="sin" name="e-sin" type="text" placeholder="Type
                    Here">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Employee Type</label>
                </div>
                <div class="col-75">
                <select name="employee-type">
                        <option value='Gardener'>Gardener</option>;
                        <option value='Facility'>Facility</option>;
                        <option value='Operations'>Operations</option>;                      
                </select>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Add Employee">
            </div>
        </form>
        
        <div >
            <h3>Search Employee Schedule by SIN</h3>
            <form action="search_employee_schedule.html" method="post">
                <div class="pages-btn">
                    <input type="submit" value="Search Employee Schedule">
                </div>
            </form>
        </div>   
    </body>
</html>
