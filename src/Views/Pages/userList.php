

<?php require_once __DIR__ .'/../Layouts/Default.php';?>

<body>
    <h1>THE CODERS OFFICE</h1>
    <section class='row justify-content-center'>
        
    <div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" role="button">Add Wathever</a>

    </div>
    <div class="card-body">
       
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Date</th>
            <th>Name</th>
            <th>Issue</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>    

        <?php
        

foreach ($users as $user) {
 echo "
<tr>
<td>{$user->id}</td>
<td>{$user->date}</td>
<td>{$user->name}</td>
<td>{$user->issue}</td>
<td>               
    <a href=''><i class='lnr lnr-pencil'></i></a>
    <a href=''><i class='lnr lnr-trash'></i></a>
</td>
</tr>    
    ";
}
?>
    </tbody>
</table>
    </div>
</section>
</body>

</html>