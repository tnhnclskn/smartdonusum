# SmartDonusum API Client

SmartDonusum E-Fatura, E-Arşiv Fatura ve E-Defter entegrasyon servisleri için geliştirilmiş modern PHP SOAP API istemcisi.

## Özellikler

- ✅ Type-safe SOAP client implementasyonu
- 🔒 Immutable veri tipleri
- 📝 Tam PHPDoc desteği
- 🎯 PSR-4 autoloading standardı
- 🛠 Phpro/soap-client altyapısı
- 🔄 Event-driven mimari desteği
- 📄 E-Fatura ve E-Arşiv Fatura desteği
- 🔐 HTTP Basic Authentication
- ⚡ WSDL tabanlı otomatik kod üretimi

## Gereksinimler

- PHP 8.1 veya üzeri
- Composer
- SOAP extension

## Kurulum

```bash
composer require tnhnclskn/smartdonusum
```

## Servis Bilgileri

SmartDonusum platformu farklı işlemler için ayrı servisler sunar:

### E-Fatura Servisleri

#### InvoiceWS
- **Endpoint**: `https://servis.smartdonusum.com/InvoiceService/InvoiceWS`
- **WSDL**: `https://servis.smartdonusum.com/InvoiceService/InvoiceWS?wsdl`
- **Kullanım**: Fatura ve uygulama yanıtlarının gönderilmesi

#### QueryDocumentWS
- **Endpoint**: `https://servis.smartdonusum.com/QueryInvoiceService/QueryDocumentWS`
- **WSDL**: `https://servis.smartdonusum.com/QueryInvoiceService/QueryDocumentWS?wsdl`
- **Kullanım**: Fatura ve uygulama yanıtlarının sorgulanması

#### LoadInvoiceWS
- **Endpoint**: `https://servis.smartdonusum.com/InvoiceLoadingService/LoadInvoiceWS`
- **WSDL**: `https://servis.smartdonusum.com/InvoiceLoadingService/LoadInvoiceWS?wsdl`
- **Kullanım**: İmzalı faturaların saklanması

### E-Arşiv Fatura Servisleri

#### EArchiveInvoiceWS
- **Endpoint**: `https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS`
- **WSDL**: `https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS?wsdl`
- **Kullanım**: E-Arşiv fatura işlemleri

#### EAReportWS
- **Endpoint**: `https://servis.smartdonusum.com/EArchiveReportService/EAReportWS`
- **WSDL**: `https://servis.smartdonusum.com/EArchiveReportService/EAReportWS?wsdl`
- **Kullanım**: E-Arşiv rapor işlemleri

#### LoadInvoiceWS (E-Arşiv)
- **Endpoint**: `https://servis.smartdonusum.com/EAInvoiceLoadingService/LoadInvoiceWS`
- **WSDL**: `https://servis.smartdonusum.com/EAInvoiceLoadingService/LoadInvoiceWS?wsdl`
- **Kullanım**: E-Arşiv fatura yükleme

## Hızlı Başlangıç

### Temel Kullanım

```php
<?php

require 'vendor/autoload.php';

use SmartDonusum\SmartDonusumClientFactory;
use SmartDonusum\Type\SendInvoice;
use SmartDonusum\Type\InputDocument;

// Client'ı oluştur
$wsdl = 'https://servis.smartdonusum.com/InvoiceService/InvoiceWS?wsdl';
$client = SmartDonusumClientFactory::factory($wsdl);

// Fatura gönder
$inputDocument = new InputDocument(
    documentUUID: 'UUID-BURAYA-GELECEK',
    xmlContent: base64_encode($xmlContent),
    sourceUrn: 'urn:mail:gonderici@firma.com',
    destinationUrn: 'urn:mail:alici@firma.com'
);

$request = new SendInvoice([$inputDocument]);
$response = $client->sendInvoice($request);

// Sonucu kontrol et
foreach ($response as $entResponse) {
    if ($entResponse->getCode() === '0') {
        echo "Başarılı: " . $entResponse->getDocumentUUID();
    } else {
        echo "Hata: " . $entResponse->getExplanation();
        echo "Sebep: " . $entResponse->getCause();
    }
}
```

### HTTP Authentication Ekleme

SmartDonusum servisleri HTTP Basic Authentication gerektirir. Symfony HTTP Client ile authentication eklemek için:

```php
use Symfony\Component\HttpClient\HttpClient;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

// HTTP Client with authentication
$httpClient = HttpClient::create([
    'auth_basic' => ['kullanici_adi', 'sifre'],
    'headers' => [
        'Username' => 'kullanici_adi',
        'Password' => 'sifre',
    ],
]);

// Custom engine oluştur
$engine = DefaultEngineFactory::create(
    ExtSoapOptions::defaults($wsdl, [
        'stream_context' => stream_context_create([
            'http' => [
                'header' => "Username: kullanici_adi\r\n" .
                           "Password: sifre\r\n"
            ]
        ])
    ])->withClassMap(SmartDonusumClassmap::getCollection())
);

$caller = new EventDispatchingCaller(new EngineCaller($engine), new EventDispatcher());
$client = new SmartDonusumClient($caller);
```

## Kullanım Örnekleri

### E-Fatura İşlemleri

#### Fatura Gönderme (sendInvoice)

UBL XML formatında oluşturulan faturaların entegratöre gönderilmesi:

```php
use SmartDonusum\Type\SendInvoice;
use SmartDonusum\Type\InputDocument;

$documents = [];

// Birden fazla fatura gönderilebilir
$documents[] = new InputDocument(
    documentUUID: 'e8a5d8f0-1234-5678-90ab-cdef12345678',
    xmlContent: base64_encode($ubl_xml_content),
    sourceUrn: 'urn:mail:gonderici@firma.com.tr',
    destinationUrn: 'urn:mail:alici@firma.com.tr',
    localId: 'LOCAL-ID-001', // Opsiyonel: Kendi sisteminizdeki ID
    documentDate: '2024-01-15', // Opsiyonel: yyyy-MM-dd
    documentId: 'FTR2024000001' // Opsiyonel: Fatura numarası
);

$request = new SendInvoice($documents);
$responseList = $client->sendInvoice($request);

// Her fatura için sonuç kontrolü
foreach ($responseList as $response) {
    echo "UUID: " . $response->getDocumentUUID() . "\n";
    echo "Kod: " . $response->getCode() . "\n";
    echo "Açıklama: " . $response->getExplanation() . "\n";
    
    if ($response->getCode() !== '0') {
        echo "Hata Sebebi: " . $response->getCause() . "\n";
    }
}
```

