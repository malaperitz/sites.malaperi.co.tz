@extends('layouts.template')

@section('breadcrumb') 
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <form method="POST" action="{{ route('bug.update', $bug->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Type:</label>
                            <select class="form-control" id="title" name="title">
                                <option></option>
                                <option value="bug" {{ $bug->title === 'bug' ? 'selected' : '' }}>Bug</option>
                                <option value="feature_request" {{ $bug->title === 'feature_request' ? 'selected' : '' }}>Feature Request</option>
                                <option value="feedback" {{ $bug->title === 'feedback' ? 'selected' : '' }}>Feedback</option>
                                <option value="question_inquiry" {{ $bug->title === 'question_inquiry' ? 'selected' : '' }}>Question/Inquiry</option>
                                <option value="training_documentation_request" {{ $bug->title === 'training_documentation_request' ? 'selected' : '' }}>Training/Documentation Request</option>
                                <option value="data_request" {{ $bug->title === 'data_request' ? 'selected' : '' }}>Data Request</option>
                                <option value="customization_request" {{ $bug->title === 'customization_request' ? 'selected' : '' }}>Customization Request</option>
                                <option value="license_subscription_issue" {{ $bug->title === 'license_subscription_issue' ? 'selected' : '' }}>License/Subscription Issue</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reported_by">Reported By:</label>
                            <select class="form-control" id="client_id" name="client_id">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" {{ $bug->client_id === $client->id ? 'selected' : '' }}>{{ $client->Company_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Project_Name">Project Name:</label>
                            <select class="form-control" id="project_id" name="project_id">
                                @if ($projects)
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}" {{ $bug->project_id === $project->id ? 'selected' : '' }}>{{ $project->Project_Name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>No projects found</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $bug->description }}">
                        </div>
                        <div class="form-group">
                            <label for="assigned_to">Assigned To:</label>
                            <select class="form-control" id="team_id" name="team_id">
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $bug->team_id === $team->id ? 'selected' : '' }}>{{ $team->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment (PDF only):</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment" accept=".pdf">
                        </div>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Priority:</label><br>
                            <select class="form-control" id="priority" name="priority">
                                <option value="low" {{ $bug->priority === 'low' ? 'selected' : '' }}>Low</option>
                                <option value="medium" {{ $bug->priority === 'medium' ? 'selected' : '' }}>Medium</option>
                                <option value="high" {{ $bug->priority === 'high' ? 'selected' : '' }}>High</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Severity:</label><br>
                            <select class="form-control" id="severity" name="severity">
                                <option value="minor" {{ $bug->severity === 'minor' ? 'selected' : '' }}>Minor</option>
                                <option value="moderate" {{ $bug->severity === 'moderate' ? 'selected' : '' }}>Moderate</option>
                                <option value="major" {{ $bug->severity === 'major' ? 'selected' : '' }}>Major</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Status:</label><br>
                            <select class="form-control" id="status" name="status">
                                <option value="new" {{ $bug->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="in_progress" {{ $bug->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="resolved" {{ $bug->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                                <option value="closed" {{ $bug->status === 'closed' ? 'selected' : '' }}>Closed</option>
                            </select>
                        </div><br>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@extends('layouts.template')

@section('breadcrumb') 
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <form method="POST" action="{{ route('bug.update', $bug->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Type:</label>
                            <select class="form-control" id="title" name="title">
                                <option></option>
                                <option value="bug" {{ $bug->title === 'bug' ? 'selected' : '' }}>Bug</option>
                                <option value="feature_request" {{ $bug->title === 'feature_request' ? 'selected' : '' }}>Feature Request</option>
                                <option value="feedback" {{ $bug->title === 'feedback' ? 'selected' : '' }}>Feedback</option>
                                <option value="question_inquiry" {{ $bug->title === 'question_inquiry' ? 'selected' : '' }}>Question/Inquiry</option>
                                <option value="training_documentation_request" {{ $bug->title === 'training_documentation_request' ? 'selected' : '' }}>Training/Documentation Request</option>
                                <option value="data_request" {{ $bug->title === 'data_request' ? 'selected' : '' }}>Data Request</option>
                                <option value="customization_request" {{ $bug->title === 'customization_request' ? 'selected' : '' }}>Customization Request</option>
                                <option value="license_subscription_issue" {{ $bug->title === 'license_subscription_issue' ? 'selected' : '' }}>License/Subscription Issue</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reported_by">Reported By:</label>
                            <select class="form-control" id="client_id" name="client_id">
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}" {{ $bug->client_id === $client->id ? 'selected' : '' }}>{{ $client->Company_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Project_Name">Project Name:</label>
                            <select class="form-control" id="project_id" name="project_id">
                                @if ($projects)
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}" {{ $bug->project_id === $project->id ? 'selected' : '' }}>{{ $project->Project_Name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>No projects found</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ $bug->description }}">
                        </div>
                        <div class="form-group">
                            <label for="assigned_to">Assigned To:</label>
                            <select class="form-control" id="team_id" name="team_id">
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $bug->team_id === $team->id ? 'selected' : '' }}>{{ $team->Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="attachment">Attachment (PDF only):</label>
                            <input type="file" class="form-control-file" id="attachment" name="attachment" accept=".pdf">
                        </div>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Priority:</label><br>
                            <select class="form-control" id="priority" name="priority">
                                <option value="low" {{ $bug->priority === 'low' ? 'selected' : '' }}>Low</option>
                                <option value="medium" {{ $bug->priority === 'medium' ? 'selected' : '' }}>Medium</option>
                                <option value="high" {{ $bug->priority === 'high' ? 'selected' : '' }}>High</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Severity:</label><br>
                            <select class="form-control" id="severity" name="severity">
                                <option value="minor" {{ $bug->severity === 'minor' ? 'selected' : '' }}>Minor</option>
                                <option value="moderate" {{ $bug->severity === 'moderate' ? 'selected' : '' }}>Moderate</option>
                                <option value="major" {{ $bug->severity === 'major' ? 'selected' : '' }}>Major</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Status:</label><br>
                            <select class="form-control" id="status" name="status">
                                <option value="new" {{ $bug->status === 'new' ? 'selected' : '' }}>New</option>
                                <option value="in_progress" {{ $bug->status === 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="resolved" {{ $bug->status === 'resolved' ? 'selected' : '' }}>Resolved</option>
                                <option value="closed" {{ $bug->status === 'closed' ? 'selected' : '' }}>Closed</option>
                            </select>
                        </div><br>
                       
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection