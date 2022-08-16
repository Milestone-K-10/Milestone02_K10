@extends('adminlte.master')

@section('content')
<div class="fitur">
    <div class="box1">
        <h4>Filter</h4>
        <i class="fa-solid fa-bars-filter"></i>
    </div>
    <div class="box2">
        <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
            <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-18" viewBox="0 0 40 40">
              <path d="M30.776 27.146l-1.32-1.32-3.63 3.632 1.32 1.32 3.63-3.632zm1.368 1.368l6.035 6.035c.39.39.4 1.017.008 1.408l-2.23 2.23c-.387.387-1.015.387-1.41-.008l-6.035-6.035 3.63-3.63zm-8.11 1.392c-2.356 1.363-5.092 2.143-8.01 2.143C7.174 32.05 0 24.873 0 16.023S7.174 0 16.024 0c8.85 0 16.025 7.174 16.025 16.024 0 2.918-.78 5.654-2.144 8.01l8.96 8.962c1.175 1.174 1.184 3.07.008 4.246l-1.632 1.632c-1.17 1.17-3.067 1.173-4.247-.007l-8.96-8.96zm-8.01.54c7.965 0 14.422-6.457 14.422-14.422 0-7.965-6.457-14.422-14.422-14.422-7.965 0-14.422 6.457-14.422 14.422 0 7.965 6.457 14.422 14.422 14.422zm0-2.403c6.638 0 12.018-5.38 12.018-12.02 0-6.636-5.38-12.017-12.018-12.017-6.637 0-12.018 5.38-12.018 12.018 0 6.638 5.38 12.02 12.018 12.02zm0-1.402c5.863 0 10.616-4.752 10.616-10.616 0-5.863-4.753-10.616-10.616-10.616-5.863 0-10.616 4.753-10.616 10.616 0 5.864 4.753 10.617 10.616 10.617z"
              fill-rule="evenodd" />
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-4" viewBox="0 0 20 20">
              <path d="M11.664 9.877l4.485 4.485-1.542 1.54-4.485-4.485-4.485 4.485-1.54-1.54 4.485-4.485-4.485-4.485 1.54-1.54 4.485 4.484 4.485-4.485 1.54 1.542-4.484 4.485zM10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10z" fill-rule="evenodd"
              />
            </symbol>
          </svg>

          <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom2">
            <div role="search" class="sbx-custom__wrapper2">
              <input type="search" name="search/unverify" placeholder="Search your website" autocomplete="off" required="required" class="sbx-custom__input2" id="myInput" onkeyup="handleChange()">
              <button type="submit" title="Submit your search query." class="sbx-custom__submit2">
                <svg role="img" aria-label="Search">
                  <use xlink:href="#sbx-icon-search-18"></use>
                </svg>
              </button>
              {{-- <button type="reset" title="Clear the search query." class="sbx-custom__reset2">
                <svg role="img" aria-label="Reset">
                  <use xlink:href="#sbx-icon-clear-4"></use>
                </svg>
              </button> --}}
            </div>
          </form>
          <script type="text/javascript">
            document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {  this.parentNode.querySelector('input').focus();});
          </script>
    </div>
    <div class="box3">
        <h4>Advanced</h4>
    </div>
</div>
<div class="history-data">
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nomor Rekening</th>
                <th>Platform</th>
                @auth
                    @if (Auth::user()->role == "admin")
                        <th>Action </th>
                    @endif
                @endauth
            </tr>
        </thead>
        <tbody id="historyList">
            @foreach ($reports as $report)
                <tr>
                    <td> {{$report->nama}} </td>
                    <td> {{$report->rekening}} </td>
                    <td> {{$report->platform}} </td>
                    @auth
                    <td style="display: flex; margin-left:5rem">
                        @if (Auth::user()->role == "admin")
                            <a href="/unverified-report/{{$report->id}}" class="btn-sm btn-primary">Show</a>
                            <form method="POST" action="/verifyreport/{{$report->id}}">
                                @csrf
                                <button type="submit" class="btn-sm btn-warning" style="margin-left: 1em">Verify</button>
                            </form>
                        @endif
                    </td>
                    @endauth
                </tr>

            @endforeach
        </tbody><!--Untuk Menyimpan inputan data-->
    </table>
</div>
@endsection
@section('script')
<script>
    function handleChange() {
            input = document.getElementById("myInput");
            fetch(`/api/search?search=${input.value}`).then(data => {
                return data.text()
            }).then(data => {
                document.getElementById("historyList").innerHTML = data;
            })
        }
</script>
@endsection
