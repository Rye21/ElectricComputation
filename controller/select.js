/* $(document).ready(function(){
    $("#code_number").keypress(function () {
	var why = $('input[name="code_number"]').val();
        function show_all() {
            $.ajax({
                type: "POST",
                url: "select.php",
                data:{action: why},
                success: function (data) {
                    $("#id").show();
                    $("#content").html(data);
                }
            });
        }
        show_all();
    });
});
$(document).ready(function(){
    $("#code_number").keyup(function () {
	var why = $('input[name="code_number"]').val();
        function show_all() {
            $.ajax({
                type: "POST",
                url: "select.php",
                data:{action: why},
                success: function (data) {
                    $("#id").show();
                    $("#content").html(data);
                }
            });
        }
        show_all();
		 document.getElementById("KVA").value = '' ;
    });
});
 */