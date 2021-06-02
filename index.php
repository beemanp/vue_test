<!DOCTYPE html>
<?php include "action.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vue APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div class="container" id="app">
        <h2>{{message}}</h2>
        <div class=row>
            <div class="col-md-12">
                <form @submit="SubmitData" @reset="ResetData" method="POST">
                    <div class="form-group">
                        <label for="">ชื่อจริง</label>
                        <input type="text" v-model="form.name" name="name" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">นามสกุล</label>
                        <input type="text" v-model="form.lname" name="lname" class="form-control" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-success">บันทึก</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
        <div class="py-2">
            {{form}}
        </div>
        <table class="table">
            <thead>
                <tr>
                    <td>id</td>
                    <td>ชื่อ</td>
                    <td>นามสกุล</td>
                    <td>แก้ไข</td>
                    <td>ลบ</td>
                </tr>
            </thead>
<tbody>
    <tr v-for="row in users">
        <td>{{row.id}}</td>
        <td>{{row.name}}</td>
        <td>{{row.lname}}</td>
        <td><button type="button" class="btn btn-primary" @click="editUser(row.id)">แก้ไข</button></td>
        <td><button type="button" class="btn btn-danger">ลบ</button></td>
    </tr>
</tbody>

        </table>
    </div>
</body>
<script src="app.js"></script>
</html>
test