#### Fatura Güncelleme (updateInvoice)

Hatalı durumda olan faturaların güncellenmesi:

```php
use SmartDonusum\Type\UpdateInvoice;
use SmartDonusum\Type\InputDocument;

$inputDocument = new InputDocument(
    documentUUID: 'e8a5d8f0-1234-5678-90ab-cdef12345678', // Güncellenecek faturanın UUID'si
    xmlContent: base64_encode($duzeltilmis_xml),
    sourceUrn: 'urn:mail:gonderici@firma.com.tr',
    destinationUrn: 'urn:mail:alici@firma.com.tr'
);

$request = new UpdateInvoice([$inputDocument]);
$response = $client->updateInvoice($request);
```

**Not**: Bu metot sadece hatalı durumdaki faturaları güncelleyebilir. Fatura UUID'si sistemde bulunmalı ve durumu "hatalı" olmalıdır.

#### Fatura İptali (cancelInvoice)

```php
use SmartDonusum\Type\CancelInvoice;

$request = new CancelInvoice(
    invoiceUUID: 'e8a5d8f0-1234-5678-90ab-cdef12345678'
);

$response = $client->cancelInvoice($request);

if ($response->getCode() === '0') {
    echo "Fatura iptal işlemi başlatıldı";
} else {
    echo "Hata: " . $response->getExplanation();
}
```

**Not**: Bu metot faturayı entegratör sisteminde "işlenme durduruluyor" durumuna getirir.

#### Fatura Durumu ve Logları Sorgulama (getOutboxInvoiceStatusWithLogs)

```php
use SmartDonusum\Type\GetOutboxInvoiceStatusWithLogs;

$request = new GetOutboxInvoiceStatusWithLogs(
    documentUuid: 'e8a5d8f0-1234-5678-90ab-cdef12345678'
);

$logResponse = $client->getOutboxInvoiceStatusWithLogs($request);

echo "Sorgu Durumu: " . $logResponse->getQueryState() . "\n";
echo "Açıklama: " . $logResponse->getStateExplanation() . "\n";
echo "Log Sayısı: " . $logResponse->getLogCount() . "\n";

foreach ($logResponse->getInvoiceLogs() as $log) {
    echo "İşlem Zamanı: " . $log->getProcessTime() . "\n";
    echo "İşlem Durumu: " . $log->getProcessState() . "\n";
    echo "İşlem Sonucu: " . $log->getProcessResult() . "\n";
    echo "Açıklama: " . $log->getResultExplanation() . "\n";
    echo "---\n";
}
```

### Fatura Sorgulama İşlemleri

#### Giden Fatura Sorgulama (queryOutboxDocument)

```php
use SmartDonusum\Type\QueryOutboxDocument;

// UUID ile sorgulama
$request = new QueryOutboxDocument(
    paramType: 'Document_UUID',
    parameter: 'e8a5d8f0-1234-5678-90ab-cdef12345678',
    withXML: 'XML' // XML, PDF, HTML, NONE
);

$response = $client->queryOutboxDocument($request);

echo "Sorgu Durumu: " . $response->getQueryState() . "\n";
echo "Döküman Sayısı: " . $response->getDocumentCount() . "\n";

foreach ($response->getDocuments() as $document) {
    echo "Fatura No: " . $document->getDocumentId() . "\n";
    echo "Durum: " . $document->getStateExplanation() . "\n";
    echo "Toplam Tutar: " . $document->getInvoiceTotal() . " " . $document->getCurrencyCode() . "\n";
}
```

**paramType değerleri**: 
- `Document_UUID`: Fatura UUID'si ile
- `Document_ID`: Fatura numarası ile  
- `Envelope_UUID`: Zarf UUID'si ile

**withXML değerleri**:
- `XML`: XML içeriği döndürür
- `PDF`: PDF içeriği döndürür
- `HTML`: HTML içeriği döndürür
- `NONE`: İçerik döndürmez (performans için önerilir)

**Not**: `NONE` dışındaki değerlerde dönen belge sayısı performans için 20 ile sınırlıdır.

#### Tarih Aralığında Giden Fatura Sorgulama

```php
use SmartDonusum\Type\QueryOutboxDocumentWithDocumentDate;

$request = new QueryOutboxDocumentWithDocumentDate(
    startDate: '2024-01-01',
    endDate: '2024-01-31',
    documentType: '1', // 1: Fatura, 2: Uygulama Yanıtı
    queried: 'ALL', // YES, NO, ALL
    withXML: 'NONE',
    minRecordId: '0'
);

$response = $client->queryOutboxDocumentWithDocumentDate($request);
```

#### Gelen Fatura Sorgulama (queryInboxDocument)

```php
use SmartDonusum\Type\QueryInboxDocument;

$request = new QueryInboxDocument(
    paramType: 'Document_UUID',
    parameter: 'e8a5d8f0-1234-5678-90ab-cdef12345678',
    withXML: 'XML'
);

$response = $client->queryInboxDocument($request);

foreach ($response->getDocuments() as $document) {
    echo "Gönderen: " . $document->getSourceTitle() . "\n";
    echo "Gönderen VKN: " . $document->getSourceId() . "\n";
    echo "Fatura Tarihi: " . $document->getDocumentIssueDate() . "\n";
    echo "Toplam: " . $document->getInvoiceTotal() . "\n";
}
```

#### Local ID ile Sorgulama

```php
use SmartDonusum\Type\QueryOutboxDocumentWithLocalId;

$request = new QueryOutboxDocumentWithLocalId(
    localId: 'LOCAL-ID-001'
);

$response = $client->queryOutboxDocumentWithLocalId($request);
```

#### UUID Listesi ile Sorgulama

```php
use SmartDonusum\Type\QueryOutboxDocumentsWithGUIDList;

$uuidList = [
    'e8a5d8f0-1234-5678-90ab-cdef12345678',
    'f9b6e9g1-2345-6789-01bc-defg23456789',
];

$request = new QueryOutboxDocumentsWithGUIDList(
    guidList: $uuidList,
    documentType: '1' // 1: Fatura, 2: Uygulama Yanıtı
);

$response = $client->queryOutboxDocumentsWithGUIDList($request);
```

