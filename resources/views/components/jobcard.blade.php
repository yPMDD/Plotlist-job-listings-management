
@props(['job'])


                <div class="col-lg-12">
                  <div class="listing-item">
                    <div class="left-image">
                      <a href="{{ route('jobs.show', $job) }}"><img class=" mt-14 pl-10 pb-10 pt-10" src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('assets/images/black-logo.png') }}" alt=""></a>
                    </div>
                    <div class="right-content align-self-center">
                      <a href="{{ route('jobs.show', $job) }}"><h4>{{$job->title}}</h4></a>
                      <h6>by: {{$job->company}}</h6>
                      
                      <span class="price"><div class="icon"><img src="{{asset('assets/images/listing-icon-01.png')}}" alt=""></div>
                        @unless(!$job->is_null)  
                        <span>${{$job->salary}}</span>
                      
                        @else
                        <span>To discuss after</span>
                        @endunless

                    
                    </span>
                      <span class="details">Details: <em>{{$job->category}}</em></span>
                      <ul class="info">
                        <li><img src="{{asset('assets/images/listing-icon-02.png')}}" alt="">{{$job->location}}</li>
                        <li><img src="{{asset('assets/images/listing-icon-03.png')}}" alt=""> 2 days ago</li>
                      </ul>
                      <div class="main-white-button">
                        <a href="{{ route('jobs.show', $job) }}"><i class="fa fa-eye"></i> Contact Now</a>
                      </div>
                    </div>
                  </div>
                </div>
                
              