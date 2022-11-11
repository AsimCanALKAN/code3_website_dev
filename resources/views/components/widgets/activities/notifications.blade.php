<div class="col-md-6">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Notifications</h4>
        </div>
        <div class="card-body">
            <div id="dlab_W_TimeLine11" class="widget-timeline dlab-scroll style-1 height370">
                <ul class="timeline">
                    @foreach ($data as $element)
                    <li>
                        <div class="timeline-badge {{ $element['style'] }}"></div>
                        <a class="timeline-panel text-muted" href="#">
                            <span>{{ $element['time_readable'] }}</span>
                            <h6 class="mb-0">{!! $element['description'] !!}</h6>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-footer border-0 pt-0">
            <a href="notification-info.php" class="btn btn-outline-primary d-block btn-lg">View More</a>
        </div>
    </div>
</div>