#### Arşivlenmiş Fatura Sorgulama (Önceki Yıllar)

```php
use SmartDonusum\Type\QueryArchivedOutboxDocument;

$request = new QueryArchivedOutboxDocument(
    paramType: 'Document_UUID',
    parameter: 'e8a5d8f0-1234-5678-90ab-cdef12345678',
    withXML: 'XML',
    fiscalYear: 2023 // Sorgulanacak yıl
);

$response = $client->queryArchivedOutboxDocument($request);
```

### Uygulama Yanıtı İşlemleri

#### Uygulama Yanıtı Gönderme (sendApplicationResponse)

UBL XML formatındaki uygulama yanıtlarının (KABUL, RED, İADE) entegratöre gönderilmesi:

```php
use SmartDonusum\Type\SendApplicationResponse;
use SmartDonusum\Type\InputDocument;

$appResponse = new InputDocument(
    documentUUID: 'yanit-uuid-buraya',
    xmlContent: base64_encode($uygulama_yaniti_xml),
    sourceUrn: 'urn:mail:gonderici@firma.com.tr',
    destinationUrn: 'urn:mail:alici@firma.com.tr'
);

$request = new SendApplicationResponse([$appResponse]);
$response = $client->sendApplicationResponse($request);
```

#### Faturaya Ait Uygulama Yanıtlarını Sorgulama

Gönderilen faturaya ait gelen uygulama yanıtlarını sorgulama:

```php
use SmartDonusum\Type\QueryAppResponseOfOutboxDocument;

$request = new QueryAppResponseOfOutboxDocument(
    documentUUID: 'fatura-uuid',
    withXML: 'XML'
);

$response = $client->queryAppResponseOfOutboxDocument($request);

foreach ($response->getDocuments() as $appResponse) {
    echo "Yanıt Tipi: " . $appResponse->getResponseCode() . "\n"; // KABUL, RED
    echo "Yanıt Tarihi: " . $appResponse->getResponseReceivedDate() . "\n";
}
```

Gelen faturaya ait gönderilen uygulama yanıtlarını sorgulama:

```php
use SmartDonusum\Type\QueryAppResponseOfInboxDocument;

$request = new QueryAppResponseOfInboxDocument(
    documentUUID: 'fatura-uuid',
    withXML: 'NONE'
);

$response = $client->queryAppResponseOfInboxDocument($request);
```

### XML Kontrol İşlemleri

#### Fatura XML Kontrolü (controlInvoiceXML)

Fatura XML'ini şema ve şematron kontrollerinden geçirme:

```php
use SmartDonusum\Type\ControlInvoiceXML;

$request = new ControlInvoiceXML(
    invoiceXML: $ubl_xml_content // Base64 encode'a gerek yok
);

$response = $client->controlInvoiceXML($request);

if ($response->getCode() === '0') {
    echo "XML geçerli!";
} else {
    echo "Hata: " . $response->getExplanation() . "\n";
    echo "Sebep: " . $response->getCause();
}
```

#### Uygulama Yanıtı XML Kontrolü (controlApplicationResponseXML)

```php
use SmartDonusum\Type\ControlApplicationResponseXML;

$request = new ControlApplicationResponseXML(
    applicationResponseXML: $uygulama_yaniti_xml
);

$response = $client->controlApplicationResponseXML($request);
```

### Kullanıcı ve Müşteri İşlemleri

#### E-Fatura Kullanıcı Sorgulama (queryUsers)

GİB'e kayıtlı e-fatura kullanıcılarını sorgulama:

```php
use SmartDonusum\Type\QueryUsers;

$request = new QueryUsers(
    startDate: '2024-01-01', // Opsiyonel
    finishDate: '2024-12-31', // Opsiyonel
    vkn_tckn: '1234567890' // Opsiyonel
);

$response = $client->queryUsers($request);

foreach ($response->getUsers() as $user) {
    echo "VKN/TCKN: " . $user->getVknTckn() . "\n";
    echo "Unvan: " . $user->getUnvanAd() . "\n";
    echo "Etiket: " . $user->getEtiket() . "\n";
    echo "İlk Kayıt: " . $user->getIlkKayitZamani() . "\n";
}
```

#### Gönderici Birim Etiketleri (getCustomerGBList)

```php
use SmartDonusum\Type\GetCustomerGBList;

$request = new GetCustomerGBList();
$response = $client->getCustomerGBList($request);

foreach ($response->getLabels() as $label) {
    echo "GB Etiketi: " . $label . "\n";
}
```

#### Posta Kutusu Etiketleri (getCustomerPKList)

```php
use SmartDonusum\Type\GetCustomerPKList;

$request = new GetCustomerPKList();
$response = $client->getCustomerPKList($request);
```

#### Kredi Bilgileri Sorgulama

```php
use SmartDonusum\Type\GetCustomerCreditCount;

$request = new GetCustomerCreditCount(
    vkn_tckn: '1234567890'
);

$creditInfo = $client->getCustomerCreditCount($request);

if ($creditInfo->getCode() === '0') {
    echo "Toplam Kredi: " . $creditInfo->getTotalCredit() . "\n";
    echo "Kalan Kredi: " . $creditInfo->getRemainCredit() . "\n";
}
```

```php
use SmartDonusum\Type\GetCustomerCreditSpace;

$request = new GetCustomerCreditSpace(
    vkn_tckn: '1234567890'
);

$creditInfo = $client->getCustomerCreditSpace($request);

if ($creditInfo->getCode() === '0') {
    echo "Toplam Alan: " . $creditInfo->getTotalCredit() . " MB\n";
    echo "Kalan Alan: " . $creditInfo->getRemainCredit() . " MB\n";
}
```

#### Kredi Hareketleri (getCreditActionsforCustomer)

```php
use SmartDonusum\Type\GetCreditActionsforCustomer;

$request = new GetCreditActionsforCustomer(
    vkn_tckn: '1234567890'
);

$response = $client->getCreditActionsforCustomer($request);

foreach ($response->getCreditActions() as $action) {
    echo "Tarih: " . $action->getPurchaseDate() . "\n";
    echo "Miktar: " . $action->getPurchaseCount() . "\n";
    echo "İşlem Tipi: " . $action->getActionType() . "\n";
    // BASLAMA, SATINALMA, DEVIR_GIRIS, HEDIYE, DEVIR_CIKIS, TRANSFER
}
```

### Belge İşaretleme

