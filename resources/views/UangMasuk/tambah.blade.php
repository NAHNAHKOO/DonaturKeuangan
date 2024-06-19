@extends('template.main')
@section('Konten')
         
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Uang Masuk</h6>
                            <form method="post" action="{{route('storetambah')}}">
                                @csrf
                                
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                
                            </form>
                        </div>
                    </div>
               </div>    
        </div>
@endsection