@extends('app')

@section('content')

    <div class="col-md-2"></div>
    <div class="col-md-7">
        @yield('left')
    </div>



    <div class="col-md-3">
            <div class="shoutbox">

                <h1>Shout box <img src='./assets/img/refresh.png'/></h1>

                <ul class="shoutbox-content"></ul>

                <div class="shoutbox-form">
                    <h2>Write a message <span>×</span></h2>

                    <form action="./publish.php" method="post">
                        <label for="shoutbox-name">nickname </label> <input type="text" id="shoutbox-name" name="name"/>
                        <label class="shoutbox-comment-label" for="shoutbox-comment">message </label>
                        <textarea id="shoutbox-comment" name="comment" maxlength='240'></textarea>
                        <input type="submit" value="Shout!"/>
                    </form>
                </div>
           </div>
    </div>

    <!-- JavaScript -->
    <script src="./../assets/js/script.js"></script>

@endsection

