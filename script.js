//Ajax call for the login Form
//Once the form is submitted
$("#loginform").submit(function(event){
    // prevent default php processing
    event.preventDefault();
    // collect user inputs 
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    // send them to login.php using AJAX
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            
            if(data == "success"){
                window.location = "mainpage.php";
            } else {
                $('#loginmessage').html(data);
            }
            
        },
        error: function(){
            $("#loginmessage").html("<div class='alert alert-danger'>There was error with the Ajax Call. Please try again later</div>");
        }
    });
});


//Ajax Call for the data form 
//Once the form is submitted
$("#dataform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
//    console.log(datatopost);
    //send them to signup.php using AJAX
    $.ajax({
        url: "enterdata.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $(".resultMessage").html(data);
                //alert("Data entered into database");
                //location.reload();
                //setTimeout("location.reload();",2000);
            }
        },
        error: function(){
            $("#resultMessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    
    });

});

//Ajax Call for the to load data to page
//Once the form is submitted
$(function(){
    //define variables
    //var activeNote = 0;
   // var editMode = false;
    //load notes on page load: Ajax call to loadnotes.php
    $.ajax({
        url: "loaddata.php",
        success: function (data){
            $('tbody').html(data);
           // clickonNote(); clickonDelete();
            
        },
        error: function(){
            $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                    $("#alert").fadeIn();
        }
    
    });
});



//Ajax Call for the search form 
//Once the form is submitted
$("#searchform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
    $.ajax({
        url: "search.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data == 'Nothing'){
                $(".resultMessage").html("<div class='alert alert-warning'>The record is not in the database!</div>");
                $("td").remove(); // remove the existing content from the table 
                
            }else{
                $("td").remove(); // remove the existing content from the table 
                $("tbody" ).append(data); //re-populate the table with the search field
            }
        },
        error: function(){
            $(".resultMessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    
    });

});



//Ajax Call for the Registration form (New User)
//Once the form is submitted
$("#registrationform").submit(function(event){ 
    //prevent default php processing
    event.preventDefault();
    //collect user inputs
    var datatopost = $(this).serializeArray();
    console.log(datatopost);
    //send them to registration.php using AJAX
    $.ajax({
        url: "registration.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data){
                $(".resultMessage").html(data);
                //alert("Data entered into database");
                //location.reload();
                //setTimeout("location.reload();",2000);
            }
        },
        error: function(){
            $(".resultMessage").html("<div class='alert alert-danger'>There was an error with the Ajax Call. Please try again later.</div>");
        }
    
    });

});