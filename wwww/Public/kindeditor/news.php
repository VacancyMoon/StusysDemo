<?php 
$save_path='../attached';
$save_url='editor/attached/';



 ?>
 <html>  
<head>  
<script type="text/javascript" charset="utf-8" src="./kindeditor-all.js"></script>    
        <script type="text/javascript">  
            KE.show({  
                id : 'content_1',  
                items:['source', '|', 'fullscreen', 'undo', 'redo',  'copy', 'paste',  
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',  
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',  
                'superscript', '|', 'selectall', '-',  
                'title', 'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold',  
                'italic', 'underline', 'strikethrough',  '|', 'image',  
                'advtable', '|', 'about']  
                  
            });  
        </script>       
</head>  
<body>  
 <textarea id='content_1' name="content" style="width:727px;height:350px;"> </textarea>   
</body>  
</html>  