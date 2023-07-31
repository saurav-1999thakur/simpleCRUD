<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <title>Listing</title>
    </head>
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat  container">
        
      <div class="card mb-5 mb-xl-8">
        <div class="card-body py-3">
          <form action="insert.php" method="POST" enctype="multipart/form-data" >
          <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="first_name" class="form-control" />
              <span style="color:red">*</span>
              <label class="form-label" for="form6Example1">First Name</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example1" name="last_name" class="form-control" />  
              <span style="color:red">*</span>
              <label class="form-label" for="form6Example1">Last Name</label>
            </div>
          </div>
        </div>
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
            <select name="company" class="form-control">
            <option>select Company</option>
            <option>Google</option>
            <option>Genpact</option>
            <option>Microsoft</option>
            <option>Nestle</option>
            </select>
              <label class="form-label" for="form6Example2">Prefered Company</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="email" id="form6Example2" name="email" class="form-control" />
              <label class="form-label" for="form6Example2">Email</label>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="number" id="form6Example2" name="phone" class="form-control" />
              <label class="form-label" for="form6Example2">Contact</label>
            </div>
          </div>
        </div>
        <div class="form-outline mb-4">
          <input type="file" id="form6Example3" name="profile_pic" class="form-control" />
          <label class="form-label" for="form6Example3">Profile Picture</label>
        </div>
        <div class="form-outline mb-4">
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
          </form>
        </div>
      </div>
    </body>
</html>