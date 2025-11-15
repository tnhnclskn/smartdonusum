# SMART DÖNÜŞÜM TEKNOLOJİ A.Ş.
## Entegrasyon Servisleri Dokümanı
### E-Fatura Servisi

---

## Yapılan Değişiklikler

| Tarih | Değişiklik |
| :--- | :--- |
| 08.05.2019 | QueryInvoice WS servisine QueryArchived Inbox Document metodu eklendi. <br> QueryInvoiceWS servisine QueryArchived OutboxDocument metodu eklendi. |
| 23.11.2018 | LoadInvoiceWS servisi eklendi. |
| 05.01.2018 | InvoiceWS servisindeki InputDocument sınıfına documentDate alanı eklendi. <br> InvoiceWS servisindeki InputDocument sınıfına documentid alanı eklendi. |
| 25.10.2017 | QueryInvoiceWS servisine QueryInbox Documents With WithGUIDList metodu eklendi. <br> QueryInvoiceWS servisine QueryOutbox Documents With WithGUIDList metodu eklendi. |
| 01.07.2017 | InvoiceWS servisindeki Response Document sınıfına gtb_reference_no alanı eklendi. <br> InvoiceWS servisindeki Response Document sınıfına gtb_gcb_tescil_no alanı eklendi. <br> InvoiceWS servisindeki Response Document sınıfına gtb_fiili_ihracat_tarihi alanı eklendi. |
| 24.05.2017 | QueryInvoiceWS servisine QueryAppResponseOfOutbox Document metodu eklendi. <br> QueryInvoiceWS servisine QueryAppResponseOfInbox Document metodu eklendi. |
| 12.05.2017 | InvoiceWS servisine updateInvoice metodu eklendi. <br> InvoiceWS servisindeki InputDocument sınıfına localid alanı eklendi. <br> QueryInvoiceWS servisindeki Response Document sınıfına response_received_date alanı eklendi. <br> InvoiceWS servisine getCustomer CreditCount metodu eklendi. <br> InvoiceWS servisine controlInvoiceXML metodu eklendi. <br> InvoiceWS servisine controllApplication ResponseXML metodu eklendi. <br> QueryInvoiceWS servisine QueryOutboxWithLocalld metodu eklendi. <br> InvoiceWS servisinden getCustomerCredit metodu kaldırıldı. |

> Not: Yeni eklenen metot ve alanlar yeşil, kaldırılan ve kullanılmayan alanlar gri renkte gösterilmiştir. Gri renkli alan, metot ve sınıflar dokumanın bir sonraki sürümünde yer almayacaktır.

---

## E-Fatura Servisi

### InvoiceWS
| | |
| :--- | :--- |
| **Servis Adı** | InvoiceWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/InvoiceService/InvoiceWS` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/InvoiceService/Invoice WS?wsdl` |
| **Açıklama** | Mükellef tarafından oluşturulan UBL xml formatındaki fatura ve uygulama yanıtlarının entegratöre iletildiği servistir. Metot açıklamaları aşağıda yer almaktadır. |

#### 1. SendInvoice

| | |
| :--- | :--- |
| **Metot Adı** | sendInvoice |
| **Açıklama** | UBL xml formatında oluşturulan faturaların entegratöre gönderildiği metottur. |
| **Parametreler** | Tipi: InputDocument türünden liste <br> Adı: inputDocumentList |
| **Dönüş değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar sisteme kaydedilir. Gönderilen her bir faturaya ait 'document_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanlan EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Gönderilecek faturanın documentUUID'sini, xml içeriğini, kaynak ve hedef adres etiketlerini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamalan bölümünde açıklanmıştır. |

#### 2. SendApplicationResponse

| | |
| :--- | :--- |
| **Metot Adı** | sendApplicationResponse |
| **Açıklama** | UBL xml formatındaki uygulama yanıtlarının (kabul, ret, iade) entegratöre gönderildiği metottur. |
| **Parametreler** | Tipi: InputDocument türünden liste <br> Adı: inputDocumentList |
| **Dönüş değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği uygulama yanıtlan önce şema kontrolünden geçirilir. Başarılı dokumanlar sisteme kaydedilir. Gönderilen her bir uygulama yanıtına ait 'document_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep) alanları EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Gönderilecek uygulama yanıtının documentUUID'sini, xml içeriğini, kaynak ve hedef adres etiketlerini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

#### 3. GetCustomerCreditCount

| | |
| :--- | :--- |
| **Metot Adı** | getCustomerCreditCount |
| **Açıklama** | VKN/TCKN bilgisi verilen mükellefin Fatura Adedi bilgisini almayı sağlar. Bu bilgi mükellefin şimdiye kadar yüklediği toplam ve an itibariyle kalan E-Fatura ve E-Arşiv fatura adedidir. |
| **Parametreler** | Tipi: String <br> Adı: vkn_tckn |
| **Dönüş değeri** | Creditinfo nesnesi döndürür. Ayrıntılı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Fatura Adedi bilgisi sorgulanacak mükellefin VKN/TCKN bilgisini tutar. |

#### 4. GetCustomerCreditSpace

| | |
| :--- | :--- |
| **Metot Adı** | getCustomerCreditSpace |
| **Açıklama** | VKN/TCKN bilgisi verilen mükellefin Alan Boyutu bilgisini almayı sağlar. Bu bilgi mükellefin şimdiye kadar yüklediği toplam ve an itibariyle kalan E-Defter, E-Defter Saklama alanı boyutunun MB (megabayt) cinsinden ifadesidir. |
| **Parametreler** | Tipi: String <br> Adı: vkn_tckn |
| **Dönüş değeri** | Creditinfo sınıfı döndürür. Ayrıntılı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Alan Boyutu bilgisi sorgulanacak mükellefin VKN/TCKN bilgisini tutar. |

#### 5. ControlInvoiceXML

