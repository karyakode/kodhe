<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to <?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></title>
	<script src="<?php echo base_url('assets/js/tailwindcss.js') ?>"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans flex flex-col min-h-screen">

<!-- Header -->
<header class="bg-blue-500 text-white shadow-md">
	<div class="container mx-auto px-6 py-8 text-center">
		<h1 class="text-4xl font-extrabold"><?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></h1>
		<p class="text-lg mt-2 opacity-90"><?php echo htmlspecialchars(kodhe('setup')->get('description')); ?></p>
	</div>
</header>

<!-- Main Content -->
<main class="flex-grow">
	<div class="container mx-auto px-6 py-12">
		<div class="bg-white shadow-md rounded-lg border border-gray-200 p-8">
			<h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">About <?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></h2>
			<p class="text-gray-600 mb-6">
				<strong><?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></strong> is a lightweight, modern PHP framework inspired by
				CodeIgniter. It's built to make your development faster, easier, and more enjoyable while maintaining flexibility and high performance.
			</p>

			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<!-- Core Features -->
				<div>
					<h3 class="text-lg font-bold text-gray-800 mb-3">Core Features:</h3>
					<ul class="list-disc list-inside text-gray-600 space-y-2">
						<li>Namespace Support for organized code.</li>
						<li>Built with modern PHP standards.</li>
						<li>Optimized for performance and scalability.</li>
						<li>Modular and easily extendable.</li>
					</ul>
				</div>

				<!-- Getting Started -->
				<div>
					<h3 class="text-lg font-bold text-gray-800 mb-3">Getting Started:</h3>
					<ol class="list-decimal list-inside text-gray-600 space-y-2">
						<li>Install using <code class="bg-gray-100 px-2 py-1 rounded">composer install</code>.</li>
						<li>Configure your <code class="bg-gray-100 px-2 py-1 rounded">.env</code> file.</li>
						<li>Start building your controllers and views.</li>
					</ol>
				</div>
			</div>

			<!-- File Locations -->
			<div class="mt-8">
				<h3 class="text-lg font-bold text-gray-800 mb-3">Key File Locations:</h3>
				<ul class="list-disc list-inside text-gray-600 space-y-2">
					<li><code class="bg-gray-100 px-2 py-1 rounded">app/controllers/Welcome.php</code> - Main controller.</li>
					<li><code class="bg-gray-100 px-2 py-1 rounded">app/views/welcome.blade.php</code> - View for this page.</li>
					<li><code class="bg-gray-100 px-2 py-1 rounded">app/config</code> - Configuration directory.</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container mx-auto px-6 py-12 pt-0">
		<div class="bg-white shadow-md rounded-lg border border-gray-200 p-8">
			<h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">How to Upgrade from CodeIgniter 3</h2>
			<p class="text-gray-600 mb-6">
				Migrating from CodeIgniter 3 to <strong><?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></strong> is designed to be simple and structured. Follow the steps below to upgrade your existing application.
			</p>

			<!-- Migration Steps -->
			<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
				<div>
					<h3 class="text-lg font-bold text-gray-800 mb-3">Folder Structure:</h3>
					<ul class="list-disc list-inside text-gray-600 space-y-2">
						<li>All folders in the <code>application</code> directory must start with a capital letter. For example:
							<ul class="list-disc ml-6">
								<li><code>controllers</code> becomes <code>Controllers</code></li>
								<li><code>models</code> becomes <code>Models</code></li>
								<li><code>libraries</code> becomes <code>Libraries</code></li>
							</ul>
						</li>
					</ul>
				</div>
				<div>
					<h3 class="text-lg font-bold text-gray-800 mb-3">File Names & Class Names:</h3>
					<ul class="list-disc list-inside text-gray-600 space-y-2">
						<li>File names for <strong>Controllers</strong>, <strong>Models</strong>, and <strong>Libraries</strong> must start with a capital letter.</li>
						<li>Class names must match the file names in PascalCase. Examples:
							<ul class="list-disc ml-6">
								<li><code>controllers/Welcome.php</code> → Class: <code>Welcome</code></li>
								<li><code>models/UserModel.php</code> → Class: <code>UserModel</code></li>
								<li><code>libraries/SomeLibrary.php</code> → Class: <code>SomeLibrary</code></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>

			<!-- Additional Instructions -->
			<div class="mt-8">
				<h3 class="text-lg font-bold text-gray-800 mb-3">Additional Changes:</h3>
				<ul class="list-disc list-inside text-gray-600 space-y-2">
					<li>Use the new namespace format. All application code should be under the <code>App</code> namespace (or another configured default).</li>
					<li>Update autoload settings to reflect the new file structure.</li>
					<li>Refactor code to comply with modern PHP standards (e.g., strict typing).</li>
					<li>Replace procedural helper calls with object-oriented services where available.</li>
				</ul>
			</div>

			<!-- Example Migration -->
			<div class="mt-8">
				<h3 class="text-lg font-bold text-gray-800 mb-3">Example Migration:</h3>
				<p class="text-gray-600">Here’s an example of migrating a model:</p>
				<code class="block bg-gray-100 p-4 rounded text-sm">
					<strong>Before:</strong><br>
					File: <code>application/models/user_model.php</code><br>
					Class: <code>user_model</code><br><br>

					<strong>After:</strong><br>
					File: <code>application/Models/UserModel.php</code><br>
					Class: <code>UserModel</code><br>
					Namespace: <code>App\Models</code>
				</code>
			</div>
		</div>
	</div>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-6">
	<div class="container mx-auto px-6 text-center space-y-4">
		<p class="text-sm">&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars(kodhe('setup')->get('name')); ?>. All rights reserved.</p>
		<p class="text-sm">Powered by CodeIgniter Version <?php echo CI_VERSION; ?> | Framework Version <?php echo htmlspecialchars(kodhe('setup')->get('version')); ?></p>
		<div class="flex justify-center space-x-4">
			<a href="https://github.com/your-repo" target="_blank" class="text-gray-300 hover:text-white transition">
				<svg class="w-6 h-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5C5.4.5 0 5.9 0 12.5c0 5.3 3.4 9.8 8.1 11.4.6.1.8-.3.8-.6v-2c-3.3.7-4-1.4-4-1.4-.6-1.4-1.4-1.7-1.4-1.7-1.2-.8.1-.8.1-.8 1.3.1 2 .8 2 .8 1.2 2 3.1 1.5 3.9 1.1.1-.8.5-1.5.9-1.9-2.6-.3-5.3-1.3-5.3-5.7 0-1.2.4-2.2 1.1-3-.1-.3-.5-1.4.1-2.9 0 0 1-.3 3.2 1.1.9-.3 1.9-.4 2.9-.4s2 .2 2.9.4c2.2-1.4 3.2-1.1 3.2-1.1.6 1.5.2 2.6.1 2.9.7.8 1.1 1.8 1.1 3 0 4.4-2.7 5.4-5.3 5.7.6.5 1.1 1.4 1.1 2.8v4.2c0 .3.2.7.8.6 4.7-1.5 8.1-6.1 8.1-11.4C24 5.9 18.6.5 12 .5z"/></svg>
			</a>
			<a href="https://twitter.com/your-profile" target="_blank" class="text-gray-300 hover:text-white transition">
				<svg class="w-6 h-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M24 4.6c-.9.4-1.8.6-2.8.8 1-.6 1.8-1.5 2.2-2.6-.9.6-2 .9-3.2 1.2-.9-.9-2.1-1.4-3.4-1.4-2.6 0-4.7 2.1-4.7 4.7 0 .4 0 .7.1 1C7.7 8.1 4.1 6.1 1.7 3.1c-.4.6-.6 1.4-.6 2.2 0 1.5.8 2.8 2 3.6-.8 0-1.5-.2-2.2-.6v.1c0 2 1.5 3.6 3.5 4-.4.1-.9.2-1.3.2-.3 0-.6 0-.9-.1.6 2 2.4 3.4 4.5 3.4-1.7 1.3-3.9 2.1-6.2 2.1-.4 0-.7 0-1.1-.1C2.3 20.6 5 21.4 8 21.4c9.6 0 14.8-8 14.8-14.8v-.7c1-.7 1.8-1.5 2.5-2.3z"/></svg>
			</a>
			<a href="https://linkedin.com/in/your-profile" target="_blank" class="text-gray-300 hover:text-white transition">
				<svg class="w-6 h-6 inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22.23 0H1.77A1.77 1.77 0 0 0 0 1.77v20.46C0 23.6.4 24 1.77 24h20.46C23.6 24 24 23.6 24 22.23V1.77C24 .4 23.6 0 22.23 0zM7.09 20.45H3.56V9h3.53v11.45zM5.32 7.68c-1.15 0-2.09-.94-2.09-2.09 0-1.15.94-2.09 2.09-2.09s2.09.94 2.09 2.09-.94 2.09-2.09 2.09zm15.13 12.77h-3.53V14.9c0-1.33-.02-3.05-1.86-3.05-1.86 0-2.15 1.45-2.15 2.96v6.64H9.38V9h3.38v1.57h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.44v6.3z"/></svg>
			</a>
		</div>
	</div>
</footer>

</body>
</html>
