<?php 

    if(isset($_POST['find'])){
        $flightobj= new flightController();
        $flights=$flightobj->availableFlights();
    }else{
        echo 'error2Z';
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
        <th scope="col">Passengers</th>
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
         
        <form method="post" action="Reserve"> 
        <td><input type="number" name="passengers" value="1"></td>
        <td><input type="hidden" name="id" value="<?php echo $flight['id'] ?>">
        <button type="submit" name=""class="btn btn-sm btn-success" >Reserve Now</button></td>
        </form>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>
</body>
</html>