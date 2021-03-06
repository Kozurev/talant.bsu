<?php
/**
 * Шаблон договора для записи на программу
 *
 * @author Bad Wolf
 * @date 25.09.2018 16:20
 */

$Application =  Core_Array::getValue( $params, "application", null );
$Program =      Core_Array::getValue( $params, "program", null );
$Period =       Core_Array::getValue( $params, "period", null );
$User =         Core_Array::getValue( $params, "user", null );


$current["year"] = intval( date( "Y" ) );
$current["month"] = intval( date( "m" ) );
$current["day"] = intval( date( "d" ) );

$current["fullMonth"] = getMonthName( intval( date( "m" ) ), 1 );

$periodStart = date( "d.m.Y", strtotime($Period->getDateStart()) );
$periodEnd = date( "d.m.Y", strtotime($Period->getDateEnd()) );


$addressFormat = "{country}, {region}, {city}, {address}";
$addressEmptyValues = [
    "country" => "____________",
    "region" => "____________",
    "city" => "____________"
];


$passportDate1 = $Application->getPassportDate(1, "d") . " " . getMonthName( $Application->getPassportDate(1, "m"), 1 ) . " " . $Application->getPassportDate(1, "Y") . " г.";
$passportDate2 = $Application->getPassportDate(2, "d") . " " . getMonthName( $Application->getPassportDate(2, "m"), 1 ) . " " . $Application->getPassportDate(2, "Y") . " г.";

/**
 * ФИО пользователя в именительном и родительном падеже
 */
$fullname[0][0] = $User->lastname . " " . $User->firstname;
if( $User->partonymic )    $fullname[0][0] .= " " . $User->patronymic;

$fullname[0][1] = $Application->getSurname( 2 ) . " " . $Application->getName( 2 ) . " " . $Application->getPatronymic( 2 );
$fullname[1][1] = $Application->getSurname( 1 ) . " " . $Application->getName( 1 ) . " " . $Application->getPatronymic( 1 );


?>

<html>

