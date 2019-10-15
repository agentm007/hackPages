<!DOCTYPE html>
<html>
  <head>

  </head>
  </body>
    <script>
      //Creating the Canvas
      var canvas  = document.createElement('canvas');
      document.body.appendChild(canvas);
      var context = canvas.getContext('2d');
      var canwidth = 800;
      var canheight = 800;
      canvas.width = canwidth;
      canvas.height = canheight;
      
      //variables defining the play area
      var cellsTall, cellsWide, cellHeight, cellWidth;
      cellsTall = 20;
      cellsWide = 20;
      cellHeight = 20;
      cellWidth = 20;
      
      //calculated values
      var tableHeight, tableWidth;
      tableHeight = cellsTall * (cellHeight + 1);
      tableWidth = cellsWide * (cellWidth + 1);
      
      //drawing the grid
      drawGrid(cellsTall, cellsWide, cellHeight, cellWidth, "#336bff");
      
      //Creating the 2d arrays. Actuallly a huge pain in the ass in js
      var block1 = [];
      arrayBuilder(block1, cellsTall, cellsWide, false);
      
      
      //adding the onclick event listener
      canvas.addEventListener("mousedown", function(e){
        var loc = canvas.getBoundingClientRect();
        var x = e.clientX - loc.left;
        var y = e.clientY - loc.top;
        
        if( (x < tableWidth) && (y < tableHeight )){
          x = Math.floor(x/(tableWidth/cellsWide));
          y = Math.floor(y/(tableHeight/cellsTall));
          block1[x][y] = !block1[x][y];
          fillGrid();
        }
      });
      
      //next sequence
      function nextSequence(){
        var block2 = [];
        arrayBuilder(block2, cellsTall, cellsWide, false);
        for(i=0; i<cellsWide; i++){
          for(j=0; j<cellsTall; j++){
            block2[i][j] = cellLife(block1[i][j], countNeighbours(i, j));
          }
        }
        
        block1 = block2;
        fillGrid();
      }
      
      //counting neighbours might be able to simplfy
      function countNeighbours(x, y){
        var xcords, ycords, neighbours;
        neighbours = 0;
        xcords = [];
        ycords = [];
        xcords.push(x);
        ycords.push(y);
        
        if( x == 0){
          xcords.push(cellsWide - 1);
          xcords.push(x+1);
        }
        else if( x == (cellsWide-1)){
          xcords.push(0);
          xcords.push(x-1);
        }
        else{
          xcords.push(x-1);
          xcords.push(x+1);
        }
        
        if(y == 0){
          ycords.push(cellsTall - 1);
          ycords.push(y+1);
        }
        else if(y == (cellsTall-1)){
          ycords.push(0);
          ycords.push(y-1);
        }
        else{
          ycords.push(y-1);
          ycords.push(y+1);
        }
        
        //odd syntax is due to  javascripts bad for in loop
        for(xpoint in xcords){
          for(ypoint in ycords){
            if(xcords[xpoint] != x || ycords[ypoint] != y)
              neighbours += block1[xcords[xpoint]][ycords[ypoint]];
          }
        }
        
        return neighbours;
      }
      
      //determine if cell will live on or die
      function cellLife(cellStatus, neighbours){
        var status = false;
        if(cellStatus){
          if(neighbours == 2 || neighbours == 3)
            status = true;
        }
        else{
          if(neighbours == 3)
            status = true;
        }
        return status;
      }
      
      //function to fill the grid
      function fillGrid(){
        clear();
        drawGrid(cellsTall, cellsWide, cellHeight, cellWidth, "#336bff");
        for(i=0; i<cellsWide; i++){
          for(j=0; j<cellsTall; j++){
            if(block1[i][j]){
              context.beginPath();
              context.fillRect((i*cellWidth)+i+1, (j*cellHeight)+j+1, (cellWidth-1), (cellHeight-1));
            } 
          }
        } 
      }
      
      //Building the arrays
      function arrayBuilder(outArray, height, width, fill){
        for(i=0; i < width; i++){
          var innerArray = [];
          for(j=0; j<height; j++){
            innerArray.push(fill);
          }
          outArray[i] = innerArray;
        }
      }
      
      //drawing grid
      function drawGrid(height, width, cellHeight, cellWidth, color){
        context.strokeWidth=1;
        context.strokeStyle = color;
        
        cellHeight++;
        cellWidth++;
        
        var i;
        for(i=0; i<= height; i++){
          context.beginPath();
          context.moveTo(0,i*cellHeight);
          context.lineTo(tableWidth,i*cellHeight);
          context.stroke();
        }
        
        //var j;
        for(i=0; i <= width; i++){
          context.beginPath();
          context.moveTo(i*cellWidth,0);
          context.lineTo(i*cellWidth, tableHeight);
          context.stroke();
        } 
      }
      
      //clearing the canvas
      function clear(){
        context.beginPath();
        context.clearRect(0,0, canvas.width, canvas.height)
      }
    </script>
  </body>
</html>
