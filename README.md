# MkMagic

Create HTML mockups easily.

### Prerequisites

MKMagic requires PHP 5. That's all.


### Installation

- Clone the repository.
- Copy the whole project into your public-html's folder.
- Run web/index.php.


### Customize your mockup

- Open the project's configuration, located in src/config/project.json.
- Add entities under the "entities" section. An entity is a record definition.
- Add modules under the "modules" section. A module is an operational part of your mockup. Thus, it must have an associated entity.


### Customize the language and labels

- Open the dictionary file, located in src/config/dict.json.
- Change any label definition. Some labels use variable subsitution (%s).


### Add data fixtures

- Open the fixtures file, located in src/config/fixtures.json.
- Add some records (note that every record MUST have set every attribute defined in the entity).


### Customize the templates

By default, MkMagic uses SBAdmin. You can change every template located in src/templates folder. The exposed variables are:
- $_p_: the project model
- $_d_: the loaded dictionary
- $_f_: the loaded fixtures




### Please be compassionate!

Note that MkMMagic was developed in one night, so can have many mistakes yet. Feel free to contribute to this project.