<head>
    <meta http-equiv=Content-Type content="text/html">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:Wingdings;
            panose-1:5 0 0 0 0 0 0 0 0 0;}
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Tahoma;
            panose-1:2 11 6 4 3 5 4 4 2 4;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin:0cm;
            margin-bottom:.0001pt;
            font-size:10.0pt;
            font-family:"Times New Roman",serif;}
        h1
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:72.0pt;
            margin-bottom:.0001pt;
            text-align:center;
            text-indent:-72.0pt;
            page-break-after:avoid;
            font-size:13.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        h2
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            page-break-after:avoid;
            font-size:13.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        h3
        {margin:0cm;
            margin-bottom:.0001pt;
            page-break-after:avoid;
            font-size:12.0pt;
            font-family:"Arial",sans-serif;
            letter-spacing:-.1pt;
            layout-grid-mode:line;}
        h4
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:36.0pt;
            margin-bottom:.0001pt;
            text-align:center;
            text-indent:-36.0pt;
            page-break-after:avoid;
            font-size:15.0pt;
            font-family:"Arial",sans-serif;
            layout-grid-mode:line;
            font-weight:normal;}
        h5
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            page-break-after:avoid;
            font-size:10.0pt;
            font-family:"Times New Roman",serif;}
        h6
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            page-break-after:avoid;
            font-size:12.0pt;
            font-family:"Arial",sans-serif;
            layout-grid-mode:line;}
        p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            page-break-after:avoid;
            font-size:9.5pt;
            font-family:"Times New Roman",serif;
            font-weight:bold;}
        p.MsoHeader, li.MsoHeader, div.MsoHeader
        {margin:0cm;
            margin-bottom:.0001pt;
            font-size:10.0pt;
            font-family:"Times New Roman",serif;}
        p.MsoFooter, li.MsoFooter, div.MsoFooter
        {margin:0cm;
            margin-bottom:.0001pt;
            font-size:10.0pt;
            font-family:"Times New Roman",serif;}
        p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:justify;
            font-size:8.0pt;
            font-family:"Times New Roman",serif;
            letter-spacing:-.2pt;
            layout-grid-mode:line;}
        p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:center;
            text-indent:21.25pt;
            font-size:10.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        p.MsoBodyText2, li.MsoBodyText2, div.MsoBodyText2
        {mso-style-link:"Основной текст 2 Знак";
            margin:0cm;
            margin-bottom:.0001pt;
            text-align:justify;
            font-size:8.0pt;
            font-family:"Times New Roman",serif;
            letter-spacing:-.3pt;
            layout-grid-mode:line;}
        p.MsoBodyText3, li.MsoBodyText3, div.MsoBodyText3
        {margin:0cm;
            margin-bottom:.0001pt;
            font-size:17.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        p.MsoBodyTextIndent2, li.MsoBodyTextIndent2, div.MsoBodyTextIndent2
        {margin:0cm;
            margin-bottom:.0001pt;
            text-align:justify;
            text-indent:21.25pt;
            font-size:8.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        p.MsoBodyTextIndent3, li.MsoBodyTextIndent3, div.MsoBodyTextIndent3
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:49.65pt;
            margin-bottom:.0001pt;
            text-align:justify;
            text-indent:-49.65pt;
            font-size:8.0pt;
            font-family:"Times New Roman",serif;
            layout-grid-mode:line;}
        p.MsoBlockText, li.MsoBlockText, div.MsoBlockText
        {margin-top:0cm;
            margin-right:4.85pt;
            margin-bottom:0cm;
            margin-left:4.85pt;
            margin-bottom:.0001pt;
            text-align:justify;
            text-autospace:none;
            font-size:11.0pt;
            font-family:"Arial",sans-serif;
            font-style:italic;}
        a:link, span.MsoHyperlink
        {color:#000099;
            text-decoration:none none;}
        a:visited, span.MsoHyperlinkFollowed
        {color:#954F72;
            text-decoration:underline;}
        p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
        {mso-style-link:"Текст выноски Знак";
            margin:0cm;
            margin-bottom:.0001pt;
            font-size:8.0pt;
            font-family:"Tahoma",sans-serif;}
        span.a
        {mso-style-name:"Текст выноски Знак";
            mso-style-link:"Текст выноски";
            font-family:"Tahoma",sans-serif;}
        span.2
        {mso-style-name:"Основной текст 2 Знак";
            mso-style-link:"Основной текст 2";
            letter-spacing:-.3pt;
            layout-grid-mode:both;}
        /* Page Definitions */
        @page WordSection1
        {size:21.0cm 842.0pt;
            margin:14.2pt 1.0cm 14.2pt 1.0cm;}
        div.WordSection1
        {page:WordSection1;}
        /* List Definitions */
        ol
        {margin-bottom:0cm;}
        ul
        {margin-bottom:0cm;}
        -->
    </style>

</head>

<body lang=RU link="#000099" vlink="#954F72">

<div class=WordSection1>

    <p class=MsoBodyText2 align=center style='text-align:center;line-height:9.0pt'><span
                style='letter-spacing:-.1pt'>&nbsp;</span></p>

    <p class=MsoBodyText2 align=center style='text-align:center;line-height:9.0pt'><span
                style='font-size:8.0pt;letter-spacing:-.1pt'>ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ
АВТОНОМНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ</span></p>

    <p class=MsoBodyText2 align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;letter-spacing:-.1pt'>«БЕЛГОРОДСКИЙ ГОСУДАРСТВЕННЫЙ
НАЦИОНАЛЬНЫЙ ИССЛЕДОВАТЕЛЬСКИЙ УНИВЕРСИТЕТ»</span></b></p>

    <h6 style='page-break-after:auto'><span style='font-size:10.0pt;font-family:
"Times New Roman",serif'>ДОГОВОР ОБ ОКАЗАНИИ ПЛАТНЫХ ОБРАЗОВАТЕЛЬНЫХ УСЛУГ </span><span
                style='font-size:11.0pt;font-family:"Times New Roman",serif'>№</span><span
                style='font-size:9.5pt;font-family:"Times New Roman",serif'><?=$Application->getContractNumber()?></span></h6>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;layout-grid-mode:line'>г. Белгород
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
«<?=$current["day"]?>» <?=$current["fullMonth"]?> <?=$current["year"]?> г.</span></b></p>

    <p class=MsoBodyText2 style='text-indent:14.2pt;line-height:8.0pt'><span
                style='font-size:8.0pt;letter-spacing:-.1pt'>ФГАОУ ВО «Белгородский
государственный национальный исследовательский университет»<span
                    style='color:red'> </span><span style='color:black'>(</span>лицензия
Федеральной службы по надзору в сфере образования и науки на осуществление
образовательной деятельности от 26.05.2016 № 2159, свидетельство Федеральной
службы по надзору в сфере образования и науки о государственной аккредитации от
01.08.2016 № 2154), именуемое в дальнейшем НИУ «БелГУ», в лице <span
                    style='color:black'>проректора по качеству и дополнительному образованию
Шаповалова В.А</span>., действующего на основании доверенности&nbsp; № ДОВ-143
от&nbsp; 20.06.2018 ,<span style='color:black'> </span>с одной стороны, и <?=$fullname[0][1]?>,</span> <span style='font-size:8.0pt;letter-spacing:-.1pt'>имеющего
реквизиты: </span><!--b>(почт. адрес; паспорт [серия, номер, кем и когда выдан];
            ИНН; уровень образования, № телефона)</b--> <span style='font-size:8.0pt;
letter-spacing:-.1pt'>&nbsp;<?=$Application->getFullAddress( $addressFormat, 2, $addressEmptyValues )?>, паспорт №<?=$Application->getPassportNumber(2)?>, выдан <?=$Application->getPassportAuthor(2)?> <?=$passportDate2?>,
            телефон <?=$Application->getPhone(2)?>,
именуемого (-ой) в дальнейшем Заказчик, с другой стороны, и <?=$fullname[1][1]?>, имеющего
реквизиты: </span><!--b>(место жительства; паспорт [серия, номер, кем и когда
            выдан]; ИНН; уровень образования; № телефона)</b--><span style='font-size:8.0pt;
letter-spacing:0pt'> <?=$Application->getFullAddress( $addressFormat, 1, $addressEmptyValues )?>, паспорт №<?=$Application->getPassportNumber(1)?>, выдан <?=$Application->getPassportAuthor(1)?>
            <?=$passportDate1?>, телефон <?=$Application->getPhone(1)?>,</span><span
                style='font-size:8.0pt;letter-spacing:-.1pt'> именуемого (-ой) в дальнейшем
Потребитель, с третьей стороны, <span style='color:black'>в совместном
упоминании именуемые в дальнейшем Стороны, заключили настоящий Договор о
нижеследующем:</span></span></p>

    <p class=MsoNormal align=center style='text-align:center'><b><span
                    style='font-size:8.0pt;layout-grid-mode:line'>1. ПРЕДМЕТ ДОГОВОРА</span></b></p>

    <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
color:black;layout-grid-mode:line'>1.1. По настоящему договору Заказчик
оплачивает обучение Потребителя</span><span style='font-size:8.0pt;color:black'>
на условиях полного возмещения затрат за предоставляемые образовательные услуги<span
                    style='layout-grid-mode:line'>, а </span></span><span style='font-size:8.0pt'>НИУ
«БелГУ»<span style='color:black'> <span style='layout-grid-mode:line'>предоставляет
следующие образовательные услуги:</span></span></span></p>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
           style='margin-left:5.4pt;border-collapse:collapse'>
        <tr>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;letter-spacing:-2.2pt;layout-grid-mode:line'>&nbsp;</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;layout-grid-mode:line'>Описание платной
  образовательной услуги</span></b></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><b><span
                                style='font-size:8.0pt;layout-grid-mode:line'>Заполняется при оформлении:</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;letter-spacing:-2.2pt;layout-grid-mode:line'>1.</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:7.5pt;
  layout-grid-mode:line'>Вид дополнительной профессиональной программы
  (дополнительная профессиональная программа повышение квалификации;
  дополнительная профессиональная программа профессиональной переподготовки)</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'>
                    <span style='font-size:7.5pt;layout-grid-mode:line'><?=$Program->getType()->getFullName()?></span></p>
            </td>
        </tr>
        <tr style='height:12.15pt'>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;letter-spacing:-2.2pt;layout-grid-mode:line'>2.</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:7.5pt;
  layout-grid-mode:line'>Наименование дополнительной профессиональной программы</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal align=center style='text-align:center'><span style='font-size:
  7.5pt;layout-grid-mode:line'><?=$Program->getTitle()?></span></p>
            </td>
        </tr>
        <tr>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;letter-spacing:-2.2pt;layout-grid-mode:line'>3..</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal><span style='font-size:7.5pt;layout-grid-mode:line'>Форма
  реализации дополнительной профессиональной программы (очная, очно-заочная,
  заочная, частично или полностью в форме стажировки, заочная с применением
  электронного обучения и дистанционных образовательных технологий)</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:7.5pt;layout-grid-mode:line'><?=$Program->getForm()->getTitle()?></span></p>
            </td>
        </tr>
        <tr>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;letter-spacing:-2.2pt;layout-grid-mode:line'>4.</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal><span style='font-size:7.5pt;layout-grid-mode:line'>Объем
  дополнительной профессиональной программы <br>
  (в академических часах)</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center><span style='font-size:7.5pt;layout-grid-mode:line'><?=$Program->getHours()?></span></p>
            </td>
        </tr>
        <tr style='height:5.35pt'>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;color:black;letter-spacing:-2.2pt;layout-grid-mode:
  line'>5</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:7.5pt;
  color:black;layout-grid-mode:line'>Срок освоения дополнительной
  профессиональной программы:</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:7.5pt;layout-grid-mode:line'>с <?=$periodStart?> по <?=$periodEnd?></span></p>
            </td>
        </tr>
        <tr style='height:5.35pt'>
            <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:8.0pt;color:black;letter-spacing:-2.2pt;layout-grid-mode:
  line'>6</span></p>
            </td>
            <td width=332 valign=top style='width:248.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:7.5pt;
  color:black;layout-grid-mode:line'>Документ о квалификации, выдаваемый по
  окончанию обучения по дополнительной профессиональной программе и успешного
  прохождения итоговой аттестации (удостоверение о повышении квалификации,
  диплом о профессиональной переподготовке)</span></p>
            </td>
            <td width=347 valign=top style='width:259.9pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:5.35pt'>
                <p class=MsoNormal align=center style='text-align:center'><span
                            style='font-size:7.5pt;layout-grid-mode:line'><?=$Program->getDocumentType()?></span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt;color:black'>1.2. После освоения
Потребителем дополнительной профессиональной программы в полном объеме,
указанной в п.&nbsp;1.1. Договора, и успешного прохождения итоговой аттестации,
ему выдается документ о квалификации, указанный в п.1.1.6. В случае
непрохождения Потребителем в течение установленного срока всех аттестационных
испытаний, входящих в состав итоговой аттестации, и (или) отчисления
Потребителя из </span><span style='font-size:8.0pt'>НИУ «БелГУ»<span
                    style='color:black'> до освоения программы в полном объеме, ему выдаётся
документ об освоении тех или иных компонентов программы (справка). Лицам,
осваивающим дополнительную профессиональную программу параллельно с получением
среднего профессионального образования и (или) высшего образования,
удостоверение о повышении квалификации и (или) диплом о профессиональной
переподготовке выдается одновременно с получением соответствующего документа об
образовании и о квалификации.</span></span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt;color:black;layout-grid-mode:line'>1.3.
Стоимость образовательной услуги по Договору устанавливается приказом ректора
НИУ «БелГУ». Установленная в <b><?=getCurrentAcademicalYear()?></b> учебном году стоимость
образовательной услуги по Договору за один курс обучения по образовательной
программе, указанной в п.1.1. Договора, составляет <?=$Program->getPrice()?> руб. Полная стоимость
образовательной услуги по Договору определяется как сумма оплат за каждый курс
обучения в течение определенной Договором продолжительности обучения и
составляет <?=$Program->getPrice()?> руб. </span></p>

    <p class=MsoNormal style='text-align:justify;line-height:9.0pt'><span
                style='font-size:8.0pt;color:black;layout-grid-mode:line'>Стоимость
образовательной услуги может быть увеличена с учетом уровня инфляции,
предусмотренного основными характеристиками федерального бюджета на очередной
финансовый год и плановый период, а также в иных случаях, предусмотренных
законодательством Российской Федерации.&nbsp; Изменение установленной стоимости
образовательных услуг по Договору с учетом уровня инфляции осуществляется НИУ
«БелГУ» в одностороннем порядке с уведомлением об этом Заказчика/Потребителя
без оформления этого изменения дополнительным соглашением, вступает в силу с
даты, установленной приказом ректора. Уведомление Заказчика об указанных
изменениях Договора производится путем размещения информации на официальном
сайте НИУ «БелГУ в сети «Интернет» по адресу http://www.bsu.edu.ru/payment/.В
случае предоставления Потребителю академического отпуска, отпуска по
беременности и родам, отпуска по уходу за ребенком оплата по его завершении
осуществляется по стоимости курса обучения, установленной в учебном году, в
котором Потребитель допускается к занятиям. В стоимость обучения по Договору не
входят: выплаты социальных пособий (стипендии, компенсационные выплаты), других
пособий и льгот, в том числе оплата питания, проезда к месту постоянного
проживания и расходов на приобретение учебных принадлежностей, на
оздоровительные мероприятия; оплата за проживание в общежитиях, за
предоставляемые коммунальные, бытовые и другие услуги, непосредственно не
связанные с образовательным процессом, а также оплата дополнительных курсов,
консультаций и дополнительных образовательных услуг, не предусмотренных
Договором.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt;color:black'>1.4. Устанавливается 100 %
оплата стоимости образовательных услуг по дополнительной профессиональной
программе путем перечисления денежных средств на р/с НИУ «БелГУ». </span></p>

    <p class=MsoNormal style='text-align:justify;line-height:9.0pt'><span
                style='font-size:8.0pt;color:black'>По дополнительным профессиональным
программам (свыше 250 часов) возможна посеместровая оплата образовательных
услуг. Оплата первого семестра обучения производится до зачисления.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt;color:black'>1.5. Договор вступает в силу с
момента его подписания, заключается на весь срок освоения дополнительной
профессиональной программы, установленный п. 1.1. Договора, и действует до
выполнения Сторонами всех своих обязательств. Договор прекращает своё действие
по истечении срока освоения дополнительной профессиональной программы, в случае
</span><span style='font-size:8.0pt'>его досрочного<span style='color:black'>
расторжения и (или) во всех случаях отчисления Потребителя.</span></span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;text-transform:uppercase'>2. Права НИУ «</span></b><b><span
                    style='font-size:8.0pt'>БелГУ»<span style='text-transform:uppercase'>,
Заказчика, Потребителя</span></span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt;color:black'>2.1. </span><span
                style='font-size:8.0pt'>НИУ «БелГУ»<span style='color:black'> вправе
самостоятельно осуществлять образовательный процесс, выбирать системы оценок,
формы, порядок и периодичность промежуточной аттестации Потребителя, поощрять
Потребителя и налагать на него взыскания в пределах, предусмотренных
действующим законодательством РФ и локальными нормативными актами.</span></span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>2.2. Заказчик вправе получать от НИУ
«БелГУ» информацию по вопросам организации и обеспечения надлежащего исполнения
услуг, предусмотренных п. 1.1. Договора; образовательной деятельности НИУ
«БелГУ» и перспектив ее развития; успеваемости и поведения Потребителя, его
отношения к обучению в целом и по отдельным составляющим учебного плана.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>2.3. Потребитель вправе обращаться к
компетентным работникам НИУ «БелГУ» по вопросам, касающимся процесса обучения в
НИУ «БелГУ» в сфере дополнительного профессионального образования; пользоваться
имуществом НИУ «БелГУ», необходимым для осуществления образовательного процесса
во время занятий, предусмотренных расписанием; пользоваться дополнительными
образовательными услугами, не предусмотренными п. 1.1. Договора, на основании
отдельно заключенных договоров. </span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;text-transform:uppercase'>3. Обязанности ниу «</span></b><b><span
                    style='font-size:8.0pt'>БелГУ»</span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>3.1. При условии внесения Заказчиком
оплаты в соответствии с п.&nbsp;1.4. Договора зачислить Потребителя на
дополнительную профессиональную программу, указанную в п. 1.1. Договора.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>3.2. Организовать и обеспечить надлежащее
исполнение услуг, предусмотренных п. 1.1. Договора, в соответствии с
государственным образовательным стандартом/федеральным государственным
образовательным стандартом и (или) учебным планом дополнительной
профессиональной программы, календарным учебным графиком, расписанием занятий,
другими локальными нормативными актами, разрабатываемыми НИУ «БелГУ».</span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;text-transform:uppercase'>4. Обязанности Заказчика</span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.1. Своевременно, в сроки, указанные в
п.&nbsp;1.4. Договора, производить оплату за предоставляемые услуги, указанные
в разделе 1 Договора, непосредственно на р/с НИУ «БелГУ».</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.2. При осуществлении оплаты услуг по
Договору в платежных документах обязательно указывать:</span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><u><span
                        style='font-size:8.0pt'>ЗА ОБУЧЕНИЕ Ф.И.О. ПОТРЕБИТЕЛЯ, НОМЕР ДОГОВОРА.</span></u></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.3. При поступлении Потребителя в НИУ
«БелГУ» и в процессе его обучения своевременно предоставлять все необходимые
документы, предусмотренные законодательством РФ, локальными нормативными
актами.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.4. Проявлять уважение к персоналу НИУ
«БелГУ».</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.5. Возмещать ущерб, причиненный
Потребителем имуществу НИУ «БелГУ», в соответствии с законодательством РФ.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.6. Обеспечить посещение Потребителем
занятий согласно учебному расписанию и его обучение в соответствии с Договором.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>4.7. Заказчик гарантирует оплату на
протяжении всего срока обучения Потребителя и подтверждает свою платёжеспособность.</span></p>

    <p class=MsoNormal align=center style='text-align:center;text-indent:14.2pt;
line-height:9.0pt'><b><span style='font-size:8.0pt;text-transform:uppercase'>5.
Обязанности Потребителя</span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.1. Посещать занятия согласно учебному
расписанию.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.2. Своевременно сообщать о причинах
своего отсутствия на занятиях.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.3. Выполнять задания по подготовке к
занятиям, даваемые преподавателями НИУ «БелГУ».</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.4. Добросовестно осваивать
дополнительную профессиональную программу, выполнять учебный план, овладевать
всеми видами профессиональных знаний, предусмотренными образовательной
программой.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.5. Соблюдать требования законодательства
РФ, Правил внутреннего распорядка НИУ «БелГУ» и иных локальных нормативных
актов, соблюдать учебную дисциплину и общепринятые нормы поведения, в
частности, проявлять уважение к персоналу НИУ «БелГУ» и другим обучающимся, не
посягать на их честь и достоинство.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt;line-height:
9.0pt'><span style='font-size:8.0pt'>5.6. Бережно относиться к имуществу НИУ
«БелГУ».</span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt'>6. ОТВЕТСТВЕННОСТЬ СТОРОН</span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.1. За неисполнение или ненадлежащее исполнение своих
обязательств по Договору Стороны несут ответственность, предусмотренную
законодательством Российской Федерации.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.2. В случае неисполнения или ненадлежащего исполнения
одной из Сторон обязательств по настоящему договору виновная Сторона возмещает
другой Стороне причиненные убытки, за исключением упущенной выгоды.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.3. Стороны освобождаются от ответственности за неисполнение
обязательств по данному договору, если это явилось следствием непреодолимых при
данных условиях обстоятельств (форс-мажор).</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.4. При обнаружении недостатка платных образовательных
услуг, в том числе оказания их не в полном объеме, предусмотренном
образовательными программами (частью образовательной программы), Заказчик
вправе по своему выбору потребовать:</span></p>

    <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>а)
