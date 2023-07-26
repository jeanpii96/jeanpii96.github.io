(function ($) {
 "use strict";
	
	$(document).ready(function() {
		 $('#data-table-basic').DataTable({
			language: {
				processing: "Tratamiento en curso...", // Texto que se muestra mientras se procesa la tabla.
				lengthMenu: "Mostrar _MENU_", // Texto que se muestra en el menú desplegable de la cantidad de elementos por página.
				infoEmpty: "No hay Proyectos disponibles.", // Texto que se muestra cuando la tabla está vacía.
				zeroRecords: "No existe este Proyecto.", // Texto que se muestra cuando no se encuentran registros con el término de búsqueda.
				emptyTable: "No hay Proyectos disponibles.", // Texto que se muestra cuando la tabla está vacía.
				infoPostFix: "", // Texto adicional que se añade después del texto de información de la tabla.
			},
			lengthMenu: [
				[10, 15, 20], // Valores que se muestran en el menú desplegable de la cantidad de elementos por página.
				[10, 15, 20]
			],
			autoWidth: false, // Desactiva el ajuste automático del ancho de las columnas.
			responsive: true, // Activa la funcionalidad de diseño responsivo de DataTables.
			columnDefs: [ // Define las opciones de las columnas.
				{
					width: '10%',
					targets: 0
				}, // Ancho de la primera columna
				{
					width: '10%',
					targets: 1
				}, // Ancho de la segunda columna
				{
					width: '15%',
					targets: 2
				}, // Ancho de la tercera columna
				{
					width: '15%',
					targets: 3
				}, // Ancho de la cuarta columna
				{
					width: '10%',
					targets: 4
				}, // Ancho de la quinta columna
				{
					width: '5%',
					targets: 5
				}, // Ancho de la sexta columna
				{
					width: '10%',
					targets: 5
				} // Ancho de la septima columna
			]
		});
	});
})(jQuery); 