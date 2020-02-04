@extends('_layouts.master')

@section('body')

<div class="p-16">
    <div class="flex justify-center border-b-4 border-black">
        <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="w-40 pb-6">
    </div>
    <div class="p-px border-b border-black mt-1"></div>
    <div class="flex justify-between mt-8">
        <div class="w-2/3">
            <h2 class="text-2xl">Balance Due</h2>
            <div class="flex mt-4">
                <div class="flex flex-col">
                    <p class="font-semibold">Winterfield Medical Supply</p>
                    <p>65 Medical Complex Rd., D98</p>
                    <p>Atlanta, GA 22546</p>
                    <p>United States</p>
                    <p>demo@invoiceninja.com</p>
                </div>
                <div class="flex ml-6 pl-4 border-dashed border-l border-black">
                    <div class="flex flex-col">
                        <p>Ninja Sample</p>
                        <p>Contact@InvoiceNinja.com</p>
                        <p>1-800-555-Ninja</p>
                    </div>
                    <div class="flex flex-col ml-5">
                        <p>123 Ninja Blvd.</p>
                        <p>NinjaLand, 97315</p>
                        <p>United States</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mr-8">
            <h2 class="text-2xl">Details:</h2>
            <div class="flex flex-col mt-4">
                <section class="flex justify-between text-left">
                    <span>Invoice Number</span>
                    <span class="ml-16 font-semibold">20802</span>
                </section>
                <section class="flex justify-between text-left">
                    <span>Invoice Date</span>
                    <span class="ml-16">Sep 6, 2014</span>
                </section>
                <section class="flex justify-between text-left">
                    <span>Due Date</span>
                    <span class="ml-16">Sep 6, 2014</span>
                </section>
                <section class="flex justify-between text-left">
                    <span>Balance Due</span>
                    <span class="ml-16">$4,518.00</span>
                </section>
            </div>
        </div>
    </div>
    <table class="w-full table-auto my-20">
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
            <tr>
                <td colspan="3" ref="note" class="px-4 py-4">Passed Car Inspection. Vehicle overall in good condition. <br> Return for tune up for 10 months to 1 year.</td>
                <td ref="quantity" class="px-4 py-4">
                    <p>Subtotal</p>
                    <p>Discount 5%</p>
                    <p>Paid to Date</p>
                </td>
                <td ref="line.total" class="px-4 py-4 text-right">
                    <p>$1,161.00</p>
                    <p>$58.05</p>
                    <p>$0.00</p>
                </td>
            </tr>
            <tr>
                <td colspan="5" ref="terms" class="px-4 py-4">
                    <p ref="terms" class="font-semibold">Terms</p>
                    <p>All repairs guaranteed for up to 6 months. Please call us with <br> any questions or concerns regarding repairs or any other issues.</p>
                </td>
            </tr>
            <tr>
                <td colspan="3" ref="terms" class="px-4 py-4"></td>
                <td ref="terms" class="px-4 py-3 text-right border-dashed border-black border-t border-b">
                    <span class="text-green-700">Balance Due</span>
                </td>
                <td ref="terms" class="px-4 py-3 text-right border-dashed border-black border-t border-b">
                    <span class="text-green-700">$3,060.00</span>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="flex justify-center border-b-4 border-black">
        <h4 class="text-2xl font-semibold mb-4">Thanks</h4>
    </div>
    <div class="p-px border-b border-black mt-1"></div>
</div>

@endsection