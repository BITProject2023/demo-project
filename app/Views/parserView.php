

<h2>Blog Title : {blog_title}</h2>

<h3>Blog Heading : {blog_heading}</h3>

<h4>Blog Entries : </h4>
    <ul>
        {blog_entries}
            <li>{title|upper}</li>
            <li>{body}</li>
        {/blog_entries}
    </ul>

    <h3> Date of Birth : {dob|date_modify(+3 day) | date(Y-m-d) }</h3>

    <h3> Income : {income|local_currency(USD,en_US) }</h3>

    {if $income > 100000}
    <h1>Good Income..</h1>
    {endif}

    <!-- Method 1 -->
        <!-- < ?php foreach($blog_entries as $entry){ -->
            <!-- echo "<li>" . $entry . "</li>"; -->
        <!-- } ?></li> -->


    <!-- method2  -->

        <!-- < ?php foreach ($blog_entries as $e): ?>            -->
            <!-- <li> <a href="#"> < ?= $e ?></a></li> -->
        <!-- < ?php  endforeach; ?> -->

    <!-- </ul> -->
