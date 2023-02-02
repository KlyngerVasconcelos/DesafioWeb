


var SmartMultiFiled = (function(){
    var rowcount, html, addBtn, tableBody;

    addBtn = $("#addNew");
    rowcount = $("#autocomplete_table tbody tr").length+1;
    tableBody = $("#autocomplete_table tbody");


    function formHtml() {
        html = '<tr id="row_'+rowcount+'">';
		html += '<td>';
		html += '<p class="">';
        html += '<input type="text" data-type="patrimonio_patrimonio" name="patrimonio_patrimonio[]" id="patrimonio_patrimonio_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
		html += '</p>';
        html += '</td>';
		html += '<td>';
		html += '<p class="esp">';
        html += '<input type="text" data-type="des" name="des[]" id="des_'+rowcount+'" class="form-control autocomplete_txt" autocomplete="off">';
		html += '</p>';
        html += '</td>';
		html += '<td>'; 
		html += '<p class="">';
		html += '<a href="#" id="delete_'+rowcount+'" scope="row" class="delete_row"><img src="./img/minus.svg" alt=""></a>';
		html += '</p>';
		html += '</td>';
        html += '</tr>';
        rowcount++;
        return html;
    }
    function getFieldNo(type){
        var fieldNo;
        switch (type) {
            case 'patrimonio_patrimonio':
                fieldNo = 0;
                break;
			case 'des':
                fieldNo = 1;
                break;
            default:
                break;
        }
        return fieldNo;
    }

    function handleAutocomplete() {
        var type, fieldNo, currentEle; 
        type = $(this).data('type');
        fieldNo = getFieldNo(type);
        currentEle = $(this);

        if(typeof fieldNo === 'undefined') {
            return false;
        }

        $(this).autocomplete({
            source: function( data, cb ) {	 
                $.ajax({
                    url:'ajax.php',
                    method: 'GET',
                    dataType: 'json',
                    data: {
                        patrimonio:  data.term,
                        fieldNo: fieldNo
                    },
                    success: function(res){
                        var result;
                        result = [
                            {
								label: 'Patrimonio "' +data.term+ '" não existe ',
                                value: ''
                            }
                        ];

                        if (res.length) {
                            result = $.map(res, function(obj){
                                var arr = obj.split("|");
                                return {
                                    label: arr[fieldNo],
                                    value: arr[fieldNo],
                                    data : obj
                                };
                            });
                        }
                        cb(result);
                    }
                });
            },
            autoFocus: true,	      	
            minLength: 2,
            select: function( event, ui ) {
                var resArr, rowNo;
                
                
                rowNo = getId(currentEle);
                resArr = ui.item.data.split("|");	
                
            
                $('#patrimonio_patrimonio_'+rowNo).val(resArr[0]);
				$('#des_'+rowNo).val(resArr[1]);
            }		      	
        });
    }

    function getId(element){
        var id, idArr;
        id = element.attr('id');
        idArr = id.split("_");
        return idArr[idArr.length - 1];
    }

    function addNewRow() { 
        tableBody.append( formHtml() );
    }

    function deleteRow() { 
        var currentEle, rowNo;
        currentEle = $(this);
        rowNo = getId(currentEle);
        $("#row_"+rowNo).remove();
    }

    function registerEvents() {
        addBtn.on("click", addNewRow);
        $(document).on('click', '.delete_row', deleteRow);
        //register autocomplete events
        $(document).on('focus','.autocomplete_txt', handleAutocomplete);
    }
    function init() {
        registerEvents();
    }

    return {
        init: init
    };
})();



$(document).ready(function(){
    SmartMultiFiled.init();
});