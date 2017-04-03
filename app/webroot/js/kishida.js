/**
 *
 */
$("#clear").bind("click", function(){
    //$(this.form).find("textarea, :text, select").val("").end().find(":checked").prop("checked", false);
	$(this.form).find("textarea, :text, select").val("").end();
    //$("input[name='iro']").val(["1"]);
    //$("#and").attr("checked", true);
});