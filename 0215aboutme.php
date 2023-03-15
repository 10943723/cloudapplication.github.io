<!DOCTYPE html>
<html>
<head>
	<title>網頁標題</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>aboutme favorite cartoon</h1>
		<nav>
			<ul>
				<li><a href="0215index.html">首頁</a></li>
                <button onclick="redirect()">點我跳轉到另一個網頁</button>

	<script>
		function redirect() {
			window.location.href = "http://localhost/0215/0215index.php?username=&password=";
		}
	</script>
				<li><a href="0215index.html">關於我們</a></li>
				<li><a href="products.html">系上課程</a></li>
				<li><a href="0215login.html">最新消息</a></li>
				<li><a href="contact.html">聯繫我們</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<h2>歡迎來到課程名稱</h2>
		<p>這裡是課程的簡介。你可以在這裡簡要地介紹的主要內容，以及最新消息。</p>
	</main>
	<footer>
		<p>&copy;版權所有 2023 111-2雲端應用109</p>
	</footer>
</body>
<style>
		img {
			width: 100%;
			height: 100%;
		}
		body {
            background-image: url("105234.png");
            background-size: cover;
            font-family: Arial, sans-serif;
        }
	    h1 {
            color:#00ff00;
	    }

	</style>
</html>
