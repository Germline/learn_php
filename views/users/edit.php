<?php include 'views/partials/header.php' ?>
<form action="/admin/users/edit?id=<?=$user->id?>" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" value="<?=$user->title?>" class="form-control" id="title" placeholder="Title" name="title">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea 
            class="form-control"
            id="body"
            rows="3"
            placeholder="Write something awesome..."
            name="body"><?=$user->body?></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Update">
</form>
<?php include 'views/partials/footer.php' ?>