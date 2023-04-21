<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
                    
<!--ToDo List Component-->
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card mask-custom">
          <div class="card-body p-4 text-black">
            <h6>ADD ADDITIONAL USER TO PERFORM THE TODO-TASKS</h6>
            <br>
<!-- Add User Name-->
<form action="{{route('store_user')}}" method="post">
    @csrf
    
          <div class="pb-2">
              <div class="card">
                <div class="card-body">
                <label for="email">Full Name</label>
                  <div class="d-flex flex-row align-items-center">
                 
                    <!--Create Task-->
                    <input type="text" name="name" value="" class="@error('name') is-invalid @enderror form-control form-control-lg" 
                      placeholder="Enter Name">
                      @error('task')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!--End Creating Task-->



                   
                  </div>
                </div>
              </div>
            </div>

            <!-- Create Email--> 
<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" value="" class="@error('email') is-invalid @enderror form-control form-control-lg" 
>
</div>
@error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!--End creating email-->



 <!-- Create Password--> 
 <div class="form-group">
<label for="UserPassword">Password</label>
<input type="password" name="password" value="" minlength="8" class="@error('password') is-invalid @enderror form-control form-control-lg" 
>
</div>
@error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<!--End creating email-->
<br>
<!--Update Button-->
<div>
                    <br>
                      <button type="submit" class="btn btn-primary">Add User</button>
                      
                    </div>
</form>           


          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--ToDo List Component-->


            
</x-app-layout>
