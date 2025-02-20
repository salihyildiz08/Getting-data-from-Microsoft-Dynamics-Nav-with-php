
# NTLM Entegrasyonu

Merhaba İyi Günler / Hello Good Day,

Bu proje, **NTLM** entegrasyonunu nasıl gerçekleştireceğinizi adım adım açıklamaktadır. Lütfen aşağıdaki adımları takip ederek entegrasyonu tamamlayın.

## 1. **NTLM Klasörünü İndirin ve Projeye Dahil Edin**

İlk olarak, NTLM klasörünü indirmeniz ve proje dizininize dahil etmeniz gerekmektedir. NTLM klasörünü projenize ekledikten sonra, entegrasyonu başlatabilirsiniz.

**Adımlar:**
1. NTLM klasörünü indirin.
2. İndirilen NTLM klasörünü projenizin ana dizinine ekleyin.

## 2. **Client.php Scriptini Yapılandırın**

NTLM klasörüne gidin ve `Client.php` scriptini açın. Aşağıdaki değişkenleri, kendi projenize uygun olacak şekilde güncelleyin.

```php
$baseURL = 'http://192.1.1.1:1010/DynamicsNAV100/WS/';
$cur = 'SASTARSOFT NAV2018';
```

- **$baseURL**: Bu değişkeni, verileri alacağınız web servisinin URL’sine göre düzenleyin.
- **$cur**: Bu değişken, belirli bir sistem veya uygulamaya ait istenilen kurulum ismini belirtir. İhtiyacınıza göre değiştirin.

**Bu adımı tamamladıktan sonra Client.php scriptini kaydedin.**

## 3. **NTLMUserID.php Scriptini Yapılandırın**

NTLM klasörü içinde bulunan `NTLMUserID.php` scriptine gidin. Bu dosyada aşağıdaki gibi bir satır bulunmaktadır. Bu satırı ihtiyacınıza göre güncelleyin:

```php
define('USERPWD', 'verilerin çekileceği ip adresi veya uzantı maili : şifre');
```

- **USERPWD**: Bu satırda, verileri çekmek için kullanılacak kullanıcı adı ve şifreyi belirtirsiniz. Burayı kendi bilgilerinizle değiştirin.

**Bu adımı da tamamladıktan sonra `NTLMUserID.php` dosyasını kaydedin.**

## 4. **NTLM Klasörünü Projeye Dahil Edin**

Projenizdeki uygun dosyaya `NTLM` klasörünü dahil etmek için aşağıdaki satırı kullanın:

```php
include 'ntlm/Client.php';
```

Bu satır, NTLM sistemini projenize entegre etmenizi sağlar. NTLM entegrasyonunu bu şekilde sağladığınızda, sistem üzerinde veri çekme işlemi gerçekleştirilebilir.

## 5. **Veri Çekme İşlemi (index.php)**

Son olarak, **index.php** dosyasını kullanarak verileri alabilirsiniz. Aşağıda basit bir örnek yapı bulunmaktadır:

```php
include 'ntlm/Client.php';

// Burada, NTLM ile bağlantı kurarak veriyi çekebilirsiniz
$veriler = fetch_data_from_ntlm();
```

Veri çekme işlemi ile ilgili yapı, `Client.php` içinde zaten mevcuttur. Bu işlemi **index.php** içinde çağırarak verileri alabilirsiniz.

---

## Önemli Notlar

- **$baseURL** ve **USERPWD** gibi parametrelerin doğru şekilde yapılandırıldığından emin olun.
- NTLM entegrasyonu için doğru erişim bilgilerine sahip olmanız gerekmektedir.
- Entegrasyonu tamamladıktan sonra, `Client.php` ve `NTLMUserID.php` dosyalarının projenizde doğru bir şekilde dahil edildiğinden emin olun.

---

## Katkı Sağlama

Bu projeye katkı sağlamak için aşağıdaki adımları takip edebilirsiniz:

1. Fork'layın.
2. Yeni bir branch oluşturun (`git checkout -b feature-branch`).
3. Değişikliklerinizi yapın ve commit edin (`git commit -am 'NTLM entegrasyonu eklendi'`).
4. Push yapın (`git push origin feature-branch`).
5. Bir pull request gönderin.

---

## Lisans

Bu proje **MIT Lisansı** ile lisanslanmıştır - detaylar için [LICENSE.md](LICENSE.md) dosyasına bakınız.
```

---

### Açıklamalar:

1. **NTLM Klasörü ve Scriptler**: NTLM entegrasyonu için gerekli olan dosyaları projenize dahil etmeniz gerekmektedir.
2. **Client.php Yapılandırması**: `Client.php` dosyasındaki **$baseURL** ve **$cur** değişkenlerini kendi sisteminize uygun şekilde ayarlamanız gerekmektedir.
3. **NTLMUserID.php Yapılandırması**: Kullanıcı adı ve şifre bilgilerini **USERPWD** sabitine doğru şekilde atamanız önemlidir.
4. **Veri Çekme ve Kullanım**: `Client.php` dosyasındaki veri çekme yapısı ile **index.php** dosyanızda bu verileri alabilirsiniz.