#### Belge Bayrağı Ayarlama (setDocumentFlag)

```php
use SmartDonusum\Type\SetDocumentFlag;
use SmartDonusum\Type\FlagSetter;

$flagSetter = new FlagSetter(
    document_direction: 'GIDEN', // GIDEN veya GELEN
    flag_name: 'OKUNDU', // ARSIVLENDI, OKUNDU, MUHASEBELESTIRILDI, AKTARILDI, YAZDIRILDI
    flag_value: '1', // 0 veya 1
    document_uuid: 'e8a5d8f0-1234-5678-90ab-cdef12345678'
);

$request = new SetDocumentFlag($flagSetter);
$response = $client->setDocumentFlag($request);
```

#### Lokale Kaydedildi İşaretleme (setTakenFromEntegrator)

Gelen belgelerin lokale kaydedildiğini işaretleme:

```php
use SmartDonusum\Type\SetTakenFromEntegrator;

$uuidList = [
    'uuid-1',
    'uuid-2',
    'uuid-3',
];

$request = new SetTakenFromEntegrator($uuidList);
$response = $client->setTakenFromEntegrator($request);
```

### E-Arşiv Fatura İşlemleri

E-Arşiv fatura servisleri için ayrı bir WSDL kullanılmalıdır:

```php
$wsdl = 'https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS?wsdl';
$client = SmartDonusumClientFactory::factory($wsdl);
```

#### E-Arşiv Fatura Gönderme

```php
use SmartDonusum\Type\SendInvoice;
use SmartDonusum\Type\InputDocument;

$inputDocument = new InputDocument(
    documentUUID: 'ea-uuid-buraya',
    xmlContent: base64_encode($earchive_xml),
    sourceUrn: 'urn:mail:gonderici@firma.com.tr',
    destinationUrn: 'musteri@email.com', // E-posta adresi
    documentId: 'EAR2024000001',
    documentDate: '2024-01-15'
);

$request = new SendInvoice([$inputDocument]);
$response = $client->sendInvoice($request);
```

#### E-Arşiv Fatura İptali

```php
use SmartDonusum\Type\CancelInvoice;

$request = new CancelInvoice(
    invoiceUuid: 'ea-uuid',
    cancelReason: 'Hatalı düzenleme',
    cancelDate: '2024-01-20' // yyyy-MM-dd
);

$response = $client->cancelInvoice($request);
```

#### Son Fatura Bilgisi Sorgulama (getLastInvoiceIdAndDate)

Aynı seri numarasına sahip en son faturanın bilgilerini alma:

```php
use SmartDonusum\Type\GetLastInvoiceIdAndDate;

$request = new GetLastInvoiceIdAndDate(
    source_id: '1234567890', // VKN/TCKN
    documentIdPrefix: ['ABC', 'DEF', 'XYZ'] // Fatura serileri
);

$response = $client->getLastInvoiceIdAndDate($request);

echo "Son Fatura No: " . $response->getDocumentId() . "\n";
echo "Düzenleme Tarihi: " . $response->getIssueDate() . "\n";
```

#### E-Arşiv Fatura Sorgulama

```php
use SmartDonusum\Type\QueryInvoice;

$request = new QueryInvoice(
    paramType: 'Document_UUID', // Document_UUID, Document_ID, Envelope_UUID
    parameter: 'ea-uuid',
    withXML: 'YES' // YES, NO
);

$response = $client->queryInvoice($request);
```

#### E-posta Gönderildi İşaretleme (setEmailSent)

```php
use SmartDonusum\Type\SetEmailSent;

$invoiceUuidList = [
    'ea-uuid-1',
    'ea-uuid-2',
];

$request = new SetEmailSent($invoiceUuidList);
$responseList = $client->setEmailSent($request);
```

#### E-Fatura Kullanıcısı Kontrolü (isEFaturaUser)

```php
use SmartDonusum\Type\IsEFaturaUser;

$request = new IsEFaturaUser(
    vkn_tckn: '1234567890'
);

$response = $client->isEFaturaUser($request);

if ($response->getCode() === '0') {
    echo "Müşteri E-Fatura kullanıcısıdır";
} else {
    echo "Müşteri E-Fatura kullanıcısı değildir";
}
```

### E-Arşiv Rapor İşlemleri

```php
$wsdl = 'https://servis.smartdonusum.com/EArchiveReportService/EAReportWS?wsdl';
$reportClient = SmartDonusumClientFactory::factory($wsdl);
```

#### Otomatik Rapor Gönderim Günü Belirleme

```php
use SmartDonusum\Type\SetReportAutoSendDay;

$request = new SetReportAutoSendDay(
    dayOfMonth: 15 // Ayın 1-15 arası bir günü
);

$response = $reportClient->setReportAutoSendDay($request);
```

#### Rapor Gönderim İsteği Oluşturma

```php
use SmartDonusum\Type\CreateReportSendRequest;

$request = new CreateReportSendRequest(
    reportDate: '2024-01-01' // yyyy-MM-dd (en az bir önceki dönem)
);

$response = $reportClient->createReportSendRequest($request);
```

#### Rapor XML Gönderme

```php
use SmartDonusum\Type\SendReport;
use SmartDonusum\Type\ReportRequest;

$reportRequest = new ReportRequest(
    mukellef: '1234567890',
    donemNo: '01', // Ay
    bolumNo: '1',
    bolumBaslangicTarihi: '2024-01-01',
    bolumBitisTarihi: '2024-01-15',
    xmlContent: file_get_contents('rapor.xml') // Byte array
);

$request = new SendReport($reportRequest);
$reportResponse = $reportClient->sendReport($request);

if ($reportResponse->getCode() === '0') {
    $reportInfo = $reportResponse->getReports()[0];
    echo "Rapor No: " . $reportInfo->getRaporNo() . "\n";
    echo "Durum: " . $reportInfo->getStateExplanation() . "\n";
}
```

### E-Fatura/E-Arşiv Yükleme Servisi

İmzalı faturaların saklanması için kullanılır:

```php
// E-Fatura için
$wsdl = 'https://servis.smartdonusum.com/InvoiceLoadingService/LoadInvoiceWS?wsdl';
// E-Arşiv için
$wsdl = 'https://servis.smartdonusum.com/EAInvoiceLoadingService/LoadInvoiceWS?wsdl';

$loadClient = SmartDonusumClientFactory::factory($wsdl);
```

#### Giden Fatura Yükleme

