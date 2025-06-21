# Kodhe Framework  

Kodhe Framework adalah pengembangan modern dari CodeIgniter 3 yang dirancang untuk memberikan pengalaman pengembangan aplikasi yang lebih efisien, modular, dan sesuai dengan standar modern. Kodhe Framework mendukung namespace, dependency injection (DI), HMVC, dan templating modern seperti Blade Laravel.  

---

## Fitur Utama Kodhe Framework

1. **Dukungan Namespace**  
   Kodhe Framework menggunakan namespace untuk struktur yang lebih rapi:
   - `app`
     - `Controllers`  
     - `Models`  
     - `Libraries`  
     - `Services`  

3. **Dependency Injection (DI)**  
   Mendukung DI untuk controller dan service, mempermudah manajemen dependensi.  
   ```php
   // DI di Controller
   public function __construct(App\Services\PostServices $postService) {  
       $this->postService = $postService;  
   }

4. **HMVC (Hierarchical Model-View-Controller)**
   Mendukung arsitektur modular untuk mempermudah pengembangan aplikasi berskala besar.

   - `app`
      - `Modules/Blog`
        - `Controllers`
        - `Models`
        - `Views`


5. **Blade Template**
   Menggunakan library mirip Blade Laravel untuk templating.
   ```php
   $this->blade->render('post', $data);

6. **Services**
   Memisahkan logika bisnis dari controller untuk kode yang lebih bersih dan terorganisir.
   ```php
   namespace App\Services;  
   class PostServices {  
       public function getAllPosts() {  
           // Logika bisnis  
       }  
   }


7. **Dukungan Default Super Object CodeIgniter 3**
  Tetap mendukung fitur bawaan CI3 seperti $this->load, $this->input, $this->db, dll.

8. **Berbasis CodeIgniter 3**
  Kodhe Framework sepenuhnya kompatibel dengan fitur-fitur dasar CodeIgniter 3.

9. **Standar Penamaan File dan Folder**

  Nama folder dan file diawali huruf besar (contoh: PostModel.php).
  Penamaan class tidak menggunakan tanda underscore _ (contoh: PostModel, bukan post_model).

## Instalasi lewat composer repositori

1. **Composer repositori Kodhe Framework:**
    ```bash
    composer create-project karyakode/kodhe --stability dev

## Instalasi lewat Clone repositori

1. **Clone repositori Kodhe Framework:**
    ```bash
    git clone https://github.com/karyakode/kodhe.git
2. **Install dependensi melalui Composer:**
   ```bash
   composer install

3. **Konfigurasi database di file application/config/database.php.**
4. **Jalankan aplikasi:**
    Letakkan proyek di direktori server Anda (misalnya: htdocs untuk XAMPP).
    Akses aplikasi melalui browser, contohnya: http://localhost/kodhe.  

## Struktur Folder
  - `app`
    - `Controllers`
    - `Models`
    - `Views`
    - `Modules`       # Untuk HMVC
    - `Services`      # Untuk logika bisnis
    - `Libraries`     # Untuk library tambahan


## Contoh Penggunaan

1. **Membuat Controller**
	```php
	use App\Services\PostServices;  
	class PostController extends BaseController {  
	    protected $postService;  

	    public function __construct(PostServices $postService) {  
	        $this->postService = $postService;  
	    }  

	    public function index() {  
	        $data['posts'] = $this->postService->getAllPosts();  
	        return $this->blade->render('post.index', $data);  
	    }  
	 }

2. **Membuat Service**
	```php
   namespace App\Services;  
	use App\Models\PostModel;  

	class PostServices {  
		protected $postModel;  

		public function __construct(PostModel $postModel) {  
			$this->postModel = $postModel;  
		}  

		public function getAllPosts() {  
			return $this->postModel->findAll();  
		}  
	}
