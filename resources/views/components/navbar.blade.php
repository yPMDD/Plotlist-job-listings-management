<nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">

              

              @if(Auth::user()->name == 'recruiter')

              <li><a href="/job/manage">Manage listings</a></li>
              <a href="/logout"><button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Logout</button> </a> 

              <li><div class="main-white-button"><a href="/jobform"><i class="fa fa-plus"></i> Post jobs</a></div></li> 
              
              @elseif(Auth::user()->name =='Candidate')
              
              <li><a href="/login">Manage account</a></li>
              <a href="/logout"><button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Logout</button> </a> 
              @endif
              
              
              
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>