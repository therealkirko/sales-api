<x-order-layout>
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a href="#" class="back-to"><em class="icon ni ni-arrow-left"></em><span>Visit our website</span></a></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Hey Dan</h2>
                        </div>
                        <div class="nk-block-head-content float-right">
                            <ul class="nk-block-tools gx-3">
                                <li class="order-md-last">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-primary" data-toggle="dropdown"><span>Placed Order</span><em class="icon ni ni-chevron-down"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-auto mt-1">
                                            <ul class="link-list-plain">
                                                <li><a href="#" class="btn btn-danger">Cancel</a></li>
                                                <li><a href="#" class="btn btn-success">Delivered</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-reload"></em></a></li>
                            </ul>
                        </div> <br>
                        <h6><span class="badge badge-outline badge-primary">Order ID: c4RVLw</span></h6>
                    </div>
                </div> <br>
                <div class="nk-block invest-block">
                    <form action="#" class="invest-form">
                        <div class="row g-gs">
                            <div class="col-lg-7">
                                <div class="invest-field form-group">
                                    <a href="#" class="invest-cc-chosen">
                                        @livewire('order-components.business')
                                    </a>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="float-right">
                                        <a href="#" class="btn btn-primary"> <em class="icon ni ni-cards"></em>  Make Payment</a>
                                    </div>
                                    <div class="card-inner">
                                        <h5>Items List</h5>
                                        <p>Please confrim the items before checking out.</p>
                                    </div>
                                    @livewire('order-components.items')
                                </div> <br>
                                <div class="invest-field form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms and &amp; conditions.</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 offset-xl-1">
                                <div class="card card-bordered ml-lg-4 ml-xl-0">
                                    <div class="invest-field form-group">
                                        <div class="card-inner">
                                            <h5>Let’s Finish Registration</h5>
                                            <p>Only few minutes required to complete your registration and set up your account.</p>
                                        </div>
                                        <div class="card card-bordered ml-lg-4 ml-xl-0">
                                            @livewire('order-components.process')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-order-layout>
