@extends('layouts/main')
@section('content')
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
@endsection

