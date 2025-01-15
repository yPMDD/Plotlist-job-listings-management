<x-layout>
<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>Aiming for greatness</h6>
            <h2>The best showcases</h2>
          </div>
        </div>
        
       
        
      </div>
    </div>
  </div> 
  <div class="container">
    <div class="p-20">
    <div class="flex flex-col items-center justify-center text-center">
        <img class="w-48 mr-6 mb-6"
          src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('assets/images/black-logo.png') }}" alt="" />

        <h3 class="text-2xl mb-2">
         Job Title : {{$job->title}}
        </h3>
        <div class="text-xl font-bold mb-4">Company name : {{$job->company}}</div>

        

        <div class="text-lg my-4">
          <i class="fa-solid fa-location-dot"></i> Location : {{$job->location}}
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        <div>
          <h3 class="text-3xl font-bold mb-10 ">Job Description</h3>
          <div class="text-lg space-y-6">
            {{$job->description}}
            <div class="p-10">
                <div class="block bg-slate-600 text-white py-2 rounded-xl hover:opacity-80 mb-6">
                <a href=" mailto:{{$job->email}}"><i class="fa fa-eye"></i> Contact Employer</a>
                </div>
                <a href="{{$job->website}}" target="_blank"
                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
                Visit Website</a>  
            </div>
            
          </div>
        </div>
      </div>
 </div>

    </div>
  
</x-layout>