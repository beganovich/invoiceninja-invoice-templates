@extends('_layouts.master')

@section('body')

<style>
    #imageContainer {
        background-image: url('/assets/images/006-photographer-2.jpg');
        background-size: cover;
    }
</style>

<div class="px-16 py-10">
    <div class="flex items-center justify-between mt-2s">
        <div ref="logo">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-40">
        </div>
        <div class="flex">
            <div class="flex flex-col mr-5">
                <span>Invoice Number</span>
                <span>Invoice Date</span>
                <span>Due Date</span>
                <span>Balance Due</span>
            </div>
            <div class="flex flex-col text-right">
                <span class="font-semibold" id="invoice.number">00984</span>
                <span id="invoice.date">Sep 8, 2014</span>
                <span id="due.date">Nov 9, 2014</span>
                <span id="balance.due">$1,838.80</span>
            </div>
        </div>
    </div>
</div>
<div class="flex content-center flex-wrap bg-gray-200 h-auto p-16" id="imageContainer">
    <div class="flex flex-col">
        <div class="flex">
            <p class="uppercase text-orange-800">To:</p>
            <div class="flex flex-col ml-2">
                <span class="font-semibold">Koala Photography</span>
                <span>872 Samson Street</span>
                <span>San Antonio, Texas 95175</span>
                <span>United States</span>
                <span>demo@invoiceninja.com</span>
            </div>
        </div>
        <div class="flex mt-5">
            <p class="uppercase text-orange-800">From:</p>
            <div class="flex flex-col ml-2">
                <span class="font-semibold">Ninja Sample</span>
                <span>Contact@InvoiceNinja.com</span>
                <span>1-800-555-Ninja</span>
                <span>123 Ninja Blvd.</span>
                <span>NinjaLand, 97315</span>
                <span>United States</span>
            </div>
        </div>
    </div>
</div>
<div class="px-16 py-16">
    <table class="w-full table-auto">
        <thead class="text-left border-b-4 border-black">
            <tr>
                <th class="font-normal px-4 py-2 uppercase">Item</th>
                <th class="font-normal px-4 py-2 uppercase">Description</th>
                <th class="font-normal px-4 py-2 text-right uppercase">Unit Cost</th>
                <th class="font-normal px-4 py-2 text-right uppercase">Quantity</th>
                <th class="font-normal px-4 py-2 uppercase text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>
    <div class="flex items-center justify-between mt-2 pb-4 border-b border-black">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p>Wedding photos will be available approximately 1 month after the wedding date. Thank you for your patience!</p>
            </div>
        </div>
        <div class="w-1/3 flex flex-col">
            <div class="flex px-3 mt-2">
                <section class="w-1/2 text-right flex flex-col">
                    <span>Subtotal</span>
                    <span>Discount</span>
                    <span>Paid To Date</span>
                </section>
                <section class="w-1/2 text-right flex flex-col">
                    <span>$0</span>
                    <span>$0</span>
                    <span>$0</span>
                </section>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-between mt-4 pb-4">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p class="font-semibold">Terms</p>
                <p>Wedding photos will be available approximately 1 month after the wedding date. Thank you for your patience!</p>
            </div>
        </div>
        <div class="flex w-2/5 flex-col">
            <section class="flex bg-orange-700 py-2 text-white px-2 mt-1">
                <p class="w-1/2">Balance Due</p>
                <p class="text-right w-1/2">$0.00</p>
            </section>
        </div>
    </div>
</div>
@endsection
<!-- 
<div class="pt-4">
    <p class="font-bold">Terms</p>
    <p>Payment must be met within 21 days of the day of service.</p>
</div>

<section class="flex bg-orange-700 py-2 text-white px-4 mt-1">
    <p class="w-1/2">Balance Due</p>
    <p class="text-right w-1/2">$0.00</p>
</section> -->