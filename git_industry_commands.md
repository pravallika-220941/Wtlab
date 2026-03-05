1.Git Configuration Commands
## git config --global user.name

**Syntax:**
git config --global user.name "Your Name"

**Purpose:**
Sets the global username for Git. This name will appear in all commits made from this system.

**Example:**
git config --global user.name "pravallika-220941"

**Verification Command:**
git config --global user.name

**Output:**
pravallika-220941

## git config --global user.email

**Syntax:**
git config --global user.email "your-email@example.com"

**Purpose:**
Sets the global email address associated with Git commits.

**Example:**
git config --global user.email "n220941@rguktn.ac.in"

**Verification Command:**
git config --global user.email

**Output:**
n220941@rguktn.ac.in

## git config --list

**Syntax:**
git config --list

**Purpose:**
Displays all Git configuration settings including username, email, editor, and other configurations.

**Example:**
git config --list

**Sample Output:**
user.name=pravallika-220941
user.email=n220941@rguktn.ac.in


## git config --unset

**Syntax:**
git config --global --unset user.name

**Purpose:**
Removes a Git configuration setting.

**Example:**
git config --global --unset user.name

**Verification Command:**
git config --global user.name

**Re-setting Username:**
git config --global user.name "pravallika-220941"



**Screenshot:**
![git configuration](screenshots/Screenshot%20(12).png)

2.Repository Setup Commands

## git init

**Syntax:**
git init

**Purpose:**
Initializes a new Git repository in the current directory by creating a hidden .git folder.

## git clone

**Syntax:**
git clone <repository-url>

**Purpose:**
Creates a local copy of a remote repository.

**Example:**
git clone https://github.com/YOUR_USERNAME/Wtlab.git

**Output:**
Cloning into 'Wtlab'...

**Screenshot**
![rEPOSITORY SETUP](screenshots/Screenshot%20(14).png)

## git clone --depth

**Syntax:**
git clone --depth <number> <repository-url>

**Purpose:**
Creates a shallow clone with limited commit history.

**Example:**
git clone --depth 1 https://github.com/YOUR_USERNAME/Wtlab.git

**Verification:**
git log

**Output:**
(Shows only latest commit)

## git clone --branch

**Syntax:**
git clone --branch <branch-name> <repository-url>

**Purpose:**
Clones a specific branch from a remote repository.

**Example:**
git clone --branch feature-branch https://github.com/YOUR_USERNAME/Wtlab.git

**Verification:**
git branch

**Output:**
* feature-branch

### Common Error:

fatal: destination path 'Wtlab' already exists and is not an empty directory.

**Reason:**
The folder already exists in the current directory.

**Solution:**
Clone into a different folder name:

git clone --branch feature-branch https://github.com/YOUR_USERNAME/Wtlab.git Wtlab_branch_demo

**Screenshot:**
![rEPOSITORY SETUP](screenshots/Screenshot%20(13).png)



3.Repository Status & Inspection
## git status

**Syntax:**
git status

**Purpose:**
Displays the current state of the working directory and staging area.

**Example:**
git status

**Output:**
modified: file1.txt

## git log

**Syntax:**
git log

**Purpose:**
Displays the complete commit history of the repository.

**Example:**
git log

**Output:**
Shows commit ID, author, date, and commit message.

**Screenshot:**
![git log](screenshots/Screenshot%20(15).png)


## git log --graph

**Syntax:**
git log --graph

**Purpose:**
Displays commit history in a graphical branch structure.

**Example:**
git log --graph --oneline

**Output:**
* a3f12 Added file2
* 9b23d Added file1

**Screenshot:**
![git log graph](screenshots/Screenshot%20(16).png)

## git log --oneline

**Syntax:**
git log --oneline

**Purpose:**
Displays commit history in a compact one-line format.

**Example:**
git log --oneline

**Output:**
3f4c21a Added file2
1a2b3c4 Added file1


## git show

**Syntax:**
git show <commit-id>

**Purpose:**
Displays detailed information about a specific commit.

**Example:**
git show 3f4c21a

**Output:**
Shows commit details and file changes.

**Screenshot:**
![git show](screenshots/Screenshot%20(18).png)


## git diff

**Syntax:**
git diff

**Purpose:**
Displays changes between working directory and last commit.

**Example:**
git diff

**Output:**
Shows added or removed lines in files.

## git diff --staged

**Syntax:**
git diff --staged

**Purpose:**
Shows differences between staged files and the last commit.

**Example:**
git add file1.txt
git diff --staged

## git blame

**Syntax:**
git blame <file-name>

**Purpose:**
Shows who last modified each line of a file.

**Example:**
git blame file1.txt

**Output:**
Displays author and commit ID for each line.

**Screenshot:**
![git blame](screenshots/Screenshot%20(19).png)

## git reflog

**Syntax:**
git reflog

**Purpose:**
Shows the history of HEAD changes in the repository.

**Example:**
git reflog

**Output:**
HEAD@{0}: commit: Added file2

## git shortlog

**Syntax:**
git shortlog

**Purpose:**
Displays commit summary grouped by author.

**Example:**
git shortlog

**Output:**
Pravallika (2):
 Added file1
 Added file2

**Screenshot:**
![git shortlog](screenshots/Screenshot%20(20).png)

5. Commit Commands

## git commit

**Syntax:**
git commit

**Purpose:**
Creates a commit from staged changes in the repository.

**Example:**
git add commit_demo.txt
git commit

**Output:**
Opens the default editor to write a commit message.

## git commit -m

**Syntax:**
git commit -m "commit message"

**Purpose:**
Creates a commit with a message directly from the terminal.

**Example:**
git add commit_demo.txt
git commit -m "Updated commit_demo file"

**Output:**
1 file changed, 1 insertion(+)

## git commit --amend

**Syntax:**
git commit --amend

**Purpose:**
Modifies the most recent commit by changing the commit message or adding staged changes.

**Example:**
git add commit_demo.txt
git commit --amend

**Output:**
Allows editing of the previous commit.

## git commit --no-edit

**Syntax:**
git commit --amend --no-edit

**Purpose:**
Updates the last commit without changing the commit message.

**Example:**
git add commit_demo.txt
git commit --amend --no-edit

**Output:**
Updates the previous commit with new changes while keeping the same message.

**Screenshot:**
![git commit no edit](screenshots/Screenshot%20(22).png)