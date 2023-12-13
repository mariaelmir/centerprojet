<head>
</head>
<body>
    <form role="form" method="post" action="./index.php?page=savestudent" enctype="multipart/form-data">
        <div class="form-group">
            <label>name</label>
            <input name="name" class="form-control"/>
</div>

<div class="form-group">
            <label>phone</label>
            <input name="phone" class="form-control"/>
</div>

<div class="form-group">
            <label>email</label>
            <input name="email" class="form-control"/>
</div>

<div class="form-group">
            <label>educ-lvl</label>
            <input name="educ_lvl" class="form-control"/>
</div>

<div class="form-group">
            <label>age</label>
            <input name="age" class="form-control"/>
</div>

<div class="form-group">
            <label>address</label>
            <textarea name="address"></textarea>

</div>
<div class="form-group">
            <label>file</label>
            <input type="file" name="pic" class="form-control"/>
</div>


<div class="form-group">
      <button name="submit" type="submit" class="btn btn-primary form-control"> save </button>
</div>

