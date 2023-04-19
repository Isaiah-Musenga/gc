<!DOCTYPE html>
<html>
<head>
  <title>Employee Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="text-center my-5">Employee Dashboard</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">Leave Balance</h4>
          </div>
          <div class="card-body">
            <p>Sick Leave: 10 days</p>
            <p>Maternity Leave: 90 days</p>
            <p>Emergency Leave: 5 days</p>
            <p>Half Day Leave: 10 days</p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="text-center">Leave Requests</h4>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sick Leave</td>
                  <td>2023-05-01</td>
                  <td>2023-05-03</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td>Half Day Leave</td>
                  <td>2023-05-10</td>
                  <td>2023-05-10</td>
                  <td>Approved</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
