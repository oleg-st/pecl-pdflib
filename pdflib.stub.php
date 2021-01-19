<?php
/** @generate-function-entries */

class PDFlib
{
    /** @alias pdf_new */
    public function __construct() {}

    /**
     * @return bool
     * @alias pdf_delete
     */
    final public function delete(): bool {}

    /**
     * @param string $key
     * @param int $doc
     * @param int $page
     * @param int $reserved
     * @return string
     * @alias pdf_get_pdi_parameter
     */
    final public function get_pdi_parameter(string $key, int $doc, int $page, int $reserved): string {}

    /**
     * @param string $filename
     * @param string $optlist
     * @param int $reserved
     * @return int
     * @alias pdf_open_pdi
     */
    final public function open_pdi(string $filename, string $optlist, int $reserved): int {}

    /**
     * @param string $imagetype
     * @param string $source
     * @param string $data
     * @param int $length
     * @param int $width
     * @param int $height
     * @param int $components
     * @param int $bpc
     * @param string $params
     * @return int
     * @alias pdf_open_image
     */
    final public function open_image(string $imagetype, string $source, string $data, int $length, int $width, int $height, int $components, int $bpc, string $params): int {}

    /**
     * @param float $darray
     * @return bool
     * @alias pdf_setpolydash
     */
    final public function setpolydash(float $darray): bool {}

    /**
     * @param string $text
     * @param float $left
     * @param float $top
     * @param float $width
     * @param float $height
     * @param string $hmode
     * @param string $feature
     * @return int
     * @alias pdf_show_boxed
     */
    final public function show_boxed(string $text, float $left, float $top, float $width, float $height, string $hmode, string $feature): int {}

    /**
     * @param int $id
     * @return bool
     * @alias pdf_activate_item
     */
    final public function activate_item(int $id): bool {}

