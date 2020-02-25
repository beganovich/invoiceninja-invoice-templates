@extends('_layouts.master')

@section('body')

<div class="py-16 px-8">
    <div class="flex flex justify-between border-b-4 border-black">
        <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-40 pb-6">
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
    <div class="p-px border-b border-black mt-1"></div>
    <!-- <div class="flex justify-between mt-8">
        <div class="w-1/2 bg-red-300">
            <h2 class="text-2xl">Balance Due</h2>
            <div class="flex mt-4">
                <div class="flex flex-col">
                    <span class="font-semibold">Winterfield Medical Supply</span>
                    <span>65 Medical Complex Rd., D98</span>
                    <span>Atlanta, GA 22546</span>
                    <span>United States</span>
                    <span>demo@invoiceninja.com</span>
                </div>
                <div class="flex ml-6 pl-4 border-dashed border-l border-black">
                    <div class="flex mr-5 bg-red-100 flex-col">
                        <span>Ninja Sample</span>
                        <span>Contact@InvoiceNinja.com</span>
                        <span>1-800-555-Ninja</span>
                    </div>
                    <div class="flex flex-col w-full bg-red-100">
                        <span>123 Ninja Blvd.</span>
                        <span>NinjaLand, 97315</span>
                        <span>United States</span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="flex mt-8">
        <div class="w-1/3 mr-6 flex flex-col pr-2 border-r border-dashed border-black">
            <span class="font-semibold">Winterfield Medical Supply</span>
            <span>65 Medical Complex Rd., D98</span>
            <span>Atlanta, GA 22546</span>
            <span>United States</span>
            <span>demo@invoiceninja.com</span>
        </div>
        <div class="flex flex-col mr-6">
            <span>Ninja Sample</span>
            <span>Contact@InvoiceNinja.com</span>
            <span>1-800-555-Ninja</span>
        </div>
        <div class="flex flex-col">
            <span>123 Ninja Blvd.</span>
            <span>NinjaLand, 97315</span>
            <span>United States</span>
        </div>
    </div>
    <table class="w-full table-auto mb-6 mt-16">
        <thead class="text-left border-dashed border-b border-black">
            <tr>
                <th class="font-normal text-green-700 px-4 py-2">Item</th>
                <th class="font-normal text-green-700 px-4 py-2">Description</th>
                <th class="font-normal text-green-700 px-4 py-2 text-right">Unit Cost</th>
                <th class="font-normal text-green-700 px-4 py-2 text-right">Quantity</th>
                <th class="font-normal text-green-700 px-4 py-2 text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-dashed border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-dashed border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="border-dashed border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="border-dashed border-b border-black">
                <td ref="item" class="text-orange-700 px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-orange-700 text-right px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>

    <div class="flex items-center justify-between mt-2 px-4 pb-4">
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
    <div class="flex items-center justify-between mt-4 pb-4 px-4">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p class="font-semibold">Terms</p>
                <p>Wedding photos will be available approximately 1 month after the wedding date. Thank you for your patience!</p>
            </div>
        </div>
        <div class="flex w-2/5 flex-col">
            <section class="flex py-2 text-green-700 border-t border-b border-dashed border-black px-2 mt-1">
                <p class="w-1/2">Balance Due</p>
                <p class="text-right w-1/2">$0.00</p>
            </section>
        </div>
    </div>
    
    <div class="flex justify-center border-b-4 border-black mt-6">
        <h4 class="text-2xl font-semibold mb-4">Thanks</h4>
    </div>
    <div class="p-px border-b border-black mt-1"></div>
</div>

@endsection