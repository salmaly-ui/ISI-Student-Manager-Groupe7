# 🎓 ISI Student Manager — Groupe 6

**Master ISI — Semestre 1**  
**Module :** Méthodologies de développement et Ateliers en PHP  
**TP 3 :** Gestion collaborative des versions avec Git et GitHub  
**Faculté des Sciences Semlalia — Université Cadi Ayyad**

🔗 **Dépôt GitHub :**  
https://github.com/salmaly-ui/ISI-Student-Manager-Groupe7

---

## 👥 1. Membres du groupe

| Membre | Nom et prénom | Travail réalisé |
|---|---|---|
| Étudiant A | À compléter | Page d'accueil `index.php` |
| Étudiant B | **Hiba Ouirouane** | Liste des étudiants `etudiants.php` |
| Étudiant C | **Fatima-ezzahra Sahmad** | Liste des projets `projets.php` |
| Étudiant D | **ASMA LAOUY** | Mise en forme `style.css` |

---

## 📌 2. Présentation du projet

**ISI Student Manager** est une mini-application PHP réalisée en groupe.

L'objectif de ce TP est d'apprendre à utiliser Git et GitHub pour travailler en équipe : branches, commits, push, Pull Requests, revue de code et résolution des conflits.

---

# 📚 3. Réalisation des exercices

## Exercice 1 — Installation et configuration

Configuration de Git et vérification de l'identité des utilisateurs.

```bash
git --version
git config --global user.name "Nom Prenom"
git config --global user.email "email@example.com"
git config --global --list
```

### 📸 Étudiant B

<img width="945" height="551" alt="image" src="https://github.com/user-attachments/assets/4393ec23-e56c-4169-84d3-4586ed40e7fe" />

### 📸 Étudiant C

<img width="483" height="389" alt="image" src="https://github.com/user-attachments/assets/927c4c4a-2ef3-4e60-8837-03f72bbd4511" />

### 📸 Étudiant D

<img width="962" height="476" alt="9bb8e334-93b1-4bd5-a27b-4287430addf1" src="https://github.com/user-attachments/assets/9cc8bd02-ab8f-4dba-b5f7-5b3274cd461a" />

### 📸 Autres membres
- **A :** Ajouter votre capture ici.
- **D :** Ajouter votre capture ici.

---

## Exercice 2 — Création du dépôt commun

L'étudiant A crée le dépôt GitHub et invite les autres membres comme collaborateurs.


### 📸 Étudiant B

<img width="1314" height="794" alt="image" src="https://github.com/user-attachments/assets/db3d1244-574f-4c3f-85ac-c7d9fa29a02e" />

### 📸 Étudiant C

 <img width="626" height="464" alt="image" src="https://github.com/user-attachments/assets/c301e89f-a747-43c2-aea9-29d083b6d2e3" />
 ### 📸 Étudiant D
 <img width="1453" height="691" alt="Screenshot 2026-11-02 104648" src="https://github.com/user-attachments/assets/86044fd4-e690-4564-865d-7ccb7b3d2402" />

### 📸 Autres membres
- **A :** Ajouter la capture de création du dépôt.
- **D :** Ajouter votre capture ici.

---

## Exercice 3 — SSH et clonage

Chaque étudiant configure SSH puis clone le dépôt.

```bash
ssh-keygen -t ed25519 -C "email@example.com"
ssh -T git@github.com
git clone git@github.com:salmaly-ui/ISI-Student-Manager-Groupe7.git
git remote -v
git branch -a
git status
```


### 📸 Autres membres
- **A :** Ajouter votre capture ici.
- **D :** Ajouter votre capture ici.

 
**authentification SSH et clonage réussis.**
  
### 📸 Étudiant B

<img width="945" height="379" alt="image" src="https://github.com/user-attachments/assets/5a7ffc44-2a5d-44d2-b11f-1129c7ca7e14" />

<img width="1542" height="594" alt="image" src="https://github.com/user-attachments/assets/a71be29a-aa66-4534-9ea4-0f64ff6692f0" />

### 📸 Étudiant C

<img width="1335" height="483" alt="4bea3c76-d3f3-42ce-820d-48ce82af34a2" src="https://github.com/user-attachments/assets/e81b6821-f123-42ce-a34c-eacfe7a4bf21" />

