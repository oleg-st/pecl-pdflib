dnl
dnl $Id$
dnl

PHP_ARG_WITH(pdflib,for PDFlib support,
[  --with-pdflib[=DIR]     Include PDFlib support.])

if test "$PHP_PDFLIB" != "no"; then

  PHP_NEW_EXTENSION(pdf, pdf.c, $ext_shared)
  PHP_SUBST(PDF_SHARED_LIBADD)

  dnl #
  dnl # The main PDFlib configure
  dnl #

  dnl # MacOSX requires this
  case $host_alias in
    *darwin*)
      PHP_ADD_FRAMEWORK(CoreServices)
      PHP_ADD_FRAMEWORK(ApplicationServices)
      ;;
  esac

  case $PHP_PDFLIB in
    yes)
      AC_CHECK_LIB(pdf, PDF_open_pdi, [
        AC_DEFINE(HAVE_PDFLIB,1,[ ])
        PHP_ADD_LIBRARY(pdf,, PDF_SHARED_LIBADD)
      ],[
        AC_MSG_ERROR([
PDFlib extension requires at least pdflib 4.0.x.
See config.log for more information.
])
      ])
    ;;
    *)
      if test -f "$PHP_PDFLIB/include/pdflib.h" ; then

        PHP_CHECK_LIBRARY(pdf, PDF_open_pdi, 
        [
          AC_DEFINE(HAVE_PDFLIB,1,[ ]) 
          PHP_ADD_LIBRARY_WITH_PATH(pdf, $PHP_PDFLIB/lib, PDF_SHARED_LIBADD)
          PHP_ADD_INCLUDE($PHP_PDFLIB/include)
        ],[
          AC_MSG_ERROR([
PDFlib extension requires at least pdflib 4.0.x.
See config.log for more information.
])
        ],[
          -L$PHP_PDFLIB/lib $PDF_SHARED_LIBADD -lm
        ])
      else
        AC_MSG_ERROR([pdflib.h not found! Check the path passed to --with-pdflib=<PATH>. PATH should be the install prefix directory.])
      fi
    ;;
  esac
fi
