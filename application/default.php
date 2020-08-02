<?
header('Content-Type: text/html; charset=utf-8');
$host = $_SERVER['HTTP_HOST'];
setlocale(LC_TIME, "id_ID");
date_default_timezone_set('Asia/Jakarta');

$startdir = '.';
$showthumbnails = false;
$showdirs = true;
$forcedownloads = false;
$hide = array(
    'dlf',
    'public_html',
    'index.php',
    'Thumbs',
    '.htaccess',
    '.htpasswd'
);
$displayindex = false;
$allowuploads = false;
$overwrite = false;

$indexfiles = array(
    'index.html',
    'index.htm',
    'default.htm',
    'default.html'
);

$filetypes = array(
    'png' => 'jpg.gif',
    'jpeg' => 'jpg.gif',
    'bmp' => 'jpg.gif',
    'jpg' => 'jpg.gif',
    'gif' => 'gif.gif',
    'zip' => 'archive.png',
    'rar' => 'archive.png',
    'exe' => 'exe.gif',
    'setup' => 'setup.gif',
    'txt' => 'text.png',
    'htm' => 'html.gif',
    'html' => 'html.gif',
    'php' => 'php.gif',
    'fla' => 'fla.gif',
    'swf' => 'swf.gif',
    'xls' => 'xls.gif',
    'doc' => 'doc.gif',
    'sig' => 'sig.gif',
    'fh10' => 'fh10.gif',
    'pdf' => 'pdf.gif',
    'psd' => 'psd.gif',
    'rm' => 'real.gif',
    'mpg' => 'video.gif',
    'mpeg' => 'video.gif',
    'mov' => 'video2.gif',
    'avi' => 'video.gif',
    'eps' => 'eps.gif',
    'gz' => 'archive.png',
    'asc' => 'sig.gif',
);

error_reporting(0);
if (!function_exists('imagecreatetruecolor')) $showthumbnails = false;
$leadon = $startdir;
if ($leadon == '.') $leadon = '';
if ((substr($leadon, -1, 1) != '/') && $leadon != '') $leadon = $leadon . '/';
$startdir = $leadon;

if ($_GET['dir']) {
    // check this is okay.

    if (substr($_GET['dir'], -1, 1) != '/') {
        $_GET['dir'] = $_GET['dir'] . '/';
    }

    $dirok = true;
    $dirnames = split('/', $_GET['dir']);
    for ($di = 0; $di < sizeof($dirnames); $di++) {

        if ($di < (sizeof($dirnames) - 2)) {
            $dotdotdir = $dotdotdir . $dirnames[$di] . '/';
        }

        if ($dirnames[$di] == '..') {
            $dirok = false;
        }
    }

    if (substr($_GET['dir'], 0, 1) == '/') {
        $dirok = false;
    }

    if ($dirok) {
        $leadon = $leadon . $_GET['dir'];
    }
}


$opendir = $leadon;
if (!$leadon) $opendir = '.';
if (!file_exists($opendir)) {
    $opendir = '.';
    $leadon = $startdir;
}

clearstatcache();
if ($handle = opendir($opendir)) {
    while (false !== ($file = readdir($handle))) {
        // first see if this file is required in the listing
        if ($file == "." || $file == "..") continue;
        $discard = false;
        for ($hi = 0; $hi < sizeof($hide); $hi++) {
            if (strpos($file, $hide[$hi]) !== false) {
                $discard = true;
            }
        }

        if ($discard) continue;
        if (@filetype($leadon . $file) == "dir") {
            if (!$showdirs) continue;

            $n++;
            if ($_GET['sort'] == "date") {
                $key = @filemtime($leadon . $file) . ".$n";
            } else {
                $key = $n;
            }
            $dirs[$key] = $file . "/";
        } else {
            $n++;
            if ($_GET['sort'] == "date") {
                $key = @filemtime($leadon . $file) . ".$n";
            } elseif ($_GET['sort'] == "size") {
                $key = @filesize($leadon . $file) . ".$n";
            } else {
                $key = $n;
            }
            $files[$key] = $file;

            if ($displayindex) {
                if (in_array(strtolower($file), $indexfiles)) {
                    header("Location: $file");
                    die();
                }
            }
        }
    }
    closedir($handle);
}

