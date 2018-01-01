//CONFIGURAÇÃO DE MODO
$(".mode-selection").on("click", function() {
    //alterar cor ativa no menu
    $(".mode-selection").removeClass("active");
    $(".mode-selection").each(function() {
    	var divRemove = $(this).attr("data-active");
    	$(divRemove).removeClass("show");
    	$(divRemove).addClass("hidden");
    });
    $(this).addClass("active");
    var div = $(this).attr("data-active");
    // $(div).removeClass("hidden");
    localStorage.mode = $(this).attr("data-active");
    console.log("DW MODE : " + localStorage.mode);
    $(div).addClass("show");
    // ============================
    // DRAWING / FORMA
    // ============================
    if (localStorage.mode == "#forma") {
    	habDragResi("disabled");
    	if (!localStorage.forma)
    		localStorage.forma = "#square";
    	alteraCursor(verificarForma());
    };
    // ============================
    // SELECT
    // ============================
    if (localStorage.mode == "#select") {
    	alteraCursor("default");
    	habDragResi("habled");
    };
    // ============================
    // CAMADAS
    // ============================
    if (localStorage.mode == "#camadas") {
    	alteraCursor("default");
    	habDragResi("habled");

    	var lst = new listaObjetos();
    	lst.sortableList();
        lst.atualizarLista();
    };
});