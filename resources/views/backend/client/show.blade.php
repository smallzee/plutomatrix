@extends('layouts.backend.app')
@push('main')
    <div class="-mb-5 -mt-px ">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6 pb-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12">
                    <div class="intro-y mt-12 sm:mt-4">
                        <div class="box box--stacked grid grid-cols-12 gap-0 divide-x divide-y divide-dashed divide-slate-200 py-0 dark:divide-white/5 xl:divide-y-0 xl:py-5">
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/20 text-theme-1">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${!! number_format($user->wallet->balance,2) !!}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Balance</div>
                                </div>
                            </div>

                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 sm:!border-t-0 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-pending/20 bg-pending/20 text-pending">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${!! number_format($user->wallet->deposit,2) !!}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Deposit</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-warning/20 bg-warning/20 text-warning">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>

                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${!! number_format($user->wallet->ative_investment,2) !!}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Active Investment</div>
                                </div>
                            </div>
                            <div class="relative col-span-12 px-5 py-5 sm:col-span-6 xl:col-span-3 xl:py-0 [&:not(:last-child)]:xl:before:content-[''] [&:not(:last-child)]:xl:before:w-[13px] [&:not(:last-child)]:xl:before:h-[12px] [&:not(:last-child)]:xl:before:absolute [&:not(:last-child)]:xl:before:rounded-full [&:not(:last-child)]:xl:before:bg-slate-200 [&:not(:last-child)]:xl:before:top-0 [&:not(:last-child)]:xl:before:right-0 [&:not(:last-child)]:xl:before:-mr-[7px] [&:not(:last-child)]:xl:before:-mt-[25px] [&:not(:last-child)]:xl:before:dark:bg-darkmode-500 [&:not(:last-child)]:xl:after:content-[''] [&:not(:last-child)]:xl:after:w-[11px] [&:not(:last-child)]:xl:after:h-[14px] [&:not(:last-child)]:xl:after:absolute [&:not(:last-child)]:xl:after:rounded-full [&:not(:last-child)]:xl:after:bg-slate-100 [&:not(:last-child)]:xl:after:top-0 [&:not(:last-child)]:xl:after:right-0 [&:not(:last-child)]:xl:after:-mr-[6px] [&:not(:last-child)]:xl:after:-mt-[28px] [&:not(:last-child)]:xl:after:dark:bg-darkmode-700 [&:not(:last-child)&gt;div]:xl:before:content-[''] [&:not(:last-child)&gt;div]:xl:before:w-[13px] [&:not(:last-child)&gt;div]:xl:before:h-[12px] [&:not(:last-child)&gt;div]:xl:before:absolute [&:not(:last-child)&gt;div]:xl:before:rounded-full [&:not(:last-child)&gt;div]:xl:before:bg-slate-200 [&:not(:last-child)&gt;div]:xl:before:bottom-0 [&:not(:last-child)&gt;div]:xl:before:right-0 [&:not(:last-child)&gt;div]:xl:before:-mr-[7px] [&:not(:last-child)&gt;div]:xl:before:-mb-[25px] [&:not(:last-child)&gt;div]:xl:before:dark:bg-darkmode-700/60 [&:not(:last-child)&gt;div]:xl:after:content-[''] [&:not(:last-child)&gt;div]:xl:after:w-[11px] [&:not(:last-child)&gt;div]:xl:after:h-[14px] [&:not(:last-child)&gt;div]:xl:after:absolute [&:not(:last-child)&gt;div]:xl:after:rounded-full [&:not(:last-child)&gt;div]:xl:after:bg-slate-50 [&:not(:last-child)&gt;div]:xl:after:bottom-0 [&:not(:last-child)&gt;div]:xl:after:right-0 [&:not(:last-child)&gt;div]:xl:after:-mr-[6px] [&:not(:last-child)&gt;div]:xl:after:-mb-[28px] [&:not(:last-child)&gt;div]:xl:after:dark:bg-darkmode-600">
                                <div>
                                    <div class="flex">
                                        <div class="flex h-[2.2rem] w-[2.2rem] items-center justify-center rounded-full border border-success/20 bg-success/20 text-success">
                                            <i data-tw-merge="" data-lucide="credit-card" class="stroke-[1] w-5 h-5"></i>
                                        </div>
                                    </div>
                                    <div class="mt-6 text-2xl font-medium leading-7">
                                        ${!! number_format($user->wallet->total_withdrawn,2) !!}
                                    </div>
                                    <div class="mt-1 text-slate-500">Total Withdrawn</div>
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

@push('content')
    <div>
        <ul data-tw-merge role="tablist" class="border-b border-slate-200 dark:border-darkmode-400 w-full flex">
            <li id="example-1-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-1" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent active w-full py-2"
                >Example Tab 1</button>
            </li>
            <li id="example-2-tab" data-tw-merge role="presentation" class="focus-visible:outline-none flex-1 -mb-px">
                <button data-tw-merge data-tw-target="#example-2" role="tab" class="cursor-pointer block appearance-none px-3 py-2 border border-transparent text-slate-600 transition-colors dark:text-slate-400 [&amp;.active]:text-slate-700 [&amp;.active]:dark:text-white block border-transparent rounded-t-md dark:border-transparent [&amp;.active]:bg-white [&amp;.active]:border-slate-200 [&amp;.active]:border-b-transparent [&amp;.active]:font-medium [&amp;.active]:dark:bg-transparent [&amp;.active]:dark:border-t-darkmode-400 [&amp;.active]:dark:border-b-darkmode-600 [&amp;.active]:dark:border-x-darkmode-400 [&amp;:not(.active)]:hover:bg-slate-100 [&amp;:not(.active)]:dark:hover:bg-darkmode-400 [&amp;:not(.active)]:dark:hover:border-transparent w-full py-2"
                >Example Tab 2</button>
            </li>
        </ul>
        <div
            class="tab-content border-b border-l border-r">
            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150"  data-leave-from="visible opacity-100"  data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-1" role="tabpanel" aria-labelledby="example-1-tab" class="tab-pane active p-5 leading-relaxed">

                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially
                unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum
                passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of
                Lorem Ipsum.
            </div>

            <div data-transition data-selector=".active" data-enter="transition-[visibility,opacity] ease-linear duration-150" data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0" data-enter-to="visible opacity-100" data-leave="transition-[visibility,opacity] ease-linear duration-150" data-leave-from="visible opacity-100" data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0" id="example-2" role="tabpanel" aria-labelledby="example-2-tab" class="tab-pane p-5 leading-relaxed">

                It is a long established fact that a reader will be
                distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum
                is that it has a more-or-less normal distribution of
                letters, as opposed to using 'Content here, content
                here', making it look like readable English. Many
                desktop publishing packages and web page editors now
                use Lorem Ipsum as their default model text, and a
                search for 'lorem ipsum' will uncover many web sites
                still in their infancy. Various versions have evolved
                over the years, sometimes by accident, sometimes on
                purpose (injected humour and the like).

            </div>
        </div>
    </div>

@endpush
