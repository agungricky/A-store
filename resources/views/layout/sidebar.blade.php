<div class="aside-secondary d-flex flex-row-fluid no-scroll">
    <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
        <div class="d-flex h-100 flex-column">
            <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true"
                data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace"
                data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                <div class="tab-content">

                    {{-- 1 --}}
                    <div class="tab-pane fade {{$dataLogin->role == "admin" ? 'active show' : ''}}" id="kt_aside_nav_tab_projects" role="tabpanel">
                        <div class="m-0">
                            <div class="d-flex mb-10">
                                <div id="kt_header_search" class="d-flex align-items-center w-lg-400px"
                                    data-kt-search-keypress="true" data-kt-search-min-length="2"
                                    data-kt-search-enter="enter" data-kt-search-layout="menu"
                                    data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
                                    data-kt-menu-placement="bottom-start">
                                    <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0"
                                        autocomplete="off">
                                        <input type="hidden" />
                                        <span
                                            class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                    height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                    fill="black" />
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control form-control-solid ps-15"
                                            name="search" value="" placeholder="Search..."
                                            data-kt-search-element="input" />
                                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                            data-kt-search-element="spinner">
                                            <span
                                                class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                        </span>
                                        <span
                                            class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                            data-kt-search-element="clear">
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                                        rx="1" transform="rotate(-45 6 17.3137)"
                                                        fill="black" />
                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                    </form>
                                </div>
                            </div>

                            {{-- Rak Penyimpanan --}}
                            <div class="m-0">
                                <h1 class="text-gray-800 fw-bold mb-6 mx-5">Storage List</h1>
                                <div class="mb-10">
                                    <div id="list_rak"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2 --}}
                    <div class="tab-pane fade {{$dataLogin->role == "user" ? 'active show' : ''}}" id="kt_aside_nav_tab_menu" role="tabpanel">
                        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-6 px-6 my-5 my-lg-0"
                            id="kt_aside_menu" data-kt-menu="true">
                            <div id="kt_aside_menu_wrapper" class="menu-fit">
                                <div class="menu-item">
                                    <div class="menu-content pb-2">
                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
                                    </div>
                                </div>

                                {{-- Dashboard --}}
                                <div class="menu-item">
                                    <a class="menu-link {{$dataLogin->role == "admin" ? 'active' : 'd-none'}}" href="{{ url('/') }}">
                                        <span class="menu-icon">

                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                        rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                        rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                        rx="2" fill="black" />
                                                </svg>
                                            </span>

                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>

                                    <a class="menu-link {{$dataLogin->role == "user" ? 'active' : 'd-none'}}" href="{{ route('customer.index') }}">
                                        <span class="menu-icon">

                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2"
                                                        fill="black" />
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                        rx="2" fill="black" />
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                        rx="2" fill="black" />
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                        rx="2" fill="black" />
                                                </svg>
                                            </span>

                                        </span>
                                        <span class="menu-title">Dashboard</span>
                                    </a>
                                </div>

                                <div class="menu-item">
                                    <div class="menu-content">
                                        <div class="separator mx-1 my-2"></div>
                                    </div>
                                </div>

                                <div class="menu-item {{$dataLogin->role == "admin" ? 'active' : 'd-none'}}">
                                    <a class="menu-link" href="{{ route('user.indexuser') }}" data-kt-page="pro">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 14H11C10.4 14 10 13.6 10 13V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V13C21 13.6 20.6 14 20 14ZM21 20V17C21 16.4 20.6 16 20 16H11C10.4 16 10 16.4 10 17V20C10 20.6 10.4 21 11 21H20C20.6 21 21 20.6 21 20Z"
                                                        fill="black" />
                                                    <path
                                                        d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="menu-title">Management User</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                </div>

                                <div class="menu-item mb-1">
                                    <a class="menu-link {{$dataLogin->role == "admin" ? '' : 'd-none'}}" href="{{ route('storage.indexstorage') }}"
                                        title="Check out the complete documentation" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="black" />
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="black" />
                                                </svg>
                                            </span>

                                        </span>
                                        <span class="menu-title">Management Rak</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- 3 --}}
                    <div class="tab-pane fade" id="kt_aside_nav_tab_notifications" role="tabpanel">
                        <div class="mx-5">
                            <h3 class="fw-bold text-dark mb-0">
                                Notifications
                            </h3>
                            <p class="text-muted mb-5" style="font-size: 0.95rem;">
                                Riwayat Barang diambil
                            </p>

                            </h3>
                            <div class="mb-12">

                                @foreach ($riwayat as $item)
                                    <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                        <span class="svg-icon svg-icon-success me-5">
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z"
                                                        fill="black" />
                                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                </svg>
                                            </span>
                                        </span>

                                        <div class="flex-grow-1 me-2">
                                            <span
                                                class="fw-bolder text-gray-800 text-hover-primary fs-6">{{ $item->user->name }}</span>
                                            <span
                                                class="text-muted fw-bold d-block">{{ $item->storage->brand }}
                                                | {{ $item->barang->nama_barang }}</span>
                                        </div>

                                        <span class="fw-bolder text-success py-1">{{  $item->berat == null ? '' : $item->berat}} Kg</span>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    {{-- <div class="tab-pane fade" id="kt_aside_nav_tab_authors" role="tabpanel">
                        <div class="mx-5">
                            <h3 class="fw-bolder text-dark mx-0 mb-10">Authors</h3>
                            <div class="mb-12">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-1.jpg" class="" alt="" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
                                        <span class="text-muted d-block fw-bold">Project Manager</span>
                                    </div>

                                </div>


                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-4.jpg" class="" alt="" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                    </div>

                                </div>


                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-12.jpg" class="" alt="" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
                                        <span class="text-muted d-block fw-bold">HTML5, jQuery, CSS3</span>
                                    </div>

                                </div>


                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-6.jpg" class="" alt="" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
                                        <span class="text-muted d-block fw-bold">MangoDB, Java</span>
                                    </div>

                                </div>


                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-9.jpg" class="" alt="" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Natali Trump</a>
                                        <span class="text-muted d-block fw-bold">NET, Oracle, MySQL</span>
                                    </div>

                                </div>


                                <div class="d-flex align-items-center mb-7">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-8.jpg" class="" alt="" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
                                        <span class="text-muted d-block fw-bold">React, Vue</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-5">
                                        <img src="assets/media/avatars/150-7.jpg" class="" alt="" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <a href="../dist/pages/projects/users.html"
                                            class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
                                        <span class="text-muted d-block fw-bold">Angular, React</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<button
    class="btn btn-sm btn-icon bg-body btn-color-gray-600 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex"
    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
    data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
    <span class="svg-icon svg-icon-2 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
            <path
                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                fill="black" />
        </svg>
    </span>
</button>

<script>
    $(document).ready(function() {
        const $spinner = $('[data-kt-search-element="spinner"]');
        const $input = $('[data-kt-search-element="input"]');
        const $list = $('#list_rak');

        // ambil data dari server via Blade
        const allData = @json($listStorage);

        // render semua data
        function renderList(data) {
            $list.empty();
            if (!data || data.length === 0) {
                $list.append('<div class="px-5 py-4 text-gray-500">No results found.</div>');
                return;
            }

            data.forEach(function(item) {
                const iconSrc = item.icon?.lokasi || '/assets/media/svg/brand-logos/default.svg';
                const userName = item.user?.name || ' ';

                const listItem = `
                    <a href="#" class="custom-list d-flex align-items-center px-5 py-4">
                        <div class="symbol symbol-40px me-5">
                            <span class="symbol-label">
                                <img src="${iconSrc}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <div class="d-flex flex-column flex-grow-1">
                            <h5 class="custom-list-title fw-bold text-gray-800 mb-1">${item.brand}</h5>
                            <span class="text-gray-400 fw-bold">By ${userName}</span>
                        </div>
                    </a>`;
                $list.append(listItem);
            });
        }

        // filter lokal
        function searchLocal(keyword) {
            keyword = keyword.toLowerCase();
            if (!keyword) {
                renderList(allData); // tampil semua kalau kosong
                return;
            }

            const filtered = allData.filter(item => {
                const brand = item.brand?.toLowerCase() || '';
                const rak = item.rak?.nama?.toLowerCase() || '';
                return brand.includes(keyword) || rak.includes(keyword);
            });
            renderList(filtered);
        }

        // tampilkan semua awalnya
        renderList(allData);

        // event input
        let typingTimer;
        $input.on('input', function() {
            $spinner.removeClass('d-none');
            clearTimeout(typingTimer);

            typingTimer = setTimeout(() => {
                const keyword = $(this).val().trim();
                searchLocal(keyword);
                $spinner.addClass('d-none');
            }, 300);
        });
    });
</script>