```php
use SmartDonusum\Type\LoadOutboxInvoice;
use SmartDonusum\Type\InputDocument;

$document = new InputDocument(
    documentUUID: 'signed-invoice-uuid',
    xmlContent: base64_encode($signed_xml)
);

$request = new LoadOutboxInvoice([$document]);
$response = $loadClient->loadOutboxInvoice($request);
```

#### Gelen Fatura Yükleme

```php
use SmartDonusum\Type\LoadInboxInvoice;

$document = new InputDocument(
    documentUUID: 'inbox-invoice-uuid',
    xmlContent: base64_encode($signed_xml)
);

$request = new LoadInboxInvoice([$document]);
$response = $loadClient->loadInboxInvoice($request);
```

## İleri Seviye Kullanım

### Event Listener Ekleme

```php
use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Event\ResponseEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

$eventDispatcher = new EventDispatcher();

// Request event listener
$eventDispatcher->addListener(RequestEvent::class, function (RequestEvent $event) {
    $request = $event->getRequest();
    // Request logla
    error_log("SOAP Request: " . $request->getMethod());
});

// Response event listener
$eventDispatcher->addListener(ResponseEvent::class, function (ResponseEvent $event) {
    $response = $event->getResponse();
    // Response logla
    error_log("SOAP Response received");
});

// Custom engine ve caller ile client oluştur
$engine = DefaultEngineFactory::create(
    ExtSoapOptions::defaults($wsdl, [])
        ->withClassMap(SmartDonusumClassmap::getCollection())
);

$caller = new EventDispatchingCaller(
    new EngineCaller($engine), 
    $eventDispatcher
);

$client = new SmartDonusumClient($caller);
```

### Hata Yönetimi

```php
use Phpro\SoapClient\Exception\SoapException;

try {
    $response = $client->sendInvoice($request);
    
    // Başarılı
    echo "Fatura gönderildi: " . $response->getDocumentId();
    
} catch (SoapException $e) {
    // SOAP hatası
    echo "SOAP Hatası: " . $e->getMessage();
    error_log($e->getTraceAsString());
    
} catch (\Exception $e) {
    // Genel hata
    echo "Hata: " . $e->getMessage();
}
```

### Custom SOAP Options

```php
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;

$options = ExtSoapOptions::defaults($wsdl, [
    'cache_wsdl' => WSDL_CACHE_NONE,
    'trace' => true,
    'exceptions' => true,
    'connection_timeout' => 30,
    'user_agent' => 'SmartDonusum-Client/1.0',
    'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
    'encoding' => 'UTF-8',
    'soap_version' => SOAP_1_1,
])
->withClassMap(SmartDonusumClassmap::getCollection());

$engine = DefaultEngineFactory::create($options);
```

## API Metodları

### E-Fatura Servisleri (InvoiceWS)

| Metod | Açıklama |
|-------|----------|
| `sendInvoice()` | UBL XML formatındaki faturaları gönderir |
| `updateInvoice()` | Hatalı durumda olan faturaları günceller |
| `sendApplicationResponse()` | Uygulama yanıtı (KABUL/RED/İADE) gönderir |
| `cancelInvoice()` | Fatura işlenmesini durdurur |
| `getCustomerCreditCount()` | Fatura adedi bilgisini sorgular |
| `getCustomerCreditSpace()` | Alan boyutu bilgisini sorgular (MB) |
| `controlInvoiceXML()` | Fatura XML'ini şema ve şematron kontrolünden geçirir |
| `controlApplicationResponseXML()` | Uygulama yanıtı XML'ini kontrol eder |
| `getCustomerGBList()` | Gönderici Birim etiketlerini listeler |
| `getCustomerPKList()` | Posta Kutusu etiketlerini listeler |
| `getOutboxInvoiceStatusWithLogs()` | Fatura işlem loglarını döndürür |
| `setDocumentFlag()` | Belge üzerinde işaretleme yapar |
| `getCreditActionsforCustomer()` | Kredi hareketlerini listeler |

### E-Fatura Sorgulama Servisleri (QueryDocumentWS)

| Metod | Açıklama |
|-------|----------|
| `queryUsers()` | GİB'e kayıtlı e-fatura kullanıcılarını sorgular |
| `getLastInvoiceIdAndDate()` | Belirli serilerdeki en son fatura bilgisini döndürür |
| `queryOutboxDocument()` | Gönderilen faturaları UUID/No ile sorgular |
| `queryOutboxDocumentWithDocumentDate()` | Gönderilen faturaları fatura tarihine göre sorgular |
| `queryOutboxDocumentWithReceivedDate()` | Gönderilen faturaları alınma tarihine göre sorgular |
| `queryOutboxDocumentWithLocalId()` | Gönderilen faturaları local ID ile sorgular |
| `queryOutboxDocumentsWithGUIDList()` | UUID listesi ile toplu sorgulama yapar |
| `queryInboxDocument()` | Gelen faturaları UUID/No ile sorgular |
| `queryInboxDocumentWithDocumentDate()` | Gelen faturaları fatura tarihine göre sorgular |
| `queryInboxDocumentWithReceivedDate()` | Gelen faturaları alınma tarihine göre sorgular |
| `queryInboxDocumentsWithGUIDList()` | Gelen faturaları UUID listesi ile sorgular |
| `setTakenFromEntegrator()` | Belgelerin lokale kaydedildiğini işaretler |
| `queryAppResponseOfOutboxDocument()` | Gönderilen faturaya ait uygulama yanıtlarını sorgular |
| `queryAppResponseOfInboxDocument()` | Gelen faturaya ait gönderilen yanıtları sorgular |
| `queryEnvelope()` | Zarf UUID'si ile GİB'den sorgular |
| `queryArchivedOutboxDocument()` | Önceki yıllardaki gönderilen faturaları sorgular |
| `queryArchivedInboxDocument()` | Önceki yıllardaki gelen faturaları sorgular |

### E-Fatura Yükleme Servisleri (LoadInvoiceWS)

| Metod | Açıklama |
|-------|----------|
| `loadOutboxInvoice()` | İmzalı giden faturaları saklamak için yükler |
| `loadInboxInvoice()` | İmzalı gelen faturaları saklamak için yükler |
| `queryOutboxDocument()` | Yüklenen giden faturaları sorgular |
| `queryInboxDocument()` | Yüklenen gelen faturaları sorgular |