безвозмездного оказания образовательных услуг; б) соразмерного уменьшения
стоимости оказанных платных образовательных услуг; в) возмещения понесенных им
расходов по устранению недостатков оказанных платных образовательных услуг
своими силами или третьими лицами.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.5. Заказчик вправе отказаться от исполнения договора
и потребовать полного возмещения убытков, если в установленный договором срок
недостатки платных образовательных услуг не устранены НИУ «БелГУ». Заказчик
также вправе отказаться от исполнения договора, если им обнаружен существенный
недостаток оказанных платных образовательных услуг или иные существенные
отступления от условий договора.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>6.6. Если НИУ «БелГУ» нарушил сроки оказания платных
образовательных услуг (сроки начала и (или) окончания оказания платных
образовательных услуг и (или) промежуточные сроки оказания платной
образовательной услуги) либо если во время оказания платных образовательных
услуг стало очевидным, что они не будут осуществлены в срок, Заказчик вправе по
своему выбору:</span></p>

    <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>а)
назначить НИУ «БелГУ» новый срок, в течение которого НИУ «БелГУ» должен
приступить к оказанию платных образовательных услуг и (или) закончить оказание
платных образовательных услуг; б) поручить оказать платные образовательные
услуги третьим лицам за разумную цену и потребовать от НИУ «БелГУ» возмещения
понесенных расходов; в) потребовать уменьшения стоимости платных
образовательных услуг; г) расторгнуть договор. Заказчик вправе потребовать
полного возмещения убытков, причиненных ему в связи с нарушением сроков начала
и (или) окончания оказания платных образовательных услуг, а также в связи с
недостатками платных образовательных услуг.</span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:8.5pt'><b><span
                    style='font-size:8.0pt;text-transform:uppercase;letter-spacing:-.2pt;
