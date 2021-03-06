<?php if (is_callable('getItemData')): ?>
    <!DOCTYPE html>
    <html xmlns="https://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<base href="//sklad-ofis.ru/"/>-->
        <base href="//sklad-ofis.ru"/>

        <!--[if IE]>
        <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <meta name='yandex-verification' content='5c6c68c67cb1b959'/>
        <title><?= getItemData('title'); ?></title>
        <meta name="keywords"
              content="<?= getItemData('title'); ?>"/>
        <meta name="description"
              content="<?= getItemData('title'); ?>"/>


        <link rel="stylesheet" type="text/css" href="/assets/templates/v1.css"/>
        <script type="text/javascript" src="//vk.com/js/api/share.js?85" charset="windows-1251" async></script>
        <!-- HotLog
        <script type="text/javascript">
            hotlog_r=""+Math.random()+"&s=2298231&im=307&r="+
                escape(document.referrer)+"&pg="+escape(window.location.href);
            hotlog_r+="&j="+(navigator.javaEnabled()?"Y":"N");
            hotlog_r+="&wh="+screen.width+"x"+screen.height+"&px="+
                (((navigator.appName.substring(0,3)=="Mic"))?screen.colorDepth:screen.pixelDepth);
            hotlog_r+="&js=1.3";
            document.write('<div style="display:none"><a href="//click.hotlog.ru/?2298231" target="_blank"><img '+
                           'src="//hit3.hotlog.ru/cgi-bin/hotlog/count?'+
                           hotlog_r+'" border="0" width="88" height="31" title="HotLog: показано количество посетителей за сегодня, за вчера и всего" alt="HotLog"><\/a></div>');
        </script>
        <!-- /HotLog -->
        <meta name="google-site-verification" content="WwQ5PN02ZnEsP7NAw4g0VsqxKgx-lGt8zx9BZqG2UwQ"/>
        <style>
            .bg_in {
                background-position-y: -55px;
            }

            .tovar_page {
                margin-top: 30px;
            }
        </style>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    </head>

    <body class="bg_in">
    <!--тесттесттест-->
    <div id="wrapper">
        <header id="header">
            <div class="wrap">
                <div class="head_right">
                    <div style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:21px;
