<div class="container">
<div class="row">
    <div class="col-12 d-flex flex-column align-items-center" style="margin: 0 auto;">
        <h1>Hello, <?= session()->get('firstname') ?>!</h1>
        <br>
        <div class="profile-pic-box">
            <img src="/profile_pictures/<?= session()->get('pfpic_path')?>">
        </div>
    </div>
    
</div>

</div>