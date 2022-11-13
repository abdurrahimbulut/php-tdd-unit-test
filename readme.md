# TDD Notlarım & Unit test örneği

TDD için aldığım kısa notlar ve PHP ile hazırlanmış temel unit test örnekleri.

### TDD
TDD özet olarak testlerin koddan önce yazılması gerektiğini savunan bir geliştirme sürecidir.

Açılımı "Test Driven Development" olan TDD'yi Türkçeye "Test'in Yönettiği Geliştirme" olarak çevirebiliriz.
TDD tekniğini geliştirdiği kabul edilen kişi Kent Beck dir. TDD ile ilgili detaylı bilgiyi Kent Beck'in "Test Driven Development By Example" kitabından bulabilirsiniz. 

TDD bize temel olarak "Çıktı ile asıl olması gereken çıktı eşit olana kadar önce test et sonra kod yaz" der.

#### Peki neden önce test ediyoruz?
"Ortada kod yokken hatta metod/sınıf yokken, hata vereceğini bildiğim halde neden test edeyim?".
Sorusu Kafanızı kurcalıyor olabilir hatta size saçma geliyor olabilir. Fakat testleri yazarken aslında yazacağımız
birimin (metod/sınıf/kod parçası) mantıksal tasarımını aklımızda canlandırırız. Aslında kod parçasının yapacağı işi
kodu yazarken değil henüz kodu yazmaya başlamadan tüm resmi görerek işe koyulabiliriz. Kodun mantıksal tasarımını
UML gibi diagramlar kullanarakta oluşturabiliriz.Fakat unit testler kodun mantıksal tasarımını biz yazılımcılara
yine kodla açıklar ve kodu kolayca sınamamıza imkan tanır.

#### TDD Life Cycle
![TDD Life Cycle](https://raw.githubusercontent.com/abdurrahimbulut/php-tdd-unit-test/main/img/life_cycle.webp "TDD Life Cycle.")

* 1 - Hata alacak testi yaz
* 2 - Testleri geç
* 3 - Kodu refaktör et
* (Tekrarla)


### Unit Test

Bir kod parçasının doğruluğu ancak birim test ile sınana bilinir.

Kod parçasına girdiler verilerek beklenen çıktının doğruluğu test edilir.

TDD'nin yoğunlaştığı test unit testtir.

#### kod parçası/birim ile ne kastedilir?

Kent Beck'e göre unit(birim)'den kasıt "tek bir işe odaklı"(unit of functionality)  kod parçasıdır.
Bu kod parçası metod,sınıf olabilir.

#### Unit test Terimleri

![TDD Life Cycle](https://raw.githubusercontent.com/abdurrahimbulut/php-tdd-unit-test/main/img/unit_test.png "TDD Life Cycle.")

* Unit - System Under : Test edilen birim


* Depended on component (DOC) : Birimin bağımlı olduğu metod ve sınıflar


* Test case : Tek bir test senaryosuna verilen ad


* Test suite : Birden çok test senaryosuna verilen ad


* Setup : Test edilecek metodun/sınıfın istediğimiz seviyeye/duruma getirilmesi (Örn: sınıfı türet, veri tabanı bağlantısını aç,fonksiyonu çağır)


* Excercise : Test gerçekleşme aşaması


* Verify-Assert: Beklenti ile sonucu kıyaslama aşaması


* Teardown : Setup'da yapılan konfigurasyonları pasif hale getirme aşaması (Örn: veri tabanı bağlantısını kapat). Genelde bu aşama Entegrasyon testinde uygulanır.

