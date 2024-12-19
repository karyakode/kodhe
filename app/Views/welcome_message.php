<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to <?php echo htmlspecialchars(kodhe('setup')->get('name')); ?></title>
	<script src="<?php echo base_url('assets/js/tailwindcss.js'); ?>"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen font-sans text-gray-800">

<div class="max-w-lg w-full bg-white shadow-lg rounded-lg border border-gray-200 p-6">
	<h1 class="text-2xl font-bold text-blue-600 mb-4 text-center">Welcome to <?php echo htmlspecialchars(kodhe('setup')->get('name')); ?>!</h1>
	<p class="text-gray-600 mb-4 text-center"><?php echo htmlspecialchars(kodhe('setup')->get('description')); ?></p>

	<div class="space-y-4">
		<p class="text-sm text-gray-500">To edit this page, you'll find it located at:</p>
		<code class="block bg-gray-100 text-gray-700 px-4 py-2 rounded-md text-sm">application/views/welcome_message.php</code>

		<p class="text-sm text-gray-500">The corresponding controller for this page is found at:</p>
		<code class="block bg-gray-100 text-gray-700 px-4 py-2 rounded-md text-sm">application/controllers/Welcome.php</code>

		<p class="text-sm text-gray-500">
			If this is your first time exploring CodeIgniter, visit the <a href="userguide3/" class="text-blue-500 hover:underline">User Guide</a> to get started.
		</p>
	</div>

	<div class="mt-6 border-t pt-4 text-sm text-gray-500">
		<?php if (ENVIRONMENT === 'development'): ?>
			<div class="mb-2">
				CodeIgniter Version: <strong class="text-gray-800"><?php echo CI_VERSION; ?></strong><br>
				<?php echo htmlspecialchars(kodhe('setup')->get('name')); ?> Version: <strong class="text-gray-800"><?php echo htmlspecialchars(kodhe('setup')->get('version')); ?></strong>
			</div>
		<?php endif; ?>
		<p>
			Page rendered in <strong class="text-gray-800">{elapsed_time}</strong> seconds.<br>
			Memory Usage: <strong class="text-gray-800">{memory_usage}</strong>
		</p>
	</div>
</div>

</body>
</html>
