<x-mail::message>

<p>Dear, {{ $name }}</p>

<ol>
    <li>Email Address : {{ $email }}</li>
    <li>Amount : ${!! number_format($amount,2) !!}</li>
    <li>Status : {{ $status }}</li>
    <li>Reference : {{ $reference }}</li>
    <li>Package : {{ $package }}</li>
    <li>Method : {{ $method }}</li>
    <li>Transaction Date : {{ date('Y-m-d h:i:s') }}</li>
</ol>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
