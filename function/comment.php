<?php 
session_start();
include "connect.php";
$username=$_SESSION['username'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$website = $_POST['website'];
$id=$_POST['idp'];
$img=$_SESSION['img'];
 $date=date("y_m_d");

$insert = "INSERT INTO comments (comment,id_blog,name,e_mail,website,comment_date) VALUES ('$comment','$id','$username','$email','$website','$date') ";
$result=$conn->query($insert);

$select ="SELECT * FROM comments WHERE id_blog=$id";
$result_query=$conn->query($select);
 foreach ($result_query as $comment) {
 


	

	

echo 
'<div class="single-comment-item margin-bottom-40">

                                        <div class="thumb">



                                            <img src="lumino/function/upload/'.$img.'" alt="commente avatar">
                                        </div>
                                        <div class="content">
                                            <span class="meta-date">'.$comment['comment_date'].'</span>
                                            <h4 class="author-name">'.$username.'</h4>
                                            <p>'.$comment['comment'].'</p>
                                        </div>
                                        <a href="#" class="reply-btn"><i class="fas fa-reply"></i> Reply</a>
                                    </div>';
                                   
}
?>








