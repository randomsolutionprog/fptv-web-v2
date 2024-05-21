@php
$currentUrl = URL::current();
$baseUrl = URL::to('/');

// Remove the base URL from the current URL
$urlAfterDashboard = str_replace($baseUrl . '/dashboard/', '', $currentUrl);

// Split the URL path by "/"
$urlSegments = explode('/', $urlAfterDashboard);

// Get the first segment after "dashboard"
$urlAfterDashboard = $urlSegments[0];

@endphp
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Main Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$urlAfterDashboard == 'http:' ? 'active': ''}}" aria-current="page" href="{{route('dashboard')}}">
                <svg width="15px" height="15px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#000000"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.889 2.095a6.5 6.5 0 1 1 7.222 10.81A6.5 6.5 0 0 1 3.89 2.094zm.555 9.978A5.5 5.5 0 0 0 7.5 13 5.506 5.506 0 0 0 13 7.5a5.5 5.5 0 1 0-8.556 4.573zM10.294 4l.706.707-2.15 2.15a1.514 1.514 0 1 1-.707-.707L10.293 4zM7.221 7.916a.5.5 0 1 0 .556-.832.5.5 0 0 0-.556.832zm4.286-2.449l-.763.763c.166.403.253.834.255 1.27a3.463 3.463 0 0 1-.5 1.777l.735.735a4.477 4.477 0 0 0 .274-4.545h-.001zM8.733 4.242A3.373 3.373 0 0 0 7.5 4 3.5 3.5 0 0 0 4 7.5a3.46 3.46 0 0 0 .5 1.777l-.734.735A4.5 4.5 0 0 1 9.5 3.473l-.767.769z"/></svg>           
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 {{$urlAfterDashboard=='events' ? 'active': ' '}}" href="{{route('events')}}">
                <svg fill="#000000" width="15px" height="15px" viewBox="0 0 35 35" data-name="Layer 2" id="a866a81f-2948-4418-8bd5-1a5193c5f74e" xmlns="http://www.w3.org/2000/svg"><path d="M29.545,34.75H5.455a5.211,5.211,0,0,1-5.2-5.2V8.56a5.21,5.21,0,0,1,5.205-5.2h24.09a5.21,5.21,0,0,1,5.2,5.205V29.545A5.211,5.211,0,0,1,29.545,34.75ZM5.455,5.855A2.708,2.708,0,0,0,2.75,8.56V29.545a2.709,2.709,0,0,0,2.705,2.7h24.09a2.708,2.708,0,0,0,2.7-2.7V8.56a2.707,2.707,0,0,0-2.7-2.7Z"/><path d="M33.5,17.331H1.541a1.25,1.25,0,0,1,0-2.5H33.5a1.25,1.25,0,0,1,0,2.5Z"/><path d="M9.459,9.155a1.249,1.249,0,0,1-1.25-1.25V1.5a1.25,1.25,0,0,1,2.5,0V7.905A1.25,1.25,0,0,1,9.459,9.155Z"/><path d="M25.542,9.155a1.249,1.249,0,0,1-1.25-1.25V1.5a1.25,1.25,0,0,1,2.5,0V7.905A1.25,1.25,0,0,1,25.542,9.155Z"/></svg>                
                Events
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg fill="#000000" width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1,1,0,0,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1A10,10,0,0,0,15.71,12.71ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"/></svg>
                Users Approval
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18.97 22H4.96997C1.96997 22 1.96997 20.65 1.96997 19V18C1.96997 17.45 2.41997 17 2.96997 17H20.97C21.52 17 21.97 17.45 21.97 18V19C21.97 20.65 21.97 22 18.97 22Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M20.72 13V17H3.27002V13C3.27002 9.16 5.98002 5.95 9.59002 5.18C10.13 5.06 10.69 5 11.27 5H12.72C13.3 5 13.87 5.06 14.41 5.18C18.02 5.96 20.72 9.16 20.72 13Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M14.5 4.5C14.5 4.74 14.47 4.96 14.41 5.18C13.87 5.06 13.3 5 12.72 5H11.27C10.69 5 10.13 5.06 9.59 5.18C9.53 4.96 9.5 4.74 9.5 4.5C9.5 3.12 10.62 2 12 2C13.38 2 14.5 3.12 14.5 4.5Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M15 11H9" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                Customer Reservation
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg width="15px" height="15px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M148.489,171.778l-0.001,44.629c0,8.027-2.286,14.557-6.613,18.883c-1.089,1.089-2.319,2.047-3.676,2.873v-66.384h-30.417
                      v66.382c-1.356-0.826-2.584-1.784-3.673-2.872c-4.326-4.326-6.613-10.855-6.612-18.883v-44.625H67.079v44.624
                      c-0.001,16.271,5.367,30.239,15.522,40.393c6.824,6.823,15.374,11.472,25.18,13.797v133.594h30.417V270.595
                      c9.809-2.324,18.361-6.975,25.184-13.796c10.155-10.154,15.523-24.121,15.523-40.392l0.001-44.627L148.489,171.778z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M389.007,166.709c-26.393,0.001-47.865,21.474-47.865,47.864v35.684c0.001,21.076,13.7,39.001,32.658,45.372v108.558
                      h30.417V295.631c18.957-6.372,32.656-24.297,32.655-45.372l0.001-35.69C436.869,188.181,415.397,166.71,389.007,166.709z
                      M406.456,250.259c0,9.62-7.826,17.446-17.446,17.447c-9.622-0.001-17.449-7.827-17.449-17.447v-35.684
                      c0-9.62,7.827-17.446,17.447-17.447c9.62,0.001,17.447,7.828,17.449,17.445L406.456,250.259z"/>
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M473.751,31.888L297.38,74.602C278.98,78.816,265.422,85.969,256,96.444c-9.423-10.475-22.979-17.627-41.38-21.841
                      L38.249,31.888L0,96.779v340.454l227.979,42.619l1.385,0.26h53.272L512,437.234V96.779L473.751,31.888z M215.564,446.588
                      L30.417,411.975V119.242l185.147,34.613V446.588z M232.182,126.017L39.324,89.964l13.679-23.206l154.555,37.43l0.196,0.047
                      c19.015,4.341,27.524,11.668,30.969,21.783H232.182z M266.016,449.694h-20.035V156.435h20.035V449.694z M279.817,126.018h-6.54
                      c3.444-10.116,11.954-17.443,30.969-21.784l154.75-37.477l13.679,23.206L279.817,126.018z M481.583,411.975l-185.148,34.613
                      V153.855l185.148-34.613V411.975z"/>
                  </g>
                </g>
                </svg>
                Recipes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg fill="#000000" width="15px" height="15px" viewBox="-2 -2.5 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-messages"><path d='M3.656 17.979A1 1 0 0 1 2 17.243V15a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H8.003l-4.347 2.979zm.844-3.093a.536.536 0 0 0 .26-.069l2.355-1.638A1 1 0 0 1 7.686 13H12a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v5c0 .54.429.982 1 1 .41.016.707.083.844.226.128.134.135.36.156.79.003.063.003.177 0 .37a.5.5 0 0 0 .5.5zm11.5-4.87a7.136 7.136 0 0 0 0 .37v-.37c.02-.43.028-.656.156-.79.137-.143.434-.21.844-.226.571-.018 1-.46 1-1V3a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5V2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2v2.243a1 1 0 0 1-1.656.736L16 13.743v-3.726z' /></svg>
                Messages
              </a>
            </li>
          </ul>

         
          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#">
                <svg class="bi"><use xlink:href="#gear-wide-connected"></use></svg>
                Settings
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
              >
              <form id="logout-form" style="display:none;" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
                <svg class="bi"><use xlink:href="#door-closed"></use></svg>
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>