@include('layouts.app')
<div class="container">
  <div class="card">
    <div class="card-header card-header-text">
      <h4>BUY RECIPE</h4>
      <small><i>Enter your email and select a payment option</i></small>
    </div>
    <form class="" action="index.html" method="post">
      <div class="md-form input-group input-group-lg">
        <div class="input-group-prepend">
          <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-lg">Email</span>
        </div>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-lg">
      </div>
      <div class="payment-buttons">
        <a href="{{ URL::route('paypalform') }}" class="btn btn-outline">PayPal</a>
        <a href="{{  }}" >Register 1</a>
        <a href="#" class="btn btn-outline">Visa/MasterCard</a>
        <a href="#" class="btn btn-outline">M-Pesa</a>
      </div>
    </form>
  </div>
</div>
