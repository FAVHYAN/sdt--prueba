@extends('Layouts.main')
@section('content')
       <div class="main-contact">
         <h3 class="head">CONTACT</h3>
         <p>WE'RE ALWAYS HERE TO HELP YOU</p>
         <div class="contact-form">
             <form>
                 <div class="col-md-6 contact-left">
                      <input type="text" placeholder="Name" required/>
                      <input type="text" placeholder="E-mail" required/>
                      <input type="text" placeholder="Phone" required/>
                  </div>
                  <div class="col-md-6 contact-right">
                     <textarea placeholder="Message"></textarea>
                     <input type="submit" value="SEND"/>
                 </div>
                 <div class="clearfix"></div>
             </form>
         </div>
        </div>
@stop
