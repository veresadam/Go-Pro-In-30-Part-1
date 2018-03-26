
<!DOCTYPE html>
<html>
	<head>
		<title>Go Pro In 30</title>
		<meta charset="utf-8">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="main.css">
		
	</head>

	<body style='font-family:"Helvetica Neue", Helvetica, Arial;'>
		<div class="container" style="margin-top: 50px;">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div id = "roplabda">
						  <div class="panel-heading">
						    <h3 class="panel-title cim">Röplabda</h3>
						  	</div>
						  	<div class="panel-body">
							  	<div class="kep">
							  		<img src="kepek/volley.jpg" alt="Volleyball" class="img-rounded elem_margin">
							  	</div>					 	
							  		<div class = "panel-text">
							  			A röplabda azon csapatsportok közé tartozik ahol a fizikai kondíció nem akkora befolyásoló tényező, mint a csapaton belüli kommunikáció, vagy az egymásba fektetett bizalom. Ha a fizikai kondíciód nem bírja a hosszutávú megterhelést, de szereted a csapatsportokat, vagy ha egyszerüen szeretnél szórakozni néhány barátoddal, a röplabda csapat a neked való hely!
									</div>
							    <div class="showOnHover">
							    	<button type="submit" class="btn btn-primary sport-gomb" data-tag = "1">Választás</button>
							    </div>
						  	</div>
						  	</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div id ="kosarlabda">
						  	<div class="panel-heading">
						  		<h3 class="panel-title cim">Kosárlabda</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class="kep">
							  		<img src="kepek/basket.png" alt="Basketball" class="img-rounded elem_margin">
							  	</div>
							  	<div class = "panel-text">
							  		A kosárlabda egy olyan sport ahol az egyén legalább annyira befolyásolható lehet, mint egy egész csapat. A játék gyakorlati elemeinek teljeskörű elsajátítása nehéznek bizonyulhat, azonban amikor ezek már megvannak esélj adatik minden játékosnak, hogy megmutassa, hogy mire képes. Ha szereted villogtatni az ügyességed a barátaid előtt, de jól tudsz csapatban is dolgozni, és fizikai kondíciód jó állapotban van, akkor vár a kosárlabda csapat!
							  	</div>
							  	<div class="showOnHover elem_margin">
							    	<button type="submit" class="btn btn-primary sport-gomb"  data-tag = "2">Választás</button>
							    </div>
						  	</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div id ="kezilabda">
						  	<div class="panel-heading">
						  		<h3 class="panel-title cim">Kézilabda</h3>
						  	</div>
						  	<div class="panel-body">
						  		<div class = "kep">
							  		<img src="kepek/hand.png" alt="Handball" class="img-rounded elem_margin">
							  	</div>
							  	<div class = "panel-text">
							    	Amennyiben szereted az akciódús csapatjátékot, ahol a fizikai erő és kézügyesség érvényesül mindenek felett, és nem bánod a meccsek folyamán megszerzett néhány karcolást, a kézilabda csapatban a helyed!<br><br>
							    	FIGYELEM!<br>
							    	A kézilabdában gyakori a durva fizikai kontaktus, amely a játékidő folyamán is szabályos, így állandóan fent áll a megsebesülés lehetősége, amelyre saját felelőségünkön vállalkozunk.<br>
							    </div>
							    <div class="showOnHover">
							    	<button type="submit" class="btn btn-primary sport-gomb" data-tag = "3" >Választás</button>
							    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script>
			var fit = <?php echo $_GET["fit"]?>;
			var id = <?php echo $_GET['id']?>;
			if(fit >= 14){
				$("#roplabda").addClass("engedelyezett");
				$("#kosarlabda").addClass("engedelyezett");
				$("#kezilabda").addClass("ajanlott");
			}else if(fit >= 10 && fit < 14){
				$("#roplabda").addClass("engedelyezett");
				$("#kosarlabda").addClass("ajanlott");
				$("#kezilabda").addClass("nem_ajanlott");
			}else{
				$("#roplabda").addClass("ajanlott");
				$("#kosarlabda").addClass("nem_ajanlott");
				$("#kezilabda").addClass("nem_ajanlott");
			}
			$(".sport-gomb").click(function(){
				var leziune = this;
				$.ajax({
					url : 'updateSport.php',
					type : 'POST',
					data:{
						id : id,
						sport : $(this).data('tag')
					},
					success: function(e){
						alert("Sikeres választás!");
						if($(leziune).data('tag') == 1){
							window.location = '/web/r_main.php?id='+String(id);
						}else if($(leziune).data('tag') == 3){
							window.location = '/web/h_main.php?id='+String(id);
						}else{
							window.location = '/web/k_main.php?id='+String(id);
						}
					},
					error: function(e){
						alert("Szerver hiba, kérem próbálja újra később vagy lépjen kapcsolatba a rendszergazdával.");
						console.log("Error " + String(e));
					}
				})
			})
		</script>
	</body>
</html>