<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
            
            <h1 class="text-center text-success">
           Bienvenue sur le site des cotisations mensuels</h1> <br>
              
    
        
    <h2 class="text-center text-success"><a 
     href="{{route('adherent.index')}}">1.Pour la liste adherent</a></h2><br>

     <h2 class="text-center text-success"><a 
     href="{{route('adherent.create')}}">2.Pour etre adherent</a></h2>
     </div>
     
</x-app-layout>
