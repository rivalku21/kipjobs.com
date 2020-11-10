
var count = 0;
var count2 = 0;

const onequestion = document.querySelectorAll('.onequestion');

const add_question = document.getElementById('add_question');
const question_form = document.getElementsByClassName('question_form');

add_question.addEventListener('click', function(){
	count2++;
	let cloneform = document.querySelector('#mustcopy').cloneNode( true );
	document.querySelector('.formCopyHere').appendChild( cloneform );
	cloneform.setAttribute( 'id', 'form'+count2 );

	const addKey = document.querySelector('.onequestion .keyword_copy_here');
	addKey.setAttribute('class', 'keyword_copy_here'+count2);

});

function addKeyword() {
	count++;
	let clonequestion = document.querySelector('.onequestion .keyword_copy').cloneNode( true );
	document.querySelector('.keyword_copy_here').appendChild( clonequestion );
	clonequestion.setAttribute( 'id', 'keyword'+count );

	let clonepoint = document.querySelector('.onequestion .point_copy').cloneNode( true );
	document.querySelector('.keyword_copy_here').appendChild( clonepoint );
	clonepoint.setAttribute( 'id', 'point'+count );
}

const textarea = document.querySelector('.formDescrip textarea');

textarea.addEventListener('keydown', function(){
	var el = this;
	  setTimeout(function(){
	    el.style.cssText = 'height:auto; padding:0';
	    // for box-sizing other than "content-box" use:
	    el.style.cssText = '-moz-box-sizing:content-box';
	    el.style.cssText = 'height:' + el.scrollHeight + 'px';
	  },0);	
});
