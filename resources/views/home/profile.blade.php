<x-app-layout :pagetitle="$pagetitle">
    <div class="row">
        <div class="col-xl-12">
            @if (isset($error))
                {{ $error }}
            @endif
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#my-users" data-bs-toggle="tab" class="nav-link active show">Users</a>
                                </li>
                                <li class="nav-item"><a href="#broker-list" data-bs-toggle="tab" class="nav-link">Broker List</a>
                                </li>
                                <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="my-users" class="tab-pane fade active show">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-sm mb-0 table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th class=" pe-3">
                                                                        <div class="form-check custom-checkbox mx-2">
                                                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                                                            <label class="form-check-label" for="checkAll"></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Password</th>
                                                                    <th>Role</th>
                                                                    <th>Joined</th>
                                                                    <th>
                                                                        <a data-bs-toggle="modal" data-bs-target="#modalInputs" href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Add New<i class="las la-plus ms-3 scale5"></i></a>
                                                                        <!-- Modal -->
                                                                        <div class="modal fade" id="modalInputs">
                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <form>
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">BreakOut Strategy Inputs</h5>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <h5>Inputs</h5>
                                                                                            <div class="basic-form">
                                                                                                <form action="{{ route('api.broker.add') }}" method="POST">
                                                                                                    @csrf
                                                                                                    <div class="mb-3">
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-text">First and last name</span>
                                                                                                            <input type="text" class="form-control" placeholder="First name">
                                                                                                            <input type="text" class="form-control" placeholder="Last name">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label">Email</label>
                                                                                                        <input type="email" class="form-control" placeholder="Email">
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label">Password</label>
                                                                                                        <input type="password" class="form-control" placeholder="Password">
                                                                                                    </div>

                                                                                                    <div class="mb-3 ">
                                                                                                        <label class="form-label">Role</label>
                                                                                                        <select id="inputState" class="default-select form-control wide">
                                                                                                            <option selected>Select...</option>
                                                                                                            <option>Admin</option>
                                                                                                            <option>Owner</option>
                                                                                                            <option>User</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </th>
                                                                    <th></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody id="customers">
                                                                <tr class="btn-reveal-trigger">
                                                                    <td class="py-2">
                                                                        <div class="form-check custom-checkbox mx-2">
                                                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                                                            <label class="form-check-label" for="checkbox1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <a href="#">
                                                                            <div class="media d-flex align-items-center">
                                                                                <div class="avatar avatar-xl me-2">
                                                                                    <div class=""><img class="rounded-circle img-fluid" src="{{ asset('images/avatar/5.png') }}" width="30" alt="" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 fs--1">Ricky Antony</h5>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="py-2"><a href="mailto:info@example.com">info@example.com</a></td>
                                                                    <td class="py-2">568462185</td>
                                                                    <td class="py-2 ps-5">Admin</td>
                                                                    <td class="py-2">30/03/2018</td>
                                                                    <td class="py-2 text-end">
                                                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                                        </g>
                                                                                    </svg></span></button>
                                                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                                                <div class="py-2"><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editUser">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                        <div class="modal fade" id="editUser">
                                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                <form>
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title">BreakOut Strategy Inputs</h5>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <h5>Inputs</h5>
                                                                                            <div class="basic-form">
                                                                                                <form>
                                                                                                    <div class="mb-3">
                                                                                                        <div class="input-group">
                                                                                                            <span class="input-group-text">First and last name</span>
                                                                                                            <input type="text" class="form-control" placeholder="First name">
                                                                                                            <input type="text" class="form-control" placeholder="Last name">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label">Email</label>
                                                                                                        <input type="email" class="form-control" placeholder="Email">
                                                                                                    </div>
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label">Password</label>
                                                                                                        <input type="password" class="form-control" placeholder="Password">
                                                                                                    </div>

                                                                                                    <div class="mb-3 ">
                                                                                                        <label class="form-label">Role</label>
                                                                                                        <select id="inputState" class="default-select form-control wide">
                                                                                                            <option selected>Select...</option>
                                                                                                            <option>Admin</option>
                                                                                                            <option>Owner</option>
                                                                                                            <option>User</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr class="btn-reveal-trigger">
                                                                    <td class="py-2">
                                                                        <div class="form-check custom-checkbox mx-2">
                                                                            <input type="checkbox" class="form-check-input" id="checkbox2">
                                                                            <label class="form-check-label" for="checkbox2"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-3">
                                                                        <a href="#">
                                                                            <div class="media d-flex align-items-center">
                                                                                <div class="avatar avatar-xl me-2">
                                                                                    <img class="rounded-circle img-fluid" src="{{ asset('images/avatar/1.png') }}" alt="" width="30" />
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h5 class="mb-0 fs--1">Emma Watson</h5>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </td>
                                                                    <td class="py-2"><a href="mailto:emma@example.com">info@example.com</a>
                                                                    </td>
                                                                    <td class="py-2"> <a href="tel:2122288403">(212) 228-8403</a></td>
                                                                    <td class="py-2 ps-5">2289 5th Avenue, New York
                                                                    </td>
                                                                    <td class="py-2">11/07/2017</td>
                                                                    <td class="py-2 text-end">
                                                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                                        </g>
                                                                                    </svg></span></button>
                                                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                                                <div class="py-2"><a class="dropdown-item" href="#!">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="broker-list" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body" >
                                                    <div class="table-responsive">
                                                        <table class="table table-sm mb-0 table-striped" style="min-height: 30vh;">
                                                            <thead>
                                                                <tr>
                                                                    <th class=" pe-3">
                                                                        <div class="form-check custom-checkbox mx-2">
                                                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                                                            <label class="form-check-label" for="checkAll"></label>
                                                                        </div>
                                                                    </th>
                                                                    <th>Name</th>
                                                                    <th>Account ID</th>
                                                                    <th>Joined</th>
                                                                    <th style="width: 5px;">
                                                                        <a data-bs-toggle="modal" data-bs-target="#modalBrokerInputs" href="javascript:void(0);" class="btn btn-primary d-sm-inline-block d-none">Add New<i class="las la-plus ms-3 scale5"></i></a>
                                                                        <!-- Modal -->
                                                                        <div class="row">

                                                                            <div class="modal fade" id="modalBrokerInputs">
                                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                    <form>
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title">BreakOut Strategy Inputs</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <span class="mb-3"><i class="las la-info ms-3 scale5"></i>Type the name in the Expert section of the Metatrader terminal into the broker name field. A broker is used for each user.</span>
                                                                                                <br>
                                                                                                <div class="basic-form mt-3">
                                                                                                    <form action="{{ route('api.broker.add') }}" method="POST">
                                                                                                        <div class="mb-3">
                                                                                                            <div class="input-group">
                                                                                                                <span class="input-group-text">Broker Name and account ID</span>
                                                                                                                <input type="text" class="form-control" placeholder="Broker Name" id="broker_name">
                                                                                                                <input type="text" class="form-control" placeholder="Account ID" id="account_id">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="customers">
                                                                @foreach($data['brokers'] as $broker)
                                                                <tr class="btn-reveal-trigger">
                                                                    <td class="py-2">
                                                                        <div class="form-check custom-checkbox mx-2">
                                                                            <input type="checkbox" class="form-check-input" id="checkbox1">
                                                                            <label class="form-check-label" for="checkbox1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-2">{{ $broker['name'] }}</td>
                                                                    <td class="py-2">{{ $broker['id'] }}</td> {{-- 200-1851 --}}
                                                                    <td class="py-2">{{ $broker['created_at']->format('d/m/Y') }}</td>
                                                                    <td class="py-2 text-end">
                                                                        <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-bs-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                                                            <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                                            <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                                        </g>
                                                                                    </svg></span></button>
                                                                            <div class="dropdown-menu dropdown-menu-end border py-0">
                                                                                <div class="py-2"><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editBroker">Edit</a><a class="dropdown-item text-danger" href="#!">Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="modal fade" id="editBroker">
                                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                                    <form>
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h5 class="modal-title">BreakOut Strategy Inputs</h5>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <span class="mb-3"><i class="las la-info ms-3 scale5"></i>Type the name in the Expert section of the Metatrader terminal into the broker name field. A broker is used for each user.</span>
                                                                                                <br>
                                                                                                <div class="basic-form mt-3">
                                                                                                    <form>
                                                                                                        <div class="mb-3">
                                                                                                            <div class="input-group">
                                                                                                                <span class="input-group-text">Broker Name and account ID</span>
                                                                                                                <input type="text" class="form-control" placeholder="Broker Name" id="broker_name">
                                                                                                                <input type="text" class="form-control" placeholder="Account ID" id="account_id">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-settings" class="tab-pane fade">
                                    <div class="pt-3">
                                        <div class="settings-form">
                                            <h4 class="text-primary">Account Setting</h4>
                                            <form>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Telegram Group ID</label>
                                                        <input type="text" placeholder="Telegram Group ID" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label">Telegram Bot ID</label>
                                                        <input type="text" placeholder="Telegram Bot ID" class="form-control">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary" type="submit">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>