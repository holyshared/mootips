(function($){

window.addEvent('domready', function(){
	var tips = new Tips({
		title: function(element){
			var title = element.getProperty('title');
			var img = element.getElement('img');
			if (!title && img){
				title = img.get('title');
			} else if (!title){
				title = element.get('html');
			}
			return title;
		},
		text: function(element){
			return element.getProperty('href');
		}
	});
	tips.attach('a');
})

}(document.id));