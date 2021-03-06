
<?php
    if(isset($_POST['find'])){
        $flightobj= new flightController();
        $flights=$flightobj->findFlights();
    }else{
        $flightobj= new flightController();
        $flights=$flightobj->getAllFlights();
    }



    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div class="col-md-11 mx-auto card card-body bg-light " >
    <div>
    <a href="<?php echo BASE_URL;?>addflight"> Add flight </a>
    </div>
    <div>
    <a href="<?php echo BASE_URL;?>reservations"> Reservations </a>
    </div>
    <form method="POST" class="float-right mb-2 d-flex flex-row">
    <input type="text" class="form-control" name="search"placeholder="search" >
    <button class="btn btn-info btn-sm" name="find" type="submit"></button>
    </form>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Places</th>
        <th scope="col">Depart</th>
        <th scope="col">Destination</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($flights as $flight):?>
       
        <td><?php echo $flight['id']; ?> </td>
        <td><?php echo $flight['flightDate']; ?> </td>
        <td><?php echo $flight['flightTime']; ?> </td>
        <td><?php echo $flight['places']; ?> </td>
        <td><?php echo $flight['departCity']; ?> </td>
        <td><?php echo $flight['arriveCity']; ?> </td>
        <td><?php echo $flight['Price']; ?> </td>
        <td> 
        <form method="post" action="update"> 
        <input type="hidden" name="id" value="<?php echo $flight['id'] ?>">
        <button class="btn btn-sm btn-warning" >Edit</button>
        </form>
        <form method="post" action="delete"> 
        <input type="hidden" name="id" value="<?php echo $flight['id'] ?>">
        <button class="btn btn-sm btn-danger" >Delete</button>
        </form>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</body>
</html>