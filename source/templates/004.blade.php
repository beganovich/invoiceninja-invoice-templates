@extends('_layouts.master')

@section('body')
<div class="px-12 py-8">

    <div class="flex">
        <div class="w-1/3">
            Demo..
        </div>
        <div class="w-1/3 flex flex-col">
            <span>342 Riding Rd, Balmoral,</span>
            <span>QLD 4171 Australia</span>
            <span>Australia</span>
            <span>Tax Invoice</span>
        </div>
        <div class="w-1/3 flex flex-col">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-24">
            <div class="flex px-3 mt-6">
                <section class="w-1/2">
                    <p>Invoice Number</p>
                    <p>Invoice Date</p>
                    <p>Due Date</p>
                </section>
                <section>
                    <p>D-085</p>
                    <p>Dec 7, 2015</p>
                    <p>Jan 28, 2016</p>
                </section>
            </div>
            <section class="flex bg-gray-300 px-3">
                <p class="w-1/2">Balance Due</p>
                <p>$0.00</p>
            </section>
        </div>
    </div>

    <div class="flex flex-col">
        <p>Koala Photography</p>
        <p>872 Samson Street</p>
        <p>San Antonio, Texas 95175</p>
        <p>United States</p>
        <p>demo@invoiceninja.com</p>
    </div>

    <table class="w-full table-auto mt-8">
        <thead class="text-left bg-gray-300">
            <tr>
                <th class="px-4 py-2">Item</th>
                <th class="px-4 py-2">Description</th>
                <th class="px-4 py-2">Discount</th>
                <th class="px-4 py-2">Discount</th>
                <th class="px-4 py-2">Unit Cost</th>
                <th class="px-4 py-2">Quantity</th>
                <th class="px-4 py-2">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ref="item" class="border-t-2 border-b border-gray-300 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t-2 border-b border-gray-300 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t-2 border-b border-gray-300 px-4 py-4">885.00</td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="quantity" class="border-t-2 border-b border-gray-300 px-4 py-4">1</td>
                <td ref="line.total" class="border-t-2 border-b border-gray-300 px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-t-2 border-b border-gray-300 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t-2 border-b border-gray-300 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t-2 border-b border-gray-300 px-4 py-4">170.00</td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="quantity" class="border-t-2 border-b border-gray-300 px-4 py-4">1</td>
                <td ref="line.total" class="border-t-2 border-b border-gray-300 px-4 py-4">$170.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-t-2 border-b border-gray-300 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-t-2 border-b border-gray-300 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-t-2 border-b border-gray-300 px-4 py-4">885.00</td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="quantity" class="border-t-2 border-b border-gray-300 px-4 py-4">1</td>
                <td ref="line.total" class="border-t-2 border-b border-gray-300 px-4 py-4">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-t-2 border-b border-gray-300 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-t-2 border-b border-gray-300 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-t-2 border-b border-gray-300 px-4 py-4">170.00</td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="discount" class="border-t-2 border-b border-gray-300 px-4 py-4"></td>
                <td ref="quantity" class="border-t-2 border-b border-gray-300 px-4 py-4">1</td>
                <td ref="line.total" class="border-t-2 border-b border-gray-300 px-4 py-4">$170.00</td>
            </tr>
        </tbody>
    </table>

    <div class="flex justify-between mt-8">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p>Wedding photos will be available approximately 1 month after the wedding date. Thank you for your patience!</p>
                <div class="pt-4">
                    <p class="font-bold">Terms</p>
                    <p>Payment must be met within 21 days of the day of service.</p>
                </div>
            </div>
        </div>
        <div class="w-1/3 flex flex-col">
            <div class="flex px-3 mt-6">
                <section class="w-1/2 text-right">
                    <p>Subtotal</p>
                    <p>Discount</p>
                    <p>Paid To Date</p>
                </section>
                <section class="w-1/2 text-right">
                    <p>$3,600.00</p>
                    <p>$540.00</p>
                    <p>$3,060.00</p>
                </section>
            </div>
            <section class="flex bg-gray-300 px-3 mt-1">
                <p class="w-1/2 text-right">Balance Due</p>
                <p class="text-right w-1/2">$0.00</p>
            </section>
        </div>

    </div>
    @endsection