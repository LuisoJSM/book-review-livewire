🇪🇸 Español

🇪🇸 Español
# 📚 Aplicación de Gestión de Libros con Laravel Livewire

Este proyecto es un ejemplo básico de cómo usar **Laravel + Livewire** sin plantillas Blade tradicionales.  
La aplicación permite **guardar libros con una puntuación** y demuestra varias funcionalidades modernas usando componentes dinámicos.

---

## 🚀 Características principales

- ✅ Componentes Livewire
- 🔎 Filtros dinámicos en tiempo real
- 📝 Formularios reactivos sin recarga de página
- 🧭 Navegación con distintos layouts
- ⚡ Sin uso de vistas Blade tradicionales

---

## 🛠️ Instalación

Sigue estos pasos para poner en marcha la aplicación en local:

### 1. Clonar el repositorio

```bash
git clone https://github.com/luisojsm/book-review-livewire.git
cd book-review-livewire

### 2. Instalar dependencisa de PHP y Node.js
```composer install
npm install

### 3. Copiar el archivo de entorno y generar la clave
```cp .env.example .env
php artisan key:generate

### 4. Configurar la base de datos
```DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

### 5. Ejecutar migraciones
```php artisan migrate

### 6.  Compilar los assets con Vite
```npm run dev

### 7. Iniciar el servidor
```php artisan serve


##📦 Requisitos
- PHP >= 8.1

- Composer

- Node.js + NPM

- Laravel 10+

- MySQL o equivalente