    /**
     * @param string $name
     * @param string $optlist
     * @return bool
     * @alias pdf_add_nameddest
     */
    final public function add_nameddest(string $name, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $path
     * @param float $x
     * @param float $y
     * @param string $type
     * @param string $optlist
     * @return int
     * @alias pdf_add_path_point
     */
    final public function add_path_point(int $path, float $x, float $y, string $type, string $optlist): int {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $folder
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_add_portfolio_file
     */
    final public function add_portfolio_file(int $folder, string $filename, string $optlist): int {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $parent
     * @param string $foldername
     * @param string $optlist
     * @return int
     * @alias pdf_add_portfolio_folder
     */
    final public function add_portfolio_folder(int $parent, string $foldername, string $optlist): int {}
#endif

    /**
     * @param int $table
     * @param int $column
     * @param int $row
     * @param string $text
     * @param string $optlist
     * @return int
     * @alias pdf_add_table_cell
     */
    final public function add_table_cell(int $table, int $column, int $row, string $text, string $optlist): int {}

    /**
     * @param int $textflow
     * @param string $text
     * @param string $optlist
     * @return int
     * @alias pdf_add_textflow
     */
    final public function add_textflow(int $textflow, string $text, string $optlist): int {}

    /**
     * @param int $image
     * @return bool
     * @alias pdf_add_thumbnail
     */
    final public function add_thumbnail(int $image): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param float $dx
     * @param float $dy
     * @return bool
     * @alias pdf_align
     */
    final public function align(float $dx, float $dy): bool {}
#endif

    /**
     * @param float $x
     * @param float $y
     * @param float $r
     * @param float $alpha
     * @param float $beta
     * @return bool
     * @alias pdf_arc
     */
    final public function arc(float $x, float $y, float $r, float $alpha, float $beta): bool {}

    /**
     * @param float $x
     * @param float $y
     * @param float $r
     * @param float $alpha
     * @param float $beta
     * @return bool
     * @alias pdf_arcn
     */
    final public function arcn(float $x, float $y, float $r, float $alpha, float $beta): bool {}

    /**
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_begin_document
     */
    final public function begin_document(string $filename, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_begin_dpart
     */
    final public function begin_dpart(string $optlist): bool {}
#endif

    /**
     * @param string $fontname
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $e
     * @param float $f
     * @param string $optlist
     * @return bool
     * @alias pdf_begin_font
     */
    final public function begin_font(string $fontname, float $a, float $b, float $c, float $d, float $e, float $f, string $optlist): bool {}

    /**
     * @param string $glyphname
     * @param float $wx
     * @param float $llx
     * @param float $lly
     * @param float $urx
     * @param float $ury
     * @return bool
     * @alias pdf_begin_glyph
     */
    final public function begin_glyph(string $glyphname, float $wx, float $llx, float $lly, float $urx, float $ury): bool {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $uv
     * @param string $optlist
     * @return bool
     * @alias pdf_begin_glyph_ext
     */
    final public function begin_glyph_ext(int $uv, string $optlist): bool {}
#endif

    /**
     * @param string $tagname
     * @param string $optlist
     * @return int
     * @alias pdf_begin_item
     */
    final public function begin_item(string $tagname, string $optlist): int {}

    /**
     * @param int $layer
     * @return bool
     * @alias pdf_begin_layer
     */
    final public function begin_layer(int $layer): bool {}

    /**
     * @param string $tagname
     * @param string $optlist
     * @return bool
     * @alias pdf_begin_mc
     */
    final public function begin_mc(string $tagname, string $optlist): bool {}

    /**
     * @param float $width
     * @param float $height
     * @param string $optlist
     * @return bool
     * @alias pdf_begin_page_ext
     */
    final public function begin_page_ext(float $width, float $height, string $optlist): bool {}

    /**
     * @param float $width
     * @param float $height
     * @param float $xstep
     * @param float $ystep
     * @param int $painttype
     * @return int
     * @alias pdf_begin_pattern
     */
    final public function begin_pattern(float $width, float $height, float $xstep, float $ystep, int $painttype): int {}

#if PDFLIB_MAJORVERSION >= 9 && (PDFLIB_MINORVERSION >= 1 || PDFLIB_REVISION >= 2)
    /**
     * @param float $width
     * @param float $height
     * @param string $optlist
     * @return int
     * @alias pdf_begin_pattern_ext
     */
    final public function begin_pattern_ext(float $width, float $height, string $optlist): int {}
#endif

    /**
     * @param float $width
     * @param float $height
     * @return int
     * @alias pdf_begin_template
     */
    final public function begin_template(float $width, float $height): int {}

    /**
     * @param float $width
     * @param float $height
     * @param string $optlist
     * @return int
     * @alias pdf_begin_template_ext
     */
    final public function begin_template_ext(float $width, float $height, string $optlist): int {}

    /**
     * @param float $x
     * @param float $y
     * @param float $r
     * @return bool
     * @alias pdf_circle
     */
    final public function circle(float $x, float $y, float $r): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @return bool
     * @alias pdf_circular_arc
     */
    final public function circular_arc(float $x1, float $y1, float $x2, float $y2): bool {}
#endif

    /**
     * @return bool
     * @alias pdf_clip
     */
    final public function clip(): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $font
     * @return bool
     * @alias pdf_close_font
     */
    final public function close_font(int $font): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $graphics
     * @return bool
     * @alias pdf_close_graphics
     */
    final public function close_graphics(int $graphics): bool {}
#endif

    /**
     * @param int $image
     * @return bool
     * @alias pdf_close_image
     */
    final public function close_image(int $image): bool {}

    /**
     * @param int $doc
     * @return bool
     * @alias pdf_close_pdi
     */
    final public function close_pdi(int $doc): bool {}

    /**
     * @param int $doc
     * @return bool
     * @alias pdf_close_pdi_document
     */
    final public function close_pdi_document(int $doc): bool {}

    /**
     * @param int $page
     * @return bool
     * @alias pdf_close_pdi_page
     */
    final public function close_pdi_page(int $page): bool {}

    /**
     * @return bool
     * @alias pdf_closepath
     */
    final public function closepath(): bool {}

    /**
     * @return bool
     * @alias pdf_closepath_fill_stroke
     */
    final public function closepath_fill_stroke(): bool {}

    /**
     * @return bool
     * @alias pdf_closepath_stroke
     */
    final public function closepath_stroke(): bool {}

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $e
     * @param float $f
     * @return bool
     * @alias pdf_concat
     */
    final public function concat(float $a, float $b, float $c, float $d, float $e, float $f): bool {}

    /**
     * @param string $text
     * @return bool
     * @alias pdf_continue_text
     */
    final public function continue_text(string $text): bool {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $inputformat
     * @param string $inputstring
     * @param string $optlist
     * @return string
     * @alias pdf_convert_to_unicode
     */
    final public function convert_to_unicode(string $inputformat, string $inputstring, string $optlist): string {}
#endif

    /**
     * @param string $username
     * @param string $optlist
     * @return int
     * @alias pdf_create_3dview
     */
    final public function create_3dview(string $username, string $optlist): int {}

    /**
     * @param string $type
     * @param string $optlist
     * @return int
     * @alias pdf_create_action
     */
    final public function create_action(string $type, string $optlist): int {}

    /**
     * @param float $llx
     * @param float $lly
     * @param float $urx
     * @param float $ury
     * @param string $type
     * @param string $optlist
     * @return bool
     * @alias pdf_create_annotation
     */
    final public function create_annotation(float $llx, float $lly, float $urx, float $ury, string $type, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 9 && PDFLIB_MINORVERSION >= 1
    /**
     * @param string $optlist
     * @return int
     * @alias pdf_create_devicen
     */
    final public function create_devicen(string $optlist): int {}
#endif

    /**
     * @param string $text
     * @param string $optlist
     * @return int
     * @alias pdf_create_bookmark
     */
    final public function create_bookmark(string $text, string $optlist): int {}

    /**
     * @param float $llx
     * @param float $lly
     * @param float $urx
     * @param float $ury
     * @param string $name
     * @param string $type
     * @param string $optlist
     * @return bool
     * @alias pdf_create_field
     */
    final public function create_field(float $llx, float $lly, float $urx, float $ury, string $name, string $type, string $optlist): bool {}

    /**
     * @param string $name
     * @param string $optlist
     * @return bool
     * @alias pdf_create_fieldgroup
     */
    final public function create_fieldgroup(string $name, string $optlist): bool {}

    /**
     * @param string $optlist
     * @return int
     * @alias pdf_create_gstate
     */
    final public function create_gstate(string $optlist): int {}

    /**
     * @param string $filename
     * @param string $data
     * @param string $optlist
     * @return bool
     * @alias pdf_create_pvf
     */
    final public function create_pvf(string $filename, string $data, string $optlist): bool {}

    /**
     * @param string $text
     * @param string $optlist
     * @return int
     * @alias pdf_create_textflow
     */
    final public function create_textflow(string $text, string $optlist): int {}

    /**
     * @param float $x1
     * @param float $y1
     * @param float $x2
     * @param float $y2
     * @param float $x3
     * @param float $y3
     * @return bool
     * @alias pdf_curveto
     */
    final public function curveto(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

    /**
     * @param string $name
     * @param string $optlist
     * @return int
     * @alias pdf_define_layer
     */
    final public function define_layer(string $name, string $optlist): int {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $path
     * @return bool
     * @alias pdf_delete_path
     */
    final public function delete_path(int $path): bool {}
#endif

    /**
     * @param string $filename
     * @return int
     * @alias pdf_delete_pvf
     */
    final public function delete_pvf(string $filename): int {}

    /**
     * @param int $table
     * @param string $optlist
     * @return bool
     * @alias pdf_delete_table
     */
    final public function delete_table(int $table, string $optlist): bool {}

    /**
     * @param int $textflow
     * @return bool
     * @alias pdf_delete_textflow
     */
    final public function delete_textflow(int $textflow): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $path
     * @param float $x
     * @param float $y
     * @param string $optlist
     * @return bool
     * @alias pdf_draw_path
     */
    final public function draw_path(int $path, float $x, float $y, string $optlist): bool {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param float $x
     * @param float $y
     * @param float $rx
     * @param float $ry
     * @return bool
     * @alias pdf_ellipse
     */
    final public function ellipse(float $x, float $y, float $rx, float $ry): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param float $x
     * @param float $y
     * @param float $rx
     * @param float $ry
     * @param string $optlist
     * @return bool
     * @alias pdf_elliptical_arc
     */
    final public function elliptical_arc(float $x, float $y, float $rx, float $ry, string $optlist): bool {}
#endif

    /**
     * @param string $encoding
     * @param int $slot
     * @param string $glyphname
     * @param int $uv
     * @return bool
     * @alias pdf_encoding_set_char
     */
    final public function encoding_set_char(string $encoding, int $slot, string $glyphname, int $uv): bool {}

    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_end_document
     */
    final public function end_document(string $optlist): bool {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_end_dpart
     */
    final public function end_dpart(string $optlist): bool {}
#endif

    /**
     * @return bool
     * @alias pdf_end_font
     */
    final public function end_font(): bool {}

    /**
     * @return bool
     * @alias pdf_end_glyph
     */
    final public function end_glyph(): bool {}

    /**
     * @param int $id
     * @return bool
     * @alias pdf_end_item
     */
    final public function end_item(int $id): bool {}

    /**
     * @return bool
     * @alias pdf_end_layer
     */
    final public function end_layer(): bool {}

    /**
     * @return bool
     * @alias pdf_end_mc
     */
    final public function end_mc(): bool {}

    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_end_page_ext
     */
    final public function end_page_ext(string $optlist): bool {}

    /**
     * @return bool
     * @alias pdf_end_pattern
     */
    final public function end_pattern(): bool {}

    /**
     * @return bool
     * @alias pdf_end_template
     */
    final public function end_template(): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param float $width
     * @param float $height
     * @return bool
     * @alias pdf_end_template_ext
     */
    final public function end_template_ext(float $width, float $height): bool {}
#endif

    /**
     * @return bool
     * @alias pdf_endpath
     */
    final public function endpath(): bool {}

    /**
     * @return bool
     * @alias pdf_fill
     */
    final public function fill(): bool {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $page
     * @param string $blockname
     * @param int $graphics
     * @param string $optlist
     * @return int
     * @alias pdf_fill_graphicsblock
     */
    final public function fill_graphicsblock(int $page, string $blockname, int $graphics, string $optlist): int {}
#endif

    /**
     * @param int $page
     * @param string $blockname
     * @param int $image
     * @param string $optlist
     * @return int
     * @alias pdf_fill_imageblock
     */
    final public function fill_imageblock(int $page, string $blockname, int $image, string $optlist): int {}

    /**
     * @param int $page
     * @param string $blockname
     * @param int $contents
     * @param string $optlist
     * @return int
     * @alias pdf_fill_pdfblock
     */
    final public function fill_pdfblock(int $page, string $blockname, int $contents, string $optlist): int {}

    /**
     * @return bool
     * @alias pdf_fill_stroke
     */
    final public function fill_stroke(): bool {}

    /**
     * @param int $page
     * @param string $blockname
     * @param string $text
     * @param string $optlist
     * @return int
     * @alias pdf_fill_textblock
     */
    final public function fill_textblock(int $page, string $blockname, string $text, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $graphics
     * @param float $x
     * @param float $y
     * @param string $optlist
     * @return bool
     * @alias pdf_fit_graphics
     */
    final public function fit_graphics(int $graphics, float $x, float $y, string $optlist): bool {}
#endif

    /**
     * @param int $image
     * @param float $x
     * @param float $y
     * @param string $optlist
     * @return bool
     * @alias pdf_fit_image
     */
    final public function fit_image(int $image, float $x, float $y, string $optlist): bool {}

    /**
     * @param int $page
     * @param float $x
     * @param float $y
     * @param string $optlist
     * @return bool
     * @alias pdf_fit_pdi_page
     */
    final public function fit_pdi_page(int $page, float $x, float $y, string $optlist): bool {}

    /**
     * @param int $table
     * @param float $llx
     * @param float $lly
     * @param float $urx
     * @param float $ury
     * @param string $optlist
     * @return string
     * @alias pdf_fit_table
     */
    final public function fit_table(int $table, float $llx, float $lly, float $urx, float $ury, string $optlist): string {}

    /**
     * @param int $textflow
     * @param float $llx
     * @param float $lly
     * @param float $urx
     * @param float $ury
     * @param string $optlist
     * @return string
     * @alias pdf_fit_textflow
     */
    final public function fit_textflow(int $textflow, float $llx, float $lly, float $urx, float $ury, string $optlist): string {}

    /**
     * @param string $text
     * @param float $x
     * @param float $y
     * @param string $optlist
     * @return bool
     * @alias pdf_fit_textline
     */
    final public function fit_textline(string $text, float $x, float $y, string $optlist): bool {}

    /**
     * @return string
     * @alias pdf_get_apiname
     */
    final public function get_apiname(): string {}

    /**
     * @return string
     * @alias pdf_get_buffer
     */
    final public function get_buffer(): string {}

    /**
     * @return string
     * @alias pdf_get_errmsg
     */
    final public function get_errmsg(): string {}

    /**
     * @return int
     * @alias pdf_get_errnum
     */
    final public function get_errnum(): int {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_get_option
     */
    final public function get_option(string $keyword, string $optlist): float {}
#endif

    /**
     * @param string $key
     * @param float $modifier
     * @return string
     * @alias pdf_get_parameter
     */
    final public function get_parameter(string $key, float $modifier): string {}

    /**
     * @param string $key
     * @param int $doc
     * @param int $page
     * @param int $reserved
     * @return float
     * @alias pdf_get_pdi_value
     */
    final public function get_pdi_value(string $key, int $doc, int $page, int $reserved): float {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $idx
     * @param string $optlist
     * @return string
     * @alias pdf_get_string
     */
    final public function get_string(int $idx, string $optlist): string {}
#endif

    /**
     * @param string $key
     * @param float $modifier
     * @return float
     * @alias pdf_get_value
     */
    final public function get_value(string $key, float $modifier): float {}

    /**
     * @param int $font
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_font
     */
    final public function info_font(int $font, string $keyword, string $optlist): float {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $graphics
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_graphics
     */
    final public function info_graphics(int $graphics, string $keyword, string $optlist): float {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $image
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_image
     */
    final public function info_image(int $image, string $keyword, string $optlist): float {}
#endif

    /**
     * @param string $boxname
     * @param int $num
     * @param string $keyword
     * @return float
     * @alias pdf_info_matchbox
     */
    final public function info_matchbox(string $boxname, int $num, string $keyword): float {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $path
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_path
     */
    final public function info_path(int $path, string $keyword, string $optlist): float {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param int $page
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_pdi_page
     */
    final public function info_pdi_page(int $page, string $keyword, string $optlist): float {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $filename
     * @param string $keyword
     * @return float
     * @alias pdf_info_pvf
     */
    final public function info_pvf(string $filename, string $keyword): float {}
#endif

    /**
     * @param int $table
     * @param string $keyword
     * @return float
     * @alias pdf_info_table
     */
    final public function info_table(int $table, string $keyword): float {}

    /**
     * @param int $textflow
     * @param string $keyword
     * @return float
     * @alias pdf_info_textflow
     */
    final public function info_textflow(int $textflow, string $keyword): float {}

    /**
     * @param string $text
     * @param string $keyword
     * @param string $optlist
     * @return float
     * @alias pdf_info_textline
     */
    final public function info_textline(string $text, string $keyword, string $optlist): float {}

    /**
     * @return bool
     * @alias pdf_initgraphics
     */
    final public function initgraphics(): bool {}

    /**
     * @param float $x
     * @param float $y
     * @return bool
     * @alias pdf_lineto
     */
    final public function lineto(float $x, float $y): bool {}

    /**
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_load_3ddata
     */
    final public function load_3ddata(string $filename, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $type
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_load_asset
     */
    final public function load_asset(string $type, string $filename, string $optlist): int {}
#endif

    /**
     * @param string $fontname
     * @param string $encoding
     * @param string $optlist
     * @return int
     * @alias pdf_load_font
     */
    final public function load_font(string $fontname, string $encoding, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $type
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_load_graphics
     */
    final public function load_graphics(string $type, string $filename, string $optlist): int {}
#endif

    /**
     * @param string $profilename
     * @param string $optlist
     * @return int
     * @alias pdf_load_iccprofile
     */
    final public function load_iccprofile(string $profilename, string $optlist): int {}

    /**
     * @param string $imagetype
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_load_image
     */
    final public function load_image(string $imagetype, string $filename, string $optlist): int {}

    /**
     * @param string $spotname
     * @return int
     * @alias pdf_makespotcolor
     */
    final public function makespotcolor(string $spotname): int {}

    /**
     * @param string $tagname
     * @param string $optlist
     * @return bool
     * @alias pdf_mc_point
     */
    final public function mc_point(string $tagname, string $optlist): bool {}

    /**
     * @param float $x
     * @param float $y
     * @return bool
     * @alias pdf_moveto
     */
    final public function moveto(float $x, float $y): bool {}

    /**
     * @param string $filename
     * @param string $optlist
     * @return int
     * @alias pdf_open_pdi_document
     */
    final public function open_pdi_document(string $filename, string $optlist): int {}

    /**
     * @param int $doc
     * @param int $pagenumber
     * @param string $optlist
     * @return int
     * @alias pdf_open_pdi_page
     */
    final public function open_pdi_page(int $doc, int $pagenumber, string $optlist): int {}

    /**
     * @param int $doc
     * @param string $path
     * @return float
     * @alias pdf_pcos_get_number
     */
    final public function pcos_get_number(int $doc, string $path): float {}

    /**
     * @param int $doc
     * @param string $path
     * @return string
     * @alias pdf_pcos_get_string
     */
    final public function pcos_get_string(int $doc, string $path): string {}

    /**
     * @param int $doc
     * @param string $optlist
     * @param string $path
     * @return string
     * @alias pdf_pcos_get_stream
     */
    final public function pcos_get_stream(int $doc, string $optlist, string $path): string {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $container
     * @param string $optlist
     * @return bool
     * @alias pdf_poca_delete
     */
    final public function poca_delete(int $container, string $optlist): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $container
     * @param string $optlist
     * @return bool
     * @alias pdf_poca_insert
     */
    final public function poca_insert(int $container, string $optlist): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $optlist
     * @return int
     * @alias pdf_poca_new
     */
    final public function poca_new(string $optlist): int {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
    /**
     * @param int $container
     * @param string $optlist
     * @return bool
     * @alias pdf_poca_remove
     */
    final public function poca_remove(int $container, string $optlist): bool {}
#endif

    /**
     * @param int $doc
     * @param int $page
     * @param string $optlist
     * @return int
     * @alias pdf_process_pdi
     */
    final public function process_pdi(int $doc, int $page, string $optlist): int {}

    /**
     * @param float $x
     * @param float $y
     * @param float $width
     * @param float $height
     * @return bool
     * @alias pdf_rect
     */
    final public function rect(float $x, float $y, float $width, float $height): bool {}

    /**
     * @return bool
     * @alias pdf_restore
     */
    final public function restore(): bool {}

    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_resume_page
     */
    final public function resume_page(string $optlist): bool {}

    /**
     * @param float $phi
     * @return bool
     * @alias pdf_rotate
     */
    final public function rotate(float $phi): bool {}

    /**
     * @return bool
     * @alias pdf_save
     */
    final public function save(): bool {}

    /**
     * @param float $sx
     * @param float $sy
     * @return bool
     * @alias pdf_scale
     */
    final public function scale(float $sx, float $sy): bool {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_set_graphics_option
     */
    final public function set_graphics_option(string $optlist): bool {}
#endif

    /**
     * @param int $gstate
     * @return bool
     * @alias pdf_set_gstate
     */
    final public function set_gstate(int $gstate): bool {}

    /**
     * @param string $key
     * @param string $value
     * @return bool
     * @alias pdf_set_info
     */
    final public function set_info(string $key, string $value): bool {}

    /**
     * @param string $type
     * @param string $optlist
     * @return bool
     * @alias pdf_set_layer_dependency
     */
    final public function set_layer_dependency(string $type, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_set_option
     */
    final public function set_option(string $optlist): bool {}
#endif

    /**
     * @param string $key
     * @param string $value
     * @return bool
     * @alias pdf_set_parameter
     */
    final public function set_parameter(string $key, string $value): bool {}

#if PDFLIB_MAJORVERSION >= 9
    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_set_text_option
     */
    final public function set_text_option(string $optlist): bool {}
#endif

    /**
     * @param float $x
     * @param float $y
     * @return bool
     * @alias pdf_set_text_pos
     */
    final public function set_text_pos(float $x, float $y): bool {}

    /**
     * @param string $key
     * @param float $value
     * @return bool
     * @alias pdf_set_value
     */
    final public function set_value(string $key, float $value): bool {}

    /**
     * @param string $fstype
     * @param string $colorspace
     * @param float $c1
     * @param float $c2
     * @param float $c3
     * @param float $c4
     * @return bool
     * @alias pdf_setcolor
     */
    final public function setcolor(string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4): bool {}

    /**
     * @param float $b
     * @param float $w
     * @return bool
     * @alias pdf_setdash
     */
    final public function setdash(float $b, float $w): bool {}

    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_setdashpattern
     */
    final public function setdashpattern(string $optlist): bool {}

    /**
     * @param float $flatness
     * @return bool
     * @alias pdf_setflat
     */
    final public function setflat(float $flatness): bool {}

    /**
     * @param int $font
     * @param float $fontsize
     * @return bool
     * @alias pdf_setfont
     */
    final public function setfont(int $font, float $fontsize): bool {}

    /**
     * @param int $linecap
     * @return bool
     * @alias pdf_setlinecap
     */
    final public function setlinecap(int $linecap): bool {}

    /**
     * @param int $linejoin
     * @return bool
     * @alias pdf_setlinejoin
     */
    final public function setlinejoin(int $linejoin): bool {}

    /**
     * @param float $width
     * @return bool
     * @alias pdf_setlinewidth
     */
    final public function setlinewidth(float $width): bool {}

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     * @param float $d
     * @param float $e
     * @param float $f
     * @return bool
     * @alias pdf_setmatrix
     */
    final public function setmatrix(float $a, float $b, float $c, float $d, float $e, float $f): bool {}

    /**
     * @param float $miter
     * @return bool
     * @alias pdf_setmiterlimit
     */
    final public function setmiterlimit(float $miter): bool {}

    /**
     * @param string $type
     * @param float $x0
     * @param float $y0
     * @param float $x1
     * @param float $y1
     * @param float $c1
     * @param float $c2
     * @param float $c3
     * @param float $c4
     * @param string $optlist
     * @return int
     * @alias pdf_shading
     */
    final public function shading(string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist): int {}

    /**
     * @param int $shading
     * @param string $optlist
     * @return int
     * @alias pdf_shading_pattern
     */
    final public function shading_pattern(int $shading, string $optlist): int {}

    /**
     * @param int $shading
     * @return bool
     * @alias pdf_shfill
     */
    final public function shfill(int $shading): bool {}

    /**
     * @param string $text
     * @return bool
     * @alias pdf_show
     */
    final public function show(string $text): bool {}

    /**
     * @param string $text
     * @param float $x
     * @param float $y
     * @return bool
     * @alias pdf_show_xy
     */
    final public function show_xy(string $text, float $x, float $y): bool {}

    /**
     * @param float $alpha
     * @param float $beta
     * @return bool
     * @alias pdf_skew
     */
    final public function skew(float $alpha, float $beta): bool {}

    /**
     * @param string $text
     * @param int $font
     * @param float $fontsize
     * @return float
     * @alias pdf_stringwidth
     */
    final public function stringwidth(string $text, int $font, float $fontsize): float {}

    /**
     * @return bool
     * @alias pdf_stroke
     */
    final public function stroke(): bool {}

    /**
     * @param string $optlist
     * @return bool
     * @alias pdf_suspend_page
     */
    final public function suspend_page(string $optlist): bool {}

    /**
     * @param float $tx
     * @param float $ty
     * @return bool
     * @alias pdf_translate
     */
    final public function translate(float $tx, float $ty): bool {}

    /**
     * @param string $utf16string
     * @return string
     * @alias pdf_utf16_to_utf8
     */
    final public function utf16_to_utf8(string $utf16string): string {}

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param string $utf8string
     * @param string $ordering
     * @return string
     * @alias pdf_utf8_to_utf16
     */
    final public function utf8_to_utf16(string $utf8string, string $ordering): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param string $utf32string
     * @return string
     * @alias pdf_utf32_to_utf8
     */
    final public function utf32_to_utf8(string $utf32string): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param string $utf8string
     * @param string $ordering
     * @return string
     * @alias pdf_utf8_to_utf32
     */
    final public function utf8_to_utf32(string $utf8string, string $ordering): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
    /**
     * @param string $utf16string
     * @param string $ordering
     * @return string
     * @alias pdf_utf16_to_utf32
     */
    final public function utf16_to_utf32(string $utf16string, string $ordering): string {}
#endif

    /**
     * @param string $utf32string
     * @param string $ordering
     * @return string
     * @alias pdf_utf32_to_utf16
     */
    final public function utf32_to_utf16(string $utf32string, string $ordering): string {}
}

class PDFlibException
{
    /** @return string */
    final public function get_apiname(): string {}

    /** @return string */
    final public function get_errmsg(): string {}
    
    /** @return int */
    final public function get_errnum(): int {}
}

/** @return resource */
function pdf_new() {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_delete($pdf): bool {}

/**
 * @param resource $pdf
 * @param string $key
 * @param int $doc
 * @param int $page
 * @param int $reserved
 * @return string
 */
function pdf_get_pdi_parameter($pdf, string $key, int $doc, int $page, int $reserved): string {}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $source
 * @param string $data
 * @param int $length
 * @param int $width
 * @param int $height
 * @param int $components
 * @param int $bpc
 * @param string $params
 * @return int
 */
function pdf_open_image($pdf, string $imagetype, string $source, string $data, int $length, int $width, int $height, int $components, int $bpc, string $params): int {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * @param int $reserved
 * @return int
 */
function pdf_open_pdi($pdf, string $filename, string $optlist, int $reserved): int {}

/**
 * @param resource $pdf
 * @param float $darray
 * @return bool
 */
function pdf_setpolydash($pdf, float $darray): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @param float $left
 * @param float $top
 * @param float $width
 * @param float $height
 * @param string $hmode
 * @param string $feature
 * @return int
 */
function pdf_show_boxed($pdf, string $text, float $left, float $top, float $width, float $height, string $hmode, string $feature): int {}

/**
 * @param resource $pdf
 * @param int $id
 * @return bool
 */
function pdf_activate_item($pdf, int $id): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @param int $parent
 * @param int $open
 * @return int
 */
function pdf_add_bookmark($pdf, string $text, int $parent, int $open): int {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $filename
 * @return bool
 */
function pdf_add_launchlink($pdf, float $llx, float $lly, float $urx, float $ury, string $filename): bool {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param int $page
 * @param string $optlist
 * @return bool
 */
function pdf_add_locallink($pdf, float $llx, float $lly, float $urx, float $ury, int $page, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 * @return bool
 */
function pdf_add_nameddest($pdf, string $name, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $contents
 * @param string $title
 * @param string $icon
 * @param int $open
 * @return bool
 */
function pdf_add_note($pdf, float $llx, float $lly, float $urx, float $ury, string $contents, string $title, string $icon, int $open): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $path
 * @param float $x
 * @param float $y
 * @param string $type
 * @param string $optlist
 * @return int
 */
function pdf_add_path_point($pdf, int $path, float $x, float $y, string $type, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $filename
 * @param int $page
 * @param string $optlist
 * @return bool
 */
function pdf_add_pdflink($pdf, float $llx, float $lly, float $urx, float $ury, string $filename, int $page, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $folder
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_add_portfolio_file($pdf, int $folder, string $filename, string $optlist): int {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $parent
 * @param string $foldername
 * @param string $optlist
 * @return int
 */
function pdf_add_portfolio_folder($pdf, int $parent, string $foldername, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param int $table
 * @param int $column
 * @param int $row
 * @param string $text
 * @param string $optlist
 * @return int
 */
function pdf_add_table_cell($pdf, int $table, int $column, int $row, string $text, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $textflow
 * @param string $text
 * @param string $optlist
 * @return int
 */
function pdf_add_textflow($pdf, int $textflow, string $text, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $image
 * @return bool
 */
function pdf_add_thumbnail($pdf, int $image): bool {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $url
 * @return bool
 */
function pdf_add_weblink($pdf, float $llx, float $lly, float $urx, float $ury, string $url): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param float $dx
 * @param float $dy
 * @return bool
 */
function pdf_align($pdf, float $dx, float $dy): bool {}
#endif

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 * @param float $alpha
 * @param float $beta
 * @return bool
 */
function pdf_arc($pdf, float $x, float $y, float $r, float $alpha, float $beta): bool {}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 * @param float $alpha
 * @param float $beta
 * @return bool
 */
function pdf_arcn($pdf, float $x, float $y, float $r, float $alpha, float $beta): bool {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $filename
 * @param string $description
 * @param string $author
 * @param string $mimetype
 * @param string $icon
 * @return bool
 */
function pdf_attach_file($pdf, float $llx, float $lly, float $urx, float $ury, string $filename, string $description, string $author, string $mimetype, string $icon): bool {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_begin_document($pdf, string $filename, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_begin_dpart($pdf, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param string $fontname
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 * @param string $optlist
 * @return bool
 */
function pdf_begin_font($pdf, string $fontname, float $a, float $b, float $c, float $d, float $e, float $f, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param string $glyphname
 * @param float $wx
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @return bool
 */
function pdf_begin_glyph($pdf, string $glyphname, float $wx, float $llx, float $lly, float $urx, float $ury): bool {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $uv
 * @param string $optlist
 * @return bool
 */
function pdf_begin_glyph_ext($pdf, int $uv, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param string $tagname
 * @param string $optlist
 * @return int
 */
function pdf_begin_item($pdf, string $tagname, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $layer
 * @return bool
 */
function pdf_begin_layer($pdf, int $layer): bool {}

/**
 * @param resource $pdf
 * @param string $tagname
 * @param string $optlist
 * @return bool
 */
function pdf_begin_mc($pdf, string $tagname, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @return bool
 */
function pdf_begin_page($pdf, float $width, float $height): bool {}

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param string $optlist
 * @return bool
 */
function pdf_begin_page_ext($pdf, float $width, float $height, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param float $xstep
 * @param float $ystep
 * @param int $painttype
 * @return int
 */
function pdf_begin_pattern($pdf, float $width, float $height, float $xstep, float $ystep, int $painttype): int {}

#if PDFLIB_MAJORVERSION >= 9 && (PDFLIB_MINORVERSION >= 1 || PDFLIB_REVISION >= 2)
/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param string $optlist
 * @return int
 */
function pdf_begin_pattern_ext($pdf, float $width, float $height, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @return int
 */
function pdf_begin_template($pdf, float $width, float $height): int {}

/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @param string $optlist
 * @return int
 */
function pdf_begin_template_ext($pdf, float $width, float $height, string $optlist): int {}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $r
 * @return bool
 */
function pdf_circle($pdf, float $x, float $y, float $r): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param float $x1
 * @param float $y1
 * @param float $x2
 * @param float $y2
 * @return bool
 */
function pdf_circular_arc($pdf, float $x1, float $y1, float $x2, float $y2): bool {}
#endif

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_clip($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_close($pdf): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $font
 * @return bool
 */
function pdf_close_font($pdf, int $font): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $graphics
 * @return bool
 */
function pdf_close_graphics($pdf, int $graphics): bool {}
#endif

/**
 * @param resource $pdf
 * @param int $image
 * @return bool
 */
function pdf_close_image($pdf, int $image): bool {}

/**
 * @param resource $pdf
 * @param int $doc
 * @return bool
 */
function pdf_close_pdi($pdf, int $doc): bool {}

/**
 * @param resource $pdf
 * @param int $doc
 * @return bool
 */
function pdf_close_pdi_document($pdf, int $doc): bool {}

/**
 * @param resource $pdf
 * @param int $page
 * @return bool
 */
function pdf_close_pdi_page($pdf, int $page): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_closepath($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_closepath_fill_stroke($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_closepath_stroke($pdf): bool {}

/**
 * @param resource $pdf
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 * @return bool
 */
function pdf_concat($pdf, float $a, float $b, float $c, float $d, float $e, float $f): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @return bool
 */
function pdf_continue_text($pdf, string $text): bool {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $inputformat
 * @param string $inputstring
 * @param string $optlist
 * @return string
 */
function pdf_convert_to_unicode($pdf, string $inputformat, string $inputstring, string $optlist): string {}
#endif

/**
 * @param resource $pdf
 * @param string $username
 * @param string $optlist
 * @return int
 */
function pdf_create_3dview($pdf, string $username, string $optlist): int {}

/**
 * @param resource $pdf
 * @param string $type
 * @param string $optlist
 * @return int
 */
function pdf_create_action($pdf, string $type, string $optlist): int {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $type
 * @param string $optlist
 * @return bool
 */
function pdf_create_annotation($pdf, float $llx, float $lly, float $urx, float $ury, string $type, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 9 && PDFLIB_MINORVERSION >= 1
/**
 * @param resource $pdf
 * @param string $optlist
 * @return int
 */
function pdf_create_devicen($pdf, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param string $text
 * @param string $optlist
 * @return int
 */
function pdf_create_bookmark($pdf, string $text, string $optlist): int {}

/**
 * @param resource $pdf
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $name
 * @param string $type
 * @param string $optlist
 * @return bool
 */
function pdf_create_field($pdf, float $llx, float $lly, float $urx, float $ury, string $name, string $type, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 * @return bool
 */
function pdf_create_fieldgroup($pdf, string $name, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return int
 */
function pdf_create_gstate($pdf, string $optlist): int {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $data
 * @param string $optlist
 * @return bool
 */
function pdf_create_pvf($pdf, string $filename, string $data, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @param string $optlist
 * @return int
 */
function pdf_create_textflow($pdf, string $text, string $optlist): int {}

/**
 * @param resource $pdf
 * @param float $x1
 * @param float $y1
 * @param float $x2
 * @param float $y2
 * @param float $x3
 * @param float $y3
 * @return bool
 */
function pdf_curveto($pdf, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3): bool {}

/**
 * @param resource $pdf
 * @param string $name
 * @param string $optlist
 * @return int
 */
function pdf_define_layer($pdf, string $name, string $optlist): int {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $path
 * @return bool
 */
function pdf_delete_path($pdf, int $path): bool {}
#endif

/**
 * @param resource $pdf
 * @param string $filename
 * @return int
 */
function pdf_delete_pvf($pdf, string $filename): int {}

/**
 * @param resource $pdf
 * @param int $table
 * @param string $optlist
 * @return bool
 */
function pdf_delete_table($pdf, int $table, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param int $textflow
 * @return bool
 */
function pdf_delete_textflow($pdf, int $textflow): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $path
 * @param float $x
 * @param float $y
 * @param string $optlist
 * @return bool
 */
function pdf_draw_path($pdf, int $path, float $x, float $y, string $optlist): bool {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $rx
 * @param float $ry
 * @return bool
 */
function pdf_ellipse($pdf, float $x, float $y, float $rx, float $ry): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $rx
 * @param float $ry
 * @param string $optlist
 * @return bool
 */
function pdf_elliptical_arc($pdf, float $x, float $y, float $rx, float $ry, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param string $encoding
 * @param int $slot
 * @param string $glyphname
 * @param int $uv
 * @return bool
 */
function pdf_encoding_set_char($pdf, string $encoding, int $slot, string $glyphname, int $uv): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_end_document($pdf, string $optlist): bool {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_end_dpart($pdf, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_font($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_glyph($pdf): bool {}

/**
 * @param resource $pdf
 * @param int $id
 * @return bool
 */
function pdf_end_item($pdf, int $id): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_layer($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_mc($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_page($pdf): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_end_page_ext($pdf, string $optlist): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_pattern($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_end_template($pdf): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param float $width
 * @param float $height
 * @return bool
 */
function pdf_end_template_ext($pdf, float $width, float $height): bool {}
#endif

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_endpath($pdf): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_fill($pdf): bool {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param int $graphics
 * @param string $optlist
 * @return int
 */
function pdf_fill_graphicsblock($pdf, int $page, string $blockname, int $graphics, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param int $image
 * @param string $optlist
 * @return int
 */
function pdf_fill_imageblock($pdf, int $page, string $blockname, int $image, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param int $contents
 * @param string $optlist
 * @return int
 */
function pdf_fill_pdfblock($pdf, int $page, string $blockname, int $contents, string $optlist): int {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_fill_stroke($pdf): bool {}

/**
 * @param resource $pdf
 * @param int $page
 * @param string $blockname
 * @param string $text
 * @param string $optlist
 * @return int
 */
function pdf_fill_textblock($pdf, int $page, string $blockname, string $text, string $optlist): int {}

/**
 * @param resource $pdf
 * @param string $fontname
 * @param string $encoding
 * @param int $embed
 * @return int
 */
function pdf_findfont($pdf, string $fontname, string $encoding, int $embed): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $graphics
 * @param float $x
 * @param float $y
 * @param string $optlist
 * @return bool
 */
function pdf_fit_graphics($pdf, int $graphics, float $x, float $y, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param int $image
 * @param float $x
 * @param float $y
 * @param string $optlist
 * @return bool
 */
function pdf_fit_image($pdf, int $image, float $x, float $y, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param int $page
 * @param float $x
 * @param float $y
 * @param string $optlist
 * @return bool
 */
function pdf_fit_pdi_page($pdf, int $page, float $x, float $y, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param int $table
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $optlist
 * @return string
 */
function pdf_fit_table($pdf, int $table, float $llx, float $lly, float $urx, float $ury, string $optlist): string {}

/**
 * @param resource $pdf
 * @param int $textflow
 * @param float $llx
 * @param float $lly
 * @param float $urx
 * @param float $ury
 * @param string $optlist
 * @return string
 */
function pdf_fit_textflow($pdf, int $textflow, float $llx, float $lly, float $urx, float $ury, string $optlist): string {}

/**
 * @param resource $pdf
 * @param string $text
 * @param float $x
 * @param float $y
 * @param string $optlist
 * @return bool
 */
function pdf_fit_textline($pdf, string $text, float $x, float $y, string $optlist): bool {}

/**
 * @param resource $pdf
 * @return string
 */
function pdf_get_apiname($pdf): string {}

/**
 * @param resource $pdf
 * @return string
 */
function pdf_get_buffer($pdf): string {}

/**
 * @param resource $pdf
 * @return string
 */
function pdf_get_errmsg($pdf): string {}

/**
 * @param resource $pdf
 * @return int
 */
function pdf_get_errnum($pdf): int {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_get_option($pdf, string $keyword, string $optlist): float {}
#endif

/**
 * @param resource $pdf
 * @param string $key
 * @param float $modifier
 * @return string
 */
function pdf_get_parameter($pdf, string $key, float $modifier): string {}

/**
 * @param resource $pdf
 * @param string $key
 * @param int $doc
 * @param int $page
 * @param int $reserved
 * @return float
 */
function pdf_get_pdi_value($pdf, string $key, int $doc, int $page, int $reserved): float {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $idx
 * @param string $optlist
 * @return string
 */
function pdf_get_string($pdf, int $idx, string $optlist): string {}
#endif

/**
 * @param resource $pdf
 * @param string $key
 * @param float $modifier
 * @return float
 */
function pdf_get_value($pdf, string $key, float $modifier): float {}

/**
 * @param resource $pdf
 * @param int $font
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_font($pdf, int $font, string $keyword, string $optlist): float {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $graphics
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_graphics($pdf, int $graphics, string $keyword, string $optlist): float {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $image
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_image($pdf, int $image, string $keyword, string $optlist): float {}
#endif

/**
 * @param resource $pdf
 * @param string $boxname
 * @param int $num
 * @param string $keyword
 * @return float
 */
function pdf_info_matchbox($pdf, string $boxname, int $num, string $keyword): float {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $path
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_path($pdf, int $path, string $keyword, string $optlist): float {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param int $page
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_pdi_page($pdf, int $page, string $keyword, string $optlist): float {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $filename
 * @param string $keyword
 * @return float
 */
function pdf_info_pvf($pdf, string $filename, string $keyword): float {}
#endif

/**
 * @param resource $pdf
 * @param int $table
 * @param string $keyword
 * @return float
 */
function pdf_info_table($pdf, int $table, string $keyword): float {}

/**
 * @param resource $pdf
 * @param int $textflow
 * @param string $keyword
 * @return float
 */
function pdf_info_textflow($pdf, int $textflow, string $keyword): float {}

/**
 * @param resource $pdf
 * @param string $text
 * @param string $keyword
 * @param string $optlist
 * @return float
 */
function pdf_info_textline($pdf, string $text, string $keyword, string $optlist): float {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_initgraphics($pdf): bool {}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @return bool
 */
function pdf_lineto($pdf, float $x, float $y): bool {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_load_3ddata($pdf, string $filename, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $type
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_load_asset($pdf, string $type, string $filename, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param string $fontname
 * @param string $encoding
 * @param string $optlist
 * @return int
 */
function pdf_load_font($pdf, string $fontname, string $encoding, string $optlist): int {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $type
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_load_graphics($pdf, string $type, string $filename, string $optlist): int {}
#endif

/**
 * @param resource $pdf
 * @param string $profilename
 * @param string $optlist
 * @return int
 */
function pdf_load_iccprofile($pdf, string $profilename, string $optlist): int {}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_load_image($pdf, string $imagetype, string $filename, string $optlist): int {}

/**
 * @param resource $pdf
 * @param string $spotname
 * @return int
 */
function pdf_makespotcolor($pdf, string $spotname): int {}

/**
 * @param resource $pdf
 * @param string $tagname
 * @param string $optlist
 * @return bool
 */
function pdf_mc_point($pdf, string $tagname, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @return bool
 */
function pdf_moveto($pdf, float $x, float $y): bool {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param int $width
 * @param int $height
 * @param int $BitReverse
 * @param int $K
 * @param int $BlackIs1
 * @return int
 */
function pdf_open_ccitt($pdf, string $filename, int $width, int $height, int $BitReverse, int $K, int $BlackIs1): int {}

/**
 * @param resource $pdf
 * @param string $filename
 * @return int
 */
function pdf_open_file($pdf, string $filename): int {}

/**
 * @param resource $pdf
 * @param string $imagetype
 * @param string $filename
 * @param string $stringparam
 * @param int $intparam
 * @return int
 */
function pdf_open_image_file($pdf, string $imagetype, string $filename, string $stringparam, int $intparam): int {}

/**
 * @param resource $pdf
 * @param string $filename
 * @param string $optlist
 * @return int
 */
function pdf_open_pdi_document($pdf, string $filename, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $doc
 * @param int $pagenumber
 * @param string $optlist
 * @return int
 */
function pdf_open_pdi_page($pdf, int $doc, int $pagenumber, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $path
 * @return float
 */
function pdf_pcos_get_number($pdf, int $doc, string $path): float {}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $path
 * @return string
 */
function pdf_pcos_get_string($pdf, int $doc, string $path): string {}

/**
 * @param resource $pdf
 * @param int $doc
 * @param string $optlist
 * @param string $path
 * @return string
 */
function pdf_pcos_get_stream($pdf, int $doc, string $optlist, string $path): string {}

/**
 * @param resource $pdf
 * @param int $image
 * @param float $x
 * @param float $y
 * @param float $scale
 * @return bool
 */
function pdf_place_image($pdf, int $image, float $x, float $y, float $scale): bool {}

/**
 * @param resource $pdf
 * @param int $page
 * @param float $x
 * @param float $y
 * @param float $sx
 * @param float $sy
 * @return bool
 */
function pdf_place_pdi_page($pdf, int $page, float $x, float $y, float $sx, float $sy): bool {}

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $container
 * @param string $optlist
 * @return bool
 */
function pdf_poca_delete($pdf, int $container, string $optlist): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $container
 * @param string $optlist
 * @return bool
 */
function pdf_poca_insert($pdf, int $container, string $optlist): bool {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $optlist
 * @return int
 */
function pdf_poca_new($pdf, string $optlist): int {}
#endif

#if (PDFLIB_MAJORVERSION >= 8 && PDFLIB_MINORVERSION >= 1) || PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param int $container
 * @param string $optlist
 * @return bool
 */
function pdf_poca_remove($pdf, int $container, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param int $doc
 * @param int $page
 * @param string $optlist
 * @return int
 */
function pdf_process_pdi($pdf, int $doc, int $page, string $optlist): int {}

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @param float $width
 * @param float $height
 * @return bool
 */
function pdf_rect($pdf, float $x, float $y, float $width, float $height): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_restore($pdf): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_resume_page($pdf, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $phi
 * @return bool
 */
function pdf_rotate($pdf, float $phi): bool {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_save($pdf): bool {}

/**
 * @param resource $pdf
 * @param float $sx
 * @param float $sy
 * @return bool
 */
function pdf_scale($pdf, float $sx, float $sy): bool {}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 * @return bool
 */
function pdf_set_border_color($pdf, float $red, float $green, float $blue): bool {}

/**
 * @param resource $pdf
 * @param float $b
 * @param float $w
 * @return bool
 */
function pdf_set_border_dash($pdf, float $b, float $w): bool {}

/**
 * @param resource $pdf
 * @param string $style
 * @param float $width
 * @return bool
 */
function pdf_set_border_style($pdf, string $style, float $width): bool {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_set_graphics_option($pdf, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param int $gstate
 * @return bool
 */
function pdf_set_gstate($pdf, int $gstate): bool {}

/**
 * @param resource $pdf
 * @param string $key
 * @param string $value
 * @return bool
 */
function pdf_set_info($pdf, string $key, string $value): bool {}

/**
 * @param resource $pdf
 * @param string $type
 * @param string $optlist
 * @return bool
 */
function pdf_set_layer_dependency($pdf, string $type, string $optlist): bool {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_set_option($pdf, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param string $key
 * @param string $value
 * @return bool
 */
function pdf_set_parameter($pdf, string $key, string $value): bool {}

#if PDFLIB_MAJORVERSION >= 9
/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_set_text_option($pdf, string $optlist): bool {}
#endif

/**
 * @param resource $pdf
 * @param float $x
 * @param float $y
 * @return bool
 */
function pdf_set_text_pos($pdf, float $x, float $y): bool {}

/**
 * @param resource $pdf
 * @param string $key
 * @param float $value
 * @return bool
 */
function pdf_set_value($pdf, string $key, float $value): bool {}

/**
 * @param resource $pdf
 * @param string $fstype
 * @param string $colorspace
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 * @return bool
 */
function pdf_setcolor($pdf, string $fstype, string $colorspace, float $c1, float $c2, float $c3, float $c4): bool {}

/**
 * @param resource $pdf
 * @param float $b
 * @param float $w
 * @return bool
 */
function pdf_setdash($pdf, float $b, float $w): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_setdashpattern($pdf, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $flatness
 * @return bool
 */
function pdf_setflat($pdf, float $flatness): bool {}

/**
 * @param resource $pdf
 * @param int $font
 * @param float $fontsize
 * @return bool
 */
function pdf_setfont($pdf, int $font, float $fontsize): bool {}

/**
 * @param resource $pdf
 * @param float $gray
 * @return bool
 */
function pdf_setgray($pdf, float $gray): bool {}

/**
 * @param resource $pdf
 * @param float $gray
 * @return bool
 */
function pdf_setgray_fill($pdf, float $gray): bool {}

/**
 * @param resource $pdf
 * @param float $gray
 * @return bool
 */
function pdf_setgray_stroke($pdf, float $gray): bool {}

/**
 * @param resource $pdf
 * @param int $linecap
 * @return bool
 */
function pdf_setlinecap($pdf, int $linecap): bool {}

/**
 * @param resource $pdf
 * @param int $linejoin
 * @return bool
 */
function pdf_setlinejoin($pdf, int $linejoin): bool {}

/**
 * @param resource $pdf
 * @param float $width
 * @return bool
 */
function pdf_setlinewidth($pdf, float $width): bool {}

/**
 * @param resource $pdf
 * @param float $a
 * @param float $b
 * @param float $c
 * @param float $d
 * @param float $e
 * @param float $f
 * @return bool
 */
function pdf_setmatrix($pdf, float $a, float $b, float $c, float $d, float $e, float $f): bool {}

/**
 * @param resource $pdf
 * @param float $miter
 * @return bool
 */
function pdf_setmiterlimit($pdf, float $miter): bool {}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 * @return bool
 */
function pdf_setrgbcolor($pdf, float $red, float $green, float $blue): bool {}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 * @return bool
 */
function pdf_setrgbcolor_fill($pdf, float $red, float $green, float $blue): bool {}

/**
 * @param resource $pdf
 * @param float $red
 * @param float $green
 * @param float $blue
 * @return bool
 */
function pdf_setrgbcolor_stroke($pdf, float $red, float $green, float $blue): bool {}

/**
 * @param resource $pdf
 * @param string $type
 * @param float $x0
 * @param float $y0
 * @param float $x1
 * @param float $y1
 * @param float $c1
 * @param float $c2
 * @param float $c3
 * @param float $c4
 * @param string $optlist
 * @return int
 */
function pdf_shading($pdf, string $type, float $x0, float $y0, float $x1, float $y1, float $c1, float $c2, float $c3, float $c4, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $shading
 * @param string $optlist
 * @return int
 */
function pdf_shading_pattern($pdf, int $shading, string $optlist): int {}

/**
 * @param resource $pdf
 * @param int $shading
 * @return bool
 */
function pdf_shfill($pdf, int $shading): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @return bool
 */
function pdf_show($pdf, string $text): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @param float $x
 * @param float $y
 * @return bool
 */
function pdf_show_xy($pdf, string $text, float $x, float $y): bool {}

/**
 * @param resource $pdf
 * @param float $alpha
 * @param float $beta
 * @return bool
 */
function pdf_skew($pdf, float $alpha, float $beta): bool {}

/**
 * @param resource $pdf
 * @param string $text
 * @param int $font
 * @param float $fontsize
 * @return float
 */
function pdf_stringwidth($pdf, string $text, int $font, float $fontsize): float {}

/**
 * @param resource $pdf
 * @return bool
 */
function pdf_stroke($pdf): bool {}

/**
 * @param resource $pdf
 * @param string $optlist
 * @return bool
 */
function pdf_suspend_page($pdf, string $optlist): bool {}

/**
 * @param resource $pdf
 * @param float $tx
 * @param float $ty
 * @return bool
 */
function pdf_translate($pdf, float $tx, float $ty): bool {}

/**
 * @param resource $pdf
 * @param string $utf16string
 * @return string
 */
function pdf_utf16_to_utf8($pdf, string $utf16string): string {}

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param string $utf8string
 * @param string $ordering
 * @return string
 */
function pdf_utf8_to_utf16($pdf, string $utf8string, string $ordering): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param string $utf32string
 * @return string
 */
function pdf_utf32_to_utf8($pdf, string $utf32string): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param string $utf8string
 * @param string $ordering
 * @return string
 */
function pdf_utf8_to_utf32($pdf, string $utf8string, string $ordering): string {}
#endif

#if PDFLIB_MAJORVERSION >= 8
/**
 * @param resource $pdf
 * @param string $utf16string
 * @param string $ordering
 * @return string
 */
function pdf_utf16_to_utf32($pdf, string $utf16string, string $ordering): string {}
#endif

/**
 * @param resource $pdf
 * @param string $utf32string
 * @param string $ordering
 * @return string
 */
function pdf_utf32_to_utf16($pdf, string $utf32string, string $ordering): string {}
