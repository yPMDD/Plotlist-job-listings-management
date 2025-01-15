<x-layout>
<div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6></h6>
            <h2>Manage your listings</h2>
          </div>
        </div>
       
       
        
      </div>
    </div>
  </div> 
  <div class="container">
    <div class="p-20">

    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($job->isEmpty())
        @foreach($job as $jo)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="{{ route('jobs.show', $job) }}"> {{$jo->title}} </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="{{ route('jobs.edit', $job) }}" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
              Edit</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <form method="POST" action="{{ route('jobs.delete', $job) }}">
              @csrf
              @method('DELETE')
              <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
    </div>
  
  </div>

</x-layout>