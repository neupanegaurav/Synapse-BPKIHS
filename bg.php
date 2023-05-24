<html>
<form name="modulequestionnaire" method="post" action="" />

<p><i>Rate each question from 6 to 1, six being strongly 
agree and one being strongly disagree.</i></p>

1. I think the module guide/student handbook provided enough information about the 
module content, organisation and assessment.<br/>

6<input type="radio" name="answer[1]" value="6"> 5<input type="radio" name="answer[1]" value="5"> 
4<input type="radio" name="answer[1]" value="4"> 3<input type="radio" name="answer[1]" value="3"> 
2<input type="radio" name="answer[1]" value="2"> 1<input type="radio" name="answer[1]" value="1">
</p>

2.The module was well organised.<br/>

6<input type="radio" name="answer[2]" value="6"> 5<input type="radio" name="answer[2]" value="5"> 
4<input type="radio" name="answer[2]" value="4"> 3<input type="radio" name="answer[2]" value="3"> 
2<input type="radio" name="answer[2]" value="2"> 1<input type="radio" name="answer[2]" value="1"> 
</p>

3.The Learning Resource Centre provided adequate materials for the module.<br/>

6<input type="radio" name="answer[3]" value="6"> 5<input type="radio" name="answer[3]" value="5"> 
4<input type="radio" name="answer[3]" value="4"> 3<input type="radio" name="answer[3]" value="3"> 
2<input type="radio" name="answer[3]" value="2"> 1<input type="radio" name="answer[3]" value="1"> 
<input type='submit'/>
</p>
</form>
</html>
<?php
$answer=$_POST['answer[1]'];
echo $answer;
?>