$(document).ready(function(){
    
    $('.notification_li').click(function(){
        
        $('.notification_li .notification').fadeToggle();
    });
    $('.active .nav-link .search .fa-search').click(function(){
        var q=$('#search_box').val().toLowerCase();
        if(q!=""){
            window.location.href="http://localhost/web-athon/search.php?q="+q;
        $('#search_box').val("");
        }
        
    });
   
// available book search --------------------------------------------------------------------------------------------
    $('.available_container_f .universal_search_box input').keyup(function(){
        var search=$(this).val().toLowerCase();
        console.log(search);
    var name_in_list = $('.box');
    name_in_list.filter(function(){
        $(this).toggle($(this).find('.box_book_name').text().toLowerCase().indexOf(search) > -1)
    });
    });
// issued book search -------------------------------------------------------------------------------------------------
    $('.issued_container_f .universal_search_box input').keyup(function(){
        var search=$(this).val().toLowerCase();
        console.log(search);
    var name_in_list = $('.issued_content .table tbody tr');
    name_in_list.filter(function(){
        $(this).toggle($(this).find('td:nth-child(2)').text().toLowerCase().indexOf(search) > -1)
    });
    });

    // suggestion search -------------------------------------------------------------------------------------------------
$('.active .nav-link .search input').keyup(function(){
    suggestion_display();
    console.log("jj");
})
    function suggestion_display(){
        var q=$('.active .nav-link .search input').val().toLowerCase();

        $.ajax({

            url: "suggestion_m.php",
            type: "POST",
            data: {q:q},
            success: function(result){
                $('.suggestion_ul li').remove();
                // alert(result);
                $('.suggestion_ul').append(result);
               
            }
        });
    }

    $('.active .nav-link .search input').focus(function(){
        $('.suggestion').show();
    })
    $('.active .nav-link .search input').focusout(function(){
        $('.suggestion').hide();
    });
    $('.suggestion .suggestion_ul').on("click",'li',function(){
        console.log("hii");
        console.log($(this).html());
        
    });

    // login ------------------------------------------------------------


    $('#complain_btn').click(function(){
        complain();
        console.log("complain click");
    })
        function complain(){
           var complain_reg=$('#complain_reg').val();
           var student_name=$('#c_student_name').val();
           var msg=$('#msg').val();
            $.ajax({
    
                url: "complain_m.php",
                type: "POST",
                data: {complain_reg:complain_reg,student_name:student_name,msg:msg},
                success: function(result){
                    alert(result);
                //    $('.logout').css('display','inline-block');
                //    $('#submit').css('display','none');
                }
            });
        }
        // $('.logout').click(function(){
        //     $('#submit').css('display','inline-block');
        // });
        



        $('.fa-heart').click(function(){
            var v=$(this).css('color');
            var likes=$(this).next().html();
            console.log(v);
            if(v!='rgb(33, 37, 41)')
                {
                    console.log('syam');
                    $(this).removeClass('fa');
                    $(this).addClass('far');
                   $(this).css('color','rgb(33, 37, 41)');
                   likes--;
            $(this).next().html(likes);
                }
            else{
                $(this).removeClass('far');
           $(this).addClass('fa');
            $(this).css('color','hotpink');
            likes++;
            $(this).next().html(likes);
            }
   //         $(this).css('background','red');
        });
})