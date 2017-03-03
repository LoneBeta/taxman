@include('includes.header')
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <div class="pull-right m-b-30">
              <a href="{{url('/project/create')}}">
                <button class="btn btn-success">Create New Project</button>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12">               
                <div class="panel panel-default">
                	<div class="panel-heading">
                		<div class="panel-title">
		                  Projects
		                </div>
                	</div>
	                <div class="panel-body">
	                	<h5>A table of all your projects</h5>
	                	<table class="table table-condensed">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>&nbsp;</th>
                        </tr>
                      </thead>  
                      <tbody>
                        @foreach($projects as $project)
                        <tr>
                          <td>{{$project->id}}</td>
                          <td>{{$project->customer->name}}</td>
                          <td class="text-right">
                            <a href="{{url('/project/edit/'.$project->id)}}">
                              <button class="btn btn-xs btn-primary">Edit</button>
                            </a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
	                </div>
                </div>               
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
@include('includes.footer')