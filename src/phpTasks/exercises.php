<?php include 'header.php'; ?>

<style>
main {
    margin: 0;
    padding: 0;
}
</style>

<h2>Exercises</h2>

<div class="ex-container">

    <div class="ex-sidebar">
        <a href="#" onclick="showImage('ex1.png')">Exercise 1</a>
        <a href="#" onclick="showImage('ex2.png')">Exercise 2</a>
        <a href="#" onclick="showImage('ex3.png')">Exercise 3</a>
        <a href="#" onclick="showImage('ex4.png')">Exercise 4</a>
        <a href="#" onclick="showImage('ex5.png')">Exercise 5</a>
        <a href="#" onclick="showImage('ex7.png')">Exercise 7</a>
    </div>

    <div class="ex-content">
        <img id="exerciseImage" src="ex1.png" alt="">
    </div>

</div>

<script>
function showImage(filename) {
    document.getElementById('exerciseImage').src = filename;
}
</script>

<?php include 'footer.php'; ?>


