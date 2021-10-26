<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >

<table id="example" class="display" style="width:100%">
    <thead>
    <tr>
        <td>option </td>
        <td>CustomerID </td>
        <td>Age </td>
        <td>Education_Level </td>
        <td>Gender </td>
        <td>Home_Ownership </td>
        <td>Internet_Connection </td>
        <td>Marital_Status </td>
        <td>Movie_Selector </td>
        <td>Num_Bathrooms </td>
        <td>Num_Bedrooms </td>
        <td>Num_Cars </td>
        <td>Num_Children </td>
        <td>Num_TVs </td>
        <td>PPV_Freq </td>
        <td>Buying_Freq </td>
        <td>Format </td>
        <td>Home_Ownership </td>
        <td>Theater_Freq </td>
        <td>TV_Movie_Freq </td>
        <td>TV_Signal</td>
        <td>TV_Signal</td>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td><button class="btn btn-warning" style="margin: 10px"><a href="/Clustering/{{ $customer->CustomerID }}" style="text-decoration: none;color:white">Clustering</a> </button></td>
            <td>{{ $customer->CustomerID }}</td>
            <td>{{ $customer->Age }}</td>
            <td>{{ $customer->Education_Level }}</td>
            <td>{{ $customer->Gender }}</td>
            <td>{{ $customer->Home_Ownership }}</td>
            <td>{{ $customer->Internet_Connection }}</td>
            <td>{{ $customer->Marital_Status }}</td>
            <td>{{ $customer->Movie_Selector }}</td>
            <td>{{ $customer->Num_Bathrooms }}</td>
            <td>{{ $customer->Num_Bedrooms }}</td>
            <td>{{ $customer->Num_Cars }}</td>
            <td>{{ $customer->Num_Children }}</td>
            <td>{{ $customer->Num_TVs }}</td>
            <td>{{ $customer->PPV_Freq }}</td>
            <td>{{ $customer->Buying_Freq }}</td>
            <td>{{ $customer->Format }}</td>
            <td>{{ $customer->Home_Ownership }}</td>
            <td>{{ $customer->Theater_Freq }}</td>
            <td>{{ $customer->TV_Movie_Freq }}</td>
            <td>{{ $customer->TV_Signal }}</td>

        </tr>





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
                'copy', 'csv', 'excel', 'pdf', 'print'  ,
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
