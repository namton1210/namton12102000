$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
	$('.edit').click(function(){
		$('.error').hide();
		let id = $(this).data('id');
       $.ajax({
  	url :'admin/category/'+id+'/edit',
  	type: 'get',
  	dataType: 'json',
  	success :function($result){
  		console.log($result);
  		$('.name').val($result.name);
				$('.title').text($result.name);
				if($result.status == 1){
					$('.ht').attr('selected','selected');
				}else{
					$('.kht').attr('selected','selected');
				}
  	}
  });
       

      $('.update').click(function(){
        let ten = $('.name').val();
        let status = $('.status').val();
        $.ajax({
         url : 'admin/category/'+id,
         type : 'put',
         data : {
         	name : ten,
         	status : status,
         	id:id
         },
         dataType: 'json',
         success :function($result)
         {
         	console.log($result);
         	if($result.error == 'true'){
             $('.error').show();
             $('.error').text($result.message.name[0]);
         	}
         	else{
            toastr.success($result.success,'Thông báo thành công',{timeOut:5000});
            toastr.options.progressBar = true;
            $('#edit').modal('hide');
               location.reload();
         	}
         }
        });
      });
	});
	$('.delete').click(function(){
       let id =$(this).data('id');
       $('.del').click(function(){
         $.ajax({
         	url :'admin/category/'+id,
           dataType:'json',
           type:'delete',
           success:function($result)
           {
           	 toastr.success($result.success,'Thông báo', {timeOut:5000});
           	 $('#delete').modal('hide');
               location.reload();
           }
         });
       });
	});
	 //edit producttype
	 $('.editProducttype').click(function() {
	 	let id = $(this).data('id');
	 	 $('.error').hide();
	 	$.ajax({
	 		url : 'admin/producttype/'+id+'/edit',
	 		dataType :'json',
	 		type : 'get',
             success : function($result){
             	$('.name').val($result.producttype.name);
             	var html = '';
             	$.each($result.category,function($key,$value){
             		
                  if($value['id'] == $result.producttype.idcategory)
                  {
                     html +='<option value='+$value['id']+'selected>';
                     html += $value['name'];
                       html += '</option>';
                  }else
                  {
                      html +='<option value='+$value['id']+'>';
                     html += $value['name'];
                       html += '</option>';
                  }
             	});
             	$('.idcategory').html(html);
             	if($result.producttype.status == 1){
             		$('.ht').attr('selected','selected');
             	}
             	else{
             		$('.kht').attr('selected','selected');
             	}
             }
	 	});
	 	$('.updateProductType').click(function() {
	 		let idcategory = $('.idcategory').val();
	 		let name = $('.name').val();
	 		let status = $('.status').val();
	 		$.ajax({
	 			url : 'admin/producttype/'+id,
	 			dataType :'json',
	 			data: {
	 				idCategory : idcategory,
	 				name : name, 
	 				status :status,
	 			},
	 			type: 'put',
	 			success : function($data){
	 				if($data.error == 'true'){
             $('.error').show();
             $('.error').text($data.message.name[0]);
         	}
         	else{
            toastr.success($data.result,'Thông báo thành công',{timeOut:5000});
           
            $('#edit').modal('hide');
               location.reload();
         	}
	 			}
	 		})
	 	});
	 });
	 $('.deleteProducttype').click(function() {
	 		let id = $(this).data('id');
	 		$('.delProductType').click(function() {
	 			$.ajax({
	 				url: 'admin/producttype/'+id,
	 				type: 'delete',
	 				dataType: 'json',
	 				 success :function($data)
           {
           	 toastr.success($data.result,'Thông báo', {timeOut:5000});
           	 $('#delete').modal('hide');
               location.reload();
           }
	 			}); 
	 		});
	 	});
   $('.cateProduct').change(function(){
    let idCate = $(this).val();
     $.ajax({
      url :'getproducttype',
      data :{
           idCate : idCate
      },
      dataType:'json',
      type:'get',
      success:function($data){
       
         let html = '';
         $.each($data,function($key,$value){
              html += '<option value='+$value['id'] +'>';
              html += $value['name'];
              html += '</option>';
         });
         $('.proTypeProduct').html(html);
      }
     });
   });

   $('.editProduct').click(function() {
        
     let id = $(this).data('id');

     $.ajax({
       url : 'admin/product/'+id+'/edit',
       type:'get',
       dataType : 'json',
       success:function(data){
        $('.name').val(data.product.name);
         $('.quantity').val(data.product.quantity);
         $('.price').val(data.product.price);
         $('.promotional').val(data.product.promotional);
         $('.imageThum').attr('src','img/upload/product/'+data.product.image);
          CKEDITOR.instances['demo'].setData(data.product.description);
               if(data.product.status == 1){
          $('.ht').attr('selected','selected');
         }else{
          $('.kht').attr('selected','selected');
         }
             let html1 ='';
             $.each(data.category,function(key,value){
             if(data.product.idcategory == value['id']){
            html1 += '<option value="'+value['id']+'" selected>';
              html1 += value['name'];
            html1 += '</option>';
          }else{
            html1 += '<option value="'+value['id']+'">';
              html1 += value['name'];
            html1 += '</option>';
          }
             });
           $('.cateProduct').html(html1);
           let html2 = '';
          $.each(data.producttype,function(key,value){
              if(data.product.idproducttype == value['id']){
            html2 += '<option value="'+value['id']+'" selected>';
              html2 += value['name'];
            html2 += '</option>';   
          }else{
            html2 += '<option value="'+value['id']+'">';
              html2 += value['name'];
            html2 += '</option>'; 
          }
             });
           $('.proTypeProduct').html(html2);

         }     
     });
     $('#updateProduct').on('submit',function(e) {
          e.preventDefault();
      $.ajax({
           url : 'admin/updatePro/'+id,
           type :'post',
           data :new FormData(this),
           contentType : false,
           cache : false,
           processData : false,
           success:function(data){
            console.log(data);
            if(data.error == 'true'){
              if(data.message.image){
                 $('.errorImage').show();
                $('.errorImage').text(data.message.image[0]);
                  $('.Image').val('');
              }
              if(data.message.name){
                 $('.errorName').show();
                $('.errorName').text(data.message.Name[0]);
                 $('.name').val('');
              }
              if(data.message.quantity){
                 $('.errorQuantity').show();
                $('.errorQuantity').text(data.message.quantity[0]);
                $('.quantity').val('');
              }
              if(data.message.price){
                 $('.errorPrice').show();
                $('.errorPrice').text(data.message.price[0]);
                $('.price').val('');
              }
              if(data.message.promotional){
                 $('.errorPromotional').show();
                $('.errorPromotional').text(data.message.promotional[0]);
                $('.promotional').val('');
              }
              if(data.message.description){
                 $('.errorDescription').show();
                $('.errorDescription').text(data.message.description[0]);
                 $('.description').val('');
              }
             
            }else{
              toastr.success(data.result,'Thông báo thành công',{timeOut:5000});
            $('#edit').modal('hide');
               location.reload();
            }
           }
      });
     });
   });
   $('.deleteProduct').click(function() {
     let id =$(this).data('id');
     $('.delProduct').click(function() {
       $.ajax({
        url:'admin/product/'+id,
        type:'delete',
        dataType:'json',
        success:function($data){
          toastr.success($data.result,'Thông báo', {timeOut: 5000});
             $('#delete').modal('hide');
               location.reload();
        }
       });
     });
   });
	});


