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
  </head>
  <body>
    <div id="N1" align="left"></div><div id="N2" style="left:10px" ></div>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3506596207312408" crossorigin="anonymous"></script>
    <form accept-charset="utf-8">
        <p class="question">Write a program in hindi we will get it converted into java/python/c++/js/php code in<br>
                <INPUT TYPE="TEXT" name="uname" placeholder="UserName" >&nbsp
                <select name="lang"><option value="java">JAVA</option><option value="python">PYTHON</option><option value="php">PHP</option><option value="javascript">JAVASCRIPT</option><option value="c">C</option></select>
                 <input type="button" value="SAVE" onclick="save()">
                <input type="button" value="RUN" onclick="run()">
            </p>
            

        <table>
                <tr > 
                    <td id="wr"><div class="editor-container"><div class=container><textarea onblur="acetomi();" id="editor">
    public class Main{
             public static void main (String []args){
             System.out.println("This site can have ads form online placement courses,B.E.,Btech and other colleges,companies seeking low cost programmers ,other Youtube channels,etc ");
             System.out.println("Please apporove it as soon as possible so that the original site sample code,data and other  files can be added");
    }}
                    </textarea>
                    </div></div></td> 
                    <td id="wr1" ><div class="editor-container"><div class=container><textarea onblur="mitoace()" id="mirror"></textarea></div></div></td>
                </tr>
                <tr><td colspan="2">
           <div class="editor-container"><div id="view" style="height:100vh;font:150% monospace;color:#ff0;overflow: scroll;resize: both;" class=" ace_editor ace-cobalt ace_dark"></div> </div> 
                </td></tr>
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