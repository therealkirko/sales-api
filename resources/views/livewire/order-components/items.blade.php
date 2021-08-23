<div class="card card-bordered">
    <table class="table table-iv-tnx">
        <thead class="thead-light">
            <tr>
                <th class="tb-col-type"><span class="overline-title">Name</span></th>
                <th class="tb-col-quantity"><span class="overline-title">Quantity</span></th>
                <th class="tb-col-description"><span class="overline-title">Description</span></th>
                <th class="tb-col-amount tb-col-end"><span class="overline-title">Amount</span></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td class="tb-col-type"><span class="sub-text">{{  $item->name  }}}}</span></td>
                    <td class="tb-col-quantity"><span class="sub-text">{{ $item->quantity }}</span></td>
                    <td class="tb-col-description"><span class="sub-text">{{ $item->description }}</span></td>
                    <td class="tb-col-amount tb-col-end"><span class="lead-text">Kes {{ $item->amount }}</span></td>
                </tr>
            @empty
                <tr>
                    <td class="tb-col-type"><span class="">No Items added Yet.</span></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
