
<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
        <div class="container">
        <h3><?= $user['firstname'].' '.$user['lastname']?></h3>
        <hr>
        <?php if( session()->get('success')):?>
            <div class="alert alert-success" role="alert">
                <?=  session()->get('success')?>
        </div>
        <?php endif; ?>
        <form class="" action="/profile" method="post">
        <div class="row">
        <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname',$user['firstname'])?>">
        </div>
        </div>
        <div class="col-12 col-sm-6">
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname',$user['lastname'])?>">
        </div>
        </div>
        <div class="col-12 mt-2">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" readonly id="email" value="<?= $user['email']?>">
        </div>
        </div>
        <div class="col-12 col-sm-6 mt-2">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
        </div>
        </div>
        <div class="col-12 col-sm-6 mt-2">
        <div class="form-group">
            <label for="password_confirm">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
        </div>
        </div>
        <div class="col-12 col-sm-12 mb-3 mt-3">
        <?php if(isset($validation)): ?>
            <div class="col-12"><div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
            </div></div>
            <?php endif; ?>
        </div>
        </div>
        <div class="row">
        <div class="col-12 col-sm-4">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        
            </div>     
            </form>
        </div>
    </div>

    <div class="form-parent d-flex align-items-center justify-content-center">
        <div class="upload-pic-form mt-5 p-5">
            <form action="/saveProfilePic" class="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pfpic_path">Upload Profile Picture</label>
                    <input type="file" class="form-control" name="pfpic_path" id="pfpic_path">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php if(isset($validation)): ?>
                    <div class="col-12"><div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div></div>
                <?php endif; ?>
            </form>
        </div>
    </div>

</div>
</div>