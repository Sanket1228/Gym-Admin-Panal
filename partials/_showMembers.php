<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Showing the list</title>
</head>

<body>

    <?php
    echo '<div class="jumbotron jumbotron-fluid mb-0">
        <div class="container">
            <h1 class="display-4 font-weight-bold font-italic">Showing the list</h1>
            <input class="form-control my-2 my-lg-0 mr-sm-2" type="search" placeholder="Search" id="myinput" name="search" aria-label="Search" onkeyup="searchFun()">
            <a href="/adminGym/profile.php" class="btn btn-outline-success float-right my-2 ml-2">Back</a>
        </div>
        </div>';
    ?>

    <table class="table container" id="mytable">
        <thead>
            <tr>
                <th scope="col">Sr. No.</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Address</th>
                <th scope="col">Plan</th>
                <th scope="col">Payment</th>
            </tr>
        </thead>
        <?php
        include '_dbconnect.php';

        $Sql = 'select * from `users`';
        $result = mysqli_query($conn, $Sql);
        $numRows = mysqli_num_rows($result);
        if ($numRows > 0) {
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['roll'] == 0) {
                    echo '<tbody>
                        <tr>
                          <th scope="row">' . $i . '</th>
                          <td>' . $row['fname'] . ' ' . $row['lname'] . '</td>
                          <td>' . $row['mnumber'] . '</td>
                          <td>' . $row['address'] . '</td>
                          <td>' . $row['plan'] . '</td>
                          <td>' . $row['payment'] . '</td>

                          <td><a class="btn btn-primary" href="_viewProfile.php?$id=' . $row['user_id'] . '&$fname=' . $row['fname'] . '&$lname=' . $row['lname'] . '&$email=' . $row['email'] . '&$mnumber=' . $row['mnumber'] . '&$age=' . $row['age'] . '&$weight=' . $row['weight'] . '&$height=' . $row['height'] . '&$address=' . $row['address'] . '&$desc=' . $row['desc'] . '&$plan=' . $row['plan'] . '&$username=' . $row['username'] . '&$payment=' . $row['payment'].'" role="button">View / Update</a></td>

                          <td><a class="btn btn-primary remove" href="_delete.php?$id=' . $row['user_id'] . '" role="button" onclick="return confirmDelete()"> Delete</a></td>
                        </tr>
                        </tbody>';
                }
                $i = $i + 1;
            }
        }
        ?>
    </table>

    <script type="text/javascript">
        function confirmDelete(){
            return confirm("Are you sure to delete this file ");
        }

        const searchFun = ()=>{
            let filter = document.getElementById('myinput').value.toUpperCase();
            let tr = document.getElementsByTagName('tr'); 

            for(var i =0; i<tr.length; i++){
                let td = tr[i].getElementsByTagName('td')[0];
                if(td){
                    let textvalue = td.textContent || td.innerHTML;
                    if(textvalue.toUpperCase().indexOf(filter) > -1){
                        tr[i].style.display = "";
                    }else{
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>