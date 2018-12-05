//consoleText(['a wedding'], 'textwords');
function consoleText(words, id, colors) {
	if (colors === undefined) colors = ['#fff'];
	var visible = true;
	var con = $('console');
	var letterCount = 1;
	var x = 1;
	var waiting = false;
	var target = document.getElementById(id);
	target.setAttribute('style', 'color:' + colors[0])
	setInterval(function () {
		if (letterCount === 0 && waiting === false) {
			waiting = true;
			target.innerHTML = words[0].substring(0, letterCount)
			window.setTimeout(function () {
				var usedColor = colors.shift();
				colors.push(usedColor);
				var usedWord = words.shift();
				words.push(usedWord);
				x = 1;
				target.setAttribute('style', 'color:' + colors[0])
				letterCount += x;
				waiting = false;
			}, 1000)
		} else if (letterCount === words[0].length + 1 && waiting === false) {
			waiting = true;
			window.setTimeout(function () {
				x = -1;
				letterCount += x;
				waiting = false;
			}, 1000)
		} else if (waiting === false) {
			target.innerHTML = words[0].substring(0, letterCount)
			letterCount += x;
		}
	}, 180)
	setInterval(function () {
		if (waiting === true) {
			$('#console').attr('class', 'console-underscore'); //hidden
		} else {
			$('#console').attr('class', 'console-underscore');
		}
	}, 400)
}
consoleText(
	[
		'evelop',
		'esign',
		'oable',
		'ainty',
		'apper',
		'esire',
		'ominant',
		'ynamic',
		'ivine',
		'iligent',
		'irections',
		'iscovery',
	]
	, 'keywords');

// Background particle Setup
particlesJS('particles-js', {
		"particles": {
			"number": {
				"value": 80,
				"density": {
					"enable": true,
					"value_area": 800
				}
			},
			"color": {
				"value": "#ffffff"
			},
			"shape": {
				"type": "circle",
				"stroke": {
					"width": 0,
					"color": "#000000"
				},
				"polygon": {
					"nb_sides": 5
				},
				"image": {
					"src": "img/github.svg",
					"width": 100,
					"height": 100
				}
			},
			"opacity": {
				"value": 0.5,
				"random": false,
				"anim": {
					"enable": false,
					"speed": 1,
					"opacity_min": 0.1,
					"sync": false
				}
			},
			"size": {
				"value": 3,
				"random": true,
				"anim": {
					"enable": false,
					"speed": 40,
					"size_min": 0.1,
					"sync": false
				}
			},
			"line_linked": {
				"enable": true,
				"distance": 150,
				"color": "#ffffff",
				"opacity": 0.4,
				"width": 1
			},
			"move": {
				"enable": true,
				"speed": 6,
				"direction": "none",
				"random": false,
				"straight": false,
				"out_mode": "out",
				"bounce": false,
				"attract": {
					"enable": false,
					"rotateX": 600,
					"rotateY": 1200
				}
			}
		},
		"interactivity": {
			"detect_on": "window",
			"events": {
				"onhover": {
					"enable": true,
					"mode": "repulse"
				},
				"onclick": {
					"enable": false,
					"mode": "push"
				},
				"resize": true
			},
			"modes": {
				"grab": {
					"distance": 400,
					"line_linked": {
						"opacity": 1
					}
				},
				"bubble": {
					"distance": 400,
					"size": 40,
					"duration": 2,
					"opacity": 8,
					"speed": 3
				},
				"repulse": {
					"distance": 200,
					"duration": 0.4
				},
				"push": {
					"particles_nb": 4
				},
				"remove": {
					"particles_nb": 2
				}
			}
		},
		"retina_detect": true
	}

);