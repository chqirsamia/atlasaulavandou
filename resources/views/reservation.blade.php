@extends('layouts.master')
@section('content')
<div class="card-header">
   <h1 class="card-title"><strong> réservez une table </strong></h1><br>
</div>
<div class="card-body">
 
           
   <form method="post" action="reservation">
           {{csrf_field()}}
           <div class="row">
               <div class="col-md-5">
                   <div class="form-group">
                           <label> Nom </label>
                           <input type="text" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom" name="nom">
                           @error('nom')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="form-group">
                       <label> Email </label>
                       <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                       @error('email')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                   </div>
               </div>   
           
               <div class="col-md-5">
                   <div class="form-group">
                   <label>téléphone </label>
                   <input type="text" class="form-control @error('téléphone') is-invalid @enderror" placeholder="téléphone" name="téléphone">
                    @error('téléphone')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="form-group">
                   <label> date </label>
                   <input type="date" class="form-control @error('date') is-invalid @enderror"  name="date">
                   @error('date')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                   </div>
               </div>
               <div class="col-md-5">
                   <div class="form-group">
                   <label> du </label>
                   <input type="time" class="form-control @error('heureDeb') is-invalid @enderror"  name="heureDeb">
                   @error('heureDeb')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                   @enderror
                   </div>
               </div>
                       
               <div class="col-md-5 ">
                   <div class="form-group">
                       <label> au </label>
                       <input type="time" class="form-control @error('heureFin') is-invalid @enderror"  name="heureFin">
                        @error('heureFin')
                       <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                       </span>
                       @enderror
                       </div>
               </div>
                           
                <div class="col-md-5 ">
                       <div class="form-group">
                           <label> nombre de personne </label>
                           <input type="number" class="form-control @error('nbr_pers') is-invalid @enderror"  name="nbr_pers">
                           @error('nbr_pers')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                            @enderror
                           </div>
                 </div>
              
</div>
           <div class="row">
              <div class="update ml-auto mr-auto">
                 <button type="submit" class="btn btn-primary btn-round">reserver</button>
               </div>
             </div>
           </form>
         </div>
         @endsection
       {{--</div>
     </div>
   </div>
</div>
<footer class="blog-footer">
 <div Align=Center> 
 <p>
   

   <a href="http:7.0.0.1:8000/" style="color:#fcb" Align="Center">acceuil</a> -  L'ATLAS
 </p>
 <p>
  
 </p>
 </div>
</footer>

</html>--}}
   