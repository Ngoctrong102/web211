<nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item" aria-current="page"><a href="#">Contact</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact #<?php echo $contact["id"]; ?></li>
    </ol>
</nav>


<div class="card">
    <div class="card-body">
        <div class="wrapper-title">
            <h4 class="title">Contact #<?php echo $contact["id"]; ?></h4>
        </div>
        <h5 class="title">Informations</h5>
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Title</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>    
                    <tr>
                        <td><?php echo $contact["id"]; ?></td>
                        <td><?php echo $contact["name"]; ?></td>
                        <td><?php echo $contact["email"]; ?></td>
                        <td><?php echo $contact["title"]; ?></td>
                        <td><?php echo $contact["message"]; ?></td>
                    </tr>
            </tbody>
        </table>
        
        <button class="buttonDetailContact"><a href="/admin/contact">Back</a></button>
              

    </div>
</div>