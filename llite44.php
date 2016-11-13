body
{
background-image:url("sub1.jpg");
 background-size: cover;
}
a{outline: none;}

a, a:link, a:visited 
{
  color:#888888;
  text-decoration:none;
}
a:hover 
{
  text-decoration:none;
  color:#888888;
  text-shadow: 1px 1px #444444; 
}

#site_main
{
background-image:url("mota1-001.jpg");
 background-repeat:none;
 background-size: cover;
 margin: 45px 135px;
 width: 1140px;
 height: 600px;
 position:center;
 border: solid 1px #000000;
 box-shadow: 3px 3px 1px #333333;
 overflow: hidden;
 border-radius:15px;
}
#home_main
{display:table-cell; 
 width: 800px;
 color:#888888;
 margin: 20px;
 overflow: auto;
overflow-x: hidden;
 height: 420px;
 font-family: Herculanum;
 font-size:20px;
 padding: 20px;
 border-radius:15px;
 position: absolute; top:130px; left:380px;
}

#site_content
{
 
 position:center;
 border-radius:15px;
overflow: auto;
overflow-x: hidden;
}

#site_content1
{
 width: 1120px;
 height: 460px;
 position:center;
 border-radius:15px;
overflow: auto;
overflow-x: hidden;
margin-top:100px;

}

#header_div
{
 width: 1050px;
 height: 100px;
 font-family:herculanum;
 font-size: 60px;
 color:#888888;
overflow:hidden;
position:absolute;
margin-top:25px;
margin-left:130px


}
#logout
{
font-family:herculanum;
font-size: 20px;
position:absolute;
margin-top:5px;
margin-left:1050px;
color:#888888;

}


#side_menu
{
 
 width: 270px;
 height: 480px;
 text-align: center;
 margin: 0px 0px 3px 0px; 
font-family:herculanum;
 overflow: auto;
overflow-x: hidden;}


#smenu
{
box-shadow: 0px 0px 0px #000000;
 width: 240px;
 height: 280px;
 margin: 5px 5px 5px 5px;

}
#pic
{
max-width: 220px;
max-height: 250px;
margin: 5px 40px 5px 5px;
box-shadow: 0px 0px 0px 7px #000;

//margin:auto;
//display:block;
}
.m_top
{
 width: 240px;
 height: 50px;
 border: solid 1px #000000;

 color:#EBACEE;
 text-align:center;
 box-shadow: 1px 1px #000000;
 border-radius:5px;
}

.m_top:hover
{
 width: 250px;
 height: 60px;
 border: solid 1px #000000;
background-image:url("p1.jpg");
 color:#EBACEE;
 
 text-align:center;
 box-shadow: 1px 1px #000000;
 border-radius:5px;
}


/*Formatting the butons created for attractions*/
.att_but
{
 width: 240px;
 height: 30px;
 border: solid 1px #000000;
 background: #FFFFFF;
 box-shadow: 1px 1px #7653EE;
 border-radius:5px;
}
/*For a Custom Font Used in the Page*/
@font-face
{
font-family: hdngFont;
src: url(BRUSHSCI.ttf);
}	


.Table
{
   display: table;
}

  .Heading
    {
        display: table-row;
        width:100px;
       text-align: top;
    }

  .Cell
    {
        display: table-cell;
        width:100px;
            text-align: top;
    }
 .Celll
    {
        display: table-cell;
        width:500px;

            text-align: center;
    }

.hover-shadow {
  display: inline-block;
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
text-align:center;

}
.hover-shadow:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  /* W3C */
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform, opacity;
  transition-property: transform, opacity;
text-align:center;
}
.hover-shadow:hover, .hover-shadow:focus, .hover-shadow:active {
  -webkit-transform: translateY(-6px);
  transform: translateY(-6px);
  animation-name: hover;
  animation-duration: 1.5s;
  animation-delay: 0.3s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}
.hover-shadow:hover:before, .hover-shadow:focus:before, .hover-shadow:active:before {
  opacity: .8;
  -webkit-transform: translateY(6px);
  transform: translateY(6px);
  -webkit-animation-name: hover-shadow;
  animation-name: hover-shadow;
  -webkit-animation-duration: 1.5s;
  animation-duration: 1.5s;
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  animation-direction: alternate;
text-align:center;
}