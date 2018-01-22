@extends('layouts.default')

@section('main')
<!-- Main -->
<article id="main">

    <header class="special container">
        <span class="icon fa-laptop"></span>
        <h2>Behold the <strong>Left Sidebar</strong></h2>
        <p>Where things on the left ... accompany that on the right.</p>
    </header>

    <!-- One -->
        <section class="wrapper style4 container">

            <div class="row 150%">
                <div class="4u 12u(narrower)">

                    <!-- Sidebar -->
                        <div class="sidebar">
                            <section>
                                <header>
                                    <h3>Magna Feugiat</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit..</p>
                                <footer>
                                    <ul class="buttons">
                                        <li><a href="#" class="button small">Learn More</a></li>
                                    </ul>
                                </footer>
                            </section>

                            <section>
                                <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                                <header>
                                    <h3>Amet Lorem Tempus</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                                <footer>
                                    <ul class="buttons">
                                        <li><a href="#" class="button small">Learn More</a></li>
                                    </ul>
                                </footer>
                            </section>
                        </div>

                </div>
                <div class="8u 12u(narrower) important(narrower)">

                    <!-- Content -->
                        <div class="content">
                            <section>
                                <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                <header>
                                    <h3>Dolore Amet Consequat</h3>
                                </header>
                                <p>Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum massa. Morbi eu faucibus massa. Aliquam massa urna, imperdiet sit amet mi non, bibendum euismod est. Curabitur mi justo, tincidunt vel eros ullamcorper, porta cursus justo. Cras vel neque eros. Vestibulum diam.</p>
                                <p>Vestibulum diam quam, mollis at consectetur non, malesuada quis augue. Morbi tincidunt pretium interdum. Morbi mattis elementum orci, nec dictum porta cursus justo. Quisque ultricies lorem in ligula condimentum, et egestas turpis sagittis. Cras ac nunc urna. Nullam eget lobortis purus. Phasellus vitae tortor non est placerat tristique. Sed id sem et massa ornare pellentesque. Maecenas pharetra porta accumsan. </p>
                                <p>In vestibulum massa quis arcu lobortis tempus. Nam pretium arcu in odio vulputate luctus. Suspendisse euismod lorem eget lacinia fringilla. Sed sed felis justo. Nunc sodales elit in laoreet aliquam. Nam gravida, nisl sit amet iaculis porttitor, risus nisi rutrum metus, non hendrerit ipsum arcu tristique est.</p>

                                @if(count($members) > 0)
                                <table style="border: 1px solid black;">
                                        <thead>
                                            <tr  style="border: 1px solid black;"></tr>
                                                <th  style="border: 1px solid black;"> id</th>
                                                <th  style="border: 1px solid black;"></th> name</th>
                                                <th  style="border: 1px solid black;"> email </th>
                                                <th  style="border: 1px solid black;"> year </th>
                                                <th  style="border: 1px solid black;"> voiceType</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($members as $member)
                                              <tr>
                                                  <td  style="border: 1px solid black;">{{$member->id}}</td>
                                                  <td style="border: 1px solid black;">{{$member->firstName}} {{$member->middleName}} {{$member->lastName}}</td>
                                                  <td style="border: 1px solid black;">{{$member->email}}</td>
                                                  <td style="border: 1px solid black;">{{$member->batchYear}}</td>
                                                  <td style="border: 1px solid black;">{{$member->voiceType}}</td>
                                              </tr>
                                             @endforeach                                             
                                       </tbody>
                                    </table>
                                    @else
                                    No data.
                                    @endif
                            </section>
                        </div>

                </div>
            </div>
        </section>

    <!-- Two -->
        <section class="wrapper style1 container special">
            <div class="row">
                <div class="4u 12u(narrower)">

                    <section>
                        <header>
                            <h3>This is Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                        <footer>
                            <ul class="buttons">
                                <li><a href="#" class="button small">Learn More</a></li>
                            </ul>
                        </footer>
                    </section>

                </div>
                <div class="4u 12u(narrower)">

                    <section>
                        <header>
                            <h3>Also Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                        <footer>
                            <ul class="buttons">
                                <li><a href="#" class="button small">Learn More</a></li>
                            </ul>
                        </footer>
                    </section>

                </div>
                <div class="4u 12u(narrower)">

                    <section>
                        <header>
                            <h3>Probably Something</h3>
                        </header>
                        <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                        <footer>
                            <ul class="buttons">
                                <li><a href="#" class="button small">Learn More</a></li>
                            </ul>
                        </footer>
                    </section>

                </div>
            </div>
        </section>

</article>
@endsection