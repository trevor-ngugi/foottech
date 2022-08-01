@extends('layouts.app')

@section('content')
<header>

    <div class="container">

        <div class="profile">

            <div class="profile-image">

                <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">

            </div>

            <div class="profile-user-settings">

                <h1 class="profile-user-name">african warriors</h1>

                <!-- <button class="btn profile-edit-btn">Edit Profile</button> -->

                <!-- <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button> -->

            </div>

            <div class="profile-stats">

                <ul>
                    <li><span class="profile-stat-count">24</span> players</li>
                    <li><span class="profile-stat-count">18</span> videos</li>

                </ul>

            </div>

            <div class="profile-bio">

                <p><span class="profile-real-name">team description</span>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit </p>

            </div>
            <div class="profile-bio2">
                <ul>
                    <li><span class="profile-stat-count"></span><a id="buttonp" href="#">player</a></li>
                    <li><span class="profile-stat-count"></span><a id="buttonv" href="#">video</a></li>
                    <li><span class="profile-stat-count"></span><a id="buttons" href="#">stats</a></li>
                </ul>
            </div>

        </div>
        <!-- End of profile section -->

    </div>
    <!-- End of container -->

</header>

<main>

    <div class="container">


        <hr>
        <div class="player">
            <h2>player details</h2>
            <table>
                <tr>
                    <th>name</th>
                    <th>position</th>
                </tr>
                <tr>
                    <td>trevor</td>
                    <td>striker</td>
                </tr>
            </table>
            <hr>
        </div>
        <div class="stats">
            <h2>team statistics</h2>
            <table>
                <tr>
                    <th>cleansheets</th>
                    <th>number</th>
                </tr>
                <tr>
                    <td>david</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>stegen</td>
                    <td>5</td>
                </tr>
            </table><br>

            <table>
                <tr>
                    <th>top scorers</th>
                    <th>number</th>
                </tr>
                <tr>
                    <td>peterson</td>
                    <td>17</td>
                </tr>
                <tr>
                    <td>kane</td>
                    <td>15</td>
                </tr>
            </table><br>
            <hr>
        </div>
        <div class="gallery">

            <div class="gallery-item" tabindex="0">

                <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">

                <div class="gallery-item-info">

                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
                    </ul>

                </div>

            </div>

            <div class="gallery-item" tabindex="0">

                <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">

                <div class="gallery-item-info">

                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 89</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 5</li>
                    </ul>

                </div>

            </div>

            <div class="gallery-item" tabindex="0">

                <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" class="gallery-image" alt="">

                <div class="gallery-item-type">

                    <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

                </div>

                <div class="gallery-item-info">

                    <ul>
                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>
                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
                    </ul>

                </div>

            </div>



        </div>
        <!-- End of gallery -->

        <div class="loader"></div>

    </div>
    <!-- End of container -->

</main>


<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
    $(function() {
        $("#buttonp").click(function() {
            $(".player").toggle();
        });
        $("#buttons").click(function() {
            $(".stats").toggle();
        });
        $("#buttonv").click(function() {
            $(".gallery").toggle();
        });
    });
</script>

@include('footer')
</div>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset ('css/teamprofile.css')}}">
@endsection