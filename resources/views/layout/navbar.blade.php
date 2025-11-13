<div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
    <div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
        data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav"
        data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
        <ul class="nav flex-column">
            
            <li class="nav-item mb-2 {{$dataLogin->role == 'admin' ? '' : 'd-none'}}" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                data-bs-dismiss="click" title="Projects">
                <a class="nav-link btn btn-custom btn-icon {{$dataLogin->role == 'admin' ? 'active' : ''}}" data-bs-toggle="tab"
                    href="#kt_aside_nav_tab_projects">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                fill="black" />
                            <path opacity="0.3"
                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                fill="black" />
                        </svg>
                    </span>
                </a>
            </li>
            
            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                data-bs-dismiss="click" title="Menu">
                <a class="nav-link btn btn-custom btn-icon {{$dataLogin->role == 'user' ? 'active' : ''}}" data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                fill="black" />
                            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                fill="black" />
                            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                fill="black" />
                        </svg>
                    </span>
                </a>
            </li>
            
            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                data-bs-dismiss="click" title="Notifications">
                <a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab"
                    href="#kt_aside_nav_tab_notifications">
                    <span class="svg-icon svg-icon-2x">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path opacity="0.3"
                                d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                fill="black" />
                            <path
                                d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                fill="black" />
                        </svg>
                    </span>
                </a>
            </li>
            
        </ul>
    </div>
</div>