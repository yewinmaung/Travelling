@extends('format.adminmaster')
@section('content')
<div class="d-flex justify-content-center align-items-center mt-3">
  <div class="card w-75  bg-custom">
    <div class="card-header bg-secondary">
      <img src="{{asset('data/images/1x/honey_logo-3.png')}}" alt="" class="mb-3">
      <h3 class="text-warning">Staff Requirements</h3>
    </div>
    <div class="card-body">

      <form action="{{route('admin-apply')}}" class="" method="post" enctype="multipart/form-data">
          @csrf
        <div class="d-flex justify-content-end align-items-center">
            <div class="form-group text-custom1">
                <label class="form-label text-custom1">Image</label>
                <input type="file" class="form-control @error("image") is-invalid @enderror" name="image">
                @error("image")
                <div class="text-danger invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group text-custom1">
                <label class="form-label text-custom1">Name</label>
                <input type="text" class="form-control @error("sname") is-invalid @enderror" name="sname">
                @error("sname")
                <div class="text-danger invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
       <div class="row">
         <div class="col-md-4">
           <label class="form-label text-custom1">NIC</label>
           <input type="text" class="form-control  @error("snic") is-invalid @enderror" name="snic">
             @error("snic")
             <div class="text-danger invalid-feedback">{{$message}}</div>
             @enderror
         </div>
         <div class="col-md-4">
           <label  class="form-label text-custom1" >Email</label>
           <input type="email" class="form-control @error("semail") is-invalid @enderror" name="semail">
             @error("semail")
             <div class="text-danger invalid-feedback">{{$message}}</div>
             @enderror
         </div>
         <div class="col-md-4">
           <label  class="form-label text-custom1" >Phone</label>
           <input type="tel" class="form-control @error("sphone") is-invalid @enderror" name="sphone">
             @error("sphone")
             <div class="text-danger invalid-feedback">{{$message}}</div>
             @enderror
         </div>
       </div>

        <div class="row">
          <div class="col-md-6">
            <label  class="form-label text-custom1">City</label>
            <input type="text" class="form-control @error("scity") is-invalid @enderror" name="scity">
              @error("scity")
              <div class="text-danger invalid-feedback">{{$message}}</div>
              @enderror
          </div>

            <div class="col-md-4 form-group">
                <label  class="form-label text-custom1">Job</label>
                <select class="custom-select @error("job") is-invalid @enderror" name="job" >
                    <option selected disabled >Job</option>
                    <option class="cus-select"  value="customer_Service">customer_Service</option>
                    <option class="cus-select" value="Driver">Driver</option>
                    <option class="cus-select" value="Manager">Manager</option>
                </select>

                @error("job")
                <div class="text-danger invalid-feedback">{{$message}}</div>
                @enderror
            </div>

          <div class="form-group col-md-2">
            <label class="text-custom1">Quater</label>
            <input type="text" class="form-control @error("squar") is-invalid @enderror" name="squar">
              @error("squar")
              <div class="text-danger invalid-feedback">{{$message}}</div>
              @enderror
          </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
          <div class="input-group">
            <span class="input-group-text">Degree or Certified</span>
            <textarea class="form-control @error("desc") is-invalid @enderror" aria-label="With textarea" name="desc"></textarea>
              @error("desc")
              <div class="text-danger invalid-feedback">{{$message}}</div>
              @enderror
          </div>
        </div>
        <div class="row d-flex justify-content-end py-3 btn-group">
            <button type="reset" class="btn btn-danger">Cancel</button>
          <button type="submit" class="btn btn-warning">UpLoad</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