### E-Arşiv Fatura Servisleri (EArchiveInvoiceWS)

| Metod | Açıklama |
|-------|----------|
| `sendInvoice()` | E-Arşiv faturası gönderir |
| `updateInvoice()` | Hatalı e-arşiv faturasını günceller |
| `cancelInvoice()` | E-Arşiv faturasını iptal eder |
| `getLastInvoiceIdAndDate()` | Belirli serilerdeki en son e-arşiv fatura bilgisini döndürür |
| `queryInvoice()` | E-Arşiv faturalarını sorgular |
| `setEmailSent()` | Fatura PDF'inin e-posta ile gönderildiğini işaretler |
| `getCustomerCreditCount()` | Fatura adedi bilgisini sorgular |
| `getCustomerCreditSpace()` | Alan boyutu bilgisini sorgular |
| `controlInvoiceXML()` | E-Arşiv fatura XML'ini kontrol eder |
| `queryInvoiceWithLocalId()` | Local ID ile e-arşiv faturası sorgular |
| `queryInvoiceWithDocumentDate()` | Fatura tarihine göre sorgular |
| `queryInvoiceWithReceivedDate()` | Alınma tarihine göre sorgular |
| `queryInvoicesWithGUIDList()` | UUID listesi ile toplu sorgular |
| `isEFaturaUser()` | VKN/TCKN'nin e-fatura kullanıcısı olup olmadığını kontrol eder |
| `getCreditActionsforCustomer()` | Kredi hareketlerini listeler |
| `getEAInvoiceStatusWithLogs()` | E-Arşiv fatura işlem loglarını döndürür |
| `queryArchivedInvoice()` | Önceki yıllardaki e-arşiv faturalarını sorgular |
| `queryArchivedInvoiceWithDocumentDate()` | Önceki yıllardaki faturaları tarih ile sorgular |

### E-Arşiv Rapor Servisleri (EAReportWS)

| Metod | Açıklama |
|-------|----------|
| `setReportAutoSendDay()` | Otomatik rapor gönderim gününü ayarlar (1-15 arası) |
| `createReportSendRequest()` | Belirli dönem için rapor gönderim isteği oluşturur |
| `sendReport()` | Rapor XML'ini GİB'e gönderir |

### E-Arşiv Yükleme Servisleri (EArchiveLoadInvoiceWS)

| Metod | Açıklama |
|-------|----------|
| `loadInvoice()` | İmzalı e-arşiv faturalarını saklamak için yükler |
| `queryInvoice()` | Yüklenen e-arşiv faturalarını sorgular |

## Veri Tipleri ve Sınıflar

Tüm veri tipleri `SmartDonusum\Type` namespace'i altında bulunur ve immutable yapıdadır.

### InputDocument

Gönderilecek belgenin bilgilerini taşır:

| Alan | Tip | Açıklama | Zorunlu |
|------|-----|----------|---------|
| `documentUUID` | string | Belgenin UUID'si (36 haneli GUID formatında) | ✅ |
| `xmlContent` | string | UBL XML formatındaki içerik (base64 encode edilmiş) | ✅ |
| `sourceUrn` | string | Gönderen adres etiketi (urn:mail:...) | ✅ |
| `destinationUrn` | string | Alıcı adres etiketi veya e-posta | ✅ |
| `localId` | string | İstemci sistemindeki ID (sorgulama için kullanılabilir) | ❌ |
| `documentDate` | string | Belge tarihi (yyyy-MM-dd) | ❌ |
| `documentId` | string | Belge numarası | ❌ |

### EntResponse

İşlem sonuçlarını taşır:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `documentUUID` | string | İşlem yapılan belgenin UUID'si |
| `code` | string | Sonuç kodu (0: başarılı, 99: başarısız, 500: yetkisiz, vb.) |
| `explanation` | string | Sonuç açıklaması |
| `cause` | string | Hata durumunda hata nedeni |

### DocumentQueryResponse

Sorgulama sonuçlarını taşır:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `queryState` | string | Sorgu sonuç kodu |
| `stateExplanation` | string | Sorgu sonuç açıklaması |
| `documentCount` | int | Dönen belge sayısı |
| `maxRecordIdInList` | string | Listedeki en yüksek kayıt no |
| `documents` | ResponseDocument[] | Bulunan belgeler listesi |

### ResponseDocument

Sorgu sonucunda dönen belge bilgileri:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `document_uuid` | string | Belge UUID'si |
| `document_id` | string | Fatura numarası |
| `envelope_uuid` | string | Zarf UUID'si |
| `document_profile` | string | Senaryo türü (TEMELFATURA, TICARIFATURA, vb.) |
| `system_creation_time` | DateTime | Sisteme alınma zamanı |
| `document_issue_date` | DateTime | Düzenleme tarihi |
| `source_id` | string | Gönderen VKN/TCKN |
| `source_title` | string | Gönderen ünvan |
| `destination_id` | string | Alıcı VKN/TCKN |
| `state_code` | string | Durum kodu |
| `state_explanation` | string | Durum açıklaması |
| `currency_code` | string | Para birimi (TRY, USD, vb.) |
| `invoice_total` | decimal | Toplam tutar |
| `content_type` | string | İçerik tipi (XML, PDF, HTML) |
| `document_content` | byte[] | Belge içeriği |
| `cause` | string | Hata nedeni (varsa) |
| `response_code` | string | Uygulama yanıtı (KABUL, RED) |
| `response_received_date` | DateTime | Yanıt alınma tarihi |
| `is_read` | int | Okundu (0/1) |
| `is_archived` | int | Arşivlendi (0/1) |
| `is_accounted` | int | Muhasebeleştirildi (0/1) |
| `is_transferred` | int | Aktarıldı (0/1) |
| `is_printed` | int | Yazdırıldı (0/1) |
| `local_id` | string | İstemci sistemindeki ID |

### CreditInfo

Kredi bilgilerini taşır:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `code` | string | İşlem sonuç kodu |
| `explanation` | string | İşlem açıklaması |
| `totalCredit` | int | Toplam kredi/alan |
| `remainCredit` | int | Kalan kredi/alan |

### LogResponse

İşlem loglarını taşır:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `queryState` | string | Sorgu durumu |
| `stateExplanation` | string | Durum açıklaması |
| `logCount` | int | Log sayısı |
| `invoiceLogs` | InvoiceLog[] | Log kayıtları |

### InvoiceLog

