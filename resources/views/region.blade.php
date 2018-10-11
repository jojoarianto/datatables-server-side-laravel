<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Print Region Table</title>
        <meta charset="UTF-8">
        <meta name=description content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

        <style>
            body {margin: 20px}
        </style>
    </head>
    <body>
        <div class="container">
            <h2 style="text-align: center;">Table of Region</h2>
            <table class="table table-bordered table-condensed table-striped" id="table">
                <thead>
                    <tr>
                        <th class="text-center">Region Id/th>
                        <th class="text-center">Region Name</th>
                        <th class="text-center">Event Id</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($region as $row)
                    <tr>
                        <td>{{ $row->_id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->event_id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        <!-- script code -->
        <script>
          $(document).ready(function() {
            $('#table').DataTable();
        } );
        </script>
    </body>
</html>
