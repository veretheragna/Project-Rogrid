<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>modal</title>
	<link rel="stylesheet" type="text/css" href="../Styles/Page_ImgModal.css">
</head>
<body>

	<img class="ar_ModalImg" id="imageModalone" src="../../src/gm.jpg" alt="Snow" onclick="controller_Click_ImageModal('imageModalone')">
	

	<img class="ar_ModalImg" id="imageModaltwo" src="../../src/os.jpg" alt="Snow" onclick="controller_Click_ImageModal('imageModaltwo')">
	

	<img class="ar_ModalImg" id="imageModal3" src="../../src/oh.jpg" alt="Snow" onclick="controller_Click_ImageModal('imageModal3')">
	
		
	<div class="ar_Modal">
		<span class="close" onclick="controller_Btn_ImageModalClose()">&times;</span>
		<img class="modal-content img01">
	</div>

	<div class="ar_Modal">
		<span class="close" onclick="controller_Btn_ImageModalClose()">&times;</span>
		<img class="modal-content img01">
	</div>

	<div class="ar_Modal">
		<span class="close" onclick="controller_Btn_ImageModalClose()">&times;</span>
		<img class="modal-content img01">
	</div>

	


	

	

	<script type="module" src="../Client Side/Controller_Click_ImageModal.js"></script>
	<script type="module" src="../Client Side/Controller_Btn_ImageModalClose.js"></script>

</body>
</html>