color:#ff9138;
margin:5px 0;
display:block;"><a href="tel:+74952262215" style="color: #ff9138;text-decoration: none;">+7 (495) 226-22-15</a></div>
                    <form id="poisk" action="find.html" method="post" style="width: initial;">
                        <input type="text" name="search" placeholder="Номер объекта или фраза">
                        <input class="search" type="submit" value="Найти!">
                    </form>
                </div>
                <div class="absolute_block">
                    <a href="/towns/" class="shoce towns"><span>Поиск по городам МО</span></a>
                    <a href="/highways/" class="shoce"><span>Поиск по шоссе</span></a>
                    <a href="/districts/" class="distr"><span>Поиск по району</span></a>


                </div>
                <div id='blok_logo' style="float: left; width: 230px; height: 85px;">
                    <a class="logo" href="/"></a>
                </div>
                <!-- ч:topp -->
                <nav>
                    <ul id="ajaxmenu" class="top_nav">
                        <ul class="box">
                            <li>
                                <a href="/">Главная
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="ostavit_zayavku/">Оставить заявку
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="kontakti.html">Контакты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="vakansii.html">Вакансии
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="tovars/">Объекты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="stati/">Статьи
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="build-to-suit.html">BTS
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                        </ul>

                    </ul>
                </nav>
                <button class="hamburger mobile">&#9776;</button>
                <button class="cross mobile">&#735;</button>
                <div class="mobile_menu mobile">
                    <ul>
                        <ul class="box">
                            <li>
                                <a href="/">Главная
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="ostavit_zayavku/">Оставить заявку
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="kontakti.html">Контакты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="vakansii.html">Вакансии
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="tovars/">Объекты
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="stati/">Статьи
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                            <li>
                                <a href="build-to-suit.html">BTS
                                    <span class="tab-l"></span><span class="tab-r"></span></a></li>
                        </ul>

                        <li><a href="/towns/">Поиск по городам МО</a></li>
                        <li><a href="/highways/">Поиск по шоссе</a></li>
                        <li><a href="/districts/">Поиск по району</a></li>
                    </ul>
                </div>

                <div class='zaya'>
                    <script>
                        nomer = {
                            593: '1824А',
                            463: '1521А',
                            464: '1520А',
                            763: '1582А',
                            591: '1826А',
                            592: '1825А',
                            448: '1824А',
                            594: '1823А',
                            595: '1821А',
                            596: '1820А',
                            597: '1819А',
                            598: '1818А',
                            599: '1817А',
                            600: '1816А',
                            601: '1814А',
                            602: '1813А',
                            448: '1812А',
                            607: '1808А',
                            608: '1807А',
                            609: '1806А',
                            610: '1804А',
                            636: '1803А',
                            637: '1802А',
                            638: '1801А',
                            639: '1800А',
                            640: '1799А',
                            641: '1798А',
                            642: '1797А',
                            643: '1796А',
                            644: '1795А',
                            645: '1794А',
                            646: '1793А',
                            647: '1792А',
                            648: '1791А',
                            649: '1788А',
                            650: '1787А',
                            651: '1786А',
                            652: '1785А',
                            653: '1784А',
                            655: '1783А',
                            656: '1782А',
                            657: '1781А',
                            658: '1780А',
                            659: '1779А',
                            660: '1778А',
                            661: '1776А',
                            662: '1775А',
                            663: '1773А',
                            664: '1767А',
                            665: '1766А',
                            666: '1735А',
                            667: '1734А',
                            668: '1733А',
                            669: '1732А',
                            670: '1729А',
                            671: '1728А',
                            672: '1727А',
                            673: '1726А',
                            674: '1725А',
                            675: '1724А',
                            676: '1723А',
                            677: '1722А',
                            678: '1721А',
                            679: '1720А',
                            680: '1719А',
                            682: '1718А',
                            683: '1717А',
                            684: '1716А',
                            685: '1715А',
                            686: '1714А',
                            687: '1713А',
                            688: '1712А',
                            689: '1711А',
                            690: '1710А',
                            691: '1709А',
                            692: '1708А',
                            693: '1707А',
                            694: '1706А',
                            696: '1705А',
                            697: '1703А',
                            698: '1702А',
                            699: '1701А',
                            700: '1700А',
                            701: '1699А',
                            702: '1698А',
                            703: '1697А',
                            704: '1694А',
                            705: '1693А',
                            706: '1692А',
                            707: '1691А',
                            708: '1690А',
                            709: '1687А',
                            711: '1680А',
                            712: '1675А',
                            713: '1674А',
                            715: '1673А',
                            716: '1671А',
                            719: '1669А',
                            720: '1668А',
                            721: '1667А',
                            723: '1666А',
                            728: '1665А',
                            731: '1660А',
                            732: '1659А',
                            734: '1656А',
                            736: '1655А',
                            738: '1654А',
                            740: '1653А',
                            742: '1649А',
                            745: '1646А',
                            748: '1643А',
                            750: '1617А',
                            752: '1609А',
                            754: '1605А',
                            755: '1603А',
                            756: '1601А',
                            757: '1599А',
                            758: '1596А',
                            759: '1595А',
                            760: '1590А',
                            761: '1587А',
                            762: '1583А',
                            763: '1582А',
                            764: '1576А',
                            767: '1575А',
                            768: '1574А',
                            769: '1573А',
                            770: '1571А',
                            771: '1567А',
                            772: '1565А',
                            773: '1564А',
                            774: '1563А',
                            775: '1562А',
                            776: '1560А',
                            777: '1559А',
                            778: '1557А',
                            779: '1554А',
                            780: '1552А',
                            781: '1550А',
                            782: '1549А',
                            783: '1543А',
                            784: '1541А',
                            785: '1537А',
                            786: '1536А',
                            787: '1535А',
                            788: '1533А',
                            789: '1532А',
                            790: '1531А',
                            791: '1530А',
                            792: '1527А',
                            793: '1524А',
                            766: '551А',
                            765: '570А',
                            753: '572А',
                            751: '575А',
                            747: '578А',
                            746: '579А',
                            744: '582А',
                            743: '583А',
                            741: '584А',
                            739: '585А',
                            737: '589А',
                            735: '590А',
                            733: '591А',
                            730: '593А',
                            727: '594А',
                            726: '598А',
                            725: '600А',
                            724: '601А',
                            722: '604А',
                            717: '632А',
                            626: '665А',
                            624: '668А',
                            623: '670А',
                            622: '689А',
                            621: '690А',
                            620: '709А',
                            619: '747А',
                            618: '749А',
                            617: '845А',
                            616: '863А',
                            615: '1147А',
                            614: '1227А',
                            613: '1228А',
                            612: '1292А',
                            611: '1294А',
                            465: '1519А',
                            466: '1518А',
                            467: '1517А',
                            468: '1516А',
                            469: '1514А',
                            470: '1510А',
                            471: '1509А',
                            474: '1508А',
                            475: '1507А',
                            476: '1506А',
                            477: '1505А',
                            478: '1504А',
                            479: '1503А',
                            480: '1502А',
                            481: '1500А',
                            482: '1499А',
                            483: '1496А',
                            484: '1495А',
                            485: '1494А',
                            486: '1493А',
                            488: '1492А',
                            489: '1491А',
                            490: '1490А',
                            491: '1489А',
                            492: '1487А',
                            493: '1486А',
                            494: '1485А',
                            495: '1484А',
                            496: '1481А',
                            497: '1480А',
                            498: '1479А',
                            499: '1476А',
                            500: '1473А',
                            501: '1469А',
                            502: '1462А',
                            503: '1455А',
                            504: '1453А',
                            505: '1448А',
                            506: '1446А',
                            507: '1443А',
                            508: '1442А',
                            509: '1439А',
                            510: '1433А',
                            511: '1431А',
                            512: '1427А',
                            513: '1426А',
                            514: '1425А',
                            515: '1424А',
                            516: '1422А',
                            519: '1419А',
                            520: '1418А',
                            521: '1417А',
                            522: '1416А',
                            523: '1414А',
                            524: '1411А',
                            525: '1408А',
                            526: '1404А',
                            527: '1403А',
                            528: '1402А',
                            529: '1401А',
                            536: '1399А',
                            537: '1396А',
                            538: '1394А',
                            539: '1393А',
                            540: '1389А',
                            541: '1388А',
                            542: '1387А',
                            543: '1385А',
                            544: '1384А',
                            545: '1383А',
                            546: '1382А',
                            547: '1381А',
                            548: '1380А',
                            549: '1379А',
                            550: '1377А',
                            551: '1376А',
                            552: '1375А',
                            557: '1374А',
                            558: '1373А',
                            559: '1372А',
                            560: '1371А',
                            561: '1370А',
                            562: '1369А',
                            563: '1368А',
                            564: '1367А',
                            565: '1363А',
                            566: '1362А',
                            567: '1361А',
                            568: '1360А',
                            569: '1359А',
                            570: '1343А',
                            571: '1342А',
                            572: '1341А',
                            573: '1340А',
                            574: '1339А',
                            575: '1338А',
                            576: '1337А',
                            577: '1335А',
                            578: '1333А',
                            580: '1331А',
                            581: '1308А',
                            582: '1307А',
                            583: '1306А',
                            584: '1304А',
                            585: '1303А',
                            586: '1302А',
                            587: '1301А',
                            588: '1300А',
                            589: '1299А',
                            590: '1298А',
                            611: '1294А',
                            612: '1292А',
                            613: '1228А',
                            614: '1227А',
                            615: '1147А',
                            616: '863А',
                            617: '845А',
                            618: '749А',
                            619: '747А',
                            620: '709А',
                            621: '690А',
                            622: '689А',
                            623: '670А',
                            624: '668А',
                            626: '665А',
                            717: '632А',
                            722: '604А',
                            724: '601А',
                            726: '600А',
                            795: '598А',
                            727: '594А',
                            730: '593А',
                            733: '591А',
                            735: '590А',
                            737: '589А',
                            739: '585А',
                            741: '584А',
                            743: '583А',
                            744: '582А',
                            746: '579А',
                            747: '578А',
                            751: '575А',
                            753: '572А',
                            765: '570А',
                            766: '551А',
                            803: '1522А',
                            804: '1822А',
                            805: '1538А',
                            806: '1511А',
                            807: '1512А',
                            808: '1815А',
                            809: '1498А',
                            810: '1630А',
                            811: '1811А',
                            812: '1810А',
                            813: '1809А',
                            814: '1805А',
                            815: '1777А',
                            816: '1774А',
                            817: '1731А',
                            818: '1661А',
                            819: '1662А',
                            820: '1668А',
                            821: '1730А',
                            822: '1670А',
                            823: '1671А',
                            824: '1673А',
                            603: '1812А',
                            825: '1674А',
                            826: '1675А',
                        };

                        links = {
                            448: '/index.php?type=560&idr=1824',
                            448: '/index.php?type=560&idr=1812',
                            765: '/index.php?type=560&idr=570',
                            726: '/index.php?type=560&idr=598',
                            726: '/index.php?type=560&idr=600',
                        }
                    </script>


                    <form method='post' id="product-form" class="form-sysm">
                        <div class='close'>x</div>
                        <input type='hidden' name='id' value='<?= getItemData('id'); ?>'/>


                        <input type="hidden" name="fb-id" value="1821">
                        <input type="hidden" name="fb-vidoperacii_name" value="Аренда">
                        <input type="hidden" name="fb-rayon_name" value="МО Северо-восток">
                        <input type="hidden" name="fb-metro_name" value="Не выбрано">
                        <input type="hidden" name="fb-kmotmkad" value="15">
                        <input type="hidden" name="fb-cena" value="140">

                        <table>
                            <tbody>
                            <tr>
                                <td class='title' colspan='3'>Заявка на объект</td>
                            </tr>
                            <tr>
                                <td class="name">Контактное лицо:</td>
                                <td class="data"><input type="text" id="fb-name" name="fb-name" size="25"></td>
                                <td rowspan='3' class='img'><img src="/assets/images/object/150823621703-02.jpg" alt="">
                                </td>
                            </tr>
                            <tr>
                                <td class="name">Контактный e-mail:</td>
                                <td class="data"><input type="text" id="fb-mail" name="fb-mail" size="25"></td>
                            </tr>
                            <tr>
                                <td class="name">Контактный телефон:</td>
                                <td class="data"><input type="text" id="fb-phone" name="fb-phone" size="25"></td>
                            </tr>
                            <tr>
                                <td class="name">Сообщение:</td>
                                <td class="data" colspan='2'><textarea name="fb-message" id="fb-message" cols="45"
                                                                       rows="6"></textarea></td>
                            </tr>
                            <tr>
                                <td class="name"></td>
                                <td class="data"><div class="g-recaptcha" data-sitekey="6LdF9kgUAAAAAO3FeVX4ySbioN1Zxpyy6PL2_A7L"></div></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="2">
                                    <div class="policy">
                                        <input type="checkbox" name="policy" value="1" class="required" checked="">
                                        <span>Принимаю <a href="politika-konfidencialnosti.html" target="_blank">политику конфиденциальности</a></span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="name">&nbsp;</td>
                                <td class="data"><input type="submit" id="submit" name="fm-submit" value="Отправить">
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>


                    </form>
                </div> <!--Заявка-->


        </header><!-- #header-->

        <div id="content">
            <div class="wrap link__head">
                <nav>
                    <div style="float:left; margin-right:40px; margin-left:230px;">
                        <ul class='box' style='height:102px;'>
                            <!--li><a href='arenda-sklada/'>Аренда склада</a></li-->
                            <li><a href='arenda-sklada/kupit-sklad.html'>Купить склад</a></li>
                            <li><a href='prodazha-kommercheskoj-nedvizhimosti.html'>Продажа склада</a></li>
                            <li><a href='arenda-sklada/otvetstvennoe-hranenie.html'>Склады ответственного хранения</a>
                            </li>
                            <li><a href='arenda-sklada-v-moskve/'>Аренда склада в Москве</a></li>
                            <li><a href='sklady-v-moskovskoj-oblasti.html'>Аренда склада в Московской области</a></li>
                        </ul>
                    </div>
                    <div style="float:left; margin-right:40px">
                        <ul class='box' style='height:102px;'>
                            <li><a href='arenda-sklada/arenda-sklada-ot-sobstvennika.html'>Аренда склада от
                                    собственника</a></li>
                            <li><a href='arenda-sklada/teplyi-sklad.html'>Аренда теплого склада</a></li>
                            <li><a href='arenda-sklada/holodnyi-sklad.html'>Аренда холодного склада</a></li>
                            <li><a href='arenda-sklada/sklad-do-1000m.html'>Аренда склада до 1000м.</a></li>
                            <li><a href='arenda-sklada/farmacevticheskij-sklad.html'>Аренда фармацевтического склада</a>
                            </li>
                            <!--li><a href="tovars/">Все объекты</a></li-->
                        </ul>
                    </div>
                </nav>
                <br class='clear'/>
            </div>
            <div class="wrap">
                <!-- -->
                <div class="breadcrumbs">
                    <a href="#">Главная</a> > <a href="tovars/">Каталог</a> > <span><?= getItemData('title'); ?></span>
                </div>
                <!-- -->
                <div class="central">
                    <div class="meta">

                    </div>


                    <!-- .tovar_page  -->
                    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "description": "<?= getItemData('short_description'); ?>",
  "name": "<?= getItemData('title'); ?>",
  "image": "<?= getItemData('cover_image'); ?>",
  "offers": {
    "@type": "Offer",
    "availability": "https://schema.org/InStock",
    "price": "1800 руб. в год",
    "priceCurrency": "RUB"
  },
  "url": "<?= getItemData('href'); ?>",
  "sku": "<?= getItemData('id'); ?>",
  "category": "аренда Склад"
}






                    </script>


                    <div class="tovar_page" itemscope itemtype="http://schema.org/Product">

                        <div class="left"> <!---->


                            <!-- Start photosgallery-std -->
                            <div class="sliderkit photosgallery-std">
                                <div class="sliderkit-nav">
                                    <div class="sliderkit-nav-clip">

                                        <ul>

                                            <?php $images = getItemData('images');
                                            foreach ($images as $image) echo '<li><a href="#" title="' . getItemData('short_description') . '"><img src="' . getImageThumb($image, 130, 98) . '" alt="[Alternative text]"/></a></li>';
                                            ?>


                                            <!---->
                                        </ul>
                                    </div>
                                    <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-prev"><a rel="nofollow"
                                                                                                       href="#"
                                                                                                       title="Previous line"><span>Previous line</span></a>
                                    </div>
                                    <div class="sliderkit-btn sliderkit-nav-btn sliderkit-nav-next"><a rel="nofollow"
                                                                                                       href="#"
                                                                                                       title="Next line"><span>Next line</span></a>
                                    </div>
                                </div>
                                <div class="sliderkit-panels">
                                    <?php //$images = getItemData('images');
                                    foreach ($images as $image) echo '<div class="sliderkit-panel"><a href="' . $image . '" rel="group" target="_blank"><img src="' . getImageThumb($image, 408, 315) . '" alt="skofImage" itemprop="image"/></a></div>';
                                    ?>
                                </div>
                            </div>
                            <!-- // end of photosgallery-std -->
                            <script type="text/javascript" src="//yandex.st/share/share.js"
                                    charset="utf-8"></script>
                            <div class="yashare-auto-init" data-yashareL10n="ru"
                                 data-yashareType="none"
                                 data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"

                            ></div>

                            <a class="zajavka2 zajavka3"
                               onclick="show_z(<?= getItemData('id'); ?>,'<?= getItemData('title'); ?>','/assets/images/object/150823621703-02.jpg');return false;"
                               href="ostavit_zayavku/"><span>Оставить заявку</span></a>
                            <span class="h3">РАНЕЕ ПРОСМОТРЕННЫЕ ПРЕДЛОЖЕНИЯ</span>
                            <ul class="nedavno" sysm="vyvod_objekta_2">
                                <li>
                                    <div class='card_wrapper'>
                                        <div class="title"><?= getItemData('title'); ?></div>

                                        <a class='img'
                                           href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html"><img
                                                    src="//sklad-ofis.ru/system/cache/thumb/assets/images/object/MTUwODIzNjIxNzAzLTAy.246x110.jpg"></a>

                                        <span class='z_id'><?= getItemData('id'); ?></span>
                                        <p>Район: <span class="bold green">ЮВАО Москва</span></p>
                                        <p>Цена за метр в, руб.: <span class="bold green">1800</span></p>
                                        <p>Общая площадь: <span class="bold green">1000 кв. м</span></p></div>
                                    <a href="ostavit_zayavku/" class="zajavka">Оставить заявку</a><a
                                            href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html"
                                            class="more">Подробнее>></a>
                                    <div class="clear"></div>
                                </li>
                                <div class="clear"></div>
                            </ul>

                        </div>
                        <div class="right">

                            <div class='h1' itemprop="name"><h1><span
                                            class='num'>№<?= getItemData('id'); ?> </span><?= getItemData('title'); ?>
                                </h1><!--<h2> ЮВАО Москвы, около ТТК</h2>-->
                            </div>
                            <div class="h_ki">
                                <p>Номер объекта: <span><?= getItemData('id'); ?></span></p>
                                <p class='type_p'>Тип предложения: <span>
