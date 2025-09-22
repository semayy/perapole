<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeraPole – 6 Aylık Büyüme Planı</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-[radial-gradient(1000px_600px_at_10%_0%,#e9d5ff_0%,transparent_40%),radial-gradient(800px_500px_at_90%_10%,#a7f3d0_0%,transparent_40%),radial-gradient(700px_500px_at=30%_90%,#fecaca_0%,transparent_45%)] text-neutral-900">

    <div class="sticky top-0 z-10 backdrop-blur supports-[backdrop-filter]:bg-white/60">
        <nav class="mx-auto flex max-w-6xl items-center justify-between px-5 py-3">
            <div class="flex items-center gap-3">
                <img id="logo-display" src="" alt="PeraPole Logo" class="h-8 w-auto">
                <span class="text-sm font-semibold tracking-tight">PeraPole – Stratejik Plan</span>
            </div>
            <div class="flex items-center gap-2">
                <a href="#KPI" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">KPI</a>
                <a href="#Benchmark" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">Benchmark</a>
                <a href="#Yol_Haritasi" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">Yol Haritası</a>
                <a href="#Haftalik" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">Haftalık</a>
                <a href="#SWOT" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">SWOT</a>
                <a href="#RACI" class="hidden sm:inline-flex rounded-full bg-white/70 px-3 py-1 text-xs font-medium shadow hover:bg-white">RACI</a>
                <button id="admin-panel-toggle" class="rounded-full bg-purple-600 text-white px-3 py-1 text-xs font-medium shadow hover:bg-purple-700">Yönetim Paneli</button>
            </div>
        </nav>
    </div>

    <header class="mx-auto max-w-6xl px-5 pt-10">
        <div class="grid grid-cols-1 items-center gap-6">
            <div>
                <h1 id="hero-title" class="text-3xl font-black leading-tight tracking-tight md:text-4xl">
                    AI Destekli B2B Büyüme: 6 Aylık Dijital Strateji
                </h1>
                <p id="hero-subtitle" class="mt-3 text-base text-neutral-700">
                    Yapay zeka destekli SEO, düşünce liderliği ve niş topluluk etkileşimiyle organik görünürlüğü artırıp nitelikli B2B taleplerini çoğaltıyoruz.
                </p>
                <div class="mt-5 flex flex-wrap gap-3" id="hero-tags">
                    <span class="rounded-2xl bg-white/70 px-3 py-1 text-xs font-semibold shadow">Veri Odaklı İçerik</span>
                    <span class="rounded-2xl bg-white/70 px-3 py-1 text-xs font-semibold shadow">LinkedIn'de Otorite</span>
                    <span class="rounded-2xl bg-white/70 px-3 py-1 text-xs font-semibold shadow">Niş Topluluk Erişimi</span>
                </div>
                <div class="mt-6 flex items-center gap-3">
                    <span class="text-2xl font-black text-rose-500">📈</span>
                    <div class="rounded-full bg-white/80 px-3 py-1 text-[11px] font-medium shadow">
                        Strateji & Tasarım: <a id="creator-link" href="https://www.linkedin.com/in/semayy/?locale=tr_TR" target="_blank" class="font-bold hover:underline">Semanur Ayyıldız</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="KPI" class="mx-auto mt-8 max-w-6xl px-5">
        <h2 class="text-xl font-bold">Temel Performans Göstergeleri (KPI)</h2>
        <p class="mt-2 text-sm text-neutral-700">Stratejimizin başarısını ölçmek ve sürekli optimize etmek için belirlediğimiz temel performans göstergeleri (KPI) aşağıdadır. Bu rakamlar, belirlenen stratejik adımların uygulanması durumunda hedeflenen potansiyel artışları yansıtan tahmini değerlerdir.</p>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4" id="kpi-container">
            <div class="rounded-3xl bg-white/80 p-6 shadow ring-1 ring-black/5">
                <div class="flex items-center gap-4">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 text-white shadow">
                        <span class="text-xl font-bold" id="kpi1-value">+40-60%</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold" id="kpi1-label">Organik Trafik Artışı</p>
                        <p class="text-sm text-neutral-600" id="kpi1-note"><strong>Nasıl Artacak:</strong> AI destekli SEO ve pillar/cluster içerik stratejimizle web sitesine çekilecek nitelikli trafik sayesinde hedeflenmektedir.</p>
                    </div>
                </div>
                <div class="mt-4 flex items-center gap-4">
                    <div class="bg-gradient-to-r from-sky-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 text-white shadow">
                        <span class="text-2xl font-bold" id="kpi2-value">&gt;2.5%</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold" id="kpi2-label">LinkedIn Etkileşim Oranı (ER)</p>
                        <p class="text-sm text-neutral-600" id="kpi2-note"><strong>Nasıl Artacak:</strong> Düşünce liderliği postları, mikro videolar ve çalışan katılımıyla elde edilecek organik erişim artışına dayanmaktadır.</p>
                    </div>
                </div>
            </div>
            <div class="rounded-3xl bg-white/80 p-6 shadow ring-1 ring-black/5">
                <div class="flex items-center gap-4">
                    <div class="bg-gradient-to-r from-emerald-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 text-white shadow">
                        <span class="text-xl font-bold" id="kpi3-value">5-8/ay</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold" id="kpi3-label">Nitelikli Talep (MQL)</p>
                        <p class="text-sm text-neutral-600" id="kpi3-note"><strong>Nasıl Artacak:</strong> Yüksek dönüşüm oranlarına sahip açılış sayfaları ve kanıt odaklı içeriklerle potansiyel müşterilerin hedefe yönlendirilmesiyle hesaplanmıştır.</p>
                    </div>
                </div>
                <div class="mt-4 flex items-center gap-4">
                    <div class="bg-gradient-to-r from-amber-500 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center flex-shrink-0 text-white shadow">
                        <span class="text-2xl font-bold" id="kpi4-value">+10</span>
                    </div>
                    <div>
                        <p class="text-lg font-bold" id="kpi4-label">Sıralamada Anahtar Kelime</p>
                        <p class="text-sm text-neutral-600" id="kpi4-note"><strong>Nasıl Artacak:</strong> AI araçları kullanılarak belirlenen düşük rekabetli, yüksek potansiyelli anahtar kelimelerle sıralama elde etme hedefidir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Benchmark" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">Rekabet Analizi & Benchmark</h2>
        <p class="mt-2 text-sm text-neutral-700">PeraPole'nin kilit rakipleri Promena ve JAGGAER ile pazar konumlandırması ve özellik karşılaştırması.</p>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div class="rounded-3xl bg-white/80 p-6 shadow ring-1 ring-black/5 flex justify-center items-center h-full">
                <div class="chart-container w-full max-w-xl mx-auto h-[400px]">
                    <canvas id="benchmarkChart"></canvas>
                </div>
            </div>
            <div class="rounded-3xl bg-white/80 p-6 shadow ring-1 ring-black/5">
                <h3 class="text-lg font-bold">Değerlendirme</h3>
                <p class="mt-2 text-sm text-neutral-700">Grafikte belirtilen 5 temel alanda PeraPole ve rakiplerinin göreceli güçlü yönleri gösterilmiştir. Her bir özellik 1-5 arasında puanlanmıştır (5 en güçlü).</p>
                <ul class="mt-4 space-y-3 text-sm">
                    <li><span class="font-bold text-sky-700" id="benchmark-note1">PeraPole:</span> AI entegrasyonu ve geniş tedarikçi ağında lider konumdadır. Kullanıcı deneyimi güçlü bir artıdır.</li>
                    <li><span class="font-bold text-amber-700" id="benchmark-note2">Promena:</span> E-ihale gibi özel alanlardaki uzmanlığı ve içerik pazarlamasındaki gücüyle öne çıkmaktadır.</li>
                    <li><span class="font-bold text-rose-700" id="benchmark-note3">JAGGAER:</span> Tüketici seviyesinde kullanıcı deneyimi ve ileri teknoloji (risk tespiti) alanında güçlü bir rakiptir.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="Neden" class="mx-auto mt-10 max-w-6xl px-5">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-5">
            <div class="rounded-3xl bg-white/80 p-6 shadow md:col-span-3">
                <h2 class="text-xl font-bold">Strateji Neden İşe Yarayacak?</h2>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="why-list">
                    <li>• <strong>AI Destekli SEO:</strong> Doğru kitleye, doğru zamanda ulaşarak nitelikli trafik artışı sağlar.</li>
                    <li>• <strong>Düşünce Liderliği:</strong> LinkedIn'de güven ve sektörel otorite inşa eder.</li>
                    <li>• <strong>Niş Topluluklar:</strong> Reddit/Quora ile hedef kitlenin gerçek sorunlarını anlar.</li>
                    <li>• <strong>Kanıt Odaklı Pazarlama:</strong> Vaka analizleri ile potansiyel müşterinin risk algısını düşürür.</li>
                    <li>• <strong>Veri Odaklı Optimizasyon:</strong> A/B testleri ile bütçe verimliliğini en üst düzeye çıkarır.</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-gradient-to-br from-fuchsia-400 to-rose-500 p-6 text-white shadow md:col-span-2">
                <h3 class="text-sm font-semibold uppercase tracking-wide opacity-90">Hızlı Özet</h3>
                <p class="mt-2 text-base font-bold leading-tight" id="quick-summary">Hedeflenen persona'nın sorunlarına odaklanan, veriyle desteklenmiş, çok kanallı bir büyüme modeli.</p>
                <a href="#Yol_Haritasi" class="mt-4 inline-block rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-rose-600 shadow hover:bg-white">Yol Haritasını Gör</a>
            </div>
        </div>
    </section>

    <section id="Frekans" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">Hedef Kitle & Frekans Stratejisi</h2>
        <p class="mt-2 text-sm text-neutral-700">Farklı hedeflere ulaşmak için içerik üretimimizi üç ana kitleye göre frekanslandıracağız.</p>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4" id="target-audience-container">
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-purple-500 to-pink-500 px-3 py-1 text-xs font-semibold text-white">1. Genel Hedef Kitle (Marka Bilinirliği)</div>
                <p class="mt-3 text-sm text-neutral-700" id="audience-general">Daha geniş bir kitleye ulaşmak için sektörel istatistikler, haber özetleri ve ilham veren içerikler paylaşılacak.</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-emerald-500 to-cyan-500 px-3 py-1 text-xs font-semibold text-white">2. B2B Potansiyel Müşteri & Tedarikçi</div>
                <p class="mt-3 text-sm text-neutral-700" id="audience-b2b">Platformun değerini, vaka analizlerini ve teknik özellikleri anlatan, dönüşüm odaklı içerikler üretilecek. (Sözleşme yönetimi, e-ihale gibi konular)</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-amber-500 to-orange-500 px-3 py-1 text-xs font-semibold text-white">3. Kurumiçi Yetenekler</div>
                <p class="mt-3 text-sm text-neutral-700" id="audience-talent">Şirket kültürü, yeni işe alım ilanları, ekibin başarıları ve çalışma ortamını gösteren içeriklerle yetenek çekme hedeflenecek.</p>
            </div>
        </div>
    </section>

    <section id="Reklam_Giderleri" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">Reklam Giderleri ve Bütçe</h2>
        <p class="mt-2 text-sm text-neutral-700">Reklam bütçesi, ilk A/B testleri ve içerik performansına göre belirlenecek olup, stratejik öncelikler doğrultusunda dağıtılacaktır.</p>
        <div class="mt-4 rounded-3xl bg-white/80 p-6 shadow ring-1 ring-black/5 flex justify-center items-center">
            <div class="chart-container w-full max-w-md mx-auto h-[300px]">
                <canvas id="budgetChart"></canvas>
            </div>
        </div>
    </section>

    <section id="Yol_Haritasi" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">6 Aylık Yol Haritası</h2>
        <div class="mt-4 grid grid-cols-1 gap-4 md:grid-cols-3" id="roadmap-container">
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-fuchsia-400 to-rose-500 px-3 py-1 text-xs font-semibold text-white">Ay 1 – Strateji & Teknik Temel</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month1-list">
                    <li>• AI ile rakip ve anahtar kelime analizi</li>
                    <li>• Teknik SEO denetimi ve iyileştirmeler</li>
                    <li>• B2B alıcı personasını netleştirme</li>
                    <li>• KPI setini ve raporlama şablonunu oluşturma</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-emerald-400 to-cyan-500 px-3 py-1 text-xs font-semibold text-white">Ay 2 – İçerik Motoru</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month2-list">
                    <li>• Pillar (ana) blog yazılarının üretimi</li>
                    <li>• LinkedIn içerik takvimini oluşturma</li>
                    <li>• Video pazarlama için ilk adımlar (YouTube)</li>
                    <li>• Dönüşüm odaklı landing page'ler</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-amber-400 to-orange-500 px-3 py-1 text-xs font-semibold text-white">Ay 3 – LinkedIn Aktivasyonu & Niş Kanallar</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month3-list">
                    <li>• Düşünce liderliği odaklı gönderiler</li>
                    <li>• Çalışan katılımını teşvik (EGC)</li>
                    <li>• LinkedIn Premium (Sales Nav.) kullanımı</li>
                    <li>• Reddit ve Quora'da ilk etkileşimler</li>
                    <li>• Vaka analizi ve başarı hikayeleri</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-indigo-400 to-violet-500 px-3 py-1 text-xs font-semibold text-white">Ay 4 – Ücretli Medya & Dönüşüm</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month4-list">
                    <li>• Google Ads (Arama Ağı) kampanyaları</li>
                    <li>• LinkedIn Sponsorlu İçerik ve InMail</li>
                    <li>• Web sitesi ziyaretçilerine remarketing</li>
                    <li>• Meta (Facebook/IG) ile marka bilinirliği</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-teal-400 to-green-500 px-3 py-1 text-xs font-semibold text-white">Ay 5 – Topluluk İnşası</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month5-list">
                    <li>• Reddit (r/procurement) üzerinde etkileşim</li>
                    <li>• Quora'da uzman yanıtları ile otorite</li>
                    <li>• Topluluklardan ürün/pazarlama geri bildirimi</li>
                    <li>• Sektörel forumlarda aktif katılım</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="inline-block rounded-full bg-gradient-to-r from-pink-400 to-red-500 px-3 py-1 text-xs font-semibold text-white">Ay 6 – Optimizasyon & Büyüme</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="month6-list">
                    <li>• A/B testleri (Reklam metinleri, CTA'lar)</li>
                    <li>• Kapsamlı performans raporlaması</li>
                    <li>• Başarılı içerikleri yeniden pazarlama</li>
                    <li>• Gelecek 6 ayın stratejisini revize etme</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="Haftalik" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">1 Haftalık Örnek İçerik Akışı</h2>
        <p class="mt-2 text-sm text-neutral-700">Haftalık içerik planımız, farklı kanallardaki stratejik hedefleri yansıtan somut örneklerle aşağıda yer almaktadır.</p>
        <div class="mt-4 grid grid-cols-1 gap-3 md:grid-cols-2 lg:grid-cols-3" id="weekly-container">
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day1">Pazartesi</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">📊</span>
                    <p class="text-sm" id="weekly-item1">Sektörel Analiz (LinkedIn Postu)</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example1">Örnek: "E-ihale pazarında %20'lik büyüme... İşte detaylar."</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day2">Salı</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">✍️</span>
                    <p class="text-sm" id="weekly-item2">Yeni Blog Yazısı Tanıtımı (LinkedIn & X)</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example2">Örnek: "Blogumuzda bu hafta: 'AI ile satın alma süreçleri nasıl hızlanır?'"</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day3">Çarşamba</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">🎬</span>
                    <p class="text-sm" id="weekly-item3">"Nasıl Yapılır?" Videosu (YouTube & LinkedIn)</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example3">Örnek: "PeraPole ile e-ihaleye 60 saniyede giriş. İzlemek için tıkla!"</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day4">Perşembe</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">💬</span>
                    <p class="text-sm" id="weekly-item4">Reddit Tartışması (r/procurement)</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example4">Örnek: "Bugünkü zorluk: Tedarikçi denetiminde en büyük sorun nedir?"</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day5">Cuma</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">⭐</span>
                    <p class="text-sm" id="weekly-item5">Müşteri Başarı Hikayesi (Snippet)</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example5">Örnek: "X Firması, PeraPole ile satın alma sürecini %30 hızlandırdı."</p>
            </div>
            <div class="rounded-3xl bg-white/80 p-4 shadow ring-1 ring-black/5">
                <p class="text-xs font-semibold text-neutral-500" id="day6">Hafta Sonu</p>
                <div class="mt-2 flex items-center gap-2">
                    <span class="text-2xl">💡</span>
                    <p class="text-sm" id="weekly-item6">Quora'da Sektörel Soru Yanıtlama</p>
                </div>
                <p class="mt-2 text-xs text-neutral-600" id="weekly-example6">Örnek: "E-satınalma yazılımı seçerken hangi kriterler önemli?"</p>
            </div>
        </div>
    </section>

    <section id="SWOT" class="mx-auto mt-10 max-w-6xl px-5">
        <h2 class="text-xl font-bold">SWOT Analizi</h2>
        <p class="mt-2 text-sm text-neutral-700">PeraPole'nin mevcut durumunu, dışsal faktörleri ve büyüme potansiyelini özetleyen detaylı bir değerlendirme.</p>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4" id="swot-container">
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="bg-emerald-500 inline-block rounded-full px-3 py-1 text-xs font-bold text-white">Güçlü Yönler</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="strengths-list">
                    <li>• <strong>Yapay Zeka Entegrasyonu:</strong> Yapay zeka destekli araçlar, rakiplere karşı önemli bir teknolojik avantaj sağlıyor.</li>
                    <li>• <strong>Geniş Tedarikçi Ağı:</strong> 10.000'den fazla tedarikçi, platformu yeni müşteriler için cazip kılıyor.</li>
                    <li>• <strong>Kullanıcı Odaklı Arayüz (UX):</strong> "v3" arayüzü, karmaşık B2B süreçlerini basitleştirerek kullanıcı benimsemesini hızlandırıyor.</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="bg-rose-500 inline-block rounded-full px-3 py-1 text-xs font-bold text-white">Zayıf Yönler</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="weaknesses-list">
                    <li>• <strong>Sınırlı Video Pazarlaması:</strong> YouTube kanalı gibi video kanalları yeterince kullanılmıyor.</li>
                    <li>• <strong>İletişimde Detay Eksikliği:</strong> Rakiplerin öne çıkardığı e-ihale ve risk yönetimi gibi özellikler yeterince vurgulanmıyor.</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="bg-sky-500 inline-block rounded-full px-3 py-1 text-xs font-bold text-white">Fırsatlar</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="opportunities-list">
                    <li>• <strong>AI Destekli SEO:</strong> Yapay zeka araçlarıyla anahtar kelime ve içerik optimizasyonu potansiyeli çok yüksek.</li>
                    <li>• <strong>Niş Topluluklarda Otorite:</strong> Reddit ve Quora gibi platformlar aracılığıyla pazar araştırması ve otorite inşası.</li>
                    <li>• <strong>Düşünce Liderliği:</strong> LinkedIn'de sektörel içgörüler ve başarı hikayeleriyle bir otorite olarak konumlanma.</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-white/80 p-5 shadow ring-1 ring-black/5">
                <div class="bg-amber-500 inline-block rounded-full px-3 py-1 text-xs font-bold text-white">Tehditler</div>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="threats-list">
                    <li>• <strong>Yoğun Rekabet:</strong> Promena ve JAGGAER gibi güçlü ve teknolojik rakipler.</li>
                    <li>• <strong>AI Etik Kaygıları:</strong> Yapay zeka teknolojilerinin kullanımıyla ilgili şeffaflık ve güven sorunları.</li>
                    <li>• <strong>Global Pazar Yeri Alternatifleri:</strong> Alibaba gibi global platformların sunduğu geniş seçenekler.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="RACI" class="mx-auto mt-10 max-w-6xl px-5 pb-16">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-5">
            <div class="rounded-3xl bg-white/80 p-6 shadow md:col-span-3">
                <h2 class="text-xl font-bold">Yürütücülük (RACI) & Kadans</h2>
                <ul class="mt-3 space-y-2 text-sm text-neutral-700" id="raci-list">
                    <li><span class="font-semibold">Responsible:</span> Dijital Pazarlama Uzmanı/Ajans</li>
                    <li><span class="font-semibold">Accountable:</span> Pazarlama Direktörü</li>
                    <li><span class="font-semibold">Consulted:</span> Satış Ekibi, Ürün Yönetimi</li>
                    <li><span class="font-semibold">Informed:</span> Üst Yönetim</li>
                    <li><span class="font-semibold">Kadans:</span> Haftalık sprint · Aylık performans review</li>
                </ul>
            </div>
            <div class="rounded-3xl bg-gradient-to-br from-sky-500 to-cyan-500 p-6 text-white shadow md:col-span-2">
                <h3 class="text-sm font-semibold uppercase tracking-wide opacity-90">Teknoloji & Araç Seti</h3>
                <ul class="mt-3 space-y-2 text-sm" id="tools-list">
                    <li>• <strong>Analiz:</strong> Semrush, Ahrefs, GSC, GA4</li>
                    <li>• <strong>İçerik Üretimi:</strong> Surfer SEO, Frase, Writesonic, ChatGPT & Claude, Jasper AI</li>
                    <li>• <strong>Görsel & Yaratıcılık:</strong> Figma, Lottie, Canva AI</li>
                    <li>• <strong>Yönetim:</strong> LinkedIn Sales Navigator, Google Ads, Buffer AI</li>
                </ul>
                <a href="#KPI" class="mt-4 inline-block rounded-full bg-white/90 px-4 py-2 text-xs font-semibold text-cyan-700 shadow hover:bg-white">KPI’lara Dön</a>
            </div>
        </div>
    </section>

    <footer class="mt-8 border-t border-white/60 bg-white/70">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-2 px-5 py-4 text-xs text-neutral-700 sm:flex-row">
            <div class="flex items-center gap-2">
                <span class="text-2xl font-black text-rose-500">📈</span>
                <span>© 2025 PeraPole</span>
            </div>
            <div class="flex flex-col items-center text-center sm:items-end sm:text-right">
                <div class="rounded-3xl border border-white/50 bg-white/70 p-4 shadow-xl mb-4 sm:mb-0">
                    <p class="text-xs font-semibold text-neutral-600">İletişim Kartı</p>
                    <div class="mt-2 grid grid-cols-2 gap-2 text-sm">
                        <div class="rounded-2xl bg-gradient-to-br from-purple-500 to-pink-500 p-3 text-white">
                            <p class="text-xs/4 opacity-90">Hazırlayan</p>
                            <p class="font-bold"><a id="contact-name-link" href="https://www.linkedin.com/in/semayy/?locale=tr_TR" target="_blank" class="hover:underline">Semanur Ayyıldız</a></p>
                            <p class="text-[11px] leading-tight opacity-95" id="contact-title">Visual Communication & Digital Transformation Specialist</p>
                        </div>
                        <div class="rounded-2xl bg-gradient-to-br from-sky-500 to-cyan-500 p-3 text-white">
                            <p class="text-xs/4 opacity-90">Tarih</p>
                            <p class="font-bold" id="contact-date">22.09.2025</p>
                        </div>
                        <div class="rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-500 p-3 text-white">
                            <p class="text-xs/4 opacity-90">E‑posta</p>
                            <a id="contact-email" href="mailto:semdiyar@gmail.com" class="font-bold text-white hover:underline">semdiyar@gmail.com</a>
                        </div>
                        <div class="rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 p-3 text-white">
                            <p class="text-xs/4 opacity-90">Telefon</p>
                            <a id="contact-phone" href="tel:+905079448462" class="font-bold text-white hover:underline">+905079448462</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="modal-container" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-50 p-4">
        <div class="rounded-lg bg-white p-6 shadow-xl w-full max-w-xl max-h-[80vh] overflow-y-auto relative">
            <h3 id="modal-title" class="text-lg font-bold mb-4"></h3>
            <div id="modal-content" class="text-sm text-neutral-700"></div>
            <button onclick="document.getElementById('modal-container').classList.add('hidden')" class="absolute top-4 right-4 text-neutral-500 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>
    
    <div id="admin-panel" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-70 p-4">
        <div class="rounded-lg bg-white p-6 shadow-xl w-full max-w-2xl max-h-[90vh] overflow-y-auto relative">
            <h3 class="text-xl font-bold mb-4">İçerik Yönetim Paneli</h3>
            <form id="admin-form" class="space-y-6">
                <div>
                    <h4 class="text-lg font-semibold mb-2">Genel Ayarlar</h4>
                    <label class="block text-sm font-medium text-gray-700">Logo URL</label>
                    <input type="text" id="logo-url-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2" placeholder="https://example.com/logo.png">
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Başlık ve Özet</h4>
                    <label class="block text-sm font-medium text-gray-700">Başlık</label>
                    <input type="text" id="hero-title-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">Özet</label>
                    <textarea id="hero-subtitle-input" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2"></textarea>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">KPI'lar</h4>
                    <label class="block text-sm font-medium text-gray-700">KPI 1 - Değer</label>
                    <input type="text" id="kpi1-value-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">KPI 1 - Etiket</label>
                    <input type="text" id="kpi1-label-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">KPI 1 - Not</label>
                    <textarea id="kpi1-note-input" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2"></textarea>
                    
                    <label class="block text-sm font-medium text-gray-700 mt-4">KPI 2 - Değer</label>
                    <input type="text" id="kpi2-value-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">KPI 2 - Etiket</label>
                    <input type="text" id="kpi2-label-input" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2">
                    <label class="block text-sm font-medium text-gray-700 mt-2">KPI 2 - Not</label>
                    <textarea id="kpi2-note-input" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm p-2"></textarea>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" id="admin-cancel-btn" class="px-4 py-2 text-sm font-medium text-gray-700 rounded-md border border-gray-300 shadow-sm hover:bg-gray-50">İptal</button>
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md shadow-sm hover:bg-green-700">Kaydet</button>
                </div>
            </form>
            <button onclick="document.getElementById('admin-panel').classList.add('hidden')" class="absolute top-4 right-4 text-neutral-500 hover:text-neutral-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
    </div>
    
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-app.js";
        import { getAuth, signInAnonymously, signInWithCustomToken } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-auth.js";
        import { getFirestore, doc, setDoc, onSnapshot } from "https://www.gstatic.com/firebasejs/11.6.1/firebase-firestore.js";

        const firebaseConfig = JSON.parse(typeof __firebase_config !== 'undefined' ? __firebase_config : '{}');
        const appId = typeof __app_id !== 'undefined' ? __app_id : 'default-app-id';
        const initialAuthToken = typeof __initial_auth_token !== 'undefined' ? __initial_auth_token : null;

        const app = initializeApp(firebaseConfig);
        const db = getFirestore(app);
        const auth = getAuth(app);
        
        let userId;

        async function initApp() {
            try {
                if (initialAuthToken) {
                    const userCredential = await signInWithCustomToken(auth, initialAuthToken);
                    userId = userCredential.user.uid;
                } else {
                    const userCredential = await signInAnonymously(auth);
                    userId = userCredential.user.uid;
                }
                console.log("Firebase Auth successful. User ID:", userId);
                startFirestoreListener();
            } catch (error) {
                console.error("Firebase Auth error:", error);
            }
        }
        
        function getDocRef() {
            return doc(db, `artifacts/${appId}/public/data/perapole_content`, 'main_data');
        }

        function updateUI(data) {
            document.getElementById('logo-display').src = data.logoUrl || '';
            document.getElementById('hero-title').textContent = data.heroTitle || 'AI Destekli B2B Büyüme: 6 Aylık Dijital Strateji';
            document.getElementById('hero-subtitle').textContent = data.heroSubtitle || 'Yapay zeka destekli SEO, düşünce liderliği ve niş topluluk etkileşimiyle organik görünürlüğü artırıp nitelikli B2B taleplerini çoğaltıyoruz.';
            
            document.getElementById('kpi1-value').textContent = data.kpi1Value || '+40-60%';
            document.getElementById('kpi1-label').textContent = data.kpi1Label || 'Organik Trafik Artışı';
            document.getElementById('kpi1-note').innerHTML = data.kpi1Note || '<strong>Nasıl Artacak:</strong> AI destekli SEO ve pillar/cluster içerik stratejimizle web sitesine çekilecek nitelikli trafik sayesinde hedeflenmektedir.';
            
            document.getElementById('kpi2-value').textContent = data.kpi2Value || '>2.5%';
            document.getElementById('kpi2-label').textContent = data.kpi2Label || 'LinkedIn Etkileşim Oranı (ER)';
            document.getElementById('kpi2-note').innerHTML = data.kpi2Note || '<strong>Nasıl Artacak:</strong> Düşünce liderliği postları, mikro videolar ve çalışan katılımıyla elde edilecek organik erişim artışına dayanmaktadır.';
        }

        function startFirestoreListener() {
            const docRef = getDocRef();
            onSnapshot(docRef, (docSnap) => {
                if (docSnap.exists()) {
                    const data = docSnap.data();
                    updateUI(data);
                    fillAdminForm(data);
                } else {
                    console.log("No such document! Initializing with default data.");
                    const initialData = {
                        logoUrl: '',
                        heroTitle: 'AI Destekli B2B Büyüme: 6 Aylık Dijital Strateji',
                        heroSubtitle: 'Yapay zeka destekli SEO, düşünce liderliği ve niş topluluk etkileşimiyle organik görünürlüğü artırıp nitelikli B2B taleplerini çoğaltıyoruz.',
                        kpi1Value: '+40-60%',
                        kpi1Label: 'Organik Trafik Artışı',
                        kpi1Note: '<strong>Nasıl Artacak:</strong> AI destekli SEO ve pillar/cluster içerik stratejimizle web sitesine çekilecek nitelikli trafik sayesinde hedeflenmektedir.',
                        kpi2Value: '>2.5%',
                        kpi2Label: 'LinkedIn Etkileşim Oranı (ER)',
                        kpi2Note: '<strong>Nasıl Artacak:</strong> Düşünce liderliği postları, mikro videolar ve çalışan katılımıyla elde edilecek organik erişim artışına dayanmaktadır.',
                    };
                    setDoc(docRef, initialData).catch(e => console.error("Error setting initial document: ", e));
                }
            });
        }
        
        function fillAdminForm(data) {
            document.getElementById('logo-url-input').value = data.logoUrl || '';
            document.getElementById('hero-title-input').value = data.heroTitle || '';
            document.getElementById('hero-subtitle-input').value = data.heroSubtitle || '';
            document.getElementById('kpi1-value-input').value = data.kpi1Value || '';
            document.getElementById('kpi1-label-input').value = data.kpi1Label || '';
            document.getElementById('kpi1-note-input').value = data.kpi1Note || '';
            document.getElementById('kpi2-value-input').value = data.kpi2Value || '';
            document.getElementById('kpi2-label-input').value = data.kpi2Label || '';
            document.getElementById('kpi2-note-input').value = data.kpi2Note || '';
        }

        document.getElementById('admin-panel-toggle').addEventListener('click', () => {
            document.getElementById('admin-panel').classList.remove('hidden');
        });

        document.getElementById('admin-cancel-btn').addEventListener('click', () => {
            document.getElementById('admin-panel').classList.add('hidden');
        });

        document.getElementById('admin-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const docRef = getDocRef();
            const data = {
                logoUrl: document.getElementById('logo-url-input').value,
                heroTitle: document.getElementById('hero-title-input').value,
                heroSubtitle: document.getElementById('hero-subtitle-input').value,
                kpi1Value: document.getElementById('kpi1-value-input').value,
                kpi1Label: document.getElementById('kpi1-label-input').value,
                kpi1Note: document.getElementById('kpi1-note-input').value,
                kpi2Value: document.getElementById('kpi2-value-input').value,
                kpi2Label: document.getElementById('kpi2-label-input').value,
                kpi2Note: document.getElementById('kpi2-note-input').value,
            };
            try {
                await setDoc(docRef, data, { merge: true });
                alert('İçerik başarıyla güncellendi!');
                document.getElementById('admin-panel').classList.add('hidden');
            } catch (error) {
                console.error("Error writing document: ", error);
                alert('Güncelleme başarısız oldu.');
            }
        });
        
        document.addEventListener('DOMContentLoaded', () => {
            initApp();
            
            const chartData = {
                labels: ['AI Entegrasyonu', 'Kullanıcı Deneyimi (UX)', 'Geniş Tedarikçi Ağı', 'Özel Alan Uzmanlığı', 'İçerik Pazarlaması'],
                datasets: [
                    {
                        label: 'PeraPole',
                        data: [5, 4, 5, 3, 3],
                        fill: true,
                        backgroundColor: 'rgba(2, 132, 199, 0.2)',
                        borderColor: 'rgb(2, 132, 199)',
                        pointBackgroundColor: 'rgb(2, 132, 199)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(2, 132, 199)'
                    },
                    {
                        label: 'Promena',
                        data: [2, 3, 4, 5, 4],
                        fill: true,
                        backgroundColor: 'rgba(244, 63, 94, 0.2)',
                        borderColor: 'rgb(244, 63, 94)',
                        pointBackgroundColor: 'rgb(244, 63, 94)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(244, 63, 94)'
                    },
                    {
                        label: 'JAGGAER',
                        data: [4, 5, 2, 4, 4],
                        fill: true,
                        backgroundColor: 'rgba(251, 191, 36, 0.2)',
                        borderColor: 'rgb(251, 191, 36)',
                        pointBackgroundColor: 'rgb(251, 191, 36)',
                        pointBorderColor: '#fff',
                        pointHoverBackgroundColor: '#fff',
                        pointHoverBorderColor: 'rgb(251, 191, 36)'
                    }
                ]
            };

            const chartConfig = {
                type: 'radar',
                data: chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    elements: {
                        line: {
                            borderWidth: 3
                        }
                    },
                    scales: {
                        r: {
                            angleLines: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            grid: {
                                color: 'rgba(0, 0, 0, 0.1)'
                            },
                            pointLabels: {
                                font: {
                                    size: 11
                                }
                            },
                            ticks: {
                                backdropColor: 'transparent',
                                color: '#666',
                                beginAtZero: true,
                                min: 0,
                                max: 5,
                                stepSize: 1
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        }
                    }
                }
            };
            new Chart(document.getElementById('benchmarkChart'), chartConfig);

            const budgetData = {
                labels: ['Google Ads', 'LinkedIn Ads', 'Diğer Mecralar'],
                datasets: [{
                    data: [55, 30, 15],
                    backgroundColor: ['#2563eb', '#0a66c2', '#a0aec0'],
                    hoverOffset: 4
                }]
            };

            const budgetConfig = {
                type: 'doughnut',
                data: budgetData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12,
                                    family: 'Inter'
                                }
                            }
                        }
                    }
                }
            };
            new Chart(document.getElementById('budgetChart'), budgetConfig);
        });
    </script>
</body>
</html>