layout-grid-mode:line'>7. Особые условия</span></b></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.1. Договор может быть изменен или расторгнут по
соглашению Сторон. Односторонний отказ от выполнения отдельных положений и
условий Договора не допускается, за исключением случаев, предусмотренных
действующим законодательством РФ, локальными нормативными актами, а также
условиями Договора.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.2. Потребителю предоставляется право обучения на
срок, обеспеченный оплатой. В случае непоступления в полном объеме платы за
обучение в сроки, указанные в п&nbsp;1.4. Договора, или заключенных к нему
дополнительных соглашениях, договор может быть расторгнут НИУ «БелГУ» в
одностороннем порядке с отчислением Потребителя из НИУ «БелГУ».</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.3. Заказчик и (или) Потребитель вправе отказаться от
исполнения договора (договор может быть расторгнут по инициативе Заказчика и (или)
Потребителя) при условии оплаты НИУ «БелГУ» фактически понесенных им расходов,
определяемых сметой, составляемой на оказание образовательных услуг,
предусмотренных Договором.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.4. Договор может быть расторгнут досрочно в
одностороннем порядке НИУ «БелГУ», если надлежащее исполнение обязательства по
оказанию платных образовательных услуг стало невозможным вследствие действий
(бездействия) Потребителя: в случае применения к Потребителю отчисления как
меры дисциплинарного взыскания, в случае невыполнения Потребителем обязанностей
по добросовестному освоению образовательной программы и выполнению учебного
плана, в случаях, установленных законодательством РФ, локальными нормативными
актами. В случае досрочного расторжения Договора в одностороннем порядке НИУ «БелГУ»,
если надлежащее исполнение обязательства по оказанию платных образовательных
услуг стало невозможным вследствие действий (бездействия) Потребителя
(невозможности исполнения, возникшей по вине Заказчика и (или) Потребителя),
услуги подлежат оплате в полном объеме, внесенная оплата за обучение по
дополнительной профессиональной программе не возвращается.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.5. В случае досрочного отчисления Потребителя по
основаниям, установленным законодательством РФ, локальными нормативными актами,
Договор считается расторгнутым на основании приказа об отчислении Потребителя
из НИУ «БелГУ». </span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.6. Стороны признают равную юридическую силу
собственноручной подписи и факсимиле подписи, воспроизведенного механическим
способом с использованием клише подписи лица, уполномоченного подписывать
настоящий Договор, дополнительные соглашения к нему и другие документы,
заключаемые между НИУ «БелГУ» и Заказчиком в связи с предоставлением
образовательных услуг.</span></p>

    <p class=MsoNormal style='text-align:justify;text-indent:14.2pt'><span
                style='font-size:8.0pt'>7.7. Договор составлен в 3 экземплярах: 1 экземпляр для
