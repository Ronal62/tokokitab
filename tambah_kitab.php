<?php include 'header.php'; ?>
<div class="page-heading">
    <h1 class="page-title">Basic Form</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Basic Form</li>
    </ol>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Basic form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item">option 1</a>
                            <a class="dropdown-item">option 2</a>
                        </div>
                    </div>
                </div>
                <div class="ibox-body">
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Kode Kitab</label>
                            <input class="form-control" type="text" placeholder="Masukkan Kode">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label class="ui-checkbox">
                                <input type="checkbox">
                                <span class="input-span"></span>Remamber me</label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-default" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div>
<?php include 'footer.php'; ?>