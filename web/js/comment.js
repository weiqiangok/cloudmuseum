$('#search').click(function(){
	var sname = $('#select option:selected').text();
	$('#name').val(sname);
	$.ajax( {  
	      url:'/upload/searchcontent',
	      data:{name:sname},  
	      type:'post',
	      cache:false,
	      dataType: 'json', 
	      success:function(result) {
	    	  $('#payname').val(result.payname);
	    	  $('#email').val(result.email);
	    	  $('#phoneNum').val(result.phoneNum);
	    	  $('#price').val(result.price);
	    	  $('#height').val(result.height);
	    	  $('#length').val(result.length);
	    	  $('#wide').val(result.wide);
	    	  $('#years').val(result.years);
	    	  $('#material').val(result.material);
	    	  $('#comment').show();
	      },  
	      error : function() {  
	         alert("异常！");
	      }  
	 });
})