Tek bir işlem log kaydı:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `documentUUID` | string | Belge UUID'si |
| `envelopeUUID` | string | Zarf UUID'si |
| `processTime` | DateTime | İşlem zamanı |
| `processState` | string | İşlem durumu |
| `processResult` | string | İşlem sonucu |
| `resultExplanation` | string | Sonuç açıklaması |

### FlagSetter

Belge işaretleme için:

| Alan | Tip | Değerler |
|------|-----|----------|
| `document_direction` | string | GIDEN, GELEN |
| `flag_name` | string | ARSIVLENDI, OKUNDU, MUHASEBELESTIRILDI, AKTARILDI, YAZDIRILDI |
| `flag_value` | string | 0 (yok), 1 (var) |
| `document_uuid` | string | İşlem yapılacak belge UUID'si |

### ResponseUser

E-Fatura kullanıcı bilgileri:

| Alan | Tip | Açıklama |
|------|-----|----------|
| `vkn_tckn` | string | VKN veya TCKN |
| `unvan_ad` | string | Ünvan veya Ad-Soyad |
| `etiket` | string | Etiket bilgisi |
| `tip` | string | Kullanıcı tipi |
| `ilkKayitZamani` | DateTime | İlk kayıt zamanı |
| `etiketKayitZamani` | DateTime | Etiket kayıt zamanı |

Her tip sınıfı getter ve immutable setter metodlarına sahiptir:

```php
$document = new InputDocument(
    documentUUID: 'uuid-value',
    xmlContent: $content,
    sourceUrn: 'source',
    destinationUrn: 'dest'
);

// Getter
$uuid = $document->getDocumentUUID();

// Immutable setter (yeni instance döner)
$newDocument = $document->withDocumentUUID('new-uuid');
```

## Hata Kodları

### EntResponse ve DocumentQueryResponse Hata Kodları

| Kod | Açıklama | Örnek Durum |
|-----|----------|-------------|
| `0` | İşlem başarılı | İşlem sorunsuz tamamlandı |
| `99` | İşlem başarısız | Şema hatası, yetki sorunu, belge bulunamadı vb. |
| `500` | Yetkisiz kullanıcı | Yanlış kullanıcı adı/şifre |
| `510` | Yetki kontrolü başarısız | Yetkilendirme sistemi hatası |
| `999` | Tanımlanmamış hata | Beklenmeyen sistem hatası |

### CreditInfo Hata Kodları

| Kod | Açıklama | Örnek Durum |
|-----|----------|-------------|
| `0` | İşlem başarılı | Kredi bilgisi başarıyla alındı |
| `99` | İşlem başarısız | VKN/TCKN'ye ait müşteri bulunamadı |

### Kullanım Örneği

```php
$response = $client->sendInvoice($request);

foreach ($response as $entResponse) {
    switch ($entResponse->getCode()) {
        case '0':
            // Başarılı
            $this->logger->info('Fatura gönderildi', [
                'uuid' => $entResponse->getDocumentUUID()
            ]);
            break;
            
        case '99':
            // İşlem hatası
            $this->logger->error('Fatura gönderilemedi', [
                'uuid' => $entResponse->getDocumentUUID(),
                'reason' => $entResponse->getCause()
            ]);
            break;
            
        case '500':
            // Yetkilendirme hatası
            throw new AuthenticationException($entResponse->getExplanation());
            
        default:
            // Diğer hatalar
            $this->logger->error('Beklenmeyen hata', [
                'code' => $entResponse->getCode(),
                'message' => $entResponse->getExplanation()
            ]);
    }
}
```

## Code Generation

Projede WSDL'den otomatik kod üretimi için yapılandırma mevcuttur. WSDL değişikliklerinde kodları yeniden üretmek için:

```bash
# Tüm type sınıflarını oluştur
vendor/bin/soap-client generate:types config/soap-client.php

# Client sınıfını oluştur
vendor/bin/soap-client generate:client config/soap-client.php

# Classmap'i oluştur
vendor/bin/soap-client generate:classmap config/soap-client.php
```

### Farklı Servisler İçin Kod Üretimi

`config/soap-client.php` dosyasındaki WSDL adresini değiştirerek farklı servisler için kod üretebilirsiniz:

```php
// E-Fatura için
'https://servis.smartdonusum.com/InvoiceService/InvoiceWS?wsdl'

// E-Arşiv Fatura için
'https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS?wsdl'

// Sorgulama servisi için
'https://servis.smartdonusum.com/QueryInvoiceService/QueryDocumentWS?wsdl'

// E-Arşiv Rapor için
'https://servis.smartdonusum.com/EArchiveReportService/EAReportWS?wsdl'
```

## Best Practices

### 1. İstemci Yeniden Kullanımı

Her istek için yeni client oluşturmak yerine client'ı yeniden kullanın:

```php
class InvoiceService
{
    private SmartDonusumClient $client;
    
    public function __construct()
    {
        $wsdl = 'https://servis.smartdonusum.com/InvoiceService/InvoiceWS?wsdl';
        $this->client = SmartDonusumClientFactory::factory($wsdl);
    }
    
    public function sendInvoice($xmlContent): array
    {
        // Client'ı tekrar oluşturmak yerine mevcut olanı kullan
        return $this->client->sendInvoice(...);
    }
}
```

### 2. Hata Yönetimi

Tüm SOAP çağrılarını try-catch ile sarın:

```php
use Phpro\SoapClient\Exception\SoapException;

try {
    $response = $client->sendInvoice($request);
    
    foreach ($response as $result) {
        if ($result->getCode() !== '0') {
            // İş mantığı hatası
            $this->handleBusinessError($result);
        }
    }
    
} catch (SoapException $e) {
    // SOAP/Network hatası
    $this->logger->error('SOAP Error', [
        'message' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
    throw $e;
}
```

### 3. Performans İyileştirmeleri

```php
// ❌ Kötü: Her seferinde XML içeriği isteme
$response = $client->queryOutboxDocument($request->withXML('XML'));

// ✅ İyi: Sadece gerektiğinde XML içeriği al
$response = $client->queryOutboxDocument($request->withXML('NONE'));

// XML'e ihtiyaç olduğunda ayrı bir istekle al
if ($needXml) {
    $detailResponse = $client->queryOutboxDocument(
        $request->withXML('XML')
    );
}
```

### 4. Pagination

Büyük veri setlerinde pagination kullanın:

