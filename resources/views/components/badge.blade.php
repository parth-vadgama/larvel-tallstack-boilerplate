@props(['badge'])

@if (!empty($badge))
    @switch($badge)
        @case('CLOSED')
        @case('REPAYMENT')
        @case('active')
        @case('completed')
        @case('ACTIVE')
            <span
                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                {{ str()->replace('_', ' ',str()->upper($badge)) }}
            </span>
        @break

        @case('pending')
        @case('FEE_ADJUSTMENT')
        @case('FEE')
        @case('blocked')
        @case('PENALTY_APPLIED')
            <span
                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                {{ str()->replace('_', ' ',str()->upper($badge)) }}
            </span>
        @break

        @case('inactive')
        @case('ACTIVE_IN_ARREARS')
        @case('DEFERRED_INTEREST_APPLIED')
        @case('DEFERRED_INTEREST_PAID')
        @case('INTEREST_APPLIED')
        @case('in-progress')
            <span
                class="bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                {{ str()->replace('_', ' ',str()->upper($badge)) }}
            </span>
        @break


        @case('DISBURSMENT_ADJUSTMENT')
        @case('DISBURSMENT')
        @case('approved')
        @case('FEE_CHARGED')
            <span
                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                {{ str()->replace('_', ' ',str()->upper($badge)) }}
            </span>
        @break

        @case('BRANCH_CHANGED')
            <span
                class="bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900">
                {{ str()->replace('_', ' ',str()->upper($badge)) }}
            </span>
        @break

    @endswitch
@endif
{{--
bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900 
bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800
bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300 
bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900
bg-yellow-100 text-yellow-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900
bg-primary-100 text-primary-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-900
bg-purple-100 text-purple-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-purple-200 dark:text-purple-900
bg-pink-100 text-pink-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-pink-200 dark:text-pink-900
--}}