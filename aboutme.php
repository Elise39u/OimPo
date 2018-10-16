<?php include ("templates/header.php"); ?>

<div class="container">
    <div class="row">
        <h1> About me </h1>
    </div>
    <div class="row">
            <div class="col-sm">
                <p> Hello, My name is Justin and i am <span id="age"></span> years old <br>
                I like to game in mine free time <br>
                studying IT at the high school fontys <br>
                    i am currently at my first year in the study <br>
                </p>
            </div>
            <div class="col-sm">
                <img src="img/justin3.jpg">
                <p class="subtekst darkBack"> Me singing mine diploma at the graduation of my MBO </p>
            </div>
            <div class="col-sm">
                <p class="darkBack"> I like also too spend my free time too on programming <br>
                I have a few projects running now like a click game <br>
                like previous i worked on a location app for the company Kleyn trucks</p>
            </div>
    </div>
    <div class="row">
        <h1> Schooling </h1>
    </div>
    <div class="row">
    <div class="col-sm">
        <p>I have previously studied at Davinci college <br>
        I studied Software developer and graduated within the time period <br>
        I have enjoyed the time and learned much <br>
        Some people have completely turned me around and i thank them </p>
    </div>
    <div class="col-sm">
        <img src="img/school.png" style="width: 60%; height: 80%">
        <p class="subtekst darkBack" > My current school </p>
    </div>
    <div class="col-sm">
        <p class="darkBack"> Now i`m studying FHICT <br>
        this refers to Fontys Hogescholen ict <br>
        I am currently 7 too 9 weeks in when i make this page <br>
        the study its self is quite fine so far <br>
        But it still needs some time to <finish></finish></p>
    </div>
    </div>
    <div class="row">
        <h1>Future vision</h1>
    </div>
    <div class="row">
        <div class="col-sm">
            <p> I started my MBO career with the no idea of what i wanna to do later <br>
            This quickly changed when we reached about december of that year <br>
            i became involved in a project which involved helping a teacher with giving lessons to students <br>
            January and February i went too a series of test with my Marieke(Study coach) and Cor(career counselor) <br>
            Out of those test it came forward that i had a passion for Education </p>
        </div>
        <div class="col-sm">
            <img src="img/future.png">
            <p class="subtekst darkBack"> My future vision lies in software, teaching, coaching</p>
        </div>
        <div class="col-sm">
            <p class="darkBack"> So with my future ahead and my dreams giving sings i stared to work towards MBO It teacher <br>
            This involved me to go to my current study fhict. <br>
            The first period is a tough one but every school has one like this. <br>
            One day still i hope to stand in mine dreams in front of the class</p>
        </div>
    </div>
</div>

<?php include ("templates/footer.php"); ?>

<script type="text/javascript">
    var now = new Date();
    var birth = new Date('1998-12-16');
    var difference = now - birth;
    // Dates are set from 1970, so remove that to get the year
    var age = new Date(difference).getFullYear() - 1970
    document.getElementById("age").innerHTML = age.toString();
</script>