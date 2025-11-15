# SmartDonusum API Client

SmartDonusum e-Fatura servisi için geliştirilmiş modern PHP SOAP API istemcisi.

## Özellikler

- ✅ Type-safe SOAP client implementasyonu
- 🔒 Immutable veri tipleri
- 📝 Tam PHPDoc desteği
- 🎯 PSR-4 autoloading standardı
- 🛠 Phpro/soap-client altyapısı
- 🔄 Event-driven mimari desteği

## Gereksinimler

- PHP 8.1 veya üzeri
- Composer

## Kurulum

```bash
composer require tnhnclskn/smartdonusum
```

## Hızlı Başlangıç

```php
<?php

require 'vendor/autoload.php';

use SmartDonusum\SmartDonusumClientFactory;
use SmartDonusum\Type\SendInvoice;
use SmartDonusum\Type\InputDocument;

// Client'ı oluştur
$wsdl = 'https://service.smartdonusum.com/InvoiceService/InvoiceWS?wsdl';
$client = SmartDonusumClientFactory::factory($wsdl);

// Fatura gönder
$inputDocument = new InputDocument(
    documentId: 'INV2024001',
    documentContent: base64_encode($xmlContent)
);

$request = new SendInvoice([$inputDocument]);
$response = $client->sendInvoice($request);
```

## Kullanım Örnekleri

### Fatura İşlemleri

#### Fatura Gönderme

```php
use SmartDonusum\Type\SendInvoice;
use SmartDonusum\Type\InputDocument;

$inputDocument = new InputDocument(
    documentId: 'INV2024001',
    documentContent: base64_encode($xmlContent)
);

$request = new SendInvoice([$inputDocument]);
$response = $client->sendInvoice($request);
```

#### İmzalı Fatura Gönderme

```php
use SmartDonusum\Type\SendSignedInvoice;

$request = new SendSignedInvoice(
    signedInvoiceData: base64_encode($signedXmlContent)
);

$response = $client->sendSignedInvoice($request);
```

#### Fatura Güncelleme

```php
use SmartDonusum\Type\UpdateInvoice;

$request = new UpdateInvoice(
    documentId: 'INV2024001',
    documentContent: base64_encode($updatedXmlContent)
);

$response = $client->updateInvoice($request);
```

#### Fatura İptali

```php
use SmartDonusum\Type\CancelInvoice;

$request = new CancelInvoice(
    documentId: 'INV2024001',
    cancelReason: 'Hatalı düzenleme'
);

$response = $client->cancelInvoice($request);
```

#### Fatura Durumu Sorgulama

```php
use SmartDonusum\Type\GetOutboxInvoiceStatusWithLogs;

$request = new GetOutboxInvoiceStatusWithLogs(
    documentId: 'INV2024001'
);

$response = $client->getOutboxInvoiceStatusWithLogs($request);
```

### XML Kontrol İşlemleri

#### Fatura XML Kontrolü

```php
use SmartDonusum\Type\ControlInvoiceXML;

$request = new ControlInvoiceXML(
    xmlContent: base64_encode($xmlContent)
);

$response = $client->controlInvoiceXML($request);

if ($response->isValid()) {
    echo "XML geçerli!";
} else {
    echo "Hatalar: " . implode(', ', $response->getErrors());
}
```

#### Uygulama Yanıtı XML Kontrolü

```php
use SmartDonusum\Type\ControlApplicationResponseXML;

$request = new ControlApplicationResponseXML(
    xmlContent: base64_encode($xmlContent)
);

$response = $client->controlApplicationResponseXML($request);
```

### Müşteri Bilgileri

#### Gelen Belge Listesi

```php
use SmartDonusum\Type\GetCustomerGBList;

$request = new GetCustomerGBList(
    startDate: '2024-01-01',
    endDate: '2024-12-31'
);

$response = $client->getCustomerGBList($request);

foreach ($response->getDocuments() as $document) {
    echo "Belge ID: " . $document->getDocumentId() . "\n";
}
```

#### Gönderilen Belge Listesi

```php
use SmartDonusum\Type\GetCustomerPKList;

$request = new GetCustomerPKList(
    startDate: '2024-01-01',
    endDate: '2024-12-31'
);

$response = $client->getCustomerPKList($request);
```

#### Kredi Kullanımı Sorgulama

```php
use SmartDonusum\Type\GetCustomerCreditCount;

$request = new GetCustomerCreditCount();
$response = $client->getCustomerCreditCount($request);

echo "Kalan kredi: " . $response->getCreditCount();
```

#### Kredi Alanı Sorgulama

```php
use SmartDonusum\Type\GetCustomerCreditSpace;

$request = new GetCustomerCreditSpace();
$response = $client->getCustomerCreditSpace($request);

echo "Toplam alan: " . $response->getTotalSpace() . " MB\n";
echo "Kullanılan alan: " . $response->getUsedSpace() . " MB";
```

### Prefix (Ön Ek) İşlemleri

#### Prefix Listesi Alma

```php
use SmartDonusum\Type\GetPrefixList;

$request = new GetPrefixList();
$response = $client->getPrefixList($request);

foreach ($response->getPrefixes() as $prefix) {
    echo "Prefix: " . $prefix->getCode() . "\n";
}
```

#### Prefix Ekleme

```php
use SmartDonusum\Type\AddPrefixList;
use SmartDonusum\Type\PrefixCode;

$prefix = new PrefixCode(
    code: 'ABC',
    description: 'ABC Şirketi'
);

$request = new AddPrefixList([$prefix]);
$response = $client->addPrefixList($request);
```

### Uygulama Yanıtı İşlemleri

#### Uygulama Yanıtı Gönderme

