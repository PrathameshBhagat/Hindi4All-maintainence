<!doctype html>
<html onkeydown="keydown(event);">
<head>   
    <title>Editor</title>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html;charset='UTF-8'" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/hint/show-hint.min.css">
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/codemirror.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/hint/show-hint.min.js" ></script>
    <script src="javascript.js" ></script>
    <script src="simplemode.js" ></script>
    <link rel="stylesheet" href="style.css" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3506596207312408" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

 </head>
 <body class="bg-dark">

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3506596207312408" crossorigin="anonymous"></script>
    
    
    <div id="N1" align="left"></div><div id="N2" style="left:10px" ></div>

    <form accept-charset="utf-8">
    
        <p class="question text-light"> 

            <INPUT TYPE="TEXT" class="form-control w-auto d-inline-block" name="uname" placeholder="UserName" value="userName">&nbsp;

        	<select class="form-select w-auto d-inline-block" name="lang">
                <option value="java">Hindi/Java</option>
                <option disabled value="python">PYTHON</option>
                <option  disabled value="php">PHP</option>
                <option value="javascript" disabled >JAVASCRIPT</option>
                <option  disabled  value="c">C</option>
            </select>
                
            <input type="button" class="btn btn-primary" value="SAVE &#128190;" onclick="save()">
            <input type="button" class="btn btn-success" value="RUN  &#9654; " onclick="run()">
                
            <a href="https://prathameshbhagat.github.io/Documentation-Project/" target="_blank" rel="noopener noreferrer">
            	<input type="button" class="btn btn-success" value="Go to documentation &#x1F517; " >
            </a>
		</p>
           
        
    		<span style="display:inline-block; margin:5px"></SPAN>

        <table>
                <tr> 
                    <td id="wr"><div class="editor-container"><div class="ace-container"><textarea onblur="acetomi();" id="editor">
    
    
    कक्षा मुख्य {

        सार्वजनिक स्थिर रिक्त जरूरी( डोर [] क){ 
            
          	/* This  line will print "नमस्ते ! Hello World !" */
            तंत्र.बाहर.प्रिंट( " नमस्ते ! Hello World !" );    
            
        }
    }   

/* Note:- Press CTRL+ q if facing issuses in editing code here (twice to go back)*/
/* Note:- One editor edits good other displays good hence the issue, we're working on it*/ 
/* Note:- Feel free to edit code, run, submit it. :)
                    </div></div></td> 
                    <td id="wr1" >
    
    					<div class="editor-container ">
    						<div class="ace-CONTAINER">
    							<textarea onblur="mitoace()" id="mirror" ></textarea>
                    </div>
                    </div>

                    </td> 			
                    <td><div id="view" style="height:80vh; border:20px"></div> </td> 			
                    <td>
                    <div class="editor-container">
                        <div id="view" style="height:90vh;width:50vw;font:150% monospace;margin: 0;border: 5px solid #aaa; color:#ff0;overflow: scroll;resize: both;" class=" ace_editor ace-cobalt ace_dark"></div> 
                    </div> 
                	</td>
                </tr>
    
    
      
            </table>
    </form>
    <br><br><br><br><br><br>
    

    
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.12.3/ace.js" integrity="sha512-yARx+3W/tyZPXyRfZ4DLRdj0rXF2yjH2D6bKpPslrl1c62Q6ZC808L++ft9jkzIN9vmLtQCFsYNrzoOE/Im2Dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.12.5/ext-language_tools.min.js" ></script>
    <script src="snippets-javaa.js"></script>
    <script src="mode-javaa.js"></script> 
    <script src="main.js"></script> <br >
      </body>
</html>