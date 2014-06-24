/*********************************
 * @Author  WebSlide Studio
 * @Site    http://www.webslide.hu 
 * @Version 0.2
 *  
 * Open source project
 ********************************/
 
var i = 0;

var infos = true;
var files = true;

/**
 * Get files problem with ajax.
 */ 
function getErrors()
{
	if (i<=fileList.length)
	{
		$.get("index.php", { file1: fileList[i],file2: fileList[i+1], file3: fileList[i+2], file4: fileList[i+3], file5: fileList[i+4], ajax: true },
			function(data){
				$('#ittjar').html(i);
				$('#list').append(data);
				progressBar(i);
				if (files!=true) { $('.infos').hide(); }
				if (infos!=true) { $('pre').hide(); }
				i = i+5;
				getErrors();
				return true;
		}).error(function() { 
			if ($('#error').hasClass('empty'))
			{
				$('#error').append('<h2>Error:</h2>');
				$('#error').removeClass('empty');
			}
			if (fileList[i])
				$('#error').append(fileList[i]+'<br>');
			if (fileList[i+1])
				$('#error').append(fileList[i+1]+'<br>');
			if (fileList[i+2])
				$('#error').append(fileList[i+2]+'<br>');
			if (fileList[i+3])
				$('#error').append(fileList[i+3]+'<br>');												
			if (fileList[i+4])
				$('#error').append(fileList[i+4]+'<br>');				
			i = i+5;
			getErrors();
			 
		});
	}                                                        
	else
	{
		$('#progressbar').css('width',500);
		$('#ellenorzes').html('Finish!');
	}
}	


/**
 * Draw progressbar status
 */ 
function progressBar(ittjar)
{
	var width = ((ittjar/fileList.length)*100)*5; 
	$('#progressbar').css('width',width); 

}


/**
 * Run
 */ 
$(document).ready(function()
{
	$('#ellenorzes, #progressbar_corner, .output').hide();
	
	$('#ennyibol, .file_count').html(fileList.length);
	
	$('#scan').on('click', function(){
		if (confirm('This script will send '+Math.ceil(fileList.length/5)+' queries to the server. Do you want to continue?'))
		{
			$('#scan').hide();
			$('#ellenorzes, #progressbar_corner, .output').show();
			getErrors();
		}
		else
		{
			$('html').html('Aborted!');
		}
	});
	
	$('#list').on('click','.item',function(){
		$(this).next('.infos').toggle();
	});
	
	$('#list').on('click','.errorInfo',function(){
		$(this).next('pre').toggle();
	});
	
	$('#toggle_files').on('click',function(){
		if (files==true) 
		{ 
			files = false; $('.infos').hide(); 
		} 
		else 
		{ 
			files = true; $('.infos').show(); 
		}
	});
	
	$('#toggle_infos').on('click',function(){
		if (infos==true) 
		{ 
			infos = false; $('pre').hide(); 
		} 
		else 
		{ 
			infos = true; $('pre').show(); 
		} 
	});			
});	
