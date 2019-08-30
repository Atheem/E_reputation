@extends('layouts.app')
<style>
table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 6px;
  overflow: hidden;
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #FFED86;
  font-size: 16px;
}
table tbody tr {
  height: 48px;
  border-bottom: 1px solid #E3F1D5;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}

@media screen and (max-width: 35.5em) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 8px 0;
  }
  table tbody tr td {
    padding-left: 45%;
    margin-bottom: 12px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    position: absolute;
    font-weight: 700;
    width: 40%;
    left: 10px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Code";
  }
  table tbody tr td:nth-child(2):before {
    content: "Stock";
  }
  table tbody tr td:nth-child(3):before {
    content: "Cap";
  }
  table tbody tr td:nth-child(4):before {
    content: "Inch";
  }
  table tbody tr td:nth-child(5):before {
    content: "Box Type";
  }
}
body {
  background: #9BC86A;
  font: 400 14px 'Calibri','Arial';
  padding: 20px;
}

blockquote {
  color: white;
  text-align: center;
}

</style>

@section('content')

<div class="container">
        <table>
                <thead>
                  <tr>
                    <th>Site Name</th>
                    <th>Url</th>
                    <th>Fiabilité</th>
                
                  </tr>
                <thead>
                <tbody>
                  <tr>
                    <td>marrakechalyaoum</td>
                    <td><a href="">https://www.marrakechalyaoum.com</a></td>
                    <td><img src="Assets/star.png" alt="" style="width:25px">
                       <img src="Assets/star.png" alt="" style="width:25px">
                    </td>
                    
                  </tr>
                     <tr>
                    <td>marrakechalaan</td>
                    <td><a href="">https://www.marrakechalaan.com</a></td>
                    <td><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"></td>
                      
                  </tr>
                     <tr>
                    <td>ChoufTv</td>
                    <td><a href="">https://chouftv.ma</a></td>
                    <td><img src="Assets/star.png" alt="" style="width:25px"></td>
                    
                  </tr>
                     <tr>
                    <td>Safigoud</td>
                    <td><a href="">https://chouftv.com</a></td>
                    <td><img src="Assets/star.png" alt="" style="width:25px"></td>
                    
                  </tr>
                  <tr>
                        <td>Le12</td>
                        <td><a href="">https://le12.ma</a></td>
                        <td><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"></td>
                        
                      </tr>
                      <tr>
                            <td>hespress</td>
                            <td><a href="">https://hespress.com</a></td>
                            <td><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"></td>
                            
                          </tr>
                          <tr>
                                <td>alayam24</td>
                                <td><a href="">https://alayam24.com</a></td>
                                <td><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"></td>
                                
                              </tr>
                            <tr>
                             <td>Safigoud</td>
                             <td><a href="">https://safigoud.ma</a></td>
                             <td><img src="Assets/star.png" alt="" style="width:25px"></td>  
                            </tr>
                            <tr>
                                    <td>kech24</td>
                                    <td><a href="">https://kech24.ma</a></td>
                                    <td><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"><img src="Assets/star.png" alt="" style="width:25px"></td>  
                                   </tr>
                          <tr>
                            <td>jamaalfna</td>
                                    <td><a href="">https://jamaalfna.com</a></td>
                                <td><img src="Assets/star.png" alt="" style="width:25px"></td>  
                            </tr>
                                  
                </tbody>
              <table/>
</div>
@endsection