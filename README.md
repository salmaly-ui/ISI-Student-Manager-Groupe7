# 🎓 ISI Student Manager — Groupe 7

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
| Étudiant A | **LAOUY SALMA** | Page d'accueil `index.php` |
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

### 📸 Étudiant A — Salma

<img width="778" height="325" alt="Ex1" src="https://github.com/user-attachments/assets/4e5c9d7a-4e16-4aec-9c0b-148950e06055" />

### 📸 Étudiant B — Hiba

<img width="945" height="551" alt="Ex1" src="https://github.com/user-attachments/assets/4393ec23-e56c-4169-84d3-4586ed40e7fe" />

### 📸 Étudiant C — Fatima-ezzahra

<img width="483" height="389" alt="Ex1" src="https://github.com/user-attachments/assets/927c4c4a-2ef3-4e60-8837-03f72bbd4511" />

### 📸 Étudiant D — Asma

<img width="962" height="476" alt="Ex1" src="https://github.com/user-attachments/assets/9cc8bd02-ab8f-4dba-b5f7-5b3274cd461a" />

---

## Exercice 2 — Création du dépôt commun

L'étudiant A crée le dépôt GitHub et invite les autres membres comme collaborateurs.

### 📸 Étudiant A — Salma

**Création du dépôt GitHub :**

<img width="986" height="856" alt="Création du dépôt" src="https://github.com/user-attachments/assets/f2748b2e-a688-47e4-a0ed-d524a5cc84d3" />

**Invitation des collaborateurs :**

<img width="1600" height="818" alt="Invitation des collaborateurs" src="https://github.com/user-attachments/assets/93232ae8-802d-4d61-94b6-a659c7bff827" />

### 📸 Étudiant B — Hiba

<img width="1314" height="794" alt="Ex2" src="https://github.com/user-attachments/assets/db3d1244-574f-4c3f-85ac-c7d9fa29a02e" />

### 📸 Étudiant C — Fatima-ezzahra

<img width="626" height="464" alt="Ex2" src="https://github.com/user-attachments/assets/c301e89f-a747-43c2-aea9-29d083b6d2e3" />

### 📸 Étudiant D — Asma

<img width="1453" height="691" alt="Ex2" src="https://github.com/user-attachments/assets/86044fd4-e690-4564-865d-7ccb7b3d2402" />

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

L'authentification SSH et le clonage du dépôt sont réalisés avec succès.

### 📸 Étudiant A — Salma

<img width="1334" height="677" alt="Clonage SSH" src="https://github.com/user-attachments/assets/716631ea-f68e-4b7c-98b5-6d835f1e58c5" />

<img width="1600" height="755" alt="Clés SSH" src="https://github.com/user-attachments/assets/094fb881-6cfa-490e-a629-fad06380b350" />

### 📸 Étudiant B — Hiba

<img width="945" height="379" alt="SSH" src="https://github.com/user-attachments/assets/5a7ffc44-2a5d-44d2-b11f-1129c7ca7e14" />

<img width="1542" height="594" alt="Clonage" src="https://github.com/user-attachments/assets/a71be29a-aa66-4534-9ea4-0f64ff6692f0" />

### 📸 Étudiant C — Fatima-ezzahra

<img width="1335" height="483" alt="SSH" src="https://github.com/user-attachments/assets/e81b6821-f123-42ce-a34c-eacfe7a4bf21" />

<img width="690" height="192" alt="Clonage" src="https://github.com/user-attachments/assets/21e7c0a0-b88e-4481-ab0a-df51fd3a1b5d" />

### 📸 Étudiant D — Asma

<img width="1174" height="962" alt="SSH" src="https://github.com/user-attachments/assets/05916cc0-a38e-4c31-8f7c-7264a99a3d5a" />

<img width="945" height="657" alt="Clonage" src="https://github.com/user-attachments/assets/0743167c-2720-400e-98db-b54f97f6980d" />

---

## Exercice 4 — Commit initial

L'étudiant A crée `index.php` et publie le premier commit.

Les autres étudiants récupèrent les modifications :

```bash
git switch main
git pull origin main
```

**Commit :** enregistrement local des modifications.  
**Push :** publication des commits vers GitHub.

---

## Exercice 5 — Branches individuelles

Chaque étudiant crée sa propre branche.

| Étudiant | Branche |
|---|---|
| A | `feature/accueil` |
| B | `feature/etudiants` |
| C | `feature/projets` |
| D | `feature/style` |

### 📸 Étudiant A — Salma

```bash
git switch -c feature/accueil
git branch
```

<img width="1920" height="1080" alt="Page accueil" src="https://github.com/user-attachments/assets/f79ef5ef-6273-44a1-86da-98a02335dba7" />

### 📸 Étudiant B — Hiba

```bash
git switch -c feature/etudiants
git branch
```

<img width="1377" height="408" alt="Branche étudiant B" src="https://github.com/user-attachments/assets/ed06fe14-c5b0-4212-a629-caf6c406a5d8" />

### 📸 Étudiant C — Fatima-ezzahra

```bash
git switch -c feature/projets
git branch
```

<img width="981" height="723" alt="Branche étudiant C" src="https://github.com/user-attachments/assets/eaf16d80-4804-4065-abc2-58a6d046778d" />

