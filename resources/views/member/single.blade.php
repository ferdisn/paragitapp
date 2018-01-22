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

                                <p>ID : {{$member->id}}</p>
                                <p>Name : {{$member->firstName}} {{$member->middleName}} {{$member->lastName}}</p>
                                <p>Email : {{$member->email}}</p>
                                <p>Year : {{$member->batchYear}}</p>
                                <p>Voice : {{$member->voiceType}}</p>
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