```php
use SmartDonusum\Type\SendApplicationResponse;

$request = new SendApplicationResponse(
    documentId: 'INV2024001',
    responseType: 'KABUL',
    responseContent: base64_encode($responseXml)
);

$response = $client->sendApplicationResponse($request);
```

#### Toplu Uygulama Yanıtı Gönderme

```php
use SmartDonusum\Type\SendAppResponseList;
use SmartDonusum\Type\AppResponseDocument;

$responses = [
    new AppResponseDocument(
        documentId: 'INV2024001',
        responseType: 'KABUL',
        content: base64_encode($responseXml1)
    ),
    new AppResponseDocument(
        documentId: 'INV2024002',
        responseType: 'RED',
        content: base64_encode($responseXml2)
    )
];

$request = new SendAppResponseList($responses);
$response = $client->sendAppResponseList($request);
```

### Yardımcı İşlemler

#### Kullanıcı Alias'ları Alma

```php
use SmartDonusum\Type\GetUserAliases;

$request = new GetUserAliases();
$response = $client->getUserAliases($request);

foreach ($response->getAliases() as $alias) {
    echo "Alias: " . $alias->getName() . "\n";
}
```

#### Yeni UUID Alma

```php
use SmartDonusum\Type\GetNewUUID;

$request = new GetNewUUID();
$response = $client->getNewUUID($request);

echo "Yeni UUID: " . $response->getUuid();
```

#### Taslak Önizleme

```php
use SmartDonusum\Type\GetDraftDocumentPreview;

$request = new GetDraftDocumentPreview(
    draftId: 'DRAFT001'
);

$response = $client->getDraftDocumentPreview($request);
$previewHtml = $response->getPreviewContent();
```

#### Taslağa Kaydetme

```php
use SmartDonusum\Type\SaveToTaslak;

$request = new SaveToTaslak(
    documentContent: base64_encode($xmlContent),
    draftName: 'Fatura Taslağı 2024'
);

$response = $client->saveToTaslak($request);
```

### XSLT İşlemleri

#### XSLT Listesi Alma

```php
use SmartDonusum\Type\GetXsltList;

$request = new GetXsltList();
$response = $client->getXsltList($request);

foreach ($response->getXslts() as $xslt) {
    echo "XSLT: " . $xslt->getName() . "\n";
}
```

#### XSLT Silme

```php
use SmartDonusum\Type\DeleteXslt;

$request = new DeleteXslt(
    xsltId: 'XSLT001'
);

$response = $client->deleteXslt($request);
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

Client aşağıdaki metodları destekler:

### Fatura İşlemleri
- `sendInvoice()` - Fatura gönder
- `sendSignedInvoice()` - İmzalı fatura gönder
- `sendInvoiceWithoutDocumentId()` - Belge ID'siz fatura gönder
- `uploadInvoiceList()` - Toplu fatura yükle
- `updateInvoice()` - Fatura güncelle
- `cancelInvoice()` - Fatura iptal et
- `getOutboxInvoiceStatusWithLogs()` - Fatura durumu ve loglarını getir
- `resendDocument()` - Belge yeniden gönder

### XML Kontrol
- `controlInvoiceXML()` - Fatura XML'i kontrol et
- `controlApplicationResponseXML()` - Uygulama yanıtı XML'i kontrol et

### Müşteri İşlemleri
- `getCustomerGBList()` - Gelen belge listesi
- `getCustomerPKList()` - Gönderilen belge listesi
- `getCustomerCreditCount()` - Kredi sayısı
- `getCustomerCreditSpace()` - Kredi alanı
- `getCreditActionsforCustomer()` - Müşteri kredi hareketleri
- `getUserAliases()` - Kullanıcı alias'ları

### Prefix İşlemleri
- `getPrefixList()` - Prefix listesi
- `addPrefixList()` - Prefix ekle

### Uygulama Yanıtı
- `sendApplicationResponse()` - Uygulama yanıtı gönder
- `sendAppResponse()` - Uygulama yanıtı gönder
- `sendAppResponseList()` - Toplu uygulama yanıtı gönder

### XSLT İşlemleri
- `getXsltList()` - XSLT listesi
- `deleteXslt()` - XSLT sil

### Yardımcı İşlemler
- `getNewUUID()` - Yeni UUID al
- `setDocumentFlag()` - Belge bayrağı ayarla
- `saveToTaslak()` - Taslağa kaydet
- `getDraftDocumentPreview()` - Taslak önizleme

## Veri Tipleri

Tüm veri tipleri `SmartDonusum\Type` namespace'i altında bulunur ve immutable yapıdadır:

- **InputDocument** - Giriş belgesi
- **ResponseDocument** - Yanıt belgesi
- **DocumentInfo** - Belge bilgisi
- **PrefixCode** - Prefix kodu
- **CreditInfo** - Kredi bilgisi
- **AppResponseDocument** - Uygulama yanıt belgesi
- ve daha fazlası...

Her tip sınıfı getter ve immutable setter metodlarına sahiptir:

```php
$document = new InputDocument(
    documentId: 'INV001',
    documentContent: $content
);

// Getter
$id = $document->getDocumentId();

// Immutable setter (yeni instance döner)
$newDocument = $document->withDocumentId('INV002');
```

## Code Generation

Projede WSDL'den otomatik kod üretimi için yapılandırma mevcuttur. Yeni kod üretmek için:

```bash
vendor/bin/soap-client generate:types config/soap-client.php
vendor/bin/soap-client generate:client config/soap-client.php
vendor/bin/soap-client generate:classmap config/soap-client.php
```

## Test

```bash
composer test
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

- [SmartDonusum Dökümantasyon](https://service.smartdonusum.com/)
- [Phpro SOAP Client](https://github.com/phpro/soap-client)
- [PHP SOAP Extension](https://www.php.net/manual/en/book.soap.php)