// sort our files
if ($_GET['sort'] == "date") {
    @ksort($dirs, SORT_NUMERIC);
    @ksort($files, SORT_NUMERIC);
} elseif ($_GET['sort'] == "size") {
    @natcasesort($dirs);
    @ksort($files, SORT_NUMERIC);
} else {
    @natcasesort($dirs);
    @natcasesort($files);
}

// order correctly
if ($_GET['order'] == "desc" && $_GET['sort'] != "size") {
    $dirs = @array_reverse($dirs);
}
if ($_GET['order'] == "desc") {
    $files = @array_reverse($files);
}
$dirs = @array_values($dirs);
$files = @array_values($files);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Selamat datang di <? print $host; ?>! Niagahoster hosting murah unlimited</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
    <style type="text/css">
        html {
            width: 100%;
        }

        ::-moz-selection {
            background: #21c5f5;
            color: #ffffff;
        }

        ::selection {
            background: #21c5f5;
            color: #ffffff;
        }

        body {
            background-color: #f5f6f6;
            margin: 0;
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
            background-color: #f5f6f6;
        }

        .ExternalClass {
            width: 100%;
            background-color: #f5f6f6;
        }

        a {
            color: #21c5f5;
            text-decoration: none;

            font-style: normal;
        }

        a:hover {
            color: #505050;
            text-decoration: underline;

            font-style: normal;
        }

        p, div {
            margin: 0 !important;
        }

        table {
            border-collapse: collapse;
        }

        @media only screen and (max-width: 640px) {
            table table {
                width: 100% !important;
            }

            td[class="full_width"] {
                width: 100% !important;
            }

            div[class="div_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            table[class="table_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            table[class="featured_area"] {
                width: 454px !important;
                margin: 0 auto !important;
            }

            td[class="td_scale"] {
                width: 440px !important;
                margin: 0 auto !important;
            }

            img[class="img_scale"] {
                width: 100% !important;
                height: auto !important;
            }

            img[class="divider"] {
                width: 440px !important;
                height: 2px !important;
            }

            table[class="spacer"] {
                display: none !important;
            }

            td[class="spacer"] {
                display: none !important;
            }

            td[class="center"] {
                text-align: center !important;
            }

            table[class="full"] {
                width: 400px !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }

            img[class="divider"] {
                width: 113px !important;
                height: 8px !important;
            }

        }

        @media only screen and (max-width: 479px) {
            table table {
                width: 100% !important;
            }

            td[class="full_width"] {
                width: 100% !important;
            }

            div[class="div_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            table[class="table_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            table[class="featured_area"] {
                width: 290px !important;
                margin: 0 auto !important;
            }

            td[class="td_scale"] {
                width: 280px !important;
                margin: 0 auto !important;
            }

            img[class="img_scale"] {
                width: 100% !important;
                height: auto !important;
            }

            img[class="divider"] {
                width: 280px !important;
                height: 2px !important;
            }

            table[class="spacer"] {
                display: none !important;
            }

            td[class="spacer"] {
                display: none !important;
            }

            td[class="center"] {
                text-align: center !important;
            }

            table[class="full"] {
                width: 240px !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }

            img[class="divider"] {
                width: 113px !important;
                height: 8px !important;
            }

        }
    </style>


</head>
<body bgcolor="#f5f6f6">

<!-- START OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <!-- START OF VERTICAL SPACER-->
                        <table bgcolor="#ffffff" class="table_scale" width="600" align="center" cellpadding="0"
                               cellspacing="0" border="0">
                            <tr>
                                <td width="100%" height="30">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                        <!-- END OF VERTICAL SPACER-->
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">
                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">
                                                <table class="full" align="left" width="540" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="center" align="center"
                                                            style="padding-top: 0px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															<a style="color:#3b3b3b; text-decoration: none; font-style: normal;">
															Selamat Datang di <? print $host; ?>
															</a>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="30">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/1 (FULL WIDTH) COLUMN BLOCK-->

<!-- START OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#dfe3e4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">
                                                <table class="full" align="left" width="600" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left">
                                                            <table align="center" width="100%" border="0"
                                                                   cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#e2e2e2" height="1"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img class="img_scale"
                                                                 src="https://www.niagahoster.co.id/welcome/images/selamat-datang.png"
                                                                 alt="selamat datang" width="600" border="0"
                                                                 style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left">
                                                            <table align="center" width="100%" border="0"
                                                                   cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#e2e2e2" height="1"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                </table>
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/1 (FULL WIDTH) COLUMN BLOCK-->

<!-- START OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <!-- START OF VERTICAL SPACER-->
                        <table bgcolor="#ffffff" class="table_scale" width="600" align="center" cellpadding="0"
                               cellspacing="0" border="0">
                            <tr>
                                <td width="100%" height="50">

                                </td>
                            </tr>
                        </table>
                        <!-- END OF VERTICAL SPACER-->
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">
                                                <table class="full" align="left" width="540" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">

                                                    <!-- START OF HEADING-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 0px; font-family: 'Open Sans', Arial, sans-serif; color:#3498db; font-size:18px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            <b>Akun hosting untuk <? print $host; ?> telah dibuat!</b>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF HEADING-->

                                                    <!-- START OF HEADING-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 20px; font-family: 'Open Sans', Arial, sans-serif; color:#7f8c8d; font-size:13px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            Akun telah berhasil di-install di server. Silakan hapus
                                                            default.php dari folder public_html dan upload file website
                                                            Anda dengan menggunakan aplikasi FTP atau File Manager yang
                                                            tersedia di cPanel Anda.
                                                        </td>
                                                    </tr>
                                                    <!-- END OF HEADING-->

                                                    <!-- START OF HEADING-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 40px; font-family: 'Open Sans', Arial, sans-serif; color:#3498db; font-size:18px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            <b>Panduan singkat untuk memulai website Anda</b>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF HEADING-->
                                                </table>
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="35">

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/1 (FULL WIDTH) COLUMN BLOCK-->

<!-- START OF 1/2 COLUMN LEFT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/jenis-website.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Tentukan website Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->


                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tentukan apakah sebuah blog, toko online, forum, atau <a
                                                                    href="http://www.niagaweb.co.id"
                                                                    style="color:#fc6900; text-decoration: none; font-style: normal;">website bisnis</a>.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN LEFT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN RIGHT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">
                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Tetapkan target Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Target pengunjung / penjualan dan cara mencapainya.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/set-target.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN RIGHT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN LEFT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/choose-cms.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Pilih platform Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->


                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Apakah menggunakan WordPress, Joomla, atau website PHP lainnya.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN LEFT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN RIGHT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">
                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Tetapkan brand Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tetapkan nama website atau brand online Anda.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/your-brand.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN RIGHT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN LEFT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/desain-website.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Pilih desain website
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->


                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tentukan layout, warna, jenis font, dan template.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN LEFT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN RIGHT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">
                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Ciptakan Halaman
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Fokuskan pada halaman home, kemudian kontak, tentang kami, dst.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/add-page.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN RIGHT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN LEFT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/add-picture.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Tambahkan Gambar
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->


                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tambahkan gambar atau video yang menarik dan revelan ke konten Anda.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN LEFT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN RIGHT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">
                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Terbitkan website Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Biarkan pengguna dan mesin pencari menemukan Anda.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/publish-website.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN RIGHT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN LEFT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/bersosial.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Bersosial
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->


                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Buat akun sosial dan sebarkan informasi tentang website Anda
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="40">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN LEFT IMAGE BLOCK-->

<!-- START OF 1/2 COLUMN RIGHT IMAGE BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">

                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; border: 1px solid #e2e2e2;">
                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:18px ; color:#3b3b3b; font-family: 'Open Sans', Arial, sans-serif; font-weight: bold; line-height: 25px;mso-line-height-rule: exactly;">
															<span>
															Berikan Manfaat
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF DIVIDER-->
                                                    <tr>
                                                        <td align="left" style="padding: 5px 15px;">
                                                            <table align="left" width="30" border="0" cellpadding="0"
                                                                   cellspacing="0">
                                                                <tr>
                                                                    <td bgcolor="#3498db" height="3"
                                                                        style="line-height:0px; font-size:0px;"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF DIVIDER-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left" align="left"
                                                            style="padding: 15px 15px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Berikan tips, trial, ebook atau fasilitas bermanfaat kepada pengguna.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                                <!-- START OF SPACER-->
                                                <table width="25" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="left" width="255" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF IMAGE-->
                                                    <tr>
                                                        <td class="center" align="left"
                                                            style="padding-top: 0px; margin: 0; font-size:13px ; color:#677b82; font-family: 'PT Sans', Helvetica, Arial, sans-serif; line-height: 23px;">
															<span>
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/give-ebook.png"
                                                                width="255" height="148" border="0"
                                                                style="display: block;"/>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF IMAGE-->
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="50">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/2 COLUMN RIGHT IMAGE BLOCK-->

<!-- START OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">
                                                <table class="full" align="left" width="540" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">

                                                    <!-- START OF HEADING-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 0px; font-family: 'Open Sans', Arial, sans-serif; color:#3498db; font-size:18px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            <b>Tips</b>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF HEADING-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 20px; font-family: 'Open Sans', Arial, sans-serif; color:#7f8c8d; font-size:13px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            Website yang baik memiliki menu yang user friendly dan
                                                            informasi kontak yang jelas seperti email, telepon atau
                                                            bantuan live chat.
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="left"
                                                            style="padding-top: 15px; font-family: 'Open Sans', Arial, sans-serif; color:#7f8c8d; font-size:13px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="left">
                                                            Buat website untuk pengguna, bukan untuk Google ataupun diri
                                                            Anda. Pengunjung Anda adalah yang utama. Perhatikan
                                                            kebutuhan mereka ketika Anda mendesain dan mengelola website
                                                            Anda.
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                </table>
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="50">

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/1 (FULL WIDTH) COLUMN BLOCK-->

<!-- START OF 1/3 COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#dfe3e4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <!-- START OF VERTICAL SPACER-->
                        <table bgcolor="#ecf0f1" class="table_scale" width="600" align="center" cellpadding="0"
                               cellspacing="0" border="0">
                            <tr>
                                <td width="100%" height="50">

                                </td>
                            </tr>
                        </table>
                        <!-- END OF VERTICAL SPACER-->
                        <table class="table_scale" width="600" bgcolor="#ecf0f1" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">
                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                        <tr>

                                            <td width="295">
                                                <!-- START OF SPACER-->
                                                <table width="30" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->
                                                <!-- START OF LEFT COLUMN-->
                                                <table class="full" align="left" width="250" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border:1px solid #21a1f1;margin-bottom: 40px;">

                                                    <!-- START OF ICON-->
                                                    <tbody style="background: #fff">
                                                    <tr>
                                                        <td align="center"
                                                            style="margin: 0; padding-bottom: 0px; font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;padding-top: 20px">
															<span>
															<a href="https://www.niagahoster.co.id/kb/faqs"
                                                               style="color:#21c5f5;">
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/faq.png"
                                                                alt="faq" style="border: 0px; display: inline-block;"/>
															</a>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF ICON-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="center" align="center"
                                                            style="padding: 5px 40px 0px 40px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Hal yang sering ditanyakan pengguna.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START BUTTON-->
                                                    <tr>
                                                        <td bgcolor="#fff" align="center" valign="top"
                                                            style="padding-top: 20px;padding-bottom: 20px;">
                                                            <table border="0" align="center" cellpadding="0"
                                                                   cellspacing="0" bgcolor="#fff" style="margin: 0;">
                                                                <tr>
                                                                    <td align="center" valign="middle" bgcolor="#3398dc"
                                                                        style="padding: 5px 20px;font-size: 13px; line-height: 18px; font-family: 'Open Sans', Arial, sans-serif; color:#677b82; margin: 0 !important; border-radius: 20px;">
                                                                        <a href="https://www.niagahoster.co.id/kb/faqs"
                                                                           style=" font-style: normal; color:#ffffff;">
                                                                            FAQs
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END BUTTON-->
                                                    </tbody>
                                                </table>
                                                <!-- END OF LEFT COLUMN-->

                                            </td>
                                            <td width="295">
                                                <!-- START OF SPACER-->
                                                <table width="30" align="right" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->
                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="right" width="250" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border:1px solid #21a1f1;margin-bottom: 40px;">
                                                    <!-- START OF ICON-->
                                                    <tbody style="background: #fff">
                                                    <tr>
                                                        <td align="center"
                                                            style="margin: 0; padding-bottom: 0px; font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;padding-top: 20px">
															<span>
															<a href="https://www.niagahoster.co.id/kb/support-dan-technical"
                                                               style="color:#21c5f5;">
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/tools-2.png"
                                                                alt="support"
                                                                style="border: 0px; display: inline-block;"/>
															</a>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF ICON-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="center" align="center"
                                                            style="padding: 5px 40px 0px 40px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tutorial dan panduan teknis.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START BUTTON-->
                                                    <tr>
                                                        <td bgcolor="#fff" align="center" valign="top"
                                                            style="padding-top: 20px;padding-bottom: 20px;">
                                                            <table border="0" align="center" cellpadding="0"
                                                                   cellspacing="0" bgcolor="#fff" style="margin: 0;">
                                                                <tr>
                                                                    <td align="center" valign="middle" bgcolor="#3398dc"
                                                                        style="padding: 5px 20px;font-size: 13px; line-height: 18px; font-family: 'Open Sans', Arial, sans-serif; color:#677b82; margin: 0 !important; border-radius: 20px;">
                                                                        <a href="https://www.niagahoster.co.id/kb/support-dan-technical"
                                                                           style=" font-style: normal; color:#ffffff;">
                                                                            Support
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END BUTTON-->
                                                    </tbody>
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="295">
                                                <!-- START OF SPACER-->
                                                <table width="30" align="left" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->
                                                <!-- START OF MIDDLE COLUMN-->
                                                <table class="full" align="left" width="250" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border:1px solid #21a1f1">
                                                    <!-- START OF ICON-->
                                                    <tbody style="background: #fff">
                                                    <tr>
                                                        <td align="center"
                                                            style="margin: 0; padding-bottom: 0px; font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;padding-top: 20px">
															<span>
															<a href="http://www.niagaweb.co.id/download"
                                                               style="color:#21c5f5;">
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/ebook-gratis.png"
                                                                alt="ebook"
                                                                style="border: 0px; display: inline-block;"/>
															</a>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF ICON-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="center" align="center"
                                                            style="padding: 5px 40px 0px 40px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Pengembangan website dan pemasaran online.
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START BUTTON-->
                                                    <tr>
                                                        <td bgcolor="#fff" align="center" valign="top"
                                                            style="padding-top: 20px;padding-bottom: 20px;">
                                                            <table border="0" align="center" cellpadding="0"
                                                                   cellspacing="0" bgcolor="#fff" style="margin: 0;">
                                                                <tr>
                                                                    <td align="center" valign="middle" bgcolor="#3398dc"
                                                                        style="padding: 5px 20px;font-size: 13px; line-height: 18px; font-family: 'Open Sans', Arial, sans-serif; color:#677b82; margin: 0 !important; border-radius: 20px;">
                                                                        <a href="http://www.niagaweb.co.id/download"
                                                                           style=" font-style: normal; color:#ffffff;">
                                                                            Ebook
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END BUTTON-->
                                                    </tbody>
                                                </table>
                                                <!-- END OF MIDDLE COLUMN-->

                                            </td>
                                            <td width="295">
                                                <!-- START OF SPACER-->
                                                <table width="30" align="right" cellpadding="0" cellspacing="0"
                                                       border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tr>
                                                        <td width="100%" height="40"></td>
                                                    </tr>
                                                </table>
                                                <!-- END OF SPACER-->

                                                <!-- START OF RIGHT COLUMN-->
                                                <table class="full" align="right" width="250" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;border:1px solid #21a1f1">
                                                    <!-- START OF ICON-->
                                                    <tbody style="background: #fff">
                                                    <tr>
                                                        <td align="center"
                                                            style="margin: 0; padding-bottom: 0px; font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;padding-top: 20px">
															<span>
															<a href="http://www.niagahoster.co.id/blog"
                                                               style="color:#21c5f5;">
															<img
                                                                src="https://www.niagahoster.co.id/welcome/images/blog.png"
                                                                alt="blog"
                                                                style="border: 0px; display: inline-block;"/>
															</a>
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF ICON-->

                                                    <!-- START OF TEXT-->
                                                    <tr>
                                                        <td class="center" align="center"
                                                            style="padding: 5px 40px 0px 40px; margin: 0;  font-size:13px ; color:#7f8c8d; font-family: 'Open Sans', Arial, sans-serif; line-height: 23px;mso-line-height-rule: exactly;">
															<span>
															Tutorial Website, Hosting & Bisnis Online
															</span>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF TEXT-->

                                                    <!-- START BUTTON-->
                                                    <tr>
                                                        <td bgcolor="#fff" align="center" valign="top"
                                                            style="padding-top: 20px;padding-bottom: 20px;">
                                                            <table border="0" align="center" cellpadding="0"
                                                                   cellspacing="0" bgcolor="#fff" style="margin: 0;">
                                                                <tr>
                                                                    <td align="center" valign="middle" bgcolor="#3398dc"
                                                                        style="padding: 5px 20px;font-size: 13px; line-height: 18px; font-family: 'Open Sans', Arial, sans-serif; color:#677b82; margin: 0 !important; border-radius: 20px;">
                                                                        <a href="http://www.niagahoster.co.id/blog"
                                                                           style=" font-style: normal; color:#ffffff;">
                                                                            Blog
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <!-- END BUTTON-->
                                                    </tbody>
                                                </table>
                                                <!-- END OF RIGHT COLUMN-->
                                            </td>
                                        </tr>

                                        <td class="spacer" width="30">
                                        </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <!-- START OF VERTICAL SPACER-->
                        <table bgcolor="#ecf0f1" class="table_scale" width="600" align="center" cellpadding="0"
                               cellspacing="0" border="0">
                            <tr>
                                <td width="100%" height="50">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                        <!-- END OF VERTICAL SPACER-->
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/3 COLUMN BLOCK-->

<!-- START OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
<table width="100%" align="center" bgcolor="#f2f3f4" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <td valign="top" width="100%">
            <table align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td width="100%">
                        <table class="table_scale" width="600" bgcolor="#ffffff" cellpadding="0" cellspacing="0"
                               border="0">
                            <tr>
                                <td width="100%">

                                    <table width="600" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td class="spacer" width="30">
                                            </td>

                                            <td width="540">
                                                <table class="full" align="left" width="540" cellpadding="0"
                                                       cellspacing="0" border="0"
                                                       style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <!-- START OF HEADING-->
                                                    <tr>
                                                        <td class="center"
                                                            style="padding-top: 20px; font-family: 'Open Sans', Arial, sans-serif; color:#7f8c8d; font-size:13px; line-height:25px; mso-line-height-rule: exactly;"
                                                            align="center">
                                                            Hosting powered by <a href="https://www.niagahoster.co.id"
                                                                                  style="color:#3498db; text-decoration: none; font-style: normal;">Niagahoster
                                                                Indonesia</a>
                                                        </td>
                                                    </tr>
                                                    <!-- END OF HEADING-->
                                                </table>
                                            </td>

                                            <td class="spacer" width="30">
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- START OF VERTICAL SPACER-->
                                    <table bgcolor="#ffffff" class="table_scale" width="600" align="center"
                                           cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                            <td width="100%" height="20">

                                            </td>
                                        </tr>
                                    </table>
                                    <!-- END OF VERTICAL SPACER-->
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END OF 1/1 (FULL WIDTH) COLUMN BLOCK-->
</body>
</html>

