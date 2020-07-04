<section class="list-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 rep-sidebar mb-sm-3 mb-3" onscroll="myFunction()"  id="sticky">
                <div class="reports-category">
                    <h6 class="text-dark">Category</h6>
                    <ul class="list-group">
                        @if(sizeof($data) > 0)
                            @foreach($data as $cat)
                            <?php 
                                $directoryURI = $_SERVER['REQUEST_URI'];
                                $path = parse_url($directoryURI, PHP_URL_PATH);
                                $components = explode('/', $path);
                                $first_part = $components[1];
                                $active = $first_part=="careers" ? "active" : "";
                            ?>
                                @include('layouts.sideMenu',['cat' => $cat])
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-9 report-col">
                <div class="row mb-4">
                @if(sizeof($reports) > 0)
                    <?php $var=1; 
                    $count = count($reports);
                    ?>
                    <input class="reportslist-count" style="display:none;" type="text" value="{{$count}}">
                    <!-- <p class="reportslist-count" style="display:none;"></p> -->
                    @foreach($reports as $data)
                        <div class="col-lg-4 col-md-6 mb-md-4 mb-sm-3 mb-3">
                            @include('layouts.cardNofooter',['data' => $data])                                
                        </div>
                        <?php $var++; ?>
                    @endforeach
                    <div>
                    {{ $reports->links() }}
                    </div>
                @else
                    <div class="col-md-12 mb-md-4">
                        <div class="card p-5">
                            <p class="text-center mb-0">No reports</p>
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>