<img width="690" height="192" alt="c98e3782-35ee-428e-a357-ad1a7315417d" src="https://github.com/user-attachments/assets/21e7c0a0-b88e-4481-ab0a-df51fd3a1b5d" />

### 📸 Étudiant D
<img width="1174" height="962" alt="87c5399c-14fb-4dc0-b9b2-f14935a2c871" src="https://github.com/user-attachments/assets/05916cc0-a38e-4c31-8f7c-7264a99a3d5a" />
<img width="945" height="657" alt="3791afb1-bad5-406a-80a7-994c770ebeef" src="https://github.com/user-attachments/assets/0743167c-2720-400e-98db-b54f97f6980d" />
![Uploading 87c5399c-14fb-4dc0-b9b2-f14935a2c871.jpg…]()



## Exercice 4 — Commit initial

L'étudiant A crée `index.php` et publie le premier commit.

Les autres étudiants récupèrent les modifications :

```bash
git switch main
git pull origin main
```

**Commit :** enregistrement local des modifications.  
**Push :** publication des commits vers GitHub.

## Exercice 5 — Branches individuelles

Chaque étudiant crée sa propre branche.

| Étudiant | Branche |
|---|---|
| A | `feature/accueil` |
| B | `feature/etudiants` |
| C | `feature/projets` |
| D | `feature/style` |

**Étudiant B :**

```bash
git switch -c feature/etudiants
git branch
```

### 📸 Étudiant B

<img width="1377" height="408" alt="image" src="https://github.com/user-attachments/assets/ed06fe14-c5b0-4212-a629-caf6c406a5d8" />

**Étudiant C :**

```bash
git switch -c feature/projets
git branch
```

### 📸 Étudiant C

<img width="981" height="723" alt="e289cae9-3f09-4f25-a6af-2501b31a820b" src="https://github.com/user-attachments/assets/eaf16d80-4804-4065-abc2-58a6d046778d" />

### 📸 Étudiant D


<img width="954" height="821" alt="f46d689b-d862-4d5f-8452-2a1d22e38b7a" src="https://github.com/user-attachments/assets/965b613a-313a-4d34-876f-a4514b8d674b" />

### 📸 Autres membres
- **A :** Ajouter votre capture ici.
- **D :** Ajouter votre capture ici.

---

## Exercice 6 — Développement en parallèle

Chaque membre développe sa fonctionnalité sur sa branche.

- **A :** Page d'accueil.
- **B :** Tableau PHP de 3 étudiants.
- **C :** Liste des projets.
- **D :** Style CSS.

### 👩‍💻 Étudiant B — etudiants.php

Création d'un tableau contenant le nom, le prénom et l'âge de trois étudiants, affichés avec une boucle `foreach`.

### 📸 Résultat de la page PHP

<img width="683" height="435" alt="image" src="https://github.com/user-attachments/assets/63b71a98-9b1c-4607-b335-59278d5d9b0f" />

### Commit et Push

```bash
git add etudiants.php
git commit -m "Ajout de la liste des etudiants"
git push -u origin feature/etudiants
```

### 📸 Étudiant B

<img width="945" height="328" alt="image" src="https://github.com/user-attachments/assets/b9901ef1-f28d-4912-86cf-6a5ed315af4f" />

### 👩‍💻 Étudiant C — projets.php

Création d'une liste contenant les trois projets.

### 📸 Résultat de la page PHP

<img width="825" height="343" alt="32bec9e1-a5ff-4223-819f-77759ad0111c" src="https://github.com/user-attachments/assets/ec4c2f76-83e0-4dd9-9f52-cb3a2517241c" />

### 📸 Autres membres
- **A :** Ajouter la capture de `index.php`.
- **D :** Ajouter la capture de `style.css`.

---

## Exercice 7 — Pull Requests et revue de code

Chaque étudiant crée une Pull Request vers `main`. Un autre membre examine et commente le code avant la fusion.

**Cycle de revue :** A → B → C → D → A

### 👩‍💻 Étudiant B

Pull Request #2 — Ajout de la liste des étudiants.

🔗 https://github.com/salmaly-ui/ISI-Student-Manager-Groupe7/pull/2

### 📸 Étudiant B

<img width="1600" height="794" alt="image" src="https://github.com/user-attachments/assets/ae70b408-d079-4227-866b-eba8b3e2eb79" />

