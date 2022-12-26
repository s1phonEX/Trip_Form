<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trip_Form</title>
  <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>
  <div class="background_image">
    <div class="container-Ig">
      <div class="text-center">
        <h2>Trip to Los Angeles,California</h2>
        <p>College IV</p>
      </div>
      <!--<div class="position-relative m-4">
          <div class="progress" style="height: 1px">
            <div
              class="progress-bar"
              role="progressbar"
              aria-label="Progress"
              style="width: 50%"
              aria-valuenow="50"
              aria-valuemin="0"
              aria-valuemax="100"
            ></div>
          </div>
          <button
            type="button"
            class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
            style="margin-left: 30px"
          >
            Your Details
          </button>
          <button
            type="button"
            class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
          >
            Payment
          </button>
          <button
            type="button"
            class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
            style="margin-right: -190px"
          >
            Complete
          </button> -->
    </div>
    <div class="row justify-content-center my-5">
      <div class="col-Ig-6">
        <form method="POST" action="proccess.php">
          <div class="row">
            <div class="col-6 text_bold">First name</div>
            <div class="col-6 text_bold">Last name</div>
          </div>
          <div class="row">
            <div class="col-6">
              <input type="text" class="form-control" name="Firstname"required />
            </div>
            <div class="col-6">
              <input type="text" class="form-control" name="Lastname" required />
            </div>
          </div>
          <div class="row g-3">
            <div class="col-md-2 text_bold">Age</div>
            <div class="col-md-4 text_bold">Roll no.</div>
            <div class="col-6 text_bold">Phone no.</div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <input type="numeric" class="form-control" name="age" required />
            </div>
            <div class="col-md-4">
              <input type="numeric" class="form-control" name="Rollno" required />
            </div>
            <div class="col-6 input-group mb-3" style="width: 50% !important">
              <span class="input-group-text">+91</span>
              <input type="numeric" class="form-control" name="Phoneno" aria-label="phno" required />
            </div>
          </div>
          <select class="form-select shadow-sm p-3 mb-5 bg-light rounded" name="sem">
            <option value="sem1" selected>Sem I</option>
            <option value="sem2">Sem II</option>
            <option value="sem3">Sem III</option>
            <option value="sem4">Sem IV</option>
            <option value="sem5">Sem V</option>
            <option value="sem6">Sem VI</option>
            <option value="sem7">Sem VII</option>
            <option value="sem8">Sem VIII</option>
          </select>
          <div class="col-6 text_bold row g-1">Branch:</div>
          <select class="form-select" name="branch">
            <option value="Computer Science">Computer Science</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Electronics & Telecommunication">Electronics & Telecommunication</option>
            <option value="Electrical">Electrical</option>
            <option value="Information Technology" selected>Information Technology</option>
          </select>
          <div class="col-6 text_bold">Email Id:</div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" name="addon-wrapping">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
              </svg>
            </span>
            <input type="text" class="form-control" name="email" placeholder="@gmail.com" aria-label="l_email" aria-describedby="addon-wrapping" required/>
          </div>
          <div class="row">
            <div class="col-6 text_bold">Parent Phone no.</div>
            <div class="col-6 text_bold">Aadhaar Card no.</div>
          </div>
          <div class="row">
            <div class="col-6 input-group mb-3" style="width: 50% !important">
              <span class="input-group-text">+91</span>
              <input type="numeric" class="form-control" name="parent_ph" required />
            </div>
            <div class="col-6">
              <input type="numeric" class="form-control" name="aadhar" required/>
            </div>
          </div>
          <div class="text-center" style="text-align: center;"><input class="btn btn-primary" type="submit" value="Submit" name="submit"></div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
</body>
</html>