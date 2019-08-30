@extends('layouts.app')
<style>
        table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
        }
        
        th, td {
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even){background-color: #f2f2f2}
        </style>
@section('content')
{{-- <div>
    <table>
        <tr>
            
        </tr>
        <tr>
            
        </tr>
    </table>
</div> --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3 class="h3" style="color:black;margin-left:20px;">Tri par :</h3>
<select class="form-control" style="width:120px;margin-left:20px">
<option disabled="" selected="selected">Date</option>
<option>latest</option>
<option>oldest</option>
</select>
           <select class="form-control" style="width:120px;margin-left:20px">
<option disabled="" selected="selected">Categorie</option>
<option>Categorie 1</option>
<option>Categorie 2</option>
</select>
            <select class="form-control" style="width:120px;margin-left:20px">
<option disabled="" selected="selected">Fiabilité </option>
<option>Fiable 1</option>
<option>Fiable 2</option>
</select>
          <div class="align-items-center" style="margin-left:500px;">
           

           <input type="button" value="Analytics" style="margin-left:20px;background-color:#f64a4a;color:white;border-radius:5px;border:none;width:100px;" onclick="{{ route('sites_list') }}" >
           <input type="submit" value="Sites list" style="margin-left:20px;background-color:#f64a4a;color:white;border-radius:5px;border:none;width:120px;">
          </div>
</div>
    
<div style="overflow-x:auto;">
        <table>
          <tr>
                <th>Website</th>
                <th>Title</th>
                <th>Date</th>
                <th>Author</th>
                <th>Image</th>
                <th>Content</th>
                <th>Url</th>
                <th>Language</th>
            
          </tr>
          @foreach($posts as $post)
          <tr>
                
                
                <td>{{$post->Website}}</td>
                <td>{{$post->Title}}</td>
                <td>{{$post->Date}}</td>
                <td>{{$post->Author}}</td>
                <td><img src="{{$post->Image}}" alt="" style="width:120px"></td>
                <td>{{$post->Content}}</td>
                <td><a href="{{$post->Url}}">{{$post->Url}}</a></td>
                <td>{{$post->language}}</td>

                
          </tr>
          @endforeach
        </table>
      </div>
      
@endsection