Заказчика, 1 экземпляр для Потребителя, 1 экземпляр – НИУ «БелГУ».</span></p>

    <p class=MsoNormal align=center style='text-align:center;line-height:9.0pt'><b><span
                    style='font-size:8.0pt;layout-grid-mode:line'>8. АДРЕС И РЕКВИЗИТЫ НИУ «БЕЛГУ»</span></b></p>

    <p class=MsoNormal style='text-align:justify;line-height:9.0pt'><span
                style='font-size:7.0pt;letter-spacing:-.3pt'>8.1. <b>НИУ «БелГУ»: </b>Россия,
308015, г. Белгород, ул. Победы, 85, Тел:&nbsp;(4722)&nbsp;30-12-11,
Факс:&nbsp;(4722) 30-10-12 <br>
ФГАОУ ВО «Белгородский государственный национальный исследовательский
университет». Реквизиты: ИНН 3123035312; <br>
КПП 312301001; ОКАТО 14401365000; р/с № 40503810207004000002&nbsp; в
Белгородском отделении №8592 ПАО «Сбербанк России»; БИК 041403633; кор/счет
30101810100000000633.</span></p>

    <p class=MsoNormal style='text-align:justify;line-height:9.0pt'><span
                style='font-size:7.0pt;letter-spacing:-.3pt'>В соответствии с требованиями
