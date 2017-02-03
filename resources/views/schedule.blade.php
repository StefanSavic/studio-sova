<table class="tableView">
    <thead>
        <tr>
            <th>vreme</th>
            <th>ponedeljak</th>
            <th>utorak</th>
            <th>sreda</th>
            <th>četvrtak</th>
            <th>petak</th>
            <th>subota</th>
            <th>nedelja</th>
        </tr>
    </thead>
    @foreach($schedules as $reservationTime)
    <tr>
        <td>
          {{$reservationTime->reservation_time}}
        </td>
        <td>
            @if ($reservationTime->pon)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->uto)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->sreda)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->cet)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->pet)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->sub)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
        <td>
            @if ($reservationTime->ned)
            <span class="zauzeto">zauzeto</span>
            @else
            <span>slobodno</span>
            @endif 
        </td>
    </tr>
    @endforeach
</table>