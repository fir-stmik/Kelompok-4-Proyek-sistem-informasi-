
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		width: 50%;
		border :solid 1px silver;
		border-collapse: collapse;
		margin-top: 30px;
	}
	table th{
		background: lavender;
		padding: 10px 20px;
		color: white;
		border: solid 1px silver;
	}
	table td{
		padding:8px;
		border:solid 1px silver;
	}
	#btn_link{
		margin-bottom: 20px;
		display: inline-block;
		text-decoration: none;
		background: deepskyblue;
		color: white;
		border-radius: 5px;
		padding: 6px 10px;
	}
	#btn_link:hover{
		background: silver;
		color: blue;
	}
	input[type='text']{
		width: 100%;
		border :solid 1px silver;
		border-radius:20px;
		padding: 8px 10px;
		font-size: 16px;
	}
	
	input[type='submit']{
		background: deepskyblue;
		color: white;
		border: none;
		padding: 6px 10px;
		font-size: 16px;
		border-radius:10px;
		cursor: pointer;
	}
	input[type='submit']:hover{
		background: silver;
		color: blue;

	}
	img{
			margin-top: 8px;
			display: inline-block;
			width: 40px;
			height: 40px;
		}
			#m{
		
		background: deepskyblue;
		padding: 10px 15px;
		}
		#m a{
			color: white;
			text-align: center;
			text-decoration: none;
			text-align: right;
			font-size: 20px;
			
		}
		#m h2{
			display: inline-block;
			color: white;
			margin-left: 5px;
			font-size: 20px;
			margin-right: 73%;
		}
		#m a:hover{
			background: white;
			color: black;
			border-radius: 30px;
			padding: 10px 15px;
			font-weight: bold;
		}
	
	</style>
</head>
<body>
	<div id="m">
	<img src="icons.png">
	<h2>Tambah Buku</h2>
	<a href="?ke=beranda">LOGOUT</a>
</div>
	<table>
		<tr>
			<td>No Buku</td>
			<td>
			<input type="text" name="tbarang">
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td>
			<input type="text" name="tharga">
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td>
			<input type="text" name="tjumlah">
			</td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>
			<input type="text" name="tjumlah">
			</td>
		</tr>
	
		<tr>
			<td>
				
			</td>
			<td>
			<input type="submit" name="bsimpan" value="Batal">
			<input type="submit" name="bsimpan" value="Simpan">
			</td>
		</tr>
	
	</table></form>
</body>
</html>