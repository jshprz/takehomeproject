@extends('employee_maintenance.master.index')
@section('content')
<div class="text-right">
    <br>
<a href="{{ url('/dologout') }}"><button class="btn btn-primary">Logout</button></a>
</div>
<br>
<br>
<br>
<center><h2>Employees Profile</h2></center>
<br>
<div class="row">
<div class="col-md-0">
<i class="fas fa-search fa-2x"></i>
</div>
<div class="col-md-3">
<input type="text" class="form-control" id="search"/>
</div>
<div class="col-md-8 text-right">
<button class="btn btn-primary" id="add_employee" data-toggle="modal" data-target="#add">Add Employee</button>
</div>
</div>
<br>

<div class="table-responsive">

<table class="table">
<thead>
<tr>
<th>#</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Middlename</th>
<th>Sex</th>
<th>Address</th>
<th>Contact Number</th>
<th>Salary</th>
<th>Position</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody id="table_body">
<tr>
</tr>
</tbody>
</table>
</div>

<div class="modal fade" id="add" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: auto;">    Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-6">
        <label for="add_firstname">Firstname</label>
        <input type="text" id="add_firstname" name="add_firstname" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="add_lastname">Lastname</label>
        <input type="text" id="add_lastname" name="add_lastname" class="form-control"/>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="add_middlename">Middlename</label>
        <input type="text" id="add_middlename" name="add_middlename" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="add_sex">Sex</label>
        <select id="add_sex" name="add_sex" class="form-control">
        <option value="male">male</option>
        <option value="female">female</option>
        </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="add_address">Address</label>
        <input type="text" id="add_address" name="add_address" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="add_contact">Contact Number</label>
        <input type="text" id="add_contact" name="add_contact" class="form-control"/>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="add_salary">Salary</label>
        <input type="text" id="add_salary" name="add_salary" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="add_position">Position</label>
        <input type="text" id="add_position" name="add_position" class="form-control"/>
        </div>
        </div>
        <label for="add_status">Status</label>
        <select id="add_status" name="add_status" class="form-control">
        <option value="active">active</option>
        <option value="leave">leave</option>
        <option value="inactive">inactive</option>
        </select>
      </div>
      <div class="modal-footer" style="margin: auto;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addEmployee">Save employee</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title" style="margin: auto;">    Edit Employee Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="hiddenValue"/>
        <div class="row">
        <div class="col-md-6">
        <label for="edit_firstname">Firstname</label>
        <input type="text" id="edit_firstname" name="edit_firstname" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="edit_lastname">Lastname</label>
        <input type="text" id="edit_lastname" name="edit_lastname" class="form-control"/>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="edit_middlename">Middlename</label>
        <input type="text" id="edit_middlename" name="edit_middlename" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="edit_sex">Sex</label>
        <select id="edit_sex" name="edit_sex" class="form-control">
        <option value="male">male</option>
        <option value="female">female</option>
        </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="edit_address">Address</label>
        <input type="text" id="edit_address" name="edit_address" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="edit_contact">Contact Number</label>
        <input type="text" id="edit_contact" name="edit_contact" class="form-control"/>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6">
        <label for="edit_salary">Salary</label>
        <input type="text" id="edit_salary" name="edit_salary" class="form-control"/>
        </div>
        <div class="col-md-6">
        <label for="edit_position">Position</label>
        <input type="text" id="edit_position" name="edit_position" class="form-control"/>
        </div>
        </div>
        <label for="edit_status">Status</label>
        <select id="edit_status" name="edit_status" class="form-control">
        <option value="active">active</option>
        <option value="leave">leave</option>
        <option value="inactive">inactive</option>
        </select>
      </div>
      <div class="modal-footer" style="margin: auto;">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-sm" id="preloader" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            
            <div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div>

        </div>
    </div>
</div>


<div class="modal fade" id="delete" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center">
      <div class="modal-header">
        <h5 class="modal-title"> Are you sure you want to delete this employee?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="deletehiddenValue"/>
        <div class="row">
        <div class="col-md-6 text-right">
        <button class="btn btn-danger" id="delete_yes">Yes</button>
        </div>
        <div class="col-md-6 text-left">
        <button class="btn btn-primary" id="delete_no">No</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('script')
