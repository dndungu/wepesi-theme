(function(){
	var email = /^([a-z0-9_\.\+-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/i;
	var events = {
		focus: function(event){
			var target = event.target || event.srcElement;
			if(target.value == target.getAttribute("default-value"))
			   target.value = "";
		},
		blur: function(event){
			var target = event.target || event.srcElement;
			if(!target.value.trim().length)
				target.value = target.getAttribute("default-value");						
		},
		change: function(event){
			var target = event.target || event.srcElement;
			if(!email.test(target.value)){
				target.style.border = "1px solid #f00";
				target.style.backgroundColor = "#ffd4d4";
				target.value = "";
			}
		}
	};
	var tags = document.getElementsByTagName('input');
	for(var i = 0; i < tags.length; i++){
		var tag = tags[i];
		for(var j in events){
			var type = 'on' + j;
			tag[type] = events[j];
		}
		tag.setAttribute("default-value", tag.value);
	}
	document.forms[0].onsubmit = function(event){
		if(!email.test(this.elements[0].value))
			event.preventDefault();
	};
	console.log(document.getElementsByTagName("body")[0].className);
	document.getElementsByTagName("body")[0].className += " home";
}());
