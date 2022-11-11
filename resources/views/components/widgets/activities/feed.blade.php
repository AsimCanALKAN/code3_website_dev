<div class="col-md-6">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Activities</h4>
        </div>
        <div class="card-body">
            <div id="dlab_W_TimeLine_2" class="widget-timeline dlab-scroll height370">
                <ul class="timeline">
                    @foreach($data as $element)
                        <li>
                            <div class="timeline-badge {{ $element['style'] }}"></div>
                            <a class="timeline-panel text-muted" href="#">
                                <span>{{ $element['time_readable'] }}</span>
                                <h6 class="mb-0">{!! $element['description'] !!}</h6>
                            </a>
                        </li>
                    @endforeach
                    <li>
                        <div class="timeline-badge info">
                        </div>
                        <a class="timeline-panel text-muted" href="#">
                            <span>20 minutes ago</span>
                            <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
                            <p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-footer border-0 pt-0">
            <a href="notification-info.php" class="btn btn-outline-primary d-block btn-lg">View More</a>
        </div>
    </div>
</div>