 @extends('layout')

 @section('content')
     <div id="wrapper">
         <div id="page" class="container">
             <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>
         </div>


         <form method="POST" action="/corps" >
             @csrf


             <div class="field">
                 <label class="label" for="type_intervention">Type d'intervention</label>
                 @error('title')
                 <article class="message is-danger">
                     <div class="message-header">
                         <p> {{$errors->first('type_intervention')}}</p>
                     </div>
                 </article>
                 @enderror
                 <div class="control">
                     <input class="input" type="text" name="type_intervention" id="type_intervention" value="{{ old('type_intervention') }}">
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="city">Ville</label>
                 @error('city')
                 <article class="message is-danger">
                     <div class="message-header">
                         <p> {{$errors->first('city')}}</p>
                     </div>
                 </article>
                 @enderror
                 <div class="control">
                     <input type="text" class="textarea" name="city" id="city">{{old('city')}}</input>

                 </div>
             </div>

             <div class="field">
                 <label class="label" for="vehicle">Véhicule</label>
                 @error('vehicle')
                 <article class="message is-danger">
                     <div class="message-header">
                         <p> {{$errors->first('vehicle')}}</p>
                     </div>
                 </article>
                 @enderror
                 <div class="control">
                     <input type="text" class="textarea" name="vehicle" id="vehicle" >{{old('vehicle')}}
                 </div>
             </div>

             <div class="field">
                 <label class="label" for="intervention_date">Date</label>
                 @error('vehicle')
                 <article class="message is-danger">
                     <div class="message-header">
                         <p> {{$errors->first('intervention_date')}}</p>
                     </div>
                 </article>
                 @enderror
                 <div class="control">
                     <input type="datetime-local" name="intervention_date" id="intervention_date" >{{old('intervention_date')}}
                 </div>
             </div>

             <div class="field is-grouped">
                 <div class="control">
                     <button class="button is-link" type="submit">Submit</button>


                 </div>
             </div>



         </form>
     </div>

 @endsection
