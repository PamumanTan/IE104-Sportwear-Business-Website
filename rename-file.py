import os

# root directory that you want to rename
path = "D:/coding/IE104-Sportwear-Business-Website"

"""
rename_path(path: str)
Rename a file or a folder

Parameter:
   path: str, directory of file or folder that you want to rename
"""
def rename_path(path: str):
    old_name = path.split(sep="/").pop()
    
    # rename
    new_name = old_name[0].lower()
    for i in range(1, len(old_name)):
        c = old_name[i]

        if c == "_" or c == " ":    # special characters except hyphen '-'
            new_name += "-" # change to hyphen
        elif (c >= 'A' and c <= 'Z'):   # uppercase letter
            # current character is hyphen & previous letter is not a special character
            if old_name[i-1] != '-' and not(old_name[i-1] == "_" or old_name[i-1] == " "):
                new_name += "-"     # add hyphen before
            new_name += c.lower()   # turn to lowercase letter
        else:
            new_name += c   # remain

    # modify name in different situation
    new_name = new_name.replace("side-bar", "sidebar")
    new_name = new_name.replace("nav-bar", "navbar")
    new_name = new_name.replace("d-b-", "db-")
    new_name = new_name.replace("r-e-a-d-m-e", "readme")

    # rename file or folder
    new_path = path.replace(old_name, new_name)
    os.rename(src=path, dst=new_path)
    return new_path

"""
rename_tree(path: str)
Rename all files and folders in a directory

Parameter:
    path: root directory that you want to rename
"""
def rename_tree(path: str):
    path = rename_path(path)
    if path.split(sep="/").pop()[0] != ".":     # not a system folder
        if os.path.isdir(path):     # is a folder
            for i in os.listdir(path):  # loop through a list of files and folders in the directory
                rename_tree(path + "/" + i)
    
rename_tree(path)