var cartas = [
				["i1.png", "i6.png", "i2.png", "i3.png"],
				
				["i4.png", "i5.png", "i4.png", "i5.png"],
				
				["i6.png", "i3.png", "i1.png", "i2.png"]
			 ];
 var click = 0;
 var pontos_jogador1 = 0;
 var pontos_jogador2 = 0;
 var jogadas = 0;
 var linha = 0;
 var coluna = 0;
 

			 
function virar(lin, col)
{
	document.getElementById("i" + lin + col).src =  cartas[lin][col];
	
	click++;
	
	if(click == 1)
	{
		//guardando as coordenadas do primeiro click
		linha = lin;
		coluna = col;
	}
	
	if(click == 2)
	{
		//somar na jogada
		jogadas++;
		//verificar se acertou
		if(cartas[linha][coluna] == cartas[lin][col])
		{
			//acertou
			if(jogadas % 2 != 0)
			{
				pontos_jogador1++;
			}
			else
			{
				pontos_jogador2++;
			}
			alert(pontos_jogador1);
		}
		else
		{
			//errou
			
			setTimeout(function(){
	
				document.getElementById("i" + linha + coluna).src = "i7.png";
				document.getElementById("i" + lin + col).src = "i7.png";
	
			}, 3000);
		}
		click = 0;
		
	}
}//fim função virar

