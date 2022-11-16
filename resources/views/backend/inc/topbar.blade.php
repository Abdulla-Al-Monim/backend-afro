<!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <a href="https://afro-group.net/">
                            <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                        </a>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="https://afro-group.net/" class="nav-link"> Afro </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu @yield('theme-active')">
                        <a href="#Theme" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Theme Setting</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Theme" data-parent="#topAccordion">
                            <li class="@yield('theme-logo-active')">
                                <a href="{{route('theme.logo')}}"> Logo </a>
                            </li>
                            <li class="@yield('theme-footer-active')">
                                <a href="{{route('theme.footer')}}"> Footer </a>
                            </li>
                            <li class="@yield('theme-contact-active')">
                                <a href="{{route('theme.contact')}}"> Contact </a>
                            </li>
                            <li class="@yield('theme-contact-active')">
                                <a href="{{route('theme.social')}}"> Social media </a>
                            </li>
                            
                            <li class="sub-sub-submenu-list @yield('theme-project-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Project <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                    <!-- <li class="@yield('theme-project-region-active')">
                                        <a href="{{route('theme.project.region')}}">Country</a>
                                    </li> -->
                                    <li class="@yield('theme-project-company-active')">
                                        <a href="{{route('theme.project.company')}}">Company</a>
                                        
                                    </li>
                                    
                                    <li class="@yield('theme-project-portfolio-active')">
                                        <a href="{{route('theme.porfolio.project')}}">Portfolio</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="sub-sub-submenu-list @yield('theme-contact-a-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Contact <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#Theme"> 
                                   
                                    <li class="@yield('theme-contact-country-active')">
                                        <a href="{{route('contact.country')}}">Country</a>
                                        
                                    </li>
                                    
                                    
                                </ul>
                            </li>
                            
                        </ul>

                        
                    </li>
                    <li class="menu single-menu @yield('media-active')">
                        <a href="#Media" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Media Center</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Media" data-parent="#topAccordion">
                            <li class="@yield('media-banner-active')">
                                <a href="{{route('media.banner')}}"> banner </a>
                            </li>
                            <li class="@yield('media-media-active')">
                                <a href="{{route('media')}}"> Media </a>
                            </li>
                            <li class="@yield('media-library-active')">
                                <a href="{{route('media.library')}}"> Library </a>
                            </li>
                            <li class="@yield('media-video-active')">
                                <a href="{{route('media.video.library')}}">Video Library </a>
                            </li>
                            
                            
                        </ul>
                        
                    </li>

                    <li class="menu single-menu @yield('index-active')">
                        <a href="#Index" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle autodroprown">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Home</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Index" data-parent="#topAccordion">
                            <li class="@yield('index-active-header')">
                                <a href="{{route('index.header')}}"> Header </a>
                            </li>
                            <li class="@yield('index-active-button')">
                                <a href="{{route('index.header.buttton')}}"> Header button </a>
                            </li>
                            <li class="@yield('index-active-solution')">
                                <a href="{{route('index.solution')}}"> Solution </a>
                            </li>
                            <li class="@yield('index-active-service')">
                                <a href="{{route('index.service')}}"> Service </a>
                            </li>
                            <li class="@yield('index-active-service-slider')">
                                <a href="{{route('index.service.slider')}}"> Service slider </a>
                            </li>
                            <li class="@yield('index-active-appoach')">
                                <a href="{{route('index.approach')}}"> Approach </a>
                            </li>
                            <li class="@yield('index-active-review')">
                                <a href="{{route('index.review')}}"> Review </a>
                            </li>

                            <li class="@yield('index-active-review-slider')">
                                <a href="{{route('index.review.slider')}}"> Review slider</a>
                            </li>
                            <li class="@yield('index-active-award')">
                                <a href="{{route('index.award')}}"> Award</a>
                            </li>
                            <li class="@yield('index-active-academy')">
                                <a href="{{route('index.academy')}}"> Academy</a>
                            </li>

                            <li class="@yield('index-active-magazine')">
                                <a href="{{route('index.magazine')}}"> Magazine</a>
                            </li>
                            <li class="@yield('index-active-partner')">
                                <a href="{{route('index.partner')}}"> Partner</a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu single-menu @yield('about-active')" >
                        <a href="#About" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>About</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        
                        <ul class="collapse submenu list-unstyled " id="About" data-parent="#topAccordion">
                            <li class="@yield('about-banner-active')">
                                <a href="{{route('about.banner')}}"> Banner </a>
                            </li>
                            <li class="sub-sub-submenu-list @yield('about-overview-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Overview <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                    
                                    <li class="@yield('about-overview-do-active')">
                                        <a href="{{route('about.do')}}"> What we do </a>
                                    </li>
                                    <li class="@yield('about-overview-asset-active')">
                                        <a href="{{route('about.assert')}}"> Our assets </a>
                                    </li>
                                    <li class="@yield('about-overview-customer-active')">
                                        <a href="{{route('about.customer')}}"> Our Customers </a>
                                    </li>
                                    <li class="@yield('about-overview-people-active')">
                                        <a href="{{route('about.people')}}"> Our people </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="@yield('about-strategy-active')">
                                <a href="{{route('about.strategy')}}"> Strategy </a>
                            </li>
                            <li class="sub-sub-submenu-list @yield('about-business-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Business Model <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                    
                                    <li class="@yield('about--business-banner-active')">
                                        <a href="{{route('about.business.banner')}}"> Banner </a>
                                    </li>
                                    <li class="@yield('about--business-market-active')">
                                        <a href="{{route('about.business.market')}}"> Market opportunities </a>
                                    </li>
                                    <li class="@yield('about--business-operation-active')">
                                        <a href="{{route('about.business.operation')}}"> Operation platform </a>
                                    </li>
                                    <li class="@yield('about-business-strategy-active')">
                                        <a href="{{route('about.business.driven')}}"> Business strategy </a>
                                    </li>
                                    <li class="@yield('about-business-stakeholder-active')">
                                        <a href="{{route('about.business.stakeholder')}}"> Our stakeholders </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="@yield('about-leader-active')">
                                <a href="{{route('about.leader')}}">Leadership Team </a>
                            </li>
                            <li class="@yield('about-management-active')">
                                <a href="{{route('about.management')}}">Management Team </a>
                            </li>
                             <li class="sub-sub-submenu-list @yield('about-approach-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Value And Approach <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                    
                                    <li class="@yield('about--approach-banner-active')">
                                        <a href="{{route('about.approach.banner')}}"> Banner </a>
                                    </li>
                                    <li class="@yield('about--approach-integrity-active')">
                                        <a href="{{route('about.approach.integrity')}}"> Integrity </a>
                                    </li>
                                    <li class="@yield('about--approach-partner-active')">
                                        <a href="{{route('about.approach.partnership')}}"> Partnership </a>
                                    </li>
                                    <li class="@yield('about--approach-excellence-active')">
                                        <a href="{{route('about.approach.excellence')}}"> Excellence </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="@yield('about-govermance-policies-active')">
                                <a href="{{route('about.govermance.policies')}}"> Governance & Policies </a>
                            </li>
                            <!-- <li class="sub-sub-submenu-list @yield('about-govermance-active')">
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Governance & Policies <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#more"> 
                                    
                                    <li class="@yield('about-govermance-policies-active')">
                                        <a href="{{route('about.govermance.policies')}}"> Policies </a>
                                    </li>
                                </ul>
                            </li> -->
                            <li class="@yield('about-report-active')">
                                <a href="{{route('about.reports')}}">Presentation & Reports </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu single-menu @yield('where-active')">
                        <a href="#WhatWork" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Where we work</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="WhatWork" data-parent="#topAccordion">
                            <li class="@yield('where-active-banner')">
                                <a href="{{route('where.banner')}}"> Banner </a>
                            </li>
                            <li class="@yield('where-active-video')">
                                <a href="{{route('where.video')}}"> Video </a>
                            </li>
                            <li class="@yield('where-active-video')">
                                <a href="{{route('where.overview')}}"> Over view </a>
                            </li>
                            <li class="@yield('where-active-kpis')">
                                <a href="{{route('where.kpis')}}"> KPIs </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu single-menu @yield('solution-active')">
                        <a href="#Solution" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Solution</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Solution" data-parent="#topAccordion">
                            <li class="@yield('solution-active-banner')">
                                <a href="{{route('solution.banner')}}"> Banner </a>
                            </li>
                            <li class="@yield('solution-active-proudcts')">
                                <a href="{{route('solution.product')}}"> Solution Description </a>
                            </li>
                            <li class="@yield('solution-active-proudct')">
                                <a href="{{route('solution.pr')}}"> Solutions </a>
                            </li>
                            <li class="@yield('solution-active-colocation')">
                                <a href="{{route('solution.colocation')}}"> Colocation </a>
                            </li>

                            <!--<li class="@yield('solution-active-build')">-->
                            <!--    <a href="{{route('solution.build')}}"> Build-to-suit </a>-->
                            <!--</li>-->

                            <li class="@yield('solution-active-sale')">
                                <a href="{{route('solution.sale')}}"> Sale & leaseback </a>
                            </li>

                            <li class="@yield('solution-active-service')">
                                <a href="{{route('solution.services')}}"> Managed services </a>
                            </li>

                            <!--<li class="@yield('solution-active-in-build')">-->
                            <!--    <a href="{{route('solution.solutionInBuildingSolution')}}"> In-building-solutions </a>-->
                            <!--</li>-->
                            
                        </ul>
                    </li>
                    <li class="menu single-menu @yield('partner-active')">
                        <a href="#Partner" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Partner</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="Partner" data-parent="#topAccordion">
                            <li class="@yield('partner-active-banner')">
                                <a href="{{route('partner.banner')}}"> Banner </a>
                            </li>
                            <li class="@yield('partner-active-workforce')">
                                <a href="{{route('partner.workforce')}}"> Workforce </a>
                            </li>
                            <li class="@yield('partner-active-customers')">
                                <a href="{{route('partner.customers')}}"> Customers </a>
                            </li>

                            <!--<li class="@yield('partner-active-supplier')">-->
                            <!--    <a href="{{route('partner.supplier')}}"> Supplier Partners </a>-->
                            <!--</li>-->

                            <li class="@yield('partner-active-investors')">
                                <a href="{{route('partner.investors')}}"> Investors </a>
                            </li>

                            <li class="@yield('partner-active-community')">
                                <a href="{{route('partner.community')}}"> Community </a>
                            </li>

                            <li class="@yield('partner-active-environment')">
                                <a href="{{route('partner.environment')}}"> Environment </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="menu single-menu @yield('sustainability-active')">
                        <a href="#sustainability" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Sustainability</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="sustainability"  data-parent="#topAccordion">
                            <li class="@yield('sustainability-banner-active')">
                                <a href="{{route('sustainability.banner')}}"> Banner </a>
                            </li>
                            <li class="@yield('sustainability-image-active')">
                                <a href="{{route('sustainability.image')}}"> Image </a>
                            </li>
                            <!--<li class="@yield('sustainability-proposition-active')">-->
                            <!--    <a href="{{route('sustainability.proposition')}}"> Our proposition </a>-->
                            <!--</li>-->
                            <li class="@yield('sustainability-material-active')">
                                <a href="{{route('sustainability.material')}}"> Company Material </a>
                            </li>
                            <li class="@yield('sustainability-driving-active')">
                                <a href="{{route('sustainability.driving')}}"> Driving business </a>
                            </li>
                            <li class="@yield('sustainability-sustainable-active')">
                                <a href="{{route('sustainability.sustainable')}}"> Sustainable value </a>
                            </li>
                            <li class="@yield('sustainability-governance-active')">
                                <a href="{{route('sustainability.governance')}}"> Governance </a>
                            </li>
                        </ul>
                    </li>

                    
                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->