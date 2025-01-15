<x-layout>
<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            
            <h2>Edit your files</h2>
          </div>
        </div> 
      </div>
</div>
</div>

<div class=" mb-10 pr-60 pl-60 pt-20">
        <h1 class=" pb-10 font-bold text-center">Upload your file</h1>
                
                    
                    <form action="{{  route('cv.replace',$cv)}}" method="post">
                        @csrf
                        @method('PUT')
                  <label for="price" class="block mb-2 text-sm font-medium text-gray-900 ">Title </label>
                  <input type="text" value="{{$cv->title}}" name="title" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder=" ex: my resume" >
                  @error('title')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                
              <div class="p-2">
                  <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">File type</label>
                  <select id="category"  name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                      <option selected="">Resume</option>
                      <option value="On site">Cover letter</option>
                      
                      
                  </select>
                  @error('category')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
              <div class="p-2">
                  
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="user_avatar">Your file</label>
                <input   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " name="file" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div class="mt-1 text-sm text-gray-500 " id="user_avatar_help">Your uploaded resume and cover lettre will be sent to the companies emails</div>
                @error('file')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
                <div class=" p-4">
                    
                    <button type="submit" class=" inline-flex items-center px-5 py-2.5 text-sm font-medium text-white bg-slate-600 rounded-lg hover:bg-slate-700 focus:ring-4 focus:ring-slate-300">
                    
                <i class="fa fa-paper-plane"></i> Upload </button>

                </div></form>
                </div>
            

</x-layout>