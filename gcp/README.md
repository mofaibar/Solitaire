Berikut adalah High Level Architecture diagram dari konfigurasi yang diberikan:

            +-------------------+
            |                   |
            |  welcome-service  |
            |                   |
            +-------------------+
                     |
                     | 8000
                     |
            +-------------------+
            |                   |
            |    welcome-app    |
            |                   |
            +-------------------+
                     |
                     | 5000
                     |
            +-----------------------+
            |                       |
            |   welcome-container   |
            |                       |
            +-----------------------+
                     |
                     | configMapRef
                     | secretRef
                     |
           +---------------------+
           |                     |
           |    welcome-config   |
           |                     |
           +---------------------+
                     |
                     |
           +---------------------+
           |                     |
           |    welcome-secret   |
           |                     |
           +---------------------+


Diagram ini menggambarkan arsitektur aplikasi "Welcome App" yang berjalan di dalam Kubernetes cluster. 

- Terdapat sebuah Service dengan nama "welcome-service" yang meneruskan lalu lintas ke aplikasi "welcome-app" melalui port 8000.
- Aplikasi "welcome-app" berjalan di dalam container bernama "welcome-container". Container ini menggunakan image dari registry publik yang telah ditentukan.
- Aplikasi "welcome-app" mengambil konfigurasi dari ConfigMap "welcome-config" dan Secret "welcome-secret" menggunakan envFrom pada kontainer.
- ConfigMap "welcome-config" menyimpan beberapa nilai konfigurasi, seperti nama aplikasi (APP_NAME) dan versi aplikasi (APP_VERSION).
- Secret "welcome-secret" menyimpan nilai terenkripsi untuk username (DB_USERNAME) dan password (DB_PASSWORD) database.
- Ingress "welcome-ingress" digunakan untuk mengarahkan lalu lintas HTTP ke Service "welcome-service" melalui host solitaire.com. Ingress ini juga menggunakan TLS dengan sertifikat yang disimpan dalam Secret "welcome-tls".