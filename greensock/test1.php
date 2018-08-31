<!DOCTYPE html>
<html>
	<head>
		
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/utils/Draggable.min.js"></script>
    	<style>
body {
  height:500px;
}
        </style>
	
	</head>
	<body>
	
	        <script>
        //code from Chris Gannon
        //http://gannon.tv/

        //learn how this was built https://greensock.com/cube-dial-tutorial


        (function (){
        var body;


        function init (){ 

            buildDOM();

            Draggable.create(dialContainer, {
              type:'rotation',
              bounds:{minRotation:0, maxRotation:360},
              onDrag:updateNullPosition
            })

            Draggable.create(sliderDragger, {
                type:'x',
                bounds:{minX:0, maxX:360},
                onDrag:updateNullPosition
            })



        }

        function updateNullPosition(){

            destPosX = (this.target.className == 'dial') ? dialContainer._gsTransform.rotation : sliderDragger._gsTransform.x;
            TweenMax.set(nullObject, {
                x:destPosX
            });

            var controlledElement;

            if(this.target.className == 'dial'){

                TweenMax.set(sliderDragger, {
                    x:nullObject._gsTransform.x
                });

                controlledElement = 'Dragger\'s X pos'

            } else{

                TweenMax.set(dialContainer, {
                    rotation:nullObject._gsTransform.x
                });

                controlledElement = 'Dial\'s rotation'
            }

            updateText(controlledElement);
        }

        function updateText(el){
            nullObjectLabel.innerHTML = 'Null Object controlling ' + el + ' (' + Math.round(nullObject._gsTransform.x) + ')';   
            infoText.innerHTML = 'Both the Dial and the Dragger tell the Null Object to move left and right<br>Dial rotation = ' + Math.round(dialContainer._gsTransform.rotation)+'<br>Dragger X = ' + Math.round(sliderDragger._gsTransform.x)
        }


          
          
          /* build the DOM here using GSAP only - I could use CSS and HTML but I'm not! :) */
          
          function buildDOM(){
            
            body = document.body;
            container = document.createElement('div');
            nullObject = document.createElement('div');
            dialContainer = document.createElement('div');
            dialLabel = document.createElement('div');
            nullObjectLabel = document.createElement('div');
              infoText = document.createElement('div');

            stageWidth = 800;
            stageHeight = 400;

            TweenMax.set(body, {
                width:stageWidth,
                height:stageHeight,
                backgroundColor:'black',
                overflow:'hidden'

            });

            TweenMax.set(container, {
            className:'container',
                position:'absolute',
                width:stageWidth,
                height:stageHeight,
            backgroundColor:'rgba(33,33,33,1)'
            })

            TweenMax.set(nullObject, {
                className:'nullobject',
                position:'absolute',
                x:0,
                width:20,
                height:20,
                //backgroundColor:'rgba(118,146,57, 1)'
                backgroundColor:'White',
                borderRadius:'50%'
            });

            TweenMax.set(dialContainer, {
                className:'dial',
                position:'absolute',
                x:10,
                y:120, 
                width:140,
                height:140,
                backgroundColor:'rgba(118,146,57, 1)',
                borderRadius:'50%'
            });

            TweenMax.set(dialLabel, {
                position:'absolute',
                x:0,
                y:0, 
                width:140,
                height:140,
                lineHeight:7,
                textAlign:'center',
                fontSize:20,
                fontWeight:100,
                color:'white',
                fontFamily:'Arial, Helvetica, sans-serif'
            });

            TweenMax.set(nullObjectLabel, {
                position:'absolute',
                x:30,
                y:0,
                width:500,
                height:20,
                textAlign:'left',
                fontSize:20,
                fontWeight:100,
                color:'white',
                fontFamily:'Arial, Helvetica, sans-serif'
            });   
            
            TweenMax.set(infoText, {
                position:'absolute',
                x:10,
                y:stageHeight - 100,
                width:stageWidth,
                height:20,
                textAlign:'left',
                fontSize:20,
                fontWeight:100,
                color:'white',
                fontFamily:'Arial, Helvetica, sans-serif'
            });    
          
            infoText.innerHTML = 'Both the Dial and the Dragger tell the Null Object to move left and right';

            nullObjectLabel.innerHTML = 'Null Object'
            dialLabel.innerHTML = 'Dial (spin me)';
            nullObject.appendChild(nullObjectLabel);
            dialContainer.appendChild(dialLabel);
            body.appendChild(container);
            container.appendChild(dialContainer);
            container.appendChild(infoText);
            container.appendChild(nullObject);
            sliderLabel = document.createElement('div');
            sliderLabel.innerHTML = 'Dragger (drag me)';

            TweenMax.set(sliderLabel, {
                position:'absolute',
                x:50,
                y:0, 
                width:400,
                height:20,
                textAlign:'left',
                fontSize:20,
                fontWeight:100,
                color:'white',
                lineHeight:2,
                fontFamily:'Arial, Helvetica, sans-serif'
            })


            sliderDragger = document.createElement('div');
            TweenMax.set(sliderDragger, {
                className:'slider',
                position:'absolute',
                x:0,
                y:60, 
                width:40,
                height:40,
                backgroundColor:'rgba(118,146,57, 1)',
                borderRadius:'10%'//,
            });

            sliderDragger.appendChild(sliderLabel)
            container.appendChild(sliderDragger)

          }

          init();

        })();
        </script>
	
	</body>
</html>