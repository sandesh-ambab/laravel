<table class="table table-bordered table-striped">
        <thead>
        <tr class="bg-secondary">
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
            @foreach($crud as $cruds)
            <tr>
                <td>{{$cruds->id}}</td>  
                <td>{{$cruds->name}}</td>  
                <td>{{$cruds->designation}}</td> 
                <td> 
                    <a href="edit/{{$cruds->id}}" class="btn btn-success">Edit</a> 
                    <a href="delete/{{$cruds->id}}" class="btn btn-danger">Delete</a> 
                </td> 
            </tr>
            @endforeach 
        </tbody>
    </table>
    <span class="d-flex justify-content-center" >{{$crud->links()}}</span>
    <style>
        .w-5 {
            display: none;
        }
    </style>