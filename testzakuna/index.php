<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>Technical Test - ZAKUNA</title>
		<link rel='stylesheet' href='style.css' />
		<script type="text/javascript" src='jquery.js' ></script>
		<script type="text/javascript" src='my_js.js' ></script>		
	<head>
	</body>
		<div id='page'>
			<form action='controller.php' method='post' onsubmit='return switchbilangan(this);'>
				<table cellpadding='5' align='center' >
					<thead>
						<tr>
							<td colspan='2' >Masukan bilangan pada masing masing kolom masukan</td>						
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>A</td>
							<td><input type='number' name='varA' placeholder='0' /></td>
						</tr>
						<tr>
							<td>B</td>
							<td><input type='number' name='varB' placeholder='0' /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>					
							<td colspan='2' align='right'><input type='submit' name='submit' value='Proses' /></td>
						</tr>
					</tbody>
				</table>
			</form>
			
			<div id='areahasil'>
				
			</div>

			<div id="footer">
				Disarankan menggunakan browser Mozilla Firefox
			</div>
		</div>
	</body>
</html>