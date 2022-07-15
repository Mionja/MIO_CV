@extends('blank')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">TABLE PERSONNEL</h6>
      <p class="br-section-text">Information concernant les personnels.</p>

      <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Position</th>
              <th>Salary</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td>$320,800</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td>$170,750</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td>$86,000</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td>$433,060</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td>$162,700</td>
            </tr>
          </tbody>
        </table>
      </div><!-- bd -->
    </div>
</div>

@endsection