### 📸 Étudiant D — Asma

<img width="954" height="821" alt="Branche étudiant D" src="https://github.com/user-attachments/assets/965b613a-313a-4d34-876f-a4514b8d674b" />



---

## Exercice 6 — Développement en parallèle

Chaque membre développe sa fonctionnalité sur sa branche.

- **A :** Page d'accueil.
- **B :** Tableau PHP de 3 étudiants.
- **C :** Liste des projets.
- **D :** Style CSS.

### 👩‍💻 Étudiant A — `index.php`

<img width="960" height="528" alt="Page accueil" src="https://github.com/user-attachments/assets/7b15083c-fa3d-4a4e-9589-9cdb0e81de6b" />

### 👩‍💻 Étudiant B — `etudiants.php`

Création d'un tableau contenant le nom, le prénom et l'âge de trois étudiants, affichés avec une boucle `foreach`.

**Résultat de la page PHP :**

<img width="683" height="435" alt="Résultat étudiants" src="https://github.com/user-attachments/assets/63b71a98-9b1c-4607-b335-59278d5d9b0f" />

**Commit et Push :**

```bash
git add etudiants.php
git commit -m "Ajout de la liste des etudiants"
git push -u origin feature/etudiants
```

**Capture du commit et du push :**

<img width="945" height="328" alt="Commit et push étudiant B" src="https://github.com/user-attachments/assets/b9901ef1-f28d-4912-86cf-6a5ed315af4f" />

### 👩‍💻 Étudiant C — `projets.php`

Création d'une liste contenant les trois projets.

**Résultat de la page PHP :**

<img width="825" height="343" alt="Résultat projets" src="https://github.com/user-attachments/assets/ec4c2f76-83e0-4dd9-9f52-cb3a2517241c" />

### 👩‍💻 Étudiant D — `style.css`

Le travail de mise en forme est réalisé par l'étudiante D sur sa branche `feature/style`.

---

## Exercice 7 — Pull Requests et revue de code

Chaque étudiant crée une Pull Request vers `main`. Un autre membre examine et commente le code avant la fusion.

**Cycle de revue :** A → B → C → D → A

### 📸 Étudiant A — Salma

<img width="1600" height="732" alt="Pull Request étudiant A" src="https://github.com/user-attachments/assets/036b35bd-6cbc-472e-8bd4-baf472626d6e" />

### 👩‍💻 Étudiant B — Hiba

Pull Request #2 — Ajout de la liste des étudiants.

🔗 https://github.com/salmaly-ui/ISI-Student-Manager-Groupe7/pull/2

<img width="1600" height="794" alt="Pull Request B" src="https://github.com/user-attachments/assets/ae70b408-d079-4227-866b-eba8b3e2eb79" />

<img width="1600" height="599" alt="Revue de code B" src="https://github.com/user-attachments/assets/b6fe1a2f-694e-4f59-bf7d-ac62436adbd8" />

### 👩‍💻 Étudiant C — Fatima-ezzahra

Pull Request #3 — Ajout de la liste des projets.

🔗 https://github.com/salmaly-ui/ISI-Student-Manager-Groupe7/pull/3

<img width="1326" height="571" alt="Pull Request C" src="https://github.com/user-attachments/assets/9cd6de8e-68b2-4942-baf1-de6a0efbc851" />

### 📸 Étudiant D — Asma

<img width="1600" height="758" alt="Pull Request D" src="https://github.com/user-attachments/assets/7842fd7a-cae2-40d1-b9b5-be35512beb3c" />

<img width="954" height="917" alt="Revue de code D" src="https://github.com/user-attachments/assets/620449cf-46dc-4990-9816-0f61d531e5d1" />

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

### Résolution par l'étudiant B

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

**Validation de la résolution :**

```bash
git add configuration.txt
git commit -m "Resolution du conflit entre B et C"
git push -u origin conflit/etudiant-b
```

### 📸 Étudiant B — Création du conflit

<img width="908" height="602" alt="Création du conflit" src="https://github.com/user-attachments/assets/d87568d3-6001-4f7e-9dfa-2f2ffcea9d59" />

<img width="1600" height="438" alt="Conflit Git" src="https://github.com/user-attachments/assets/faa81064-4a1b-41ad-8e61-c104f3929876" />

<img width="949" height="923" alt="Résolution du conflit" src="https://github.com/user-attachments/assets/a52cb0e5-250d-4b9f-a186-13eff542d3b1" />

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

<img width="1600" height="682" alt="Vérification finale" src="https://github.com/user-attachments/assets/e2ea5342-db82-4d61-be5c-bdb45b6544b0" />

<img width="1353" height="929" alt="Historique et branches" src="https://github.com/user-attachments/assets/de47b6bf-2b35-4751-b421-0c1075b0bf5b" />

---

## 📝 Conclusion

Ce TP nous a permis de pratiquer le travail collaboratif avec Git et GitHub : branches, commits, push, Pull Requests, revue de code et résolution des conflits.

Chaque membre du Groupe 7 a participé au développement de l'application **ISI Student Manager**.

**Master ISI — Groupe 7 | TP 3**
