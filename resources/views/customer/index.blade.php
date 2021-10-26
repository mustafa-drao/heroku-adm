<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
<link href="/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet"/>
<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <th>CustomerID</th>
        <th>Age</th>
        <th>Education Level</th>
        <th>Gender</th>
        <th>Home Ownership</th>
        <th>view</th>
    </tr>
    </thead>
    <tbody >
@foreach($search as $customer)
    <tr>
        <td>{{ $customer->CustomerID }}</td>
        <td>{{ $customer->Age }}</td>
        <td>{{ $customer->Education_Level }}</td>
        <td>{{ $customer->Gender }}</td>
        <td>{{ $customer->Home_Ownership }}</td>
        <td><button class="btn btn-danger" style="margin: 10px"><a href="/customer/{{$customer->CustomerID}}" style="text-decoration: none;color:white">View</a> </button></td>
    </tr>
@endforeach




<button class="btn btn-success" style="margin: 10px"><a href="/new-customer" style="text-decoration: none;color:white">New Customer</a> </button>



</tbody>

</table>
<script>
    import Button from "../../js/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'print'  ,
                {
                    extend: 'colvis',
                    columns: ':not(:first-child)'
                }
            ],

            columnDefs: [
                {
                    targets: 1,
                    className: 'noVis'
                }
            ],
        } );
    } );
</script>