<img width="1600" height="599" alt="image" src="https://github.com/user-attachments/assets/b6fe1a2f-694e-4f59-bf7d-ac62436adbd8" />

### 👩‍💻 Étudiant C

Pull Request #3 — Ajout de la liste des projets.

🔗 https://github.com/salmaly-ui/ISI-Student-Manager-Groupe7/pull/3

### 📸 Étudiant C

<img width="1326" height="571" alt="2c40df0f-faec-418f-aa65-0cbb4e2809b6" src="https://github.com/user-attachments/assets/9cd6de8e-68b2-4942-baf1-de6a0efbc851" />

### 📸 Étudiant D

<img width="1600" height="758" alt="3bf796a7-243e-4e02-b3e5-61a6191159ea" src="https://github.com/user-attachments/assets/7842fd7a-cae2-40d1-b9b5-be35512beb3c" />
<img width="954" height="917" alt="a7e775a9-5b99-49a7-bc4f-eb6ab25a41a1" src="https://github.com/user-attachments/assets/620449cf-46dc-4990-9816-0f61d531e5d1" />

### 📸 Autres membres
- **A :** Ajouter la capture de votre Pull Request.


---

## Exercice 8 — Conflit de fusion contrôlé

Un conflit est provoqué volontairement dans `configuration.txt`.

### Versions différentes

**Version initiale (A) :**

```text
Version : 1.0
```

**Modification de B :**

```text
Version : 2.0 - Etudiant B
```

**Modification de C :**

```text
Version : 3.0 - Etudiant C
```

C fusionne sa Pull Request dans `main` en premier.

### 👩‍💻 Résolution par l'étudiant B

```bash
git fetch origin
git merge origin/main
```

Git signale un conflit dans `configuration.txt`.

La version commune retenue est :

```text
Nom du projet : ISI Student Manager
Version : 3.0 - Version collaborative
Responsable : Groupe ISI
```

Validation de la résolution :

```bash
git add configuration.txt
git commit -m "Resolution du conflit entre B et C"
git push -u origin conflit/etudiant-b
```

### 📸 Étudiant B — Création du conflit

<img width="908" height="602" alt="image" src="https://github.com/user-attachments/assets/d87568d3-6001-4f7e-9dfa-2f2ffcea9d59" />

<img width="1600" height="438" alt="image" src="https://github.com/user-attachments/assets/faa81064-4a1b-41ad-8e61-c104f3929876" />

<img width="949" height="923" alt="image" src="https://github.com/user-attachments/assets/a52cb0e5-250d-4b9f-a186-13eff542d3b1" />



### 📸 Autres membres
- **A :** Ajouter la capture de création de `configuration.txt`.
- **D :** Ajouter une capture ou une observation si nécessaire.

---

# 🚀 4. Installation et exécution

Cloner le projet :

```bash
git clone git@github.com:salmaly-ui/ISI-Student-Manager-Groupe7.git
cd ISI-Student-Manager-Groupe7
```

Lancer le serveur PHP depuis le dossier du projet :

```bash
php -S localhost:8001
```

**Avec XAMPP sous Windows (PowerShell) :**

```powershell
& "C:\xampp\php\php.exe" -S localhost:8001
```

Ouvrir les pages dans le navigateur :

- http://localhost:8001/index.php
- http://localhost:8001/etudiants.php
- http://localhost:8001/projets.php

---

# ✅ 5. Vérification finale

Afficher l'historique graphique et les branches :

```bash
git log --oneline --graph --all --decorate
git branch -a
```

Vérifier que `main` est à jour :

```bash
git switch main
git pull origin main
git status
```

### 📸 Captures de vérification finale
- <img width="1600" height="682" alt="image" src="https://github.com/user-attachments/assets/e2ea5342-db82-4d61-be5c-bdb45b6544b0" />

<img width="1353" height="929" alt="image" src="https://github.com/user-attachments/assets/de47b6bf-2b35-4751-b421-0c1075b0bf5b" />


## 📝 Conclusion

Ce TP nous a permis de pratiquer le travail collaboratif avec Git et GitHub : branches, commits, push, Pull Requests, revue de code et résolution des conflits.

Chaque membre du Groupe 7 a participé au développement de l'application **ISI Student Manager**.

**Master ISI — Groupe 7 | TP 3**
