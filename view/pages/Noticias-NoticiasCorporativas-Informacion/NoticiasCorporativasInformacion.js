document.addEventListener('DOMContentLoaded', function(){
  //View Likes
 var btnViewNavigation = document.getElementById('btnViewNavigation');
 var btnViewComments = document.getElementById('btnViewComments');
 var btnViewLikes = document.getElementById('btnViewLikes');
 btnViewNavigation.addEventListener('click', viewNavigation);
 btnViewComments.addEventListener('click', viewComments);
 btnViewLikes.addEventListener('click', viewLikes);

});



// Functions
function viewNavigation(){
  var navigation = document.getElementById('navigation');
  navigation.style.display = '';
}
function viewComments(){
  var commentsContainer = document.getElementById('comments');
  var likesContainer = document.getElementById('likes');
  commentsContainer.style.display = '';
  likesContainer.style.display = 'none';
  btnViewComments.className = 'nav-link active';
  btnViewLikes.className = 'nav-link';
}
function viewLikes(){
  var commentsContainer = document.getElementById('comments');
  var likesContainer = document.getElementById('likes');
  commentsContainer.style.display = 'none';
  likesContainer.style.display = '';
  btnViewComments.className = 'nav-link';
  btnViewLikes.className = 'nav-link active';
}
