<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>


    <div class="container-fluid inner-page">
        <div class="card-panel">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Laravel Athorized.net Payment</h1>
              </div>
              <div class="col-md-12">
                @if(session('success_msg'))
                <div class="alert alert-success">{{session('success_msg')}}</div>
                @endif
                @if(session('error_msg'))
                <div class="alert alert-danger">{{session('error_msg')}}</div>
                @endif
              </div>
              <div class="col-md-6" style="background: lightgreen;border-radius: 5px;padding: 10px;">
                <div class="panel panel-primary">
                  <div>
                    <form method="post" action="{{ route('dopay.online') }}">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-8">
                          <label>Owner</label>
                          <input type="text" name="owner" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>CVV</label>
                          <input type="number" name="cvv" class="form-control" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-8">
                          <label>Card Number</label>
                          <input type="text" name="cardNumber" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                          <label>Amount</label>
                          <input type="number" name="amount" class="form-control" required>
                        </div>
                      </div>


                      <div class="row">
                        @php
                        $months = ['1' => 'Jan','2' => 'Feb','3' => 'March','4' => 'April','5' => 'May','6'
                        => 'Jun','7' => 'July','8' => 'Aug','9' => 'Sep','10' => 'OCT','11' => 'Nov','12' =>
                        'Dec'];
                        @endphp
                        <div class="form-group col-md-6">
                          <label>Exp Date</label>
                          <select class="form-control" name="expiration-month">
                            @foreach($months as $k => $v)
                            <option value="{{ $k }}">{{$v}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label>Exp Year</label>
                          <select class="form-control" name="expiration-year">
                            @for($i = date('Y'); $i <= (date('Y') + 15); $i++) <option value="{{ $i }}">
                              {{$i}}</option>
                              @endfor
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <br>
                          <button class="btn btn-primary" type="submit">Make Payment</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
