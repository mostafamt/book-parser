@extends('layouts.layout')

@section('content')
    <form action="">
        <div class="row justify-content-evenly">
            <div class="col-md-3 border rounded p-4">
                <h5>Parse Settings</h5>
                <p>Mode</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Fast
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Accurate
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Premium Mode
                    </label>
                </div>

            </div>
            <div class="col-md-8">
                <div class="border rounded p-2 mb-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">
                            <i class="bi bi-link-45deg"></i>
                            <span>Input Url

                            </span>
                        </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="my-4 rounded-md  bg-gray-100 p-1 text-center">
                    OR
                </div>
                <div class="border rounded p-2 mb-2">
                    <div>
                        <label for="formFileMultiple" class="form-label">
                            <i class="bi bi-cloud-upload"></i>
                            <span>File Upload</span>
                        </label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-4 text-center">
            <button type="submit" class="btn btn-secondary">Parse</button>
        </div>

    </form>
@endsection
