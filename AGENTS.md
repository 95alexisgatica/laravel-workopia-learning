# AGENTS.md - Guía para Asistentes de IA (v1.0.0)

> **PROPÓSITO:** Este archivo contiene las reglas e instrucciones obligatorias para cualquier agente de IA que interactúe con este repositorio.

---

## 📌 RESUMEN DEL PROYECTO

### Resumen del Proyecto (No Técnico)
Workopia es una plataforma diseñada para que empresas publiquen ofertas de empleo y usuarios busquen y se postulen a trabajos.

### Conceptos Clave del Negocio
- **Publicación de empleos**: Empresas pueden crear, editar y gestionar ofertas de trabajo activas.
- **Búsqueda de trabajos**: Usuarios pueden explorar y filtrar ofertas de empleo disponibles.
- **Postulación**: Usuarios pueden aplicar a las ofertas de su interés.

---

## 🚨 REGLA DE ORO Y USO EXCLUSIVO DE OPENSPEC

Este proyecto se desarrolla estrictamente bajo la metodología de Desarrollo Dirigido por Especificaciones (SDD) utilizando OpenSpec.

1. **NO generar código directamente:** No debe escribir, refactorizar ni sugerir nuevo código o cambios estructurales a menos que se indique explícitamente que el trabajo se encuentra en la fase de implementación de una Spec aprobada.
2. **Ciclo de Vida Obligatorio:** Cualquier cambio debe pasar por el siguiente flujo: Explorar (Explore), Proponer (Propose), Escribir Spec (Write), Revisar (Review), Implementar (Implement).
3. **Protocolo de No-Inferencia:** NO debe asumir ni inferir flags que omitan verificaciones estándar (ej. `--skip-specs`, `--force`, `--yes`) para acciones críticas como `archive` o `apply`. Si un cambio parece ser "solo documentación" o "solo infraestructura", DEBE preguntar al usuario antes de usar flags de omisión.

---

## 💬 REGLAS DE INTERACCIÓN Y CONSULTA

- **Duda = Pregunta**: Si una descripción de tarea o la necesidad de un flag no es 100% clara, deténgase y pregunte.
- **Acciones Críticas**: Solicite confirmación siempre antes de:
    - Archivar un cambio.
    - Eliminar archivos o directorios.
    - Usar flags que omitan especificaciones o validaciones.

---

## 🛠️ STACK TECNOLÓGICO Y ARQUITECTURA (En construcción)
Actualiza la sección de STACK TECNOLÓGICO Y ARQUITECTURA del AGENTS.md con esta información:

- Framework: Laravel (PHP)
- Motor de vistas: Blade Templates
- Base de datos: MySQL
- CSS: Tailwind CSS
- Entorno: Local con php artisan serve
- Estructura: MVC
- Componentes Blade reutilizables en resources/views/components/
- Rutas en routes/web.php
- Modelos en app/Models/
- Controladores en app/Http/Controllers/
