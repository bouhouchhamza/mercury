# 🧾 Mercury – Contact Manager

Application web de gestion de contacts développée avec le framework Laravel.

Ce projet permet de gérer des contacts organisés par groupes, avec recherche et filtrage, afin de découvrir les bases du framework Laravel : MVC, Eloquent ORM, relations, validation et Blade.

---

## 🎯 Objectifs du projet

- Comprendre l’architecture MVC de Laravel  
- Utiliser Eloquent ORM  
- Manipuler les relations One-To-Many  
- Créer un CRUD complet  
- Utiliser Blade Templates  
- Mettre en place la validation et les messages flash  

---

## ⚙️ Technologies utilisées

- PHP 8+
- Laravel 12
- MySQL
- Blade Template
- Tailwind CSS
- Git / GitHub

---

## ✨ Fonctionnalités

### Gestion des groupes
- Ajouter un groupe
- Modifier un groupe
- Supprimer un groupe
- Liste des groupes

### Gestion des contacts
- Ajouter un contact
- Modifier un contact
- Supprimer un contact
- Associer un contact à un groupe

### Autres fonctionnalités
- Recherche de contacts par nom
- Filtrage des contacts par groupe
- Messages flash (succès / erreur)
- Validation des formulaires
- Relations Eloquent :
  - Group hasMany Contact
  - Contact belongsTo Group

---

## 🗃️ Base de données

### Tables

#### groups
- id
- name
- created_at
- updated_at

#### contacts
- id
- name
- email
- phone
- group_id
- created_at
- updated_at

---

## 🔗 Relations Eloquent

```php
Group hasMany Contact
Contact belongsTo Group
