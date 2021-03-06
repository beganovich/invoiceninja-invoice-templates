@extends('_layouts.master')

@section('body')

<div class="py-16 mx-16">
    <div class="flex justify-between">
        <div class="w-2/3 flex">
            <div class="flex flex-col">
                <span class="font-semibold">Berg Builders Inc.</span>
                <span>987 Conway Blvd.</span>
                <span>Los Angeles, California 90210</span>
                <span>United States</span>
                <span>demo@invoiceninja.com</span>
            </div>
            <div class="ml-6 flex flex-col">
                <span>Ninja Sample</span>
                <span>Contact@InvoiceNinja.com</span>
                <span>1-800-555-Ninja</span>
            </div>
            <div class="ml-6 flex flex-col">
                <span>123 Ninja Blvd.</span>
                <span>NinjaLand, 97315</span>
                <span>United States</span>
            </div>
        </div>
        <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="h-24">
    </div>
    <div class="flex justify-between mt-8">
        <div class="w-2/3 flex">
            <h1 class="text-5xl uppercase font-semibold">Invoice</h1>
            <i class="ml-4 text-5xl text-pink-700">#1564</i>
        </div>
        <div class="flex">
            <div class="flex justify-between flex-col">
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
    <table class="w-full table-auto mt-12 border-t-4 border-pink-700 bg-white">
        <thead class="text-left rounded-lg">
            <tr>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-5">Item</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2">Description</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Unit Cost</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Quantity</th>
                <th class="font-medium uppercase text-pink-700 text-xl px-4 py-2 text-right">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-gray-200">
                <td ref="item" class="font-semibold px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-100">
                <td ref="item" class="font-semibold px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$170.00</td>
            </tr>
            <tr class="bg-gray-200">
                <td ref="item" class="font-semibold px-4 py-4">Painting Service</td>
                <td ref="description" class="px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$885.00</td>
            </tr>
            <tr class="bg-gray-100">
                <td ref="item" class="font-semibold px-4 py-4">Repair Service</td>
                <td ref="description" class="px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="text-right px-4 py-4">1</td>
                <td ref="line.total" class="text-right px-4 py-4">$170.00</td>
            </tr>
            <!-- <tr>
                <td colspan="3" ref="note" class="px-4 py-4">Thank you for choosing Berg Builders.</td>
                <td ref="quantity" class="px-4 py-4">
                    <p>Subtotal</p>
                    <p>Paid to Date</p>
                </td>
                <td ref="line.total" class="px-4 py-4 text-right">
                    <p>$1,161.00</p>
                    <p>$0.00</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" ref="terms" class="px-4 py-4">
                    <p ref="terms" class="font-semibold">Terms</p>
                    <p>N 21</p>
                </td>
            </tr> -->
        </tbody>
    </table>

    <div class="border-b-4 border-pink-700">
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
                    <p>N21</p>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-end mt-4">
        <p>Balance Due</p>
        <p class="ml-8 text-pink-700 font-semibold">$5,280.00</p>
    </div>
</div>

@endsection