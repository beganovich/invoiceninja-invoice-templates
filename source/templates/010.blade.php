@extends('_layouts.master')

@section('body')
<div class="p-1 bg-teal-600"></div>

<div class="my-12 mx-16">
    <div class="flex items-center justify-between">
        <div class="w-1/2">
            <img src="/assets/images/invoiceninja-logo.png" alt="Company logo" class="h-24 ml-2">
        </div>
        <div class="bg-teal-600 p-5">
            <div class="flex">
                <div class="flex justify-between text-white flex-col mr-8">
                    <span>Invoice Number</span>
                    <span>Invoice Date</span>
                    <span>Due Date</span>
                    <span>Balance Due</span>
                </div>
                <div class="flex flex-col text-right text-white">
                    <span class="font-semibold" id="invoice.number">00984</span>
                    <span id="invoice.date">Sep 8, 2014</span>
                    <span id="due.date">Nov 9, 2014</span>
                    <span id="balance.due">$1,838.80</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex mt-16">
        <div class="w-1/2">
            <div class="flex flex-col">
                <p class="font-semibold text-teal-600 pl-4">Invoice to:</p>
                <div class="flex border-dashed border-t-4 border-b-4 border-teal-600 py-4 mt-4 pl-4">
                    <section class="flex flex-col">
                        <span class="text-red-700">Novatech Industries</span>
                        <span>585 Sycamore Street</span>
                        <span>Houston Tx 13579</span>
                        <span>demo@invoiceninja.com</span>
                        <span>888-654-1379</span>
                    </section>
                </div>
            </div>
        </div>
        <div class="w-1/2 ml-24">
            <div class="flex flex-col">
                <p class="font-semibold text-teal-600 pl-4">From:</p>
                <div class="flex border-dashed border-t-4 border-b-4 border-teal-600 py-4 mt-4 pl-4">
                    <section class="flex flex-col">
                        <span class="text-red-700">Ninja Sample</span>
                        <span>123 Ninja Blvd.</span>
                        <span>NinjaLand 97315</span>
                        <span>Contact@InvoiceNinja.com</span>
                        <span>1-800-555-Ninja</span>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <table class="w-full table-auto mt-20 mb-8">
        <thead class="text-left bg-teal-600 rounded-lg">
            <tr>
                <th class="font-semibold text-white px-4 py-3">Item</th>
                <th class="font-semibold text-white px-4 py-2">Description</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Unit Cost</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Quantity</th>
                <th class="font-semibold text-white px-4 py-2 text-right">Line Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td ref="item" class="border-dashed border-b-4 border-teal-600 text-red-800 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-dashed border-b-4 border-teal-600 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-dashed border-b-4 border-teal-600 text-red-800 text-right px-4 py-4 font-semibold">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-dashed border-b-4 border-teal-600 text-red-800 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-dashed border-b-4 border-teal-600 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-dashed border-b-4 border-teal-600 text-red-800 text-right px-4 py-4 font-semibold">$170.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-dashed border-b-4 border-teal-600 text-red-800 px-4 py-4">Painting Service</td>
                <td ref="description" class="border-dashed border-b-4 border-teal-600 px-4 py-4">25 hours painting</td>
                <td ref="unit.cost" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">885.00</td>
                <td ref="quantity" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-dashed border-b-4 border-teal-600 text-red-800 text-right px-4 py-4 font-semibold">$885.00</td>
            </tr>
            <tr>
                <td ref="item" class="border-dashed border-b-4 border-teal-600 text-red-800 px-4 py-4">Repair Service</td>
                <td ref="description" class="border-dashed border-b-4 border-teal-600 px-4 py-4">Sanding and painting dresser</td>
                <td ref="unit.cost" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">170.00</td>
                <td ref="quantity" class="border-dashed border-b-4 border-teal-600 text-right px-4 py-4">1</td>
                <td ref="line.total" class="border-dashed border-b-4 border-teal-600 text-red-800 text-right px-4 py-4 font-semibold">$170.00</td>
            </tr>
            <!-- <tr>
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
                <td ref="terms" class="bg-teal-600 px-4 py-3">
                    <span class="text-white">Balance Due</span>
                </td>
                <td ref="terms" class="bg-teal-600 px-4 py-3 text-right">
                    <span class="text-white">$3,060.00</span>
                </td>
            </tr> -->
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
            <section class="flex bg-teal-600 py-3 px-4 text-white">
                <p class="w-1/2">Balance Due</p>
                <p class="text-right w-1/2">$0.00</p>
            </section>
        </div>
    </div>
</div>

<div class="relative">
    <div class="absolute p-1 bg-teal-600 bottom-0 w-full"></div>
</div>
@endsection