@extends('layouts.app')
@section('content')

  <div class='container mt-5 mb-5'>
    <form>
        <div class='row mt-5'>
            <div class='col-sm-8 offset-2'>
                <div class='card'>
                    <div class='card-header d-flex align-items-center'>
                        <i class='material-icons mr-2'>event</i> Details
                    </div>

                    <div class='card-body '>
                        <div class='form-group'>
                            <label for='event_name '>First Name</label>
                            <input class='form-control' id='event_name' type='text'>
                            <small class='form-text text-muted' id='emailHelp'>
                6 characters minimum.
                <div class='form-group'></div>
              </small>
                        </div>

                        <div class='form-group'>
                            <label for='event_name'>Last Name</label>
                            <input class='form-control' id='event_name' type='text'>
                            <small class='form-text text-muted' id='emailHelp'>
                6 characters minimum.
              </small>
                        </div>
                        <div class='form-row'>
                            <div class='col-sm-6'>
                                <div class='form-group'>
                                    <label for='event_category'>Category</label>
                                    <select class='form-control' id='event_category' type='text'>
                                        <option value='long'>Long Travel</option>
                                        <option value='short'>Short ride</option>
                                        <option value='daily'>Daily travel </option>

                                    </select>
                                </div>
                            </div>

                            <div class='col-sm-6'>
                                <div class='form-group'>
                                    <label for='event_tags'>Time Estimated</label>
                                    <select class='form-control' id='event_category' type='text'>
                                        <option value='short'> Less than 3 Hours </option>
                                        <option value='long'> Longer than 3 Hours</option>
                                        <option value='daily'>Day travel </option>
                                    </select>
                                    <smal class='form-text text-muted' id='emailHelp'>
                                        Separated by comma.
                                    </smal>
                                </div>
                            </div>
                        </div>

                        <div class='form-row'>
                            <div class='col-sm-6'>
                                <div class='form-group'>
                                    <label for='meeting-time'>Starts at</label>
                                    <input type="datetime-local" id="meeting-time" name="meeting-time" value="2018-06-12T19:30" min="2018-06-07T00:00:00" max="2000-06-14T00:00">

                                </div>
                            </div>
                            <div class='col-sm-6'>
                                <div class='form-group'>
                                    <label for='end-time'>Ends At</label>
                                    <input type="datetime-local" id="meeting-time" name="meeting-time" value="2018-06-12T19:30" min="2018-06-07T00:00:00" max="2000-06-14T00:00">

                                </div>
                            </div>
                            <div class='form-group col-md-10 offset-md-1'>
                                <label>Map</label>
                                <div id='venue_map'></div>
                            </div>
                            <input accept='.jpg, .jpeg, .png' class='form-control' id='venue_image' type='file'>
                        </div>
                        <div class='form-row' hidden>
                            <div class='form-group col-md-6'>
                                <label class='col-form-label' for='venue_lat'>Latitude</label>
                                <input class='form-control' id='venue_lat' name='lat' type='text'>
                            </div>
                            <div class='form-group col-md-6'>
                                <label class='col-form-label' for='venue_lng'>Longitude</label>
                                <input class='form-control' id='venue_lng' name='lng' type='text'>
                            </div>
                        </div>

                    </div>
                    <div class='form-group'>
                        <button class='btn btn-light d-flex align-items-center'>
                            <i class='material-icons mr-2'>add</i> Add another date
                        </button>
                    </div>
                    <div class='form-group'>
                        <label for='event_description'>Description</label>
                        <textarea class='form-control' id='event_description' placeholder='Write something about your event' rows='4'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='car_image'>Image</label>
                        <div id='file_target'>
                            <img src='https://images.pexels.com/photos/170811/pexels-photo-170811.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260'>
                        </div>
                        <input accept='.jpg, .jpeg, .png' class='form-control' id='event_image' type='file'>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    
  
  

@endsection
