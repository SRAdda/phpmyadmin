<?php
/* $Id$ */

// T�rk�e �eviri � Bora Alio�lu
// mail: borasar@myrealbox.com
// icq uin: 20940178
// ####################################################### 
// �eviri hakk�ndaki her t�rl� d�zeltme ve �nerileriniz
// i�in benimle temasa ge�ebilirsiniz...
// #######################################################
// son g�ncelleme:01.10.2003 (in kosta/poli)
//                                    
//                                       "ego lente festino"

$charset = 'iso-8859-9';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';

$byteUnits = array('Byte', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$day_of_week = array('Pazar', 'Pazartesi', 'Sal�', '�ar�amba', 'Per�embe', 'Cuma', 'Cumartesi');
$month = array('Ocak', '�ubat', 'Mart', 'Nisan', 'May�s', 'Haziran', 'Temmuz', 'A�ustos', 'Eyl�l', 'Ekim', 'Kas�m', 'Aral�k');

// A�a��daki de�i�kenin tan�mlanmas� hakk�nda daha fazla bilgi i�in 
// http://www.php.net/manual/en/function.strftime.php sitesine g�zat�n�z

$datefmt = '%B %d, %Y at %I:%M %p';

$timespanfmt = '%s g�n, %s saat, %s dakika ve %s saniye'; 

$strAPrimaryKey = '%s �zerinde birincil indeks eklendi';
$strAbortedClients = '�ptal edildi'; 
$strAbsolutePathToDocSqlDir = 'L�tfen web sunucusu �zerinde docSQL dizinine giden tam yolu giriniz  '; 
$strAccessDenied = 'Eri�im engellendi';
$strAccessDeniedExplanation = 'phpMyAdmin MySQL sunucusuna ba�lanmay� denedi  sunucu ba�lant�y� reddetti. config.inc i�erisindeki bilgisayar adresini(host) , kullan�c� ad�n� ve �ifreyi kontrol edin ve MySQL sunucusunun y�neticisi taraf�ndan size verilen bilgiyle uyu�tu�undan emin olun.';
$strAction = 'Eylem';
$strAddAutoIncrement = 'Otomatik artma ekle';  
$strAddDeleteColumn = 'S�tun alan� Ekle/Sil';
$strAddDeleteRow = 'Kriter sat�r� Ekle/Sil';
$strAddDropDatabase = '<b>DROP DATABASE</b> ekle';
$strAddIntoComments = 'Yorumlara ekle';
$strAddNewField = 'Yeni alan ekle';
$strAddPriv = 'Yeni imtiyaz ekle';
$strAddPrivMessage = 'Yeni imtiyaz eklediniz..';
$strAddPrivilegesOnDb = 'Bir sonraki veritaban� �zerinde imtiyaz ekle';  
$strAddPrivilegesOnTbl = 'Bir sonraki tablo �zerinde imtiyazlar ekle';
$strAddSearchConditions = 'Arama durumu ekle ("where" komutu i�in):';
$strAddToIndex = '%s indeks sat�r� ekle';
$strAddUser = 'Yeni kullan�c� ekle';
$strAddUserMessage = 'Yeni bir kullan�c� eklediniz.';
$strAddedColumnComment = 'S�tun i�in eklenmi� yorum'; 
$strAddedColumnRelation = 'S�tun i�in eklenmi� ili�ki'; 
$strAdministration = 'Y�netim'; 
$strAffectedRows = 'Etkilenen sat�rlar:';
$strAfter = '%s tablosundan sonra';
$strAfterInsertBack = '�nceki sayfaya geri d�n';
$strAfterInsertNewInsert = 'Ba�ka  yeni bir kay�t ekle';
$strAll = 'T�m�';
$strAllTableSameWidth = 'B�t�n tablolar� ayn� geni�likte g�ster';
$strAlterOrderBy = 'Tablo s�ralamas�n� �una g�re de�i�tir';
$strAnIndex = '%s �zerinde yeni bir indeks eklendi';
$strAnalyzeTable = 'Tabloyu analiz et';
$strAnd = 'Ve';
$strAny = 'Herhangi';
$strAnyColumn = 'Herhangi s�tun';
$strAnyDatabase = 'Herhangi veritaban�';
$strAnyHost = 'Herhangi sunucu';
$strAnyTable = 'Herhangi tablo';
$strAnyUser = 'Herhangi kullan�c�';
$strArabic = 'Arap�a';  
$strArmenian = 'Ermenice';  
$strAscending = 'Artan';
$strAtBeginningOfTable = 'Tablo ba��nda';
$strAtEndOfTable = 'Tablo sonunda';
$strAttr = '�zellikler';
$strAutodetect = 'Otomatik tan�ma';  
$strAutomaticLayout = 'Otomatik d�zen';  

$strBack = 'Geri';
$strBaltic = 'Balt�k';  
$strBeginCut = 'BEGIN CUT';  
$strBeginRaw = 'BEGIN RAW';  
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - d�zenlemeyiniz';
$strBookmarkAllUsers = 'B�t�n kullan�c�lar�n bu yer imine eri�melerine izin ver';
$strBookmarkDeleted = 'Bookmark silindi.';
$strBookmarkLabel = 'Etiket';
$strBookmarkOptions = 'Yer imi se�enekleri';
$strBookmarkQuery = ' SQL sorgusu';
$strBookmarkThis = 'Bu SQL sorgusunu i�aretle';
$strBookmarkView = 'Sadece g�zat';
$strBrowse = 'Tara';
$strBrowseForeignValues = 'Foreign(yabanc�) de�erleri tara';
$strBulgarian = 'Bulgarca'; 
$strBzError = 'phpMyAdmin dump dosyas�n�  bu php versiyonundaki bozuk bir Bz2 uzant�s� nedeniyle s�k��t�r�mad�. phpMyAdmin dizinindeki configurasyon dosyas� i�indeki  <code>$cfg[\'BZipDump\']</code>  y�nergesini <code>FALSE</code> \'a de�i�tirmeniz gerekmektedir. Bz2 s�k��t�rma �zelliklerini kullanmak istiyorsan�z ,bir sonraki php s�r�m�ne g�ncelleme yapman�z gerekmektedir.php hata raporu %s\' e bak�n�z '; 
$strBzip = '"bzipped"';

$strCSVOptions = 'CSV se�enekleri';
$strCannotLogin = 'MySQL se�enekleri'; 
$strCantLoad = '%s uzant�s� y�klenemiyor,<br />PHP konfigurasyon dosyas�n� kontrol ediniz.';
$strCantLoadMySQL = 'MySQL uzant�s�n� y�kleyemiyor,<br />l�tfen PHP ayarlar�n� kontrol ediniz.';
$strCantLoadRecodeIconv = 'Karakter seti d�n���m� i�in gerekli olan Iconv veya recode uzant�lar�n� y�kleyenemiyor.  Php\'nin bu uzant�lara izin vermesini sa�lay�n veya phpMyAdmin i�inde karakter d�n���m�n� devre d��� b�rak�n�z...';
$strCantRenameIdxToPrimary = 'Indeks\'i PRIMARY olarak adland�r�mazs�n�z!';
$strCantUseRecodeIconv = 'Uzant� raporlar� y�klenmi�ken , ne iconv,ne libinconv,ne de recode_string fonksiyonu  kullan�lamaz.  Php ayarlar�n�z� kontrol ediniz.';
$strCardinality = 'En �nemli';
$strCarriage = 'Enter Karakteri: \\r';
$strCaseInsensitive = 'b�y�k k���k harf duyars�z'; 
$strCaseSensitive = 'b�y�k k���k harf duyarl�'; 
$strCentralEuropean = 'Orta Avrupa';  
$strChange = 'De�i�tir';
$strChangeCopyMode = 'Ayn� imtiyazlarla yeni bir kullan�c� yarat ve :';  
$strChangeCopyModeCopy = 'eski kullan�c�y� muhafaza et.';  
$strChangeCopyModeDeleteAndReload = 'eski kullan�c�y� kullan�c� tablolar�ndan sil ve sonra imtiyazlar� yeniden y�kle.';
$strChangeCopyModeJustDelete = 'eski kullan�c�y� kullan�c� tablolar�ndan sil.';  
$strChangeCopyModeRevoke = 'eskiden kalan b�t�n aktif imtiyazlar� iptal et ve sil.';
$strChangeCopyUser = 'Login bilgisini de�i�tir / Kullan�c� kopyala';
$strChangeDisplay = 'G�rmek istedi�iniz alan� se�iniz';
$strChangePassword = '�ifre De�i�tir';
$strCharset = 'Karakter seti'; 
$strCharsetOfFile = 'Dosyan�n karakter seti:';
$strCharsets = 'Karakter setleri'; 
$strCharsetsAndCollations = 'Karakter setleri ve kar��la�t�rmalar'; 
$strCheckAll = 'T�m�n� se�';
$strCheckDbPriv = 'Veritaban� �nceliklerini kontrol et';
$strCheckPrivs = '�mtiyazlar� kontrol et'; 
$strCheckPrivsLong = '&quot;%s&quot; veritaban� i�in imtiyazlar� kontrol et.';
$strCheckTable = 'Tabloyu kontrol et';
$strChoosePage = 'L�tfen d�zenlemek istedi�iniz sayfay� se�in';
$strColComFeat = 'S�tun yorumlar� g�steriliyor';
$strCollation = 'Kar��la�t�rma'; 
$strColumn = 'S�tun';
$strColumnNames = 'S�tun adlar�';
$strColumnPrivileges = 'S�tuna �zg� imtiyazlar';
$strCommand = 'Komut'; 
$strComments = 'S�tun yorum,ili�ki ve MIME tiplerini i�er.';
$strCompleteInserts = 'Her INSERT komutunda s�tun adlar�n� ekle';
$strCompression = 'S�k��t�rma';
$strConfigFileError ='phpMyAdmin konfigurasyon dosyan�z� okuyamad�....<br /> Bu php yorumlama hatas� buldu�u zaman veya dosyay� bulamad��� zaman meydana gelebilir..<br /> L�tfen a�a��daki linki kullanarak dosyay� direkt olarak �a��r�n ve ald���n�z php hata mesajlar�n� okuyunuz.�o�u durumda herhangi bir yerde t�rnak veya noktal� virg�l eksiktir<br /> Bo� bir sayfayla kar��la��rsan�z ,her�ey yolunda demektir.';
$strConfigureTableCoord = ' L�tfen %s tablosu i�in koordinatlar� yap�land�r�n�z';
$strConfirm = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz?';
$strConnections = 'Ba�lant�lar'; 
$strConstraintsForDumped = 'D�k�m� yap�lm�� tablolar i�in k�s�tlamalar';
$strConstraintsForTable = 'Tablo i�in k�s�tlamalar';
$strCookiesRequired = 'Cookieler a��k olmal�d�r.';
$strCopyTable = 'Tabloyu (veritaban�<b>.</b>tablo) kopyala :';
$strCopyTableOK = '%s tablosu %s �zerine kopyaland�.';
$strCopyTableSameNames = 'Tabloyu ayn�s�na kopyalayam�yor!';
$strCouldNotKill = 'phpMyAdmin  %s i�lemini kapatamad�. B�y�k ihtimalle daha �nceden kapat�lm��.';
$strCreate = 'Git';
$strCreateIndex = '%s. s�tunda yeni bir indeks olu�tur.';
$strCreateIndexTopic = 'Yeni bir indeks olu�tur';
$strCreateNewDatabase = 'Yeni veritaban� olu�tur';
$strCreateNewTable = '<b>%s</b> veritaban� �zerinde yeni bir tablo olu�tur';
$strCreatePage = 'Yeni sayfa olu�tur';
$strCreatePdfFeat = 'PDF\'lerin olu�turulmas�';
$strCriteria = 'Kriter';
$strCroatian = 'H�rvat�a'; 
$strCyrillic = 'Cyril';
$strCzech = '�ek�e'; 

$strDBComment = 'Veritaban� yorumu:';
$strDBGContext = 'Kontekst';
$strDBGContextID = 'Kontekst ID';
$strDBGHits = 'Giri�ler(hit)'; 
$strDBGLine = 'Sat�r';  
$strDBGMaxTimeMs = 'Max zaman, ms'; 
$strDBGMinTimeMs = 'Min zaman, ms'; 
$strDBGModule = 'Mod�l'; 
$strDBGTimePerHitMs = 'Zaman/Giri�, ms';
$strDBGTotalTimeMs = 'Toplam zaman, ms';
$strDanish = 'Danimarkaca'; 
$strData = 'Veri';
$strDataDict = 'Veri s�zl���';
$strDataOnly = 'Sadece veri';
$strDatabase = 'Veritaban� ';
$strDatabaseExportOptions = 'Veritaban� d�n���m ayarlar�';
$strDatabaseHasBeenDropped = '%s veritaban� kald�r�ld�.';
$strDatabaseNoTable = 'Bu veritaban� tablo i�ermiyor!';
$strDatabaseWildcard = 'Veritaban� (* izin verili):';
$strDatabases = 'Veritabanlar�';
$strDatabasesDropped = '%s veritabanlar� ba�ar�yla kald�r�ld�.'; 
$strDatabasesStats = 'Veritaban� istatistikleri';
$strDatabasesStatsDisable = '�statistikleri kapat'; 
$strDatabasesStatsEnable = '�statistikleri a�'; 
$strDatabasesStatsHeavyTraffic = 'Not: Burada veritaban� istatistiklerini  a�mak Web Sunucusu ile MySQL aras�nda y�ksek trafi�e yol a�abilir.'; 
$strDbPrivileges = 'Veritaban�na �zg� imtiyazlar';
$strDbSpecific = 'Veritaban�na �zg�';
$strDefault = 'Varsay�lan';
$strDefaultValueHelp = 'Varsay�lan de�erler i�in,t�rnak i�areti veya slash koymayarak ,l�tfen tek bir de�er giriniz:�u �ekilde : a';  
$strDelOld = '�u anki sayfada kullan�lmayan tablolara referanslar bulunuyor. Bu referanslar� silmek ister misiniz?';
$strDelete = 'Sil';
$strDeleteAndFlush = 'Kullan�c�lar� sil ve sonra imtiyazlar� sil.';
$strDeleteAndFlushDescr = 'Bu en temiz yoldur , fakat imtiyazlar� yeniden y�klemek zaman alabilir.';
$strDeleteFailed = 'Silme s�ras�nda hata olu�tu!';
$strDeleteUserMessage = '%s kullan�c�s�n� sildiniz.';
$strDeleted = 'Sat�r silindi.';
$strDeletedRows = 'Silinen sat�rlar:';
$strDeleting = '%s siliniyor';
$strDescending = 'Azalan';
$strDescription = 'Tan�mlama'; 
$strDictionary = 's�zl�k'; 
$strDisabled = 'Etkin de�il';
$strDisplay = 'G�r�nt�le';
$strDisplayFeat = '�zellikleri G�ster';
$strDisplayOrder = 'G�r�n�m d�zeni:';
$strDisplayPDF = 'PDF �emas�n� g�ster';
$strDoAQuery = '<br><br>"�rnekle sorgu" yap. (joker:%) <br>';
$strDoYouReally = 'A�a��daki komutu uygulamak istedi�inizden emin misiniz? ';
$strDocu = 'D�k�mantasyon';
$strDrop = 'Kald�r';
$strDropDB = 'Veritaban�\'n� kald�r %s';
$strDropSelectedDatabases = 'Se�ili veritabanlar�n� kald�r';
$strDropTable = 'Tablo\'yu kald�r';
$strDropUsersDb = 'Kullan�c�larla ayn� isimlerde olan veritabanlar�n� kald�r.';
$strDumpComments = ' S�tun yorumlar�n� SQL yorumlar� gibi i�er';
$strDumpSaved = 'D�k�m dosyas� %s dosyas�na kaydedildi';
$strDumpXRows = 'Sat�r say�s� : %s    %s .sat�rdan ba�layarak.';
$strDumpingData = 'Tablo d�k�m verisi';
$strDynamic = 'de�i�ken';

$strEdit = 'D�zenle';
$strEditPDFPages = ' PDF Sayfalar�n� d�zenle';
$strEditPrivileges = '�ncelikleri D�zenle';
$strEffective = 'Efektif';
$strEmpty = 'Bo�alt';
$strEmptyResultSet = 'MySQL bo� bir sonu� k�mesi d�nd�rd� ( s�f�r sat�r).';
$strEnabled = 'Etkin';
$strEnd = 'Son';
$strEndCut = 'END CUT'; 
$strEndRaw = 'END RAW'; 
$strEnglish = '�ngilizce'; 
$strEnglishPrivileges = ' Not: MySQL  imtiyaz adlar� �ngilizce olarak belirtilmi�tir ';
$strError = 'Hata';
$strEstonian = 'Estonyaca'; 
$strExcelOptions = 'Excel ayarlar�';
$strExecuteBookmarked = '��aretlenmi� sorguyu �al��t�r';
$strExplain = 'SQL\'i a��kla';
$strExport = 'D�n��t�r';
$strExportToXML = 'XML format�na d�n��t�r';
$strExtendedInserts = 'Tablo ismini ve INSERT deyimini sadece bir kez kullan';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Ba�ar�s�z denemeler'; 
$strField = 'Alan';
$strFieldHasBeenDropped = '%s alan� kald�r�lm��t�r';
$strFields = 'Alan Say�s�';
$strFieldsEmpty = ' Alan say�s� bo�! ';
$strFieldsEnclosedBy = 'Kapatma karakteri';
$strFieldsEscapedBy = 'Ka��� karakteri';
$strFieldsTerminatedBy = 'Alan sonu karakteri';
$strFileAlreadyExists = '%s dosyas� zaten serverda mevcut, dosya ad�n� de�i�tirin veya �zerine yaz se�ene�ini se�in! ';
$strFileCouldNotBeRead = 'Dosya okunamad�';  
$strFileNameTemplate = 'Dosya ismi �ablonu';
$strFileNameTemplateHelp = 'Veritaban� ismi i�in __DB__ , tablo ismi i�in __TABLE__ ve  zaman bildirimi i�in %sherhangi bir strftime%s de�eri kullan�n,uzant� otomatik olarak eklenecek,herhangi di�er bir metin korunacakt�r.';
$strFileNameTemplateRemember = '�ablonu hat�rla';
$strFixed = 'Sabit';
$strFlushPrivilegesNote = 'Not: phpMyAdmin kullan�c�lar�n imtiyazlar�n� direkt olarak MySQL\'�n imtiyaz tablolar�ndan al�r.Bu tablolar�n i�erikleri,e�er elle  de�i�iklik yap�lm��sa,sunucunun kulland��� imtiyazlardan farkl� olabilir.Bu durumda,devam etmeden �nce %simtiyazlar� yeniden y�klemeniz gerekir%s .'; 
$strFlushTable = 'Tabloyu yeniden y�kle'; 
$strFormEmpty = 'Form\'da eksik de�er !';
$strFormat = 'Bi�im';
$strFullText = 'T�m metinler';
$strFunction = 'Fonksiyon';

$strGenBy = '�retildi:';
$strGenTime = '��kt� Tarihi';
$strGeneralRelationFeat = 'Genel ili�ki �zellikleri';
$strGerman = 'Almanca'; 
$strGlobal = 'genel';
$strGlobalPrivileges = 'Genel imtiyazlar'; 
$strGlobalValue = 'Genel de�er';
$strGo = 'Git';
$strGrantOption = 'Hak';
$strGrants = 'Haklar';
$strGreek = 'Yunanca'; 
$strGzip = '"gziplenmi�"';

$strHasBeenAltered = 'd�zenlendi.';
$strHasBeenCreated = 'yarat�ld�.';
$strHaveToShow = 'G�r�nt�lemek i�in en az bir s�tun se�melisiniz';
$strHebrew = '�branice';
$strHome = 'Ana Sayfa';
$strHomepageOfficial = 'phpMyAdmin Web Sayfas�';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Y�kleme Sayfas�';
$strHost = 'Sunucu';
$strHostEmpty = 'Sunucu ismi alan� doldurulmad�!';
$strHungarian = 'Macarca'; 

$strId = 'ID';
$strIdxFulltext = 'T�m metinler';
$strIfYouWish = 'E�er bir tablo\'nun sadece baz� s�tunlar�n� y�klemek istiyorsan�z,virg�llerle ayr�lm�� bir alan listesi belirtiniz.';
$strIgnore = 'Yoksay';
$strIgnoringFile = '%s dosyas�n� yoksay�yor';
$strImportDocSQL = 'docSQL dosyalar�n� d�n��t�r ';  
$strImportFiles = 'Dosyalar� d�n��t�r';  
$strImportFinished = 'D�n��t�rme bitti'; 
$strInUse = 'kullan�mda';
$strIndex = '�ndeks';
$strIndexHasBeenDropped = '%s indeks\'i silindi.';
$strIndexName = '�ndeks ismi :';
$strIndexType = '�ndeks tipi :';
$strIndexes = '�ndeksler';
$strInnodbStat = 'InnoDB durumu';  
$strInsecureMySQL = 'Konfigurasyon dosyan�z (�ifresiz root) varsay�lan MySQL imtiyaz dosyas�yla aynen uyu�an ayarlar i�eriyor.MySQL sunucunuz bu varsay�lan ayarlarla �al���yor,d��ardan giri�e a��k,ve bu g�venlik a����n� hemen d�zeltmeniz gerekmektedir.'; 
$strInsert = 'Ekle';
$strInsertAsNewRow = 'Yeni bir sat�r olarak ekle';
$strInsertNewRow = 'Yeni sat�r ekle';
$strInsertTextfiles = 'Tablo i�ine metin dosyas� ekle';
$strInsertedRowId = 'Row id si eklendi:';
$strInsertedRows = 'Eklenen sat�rlar:';
$strInstructions = 'Talimatlar';
$strInternalNotNecessary = '* ��sel bir ili�ki InnoDb\'nin i�inde de var ise gerekli de�ildir.'; 
$strInternalRelations = '��sel ili�kiler'; 
$strInvalidName = '"%s" s�zc��� kullan�lamayan s�zc�k.Veritaban�/tablo/alan ismi olarak kullanamass�n�z, you can\'t use it as a database/table/field name.';

$strJapanese = 'Japonca'; 
$strJumpToDB = '&quot;%s&quot; veritaban�na git.'; 
$strJustDelete = 'Kullan�c�lar� imtiyaz tablolar�ndan sil .';
$strJustDeleteDescr = '&quot;silinmi�&quot; kullan�c�lar ,imtiyazlar yeniden y�klenmedik�e ,hala sunucuya normaldeki gibi eri�ilebilecek '; 

$strKeepPass = '�ifreyi de�i�tirme';
$strKeyname = 'Anahtar ismi';
$strKill = 'Kapat';
$strKorean = 'Korece'; 

$strLaTeX = 'LaTeX'; 
$strLaTeXOptions = 'LaTeX se�enekleri';
$strLandscape = 'Peyzaj';  
$strLatexCaption = 'Tablo ba�l���';
$strLatexContent = '__TABLE__ tablosunun i�eri�i';
$strLatexContinued = '(devam eden)';
$strLatexContinuedCaption = 'devam eden tablo ba�l���';
$strLatexIncludeCaption = 'Tablo ba�l���n� i�er';
$strLatexLabel = 'Etiket anahtar�';
$strLatexStructure = '__TABLE__ tablosunun yap�s�';
$strLength = 'Boyut';
$strLengthSet = 'Boyut/De�erler*';
$strLimitNumRows = 'Sayfa ba��na kay�t say�s� :';
$strLineFeed = 'Sat�r: \\n';
$strLines = 'Sat�rlar';
$strLinesTerminatedBy = 'Sat�r sonu';
$strLinkNotFound = 'Link bulunamad�';
$strLinksTo = 'Linkler->';
$strLithuanian = 'Litvanyaca'; 
$strLoadExplanation = 'En iyi y�ntem varsay�lan olarak i�aratlenmi�,fakat hata olursa de�i�tirebilirsiniz.'; 
$strLoadMethod = 'Y�KLEME y�ntemi';  
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Dosyadan y�kle';
$strLogPassword = '�ifre:';
$strLogServer = 'Sunucu'; 
$strLogUsername = 'Kullan�c� Ad�:';
$strLogin = 'Login';
$strLoginInformation = 'Login bilgisi'; 
$strLogout = '��k��';

$strMIME_MIMEtype = 'MIME-tip';
$strMIME_available_mime = 'Uygun MIME-tipleri';
$strMIME_available_transform = 'Uygun d�n���mler';
$strMIME_description = 'Tan�mlama';
$strMIME_file = 'Dosya ismi';
$strMIME_nodescription = 'Bu d�n���m i�in uygun bilgi bulunmamaktad�r.<br />L�tfen yazara %s ne yapar diye sorun';
$strMIME_transformation = 'Taray�c� d�n���m�';
$strMIME_transformation_note = 'Uygun d�n���m se�eneklerinin listesi ve onlar�n  MIME-tip d�n���mleri i�in,  %sd�n���m tan�mlamar�%s\'na t�klay�n';
$strMIME_transformation_options = 'D�n���m se�enekleri';
$strMIME_transformation_options_note = 'L�tfen d�n���m se�enekleri i�in de�erleri bu �ekili kullanarak giriniz: \'a\',\'b\',\'c\'...<br />Backslash ("\") veya tek t�rnak ("\'") kullaman�z gerekiyorsa, �u �ekilde kullan�n : \'\\\\xyz\' veya \'a\\\'b\').';
$strMIME_without = '�talik olarak yaz�lm�� MIME-tipleri ayr� bir d�n���m fonksiyonuna sahip de�ildir.';
$strMissingBracket = 'Parantez eksik';
$strModifications = 'De�i�iklikler kaydedildi';
$strModify = 'De�i�tir';
$strModifyIndexTopic = 'Indeks d�zenle';
$strMoreStatusVars = 'Di�er durum de�i�kenleri:';
$strMoveTable = 'Tabloyu (veritaban�<b>.</b>tablo) ta�� :';
$strMoveTableOK = '%s tablosu %s �zerine ta��nd�.';
$strMoveTableSameNames = 'Tabloyu ayn�s�na ta��yam�yor!';
$strMultilingual = '�oklu dil'; 
$strMustSelectFile = 'Eklemek istedi�iniz dosyay� se�meniz gerekir.';
$strMySQLCharset = 'MySQL karakter seti';
$strMySQLReloaded = 'MySQL yeniden y�klendi.';
$strMySQLSaid = 'MySQL ��kt�s�: ';
$strMySQLServerProcess = ' MySQL %pma_s1%   %pma_s2%  �zerinde  %pma_s3% olarak �al���yor';
$strMySQLShowProcess = '��lemleri g�ster';
$strMySQLShowStatus = 'MySQL �al��ma zaman� bilgisini g�ster';
$strMySQLShowVars = 'MySQL sistem de�i�kenlerini g�ster';

$strName = '�sim';
$strNext = 'Sonraki';
$strNo = 'Hay�r';
$strNoDatabases = 'Veritaban� yok';
$strNoDatabasesSelected = 'Veritaban� se�ilmedi.';
$strNoDescription = 'Tan�mlama yok';
$strNoDropDatabases = '"DROP DATABASE" c�mlesi burada kullan�lamaz.';
$strNoExplain = 'SQL a��klamas�n� yapma';
$strNoFrames = 'phpMyAdmin frame destekli bir taray�c� ile daha iyi �al��maktad�r...';
$strNoIndex = 'Indeks tan�mlanmad�!';
$strNoIndexPartsDefined = 'Indeks k�sm� tan�mlanmad�!';
$strNoModification = 'De�i�iklik yok';
$strNoOptions = 'Bu d�zenin se�e�i yok';
$strNoPassword = '�ifre yok';
$strNoPermission = 'Web sunucusu  %s dosyas�n� kaydetmek i�in izne sahip de�il.';
$strNoPhp = ' PHP kodsuz';
$strNoPrivileges = '�mtiyaz yok';
$strNoQuery = 'SQL sorgusu yok!';
$strNoRights = 'Burada bulunmak i�in yeterli haklara sahip de�ilsiniz!';
$strNoSpace = '%s dosyas�n� kaydetmek i�in yeterli alan yok.';
$strNoTablesFound = 'Veritaban�\'nda tablo bulunamad�.';
$strNoUsersFound = 'Kullan�c�(lar) bulunamad�.';
$strNoUsersSelected = 'Kullan�c� se�ilmedi.'; 
$strNoValidateSQL = 'SQL do�rulamas�n� yapma';
$strNone = 'Hi�biri';
$strNotNumber = 'L�tfen bir say� giriniz!';
$strNotOK = 'Tamam de�il';
$strNotSet = '<b>%s</b> tablosu bulunamad� veya %s i�inde tan�mlanmad�';
$strNotValidNumber = ' ge�erli bir sat�r say�s� de�il!';
$strNull = 'Bo�';
$strNumSearchResultsInTable = '<b><font color=\'blue\'>%s</font></b> ( <b>%s</b> tablosu i�inde araman�za uyan kay�t say�s� ) ';
$strNumSearchResultsTotal = 'Toplam: %s e�le�im';
$strNumTables = 'Tablolar';

$strOK = 'Tamam';
$strOftenQuotation = 'S�k kullan�lan aktarma i�aretleri.SE��ME BA�LI,sadece <b>char</b> ve <b>varchar</b> alanlar�n�n kapatma karakteri ile �evrelenece�i anlam�na gelir..';
$strOperations = '��lemler';
$strOptimizeTable = 'Tabloyu optimize et';
$strOptionalControls = '�zel karakterleri yazmak ve okumak i�in kontroller.Opsiyonel';
$strOptionally = 'Se�ime Ba�l�';
$strOptions = 'Se�enekler';
$strOr = 'veya';
$strOverhead = 'Kullan�lamayan Veri';
$strOverwriteExisting = 'Mevcut dosyalar�n �zerine yaz!';

$strPHP40203 = ' Ciddi bir multi-byte strings (mbstring) hatas�na sahip olan PHP 4.2.3 kullan�yorsunuz,. PHP hata raporu 19404\' e bak�n�z. Bu s�r�m�n phpMyAdmin\'le kullan�lmas� �nerilmez.'; 
$strPHPVersion = 'PHP S�r�m�';
$strPageNumber = 'Sayfa numaras�:';
$strPaperSize = 'Ka��t boyu';
$strPartialText = 'K�smi Metinler';
$strPassword = '�ifre';
$strPasswordChanged = '%s i�in �ifre ba�ar�yla de�i�tirildi.'; 
$strPasswordEmpty = '�ifre alan� doldurulmad�!';
$strPasswordNotSame = 'Girilen �ifreler ayn� de�il!';
$strPdfDbSchema = ' "%s" veritaban�n�n �emas� - Sayfa %s';
$strPdfInvalidPageNum = 'Tan�mlanmam�� PDF sayfa numaras�!';
$strPdfInvalidTblName = ' "%s" tablosu bulunam�yor !';
$strPdfNoTables = 'Tablo yok';
$strPerHour = 'saat ba��na'; 
$strPerMinute = 'dakika ba��na';
$strPerSecond = 'saniye ba��na';
$strPhoneBook = 'telefon defteri'; 
$strPhp = 'PHP kodu olu�tur';
$strPmaDocumentation = 'phpMyAdmin yard�m';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt>\' nin de�eri  konfigurasyon dosyas�n�n i�inde verilmelidir!';
$strPortrait = 'Portre'; 
$strPos1 = 'Ba�lang��';
$strPrevious = '�nceki';
$strPrimary = 'Birincil';
$strPrimaryKey = 'Birincil anahtar';
$strPrimaryKeyHasBeenDropped = 'Birincil anahtar silindi';
$strPrimaryKeyName = 'PRIMARY KEY TEK olmal�d�r!';
$strPrimaryKeyWarning = '# PRIMARY <b>sadece</b> birincil bir anahtar�n ismi <b>olmal�d�r!</b>';
$strPrint = 'Yazd�r'; 
$strPrintView = 'Yaz�c� g�r�nt�s�';
$strPrintViewFull = 'Yaz�c� g�r�nt�s� (t�m metin)';
$strPrivDescAllPrivileges = 'GRANT hari� t�m imtiyazlar� i�erir.'; 
$strPrivDescAlter = 'Varolan tablonun yap�s�n�n de�i�tirilmesine izin verir.';
$strPrivDescCreateDb = 'Yeni veritabanlar� ve tablolar�n olu�turulmas�na izin verir.'; 
$strPrivDescCreateTbl = 'Yeni tablolar�n olu�turulmas�na izin verir.';
$strPrivDescCreateTmpTable = 'Ge�ici tablolara olu�turulmas�na izin verir.';
$strPrivDescDelete = 'Veri silinmesine izin verir.';
$strPrivDescDropDb = 'Veritabanlar� ve tablolar�n kald�r�lmas�na izin verir.'; 
$strPrivDescDropTbl = 'Tablolar�n kald�r�lmas�na izin verir.';
$strPrivDescExecute = 'Kaydedilmi� yordamlar�n �al��t�r�lmas�na izin verir.; Bu MySQL s�r�m�nde etkisi yoktur.';
$strPrivDescFile = 'Data import ve export\'una izin verir.';
$strPrivDescGrant = '�mtiyaz tablolar�n� yeniden y�klemeden yeni kullan�c� ve imtiyaz eklenmesine izin verir.';
$strPrivDescIndex = '�ndekslerin yarat�lmas�na ve kald�r�lmas�na izin verir.'; 
$strPrivDescInsert = 'Verinin eklenmesine ve yer de�i�tirilmesine izin verir.';
$strPrivDescLockTables = 'Ge�erli i�lem  i�in tablolar�n kilitlenmesine izin verir.'; 
$strPrivDescMaxConnections = 'Kullan�c�n�n saat ba��na a�abilece�i ba�lant�y� s�n�rlar.';
$strPrivDescMaxQuestions = 'Kullan�c�n�n saat ba��na sunucuya g�nderebilece�i sorgu say�s�n� s�n�rlar.';
$strPrivDescMaxUpdates = 'Kullan�c�n�n,saat ba��na �al��t�rabilece�i,herhangi bir tablo veya veritaban� de�i�tiren  komut say�s�n� s�n�rlar.';
$strPrivDescProcess3 = 'Di�er kullan�c�lar�n i�lemlerinin kapat�lmas�na izin verir.';
$strPrivDescProcess4 = '��lem listesindeki b�t�n sorgular�n g�r�nt�lenmesine izin verir.';
$strPrivDescReferences = 'Bu MySQL s�r�m�nde etkisi yoktur.';
$strPrivDescReload = 'Sunucu ayarlar�n�n yeniden y�klenmesine ve flush\'a izin ver.(haf�za ��kt�s�)';
$strPrivDescReplClient = 'Slave ve Master\'lar�n nerede oldu�unu sorma  hakk� verir.';
$strPrivDescReplSlave = 'Kopya slave\'ler i�in zorunlu.';
$strPrivDescSelect = 'Veri okunmas�na izin ver.';
$strPrivDescShowDb = 'B�t�n veritabanlar� listesine eri�im verir.';
$strPrivDescShutdown = 'Sunucunun kapat�lmas�na izin ver.'; 
$strPrivDescSuper = 'Maksimum ba�lant� say�s� a��lsa bile ba�lanmas�na izin ver;Genel(global) de�i�kenleri setlemek veya di�er kullan�c�lar�n i�lemlerini sonland�rmak  gibi  bir �ok y�netim i�lemi i�in gereklidir.';
$strPrivDescUpdate = 'Veri de�i�tirilmesine izin ver.';
$strPrivDescUsage = '�mtiyaz yok.';
$strPrivileges = '�mtiyazlar';
$strPrivilegesReloaded = 'Ayr�cal�klar ba�ar�yla y�klendi.';
$strProcesslist = '��lem listesi'; 
$strProperties = '�zellikler';
$strPutColNames = '�lk sat�rda alan isimlerini koy'; 

$strQBE = ' Sorgula';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = 'Sorgu penceresi';
$strQueryFrameDebug = 'Debug bilgisi';
$strQueryFrameDebugBox = 'Sorgu formu i�in aktif de�i�kenler :\nDB: %s\nTablo: %s\nSunucu: %s\n\nSorgu formu i�in ge�erli de�i�kenler:\nDB: %s\nTablo: %s\nSunucu: %s\n\nA�acak konumu: %s\nFrameset konumu: %s.';
$strQueryOnDb = '<b>%s</b> veritaban�nda SQL sorgusu&nbsp;:';
$strQuerySQLHistory = 'SQL ge�mi�i';
$strQueryStatistics = '<b>Sorgu istatistikleri</b>: Ba�lang��tan bu yana sunucuya <b>%s</b> sorgu g�nderildi.';
$strQueryTime = 'Sorgu  %01.4f san s�rd�';
$strQueryType = 'Sorgu �ekli';
$strQueryWindowLock = 'Pencere d���ndan bu sorgunun �zerine yazma';

$strReType = 'Yeniden gir';
$strReceived = 'Al�nd�'; 
$strRecords = 'Kay�tlar';
$strReferentialIntegrity = 'Referans b�t�nl���n� kontrol et.';
$strRelationNotWorking = 'Ba�l� tablolarla �al��mada kullan�lan ekstra �zellikler kapat�ld�...Ni�in oldu�unu ��renmek i�in %sburaya%s t�klay�n�z...';
$strRelationView = '�li�ki g�r�n�m�';
$strRelationalSchema = '�li�ki �emas�';
$strRelations = '�li�kiler';
$strReloadFailed = 'MySQL yeniden y�klenmesi ger�ekle�tirilemedi.';
$strReloadMySQL = 'MySQL\' i yeniden y�kle';
$strReloadingThePrivileges = '�mtiyazlar� yeniden y�kl�yor'; 
$strRememberReload = 'Server\'� yeniden y�klemeyi unutmay�n�z.';
$strRemoveSelectedUsers = 'Se�ili kullan�c�lar� kald�r'; 
$strRenameTable = 'Tablonun ismini �una de�i�tir';
$strRenameTableOK = '%s tablosu %s olarak yeniden adland�r�ld�';
$strRepairTable = 'Tablo\'yu onar';
$strReplace = 'Yerde�i�tir';
$strReplaceNULLBy = 'NULL \' u bununla yerde�i�tir';
$strReplaceTable = 'Tablo verisini bir dosyadaki ile de�i�tir';
$strReset = 'S�f�rla';
$strResourceLimits = 'Kaynak s�n�rlar�';
$strRevoke = 'Ge�ersiz k�l';
$strRevokeAndDelete = 'Kullan�c�lardaki t�m etkin imtiyazlar� ge�ersiz k�l  ve sonra sil..'; 
$strRevokeAndDeleteDescr = 'Kullan�c�lar yeniden y�klenene kadar  hala KULLANIM ayr�cal���na  sahip olacaklar.'; 
$strRevokeGrant = 'Hak ge�ersiz k�l';
$strRevokeGrantMessage = '%s i�in Grant �nceli�ini kald�rd�n�z';
$strRevokeMessage = '%s\'in �nceliklerini kald�rd�n�z';
$strRevokePriv = '�mtiyazlar� ge�ersiz k�l';
$strRowLength = 'Sat�r boyu';
$strRowSize = ' Sat�r boyutu ';
$strRows = 'Sat�r';
$strRowsFrom = 'kay�t : Ba�layaca�� kay�t :';
$strRowsModeFlippedHorizontal = 'yatay (d�nd�r�lm�� ba�l�klar)';
$strRowsModeHorizontal = 'yatay';
$strRowsModeOptions = '%s olarak g�ster ve %s h�cre sonra ba�l��� tekrarla.';
$strRowsModeVertical = 'dikey';
$strRowsStatistic = 'Sat�r istatisti�i';
$strRunQuery = 'Sorguyu �al��t�r';
$strRunSQLQuery = '<b>%s</b> veritaban� �zerinde sorgu �al��t�r';
$strRunning = '# %s �zerinde �al���yor...';
$strRussian = 'Rus�a';

$strSQL = 'SQL sorgusu';
$strSQLOptions = 'SQL se�enekleri';
$strSQLParserBugMessage = 'SQL yorumlay�c�s�nda bir hata bulma ihtimaliniz var.L�tfen sorgunuzu dikkatli bir �ekilde g�zden ge�iriniz,ve t�rnaklar do�ru ve yanl�� yaz�lmam�� kontrol ediniz.Di�er olas� hata nedenleri metin alan�na alabilece�i boyuttan daha b�y�k bir dosya y�kl�yor olma ihtimalinizdir.Sorgunuzu MySQL komut sat�r� aray�z�nde de deneyebilirsiniz..MySQL sunucu hata ��kt�s�,var ise,hatay� man�zda size yard�mc� olabilir.Hala sorunlar�n�z varsa veya  komut sat�r� aray�z� �al���rken,yorumlay�c� hata veriyorsa,l�tfen SQL sorgu giri�inizi hata yaratan tek bir sorguya indirgeyin,ve a�a��daki CUT b�l�m� veri y���n� ile birlikte hata raporunu bildiriniz:'; 
$strSQLParserUserError = 'SQL sorgunuzda bir hata varm�� gibi g�z�k�yor.MySQL sunucu hata ��kt�s�,var ise,hatay� bulman�zda size yard�mc� olabilir.';
$strSQLQuery = 'SQL sorgusu';
$strSQLResult = 'SQL sonucu';
$strSQPBugInvalidIdentifer = 'Ge�ersiz tan�mlay�c�'; 
$strSQPBugUnclosedQuote = 'Kapat�lmam�� t�rnak';
$strSQPBugUnknownPunctuation = 'Bilinmeyen noktalama i�areti';  
$strSave = 'Kaydet';
$strSaveOnServer = 'Sunucuda %s dizininin i�inde kaydet';
$strScaleFactorSmall = '�arpan fakt�r� sayfadaki �ema i�in �ok k���k';
$strSearch = 'Ara';
$strSearchFormTitle = 'Veritaban�nda ara';
$strSearchInTables = 'Tablo i�inde ara :';
$strSearchNeedle = 'Aranacak kelime veya de�erler ( joker: "%" ):';
$strSearchOption1 = 'kelimelerin en az�ndan biri';
$strSearchOption2 = 'b�t�n kelimeler';
$strSearchOption3 = 'tam e�le�im';
$strSearchOption4 = 'normal deyim gibi';
$strSearchResultsFor = ' "%s" %s i�in arama sonu�lar�:';
$strSearchType = '<b>BUL </b> :';
$strSecretRequired = 'Ayar dosyas� i�in gizli bir �ifre gerekiyor (blowfish_secret).';
$strSelect = 'Se�';
$strSelectADb = ' L�tfen bir veritaban� se�iniz';
$strSelectAll = 'T�m�n� se�';
$strSelectFields = 'Alan se� (en az bir)';
$strSelectNumRows = 'sorgu i�erisinde';
$strSelectTables = 'Tablolar� se�';
$strSend = 'Dosya olarak kaydet';
$strSent = 'G�nderildi';
$strServer = '%s sunucusu';
$strServerChoice = 'Server se�imi';
$strServerStatus = '�al��ma bilgisi'; 
$strServerStatusUptime = 'Bu MySQL sunucusunun �al��ma s�resi : %s <br> Ba�lama Zaman�: %s ';
$strServerTabProcesslist = '��lemler'; 
$strServerTabVariables = 'De�i�kenler';
$strServerTrafficNotes = '<b>Sunucu Yo�unlu�u</b>: Bu tablolar ba�lama zaman�ndan bu yana  MySQL sunucusunun network yo�unlu�unu g�sterir.';
$strServerVars = 'Sunucu de�i�kenleri ve ayarlar�'; 
$strServerVersion = 'Server s�r�m�';
$strSessionValue = 'Oturum de�eri';
$strSetEnumVal = 'E�er alan tipi "enum" veya  "set" ise , l�tfen verileri �u formata g�re giriniz: \'a\',\'b\',\'c\'...<br>E�er bu de�erler aras�na backslash ("\") veya tek t�rnak koyman�z gerekirse ("\'"),bunun i�in backslash kullan�n (mesela \'\\\\xyz\' veya \'a\\\'b\').';
$strShow = 'G�ster';
$strShowAll = 'T�m�n� g�ster';
$strShowColor = 'Rengi g�ster';
$strShowCols = 'B�t�n s�tunlar� g�ster';
$strShowDatadictAs = 'Veri s�zl��� format�';
$strShowFullQueries = 'Sorgular�n t�m�n� g�ster'; 
$strShowGrid = 'Izgaray� g�ster';
$strShowPHPInfo = 'PHP bilgisini g�ster';
$strShowTableDimension = 'Tablolar�n';
$strShowTables = 'Tablolar� g�ster';
$strShowThisQuery = 'Sorguyu burada yine g�ster.';
$strShowingRecords = 'Kay�tlar� g�steriyor...';
$strSimplifiedChinese = 'Basitle�tirilmi� �ince';
$strSingly = '( birer birer )';
$strSize = 'Boyut';
$strSort = 'S�rala';
$strSortByKey = 'Anahtara g�re s�rala';
$strSpaceUsage = 'Kullan�lan alan';
$strSplitWordsWithSpace = 'Kelimeler bir bo�luk karakteriyle b�l�nm��t�r (" ").';
$strStatCheckTime = 'Son kontrol';
$strStatCreateTime = 'Olu�turulma';
$strStatUpdateTime = 'Son g�ncellenme';
$strStatement = 'Durum';
$strStatus = 'Durum'; 
$strStrucCSV = 'CSV verisi';
$strStrucData = 'Yap� ve Veri';
$strStrucDrop = '<b>DROP TABLE</b> ekle';
$strStrucExcelCSV = 'MS Excel verisi i�in CSV';
$strStrucOnly = 'Sadece yap�';
$strStructPropose = 'Tablo yap�s�n� analiz et.';
$strStructure = 'Yap�';
$strSubmit = 'Onayla';
$strSuccess = 'SQL sorgunuz ba�ar�yla �al��t�r�lm��t�r';
$strSum = 'toplam';
$strSwedish = '�sve�ce'; 
$strSwitchToTable = 'Kopyalanm�� tabloya ge�';

$strTable = 'Tablo:';
$strTableComments = 'Tablo yorumlar�';
$strTableEmpty = 'Tablo ismi bo�!';
$strTableHasBeenDropped = '%s tablosu kald�r�lm��t�r';
$strTableHasBeenEmptied = '%s tablosu bo�alt�lm��t�r';
$strTableHasBeenFlushed = '%s tablosu ba�ar�yla kapat�lm��t�r.';
$strTableMaintenance = 'Tablo bak�m�';
$strTableOfContents = '��erik tablosu';
$strTableOptions = 'Tablo ayarlar�';
$strTableStructure = 'Tablo yap�s� :';
$strTableType = 'Tablo tipi';
$strTables = '%s tablo';
$strTblPrivileges = 'Tabloya �zg� imtiyazlar';
$strTextAreaLength = 'Boyutu nedeniyle,<br /> bu alan d�zenlenmeyebilir ';
$strThai = 'Thai';
$strTheContent = 'Dosyan�z�n i�eri�i eklendi.';
$strTheContents = 'Dosyan�n i�eri�i tablonun i�eri�ini ayn� birincil veya unique anahtar de�erli s�tunlar i�in yer de�i�tirir..';
$strTheTerminator = 'Alan bitimini belirten i�aret.';
$strThisHost = 'Bu host ';
$strThisNotDirectory = 'Bu bir dizin de�ildi';
$strThreadSuccessfullyKilled = '%s i�lemi  ba�ar�yla sonland�r�ld�.';
$strTime = 'Zaman';
$strToggleScratchboard = 'scratchboard\a ge�';
$strTotal = 'toplam';
$strTotalUC = 'Toplam';
$strTraditionalChinese = 'Geleneksel �ince'; 
$strTraffic = 'Yo�unluk';
$strTransformation_image_jpeg__inline = 'T�klanabilir bir thumbnail g�sterir; se�enekler: pixel olarak geni�lik,y�kseklik (orijinal oran korunur)';
$strTransformation_image_jpeg__link = 'Bu resime direkt bir link g�sterir (direct blob y�klemesi...).';
$strTransformation_image_png__inline = 'jpeg resmini g�r: sat�ri�i';  
$strTransformation_text_plain__dateformat = 'Bir TIME, TIMESTAMP veya DATETIME alan� al�r ve varsay�lan tarih format� bilgilerinizle onu yeniden bi�imlendirir.�lk se�enek  zamang�sterimi(timestamp)\'ne eklenecek bir offset(saat olarak)\'tir.(Varsay�lan: 0).�kinci se�enek PHP\'nin strftime() fonksiyonu i�in uygun olan parametrelere g�re farkl� bir  zamang�sterimi(timestamp)\'dir.';
$strTransformation_text_plain__external = 'D�� bir uygulama �al��t�r�r ve alanverisini standart giri� yoluyla besler.Uygulaman�n standart ��kt�s� d�ner.Varsay�lan ho� bir HTML ��kt�s� veren Tidy(D�zenli)\'dir..G�venlik nedeniyle libraries/transformations/text_plain__external.inc.php dosyas�n� elle d�zenlemeniz ve �al��mas�na izin verece�iniz ara�lar� eklemeniz gerekir.�lk se�enek;�al��t�rmak istedi�iniz program say�s�,ikinci se�enek ise program i�in gerekli olan parametrelerdir.���nc� parametre ,e�er 1\'e setlenmi�se htmlspecialchars() fonksiyonunu kullanarak ��kt�y� d�n��t�recektir(Varsay�lan: 1).D�rd�nc� bir parametre ise ,e�er 1\'e setlenmi�se NOWRAP(kayd�rma yok) kodu t�m h�creye eklenecek ve b�t�n ��kt� yeniden d�zenlenmeden g�r�necektir.(Varsay�lan :1)';
$strTransformation_text_plain__formatted = 'Alan�n orijinal bi�imlendirmesini korur.Escaping(ka���) yap�lmaz..';
$strTransformation_text_plain__imagelink = 'Bir resim ve bir link g�sterir,alan dosya ismini i�erir;ilk se�enek "http://domain.com/" gibi bir yaz�m,ikinci se�enek pixel olarak geni�lik,���nc�s� ise y�ksekliktir.';
$strTransformation_text_plain__link = 'Bir link ve dosya ismini i�eren alan� g�sterir;ilk se�enek "http://domain.com/" gibi bir g�sterim,ikincisi ise link i�in bir ba�l�kt�r.';
$strTransformation_text_plain__substr = 'Sadece yaz�n�n bir k�sm�n� g�sterir. �lk se�enek metin ��kt�n�z�n nerede oldu�unu tan�mlamak i�in kullan�lacak bir offset\'tir. (varsay�lan: 0).�kinci se�enek ne kadar metinin geri d�nd�r�ld���n� belirten bir offset\'tir.. E�er bo�sa, b�t�n kalan metin geri d�nd�r�l�r.���nc� se�enek bir substring d�nd�r�ld���nde hangi karakterlerin ��kt�n�n sonuna eklenece�ini tan�mlar(Varsay�lan:...) .';
$strTransformation_text_plain__unformatted = 'HTML kodunu bir b�t�n olarak g�ster.HTML bi�imlendirme g�steriliyor.';
$strTruncateQueries = 'G�r�len sorgular� k�salt';
$strTurkish = 'T�rk�e'; 
$strType = 'Tip';

$strUkrainian = 'Ukraynaca'; 
$strUncheckAll = 'Hi�birisini Se�me';
$strUnicode = 'Unicode';
$strUnique = 'Unique';
$strUnknown = 'bilinmeyen'; 
$strUnselectAll = 'Hi�birisini se�me';
$strUpdComTab = 'S�tun_Yorumlar� tablosunun nas�l g�ncellendi�ini ��renmek istiyorsan�z D�k�manlara bak�n�z.';
$strUpdatePrivMessage = '%s i�in olan imtiyazlar� g�ncellediniz.';
$strUpdateProfile = 'Profil g�ncelle:';
$strUpdateProfileMessage = 'Profil g�ncellendi.';
$strUpdateQuery = 'Sorguyu g�ncelle';
$strUpgradeMySQL = 'MySQL %s veya daha sonraki bir s�r�me y�kseltme yapman�z gereklidir.';
$strUsage = 'Kullan�m';
$strUseBackquotes = 'Tablo ve alan isimleri i�in ters t�rnak " ` " i�aretini kullan';
$strUseHostTable = 'Host tablosunu kullan';
$strUseTables = 'Tablolar� kullan';
$strUseTextField = 'Metin alan�n� kullan';
$strUseThisValue = 'Bu de�eri kullan';
$strUser = 'Kullan�c�';
$strUserAlreadyExists = '%s kullan�c�s� zaten mevcut!';
$strUserEmpty = 'Kullan�c� ismi alan� doldurulmad�!';
$strUserName = 'Kullan�c� ismi';
$strUserNotFound = 'Se�ili kullan�c� imtiyaz tablosunda bulunamad�.';
$strUserOverview = 'Kullan�c� g�zlem';
$strUsers = 'Kullan�c�lar';
$strUsersDeleted = 'Se�ili kullan�c�lar ba�ar�yla silindi.';
$strUsersHavingAccessToDb = '&quot;%s&quot; veritaban�na eri�imi olan kullan�c�lar';

$strValidateSQL = 'SQL\'i do�rula';
$strValidatorError = 'SQL onaylay�c�s� ba�lat�lamad�.%sd�k�manlar%s\'da belirtildi�i gibi,gerekli php uzant�lar�n�n y�klenip y�klenilmedi�ini kontrol ediniz.';
$strValue = 'De�er';
$strVar = 'De�i�ken';
$strViewDump = 'Tablo d�k�m �emas�';
$strViewDumpDB = 'Veritaban� d�k�m �emas�';
$strViewDumpDatabases = 'Veritabanlar� d�k�m �emas�';

$strWebServerUploadDirectory = 'web-sunucu y�kleme dizini';
$strWebServerUploadDirectoryError = 'Y�kleme  i�i i�in belirtti�iniz dizine ula��lam�yor.';
$strWelcome = '%s \'e HO�GELD�N�Z....';
$strWestEuropean = 'Bat� Avrupa';
$strWildcard = 'joker'; 
$strWindowNotFound = 'Hedefteki taray� penceresi g�ncellenemiyor...Ba�lant�s� olan pencereyi kapatt�n�z veya taray�c�n�z�n g�venlik ayarlar� buna izin vermiyor';
$strWithChecked = 'Se�ilileri:';
$strWritingCommentNotPossible = 'Yorum yaz�lmaz� m�mk�n de�il.'; 
$strWritingRelationNotPossible = '�li�kinin yaz�lmas� m�mk�n de�il.';
$strWrongUser = 'Hatal� kullan�c�/parola. Eri�im engellendi.';

$strXML = 'XML';

$strYes = 'Evet';

$strZeroRemovesTheLimit = 'Not: Bu se�eneklerin 0\'a ayarlanmas� s�n�r� kald�r�r..';
$strZip = '"ziplenmi�"';

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
?>