```php
$minRecordId = '0';
$allDocuments = [];

do {
    $request = new QueryOutboxDocumentWithDocumentDate(
        startDate: '2024-01-01',
        endDate: '2024-01-31',
        documentType: '1',
        queried: 'ALL',
        withXML: 'NONE',
        minRecordId: $minRecordId
    );
    
    $response = $client->queryOutboxDocumentWithDocumentDate($request);
    
    if ($response->getDocumentCount() > 0) {
        $allDocuments = array_merge($allDocuments, $response->getDocuments());
        $minRecordId = $response->getMaxRecordIdInList();
    }
    
} while ($response->getDocumentCount() > 0);
```

### 5. UUID Üretimi

Fatura UUID'lerini doğru formatta üretin:

```php
function generateInvoiceUUID(): string
{
    // UUID v4 formatında
    return sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

// Veya PHP 8.3+ için
$uuid = \Random\Engine\Xoshiro256StarStar::generate();
```

### 6. Logging

İşlemleri detaylı loglayın:

```php
class InvoiceLogger
{
    public function logSendInvoice(InputDocument $doc, EntResponse $response): void
    {
        $this->logger->info('Invoice sent', [
            'document_uuid' => $doc->getDocumentUUID(),
            'document_id' => $doc->getDocumentId(),
            'result_code' => $response->getCode(),
            'result_message' => $response->getExplanation(),
            'timestamp' => date('Y-m-d H:i:s')
        ]);
        
        if ($response->getCode() !== '0') {
            $this->logger->error('Invoice send failed', [
                'document_uuid' => $doc->getDocumentUUID(),
                'cause' => $response->getCause()
            ]);
        }
    }
}
```

## Test

```bash
composer test
```

## Güvenlik

SmartDonusum API'ye erişim için kullanıcı adı ve şifre bilgilerinizi **asla** kaynak kodunda saklamayın. Ortam değişkenlerini kullanın:

```php
// .env dosyası
SMARTDONUSUM_USERNAME=kullanici_adi
SMARTDONUSUM_PASSWORD=sifre

// Kullanımı
$username = getenv('SMARTDONUSUM_USERNAME');
$password = getenv('SMARTDONUSUM_PASSWORD');
```

## Lisans

MIT License. Detaylar için `LICENSE` dosyasına bakınız.

## Yazar

**Tunahan Çalışkan**
- Email: mail@tunahancaliskan.com

## Katkıda Bulunma

Pull request'ler memnuniyetle karşılanır. Büyük değişiklikler için lütfen önce bir issue açarak neyi değiştirmek istediğinizi tartışın.

## Değişiklik Geçmişi

### 1.0.0
- İlk sürüm
- SmartDonusum SOAP API desteği
- Type-safe implementasyon
- Tüm fatura işlemleri desteği

## Destek

Sorunlar için GitHub Issues kullanın: [GitHub Issues](https://github.com/tnhnclskn/smartdonusum/issues)

## Kaynaklar

### Resmi Dökümantasyon
- [SmartDonusum Web Sitesi](https://www.smartdonusum.com/)
- [SmartDonusum Servis Dokümantasyonu](https://servis.smartdonusum.com/)
- [GİB E-Fatura Portal](https://portal.efatura.gov.tr/)
- [GİB E-Arşiv Fatura Portal](https://earsivportal.efatura.gov.tr/)

### Teknik Kaynaklar
- [Phpro SOAP Client](https://github.com/phpro/soap-client) - SOAP client altyapısı
- [PHP SOAP Extension](https://www.php.net/manual/en/book.soap.php) - PHP SOAP dökümantasyonu
- [UBL 2.1 Documentation](http://docs.oasis-open.org/ubl/UBL-2.1.html) - UBL formatı
- [Symfony HTTP Client](https://symfony.com/doc/current/http_client.html) - HTTP client

### İlgili Projeler
- [E-Fatura UBL TR](https://github.com/furkankadioglu/efatura) - UBL-TR XML oluşturucu
- [E-Arşiv PHP](https://github.com/mlevent/earchive) - E-Arşiv fatura kütüphanesi

### Ek Belgeler
Bu repository'de yer alan dökümantasyon:
- `docs/e-invoice.md` - E-Fatura servisleri detaylı dökümantasyonu
- `docs/e-archive.md` - E-Arşiv Fatura servisleri detaylı dökümantasyonu

## Sık Sorulan Sorular (FAQ)

### E-Fatura ile E-Arşiv Fatura arasındaki fark nedir?

**E-Fatura**: İki e-fatura kullanıcısı arasındaki elektronik faturalama. Her iki taraf da GİB sistemine kayıtlı olmalıdır.

**E-Arşiv Fatura**: E-fatura mükellefi olmayan müşterilere kesilen faturalar. Müşteriye e-posta ile PDF gönderilir.

### UUID nasıl oluşturulmalı?

36 haneli UUID v4 formatında olmalıdır: `e8a5d8f0-1234-5678-90ab-cdef12345678`

```php
$uuid = sprintf(
    '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
    mt_rand(0, 0xffff), mt_rand(0, 0xffff),
    mt_rand(0, 0xffff),
    mt_rand(0, 0x0fff) | 0x4000,
    mt_rand(0, 0x3fff) | 0x8000,
    mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
);
```

### SOAP hatası alıyorum, ne yapmalıyım?

1. WSDL adresine tarayıcıdan erişebildiğinizi kontrol edin
2. Kullanıcı adı ve şifrenin doğru olduğundan emin olun
3. HTTP başlıklarının doğru eklendiğini kontrol edin
4. SOAP uzantısının yüklü olduğunu kontrol edin: `php -m | grep soap`

### Fatura gönderirken hata alıyorum

1. XML'in UBL 2.1 standardına uygun olduğunu kontrol edin
2. `controlInvoiceXML` metoduyla XML'i önce test edin
3. UUID'nin benzersiz olduğundan emin olun
4. Gönderen ve alıcı URN'lerinin doğru formatta olduğunu kontrol edin

### Performans sorunları yaşıyorum

1. `withXML` parametresini `NONE` kullanın
2. Pagination kullanın
3. Client instance'ını yeniden kullanın
4. WSDL cache'ini aktif edin
5. Paralel istekler için async çözümler kullanmayı düşünün

### Test ortamı var mı?

SmartDonusum test ortamı bilgileri için doğrudan SmartDonusum ile iletişime geçmeniz gerekmektedir.
