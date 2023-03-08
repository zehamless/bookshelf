<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Bookshelf</title>
<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
<div class="container-fluid">
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Booklist</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="row">
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid"
                     aria-describedby="dataTable_info">
                    <table class="table table-striped" id="dataTable">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publisher</th>
                        </tr>
                        @foreach ($books as $b)
                            <tr>
                                <td>{{ $b->title }}</td>
                                <td>{{ $b->author }}</td>
                                <td>{{ $b->publisher }}</td>
                            </tr>
                        @endforeach
                        <tfoot>
                        <tr>
                            <td><strong>Title</strong></td>
                            <td><strong>Author</strong></td>
                            <td><strong>Publisher</strong></td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>