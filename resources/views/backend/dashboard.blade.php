@extends('layouts.backend.app')
@push('content')
    <div class="-mb-5 -mt-px ">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6 pb-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y mt-12 sm:mt-4">
                        <div class="box box--stacked grid grid-cols-12 gap-0 divide-x divide-y divide-dashed divide-slate-200 py-0 dark:divide-white/5 xl:divide-y-0 xl:py-5">
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/20 text-theme-1">
                                            <i data-tw-merge="" data-lucide="pie-chart" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span data-placement="top" title="5.2% Higher than last month" class="tooltip cursor-pointer flex items-center pl-2 text-success">+5.2% <i data-tw-merge="" data-lucide="arrow-up" class="stroke-[1] ml-0.5 h-4 w-4"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">$149,300</div>
                                    <div class="mt-1 text-slate-500">Total Assets</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 sm:!border-t-0 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-pending/20 bg-pending/20 text-pending">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span data-placement="top" title="2% Lower than last month" class="tooltip cursor-pointer flex items-center pl-2 text-danger">-2% <i data-tw-merge="" data-lucide="arrow-down" class="stroke-[1] ml-0.5 h-4 w-4"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">5.241</div>
                                    <div class="mt-1 text-slate-500">New Transactions</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-warning/20 bg-warning/20 text-warning">
                                            <i data-tw-merge="" data-lucide="shopping-bag" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span data-placement="top" title="4.1% Higher than last month" class="tooltip cursor-pointer flex items-center pl-2 text-success">+4.1% <i data-tw-merge="" data-lucide="arrow-down" class="stroke-[1] ml-0.5 h-4 w-4"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">1.405</div>
                                    <div class="mt-1 text-slate-500">New Products</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-success/20 bg-success/20 text-success">
                                            <i data-tw-merge="" data-lucide="hard-drive" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                        <div class="ml-auto">
                                            <span data-placement="top" title="1% Lower than last month" class="tooltip cursor-pointer flex items-center pl-2 text-danger">-1% <i data-tw-merge="" data-lucide="arrow-down" class="stroke-[1] ml-0.5 h-4 w-4"></i></span>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">2.034</div>
                                    <div class="mt-1 text-slate-500">New Stores</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
            </div>
        </div>
    </div>
@endpush