<a href='tovars/?vid_obekta=Склад&vid_operacii=аренда'><?= getItemData('object_category'); ?></a></span></p>


                                <p>Район:&nbsp;<span><a
                                                href="/?id=72&rayon=ЮВАО Москва&vid_obekta=Склад"><?= getItemData('region'); ?></a></span>
                                </p>
                                <p>Метро:&nbsp;<span><a
                                                href="/?id=72&metro=Кожуховская"><?= getItemData('metro'); ?></a></span>
                                </p>
                                <p>Шоссе:&nbsp;<span>&nbsp;<a
                                                href="/?id=72&shosse=Каширское&vid_obekta=Склад&vid_operacii=аренда"><?= getItemData('highway'); ?></a></span>
                                </p>


                                <p>Общая площадь:&nbsp;<span><a
                                                href="/?id=72&ploshyad_objekta=1000&tip_ploshadi=кв. м&ploshyad_objekta_do=1000&vid_obekta=Склад"><?= getItemData('maximum_space'); ?> <?= getItemData('space_dimension'); ?></a></span>
                                </p>
                                <!--p>Общая площадь:  <span>1000 кв. м</span></p-->


                                <p itemprop="offers" itemscope itemtype="http://schema.org/Offer">Цена за метр: <a
                                            class='red'
                                            href='tovars/?cena_objekta=1800&tip_ceny=в год&vid_obekta=Склад&vid_operacii=аренда'><span
                                                class="red"><span itemprop="price"><?= getItemData('price'); ?></span> руб. <span
                                                    itemprop="priceCurrency"
                                                    style="display:none;">RUB</span><?= getItemData('price_dimension'); ?></span></a>
                                </p>


                                <br/>


                                <p>Свободная
                                    площадь:&nbsp;<span><?= getItemData('available_space'); ?> <?= getItemData('space_dimension'); ?></span>
                                </p>

                                <p>Тип пола:&nbsp;<span><?= getItemData('floor_type'); ?></span></p>


                                <p>Технические характеристики: </p>
                                <ul>
                                    <?php $features = getItemData('features');
                                    foreach ($features as $feature) echo '<li>' . $feature . '</li>';
                                    ?>
                                </ul>
                                <br>


                                <!-- <b class='manager'></b>
                    <p>Менеджер на объекте:&nbsp;<span>Елена</span></p>
                    <p>Телефон:&nbsp;<span>+7(985)190-40-00</span></p>

                     -->
                            </div>
                            <div class="outh">

                                <a class="zajavka2_1"
                                   href="tovary/arenda-otkrytoj-ploshhadki-1000-kv.m.-yuvao-moskvy-okolo-ttk.html#callback_div"
                                   onclick="$('#callback_div').css('display','block')"><span>Обратный звонок</span></a>

                                <!--<a class="favorites" href="375.html"><span>Добавить в избранное</span></a> ; return false; -->
                                <form method="POST">
                                    <input type="hidden" value="<?= getItemData('id'); ?>" name="favorites">
                                    <input class="favorites" type="submit" value="Добавить в избранное">
                                </form>

                                <div style="border:2px solid #e5e5e5;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
