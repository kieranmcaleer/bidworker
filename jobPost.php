<?php
include_once 'header.php';
?>
<section class="jobPost-form">
    <h2>Create a Job for others to bid on</h2>
    
    <form action="includes/jobPost.inc.php" method="post">
        
        <select name= "fieldSelection"class="form-select" aria-label="Default select example">
            <option selected>Select a Category</option>
            <option value="gnd">Graphics & Design</option>
            <option value="dm">Digital Marketing</option>
            <option value="wt">Writing & Translation</option>
            <option value="va">Video & Animation</option>
            <option value="ma">Music & Audio</option>
            <option value="pnt">Programming & Tech</option>
            <option value="b">Business</option>
            <option value="l">Lifestyle</option>
        </select>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Job Description</label>
            <textarea class="form-control" id="jobDescription" name="jobDescription"rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="jobPrice">What is  the maximum that you are willing to pay someone for this job?</label>
            <input type="number" min="5.00" max="10000.00" step="0.01" placeholder="$0.00" id="jobPrice" name="jobPrice"/>
        </div>
        

        <button type="submit" name="createJobButton">Post Job</button>
    </form>
</section>

    

<?php
include_once 'footer.php';
?>






