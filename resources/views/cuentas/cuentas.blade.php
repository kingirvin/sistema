@section('css')
<link rel="stylesheet" href="/libs/css/tabler.min.css">
<link rel="stylesheet" href="/libs/css/tabler-flags.min.css">
<link rel="stylesheet" href="/libs/tabler-payments.min.css">
<link rel="stylesheet" href="/libs/tabler-vendors.min.css">
<link rel="stylesheet" href="/libs/demo.min.css">

@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cuentas') }}
        </h2>
    </x-slot>
    <div class="col-12">
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                
                    <div class="card">
                        <div class="card-header"><div class="col-6 col-sm-4 col-md-2 py-3">
                            <a href="#" class="btn btn-primary w-100">
                            Nueva cuenta
                            </a>
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th>Title</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td >Paweł Kuna</td>
                                        <td class="text-muted" >
                                            UI Designer, Training
                                        </td>
                                        <td class="text-muted" ><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                                        <td class="text-muted" >
                                            User
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td >Jeffie Lewzey</td>
                                        <td class="text-muted" >
                                            Chemical Engineer, Support
                                        </td>
                                        <td class="text-muted" ><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                                        <td class="text-muted" >
                                            Admin
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td >Mallory Hulme</td>
                                        <td class="text-muted" >
                                            Geologist IV, Support
                                        </td>
                                        <td class="text-muted" ><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                                        <td class="text-muted" >
                                            User
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td >Dunn Slane</td>
                                        <td class="text-muted" >
                                            Research Nurse, Sales
                                        </td>
                                        <td class="text-muted" ><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                                        <td class="text-muted" >
                                            Owner
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td >Emmy Levet</td>
                                        <td class="text-muted" >
                                            VP Product Management, Accounting
                                        </td>
                                        <td class="text-muted" ><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                                        <td class="text-muted" >
                                            Admin
                                        </td>
                                        <td>
                                            <a href="#">Edit</a>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>   

                        </div>                 
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