padding:0 0 7px 3px;
font-family: 'cuprumregular';
color:#ff9138;
font-size:18px;">
                                    <p>Связаться с нами:</p>
                                    <p><span style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:19px;
color:#ff9138;
margin:5px 0;
display:block;">
					<a href="tel:+74952262215" style="color: #ff9138;text-decoration: none;">+7 (495) 226-22-15</a>

					</span></p>
                                    <p><span style="width:100%;font-family:Verdana, Geneva, sans-serif;
font-size:18px;
color:#ff9138;
margin:5px 0;
display:block;" class='email'>arenda@sklad-ofis.ru</span></p>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <span class='descr'>ОПИСАНИЕ</span>
                            <div itemprop="description">
                                <?= getItemData('full_description'); ?>
                            </div>
                            <div class="clear"></div>
                            <br/>
                            <h2 class='descr'><p></p></h2>
                        </div>
                        <div class="clear"></div>
                    </div> <!-- .tovar_page  -->
                </div>

                <div id="callback_div">
                    <table align="center" style="text-align: center; line-height: 1.5;">
                        <tbody>
                        <tr>
                            <td><span class="product-callback-form-title">Обратный звонок</span></td>
                        </tr>
                        <tr>
                            <td><h3 id="err_msg"></h3></td>
                        </tr>
                        <tr>
                            <td><p>Ваше имя</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="callback_name"></td>
                        </tr>
                        <tr>
                            <td><p>Телефон</p></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="callback_phone"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="policy" style="margin-top: 10px;">
                                    <input type="checkbox" name="policy" value="1" class="required" checked=""
                                           id="callback_policy">
                                    <span>Принимаю <a href="politika-konfidencialnosti.html" target="_blank">политику конфиденциальности</a></span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><a class="zajavka2_2" onclick="callback_send()"
                                   style="margin-left: auto;margin-right: auto;"><span>Заказать</span></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //SYSM comment: tovar_page -->


            </div>

        </div>
    </div>
    </div><!-- #content-->
    </div><!-- #wrapper -->

    <footer id="footer">
        <div class="wrap">
            <!--ul class="foot_menu">
    <li><a href="tovars/search_ofis.html">Аренда офиса</a></li>
    <li><a href="tovars/search_prodazha.html">Продажа офисов</a></li>
    <li><a href="tovars/torgov_ploshyad.html">Торговые площади</a></li>
    <li><a href="tovars/arenda_sklada.html">Аренда склада</a></li>
    <li><a href="tovars/skladskie_pomeshenie.html">Складские помещения</a></li>
    </ul-->
            <!--topmenu-->

            <div class="foot_phone">

                <span class='email'> <script>document.write("<a href='mailto:arenda@" + "sklad-ofis.ru'>arenda" + "@sklad-" + "ofis.ru</a>")</script></span>
                <div class='clear'></div>

                <span> 8 (495) 226-22-15
			</span>

            </div>
            <!--<div class="clear"></div> -->

            <!-- Yandex.Metrika informer -->
            <a href="https://metrika.yandex.ru/stat/?id=29424345&amp;from=informer"
               target="_blank" rel="nofollow"><img
                        src="https://informer.yandex.ru/informer/29424345/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                        style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика"
                        title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)"
                        onclick="try{Ya.Metrika.informer({i:this,id:29424345,lang:'ru'});return false}catch(e){}"/></a>
            <!-- /Yandex.Metrika informer -->

            <!-- Yandex.Metrika counter -->
            <script type="text/javascript">
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function () {
                        try {
                            w.yaCounter29424345 = new Ya.Metrika({
                                id: 29424345,
                                clickmap: true,
                                trackLinks: true,
                                accurateTrackBounce: true,
                                webvisor: true
                            });
                        } catch (e) {
                        }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () {
                            n.parentNode.insertBefore(s, n);
                        };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/watch.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else {
                        f();
                    }
                })(document, window, "yandex_metrika_callbacks");
            </script>
            <noscript>
                <div><img src="https://mc.yandex.ru/watch/29424345" style="position:absolute; left:-9999px;" alt=""/>
                </div>
            </noscript>
            <!-- /Yandex.Metrika counter -->

            <!-- google -->
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-10581168-19', 'sklad-ofis.ru');
                ga('send', 'pageview');

            </script>
            <!-- /google -->
        </div>
        <div class="copy" style="display: none;">
        </div>
        <div style="padding: 44px 0 10px 0; text-align: center;background: #fff;">
            © 2008-2017 Все права защищены. <br/>
            <a href='/' title="Аренда склада">Аренда склада</a>
            от sklad-ofis.ru — продажа коммерческой недвижимости в москве, <a
                    href='tovars/?vid_obekta=строительство под заказчика'>ответственное хранение</a><!--
