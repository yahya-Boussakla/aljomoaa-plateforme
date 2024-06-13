
$(".like").click(function(event){
    
    var isLiked = $(event.target).attr('data-is_liked');
    var idBlog = $(event.target).attr('id-blog');
    
    $.ajax({
      url: "/jomoaa/api/like",
      method: "post",
      data : {
        is_liked : isLiked,
        id_blog : idBlog,
        },
        success: function(res){
          console.log(res);

      if (res == 'not_conected') {
        window.location.href = "http://localhost/jomoaa/authent/login";
      }
      else{
        if (res == 'is_liked') {
          $(".like i").attr('data-is_liked', 'true');
        }else{
          
          $(".like i").attr('data-is_liked', 'false');
        }
        if ($(event.target).hasClass('fa-solid')) {
          $(event.target).addClass('fa-beat');
  
          setTimeout(function(){
            $(event.target).removeClass('fa-beat');
        },700);
          $(event.target).removeClass('fa-solid').addClass('fa-regular');
          $(event.target).css('color', 'black');
          var likesHolder = $(event.target).closest('.like').find('p');
          var likes = likesHolder.text();
          likes --;
          likesHolder.text(likes);   
          
        } else {
          $(event.target).addClass('fa-beat');
  
          setTimeout(function(){
            $(event.target).removeClass('fa-beat');
        },700);
        $(event.target).addClass('fa-solid').removeClass('fa-regular');
        $(event.target).css('color', 'red');
        var likesHolder = $(event.target).closest('.like').find('p');
        var likes = likesHolder.text();
        likes ++;
        likesHolder.text(likes);       
        }          
  
      }

    }});
  });

$(".save").click(function(event){

  var isSaved = $(event.target).attr('is_saved');
  var idBlog = $(event.target).attr('id-blog');

  $.ajax({
    url: "/jomoaa/api/save",
    method: "post",
    data : {
      is_saved : isSaved,
      id_blog : idBlog,
      },
      success: function(res){
        console.log(res);

        if (res == 'not_conected') {
          window.location.href = "http://localhost/jomoaa/authent/login";
        }
        else{
          if (res == 'is_saved') {
            $(event.target).attr('is_saved', 'true');
          }else{
            
            $(event.target).attr('is_saved', 'false');
          }
          if ($(event.target).hasClass('fa-solid')) {
            $(event.target).addClass('fa-beat');
    
            setTimeout(function(){
              $(event.target).removeClass('fa-beat');
          },600);
            $(event.target).removeClass('fa-solid').addClass('fa-regular');
            $(event.target).css('color', 'black');
            
          } else {
            $(event.target).addClass('fa-beat');
            setTimeout(function(){
              $(event.target).removeClass('fa-beat');
          },600);
          $(event.target).addClass('fa-solid').removeClass('fa-regular');
          $(event.target).css('color', '#ffb860');     
          }
        }
  }});
});


let container = document.getElementsByClassName("ql-editor");
  container[0].style= "text-align: right;";
  container[0].setAttribute("spellcheck","false");

  let searchForm = document.getElementById('Myform');