| | |
| :--- | :--- |
| **Metot Adı** | controlInvoiceXML |
| **Açıklama** | Verilen UBL xml formatındaki fatura dokümanını şema ve şematron kontrollerinden geçirir. |
| **Parametreler** | Tipi: String <br> Adı: invoiceXML |
| **Dönüş değeri** | EntResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre: `invoiceXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | invoiceXML |
| **Parametre Tipi** | String |
| **Açıklama** | Kontrolden geçirilecek olan faturanın UBL xml formatındaki içeriğini tutar. |

#### 6. ControlApplicationResponseXML

| | |
| :--- | :--- |
| **Metot Adı** | controlApplicationResponseXML |
| **Açıklama** | Verilen UBL xml formatındaki uygulama yanıtı dokümanını şema ve şematron kontrollerinden geçirir. |
| **Parametreler** | Tipi: String <br> Adı: applicationResponseXML |
| **Dönüş değeri** | EntResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

**Parametre: `applicationResponseXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | applicationResponseXML |
| **Parametre Tipi** | String |
| **Açıklama** | Kontrolden geçirilecek olan uygulama yanıtının UBL xml formatındaki içeriğini tutar. |

#### 7. GetCustomerGBList

| | |
| :--- | :--- |
| **Metot Adı** | getCustomerGBList |
| **Açıklama** | İsteği gönderen kullanıcıya ait Gönderici Birim etiketleri listesini döndürür. Kullanıcı bilgileri metoda sağlanacak HTTP Başlığı içerisinde yer almaktadır. HTTP Başlığı'nın nasıl ekleneceği hakkında bilgi almak için dokuman sonundaki HTTP Başlığı Ekleme bölümüne başvurunuz. |
| **Parametreler** | Bu metot parametre almamaktadır. |
| **Dönüş değeri** | UserQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

#### 8. GetCustomerPKList

| | |
| :--- | :--- |
| **Metot Adı** | getCustomerPKList |
| **Açıklama** | İsteği gönderen kullanıcıya ait Posta Kutusu etiketleri listesini döndürür. Kullanıcı bilgileri metoda sağlanacak HTTP Başlığı içerisinde yer almaktadır. HTTP Başlığı'nın nasıl ekleneceği hakkında bilgi almak için dokuman sonundaki HTTP Başlığı Ekleme bölümüne başvurunuz. |
| **Parametreler** | Bu metot parametre almamaktadır. |
| **Dönüş değeri** | UserQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamaları bölümünde bulunabilir. |

#### 9. UpdateInvoice

| | |
| :--- | :--- |
| **Metot Adı** | updateInvoice |
| **Açıklama** | İşlenme esnasında hata oluşan faturaların düzenlendikten sonra tekrar yüklenebilmesini sağlayan metottur. Hatalı olmayan fatura güncellenemez. Yani bu metoda gönderilen InputDocument içindeki documentID'nin sistemde var olması ve durumunun hatalı olması gerekmektedir. Aksi takdirde güncellenecek fatura bulunamadı uyarısı verir. |
| **Parametreler** | Tipi: InputDocument türünden liste <br> Adı: inputDocumentList |
| **Dönüş değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar güncellenir. Gönderilen her bir faturaya ait 'document_uuid (ETTN numarası) ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve metottan döndürülecek listeye eklenir. |

**Parametre: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Güncellenecek faturanın document UUID'sini, xml içeriğini, kaynak adres etiketi ve hedef e-posta bilgisini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

#### 10. GetOutboxInvoiceStatusWithLogs

| | |
| :--- | :--- |
| **Metot Adı** | GetOutboxinvoiceStatusWithLogs |
| **Açıklama** | Doküman işlenme geçmişi liste şeklinde dönülür |
| **Parametreler** | Tipi: String listesi <br> Adı: documentUuid |
| **Dönüş değeri** | LogResponse tipinde nesne döndürülür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanlan ile kontrol edilebilir. Eğer sorgu sonucunda fatura işlenme logları bulunursa logCount alanı bulunan log sayısını gösterir. InvoiceLog listesi tipindeki invoiceLogs alanından ise her bir log ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `documentUuid`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentUuid |
| **Parametre Tipi** | String |
| **Açıklama** | Fatura işlenme log kayıtlarının döndürüleceği fatura ettn bilgisini içerir. |

#### 11. setDocumentFlag

| | |
| :--- | :--- |
| **Metot Adı** | setDocumentFlag |
| **Açıklama** | Dokümana ait belli işaretlemelerin yapılmasını sağlayan metottur. |
| **Parametreler** | Tipi: FlagSetter nesnesi <br> Adı: flagSetter |
| **Dönüş değeri** | EntResponse nesnesi döndürür. İşlem sonucu bu nesneye ait 'code (kod)', 'explanation (açıklama) alanlarında yer alır. |

**Parametre: `flagSetter`**
| | |
| :--- | :--- |
| **Parametre Adı** | flagSetter |
| **Parametre Tipi** | FlagSetter nesnesi |
| **Açıklama** | Doküman işaretleme bilgisini tutan sınıftır. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamalan bölümünde bulunabilir. |

#### 12. cancelInvoice

| | |
| :--- | :--- |
| **Metot Adı** | cancelinvoice |
| **Açıklama** | Doküman entegratör tarafınan işleniyor durumundaki faturaların işlenmesini durdurmayı sağlayan metottur. |
| **Parametreler** | Tipi: String <br> Adı: invoiceUUID |
| **Dönüş değeri** | EntResponse nesnesi döndürür. İşlem sonucu bu nesneye ait 'code (kod)', 'explanation (açıklama) alanlarında yer alır. |

**Parametre: `invoiceUUID`**
| | |
| :--- | :--- |
| **Parametre Adı** | invoiceUUID |
| **Parametre Tipi** | String |
| **Açıklama** | İşlenişi durdurulmak istenen belgenin UUID bilgisini taşır. |

---

## E-Fatura Sorgulama Servisi

### QueryDocumentWS
| | |
| :--- | :--- |
| **Servis Adı** | QueryDocumentWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/QueryInvoiceService/QueryDocumentWS` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/QueryInvoiceService/QueryDocumentWS?wsdl` |
| **Açıklama** | UBL xml yapısındaki Fatura ve/veya uygulama yanıtının entegratöre gönderilmesini sağlayan servistir. |

#### 1. QueryUsers

| | |
| :--- | :--- |
| **Metot Adı** | QueryUsers |
| **Açıklama** | E-fatura mükellefi olarak GİB'e kayıtlı kullanıcı bilgilerini sorgulamada kullanılır. |
| **Parametreler** | Tipi: String, Adı: startDate <br> Tipi: String, Adı: finishDate <br> Tipi: String, Adı: vkn_tckn |
| **Dönüş değeri** | UserQueryResponse nesnesi döndürür. Sorgulama sonucu ve sonuç açıklaması ile beraber sorgu kriterlerine uyan kullanıcıları ResponseUser tipinde bir liste olarak döndürür. |

**Parametre: `startDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | startDate |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulama başlangıç tarihi. Kullanıcının GİB'e ilk kayıt edildiği veya kaydının güncellendiği tarihler üzerinde yapılacak sorgunun başlangıç sınırını belirtir. (yyyy-MM-dd) formatında String değeri alır. Boş bırakılması durumunda başlangıç tarihi sorguda dikkate alınmaz. |

**Parametre: `finishDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | finishDate |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulama bitiş tarihi. Kullanıcının GİB'e ilk kayıt edildiği veya kaydının güncellendiği tarihler üzerinde yapılacak sorgunun bitiş sınırını belirtir. (yyyy-MM-dd) formatında String değeri alır. Boş bırakılması durumunda bitiş tarihi sorguda dikkate alınmaz. |

**Parametre: `vkn_tckn`**
| | |
| :--- | :--- |
| **Parametre Adı** | vkn_tckn |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulanacak kullanıcının 10 haneli vergi kimlik numarası veya 11 haneli TC kimlik numarasını taşır. |

#### 2. GetLastInvoiceldAndDate

| | |
| :--- | :--- |
| **Metot Adı** | GetLastInvoiceldAndDate |
| **Açıklama** | Mükellefin entegratöre gönderdiği faturalar arasından aynı '3 haneli fatura serisi' bilgisine sahip en yüksek numaralı faturanın düzenleme tarihi ve fatura no'sunu döndürür. |
| **Parametreler** | Tipi: String, Adı: source_id <br> Tipi: String listesi, Adı: documentldPrefix |
| **Dönüş değeri** | Response Document nesnesi döndürür. Bu nesne içerisinde yer alan document_id ve issue_date değerleri en yüksek numaralı faturanın 'fatura no' ve 'düzenleme tarihi' bilgisidir. |

**Parametre: `source_id`**
| | |
| :--- | :--- |
| **Parametre Adı** | source_id |
| **Parametre Tipi** | String |
| **Açıklama** | Faturayı gönderecek mükellefin 10 haneli vergi kimlik numarası veya 11 haneli TC kimlik numarası. |

**Parametre: `documentIdPrefix`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentidPrefix |
| **Parametre Tipi** | String listesi |
| **Açıklama** | Faturaların üç haneli seri numaralarını içeren liste. Örnek: {"ABC","DEF","XYZ"} |

#### 3. QueryOutboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryOutboxDocument |
| **Açıklama** | Gönderilen fatura ve uygulama yanıtlarının durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanlan ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID", "Envelope_UUID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandınlır. |

#### 4. QueryOutboxDocumentWithDocumentDate

| | |
| :--- | :--- |
| **Metot Adı** | QueryOutboxDocumentWithDocumentDate |
| **Açıklama** | Mükellefin giden kutusunda verilen tarih aralığında gönderilen fatura ve uygulama yanıtlarının durumunu fatura tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: startDate <br> Tipi: String, Adı: endDate <br> Tipi: String, Adı: documentType <br> Tipi: String, Adı: queried <br> Tipi: String, Adı: withXML <br> Tipi: String, Adı: minRecordid |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamalan bölümünde bulunabilir. |

**Parametre: `startDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | startDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |

**Parametre: `endDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | endDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokuman türünün fatura ya da uygulama yanıtı olup olmadığını belirtir. {1,2} değerlerinden birini alır. [1:Fatura, 2:Uygulama yanıtı] |

**Parametre: `queried`**
| | |
| :--- | :--- |
| **Parametre Adı** | queried |
| **Parametre Tipi** | String |
| **Açıklama** | Gönderilen dokumanın durumunun entegratörden daha önce sorgulanıp sorgulanmadığını belirten değişkendir. {"YES","NO","ALL"} değerlerinden birini alır. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

**Parametre: `minRecordid`**
| | |
| :--- | :--- |
| **Parametre Adı** | minRecordid |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecek dokümanların en düşük numaralı kayıt no sunu tutar. |

#### 5. QueryOutboxDocumentWithReceivedDate

| | |
| :--- | :--- |
| **Metot Adı** | QueryOutboxDocumentWithReceivedDate |
| **Açıklama** | Mükellefin giden kutusunda verilen tarih aralığında gönderilen fatura ve uygulama yanıtlarının durumunu sistem tarafından alınma tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: startDate <br> Tipi: String, Adı: endDate <br> Tipi: String, Adı: documentType <br> Tipi: String, Adı: queried <br> Tipi: String, Adı: withXML <br> Tipi: String, Adı: minRecordld |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre: `startDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | startDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |

**Parametre: `endDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | endDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokuman türünün fatura ya da uygulama yanıtı olup olmadığını belirtir. {1,2} değerlerinden birini alır. [1:Fatura, 2:Uygulama yanıtı] |

**Parametre: `queried`**
| | |
| :--- | :--- |
| **Parametre Adı** | queried |
| **Parametre Tipi** | String |
| **Açıklama** | Gönderilen dokumanın durumunun entegratörden daha önce sorgulanıp sorgulanmadığını belirten değişkendir. {"YES","NO","ALL"} değerlerinden birini alır. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

**Parametre: `minRecordid`**
| | |
| :--- | :--- |
| **Parametre Adı** | minRecordid |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecek dokümanların en düşük numaralı kayıt no sunu tutar. |

#### 6. QueryOutboxDocumentWithLocalld

| | |
| :--- | :--- |
| **Metot Adı** | QueryOutboxDocumentWithLocalld |
| **Açıklama** | İstemci yazılım tarafından gönderilen dokümanları, istemci sistemindeki localld bilgisi ile sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String <br> Adı: localld |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre: `localid`**
| | |
| :--- | :--- |
| **Parametre Adı** | localid |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın, gönderici sisteminde kayıtlı olduğu localld bilgisi. Sorgulamanın başarıyla sonuçlanması için localld bilgisinin fatura gönderimi esnasında InputDocument nesnesi içerisinde sağlanması gerekmektedir. |

#### 7. QueryOutboxDocumentsWithGUIDList

| | |
| :--- | :--- |
| **Metot Adı** | QueryOufboxDocumentsWithGUIDList |
| **Açıklama** | Gönderilen dokumanları 36 haneli UUID numarası ile sorgulamak için kullanılır. Sorgulanacak dokumanlara ait UUID leri liste olarak alır ve liste halinde sonucu döndürür. |
| **Parametreler** | Tipi: String listesi, Adı: guidList <br> Tipi: String, Adı: documentType |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki ResponseDocument tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre: `guidList`**
| | |
| :--- | :--- |
| **Parametre Adı** | guidlist |
| **Parametre Tipi** | String listesi |
| **Açıklama** | Sorgulanacak dokumanlara ait UUID listesini belirtir. 36 haneli GUID formatında dizeler içeren bir listedir. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulanan dokuman türünün fatura veya uygulama yanıtı olduğu bilgisini tutar. { 1:Fatura, 2:Uygulama Yanıtı} değerlerinden birini alır. |

#### 8. QueryInboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryInboxDocument |
| **Açıklama** | Alınan fatura ve uygulama yanıtlarının durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanları ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID", "Envelope_UUID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

#### 9. QueryInboxDocumentWithDocumentDate

| | |
| :--- | :--- |
| **Metot Adı** | QueryInboxDocumentWithDocumentDate |
| **Açıklama** | Mükellefin gelen kutusunda verilen tarih aralığında alınan fatura ve uygulama yanıtlarının durumunu fatura tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: startDate <br> Tipi: String, Adı: endDate <br> Tipi: String, Adı: documentType <br> Tipi: String, Adı: queried <br> Tipi: String, Adı: withXML <br> Tipi: String, Adı: takenFromEntegrator <br> Tipi: String, Adı: minRecordid |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sınıf hakkında detaylı bilgi dokümantasyon sonundaki Sınıf Tanımlamalan bölümünde bulunabilir. |

**Parametre: `startDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | startDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |

**Parametre: `endDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | endDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokuman türünün fatura ya da uygulama yanıtı olup olmadığını belirtir. {1,2} değerlerinden birini alır. [1:Fatura, 2:Uygulama yanıtı] |

**Parametre: `queried`**
| | |
| :--- | :--- |
| **Parametre Adı** | queried |
| **Parametre Tipi** | String |
| **Açıklama** | Alınan dokumanın durumunun entegratörden daha önce sorgulanıp sorgulanmadığını belirten değişkendir. {"YES","NO","ALL"} değerlerinden birini alır. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandınlır. |

**Parametre: `takenFromEntegrator`**
| | |
| :--- | :--- |
| **Parametre Adı** | takenFromEntegrator |
| **Parametre Tipi** | String |
| **Açıklama** | Entegratörden sorgulanan dökümanın lokalde kaydedilip kaydedilmediğini tutar. {"YES","NO","ALL"} değerlerinden birini alır |

**Parametre: `minRecordId`**
| | |
| :--- | :--- |
| **Parametre Adı** | minRecordId |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecek dokümanların en düşük numaralı kayıt no sunu tutar. |

#### 10. QueryInboxDocumentWithReceivedDate

| | |
| :--- | :--- |
| **Metot Adı** | QueryInboxDocumentWithReceivedDate |
| **Açıklama** | Mükellefin gelen kutusunda verilen tarih aralığında alınan fatura ve uygulama yanıtlarının durumunu sistem tarafından alınma tarihine göre sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: startDate <br> Tipi: String, Adı: endDate <br> Tipi: String, Adı: documentType <br> Tipi: String, Adı: queried <br> Tipi: String, Adı: withXML <br> Tipi: String, Adı: takenFromEntegrator <br> Tipi: String, Adı: minRecordId |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. |

**Parametre: `startDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | startDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu başlangıç tarihini tutar. |

**Parametre: `endDate`**
| | |
| :--- | :--- |
| **Parametre Adı** | endDate |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın düzenlenme tarihine göre sorgulanacak faturaların sorgu bitiş tarihini tutar. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokuman türünün fatura ya da uygulama yanıtı olup olmadığını belirtir. {1,2} değerlerinden birini alır. [1:Fatura, 2:Uygulama yanıtı] |

**Parametre: `queried`**
| | |
| :--- | :--- |
| **Parametre Adı** | queried |
| **Parametre Tipi** | String |
| **Açıklama** | Alınan dokumanın durumunun entegratörden daha önce sorgulanıp sorgulanmadığını belirten değişkendir. {"YES","NO","ALL"} değerlerinden birini alır. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandınlır. |

**Parametre: `takenFromEntegrator`**
| | |
| :--- | :--- |
| **Parametre Adı** | takenFromEntegrator |
| **Parametre Tipi** | String |
| **Açıklama** | Entegratörden sorgulanan dökümanın lokalde kaydedilip kaydedilmediğini tutar. {"YES","NO","ALL"} değerlerinden birini alır |

**Parametre: `minRecordid`**
| | |
| :--- | :--- |
| **Parametre Adı** | minRecordid |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecek dokümanların en düşük numaralı kayıt no sunu tutar. |

#### 11. QueryInboxDocumentsWithGUIDList

| | |
| :--- | :--- |
| **Metot Adı** | QueryinboxDocumentsWithGUIDList |
| **Açıklama** | Gelen dokumanları 36 haneli UUID numarası ile sorgulamak için kullanılır. Sorgulanacak dokumanlara ait UUID leri liste olarak alır ve liste halinde sonucu döndürür. |
| **Parametreler** | Tipi: String listesi, Adı: guidList <br> Tipi: String, Adı: documentType |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki Response Document tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre: `guidList`**
| | |
| :--- | :--- |
| **Parametre Adı** | guidList |
| **Parametre Tipi** | String listesi |
| **Açıklama** | Sorgulanacak dokumanlara ait UUID listesini belirtir. 36 haneli GUID formatında dizeler içeren bir listedir. |

**Parametre: `documentType`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentType |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulanan doküman türünün fatura veya uygulama yanıtı olduğu bilgisini tutar. { 1,2} değerlerinden birini alır. |

#### 12. SetTakenFromEntegrator

| | |
| :--- | :--- |
| **Metot Adı** | SetTakenFromEntegrator |
| **Açıklama** | Verilem dokuman UUID'leri için entregratör tarafından lokale kaydedildi bilgisini işaretler. |
| **Parametreler** | Tipi: String listesi <br> Adı: documentUuid |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. İşlem sırasında herhangi bir hata oluşmamışsa "queryState" '0' olarak atanır. Bir hata oluşmuşsa, "queryState" '99' olarak atanır. Burada dikkat edilmesi gereken durum "queryState" değerinin sorgulama sonucunu değil sorgulama durumunu gösterdiğidir. Eğer gönderilen "documentUUID" ler sistemde mevcutsa ve o uuid 'ye ait dokumanın lokale kaydedildiği bilgisi başarıyla güncellennmişse "documentUUID", "response" nesnesi içindeki Response Document listesine eklenir. Eğer gelen UUID sistemde yoksa dönüş listesine eklenmez. Bu nedenle sorgu durumunun başarılı olmasının yanı sıra "documentCount" değerinin ve "response" nesnesindeki documentUUID listesinin kontrol edilmesinde fayda vardır. |

**Parametre: `documentUuid`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentUuid |
| **Parametre Tipi** | String listesi |
| **Açıklama** | Kaydedildi bilgisinin atanacağı dokümanların UUID listesini tutar. |

#### 13. QueryAppResponseOfOutboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryAppResponseOfOutboxDocument |
| **Açıklama** | Gönderilen faturanın UUID si ile XML içeriğin istenip istenmediği bilgisini alır ve bu faturaya ait gelen uygulama yanıtları varsa onları liste halinde döner. |
| **Parametreler** | Tipi: String, Adı: documentUUID <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki Response Document tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre: `documentUUID`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentUUID |
| **Parametre Tipi** | String |
| **Açıklama** | Uygulama yanıtları sorgulanacak faturanın UUID bilgisini taşır. 36 haneli GUID formatında bir dizedir. Zorunludur. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen Document QueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

#### 14. QueryAppResponseOfInboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryAppResponseOfInboxDocument |
| **Açıklama** | Gelen faturanın UUID si ile XML içeriğin istenip istenmediği bilgisini alır ve bu faturaya ait gönderilen uygulama yanıtları varsa onları liste halinde döner. |
| **Parametreler** | Tipi: String, Adı: documentUUID <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgu sonucundaki dokumanlar bu sınıf içerisindeki Response Document tipindeki documents alanı içerisinde bulunabilir. Sınıflar hakkında detaylı bilgi için dokuman sonundaki Sınıf Tanımlamaları bölümüne başvurunuz. |

**Parametre: `documentUUID`**
| | |
| :--- | :--- |
| **Parametre Adı** | documentUUID |
| **Parametre Tipi** | String |
| **Açıklama** | Uygulama yanıtları sorgulanacak faturanın UUID bilgisini taşır. 36 haneli GUID formatında bir dizedir. Zorunludur. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML" , "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

#### 15. QueryEnvelope

| | |
| :--- | :--- |
| **Metot Adı** | QueryEnvelope |
| **Açıklama** | Herhangi bir dokümana ait Zarf UUID sini Gelir İdaresi Başkanlığı'ndan sorgulamak için kullanılır |
| **Parametreler** | Tipi: String <br> Adı: envelopeUUID |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Zarfın GİB'deki durumu 'queryState' alanında, açıklaması da 'stateExplanation' alanında yer alır. Bir hata halinde veya zarfın GİB'de bulunamaması durumunda queryState $=999$ değerini alırken stateExplanation alanında GİB'in verdiği başarısız cevabı veya oluşan hatanın açıklaması yer alır. |

**Parametre: `envelopeUUID`**
| | |
| :--- | :--- |
| **Parametre Adı** | envelopeUUID |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgulanacak zarfa ait UUID bilgisini belirtir. 36 haneli GUID formatında girilmelidir. |

#### 16. QueryArchivedOutboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryArchivedOutboxDocument |
| **Açıklama** | Mevcut yıldan önceki yıllarda gönderilmiş fatura ve uygulama yanıtlarının durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML <br> Tipi: int, Adı: fiscalYear |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanlan ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID", "Envelope_UUID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

**Parametre: `fiscalYear`**
| | |
| :--- | :--- |
| **Parametre Adı** | fiscalYear |
| **Parametre Tipi** | int |
| **Açıklama** | Sorgulanacak faturanın ait olduğu yılı belirtir. |

#### 17. QueryArchivedInboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryArchivedInboxDocument |
| **Açıklama** | Mevcut yıldan önceki yıllarda gelmiş fatura ve uygulama yanıtlarının durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML <br> Tipi: int, Adı: fiscalYear |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanlan ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası veya Zarf UUID'si bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID", "Envelope_UUID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda döndürülecekse dokumanın XML, PDF veya HTML içeriğinin istenilip istenilmediğin belirtildiği parametredir. {"XML", "PDF", "HTML", "NONE"} değerleri alır. "NONE" herhangi bir içerik döndürmez, diğer seçeneklerde ise içeriğin bayt değerine sorgu sonucunda dönen DocumentQueryResponse nesnesi içerisindeki documents listesinde yer alan Response Document nesnelerindeki 'content' alanından ulaşılabilir. Bu alanın "NONE" olmadığı durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

**Parametre: `fiscalYear`**
| | |
| :--- | :--- |
| **Parametre Adı** | fiscalYear |
| **Parametre Tipi** | int |
| **Açıklama** | Sorgulanacak faturanın ait olduğu yılı belirtir. |

---

## E-Fatura Yükleme Servisi

### LoadInvoiceWS
| | |
| :--- | :--- |
| **Servis Adı** | LoadInvoiceWS |
| **Endpoint Adresi** | `https://servis.smartdonusum.com/InvoiceLoadingService` |
| **WSDL Adresi** | `https://servis.smartdonusum.com/InvoiceLoadingService/LoadInvoiceWS?wsdl` |
| **Açıklama** | Mükellefe ait UBL xml formatındaki imzalı faturaların saklanmak üzere entegratöre iletildiği servistir. Metot açıklamaları aşağıda yer almaktadır. |

#### 1. LoadOutboxInvoice

| | |
| :--- | :--- |
| **Metot Adı** | LoadOutboxinvoice |
| **Açıklama** | Mükellefe ait Giden Faturaların yüklendiği metottur. |
| **Parametreler** | Tipi: InputDocument türünden liste <br> Adı: inputDocumentList |
| **Dönüş değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar sisteme kaydedilir. Gönderilen her bir faturaya ait 'document_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başansız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Her bir InputDocument nesnesi yüklenecek faturanın documentUUID'sini ve XML içeriğini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

#### 2. LoadInboxInvoice

| | |
| :--- | :--- |
| **Metot Adı** | LoadinboxInvoice |
| **Açıklama** | Mükellefe ait Gelen Faturaların yüklendiği metottur. |
| **Parametreler** | Tipi: InputDocument türünden liste <br> Adı: inputDocumentList |
| **Dönüş değeri** | EntResponse nesnesi türünde bir liste döndürür. Gönderilen inputDocumentList parametresinin içerdiği faturalar önce şema kontrolünden geçirilir. Başarılı faturalar sisteme kaydedilir. Gönderilen her bir faturaya ait 'document_uuid (ETTN numarası)' ve işlem sonucuna ait 'code (kod)', 'explanation (açıklama)', işlem başarısız ise 'cause (sebep)' alanları EntResponse nesnesi olarak oluşturulur ve mettotan döndürülecek listeye eklenir. |

**Parametre: `inputDocumentList`**
| | |
| :--- | :--- |
| **Parametre Adı** | inputDocumentList |
| **Parametre Tipi** | InputDocument nesnesi türünden liste |
| **Açıklama** | Her bir InputDocument nesnesi yüklenecek faturanın documentUUID'sini ve XML içeriğini taşır. Nesne yapısı ve özellikleri dökümanın sonundaki Sınıf Tanımlamaları bölümünde açıklanmıştır. |

#### 3. QueryOutboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryOutboxDocument |
| **Açıklama** | Yüklenen Giden Faturaların durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanlan ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda dokümanın XML içeriğinin istenilip istenilmediğinin belirtildiği parametredir. {"YES","NO"} değerleri alır. Bu alanın "YES" olduğu durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

#### 4. QueryInboxDocument

| | |
| :--- | :--- |
| **Metot Adı** | QueryInboxDocument |
| **Açıklama** | Yüklenen Gelen Faturaların durumunu sorgulamak amacıyla kullanılır. |
| **Parametreler** | Tipi: String, Adı: paramType <br> Tipi: String, Adı: parameter <br> Tipi: String, Adı: withXML |
| **Dönüş değeri** | DocumentQueryResponse nesnesi döndürür. Sorgunun sonucu ve açıklaması bu sınıf içerisindeki queryState ve stateExplanation alanları ile kontrol edilebilir. Eğer sorgu sonucunda dokuman(lar) bulunursa documentCount alanı bulunan dokuman sayısını gösterir. Response Document listesi tipindeki documents alanından ise her bir dokuman ile ilgili detaylı bilgiye ulaşılabilir. |

**Parametre: `paramType`**
| | |
| :--- | :--- |
| **Parametre Adı** | paramType |
| **Parametre Tipi** | String |
| **Açıklama** | Dokumanın sorgulanacağı parametre tipini tutar. Fatura UUID'si, Fatura Numarası bilgilerinden herhangi birisi ile sorgulama yapılabilir. {"Document_UUID", "Document_ID"} değerlerinden birini alır. |

**Parametre: `parameter`**
| | |
| :--- | :--- |
| **Parametre Adı** | parameter |
| **Parametre Tipi** | String |
| **Açıklama** | paramType ile belirtilen parametrenin değerini tutar. |

**Parametre: `withXML`**
| | |
| :--- | :--- |
| **Parametre Adı** | withXML |
| **Parametre Tipi** | String |
| **Açıklama** | Sorgu sonucunda dokümanın XML İçeriğinin istenilip istenilmediğinin belirtildiği parametredir. {"YES","NO"} değerleri alır. Bu alanın "YES" olduğu durumlarda dönen dokuman sayısı performans açısından 20 ile sınırlandırılır. |

---

## Sınıf tanımlamaları

### InputDocument Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| documentUUID | Dokümanın UUID'sini taşır. |
| xmlContent | Dokümanın UBL XML formatındaki içeriğini taşır. |
| sourceUrn | Dökümanı gönderen kaynağın adres etiketini taşır. |
| destinationUrn | Dökümanın gideceği hedefin adres etiketini taşır. |
| localid | Servisi kullanan istemcinin kendi sisteminde tuttuğu ID bilgisidir. Gönderilmesi zorunlu değildir. İsteğe göre bu parametre kullanılarak sorgulama yapılabilir. |
| documentDate | Dokümanın Issue Date değerini taşır. |
| documentid | Dokümanın ID değerini taşır. |

### EntResponse Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| documentUUID | Dokümanın UUID'sini taşır. |
| code | İşlem sonucuna ait kod değerini taşır. |
| explanation | İşlem sonucuna ait açıklama değerini taşır. |
| cause | İşlem sonucunda hata oluşmuşsa hatanın nedenini taşır. |

### UserQueryResponse Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| documentUUID | Dokümanın UUID'sini taşır. |
| code | İşlem sonucuna ait kod değerini taşır. |
| explanation | İşlem sonucuna ait açıklama değerini taşır. |
| cause | İşlem sonucunda hata oluşmuşsa hatanın nedenini taşır. |

### ResponseUser Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| vkn_tckn | E-Fatura kullanıcısının GİB'e kayıtlı VKN veya TCKN'sini taşır. |
| unvan_ad | E-Fatura kullanıcısının GİB'e kayıtlı Unvan veya Ad-Soyad bilgisini taşır. |
| etiket | E-Fatura kullanıcısının GİB'e kayıtlı etiket bilgisini taşır. |
| tip | E-Fatura kullanıcısının GİB'e kayıtlı tip bilgisini taşır. |
| ilkKayitZamani | E-Fatura kullanıcısının GİB'e kayıtlı ilk kayıt zamanı bilgisini taşır. |
| etiketKayitZamanı | E-Fatura kullanıcısının GİB'e kayıtlı etiket kayıt zamanı bilgisini taşır. |

### FlagSetter Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| document_direction | Dokümanın gelen veya giden kutusunda aranmasını sağlar. {'GIDEN', 'GELEN'} değerlerinden birini alır. |
| flag_name | Doküman üzerinde yapılacak işaretleme işleminin türünü tutar. {'ARSIVLENDI','OKUNDU', 'MUHASEBELESTIRILDI','AKTARILDI','YAZDIRILDI'} değerlerinden birini almalıdır. |
| flag_value | Dokümanın işaretleme değerini tutar. {0,1} değerlerinden birini almalıdır. |
| document_uuid | İşaretlenecek dokümanın UUID sini taşır. |

### TaxInfo Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| taxtTypeCode | Verginin kod bilgisini taşır. |
| taxtTypeName | Verginin adını taşır. |
| taxAmount | Vergi tutarını taşır. |
| taxPercentage | Vergi yüzdesini taşır. |

### DocumentInfo Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| documentDate | Dokümana ait tarih bilgisini taşır. |
| documentNo | Doküman numarasını taşır. |

### CreditAction Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| purchaseDate | Kredi yüklemesine ait satın alma tarihini taşır. |
| purchase_count | Yapılan toplam kredi yüklemesi miktarını taşır. |
| consideredCount | Yapılan kredi toplamları arasından son kullanım tarihi geçenler düşüldüğünde kalan miktarı taşır. |
| credit_unit | Kredi yüklemesinin türünü belirtir. {1:Kontör, 2: MB) |
| credit_pool_id | Mükellefin içinde bulunduğu kredi havuzunun tekil tanımlayıcısıdır. |
| buyer_VKN_TCKN | Kredi yüklemesini yapan müşterinin VKN/TCKN bilgisidir. |
| action_type | CreditActionTypes enum türüne ait işlem türüdür. |

### DocumentQueryResponse Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| queryState | Sorgu sonucunda hata oluşup oluşmadığına dair kod bilgisini tutar. |
| stateExplanation | Sorgu sonucunda hata oluşup oluşmadığına dair açıklama bilgisini tutar. |
| maxRecordidinList | Dokuman listesi içerisindeki en yüksek kayıt no'lu dokumanın kayıt no'sunu tutar. |
| documentsCount | Sorgu sonucunda dönen dokuman sayısını sayısını taşır. |
| documents | Sorgu sonucunda dönen dokümanları Response Document listesi içinde tutar. |

### ResponseDocument Sınıfı
| Özellik | Açıklama |
| :--- | :--- |
| document_uuid | Dokümanın UUID'sini taşır. |
| document_id | Fatura için fatura numarası, uygulama yanıtı için ise UUID formatında eşsiz id değerini taşır. |
| envelope_uuid | Dokumanların zarflanmasının akabinde oluşturulan zarfın UUID'sini taşır. |
| document_profile | Dokumana ait senaryo türü bilgisini taşır. Örn: TEMELFATURA, TICARIFATURA vb. |
| system_creation_time | Dokumanın entegratör tarafından alındığı zamanı tutar. |
| document_issue_date | Dokumanın düzenlenme tarihini tutar. |
| source_id | Dokumanı gönderenin VKN ya da TCKN'sini taşır. |
| source_urn | Dokumanı gönderenin VKN ya da TCKN'sini taşır. |
| source_title | Dokumanı gönderenin Unvan bilgisini taşır. |
| destination_id | Dokuman alıcısının VKN ya da TCKN'sini taşır. |
| destination_urn | Dokuman alıcısının adres etiketini taşır. |
| state_code | Dokumanın durumunun kod değerini taşır. |
| state_explanation | Dokumanın durumunun açıklama değerini taşır. |
| content_type | Dokumanın içeriğinin türünü taşır. |
| document_content | Dokuman içeriğini byte dizisi olarak taşır. |
| currency_code | Dokumanın tutarının para birimi değerini tutar. (Örn: TRY) |
| cause | Dokümanın işlenmesi sırasında bir hata oluşmuşsa, hata nedeni bu alanla geri dönülür. |
| invoice_total | Dokumanın toplam tutarını taşır. |
| emailSent | -Kullanılmıyor- |
| emailSentDate | -Kullanılmıyor- |
| cancelled | -Kullanılmıyor- |
| cancel_date | -Kullanılmıyor- |
| reference_document_uuid | Mükellefe gelen uygulama yanıtlarında cevap verilen dokumana ait UUID bilgisini taşır. |
| response_document_uuid | Mükellef tarafından gönderilen uygulama yanıtlarında cevap verilen dokumana ait UUID bilgisini taşır. |
| response_code | Gönderilen uygulama yanıtlarının RED ya da KABUL bilgisini tutar. {KABUL, RED değerlerinden birini alır. |
| response_validation_state | Gönderilen uygulama yanıtlarının GİB yönergelerine göre geçerlilik durumunu taşır. |
| response_received_date | Gönderilen veya gelen faturaya cevap alınmışsa/verilmişse, bu cevabın alındıpı/gönderildiği tarihi taşır. |
| gtb_reference_no | Sorgulanan ihracat faturalarına ait 23 haneli GTB Referans Numarasını taşır. |
| gtb_gcb_tescil_no | Sorgulanan ihracat faturasına ait GÇB Tescil Numarasını taşır. |
| gtb_fiili_ihracat_tarihi | Sorgulanan ihracat faturasına ait Fiili İhracat Tarihini taşır. |
| document_type_code | Faturanın türünü (SATIS, IADE, TEVKIFAT, OZELMATRAH, ISTISNA, IHRACKAYITLI, SGK) taşır. |
| notes | Doküman içeriğindeki notları String listesi halinde taşır. |
| despatchinfo | Doküman içeriğindeki İrsaliye Bilgilerini taşır. |
| orderinfo | Doküman içeriğindeki Sipariş Bilgilerini taşır. |
| taxinfo | Doküman içeriğindeki Vergi Bilgilerini taşır. |
| taxInclusiveAmount | Faturaya ait vergiler dahil toplam fiyatı taşır. |
| taxExlusiveAmount | Faturaya ait vergisiz toplam fiyatı taşır. |
| allowanceTotalAmount | Faturaya ait vergisiz toplam fiyatı taşır. |
| taxAmount0015 | Faturaya ait toplam KDV bilgisini taşır. |
| lineExtensionAmount | Faturaya ait ürün/hizmet kalemleri toplam fiyatını taşır. |
| suplierPersonName | Göndericinin Özel Kişi olması halinde Kişi Adı bilgisini taşır. |
| supplierPersonMiddleName | Göndericinin Özel Kişi olması halinde Kişi Orta Adı bilgisini taşır. |
| supplierPersonFamilyName | Göndericinin Özel Kişi olması halinde Kişi Soyadı bilgisini taşır. |
| customerPersonName | Alıcının Özel Kişi olması halinde Kişi Adı bilgisini taşır. |
| customerPersonMiddleName | Alıcının Özel Kişi olması halinde Kişi Orta Adı bilgisini taşır. |
| customerPersonFamilyName | Alıcının Özel Kişi olması halinde Kişi Soyadı bilgisini taşır. |
| is_read | Dokümana ait Okundu bilgisidir. {0,1} değerlerinden birini alır. |
| is_archieved | Dokümana ait Arşivlendi bilgisidir. {0,1} değerlerinden birini alır. |
| is_accounted | Dokümana ait Muhasebeleştirildi bilgisidir. {0,1} değerlerinden birini alır. |
| is_transferred | Dokümana ait Aktarıldı bilgisidir. {0,1} değerlerinden birini alır. |
| is_printed | Dokümana ait Yazdırıldı bilgisidir. {0,1} değerlerinden birini alır. |
| local_id | İstemci sisteminde dokümana karşılık gelen kayıt numarası bilgisidir. Bu alan belge gönderim esnasında belirlenir. Gönderilmesi zorunlu değildir. |
| sendingType | -Kullanılmıyor- |
| buyer_customer_party_name | -Kullanılmıyor- |
| buyer_customer_person_name | -Kullanılmıyor- |
| buyer_customer_person_familyname | -Kullanılmıyor- |

### CreditActionTypes Enum Sınıfı
* **BASLAMA**: Yeni kayıt yapılması durumunda eklenen kredi türüdür.
* **SATINALMA**: Satın alma durumunda eklenen kredi türüdür.
* **DEVIR_GIRIS**: Kredi Devri yapılan tarafın devredilen tarafta olması durumunda kullanılan kredi türüdür.
* **HEDIYE**: Hediye edilen krediler için kullanılan kredi türüdür.
* **DEVIR_CIKIS**: Kredi Devri yapılan tarafın devreden tarafta olması durumunda kullanılan kredi türüdür.
* **TRANSFER**: Farklı bir sistemden transfer edilen krediler için kullanılan kredi türüdür.

---

## Hata Kodları ve Açıklamaları

### EntResponse, DocumentQueryResponse ve UserQueryResponse Sınıfları için Hata kodları
| Kod | Mesaj | Açıklama | Örnek |
| :--- | :--- | :--- | :--- |
| 0 | İşlem başarılı | İşlemin tamamlandığını belirtir. | |
| 99 | İşlem başarısız | İşlemin gerçekleştirilmesi sırasında oluşan hatalar için döndürülür. | Fatura gönderimi başarısız, kullanıcının etiket üzerinde yetkisinin bulunmaması... |
| 500 | Yetkisiz kullanıcı | Servis metotlarının yetkisiz kişiler tarafından çağırılmaya çalışıldığında oluşur. | Entegratör giriş bilgileri haricindeki bilgilerle servise erişilmeye çalışılması |
| 510 | Yetki kontrolü başarısız | Yetki kontrolü esnasında problem oluşması sonucu oluşur. | |
| 999 | Tanımlanmamış hata | Yukarıda tanımlanmış hatalar haricinde bir hata oluştuğunda döndürülür. | |

### Creditinfo Sınıfı için Hata kodları
| Kod (code) | Mesaj (explanation) | Açıklama | Örnek |
| :--- | :--- | :--- | :--- |
| 0 | İşlem başarılı | İşlemin tamamlandığını belirtir. | |
| 99 | İşlem başarısız | İşlemin gerçekleştirilmesi sırasında oluşan hatalar için döndürülür. | Verilen VKN/TCKN'ye sahip müşterinin bulunamaması |