
	const mainColor = " #003B6C ",
	transparent = "transparent";

	(
		function	(window)
		{

			// some vars that would help us through the code ;
			const fas = document.querySelectorAll('.fa-lg'),
					blueContainer =  document.querySelector("#secondary-page div.about"),
					whiteContainer = document.querySelector("#secondary-page div.skills"),
					arrowUp = document.querySelectorAll('.arrow-up')[0],
					arrowDown = document.querySelectorAll('.arrow-down')[0], 
					backToMain = document.querySelector('#back-to-main'), 
					mainPage = document.querySelector('#main-page'), 
					secondPage = document.querySelector('#secondary-page');


			// setting up the event

			fas.forEach(
				function	(f)
				{
					f.addEventListener('click', slide);
				}
			);
			window.addEventListener('blur', tabIsBlured);
			window.addEventListener('focus', tabIsFocused);
			document.addEventListener('click', switchPages);

			
			// the functions responsible for the page behavior
			function 	slide ( e )
			{
				backToMain.style.transition = ".3s";
				backToMain.style.backgroundColor = "transparent";
				backToMain.style.color = "transparent";
				e.preventDefault();
				e.target.parentNode.parentNode.classList.add('active');

				if (e.target.classList.contains("angle-up"))
				{

					addOrRemove(blueContainer, whiteContainer, e.target.parentNode);
					move(arrowDown, e.target.parentNode);
					// giving the clickable id to the element we need
					AddClickableId(document.querySelector('.skills--title h1'),document.querySelector('.about--title h1'));
					document.querySelector('.top-left-corner').style.color = mainColor;

				}
				else if (e.target.classList.contains("angle-down"))
				{

					addOrRemove(whiteContainer, blueContainer, e.target.parentNode);
					move(arrowUp, e.target.parentNode);
					AddClickableId(document.querySelector('.about--title h1'), document.querySelector('.skills--title h1'));
					
					setTimeout(
						function	()
						{
							document.querySelector('.top-left-corner').style.transition = ".7s";
							document.querySelector('.top-left-corner').style.color = "white";
						}
					,200);

				}
				else if (e.target.classList.contains("close"))
				{

					resetClasses ();   
					document.querySelector('.top-left-corner').style.color = transparent;

				} 
			}

			// the function that makes sections behave according to what arrow the client clicked
			// the behavior is decided in the function call
			function 	addOrRemove ( addGone, addTakeOver, event ) 
			{ 
				addGone.classList.add("gone");
				addGone.classList.remove("takes--over");

				addTakeOver.classList.add("takes--over");
				
				addTakeOver.classList.remove("gone");

				event.classList.add('go-up');
				event.classList.remove('go-down');
				event.style.zIndex = 0 ;
			}

			// takes away all the classes that's been added via js
			function 	resetClasses () 
			{

				document.querySelectorAll('.content').forEach(
					function (c) {
						c.style.animation = "disappear .5s";
						c.style.animationFillMode = "forwards";
						setTimeout(() => {
							c.style.display ="none";
						}, 500);
					}
				);

				setTimeout(() => {
					document.querySelectorAll('h1').forEach(
						function (h1) {
							h1.removeAttribute('id');
							h1.style.display = "block";
							h1.removeEventListener('click', appearContent);
						}
					);

					document.querySelectorAll("#secondary-page div").forEach(
						function (c) {
							setTimeout(function () {
								c.classList.remove('gone');
							}, 30);

							c.classList.remove('takes--over');
							c.classList.remove("active");
						}
					);
					document.querySelectorAll(".arrow").forEach(
						function (a) {
							a.classList.remove('go-up');
							a.classList.remove('go-down');
							a.classList.remove('vanish');
						}
					);

					document.querySelector('.content').style.display = "none";

					backToMain.style.backgroundColor = mainColor;
					backToMain.style.color = "white";

				}, 500);
			}

			// trying to make arrows behavior general

			function 	move ( firstArrow, parent ) 
			{
				var move = "";
				if (parent.classList.contains('arrow-up'))
				{
					move = "go-down";
					antiMove = "go-up";
				}
				else if (parent.classList.contains('arrow-down'))
				{
					move = "go-up";
					antiMove = "go-down";
				}

				document.querySelectorAll('.arrow').forEach(
					function	(a)
					{
						a.classList.add(move);
						a.classList.add('vanish');
					}
				);

				firstArrow.classList.remove(antiMove);
			}

			//function to add a clickable id to a certain element and remove it from another
			function 	AddClickableId (toAdd, toRemove) 
			{
				toAdd.setAttribute('id', 'clickable');
				toRemove.removeAttribute('id');
				toRemove.style.display = "none";
				// setting a click event on the clickable element ..
				toAdd.addEventListener('click', appearContent);

			}

			function 	appearContent (e)
			{
				document.querySelector('.top-left-corner.close').style.color = mainColor;

				e.target.style.display = "none";
				var containerName = e.target.getAttribute('name');
				document.querySelector(`.${containerName}--content`).style.display = "block";
				setTimeout(function	()
					{
						document.querySelector(`.${containerName}--content`).style.animation = "showUp 1s" ;
						document.querySelector(`.${containerName}--content`).style.animationFillMode = "forwards";
					
					},100);
			}

			function switchPages(e) {

				if (e.target.getAttribute('id') == "title" || e.target.getAttribute('id') == "lastName" || e.target.getAttribute('id') == "subTitle" || e.target.classList.contains('center') || e.target.parentNode.classList.contains('go-in'))
				{
					// mainPage.classList.add("collapse");
					mainPage.style.display = "none" 
					document.querySelector('.go-in').style.display = "none";
					// secondPage.classList.add("appear");
					secondPage.style.display = 'block';
					
					backToMain.style.transition = ".5s";
					backToMain.style.backgroundColor = mainColor;
					backToMain.style.color = "white";
				} 
				else if (e.target.getAttribute('id') == "back" || e.target.getAttribute('id') == "back-to-main" || e.target.classList.contains('fa-go-back') ) 
				{
					backToMain.style.backgroundColor = transparent;
					backToMain.style.color = transparent;
					document.querySelector('.close').style.color = transparent;

					document.querySelector('.go-in').style.display = "block";
					secondPage.style.display = "none";
					mainPage.style.display = "block";
				}

			}

			// this is responsible for : when a user leaves your tab the title of that tab changes to "i miss you"
			// when he comes back it goes back to normal
			function 	tabIsBlured() 
			{
				window.document.getElementsByTagName('title')[0].innerHTML = "I MISS YOU :(" ;
			};
			function 	tabIsFocused() 
			{
				window.document.getElementsByTagName('title')[0].innerHTML = "HAMDAOUI HAMZA " ;
			};
			
		}
	)(window);

