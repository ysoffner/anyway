LESS inovação de framework para CSS
===========================
***
* ####**Indice**
	* [Saiba um pouco sobre LESS](#about-less)
	* [Onde Funciona](#where-run)
	* [Vantagens](#advantages)
	* [Exemplos](#examples)
		* [Variaveis](#variables)
		* [Mixins](#mixins)
		* [Import](#imports)
	* [Como o integrar no seu projeto](#how-less)
	* [Referencias](#references)


<h2 id="about-less">Saiba um pouco sobre LESS</h2>
`LESS CSS`[^sign-less] é um framework de escrita com o ojetivo de otimizar a escrita de códigos na linguagem CSS, fato este que necessariamente implica na diminuição da quantidade de código escrito.
:	Menos código escrito significa mais performance na renderização das páginas, o que implica em maior velocidade na exibição da informação para o usuário final.



<h2 id="where-run">Onde funciona</h2>
Uma característica interessante do `LESS CSS` é que este funciona tanto do lado do `cliente` quanto do lado do `servidor` (neste último utilizando **Node.js**[^sign-nodejs] e __Rhino__[^sign-rhino]). Assim, podemos “escolher” o ambiente para renderização do código LESS.


<h2 id="advantages">Vantagens</h2>
A vantagem de ser um `Pré Processador`[^sign-preprocessador], é de poder minimizar o trabalho manual e facilitar o entedimento, assim como o `LESS` existe tambem outras frameworks tais como `SASS` e `STYLUS`.

Alem de ser <del>foda</del> fácil de estudar, ele aponta onde ocorre o erro. [Ampliar imagem][image]

![image][image]


****

<h2 id="examples">Exemplos</h2>

####Com LESS
```
#BoxTexto {
	color: #000;
	background: #EFEFEF;
	a { text-decoration: underline; }
	p { font-family: Arial; }
}
```

####Compilado p/ CSS
```
#BoxTexto { color: #000; background: #EFEFEF; }
#BoxTexto a { text-decoration: underline; }
#BoxTexto p { font-family: Arial; }
#BoxTexto x {...} #BoxTexto y {...}
#BoxTexto z {...}
```

***
<h3 id="variables">Variaveis</h3>

```
@colorGray: #767676;
@bg-icons: '../img/BG_Icons_SHOP.png';
@radius: 20px;
@pix: 1px;
@time: .5s;
```

<h3 id="mixins">Mixins</h3>

```
.rounded-corners {
	-webkit-border-radius: @radius;
	-moz-border-radius: @radius;
	-o-border-radius: @radius;
	border-radius: @radius;
}
```

Exemplos `lighten` `darken`
```
.color-light (@light: 25%) {
	color: lighten(@colorGray, @light);
}
```

```
.mg(@numa: 0; @numb: 0; @numc: 0; @numd: 0) {
	margin: (@numa) *@pix (@numb) *@pix (@numc) *@pix (@numd) *@pix;
}
```

Utilizando Guarded Mixins `iscolor` `isstring` `iskeyword` `isurl`
```
.size (@width; @height) when (isnumber(@width)) {
	width: (@width) * @px;;
	height: (@height) * @px;;
}
```

```
.icon (@pos-x; @pos-y; @width; @height; @display:block) {
	background: url(@bg-icons) no-repeat (@pos-x)*-1px (@pos-y)*-1px;
	display: @display;
	.size(@width; @height);
}
```

```
.transition(@time) {
	-webkit-transition: @time;
	-moz-transition: @time;
	-o-transition: @time;
	transition: @time;
}

.opacity(@opacity) {
	opacity: @opacity / 100;
}

a {
	.transition(all 0.4s);
	&:hover {
		.opacity(70);
	}
}
```

***
<h3 id="imports">Import</h3>

:	[Arquivo unico][ref3]
```
lessc /media/Templates/Bootstrap/less/bootstrap.less /home/soffner/Documents/bootstrap.css
```
:	[Arquivo compilado][ref4]



***
<h2 id="how-less">Utilizando LESS no projeto</h2>

Link `.less` no stylesheets
```
<link rel="stylesheet/less" type="text/css" href="styles.less" />
```

Faça o Download do `.js` e o inclui no `<head>`
```
<script src="less.js" type="text/javascript"></script>
```

####Compilador
Agora em `Server-side` ou `client` é preciso instalar via `npm`
```
npm install -g less
```

Primeiro comando apos instalar
```
lessc styles.less
```

E esse para compilar (o transforma em css)
```
lessc styles.less > styles.css
```

:	`styles.less` é onde o arquivo se encontra
:	`styles.css` é o caminho onde será criado


***
<h2 id="references">Referencias</h2>

**LESS inovação de framework para CSS**
>Sobre LESS // Onde funciona?
>>*[Fabricio Sanchez][ref1]*

>Exemplos
>>*[Documentação LESS][ref5]*

>>*[Instalação LESS][ref6]*

>>*[Moar!! Mixins][ref7]*

>>*[Moar!! Exemplos][ref8]*


>Markdown
>>*[Daring Fireball][ref2]*

>Créditos
>>*[Yuri Soffner][github]*

***
### Termos
[^sign-less]: **LESS**: *é um termo da lingua inglesa que designa “menos – menor quantidade”.*
[^sign-nodejs]: **Node-js:** *é um interpretador JavaScript do lado do servidor que altera a noção de como um servidor deveria funcionar. Seu objetivo é possibilitar que um programador crie aplicativos altamente escaláveis e escreva código que manipule dezenas de milhares de conexões simultâneas em uma, e somente uma, máquina física.*
[^sign-rhino]: **Rhino:** *is an open-source implementation of JavaScript written entirely in Java. It is typically embedded into Java applications to provide scripting to end users.*
[^sign-preprocessador]: **Pré-processador:** *é um programa que recebe texto e efectua conversões léxicas nele. As conversões podem incluir substituição de macros, inclusão condicional e inclusão de outros ficheiros.*

[ref1]: http://fabriciosanchez.com.br/2/less-css-inicio-meio-e-fim-conceitos-iniciais/ "Blog"
[ref2]: http://daringfireball.net/projects/markdown/ "Markdown"
[ref3]: http://paste.laravel.com/10fZ "Bootstrap LESS"
[ref4]: http://paste.laravel.com/10g0 "Bootstrap CSS"
[ref5]: http://www.lesscss.org/ "Documentação"
[ref6]: http://www.lesscss.org/#usage "Usage"
[ref7]: https://github.com/twbs/bootstrap/blob/master/less/mixins.less "Bootstrap Examples"
[ref8]: http://designshack.net/articles/css/10-less-css-examples-you-should-steal-for-your-projects/ "Bom saber"
[github]: https://github.com/ysoffner "Sexy :)"
[image]: http://img818.imageshack.us/img818/3835/m2au.png "Fail"