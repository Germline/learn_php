<?php include 'views/partials/header.php' ?>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <td><?=$user->id?></td>
        </tr>
        <tr>
            <th>Title</th>
            <td><?=$user->email?></td>
        </tr>
        <tr>
            <th>Content</th>
            <td><?=$user->body?></td>
        </tr>
    </table>
<?php include 'views/partials/footer.php' ?>