-->

            <p><a href="karta-sajta.html" title="Карта сайта">Карта сайта</a></p>
        </div>
    </footer>


    <!-- RedHelper
    <script id="rhlpscrtg" type="text/javascript" charset="utf-8" async="async"
        src="https://web.redhelper.ru/service/main.js?c=terminal1204">
    </script>
    <!--/Redhelper -->
    <!-- #footer -->


    <script type="text/javascript" src="/assets/templates/v2.js"></script>

    <!-- Add fancyBox -->
    <link rel="stylesheet" href="/assets/js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen"/>
    <script type="text/javascript" src="/assets/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".sliderkit-panels a").fancybox({
                maxWidth: 800,
                maxHeight: 600,
                fitToView: false,
                width: '70%',
                height: '70%',
                autoSize: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });
        });
    </script>
    <script>
        $(".cross").hide();
        $(".mobile_menu").hide();
        $(".hamburger").click(function () {
            $(".mobile_menu").slideToggle("slow", function () {
                $(".hamburger").hide();
                $(".cross").show();
            });
        });

        $(".cross").click(function () {
            $(".mobile_menu").slideToggle("slow", function () {
                $(".cross").hide();
                $(".hamburger").show();
            });
        });
    </script>
    <script src="/system/plugins/secargonia/feedback/web/js/feedback.js?v=0.2.7"></script>
    </body>
    </html>
<?php endif; ?>