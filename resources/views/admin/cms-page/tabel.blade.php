<table id="cmsPages" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Url</th>
            <th>Created On</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cmsPageData as $data)
            <tr>
                <td>{{ @$data->id }}</td>
                <td>{{ @$data->title }}</td>
                <td>{{ @$data->url }}</td>
                <td>{{ @$data->created_at }}</td>
                <td>
                    @if ($data->status == 1)
                        <a href="javascript:void(0)" class="cmsPageStatus"
                           id="page-{{ $data->id }}" page_id="{{ $data->id }}">
                           <i class="fas fa-toggle-on" status="Active"></i>
                        </a>
                    @else
                        <a href="javascript:void(0)" class="cmsPageStatus"
                           id="page-{{ $data->id }}" page_id="{{ $data->id }}">
                           <i class="fas fa-toggle-off" style="color:grey;" status="Inactive"></i>
                        </a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
