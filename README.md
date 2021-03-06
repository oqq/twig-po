twig-po
=======

Extract translation keys from twig templates and move them to PO

Instructions
------------

Fork and install (you need composer for that!):

    git clone git@github.com:natxet/twig-po.git
    cd twig-po
    composer install

Then, go to folder and execute:

    ./console find:tags /path/to/twig/templates  /path/to/messages.po Po -d -v -o

Once you see that nothing wrong is going to happen then

    ./console find:tags /path/to/twig/templates  /path/to/messages.po Po

If you want to use it with other tags, for instance, for your PHP files with _('translation')

    ./console find:tags /path/to/twig/templates  /path/to/messages.po Po -t "/_\((?: )?['\"]([^$]*)['\"](?: )?\)/muU"

For help:

    ./console help find:tags

Once you have the PO translated, convert to .mo with your editor or command line:

    msgfmt -cv -o messages.mo messages.po

(Note: you need to have gettext installed for this command)
