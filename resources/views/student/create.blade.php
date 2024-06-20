@extends('layouts.app')

@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('student.store')}}" class="row g-3  border rounded p-2 my-2">
    @csrf
    @method('post')  
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">اسم رباعي</label>
        <input name="name" value="{{old('name')}}" type="text" id="inputEmail4" placeholder="أدخل اسم المنتج"
          class="form-control @error('full_name') is-invalid @enderror">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
      </div>
  
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">الرقم العام</label>
        <input name="description" value="{{old('description')}}" type="text" id="inputPassword4" placeholder="ادخل وصف للمنتج"
        class="form-control @error('description') is-invalid @enderror">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
  
      {{-- <div class="col-12">
        <label for="inputAddress" class="form-label"readonly >القسم</label>
        <select name="category_id" class="form-select form-select-md " aria-label="Large select example">
          @foreach ($categories as $category )
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
   --}}
      <div class="col-6">
        <label for="inputAddress2" class="form-label">رقم الجيش</label>
        <input name="img_cover" type="file" id="inputAddress2" placeholder="اختار صورة للمنتج"
        class="form-control @error('img_cover') is-invalid @enderror">
        @error('img_cover')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  
      </div>
  
      <div class="col-md-6">
        <label for="inputCity" class="form-label">سرايا</label>
        <input name="current_price" value="{{old('current_price')}}" type="text" id="inputCity" placeholder="ادخل سعر المنتج"
        class="form-control @error('current_price') is-invalid @enderror">
        @error('current_price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
    
      <div class="submit">
        <button type="submit" class="btn btn-success color-main w-100">حفظ</button>
      </div>
  
  </form> 
@endsection

