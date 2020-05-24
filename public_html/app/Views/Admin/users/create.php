<?php $this->layout('template') ?>
<p><?=$this->e($post)?></p>

<form action="/admin/users/add" method="post" enctype="multipart/form-data">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Добавляем пользователя</h3>
    </div>
    <div class="box-body">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Имя</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Пароль</label>
                <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Аватар</label>
                <input type="file" name="img" id="exampleInputFile">

                <p class="help-block">Какое-нибудь уведомление о форматах..</p>
            </div>
        </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button class="btn btn-default">Назад</button>
        <button class="btn btn-success pull-right">Добавить</button>
    </div>
</div>
</form>
    <!-- /.box-footer-->
</div>