статьи 9 ФЗ от 27.07.2006 № 152-ФЗ «О персональных данных» даю согласие НИУ
«БелГУ» на обработку, в том числе автоматизированную, с целью учета субъектов
договорных отношений содержащихся в договоре моих персональных данных, включая
сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение),
использование, обезличивание, блокирование, уничтожение. Действие согласия
начинается со дня его подписания и соответствует сроку хранения персональных
данных; согласие может быть отозвано путем подачи соответствующего заявления в
НИУ «БелГУ».</span></p>

    <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=693
           style='width:520.0pt;margin-left:9.9pt;border-collapse:collapse'>
        <tr>
            <td width=219 style='width:164.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoHeading7><span style='font-size:7.0pt'>Проректор по качеству и
  дополнительному образованию НИУ «БелГУ»</span></p>
            </td>
            <td width=18 style='width:13.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><b><span style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
            <td width=226 style='width:169.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoHeading7><span style='font-size:7.0pt'>Заказчик</span></p>
            </td>
            <td width=19 style='width:14.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><b><span style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
            <td width=211 style='width:158.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoHeading7><span style='font-size:7.0pt'>Потребитель</span></p>
            </td>
        </tr>
        <tr>
            <td width=219 style='width:164.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><b><span
                                style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
            <td width=18 style='width:13.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><b><span
                                style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
            <td width=226 style='width:169.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='line-height:10.0pt'><b><span style='font-size:7.0pt'>со
  всеми условиями согласен, </span></b></p>
                <p class=MsoNormal style='line-height:10.0pt'><b><span style='font-size:7.0pt'>экземпляр
  договора получил:</span></b></p>
            </td>
            <td width=19 style='width:14.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><b><span
                                style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
            <td width=211 style='width:158.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><b><span
                                style='font-size:7.0pt'>&nbsp;</span></b></p>
            </td>
        </tr>
        <tr style='height:16.65pt'>
            <td width=219 style='width:164.55pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.65pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><span
                            style='font-size:8.0pt'>&nbsp;</span></p>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><span
                            style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=18 style='width:13.45pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.65pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><span
                            style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=226 style='width:169.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.65pt'>
                <p class=MsoFooter style='text-align:justify;line-height:10.0pt'><span
                            style='left:0px;position:absolute;z-index:251656192'><u><span
                                    style='font-size:8.0pt'>__________________________</span></u></p>
            </td>
            </span>
            <td width=19 style='width:14.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.65pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><span
                            style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=211 style='width:158.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:16.65pt'>
                <p class=MsoNormal style='text-align:justify;line-height:10.0pt'><span
                            style='left:0px;position:absolute;z-index:251657216'><u><span
                                    style='font-size:8.0pt'>__________________________</span></u></p>
            </td>
        </tr>
        <tr style='height:12.15pt'>
            <td width=219 style='width:164.55pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>_________________В.А.
  Шаповалов</span></p>
            </td>
            <td width=18 style='width:13.45pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=226 style='width:169.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='left:0px;
  position:absolute;z-index:251659264'><span style='font-size:8.0pt'>__________________________</span></p>
            </td>
            </span>
            <td width=19 style='width:14.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=211 style='width:158.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.15pt'>
                <p class=MsoNormal style='text-align:justify'><span style='left:0px;
  position:absolute;z-index:251658240'><span style='font-size:8.0pt'>__________________________</span></p>
            </td>
        </tr>
        <tr>
            <td width=219 style='width:164.55pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>М.П.</span></p>
            </td>
            <td width=18 style='width:13.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=226 style='width:169.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>М.П.</span></p>
            </td>
            <td width=19 style='width:14.15pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
            <td width=211 style='width:158.0pt;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt'>&nbsp;</span></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal align=center style='text-align:center'><span
                style='font-size:6.5pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

</div>

</body>

</html>
