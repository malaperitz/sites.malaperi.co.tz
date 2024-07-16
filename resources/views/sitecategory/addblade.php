@section('breadcrumb') 
@endsection

@section('content')
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <form method="post" action="{{ route('bug.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">Type:</label>
                            <select class="form-control" id="title" name="title">
                                <option value="">Select Ticket Type</option>
                                <option value="bug">Bug</option>
                                <option value="feature_request">Feature Request</option>
                                <option value="feedback">Feedback</option>
                                <option value="question_inquiry">Inquiry</option>
                                <option value="training_request">Training Request</option>
                                <option value="customization_request">Customization Request</option>
                                <option value="subscription_issue">Subscription Issue</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reported_by">Reported By:</label>
                            <select class="form-control" id="Company_Name" name="client_id">
                                <option value="">Select Client</option>
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->Company_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Project_Name">Project Name:</label>
                            <select class="form-control" id="Project_Name" name="project_id">
                                <option value="">Select Project</option>
                                @if ($projects)
                                    @foreach($projects as $project)
                                        <option value="{{ $project->Project_Name }}">{{ $project->Project_Name }}</option>
                                    @endforeach
                                @else
                                    <option value="" disabled>No projects found</option>
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="assigned_to">Assigned To:</label>
                            <select class="form-control" id="Name" name="team_id">
                            <option value="">Select Member</option>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->Name }}</option>
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
                                <option value=""></option>
                                <option value="low">Low</option>
                                <option value="medium">Medium</option>
                                <option value="high">High</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Severity:</label><br>
                            <select class="form-control" id="severity" name="severity">
                                <option value=""></option>
                                <option value="minor">Minor</option>
                                <option value="moderate">Moderate</option>
                                <option value="major">Major</option>
                            </select>
                        </div><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label>Status:</label><br>
                            <select class="form-control" id="status" name="status">
                                <option value=""></option>
                                <option value="new">New</option>
                                <option value="in_progress">In Progress</option>
                                <option value="resolved">Resolved</option>
                                <option value="closed">Closed</option>
                            </select>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection