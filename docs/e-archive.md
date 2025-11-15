# SMART DÖNÜŞÜM TEKNOLOJİ A.Ş.

## Entegrasyon Servisleri Dokümanı

### E-Arşiv Fatura Servisi

-----

## İçindekiler

  * Yapılan Değişiklikler... 2
  * E-Arşiv Fatura Servisi... 3
    1.  SendInvoice... 3
    2.  UpdateInvoice... 4
    3.  CancelInvoice... 5
    4.  GetLastInvoiceIdAndDate... 6
    5.  QueryInvoice... 7
    6.  SetEmailSent... 8
    7.  GetCustomerCreditCount... 9
    8.  GetCustomerCreditSpace... 10
    9.  ControlInvoiceXML... 10
    10. QueryInvoiceWithLocalId... 11
    11. QueryInvoiceWithDocumentDate... 12
    12. QueryInvoiceWithReceivedDate... 13
    13. QueryInvoicesWithGUIDList... 15
    14. IsEFaturaUser... 16
    15. GetCreditActionsforCustomer... 17
    16. GetEAInvoiceStatusWithLogs... 18
    17. QueryArchivedInvoice... 18
    18. QueryArchivedInvoiceWithDocumentDate... 20
  * E-Arşiv Rapor Servisi... 22
    1.  SetReportAutoSendDay... 22
    2.  CreateReportSendRequest... 23
    3.  SendReport... 23
  * E-Arşiv Fatura Yükleme Servisi... 24
    1.  LoadInvoice... 25
    2.  QueryInvoice... 25
  * Sınıf Tanımalamaları... 27
  * Hata Kodları ve Açıklamaları... 32
  * Http Başlığı ekleme ve yetkilendirme örneği... 33

-----

## Yapılan Değişiklikler

| Tarih | Değişiklik |
| :--- | :--- |
| 08.05.2019 | EArchiveInvoiceWS servisine QueryArchivedInvoice metodu eklendi. <br> EArchiveInvoiceWS servisine QueryArchivedInvoiceWithDocumentDate metodu eklendi. |
| 06.03.2019 | EAReportWS servisine sendReport metodu eklendi. |
| 23.11.2018 | LoadInvoice WS servisi eklendi. |
| 05.01.2018 | EArchiveInvoice WS servisindeki InputDocument sınıfına documentDate alanı eklendi. <br> EArchiveInvoiceWS servisindeki InputDocument sınıfına documentid alanı eklendi. |
| 17.05.2017 | EArchiveInvoiceWS servisine updateInvoice metodu eklendi. <br> EArchiveInvoiceWS servisindeki InputDocument sınıfına localid alanı eklendi. <br> EArchiveInvoiceWS servisindeki ResponseDocument sınıfına response\_received\_date alanı eklendi. <br> EArchiveInvoiceWS servisine getCustomerCreditCount metodu eklendi. <br> EArchiveInvoiceWS servisine getCustomerCreditCount metodu eklendi. <br> EArchiveInvoiceWS servisine controlInvoiceXML metodu eklendi. <br> EArchiveInvoiceWS servisine QueryOutboxWithLocalId metodu eklendi. <br> EArchiveInvoiceWS servisinden getCustomerCredit metodu kaldırıldı. |

> Not: Yeni eklenen metot ve alanlar yeşil, kaldırılan ve kullanılmayan alanlar gri renkte gösterilmiştir. Gri renkli alan, metot ve sınıflar dokumanın bir sonraki sürümünde yer almayacaktır.

-----

## E-Arşiv Fatura Servisi

| | |
| :--- | :--- |
| **Servis Adı** | EArchiveInvoiceWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/EArchiveInvoiceService/EArchiveInvoiceWS?wsdl` |
| **Açıklama** | Mükellef tarafından oluşturulan UBL xml formatındaki fatura ve uygulama yanıtlarının entegratöre iletildiği servistir. Fonksiyon açıklamaları aşağıda yer almaktadır. |

### 1. SendInvoice

| Metot Adı | sendinvoice |
| :--- | :--- |
| **Açıklama** | UBL xml formatında oluşturulan faturaların entegratöre gönderildiği metottur. |
| **Parametreler** | **Adı:** inputDocumentList <br> **Tipi:** InputDocument türünden liste |
| **Dönüş Değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar sisteme kaydedilir. Gönderilen her bir faturaya ait 'document\_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre Detayı: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Gönderilecek faturanın documentUUID'sini, xml içeriğini, kaynak adres etiketi ve hedef e-posta bilgisini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

### 2. UpdateInvoice

| Metot Adı | updateInvoice |
| :--- | :--- |
| **Açıklama** | İşlenme esnasında hata oluşan faturaların düzenlendikten sonra tekrar yüklenebilmesini sağlayan metottur. Hatalı olmayan fatura güncellenemez. Yani bu metoda gönderilen InputDocument içindeki documentID'nin sistemde var olması ve durumunun hatalı olması gerekmektedir. Aksi takdirde güncellenecek fatura bulunamadı uyarısı verir. |
| **Parametreler** | **Adı:** inputDocumentList <br> **Tipi:** InputDocument türünden liste |
| **Dönüş Değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar güncellenir. Gönderilen her bir faturaya ait 'document\_uuid (ETTN numarası) ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve metottan döndürülecek listeye eklenir. |

**Parametre Detayı: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Güncellenecek faturanın documentUUID'sini, xml içeriğini, kaynak adres etiketi ve hedef e-posta bilgisini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

### 3. CancelInvoice

| Metot Adı | cancelInvoice |
| :--- | :--- |
| **Açıklama** | Gönderilmiş bir faturanın iptal edilmesini sağlayan fonksiyondur. |
| **Parametreler** | **Adı:** invoiceUuid, **Tipi:** String <br> **Adı:** cancelReason, **Tipi:** String <br> **Adı:** cancelDate, **Tipi:** String |
| **Dönüş Değeri** | EntResponse nesnesi döndürür. İşlem sonucu bu nesne içerisindeki 'code (kod)', 'explanation (açıklama)', işlem sırasında hata oluşmuşsa 'cause (sebep)' alanları yardımıyla kontrol edilebilir. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `invoiceUuid` | String | İptal edilecek faturanın UUID bilgisi. UUID formatında bir dizidir. |
| `cancelReason` | String | Faturanın iptal edilme sebebi. |
| `cancelDate` | String | Faturanın iptal edildiği tarih. (yyyy-MM-dd) formatında değer alır. |

### 4. GetLastInvoiceIdAndDate

| Metot Adı | GetLastInvoiceIdAndDate |
| :--- | :--- |
| **Açıklama** | Mükellefin entegratöre gönderdiği faturalar arasından aynı '3 haneli fatura serisi' bilgisine sahip en yüksek numaralı faturanın düzenleme tarihi ve fatura no'sunu döndürür. |
| **Parametreler** | **Adı:** source\_id, **Tipi:** String <br> **Adı:** documentIdPrefix, **Tipi:** String listesi |
| **Dönüş Değeri** | ResponseDocument nesnesi döndürür. Bu nesne içerisinde yer alan document\_id ve issue\_date değerleri en yüksek numaralı faturanın 'fatura no' ve 'düzenleme tarihi' bilgisidir. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `source_id` | String | Faturayı gönderecek mükellefin 10 haneli vergi kimlik numarası veya 11 haneli TC kimlik numarası. |
| `documentIdPrefix` | String listesi | Faturaların seri numaralarını içeren liste. Örnek: {"ABC", "DEF", "XYZ"} |

### 5. QueryInvoice

| Metot Adı | QueryInvoice |
| :--- | :--- |
| **Açıklama** | Gönderilen faturaların durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** paramType, **Tipi:** String <br> **Adı:** parameter, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `paramType` | String | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document\_UUID", "Document\_ID", "Envelope\_UUID"} değerlerinden birini alır. |
| `parameter` | String | paramType ile belirtilen parametrenin değerini tutar. |
| `withXML` | String | Sorgu sonucunda DocumentQueryResponse nesnesi içerisindeki 'documents' alanında döndürülecek dokuman(lar)ın XML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"YES","NO"] değerleri alır. |

### 6. SetEmailSent

| Metot Adı | setEmailSent |
| :--- | :--- |
| **Açıklama** | Verilen faturalara ait e-posta gönderildi bilgilerini işaretlemeyi sağlayan metottur. |
| **Parametreler** | **Adı:** invoice\_uuid\_list, **Tipi:** String listesi |
| **Dönüş Değeri** | Her bir dokumana karşılık bir EntResponse nesnesi içeren EntResponse listesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyonun sonudaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayı: `invoice_uuid_list`**
| | |
| :--- | :--- |
| **Parametre Adı** | invoice\_uuid\_list |
| **Parametre Tipi** | String listesi |
| **Açıklama** | E-posta gönderildi bilgileri işaretlenecek dokümanların UUID'lerini tutan liste. |

### 7. GetCustomerCreditCount

| Metot Adı | getCustomerCreditCount |
| :--- | :--- |
| **Açıklama** | VKN/TCKN bilgisi verilen mükellefin Fatura Adedi bilgisini almayı sağlar. Bu bilgi mükellefin şimdiye kadar yüklediği toplam ve an itibariyle kalan E-Fatura ve E-Arşiv fatura adedidir. |
| **Parametreler** | **Adı:** vkn\_tckn, **Tipi:** String |
| **Dönüş Değeri** | Creditinfo nesnesi döndürür. Ayrıntılı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayı: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn\_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Fatura Adedi bilgisi sorgulanacak mükellefin VKN/TCKN bilgisini tutar. |

### 8. GetCustomerCreditSpace

| Metot Adı | getCustomerCreditSpace |
| :--- | :--- |
| **Açıklama** | VKN/TCKN bilgisi verilen mükellefin Alan Boyutu bilgisini almayı sağlar. Bu bilgi mükellefin şimdiye kadar yüklediği toplam ve an itibariyle kalan E-Defter, E-Defter Saklama alanı boyutunun MB (megabayt) cinsinden ifadesidir. |
| **Parametreler** | **Adı:** vkn\_tckn, **Tipi:** String |
| **Dönüş Değeri** | Creditinfo sınıfı döndürür. Ayrıntılı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayı: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn\_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Alan Boyutu bilgisi sorgulanacak mükellefin VKN/TCKN bilgisini tutar. |

### 9. ControlInvoiceXML

| Metot Adı | controlInvoiceXML |
| :--- | :--- |
| **Açıklama** | Verilen UBL xml formatındaki fatura dokümanını şema ve şematron kontrollerinden geçirir. |
| **Parametreler** | **Adı:** invoiceXML, **Tipi:** String |
| **Dönüş Değeri** | EntResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayı: `invoiceXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | invoiceXML |
| **Parametre Tipi** | String |
| **Açıklama** | Kontrolden geçirilecek olan faturanın UBL xml formatındaki içeriğini tutar. |

### 10. QueryInvoiceWithLocalId

| Metot Adı | QueryInvoiceWithLocalId |
| :--- | :--- |
| **Açıklama** | İstemci yazılım tarafından gönderilen dokümanları, istemci sistemindeki localId bilgisi ile sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** localId, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre Detayı: `localId`**
| | |
| :--- | :--- |
| **Parametre Adı** | localid |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın, gönderici sisteminde kayıtlı olduğu localId bilgisi. Sorgulamanın başarıyla sonuçlanması için localId bilgisinin fatura gönderimi esnasında InputDocument nesnesi içerisinde sağlanması gerekmektedir. |

### 11. QueryInvoiceWithDocumentDate

| Metot Adı | QueryInvoiceWithDocumentDate |
| :--- | :--- |
| **Açıklama** | Gönderilen E-Arşiv faturaları fatura tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** startDate, **Tipi:** String <br> **Adı:** endDate, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String <br> **Adı:** minRecordId, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `startDate` | String | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |
| `endDate` | String | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |
| `withXML` | String | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan ResponseDocument nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |
| `minRecordId` | String | Sorgunun kapsayacağı dokümanların sistemde yer alan kayıt numaraları için alt limiti belirler. Sorgu sonucunda dönen ResponseDocument nesnelerindeki recordId alanı dokümanın sistemdeki kayıt numarasını belirtir. Performans kaybı yaşamamak için sınırlandırılarak gönderilen sorgu yanıtlarında bu alan, takip eden sorgu için, bir önceki sorguda dönen elemanların en sonuncusunun recordId'sini içermelidir. |

### 12. QueryInvoiceWithReceivedDate

| Metot Adı | QueryInvoiceWithReceivedDate |
| :--- | :--- |
| **Açıklama** | Gönderilen E-Arşiv faturaları alınma tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** startDate, **Tipi:** String <br> **Adı:** endDate, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String <br> **Adı:** minRecordId, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `startDate` | String | Dokumanın alınma tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |
| `endDate` | String | Dokumanın alınma tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |
| `withXML` | String | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan ResponseDocument nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |
| `minRecordId` | String | Sorgunun kapsayacağı dokümanların sistemde yer alan kayıt numaraları için alt limiti belirler. Sorgu sonucunda dönen ResponseDocument nesnelerindeki recordId alanı dokümanın sistemdeki kayıt numarasını belirtir. Performans kaybı yaşamamak için sınırlandırılarak gönderilen sorgu yanıtlarında bu alan, takip eden sorgu için, bir önceki sorguda dönen elemanların en sonuncusunun recordId'sini içermelidir. |

### 13. QueryInvoicesWithGUIDList

| Metot Adı | QueryInvoicesWithGUIDList |
| :--- | :--- |
| **Açıklama** | Gönderilen dokümanları 36 haneli UUID numarası ile sorgulamak için kullanılır. Sorgulanacak dokümanlara ait UUID'leri liste olarak alır ve liste halinde sonucu döndürür. |
| **Parametreler** | **Adı:** guidList, **Tipi:** String listesi |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki ResponseDocument tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre Detayı: `guidList`**
| | |
| :--- | :--- |
| **Parametre Adı** | guidList |
| **Parametre Tipi** | String listesi |
| **Açıklama** | Sorgulanacak dokümanlara ait UUID listesini belirtir. 36 haneli GUID formatında dizeler içeren bir listedir. |

### 14. IsEFaturaUser

| Metot Adı | isEFaturaUser |
| :--- | :--- |
| **Açıklama** | E-Fatura kullanıcı listesinde VKN / TCKN'li müşterinin olup olmadığı bilgisi döndürülür. |
| **Parametreler** | **Adı:** vkn\_tckn, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki ResponseDocument tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre Detayı: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn\_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | E-Fatura kullanıcı listesinde bulunup bulunmadığının sorgulanacağı mükellefin VKN/TCKN bilgisini tutar. |

### 15. GetCreditActionsforCustomer

| Metot Adı | getCreditActionsforCustomer |
| :--- | :--- |
| **Açıklama** | VKN/TCKN'li mükellefin kredi hareketlerinin bilgisi döndürülür. |
| **Parametreler** | **Adı:** vkn\_tckn, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki ResponseDocument tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre Detayı: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn\_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Mükellefin VKN/TCKN bilgisini tutar. |

### 16. GetEAInvoiceStatusWithLogs

| Metot Adı | GetEAInvoiceStatusWithLogs |
| :--- | :--- |
| **Açıklama** | Doküman işlenme geçmişi liste şeklinde dönülür. |
| **Parametreler** | **Adı:** documentUuid, **Tipi:** String türünden liste |
| **Dönüş Değeri** | LogResponse tipinde nesne döndürülür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanları ile kontrol edilebilir. Eğer sorgu sonucunda fatura işlenme logları bulunursa logCount alanı bulunan log sayısını gösterir. InvoiceLog listesi tipindeki invoiceLogs alanından ise her bir log ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre Detayı: `documentUuid`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentUuid |
| **Parametre Tipi** | String |
| **Açıklama** | Fatura işlenme log kayıtlarının döndürüleceği fatura ettn bilgisini içerir. |

### 17. QueryArchivedInvoice

| Metot Adı | QueryArchivedInvoice |
| :--- | :--- |
| **Açıklama** | Mevcut yıldan önceki yıllarda gönderilmiş faturaları sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** paramType, **Tipi:** String <br> **Adı:** parameter, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String <br> **Adı:** fiscalYear, **Tipi:** int |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `paramType` | String | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document\_UUID", "Document\_ID", "Envelope\_UUID"} değerlerinden birini alır. |
| `parameter` | String | paramType ile belirtilen parametrenin değerini tutar. |
| `withXML` | String | Sorgu sonucunda DocumentQueryResponse nesnesi içerisindeki 'documents' alanında döndürülecek dokuman(lar)ın XML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"YES","NO"] değerleri alır. |
| `fiscalYear` | int | Sorgulanacak faturanın ait olduğu yılı belirtir. |

### 18. QueryArchivedInvoiceWithDocumentDate

| Metot Adı | QueryArchivedInvoiceWithDocumentDate |
| :--- | :--- |
| **Açıklama** | Mevcut yıldan önceki yıllarda gönderilen E-Arşiv faturaları fatura tarihi değeriyle sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** startDate, **Tipi:** String <br> **Adı:** endDate, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String <br> **Adı:** minRecordId, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `startDate` | String | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |
| `endDate` | String | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |
| `withXML` | String | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan ResponseDocument nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |
| `minRecordId` | String | Sorgunun kapsayacağı dokümanların sistemde yer alan kayıt numaraları için alt limiti belirler. Sorgu sonucunda dönen ResponseDocument nesnelerindeki recordId alanı dokümanın sistemdeki kayıt numarasını belirtir. Performans kaybı yaşamamak için sınırlandırılarak gönderilen sorgu yanıtlarında bu alan, takip eden sorgu için, bir önceki sorguda dönen elemanların en sonuncusunun recordId'sini içermelidir. |

-----

## E-Arşiv Rapor Servisi

| | |
| :--- | :--- |
| **Servis Adı** | EAReportWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/EArchiveReportService/EAReportWS` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/EArchiveReportService/EAReportWS?wsdl` |
| **Açıklama** | Mükellefin Otomatik E-Arşiv raporu gönderim tarihini belirlemesi, oluşturduğu faturalara ait rapor gönderim isteği oluşturabilmesini veya direkt rapor XML'inin gönderimini sağlayan servistir. |

### 1. SetReportAutoSendDay

| Metot Adı | setReportAutoSendDay |
| :--- | :--- |
| **Açıklama** | Otomatik olarak E-Arşiv raporunun gönderileceği günün belirlenmesini sağlayan metottur. |
| **Parametreler** | **Adı:** dayOfMonth, **Tipi:** int |
| **Dönüş Değeri** | EntResponse nesnesi döndürür. İşlem sonucu nesne içerisindeki 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları ile kontrol edilebilir. |

**Parametre Detayı: `dayOfMonth`**
| | |
| :--- | :--- |
| **Parametre Adı** | dayOfMonth |
| **Parametre Tipi** | int |
| **Açıklama** | Raporun otomatik olarak gönderileceği günü belirten tam sayıdır. Ayın ilk 15 gününü temsilen [1-15] arasında değer alabilir. |

### 2. CreateReportSendRequest

| Metot Adı | createReportSendRequest |
| :--- | :--- |
| **Açıklama** | Gönderilmiş faturalara ait E-Arşiv raporunun oluşturulması için sisteme istek göndermeyi sağlayan metottur. Gönderilen istek sistem tarafından işlenerek daha önceden belirtilmiş 'Otomatik Rapor Gönderme Günü'nde Gelir İdaresi Başkanlığı'na gönderilir. İsteğin Otomatik Rapor Gönderim Günü'nden önce gönderilmesi gerekmektedir. |
| **Parametreler** | **Adı:** reportDate, **Tipi:** String |
| **Dönüş Değeri** | EntResponse nesnesi döndürür. İşlem sonucu nesne içerisindeki 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları ile kontrol edilebilir. |

**Parametre Detayı: `reportDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | reportDate |
| **Parametre Tipi** | String |
| **Açıklama** | Gönderilmiş E-Arşiv faturaların rapora eklenmeye başlanacağı tarih bilgisidir. Alabileceği değer en az bir önceki dönem içerisinde bir tarih olabilir. Tarih formatının (yyyy-AA-gg) olması zorunludur. |

### 3. SendReport

| Metot Adı | sendReport |
| :--- | :--- |
| **Açıklama** | Rapor XML'ini işlenmek ve Gelir İdaresi Başkanlığı'na iletilmek üzere kabul eden servis metodudur. Bu metoda gönderilen belgenin içindekilerle reportRequest nesnesi içerisindeki alanların eşleşmesini sağlama sorumluluğu gönderici tarafa aittir. |
| **Parametreler** | **Adı:** reportRequest, **Tipi:** ReportRequest |
| **Dönüş Değeri** | ReportResponse nesnesi döndürür. İşlem sonucu nesne içerisindeki 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları ile, gönderilen rapor XML'i için oluşturulan kayda ait UUID bilgisi bu nesne içerisindeki Reportinfo sınıfı ile taşınır. |

**Parametre Detayı: `reportRequest`**
| | |
| :--- | :--- |
| **Parametre Adı** | reportRequest |
| **Parametre Tipi** | ReportRequest |
| **Açıklama** | Rapor XML'ini ve gönderici mükellefe ait temel bilgileri içeren sınıftır. Detaylı bilgi için dokümanın sonundaki Sınıf Tanımlamaları bölümüne bakınız. |

-----

## E-Arşiv Fatura Yükleme Servisi

| | |
| :--- | :--- |
| **Servis Adı** | LoadInvoiceWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/EAlnvoiceLoadingService/LoadInvoiceWS` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/EAlnvoiceLoadingService/LoadInvoiceWS?wsdl` |
| **Açıklama** | Mükellef tarafından gönderilmiş UBL-XML formatındaki faturaların saklanmak üzere entegratöre iletildiği servistir. Metot açıklamaları aşağıda yer almaktadır. |

### 1. LoadInvoice

| Metot Adı | loadInvoice |
| :--- | :--- |
| **Açıklama** | UBL-XML formatındaki faturaların saklanmak üzere entegratöre gönderildiği metottur. |
| **Parametreler** | **Adı:** invoiceXMLList, **Tipi:** InputDocument türünden liste |
| **Dönüş Değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen invoiceXMLList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar sisteme kaydedilir. Gönderilen her bir faturaya ait 'document\_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre Detayı: `invoiceXMLList`**
| | |
| :--- | :--- |
| **Parametre Adı** | invoiceXMLList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Yüklenecek faturanın documentUUID'sini ve XML içeriğini taşır. Nesne yapısı ve özellikleri dokümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

### 2. QueryInvoice

| Metot Adı | QueryInvoice |
| :--- | :--- |
| **Açıklama** | Yüklenen faturaların durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | **Adı:** paramType, **Tipi:** String <br> **Adı:** parameter, **Tipi:** String <br> **Adı:** withXML, **Tipi:** String |
| **Dönüş Değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre Detayları**
| Parametre Adı | Parametre Tipi | Açıklama |
| :--- | :--- | :--- |
| `paramType` | String | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si veya Fatura Numarası ile sorgulama yapılabilir. {"Document\_UUID", "Document\_ID"} değerlerinden birini alır. |
| `parameter` | String | paramType ile belirtilen parametrenin değerini tutar. |
| `withXML` | String | Sorgu sonucunda DocumentQueryResponse nesnesi içerisindeki 'documents' alanında döndürülecek doküman(lar)ın XML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"YES","NO"} değerleri alır. Bu alanın "YES" olduğu durumlarda dönen doküman sayısı performans açısından 20 ile sınırlandırılır. |

-----

## Sınıf Tanımalamaları

### InputDocument Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| documentUUID | Dokümanın UUID'sini taşır. |
| xmlContent | Dokümanın içeriğini UBL xml formatında taşır. |
| sourceUrn | Dökümanı gönderen kaynağın adres etiketini taşır. |
| destinationUrn | Dökümanın gideceği hedefin e-posta adresini taşır. |
| localId | Servisi kullanan istemcinin kendi sisteminde tuttuğu ID bilgisidir. Gönderilmesi zorunlu değildir. İsteğe göre bu parametre kullanılarak sorgulama yapılabilir. |
| documentDate | Dokümanın Issue Date değerini taşır. |
| documentid | Dokümanın ID değerini taşır. |

### DocumentQueryResponse Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| queryState | Sorgu sonucuna ait kod bilgisini tutar. Alabileceği değerler ve açıklamaları dokuman sonundaki Hata kodları tablosunda yer almaktadır. |
| stateExplanation | Sorgu sonucuna ait açıklama bilgisini tutar. Alabileceği değerler dokuman sonundaki Hata kodları tablosunda yer almaktadır. |
| documentsCount | Sorgu sonucunda dönen dokuman sayısını taşır. |
| maxRecordIdinList | -Kullanılmıyor- |
| documents | ResponseDocument nesnesi tipinde bir listedir. Sorgu sonucunda dönen dokümanlara ait bilgileri taşır. |

### Creditinfo Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| explanation | İşlem sonucunu ait açıklama bilgisini taşır. |
| code | İşlem sonucuna ait kod değerini taşır. |
| totalCredit | Mükellefin toplam kontör sayısını taşır. |
| remainCredit | Mükellefin kalan kontör sayısını taşır. |

### EntResponse Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| code | İşlem sonucuna ait kod değerini taşır. |
| explanation | İşlem sonucuna ait açıklama değerini taşır. |
| cause | İşlem sonucunda hata oluşmuşsa hatanın nedenini taşır. |
| documentUUID | İlgili dökümanın UUID'sini taşır. |

### LogResponse Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| queryState | Sorgu sonucunda hata oluşup oluşmadığına dair kod bilgisini tutar. |
| stateExplanation | Sorgu sonucunda hata oluşup oluşmadığına dair açıklama bilgisini tutar. |
| logCount | Sorgu sonucunda dönen log sayısını sayısını taşır. |
| invoiceLogs | Sorgu sonucunda dönen logları InvoiceLog listesi içinde tutar. |

### InvoiceLog Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| documentUUID | Dokümanın UUID'sini taşır. |
| envelopeUUID | Dokümanın zarf UUID'sini taşır. |
| processTime | İşlem sonucunun zaman bilgisini taşır. |
| processState | İşlem durumu bilgisiniz taşır. |
| processResult | İşlem durumunun hatalı, başarılı veya tamalanma durumunu tutar. |
| resultExplanation | İşlem durumunun ayrıntılı hata veya açıklama bilgisini tutar. |

### ResponseDocument Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| document\_uuid | Dokümanın UUID'sini taşır. |
| document\_id | Fatura numarası bilgisini taşır. |
| envelope\_uuid | Dokumanların zarflanmasının akabinde oluşturulan zarfın UUID'sini taşır. |
| document\_profile | Dokumana ait senaryo türü bilgisini taşır. Örn: TEMELFATURA vb. |
| system\_creation\_time | Dokumanın entegratör tarafından alındığı zamanı tutar. |
| document\_issue\_date | Dokumanın düzenlenme tarihini tutar. |
| source\_id | Dokumanı gönderenin VKN ya da TCKN'sini taşır. |
| source\_urn | -Kullanılmıyor- |
| source\_title | Dokumanı gönderenin Unvan bilgisini taşır. |
| destination\_id | Dokuman alıcısının VKN ya da TCKN'sini taşır. |
| destination\_urn | Dokuman alıcısının e-posta adresini taşır. |
| state\_code | Dokumanın durumunun kod değerini taşır. |
| state\_explanation | Dokumanın durumunun açıklama değerini taşır. |
| content\_type | Dokumanın içeriğinin türünü taşır. |
| document\_content | Dokuman içeriğini byte dizisi olarak taşır. |
| currency\_code | Dokumanın tutarının para birimi değerini tutar. (Örn: TRY) |
| cause | Dokümanın işlenmesi sırasında bir hata oluşmuşsa, hata nedeni bu alanla geri dönülür. |
| invoice\_total | Dokumanın toplam tutarını taşır. |
| emailSent | Fatura PDF'inin alıcıya gönderilip gönderilmediği bilgisini taşır. |
| emailSentDate | Fatura PDF'inin alıcıya gönderildiği tarihi taşır. |
| cancelled | Fatura'nın iptal edilip edilmediği bilgisini taşır. |
| cancel\_date | Fatura'nın iptal edildiği tarihi taşır. |
| reference\_document\_uuid | -Kullanılmıyor- |
| response\_document\_uuid | -Kullanılmıyor- |
| response\_code | -Kullanılmıyor- |
| response\_validation\_state | -Kullanılmıyor- |
| response\_received\_date | Gönderilen veya gelen faturaya cevap alınmışsa/verilmişse, bu cevabın alındıpı/gönderildiği tarihi taşır. |

### Reportinfo Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| raporNo | İşlenmekte olan rapora ait rapor numarasını taşır. |
| mukellef | Rapor sahibi mükellefin VKN/TCKN bilgisini taşır. |
| donemNo | Raporun dönem numarasını taşır. |
| bolumNo | Raporun bölüm numarasını taşır. |
| raporBaslangicTarihi | Raporun ait olduğu dönemin başlangıç tairihidir. yyyy-MM-dd biçimindedir. |
| raporBitisTarihi | Raporun ait olduğu dönemin bitiş tairihidir. yyyy-MM-dd biçimindedir. |
| state\_code | İşlenmekte olan rapora ait durum kodudur. Bu kodlar şu şekildedir: {120: İmzalanıyor, 130: Şema kontrolü, 150: Zipleniyor, 180: Gelir İdaresi'ne gönderim, 500: Sorgulanıyor/Sonuç bekleniyor.} |
| state\_explanation | İşlenmekte olan rapora ait durum açıklamasıdır. |
| faturaAdedi | Raporun içerdiği fatura adedi sayısıdır. |
| iptalFaturaAdedi | Raporun içerdiği iptal fatura adedi sayısıdır. |
| mmAdedi | Raporun içerdiği müstahsil makbuzu adedi sayısıdır. |
| iptalMMAdedi | Raporun içerdiği iptal edilmiş müstahsil makbuzu adedi sayısıdır. |
| smmAdedi | Raporun içerdiği serbest meslek makbuzu adedi sayısıdır. |
| iptalSMMAdedi | Raporun içerdiği iptal edilmiş serbest meslek makbuzu adedi sayısıdır. |

### ReportRequest Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| mukellef | Raporu gönderilecek mükellefin VKN/TCKN'sini taşır. Zorunlu alandır. |
| donemNo | Gönderilecek rapora ait ay bilgisini taşır. Zorunlu alandır. |
| bolumNo | Gönderilecek rapora ait bölüm bilgisini taşır. Zorunlu alandır. |
| bolumBaslangicTarihi | Gönderilecek bölümün başlangıç tarihidir. Zorunlu alandır. yyyy-MM-dd formatında gönderilmelidir. |
| bolumBitisTarihi | Gönderilecek bölümün bitiş tarihidir. Zorunlu alandır. yyyy-MM-dd formatında gönderilmelidir. |
| xmlContent | Gönderilecek rapor XML'inin byte[] formatında içeriğini taşır. Zorunlu alandır. |

### ReportResponse Sınıfı

| Alan | Açıklama |
| :--- | :--- |
| reports | Sorgu sonucundaki raporları Reportinfo listesi biçiminde taşır. |
| code | İşlem sonucuna ait kod değerini taşır. |
| explanation | İşlem sonucuna ait açıklama değerini taşır. |
| cause | İşlem sonucunda hata oluşmuşsa hatanın nedenini taşır. |

-----

## Hata Kodları ve Açıklamaları

**EntResponse, DocumentQueryResponse Sınıfları için Hata kodları**
| Kod (code, queryState) | Mesaj (explanation, stateExplanation) | Açıklama | Örnek |
| :--- | :--- | :--- | :--- |
| 0 | İşlem başarılı | İşlemin tamamlandığını belirtir. | |
| 99 | İşlem başarısız | İşlemin gerçekleştirilmesi sırasında oluşan hatalar için döndürülür. | Fatura iptali başarısız, kullanıcının dokuman üzerinde yetkisinin bulunmaması |
| 500 | Yetkisiz kullanıcı | Servis metotlarının yetkisiz kişiler tarafından çağırılmaya çalışıldığında oluşur. | Entegratör giriş bilgileri haricindeki bilgilerle servise erişilmeye çalışılması |
| 510 | Yetki kontrolü başarısız | Yetki kontrolü esnasında problem oluşması sonucu oluşur. | |
| 999 | Tanımlanmamış hata | Yukarıda tanımlanmış hatalar haricinde bir hata oluştuğunda döndürülür. | |

**Creditinfo Sınıfı için Hata kodları**
| Kod (code) | Mesaj (explanation) | Açıklama | Örnek |
| :--- | :--- | :--- | :--- |
| 0 | İşlem başarılı | İşlemin tamamlandığını belirtir. | |
| 99 | İşlem başarısız | İşlemin gerçekleştirilmesi sırasında oluşan hatalar için döndürülür. | Verilen VKN/TCKN'ye sahip müşterinin bulunamaması |

-----

## Http Başlığı ekleme ve yetkilendirme örneği

Web Servis'teki metotları çağırabilmek için sistemde kayıtlı bir kullanıcı olunması gerekmektedir. Bu kontrol metoda gönderilen bir HTTP Başlığı ile yapılmaktadır. Bu başlık içerisinde kullanıcı adı ve şifre bilgileri yer almaktadır. İşlem adımları aşağıda anlatıldığı gibidir.

Önce bir EArchiveInvoiceWSClient nesnesi oluşturulur. Bu nesne üzerinden Web Servis'in metotlarına erişilebilir.

Metotlara erişebilmek için eklenecek HTTP başlığı ise aşağıda gösterilen şekilde eklenir.

`prop.Headers.Add(başlık_adı, başlık_değeri);`

Satırı eklenen başlığın adı ve değerini tutar. Aşağıdaki "Username" değeri gönderilen başlığın adı, `username` bu başlığın değeridir. Aynı şekilde "Password" değeri başlık adı, `password` bu başlığın değeridir. Kod içerisinde bu alanlara ait değişkenlerin oluşturulduğuna emin olunuz. Bu alanların gönderilmemesi veya yanlış değer ile gönderilmesi sonucu 500 kodlu Yetkilendirme hatası ile karşılaşılır.

```csharp
EArchiveInvoiceWSClient earsivServisi = new EArchiveInvoiceWSClient();
static void Main(string[] args)
{
    using (var scope = new OperationContextScope(earsivServisi.InnerChannel))
    {
        var prop = new HttpRequestMessageProperty();
        prop.Headers.Add("Username", username); //test kullanıcı
        prop.Headers.Add("Password", password); //test şifresi
        
        OperationContext context = OperationContext.Current;
        context.OutgoingMessageProperties[HttpRequestMessageProperty.Name] = prop;

        // Web Servis metotları burada çağırılmalıdır. Fatura gönderme, Fatura iptal etme vb.
        
        earsivServisi.cancelInvoice(document, ...);
        earsivServisi.sendInvoice(document, ...);
    }
}
```