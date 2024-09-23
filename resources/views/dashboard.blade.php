@extends('layout')
@section('title', "Home Page")
@section('content')

@auth
<section>
  <main>
    <div class="container-lg py-1">
      <div class="row" style="margin-left:25vh; margin-top:10vh">
        <div class="col-md-8 d-inline-block">
          <div class="card" style="border-radius: 1rem; backdrop-filter: blur(10px); background: rgba(91, 84, 184, 0.4);">
            <div class="card-body prof-pict">
              <img src="{{ asset('img/pakvinsen.jpeg') }}" alt="avatar"
                class="rounded-circle img-fluid" style="height: 100px; width: 100px;">
            </div>
            <div class="card-body detail-info" style="margin-left: 15px;">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nama Lengkap</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    {{auth()->user()->name}}
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                  {{auth()->user()->email}}
                  </p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">NIM</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">242345678</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">No.Telp</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">(098) 765-4321</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Alamat</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">Pandeglang, Banten</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-inline-block" style="height:40vh; border-radius: 1rem; backdrop-filter: blur(10px); background: rgba(91, 84, 184, 0.4);">
          <div class="row justify-content-center mx-auto">
            <table class="table-condensed table-bordered table-striped">
              <thead>
                <tr>
                  <th colspan="7">
                    <span class=" btn-group">
                      <a class="btn"><i class="icon-chevron-left"></i></a>
                      <a class="btn active" style="width:120%;">February 2012</a>
                      <a class="btn"><i class="icon-chevron-right"></i></a>
                    </span>
                  </th>
                </tr>
                <tr>
                  <th>Su</th>
                  <th>Mo</th>
                  <th>Tu</th>
                  <th>We</th>
                  <th>Th</th>
                  <th>Fr</th>
                  <th>Sa</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="muted">29</td>
                  <td class="muted">30</td>
                  <td class="muted">31</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                  <td>10</td>
                  <td>11</td>
                </tr>
                <tr>
                  <td>12</td>
                  <td>13</td>
                  <td>14</td>
                  <td>15</td>
                  <td>16</td>
                  <td>17</td>
                  <td>18</td>
                </tr>
                <tr>
                  <td>19</td>
                  <td class="btn-primary"><strong>20</strong></td>
                  <td>21</td>
                  <td>22</td>
                  <td>23</td>
                  <td>24</td>
                  <td>25</td>
                </tr>
                <tr>
                  <td>26</td>
                  <td>27</td>
                  <td>28</td>
                  <td>29</td>
                  <td class="muted">1</td>
                  <td class="muted">2</td>
                  <td class="muted">3</td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
        <div class="col-md-9 mt-3">
          <div class="card mb-4 mb-md-0" style="border-radius: 1rem; backdrop-filter: blur(10px); background: rgba(91, 84, 184, 0.4);">
            <div class="card-body">
              <div class=" text-center">

                <h2 class="mb-0">Status Akademik</h2>

                <div class="d-flex justify-content-between align-items-center mt-4 px-5">
                  <div class="stats">
                    <h4 class="mb-0 ">Semester Akademik Sekarang</h4>
                    <span>2024/2025 Ganjil</span>
                  </div>
                  <div class="stats">
                    <h4 class="mb-0 px-2">Semester</h4>
                    <span>5</span>

                  </div>


                  <div class="stats">
                    <h4 class="mb-0 px-4">Status</h4>
                    <span class="btn active btn-success">AKTIF</span>

                  </div>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mt-3">
          <div class="card mb-4 mb-md-2" style="border-radius: 1rem; backdrop-filter: blur(10px); background: rgba(91, 84, 184, 0.4);">
            <div class="col-8">
              <div class="card-body text-center" style="margin-left:79px;">
                <h4 class="mb-0">IPK</h4>
                <p class="text-muted">3.9</p>
                <h4 class="mb-0">SKS</h4>
                <p class="text-muted">86</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
</section>
@endauth

@endsection