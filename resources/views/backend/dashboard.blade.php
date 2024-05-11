@extends('layouts.backend.app')
@push('content')

    <div class="waveform before:content-[''] before:h-screen before:w-screen before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:top-0 before:fixed">
        <div class="relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
            <div class="xl:ml-0 shadow-xl transition-[margin] duration-300 xl:shadow-none fixed top-0 left-0 z-50 side-menu group after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:xl:hidden side-menu--collapsed [&.side-menu--mobile-menu-open]:ml-0 [&.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                <div class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden z-50 [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                    <a class="mt-5 ml-5" href="">
                        <i data-tw-merge="" data-lucide="x" class="stroke-[1] w-8 h-8 text-white"></i>
                    </a>
                </div>
                <div class="side-menu__content pr-1 z-20 relative w-[275px] border-slate-200/80 duration-300 transition-[width] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] h-screen flex flex-col after:content-[''] after:absolute after:inset-0 after:bg-gradient-to-b after:from-theme-1 after:to-theme-2/30  after:border-slate-200/80 after:group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] before:content-[''] before:absolute before:inset-0 before:bg-[275px_auto] before:bg-fixed before:bg-no-repeat before:bg-waveform before:bg-theme-2">
                    <div class="relative z-10 hidden h-[65px] w-[275px] flex-none items-center overflow-hidden px-5 duration-300 xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed]:xl:w-[91px]">
                        <a class="flex items-center transition-[margin] duration-300 group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-4" href="">
                            <div class="w-6 h-6 image-fit">
                                <img src="dist/images/logo.svg" alt="Rocketman - Admin Dashboard Template">
                            </div>
                            <div class="ml-3 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                WAVEFORM
                            </div>
                        </a>
                        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex" href="">
                            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                        </a>
                    </div>

                    <div class="scrollable-ref w-full h-full z-20 pl-5 pr-4 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
                        <ul class="scrollable">
                            <!-- BEGIN: First Child -->
                            <li class="side-menu__divider">
                                START MENU
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="home" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Dashboard</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-dashboard-overview-1.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Overview 1
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-dashboard-overview-2.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Overview 2
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-calendar.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="calendar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Calendar</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-chat.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="message-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Chat</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Email</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-inbox.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Inbox
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-email-detail.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Email Detail
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-compose.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Compose
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">E-commerce</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-products.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Products
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-product-detail.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Product Detail
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-orders.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Orders
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-order-detail.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Order Detail
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-file-manager.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">File Manager</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li class="side-menu__divider">
                                PAGES
                            </li>
                            <li>
                                <a href="waveform-profile.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="trello" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Profile</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-pricing.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Pricing</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-invoice.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="files" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Invoice</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-faq.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="file-check-2" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">FAQ</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-timeline.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="clipboard-check" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Timeline</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="edit" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Crud</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-crud-data-list.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Data List
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-crud-form.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Form
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link side-menu__link--active side-menu__link--active-dropdown">
                                    <i data-tw-merge="" data-lucide="file-text" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Wizards</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="block">
                                    <li>
                                        <a href="waveform-wizard-layout-1.html" class="side-menu__link side-menu__link--active ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Layout 1
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-wizard-layout-2.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Layout 2
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-wizard-layout-3.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Layout 3
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-login.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="unlock" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Login</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-register.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Register</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="waveform-error-page.html" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Error Page</div>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <!-- END: Second Child -->
                            </li>
                            <li class="side-menu__divider">
                                USER INTERFACE
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="inbox" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Components</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Table
                                            </div>
                                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="waveform-regular-table.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Regular Table
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-tabulator.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Tabulator
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Overlay
                                            </div>
                                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="waveform-modal.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Modal
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-slide-over.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Slide Over
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-notification.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Notification
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-tab.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Tab
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-accordion.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Accordion
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-button.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Button
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-alert.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Alert
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-progress-bar.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Progress Bar
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-tooltip.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Tooltip
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-dropdown.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Dropdown
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-typography.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Typography
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-icon.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Icon
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-loading-icon.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Loading Icon
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="sidebar" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Forms</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-regular-form.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Regular Form
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-datepicker.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Datepicker
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-tom-select.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Tom Select
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-file-upload.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                File Upload
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Wysiwyg Editor
                                            </div>
                                            <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="waveform-wysiwyg-editor-classic-page.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Classic
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-wysiwyg-editor-inline-page.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Inline
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-wysiwyg-editor-balloon-page.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Balloon
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-wysiwyg-editor-balloon-block-page.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Balloon Block
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="waveform-wysiwyg-editor-document-page.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Document
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-validation.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Validation
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <li>
                                <a href="javascript:;" class="side-menu__link ">
                                    <i data-tw-merge="" data-lucide="hard-drive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                    <div class="side-menu__link__title">Widgets</div>
                                    <i data-tw-merge="" data-lucide="chevron-down" class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                </a>
                                <!-- BEGIN: Second Child -->
                                <ul class="hidden">
                                    <li>
                                        <a href="waveform-chart.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Chart
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-slider.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Slider
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                    <li>
                                        <a href="waveform-image-zoom.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">
                                                Image Zoom
                                            </div>
                                        </a>
                                        <!-- BEGIN: Third Child -->
                                        <!-- END: Third Child -->
                                    </li>
                                </ul>
                                <!-- END: Second Child -->
                            </li>
                            <!-- END: First Child -->
                        </ul>
                    </div>


                </div>
                <div class="top-bar group fixed inset-x-0 top-0 h-[65px] transition-[margin] duration-300 ease-in-out xl:ml-[275px] group-[.side-menu--collapsed]:xl:ml-[90px] [&.top-bar--active]:mt-3.5">
                    <div class="absolute inset-x-0 h-full xl:mr-5 transition-[padding] duration-300 ease-in-out group-[.top-bar--active]:px-5 before:content-[''] before:mx-5 before:xl:mx-5 before:absolute before:top-0 before:inset-x-0 before:-mt-[15px] before:h-[20px] before:backdrop-blur">
                        <div class="box group-[.top-bar--active]:box flex h-full w-full items-center border-transparent bg-transparent px-5 shadow-none transition-[padding,background-color,border-color] duration-300 ease-in-out group-[.top-bar--active]:border-transparent group-[.top-bar--active]:bg-theme-2/80 group-[.top-bar--active]:backdrop-blur">
                            <div class="flex items-center gap-1 xl:hidden">
                                <a class="p-2 text-white rounded-full open-mobile-menu hover:bg-white/5" href="">
                                    <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>
                                <a class="p-2 text-white rounded-full hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search" href="javascript:;">
                                    <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                                </a>
                            </div>
                            <!-- BEGIN: Breadcrumb -->
                            <nav aria-label="breadcrumb" class="flex flex-1 hidden xl:block">
                                <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                                    <li class="">
                                        <a href="">App</a>
                                    </li>
                                    <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                                        <a href="">Dashboards</a>
                                    </li>
                                    <li class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                                        <a href="">Analytics</a>
                                    </li>
                                </ol>
                            </nav>
                            <!-- END: Breadcrumb -->
                            <!-- BEGIN: Search -->
                            <div class="relative justify-center flex-1 hidden xl:flex" data-tw-toggle="modal" data-tw-target="#quick-search">
                                <div class="flex w-[350px] cursor-pointer items-center rounded-full border border-transparent bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors duration-300 hover:bg-white/[0.15] hover:duration-100">
                                    <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    <div class="ml-2.5 mr-auto">Quick search...</div>
                                    <div>⌘K</div>
                                </div>
                            </div>
                            <div id="quick-search" aria-hidden="true" tabindex="-1" class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                                <div class="box mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                                    <div class="relative border-b border-slate-200/60">
                                        <i class="absolute inset-y-0 my-auto ml-4 h-5 w-5 text-slate-500" data-lucide="search"></i>
                                        <input data-tw-merge="" type="text" placeholder="Quick Search..." class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 rounded-md placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 border-0 px-12 py-5 shadow-none focus:ring-0">
                                        <div class="absolute inset-y-0 right-0 my-auto mr-4 flex h-6 items-center rounded-md bg-slate-200 px-2 text-xs text-slate-500">
                                            ESC</div>
                                    </div>
                                    <div class="p-5">
                                        <div class="mb-3 font-medium">Applications</div>
                                        <div class="mb-5">
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-success/20 text-success dark:bg-success/10">
                                                    <i class="h-3.5 w-3.5" data-lucide="inbox"></i>
                                                </div>
                                                <div class="ml-3 truncate">Compose New Mail</div>
                                                <div class="ml-auto flex w-48 items-center justify-end truncate text-xs text-slate-500">
                                                    <i class="mr-2 h-3.5 w-3.5" data-lucide="link"></i> Quick Access
                                                </div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-pending/10 text-pending">
                                                    <i class="h-3.5 w-3.5" data-lucide="users"></i>
                                                </div>
                                                <div class="ml-3 truncate">Contacts</div>
                                                <div class="ml-auto flex w-48 items-center justify-end truncate text-xs text-slate-500">
                                                    <i class="mr-2 h-3.5 w-3.5" data-lucide="link"></i> Quick Access
                                                </div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="flex h-7 w-7 items-center justify-center rounded-full bg-primary/10 text-primary/80 dark:bg-primary/20">
                                                    <i class="h-3.5 w-3.5" data-lucide="credit-card"></i>
                                                </div>
                                                <div class="ml-3 truncate">Product Reports</div>
                                                <div class="ml-auto flex w-48 items-center justify-end truncate text-xs text-slate-500">
                                                    <i class="mr-2 h-3.5 w-3.5" data-lucide="link"></i> Quick Access
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mb-3 font-medium">Contacts</div>
                                        <div class="mb-5">
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/profile-12.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Russell Crowe</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    russellcrowe@left4code.com</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/profile-6.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Johnny Depp</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    johnnydepp@left4code.com</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/profile-2.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Russell Crowe</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    russellcrowe@left4code.com</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/profile-4.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Leonardo DiCaprio</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    leonardodicaprio@left4code.com</div>
                                            </a>
                                        </div>
                                        <div class="mb-3 font-medium">Products</div>
                                        <div>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/preview-3.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Sony Master Series A9G</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    Electronic</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/preview-11.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Dell XPS 13</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    PC & Laptop</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/preview-3.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Apple MacBook Pro 13</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    PC & Laptop</div>
                                            </a>
                                            <a class="mt-3 flex items-center first:mt-0" href="">
                                                <div class="image-fit h-7 w-7">
                                                    <img class="rounded-full" src="dist/images/fakers/preview-4.jpg" alt="Rocketman - Admin Dashboard Template">
                                                </div>
                                                <div class="ml-3 w-36 truncate">Apple MacBook Pro 13</div>
                                                <div class="ml-auto w-36 truncate text-right text-xs text-slate-500">
                                                    PC & Laptop</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Search -->
                            <!-- BEGIN: Notification & User Menu -->
                            <div class="flex items-center flex-1">
                                <div class="flex items-center gap-1 ml-auto">
                                    <a class="p-2 text-white rounded-full hover:bg-white/5" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="inbox" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <a class="p-2 text-white rounded-full request-full-screen hover:bg-white/5" href="javascript:;">
                                        <i data-tw-merge="" data-lucide="expand" class="stroke-[1] h-[18px] w-[18px]"></i>
                                    </a>
                                    <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative">
                                        <div data-tw-toggle="dropdown" aria-expanded="false" role="button" class="cursor-pointer p-2 text-white rounded-full hover:bg-white/5"><span class="relative before:content-[''] before:w-[8px] before:h-[8px] before:rounded-full before:absolute before:top-[-2px] before:right-0 before:bg-white before:opacity-50 before:animate-ping after:content-[''] after:w-[8px] after:h-[8px] after:rounded-full after:absolute after:top-[-2px] after:right-0 after:bg-danger">
                                                <i data-tw-merge="" data-lucide="bell" class="stroke-[1] h-[18px] w-[18px]"></i>
                                            </span></div>
                                        <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-2 w-[280px] p-5 sm:w-[350px]">
                                                <div class="mb-5 font-medium">Notifications</div>
                                                <div class=" relative flex cursor-pointer">
                                                    <div class="flex-none w-10 h-10 mr-1 image-fit">
                                                        <img class="rounded-full" src="dist/images/fakers/profile-5.jpg" alt="Rocketman - Admin Dashboard Template">
                                                        <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                                        </div>
                                                    </div>
                                                    <div class="ml-2">
                                                        <a class="mr-1 font-medium" href="javascript:;">Johnny Depp</a>
                                                        <span class="text-slate-500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</span>
                                                        <div class="mt-1 text-xs text-slate-400">01:10 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 relative flex cursor-pointer">
                                                    <div class="flex-none w-10 h-10 mr-1 image-fit">
                                                        <img class="rounded-full" src="dist/images/fakers/profile-11.jpg" alt="Rocketman - Admin Dashboard Template">
                                                        <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                                        </div>
                                                    </div>
                                                    <div class="ml-2">
                                                        <a class="mr-1 font-medium" href="javascript:;">Denzel Washington</a>
                                                        <span class="text-slate-500">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</span>
                                                        <div class="mt-1 text-xs text-slate-400">01:10 PM
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-5 relative flex cursor-pointer">
                                                    <div class="flex-none w-10 h-10 mr-1 image-fit">
                                                        <img class="rounded-full" src="dist/images/fakers/profile-12.jpg" alt="Rocketman - Admin Dashboard Template">
                                                        <div class="absolute bottom-0 right-0 w-3 h-3 border-2 border-white rounded-full bg-success dark:border-darkmode-600">
                                                        </div>
                                                    </div>
                                                    <div class="ml-2">
                                                        <a class="mr-1 font-medium" href="javascript:;">Al Pacino</a>
                                                        <span class="text-slate-500">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</span>
                                                        <div class="mt-1 text-xs text-slate-400">01:10 PM
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5"><button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"><img src="dist/images/fakers/profile-5.jpg" alt="Rocketman - Admin Dashboard Template">
                                    </button>
                                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150" data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1" data-enter-to="!mt-1 visible opacity-100 translate-y-0" data-leave="transition-all ease-linear duration-150" data-leave-from="!mt-1 visible opacity-100 translate-y-0" data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1" class="dropdown-menu absolute z-[9999] hidden">
                                        <div data-tw-merge="" class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-56 mt-1">
                                            <a href="waveform-profile.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="users" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Profile</a>
                                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                            </div>
                                            <a href="waveform-calendar.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="calendar-check2" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Calendar</a>
                                            <a href="waveform-compose.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="mail-search" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Email Inbox</a>
                                            <a href="waveform-products.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="lock" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Products</a>
                                            <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                            </div>
                                            <a href="waveform-login.html" class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i data-tw-merge="" data-lucide="power" class="stroke-[1] w-4 h-4 mr-2"></i>
                                                Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Notification & User Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content relative transition-[margin,width] duration-100 pl-5 xl:pl-0 pr-5 pt-[66px] pb-5 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                <div class="relative z-10 mt-[35px] rounded-3xl bg-slate-100 px-5 pt-px pb-5 min-h-screen before:content-[''] before:rounded-3xl before:bg-slate-100/30 before:inset-x-0 before:h-20 before:top-0 before:absolute before:z-[-1] before:-mt-3.5 before:mx-5 after:content-[''] after:rounded-3xl after:bg-slate-100/20 after:inset-x-0 after:h-20 after:top-0 after:absolute after:z-[-2] after:-mt-7 after:mx-12">



                </div>
            </div>
        </div>
    </div>
@endpush