<script>
$(document).ready(() => {
    getEmployees();
    var response;
    var trHTML = '';
    var newtrHTML = '';
    var errors = {
        'firstname':false,
        'lastname':false,
        'middlename':false,
        'sex':false,
        'address':false,
        'contact':false,
        'salary':false,
        'position':false,
        'status':false
    };

    function getEmployees(){
        $.ajax({
            url:'/api/get-employees',
            type:'GET',
            success:(response) => {
              
                for(let i = 0; i < response.length; i++)
                {
                    trHTML += '<tr><td>'+response[i].id+'</td><td>'+response[i].employee_first_name+'</td>'+'<td>'+response[i].employee_last_name+'</td>'+'<td>'+response[i].employee_middle_name+'</td>'+'<td>'+response[i].employee_sex+'</td>'+'<td>'+response[i].employee_full_address+'</td>'+'<td>'+response[i].employee_contact_number+'</td>'+'<td>'+response[i].employee_salary+'</td>'+'<td>'+response[i].employee_position+'</td>'+'<td>'+response[i].employee_status+'</td><td><button class="btn btn-danger" onclick="deleteEmployeeWithId('+ response[i].id +')" data-toggle="modal" data-target="#delete" value="'+ response[i].id +'"><i class="fas fa-trash-alt"></i></button> <button class="btn btn-warning" onclick="editEmployee('+ response[i].id +')" data-toggle="modal" data-target="#edit" value="'+response[i].id+','+response[i].employee_first_name+','+response[i].employee_last_name+','+response[i].employee_middle_name+','+response[i].employee_sex+','+response[i].employee_full_address+','+response[i].employee_contact_number+','+response[i].employee_salary+','+response[i].employee_position+','+response[i].employee_status+'"><i class="fas fa-edit"></i></button></td></tr>';
                    
                }
                $('#table_body').append(trHTML);
                
            }
        });

        
    }
    
    var firstname = $('#edit_firstname').val();
    var lastname = $('#edit_lastname').val();
    var middlename = $('#edit_middlename').val();
    var sex = $('#edit_sex').val();
    var address = $('#edit_address').val();
    var contact = $('#edit_contact').val();
    var salary = $('#edit_salary').val();
    var position = $('#edit_position').val();
    var status = $('#edit_status').val();

    var counter = 0;
    $('#saveChanges').click(() => {
        new Promise((resolve, reject) => {
                
        if(counter<1)
        {
            $('#saveChanges').append('<div class="spinner-border spinner-grow-sm" role="status" id="spinner"><span class="sr-only">Loading...</span></div>');
            counter++;
            
        
     
            setTimeout(() => {
                if(errors.firstname || errors.lastname || errors.middlename || errors.sex || errors.address || errors.contact || errors.salary || errors.position || errors.status)
                {
                    toastr.error('There is an error');
                    $('#spinner').remove();
                    counter = 0;
                    reject(1);
                }
                else
                {
                    counter = 0;
                    resolve(1);
                }
            },3000);
        }

        }).then(() => {
            $.ajax({
                url: '/api/update-employee',
                type: 'POST',
                data: {
                    id:$('#hiddenValue').val(),
                    firstname:$('#edit_firstname').val(),
                    lastname:$('#edit_lastname').val(),
                    middlename:$('#edit_middlename').val(),
                    sex:$('#edit_sex').val(),
                    address:$('#edit_address').val(),
                    contact:$('#edit_contact').val(),
                    salary:$('#edit_salary').val(),
                    position:$('#edit_position').val(),
                    status:$('#edit_status').val()
                },
                success: (response) => {
                    $('#spinner').remove();
                    if(response.success)
                    {
                        
                        toastr.success('Employee successfully updated');
                        $('#edit').modal('hide');
                        $('#table_body tr').remove();
                        trHTML = ' ';
                        getEmployees();
                    }
                    
                }
            });
        });
        });
    

        var deleteCounter = 0;
$('#delete_yes').click(() => {
    new Promise((resolve,reject) => {
        if(deleteCounter < 1)
        {
            $('#delete_yes').append('<div class="spinner-border spinner-grow-sm" role="status" id="spinner"><span class="sr-only">Loading...</span></div>');
            $('#delete_no').attr('disabled',true);
            deleteCounter++;
            resolve(1);
        }
    }).then(() => {
        $.ajax({
            url: '/api/delete-employee',
            type: 'POST',
            data: {id:$('#deletehiddenValue').val()},
            success:(response) => {
                console.log(response)
                if(response.success)
                {
                    toastr.success('Employee successfully deleted');
                    $('#delete').modal('hide');
                    $('#table_body tr').remove();
                    trHTML = ' ';
                    getEmployees();
                }
                deleteCounter = 0;
                $('#spinner').remove();
                $('#delete_no').attr('disabled',false);
            }
        });
    });
});




var addCounter = 0;
$('#addEmployee').click(() => {
    new Promise((resolve,reject) => {
        if(addCounter < 1)
        {
            $('#addEmployee').append('<div class="spinner-border spinner-grow-sm" role="status" id="spinner"><span class="sr-only">Loading...</span></div>');
            addCounter++;
            
        
     
            setTimeout(() => {
                if(errors.firstname || errors.lastname || errors.middlename || errors.sex || errors.address || errors.contact || errors.salary || errors.position || errors.status)
                {
                    toastr.error('There is an error');
                    $('#spinner').remove();
                    addCounter = 0;
                    reject(1);
                }
                else
                {
                    addCounter = 0;
                    resolve(1);
                }
            },3000);
        }
    }).then(() => {
        $.ajax({
            url: '/api/add-employee',
            type: 'POST',
            data: {
                    firstname:$('#add_firstname').val(),
                    lastname:$('#add_lastname').val(),
                    middlename:$('#add_middlename').val(),
                    sex:$('#add_sex').val(),
                    address:$('#add_address').val(),
                    contact:$('#add_contact').val(),
                    salary:$('#add_salary').val(),
                    position:$('#add_position').val(),
                    status:$('#add_status').val()
            },
            success: (response) => {
                $('#spinner').remove();
                if(response.success)
                {
                    $('#add').modal('hide');
                    toastr.success('Employee successfully added');
                    $('#table_body tr').remove();
                    trHTML = ' ';
                    getEmployees();

                }
                else
                {
                    toastr.error('There is an error');
                    (response.firstname == '')? $('#add_firstname').addClass('is-invalid') : $('#add_firstname').removeClass('is-invalid');
                    (response.lastname == '')? $('#add_lastname').addClass('is-invalid') : $('#add_lastname').removeClass('is-invalid');
                    (response.middlename == '')? $('#add_middlename').addClass('is-invalid') : $('#add_middlename').removeClass('is-invalid');
                    (response.sex == '')? $('#add_sex').addClass('is-invalid') : $('#add_sex').removeClass('is-invalid');
                    (response.address == '')? $('#add_address').addClass('is-invalid') : $('#add_address').removeClass('is-invalid');
                    (response.contact == '')? $('#add_contact').addClass('is-invalid') : $('#add_contact').removeClass('is-invalid');
                    (response.salary == '')? $('#add_salary').addClass('is-invalid') : $('#add_salary').removeClass('is-invalid');
                    (response.position == '')? $('#add_position').addClass('is-invalid') : $('#add_position').removeClass('is-invalid');
                    (response.status == '')? $('#add_status').addClass('is-invalid') : $('#add_status').removeClass('is-invalid');
                }
            }
        });
    });
});

$('#search').on('keyup',() => {
    $.ajax({
        url: '/api/search-employee',
        type: 'POST',
        data: {searchValue:$('#search').val()},
        success: (response) => {
            console.log(response)
            $('#table_body tr').remove();
            trHTML = ' ';
            for(let i = 0; i < response.length; i++)
                {
                    trHTML += '<tr><td>'+response[i].id+'</td><td>'+response[i].employee_first_name+'</td>'+'<td>'+response[i].employee_last_name+'</td>'+'<td>'+response[i].employee_middle_name+'</td>'+'<td>'+response[i].employee_sex+'</td>'+'<td>'+response[i].employee_full_address+'</td>'+'<td>'+response[i].employee_contact_number+'</td>'+'<td>'+response[i].employee_salary+'</td>'+'<td>'+response[i].employee_position+'</td>'+'<td>'+response[i].employee_status+'</td><td><button class="btn btn-danger" onclick="deleteEmployeeWithId('+ response[i].id +')" data-toggle="modal" data-target="#delete" value="'+ response[i].id +'"><i class="fas fa-trash-alt"></i></button> <button class="btn btn-warning" onclick="editEmployee('+ response[i].id +')" data-toggle="modal" data-target="#edit" value="'+response[i].id+','+response[i].employee_first_name+','+response[i].employee_last_name+','+response[i].employee_middle_name+','+response[i].employee_sex+','+response[i].employee_full_address+','+response[i].employee_contact_number+','+response[i].employee_salary+','+response[i].employee_position+','+response[i].employee_status+'"><i class="fas fa-edit"></i></button></td></tr>';
                    
                }
                $('#table_body').append(trHTML);
        }
    })
});


    $('#add_firstname').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var firstname = $('#add_firstname').val();

        if(special_char.test(firstname) || number.test(firstname) || firstname == '')
        {
            $('#add_firstname').addClass('is-invalid');
            errors.firstname = true;
        }
        else
        {
            $('#add_firstname').removeClass('is-invalid');
            errors.firstname = false;
        }
    });

    $('#add_lastname').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var lastname = $('#add_lastname').val();
    
        if(special_char.test(lastname) || number.test(lastname) || lastname == '')
        {
            $('#add_lastname').addClass('is-invalid');
            errors.lastname = true;
        }
        else
        {
            $('#add_lastname').removeClass('is-invalid');
            errors.lastname = false;
        }
    });

    $('#add_middlename').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var middlename = $('#add_middlename').val();
    
        if(special_char.test(middlename) || number.test(middlename) || middlename == '')
        {
            $('#add_middlename').addClass('is-invalid');
            errors.middlename = true;
        }
        else
        {
            $('#add_middlename').removeClass('is-invalid');
            errors.middlename = false;
        }
    });

    $('#add_sex').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var sex = $('#add_sex').val();

        if(special_char.test(sex) || number.test(sex) || sex == '')
        {
            $('#add_sex').addClass('is-invalid');
            errors.sex = true;
        }
        else
        {
            $('#add_sex').removeClass('is-invalid');
            errors.sex = false;
        }
    });
    

    $('#add_address').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var address = $('#add_address').val();

        if(address == '')
        {
            $('#add_address').addClass('is-invalid');
            errors.address = true;
        }
        else
        {
            $('#add_address').removeClass('is-invalid');
            errors.address = false;
        }
    });

    $('#add_contact').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var character = /[ abcdefghijklmnopqrstuvwxyz\[\]{};':"\\|,.<>\/?]/;

        var contact = $('#add_contact').val();

        if(special_char.test(contact) || character.test(contact) || contact == '')
        {
            $('#add_contact').addClass('is-invalid');
            errors.contact = true;
        }
        else
        {
            $('#add_contact').removeClass('is-invalid');
            errors.contact = false;
        }
    });

    $('#add_salary').on('keyup', (e) => {
        var special_char = /[ !@#%^&*()_+\-=\[\]{};':"\\|<>\/?]/;
        var character = /[ abcdefghijklmnopqrstuvwxyz\[\]{};':"\\|<>\/?]/;

        var salary = $('#add_salary').val();

        if(special_char.test(salary) || character.test(salary) || salary == '')
        {
            $('#add_salary').addClass('is-invalid');
            errors.salary = true;
        }
        else
        {
            $('#add_salary').removeClass('is-invalid');
            errors.salary = false;
        }
    });

    $('#add_position').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var position = $('#add_position').val();

        if(special_char.test(position) || number.test(position) || position == '')
        {
            $('#add_position').addClass('is-invalid');
            errors.position = true;
        }
        else
        {
            $('#add_position').removeClass('is-invalid');
            errors.position = false;
        }
    });

    $('#add_status').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var status = $('#add_status').val();

        if(special_char.test(status) || number.test(status) || status == '')
        {
            $('#add_status').addClass('is-invalid');
            errors.status = true;
        }
        else
        {
            $('#add_status').removeClass('is-invalid');
            errors.status = false;
        }
    });


    $('#edit_firstname').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var firstname = $('#edit_firstname').val();

        if(special_char.test(firstname) || number.test(firstname) || firstname == '')
        {
            $('#edit_firstname').addClass('is-invalid');
            errors.firstname = true;
        }
        else
        {
            $('#edit_firstname').removeClass('is-invalid');
            errors.firstname = false;
        }
    });

    $('#edit_lastname').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var lastname = $('#edit_lastname').val();
    
        if(special_char.test(lastname) || number.test(lastname) || lastname == '')
        {
            $('#edit_lastname').addClass('is-invalid');
            errors.lastname = true;
        }
        else
        {
            $('#edit_lastname').removeClass('is-invalid');
            errors.lastname = false;
        }
    });

    $('#edit_middlename').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var middlename = $('#edit_middlename').val();
    
        if(special_char.test(middlename) || number.test(middlename) || middlename == '')
        {
            $('#edit_middlename').addClass('is-invalid');
            errors.middlename = true;
        }
        else
        {
            $('#edit_middlename').removeClass('is-invalid');
            errors.middlename = false;
        }
    });

    $('#edit_sex').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var sex = $('#edit_sex').val();

        if(special_char.test(sex) || number.test(sex) || sex == '')
        {
            $('#edit_sex').addClass('is-invalid');
            errors.sex = true;
        }
        else
        {
            $('#edit_sex').removeClass('is-invalid');
            errors.sex = false;
        }
    });
    

    $('#edit_address').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var address = $('#edit_address').val();

        if(address == '')
        {
            $('#edit_address').addClass('is-invalid');
            errors.address = true;
        }
        else
        {
            $('#edit_address').removeClass('is-invalid');
            errors.address = false;
        }
    });

    $('#edit_contact').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var character = /[ abcdefghijklmnopqrstuvwxyz\[\]{};':"\\|,.<>\/?]/;

        var contact = $('#edit_contact').val();

        if(special_char.test(contact) || character.test(contact) || contact == '')
        {
            $('#edit_contact').addClass('is-invalid');
            errors.contact = true;
        }
        else
        {
            $('#edit_contact').removeClass('is-invalid');
            errors.contact = false;
        }
    });

    $('#edit_salary').on('keyup', (e) => {
        var special_char = /[ !@#%^&*()_+\-=\[\]{};':"\\|<>\/?]/;
        var character = /[ abcdefghijklmnopqrstuvwxyz\[\]{};':"\\|<>\/?]/;

        var salary = $('#edit_salary').val();

        if(special_char.test(salary) || character.test(salary) || salary == '')
        {
            $('#edit_salary').addClass('is-invalid');
            errors.salary = true;
        }
        else
        {
            $('#edit_salary').removeClass('is-invalid');
            errors.salary = false;
        }
    });

    $('#edit_position').on('keyup', (e) => {
        var special_char = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[1234567890\[\]{};':"\\|,.<>\/?]/;

        var position = $('#edit_position').val();

        if(special_char.test(position) || number.test(position) || position == '')
        {
            $('#edit_position').addClass('is-invalid');
            errors.position = true;
        }
        else
        {
            $('#edit_position').removeClass('is-invalid');
            errors.position = false;
        }
    });

    $('#edit_status').on('keyup', (e) => {
        var special_char = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var number = /[ 1234567890\[\]{};':"\\|,.<>\/?]/;

        var status = $('#edit_status').val();

        if(special_char.test(status) || number.test(status) || status == '')
        {
            $('#edit_status').addClass('is-invalid');
            errors.status = true;
        }
        else
        {
            $('#edit_status').removeClass('is-invalid');
            errors.status = false;
        }
    });



});
$(document).on('click','#edit_employee',() => {
    console.log($('#edit_employee').val())
    $('#edit_firstname').val($('#edit_employee').val().split(',')[1]);
    $('#edit_lastname').val($('#edit_employee').val().split(',')[2]);
    $('#edit_middlename').val($('#edit_employee').val().split(',')[3]);
    $('#edit_sex').val($('#edit_employee').val().split(',')[4]);
    $('#edit_address').val($('#edit_employee').val().split(',')[5]);
    $('#edit_contact').val($('#edit_employee').val().split(',')[6]);
    $('#edit_salary').val($('#edit_employee').val().split(',')[7]);
    $('#edit_position').val($('#edit_employee').val().split(',')[8]);
    $('#edit_status').append('<option value="'+$('#edit_employee').val().split(',')[9]+'">'+$('#edit_employee').val().split(',')[9]+'</option>');
    $('#hiddenValue').val($('#edit_employee').val().split(',')[0]);
});


function editEmployee(id)
{
    $('#hiddenValue').val(id);
    $.ajax({
        url: '/api/edit-employee',
        type: 'POST',
        data: {id:id},
        success: (response) => {
            $('#edit_firstname').val(response.employee_first_name);
            $('#edit_lastname').val(response.employee_last_name);
            $('#edit_middlename').val(response.employee_middle_name);
            $('#edit_sex').val(response.employee_sex);
            $('#edit_address').val(response.employee_full_address);
            $('#edit_contact').val(response.employee_contact_number);
            $('#edit_salary').val(response.employee_salary);
            $('#edit_position').val(response.employee_position);
            $('#edit_status').val(response.employee_status);
        }
    });
}

function deleteEmployeeWithId(id)
{
    console.log(id);
    $('#deletehiddenValue').val(id);
}
</script>
@endpush