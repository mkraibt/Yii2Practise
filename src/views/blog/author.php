<?php

$this->title = "Blogs";
?>
<section class="pt-120 pb-120">
    <div class="container">

        <table class="table table-bordered table-striped">
            <tr>
                <td>Name</td>
                <td><?=$user->name?></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><?=$user->phone?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$user->email?></td>
            </tr>
        </table>
        <table class="table table-bordered table-striped">
            <tr>
                <td>Title</td>
                <td>Created Date</td>
            </tr>
            <?php
            foreach($user->blogs as $blog)
            {?>
                <tr>
                <td><?=$blog->title;?></td>
                <td><?=$blog->created_at;?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</section>