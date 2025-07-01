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

```bash
# 1. Clonar el repositorio
git clone https://github.com/luisojsm/book-review-livewire.git
cd book-review-livewire

# 2. Instalar dependencias de PHP y Node.js
composer install
npm install

# 3. Copiar el archivo de entorno y generar la clave
cp .env.example .env
php artisan key:generate

# 4. Configurar la base de datos (editar .env)
# Ejemplo:
# DB_DATABASE=nombre_de_tu_bd
# DB_USERNAME=tu_usuario
# DB_PASSWORD=tu_contraseña

# 5. Ejecutar migraciones
php artisan migrate

# 6. Compilar los assets con Vite
npm run dev

# 7. Iniciar el servidor
php artisan serve
```

---
## 📦 Requisitos
- PHP >= 8.1

- Composer

- Node.js + NPM

- Laravel 10+

- MySQL o equivalente
--- 
EN English

# 📚 Laravel Livewire Book Review App

A simple example application built with **Laravel + Livewire**, without using traditional Blade templates.  
The app allows users to **store books and assign ratings**, and demonstrates the use of reactive components, filters, forms, and custom layouts.

---

## 🚀 Features

- ✅ Livewire components  
- 🔎 Real-time filtering  
- 📝 Reactive forms without page reload  
- 🧭 Navigation with multiple layouts  
- ⚡ No traditional Blade views used  

---

## 🛠️ Installation

Follow these steps to get the application running locally:

```bash
# 1. Clone the repository
git clone https://github.com/luisojsm/book-review-livewire.git
cd book-review-livewire

# 2. Install PHP and Node.js dependencies
composer install
npm install

# 3. Copy the environment file and generate the app key
cp .env.example .env
php artisan key:generate

# 4. Configure the database (edit the .env file)
# Example:
# DB_DATABASE=your_database
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# 5. Run migrations
php artisan migrate

# 6. Compile assets with Vite
npm run dev

# 7. Start the development server
php artisan serve
```
---
## 📦 Requirements
- PHP >= 8.1

- Composer

- Node.js + NPM

- Laravel 10+

- MySQL or equivalent

