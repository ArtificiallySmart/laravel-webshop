@extends('layouts.adminLayout')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">{{$user->id}} {{ $user->first_name}} {{ $user->last_name }} </h2>
    </div>
    <form id="user-details-form" method="POST" action="/admin/users/{{ $user->id }}">
        @method('PUT')
        <div class="row">
            <div class="col-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="firstname" placeholder="First name" name="first_name" value="{{ $user->first_name }}" disabled>
                    <label for="firstname">First name</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="lastname" placeholder="Last name" name="last_name" value="{{ $user->last_name }}" disabled>
                    <label for="lastname">Last name</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control disable-input" id="email" placeholder="E-mail" name="email" value="{{ $user->email }}" disabled>
                    <label for="email">E-mail</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="street" placeholder="Street" name="street" value="{{ $user->address->street ?? '' }}" disabled>
                    <label for="street">Street</label>
                </div>
            </div>
            <div class="col-2">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="house_number" placeholder="House number" name="house_number" value="{{ $user->address->house_number ?? '' }}" disabled>
                    <label for="house_number">House number</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="zipcode" placeholder="Zipcode" name="zipcode" value="{{ $user->address->zipcode ?? '' }}" disabled>
                    <label for="zipcode">Zipcode</label>
                </div>
            </div>
            <div class="col-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="city" placeholder="City" name="city" value="{{ $user->address->city ?? '' }}" disabled>
                    <label for="city">City</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="country" placeholder="County" name="phone_number" value="{{ $user->address->country ?? '' }}" disabled>
                    <label for="phone_number">County</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control disable-input" id="phone_number" placeholder="Phone number" value="{{ $user->phoneNumber->phone_number ?? '' }}" disabled>
                    <label for="phone_number">Phone number</label>
                </div>
            </div>
        </div>
        @csrf
    </form>
    <form action="/admin/users/{{$user->id}}" method="POST" class="d-none" id="delete-user-form">
        @method('DELETE')
        @csrf
    </form>
    <button class="btn btn-secondary" id="edit-button">Edit customer details</button>
    <button class="btn btn-primary d-none" id="save-button">Save</button>
    <button class="btn btn-primary d-none" id="cancel-button">cancel</button>
    <button class="btn btn-danger" id="delete-button">Delete customer</button>
</main>

<script>
    let editButton = document.getElementById('edit-button');
    let cancelButton = document.getElementById('cancel-button');
    let saveButton = document.getElementById('save-button');
    let deleteButton = document.getElementById('delete-button');

    let userDetailsForm = document.getElementById('user-details-form');
    let deleteUserForm = document.getElementById('delete-user-form');

    let disableInputButton = document.querySelectorAll('.disable-input-button');
    let disabledFields = document.querySelectorAll('.disable-input');

    editButton.addEventListener('click', enableInputs);
    cancelButton.addEventListener('click', disableInputs);
    saveButton.addEventListener('click', saveChanges);
    deleteButton.addEventListener('click', deleteUser);


    function enableInputs() {
        for (let input of disabledFields) {
            input.disabled = false;
        }
        editButton.classList.add('d-none');
        cancelButton.classList.remove('d-none');
        saveButton.classList.remove('d-none');
    }

    function disableInputs() {
        location.reload();
    }

    function saveChanges() {
        userDetailsForm.submit();
    }

    function deleteUser() {
        deleteUserForm.submit();
    }
</script>
@endsection