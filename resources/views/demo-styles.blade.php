@php
// Emulate a form validation error for the demo
$errors = new Illuminate\Support\MessageBag(['first_name' => 'The first name field is required', 'last_name' => 'The last name field is required']);
@endphp

@extends('northwestern::purple-container')

@section('heading')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Bobby Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">19-20 Undergrad Loan</li>
  </ol>
</nav>

<h2 class="slashes">Northwestern Bootstrap Theme</h2>
@endsection

@section('content')
<p class="lead">On May 31, 1850, nine men gathered to begin planning a university that would serve the Northwest Territory.</p>

<p>Given that they had little money, no land and limited higher education experience, their vision was ambitious. But through a combination of creative financing, shrewd politicking, religious inspiration and an abundance of hard work, the founders of Northwestern University were able to make that dream a reality.</p>

<p>In 1853, the founders purchased a 379-acre tract of land on the shore of Lake Michigan 12 miles north of Chicago. They established a campus and developed the land near it, naming the surrounding town Evanston in honor of one of the University's founders, John Evans. After completing its first building in 1855, Northwestern began classes that fall with two faculty members and 10 students.</p>

<p>Twenty-one presidents have presided over Northwestern in the years since. The University has grown to include 12 schools and colleges, with additional campuses in Chicago and Doha, Qatar.</p>

<div class="row">
    <div class="col-md-6">
        <h4 class="head-section"><i class="fas fa-award" aria-hidden="true"></i> Awards</h4>
        <p>The university's former and present faculty and alumni include 19 Nobel Prize laureates, 38 Pulitzer Prize winners, six MacArthur Genius Fellows, 16 Rhodes Scholars, 65 members of the American Academy of Arts and Sciences and two Supreme Court Justices. Northwestern's School of Communication is a leading producer of Academy Award, Emmy Award and Tony Award–winning actors, actresses, playwrights, writers and directors.</p>
    </div>

    <div class="col-md-6">
        <h4 class="head-section"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Academics</h4>
        <p>Northwestern is a large, residential research university. Accredited by the Higher Learning Commission and the respective national professional organizations for chemistry, psychology, business, education, journalism, music, engineering, law, and medicine, the university offers 124 undergraduate programs and 145 graduate and professional programs. Northwestern conferred 2,190 bachelor's degrees, 3,272 master's degrees, 565 doctoral degrees, and 444 professional degrees in 2012–2013.</p>
    </div>
</div>

<hr class="my-5">

<div class="row">
    <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
        </li>
        </ul>

        <form class="card p-2">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
        </div>
        </form>
    </div>
    <div class="col-md-8 order-md-1">
        @include('northwestern::errors')

        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="firstName" class="required">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid first name is required.
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="lastName" class="required">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
                Valid last name is required.
            </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="username" class="required">Username</label>
            <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
                Your username is required.
            </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
            </div>
        </div>

        <div class="mb-3">
            <label for="address" class="required">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
            Please enter your shipping address.
            </div>
        </div>

        <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
            <div class="col-md-5 mb-3">
            <label for="country" class="required">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
            </select>
            <div class="invalid-feedback">
                Please select a valid country.
            </div>
            </div>
            <div class="col-md-4 mb-3">
            <label for="state" class="required">State</label>
            <select class="custom-select d-block w-100" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
            </select>
            <div class="invalid-feedback">
                Please provide a valid state.
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="zip" class="required">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
            <div class="invalid-feedback">
                Zip code required.
            </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
            <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
            <label for="cc-name" class="required">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
                Name on card is required
            </div>
            </div>
            <div class="col-md-6 mb-3">
            <label for="cc-number" class="required">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
                Credit card number is required
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
            <label for="cc-expiration" class="required">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
                Expiration date required
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="cc-cvv" class="required">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
                Security code required
            </div>
            </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block text-uppercase" type="submit">Continue to checkout</button>
        </form>
    </div>
</div>

<hr class="my-5">

<h2>Section title</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm mb-2">
        <thead>
            <tr>
                <th>#</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
            </tr>
            <tr>
                <td>1,002</td>
                <td>amet</td>
                <td>consectetur</td>
                <td>adipiscing</td>
                <td>elit</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>Integer</td>
                <td>nec</td>
                <td>odio</td>
                <td>Praesent</td>
            </tr>
            <tr>
                <td>1,003</td>
                <td>libero</td>
                <td>Sed</td>
                <td>cursus</td>
                <td>ante</td>
            </tr>
            <tr>
                <td>1,004</td>
                <td>dapibus</td>
                <td>diam</td>
                <td>Sed</td>
                <td>nisi</td>
            </tr>
            <tr>
                <td>1,005</td>
                <td>Nulla</td>
                <td>quis</td>
                <td>sem</td>
                <td>at</td>
            </tr>
            <tr>
                <td>1,006</td>
                <td>nibh</td>
                <td>elementum</td>
                <td>imperdiet</td>
                <td>Duis</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>sagittis</td>
                <td>ipsum</td>
                <td>Praesent</td>
                <td>mauris</td>
            </tr>
            <tr>
                <td>1,008</td>
                <td>Fusce</td>
                <td>nec</td>
                <td>tellus</td>
                <td>sed</td>
            </tr>
            <tr>
                <td>1,009</td>
                <td>augue</td>
                <td>semper</td>
                <td>porta</td>
                <td>Mauris</td>
            </tr>
            <tr>
                <td>1,010</td>
                <td>massa</td>
                <td>Vestibulum</td>
                <td>lacinia</td>
                <td>arcu</td>
            </tr>
            <tr>
                <td>1,011</td>
                <td>eget</td>
                <td>nulla</td>
                <td>Class</td>
                <td>aptent</td>
            </tr>
            <tr>
                <td>1,012</td>
                <td>taciti</td>
                <td>sociosqu</td>
                <td>ad</td>
                <td>litora</td>
            </tr>
            <tr>
                <td>1,013</td>
                <td>torquent</td>
                <td>per</td>
                <td>conubia</td>
                <td>nostra</td>
            </tr>
            <tr>
                <td>1,014</td>
                <td>per</td>
                <td>inceptos</td>
                <td>himenaeos</td>
                <td>Curabitur</td>
            </tr>
            <tr>
                <td>1,015</td>
                <td>sodales</td>
                <td>ligula</td>
                <td>in</td>
                <td>libero</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-end">
    {{ new \Illuminate\Pagination\LengthAwarePaginator([], 1000, 25, 3) }}
</div>

@endsection