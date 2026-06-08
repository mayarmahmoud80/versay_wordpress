const projectsData = [
  {
    id: "versaisa_15",
    title: "فرساي 15",
    city: "الرياض",
    city2:" الرياض - حي الياسمين",
    text: "شقق",
    type: ["شقق"],
    lat:24.82176383512652,lng:46.624276496259085,
    units: 28,
    percent: 24,
    price: "1,349,000 ر.س",
    space: "148 - 315.42 م²",
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/15.jpg"],
    pdf_file:"assets/files/15_v.pdf",
    pdf_price_file:"assets/files/versai_15_prices.pdf",
    status: "متاح",
    types: ["شقق"],
    description_1:"يقع المشروع في قلب حي الياسمين بشمال الرياض، ويتميز بموقع حيوي يسهل الوصول منه إلى أهم الطرق الرئيسية والمراكز الحيوية في المدينة",
    description_2:"يمتد المشروع على مساحة إجمالية تبلغ 3400 متر مربع، ويضم 38 وحدة سكنية فاخرة بمساحات متنوعة تبدأ من 126م² وتصل إلى 315م²، صُممت لتلبي تطلعات الباحثين عن الخصوصية والرفاهية",
    detailedUnits: [
      { number: "A1", floor: "ارضي - اول ", type:"دورين", area: "168.66 م²", price: "1,699,000", reserved: false },
      { number: "A2", floor: "ارضي - اول ", type:"دورين", area: "161.60 م²", price: "1,699,000", reserved: false },
      { number: "A3", floor: "ارضي - اول ", type:"دورين", area: "160.99 م²", price: "1,699,000", reserved: false },
      { number: "A4", floor: "ارضي - اول ", type:"دورين", area: "185.67 م²", price: "2,199,000", reserved: false },
      { number: "A5", floor: "ارضي - اول ", type:"دورين", area: "176.25 م²", price: "1,799,000", reserved: false },
      { number: "A6", floor: "ارضي - اول ", type:"دورين", area: "171.84 م²", price: "1,829,000", reserved: false },
      { number: "A7", floor: "تاني", type:"دور", area: "160.84 م²", price: "1,599,000", reserved: true },
      { number: "A8", floor: "تاني", type:"دور", area: "126.33 م²", price: "1,349,000", reserved: true },
      { number: "A9", floor: "تاني - ملحق", type:"دورين", area: "184.51 م²", price: "2,349,000", reserved: false },
      { number: "A10", floor: "تاني - ملحق", type:"دورين", area: "186.75 م²", price: "2,149,000", reserved: false },
      { number: "A11", floor: "تاني - ملحق", type:"دورين", area: "178.62 م²", price: "2,299,000", reserved: false },
      { number: "B1", floor: "ارضي - اول ", type:"دورين", area: "162.01 م²", price: "1,949,000", reserved: false },
      { number: "B2", floor: "ارضي - اول ", type:"دورين", area: "218.14 م²", price: "1,899,000", reserved: false },
      { number: "B3", floor: "ارضي - اول ", type:"دورين", area: "209.41 م²", price: "1,949,000", reserved: false },
      { number: "B4", floor: "ارضي - اول ", type:"دورين", area: "203.79 م²", price: "1,949,000", reserved: false },
      { number: "B5", floor: "ارضي - اول ", type:"دورين", area: "211.28 م²", price: "1,999,000", reserved: false },
      { number: "B6", floor: "ارضي - اول ", type:"دورين", area: "148 م²", price: "1,549,000", reserved: false },
      { number: "B7", floor: "تاني", type:"دور", area: "246.68 م²", price: "1,849,000", reserved: false },
      { number: "B8", floor: "تاني", type:"دور", area: "233.25 م²", price: "1,899,000", reserved: false },
      { number: "C1", floor: "ارضي - اول ", type:"دورين", area: "148 م²", price: "1,549,000", reserved: false },
      { number: "C2", floor: "ارضي - اول ", type:"دورين", area: "211.28 م²", price: "1,999,000", reserved: false },
      { number: "C3", floor: "ارضي - اول ", type:"دورين", area: "197.76 م²", price: "1,949,000", reserved: false },
      { number: "C4", floor: "ارضي - اول ", type:"دورين", area: "219.68 م²", price: "1,999,000", reserved: false },
      { number: "C5", floor: "ارضي - اول ", type:"دورين", area: "219.83 م²", price: "1,949,000", reserved: false },
      { number: "C6", floor: "ارضي - اول ", type:"دورين", area: "219.21 م²", price: "1,999,000", reserved: false },
      { number: "C7", floor: "تاني", type:"دور", area: "233.25 م²", price: "1,949,000", reserved: false },
      { number: "C8", floor: "تاني", type:"دور", area: "246.68 م²", price: "1,849,000", reserved: false },
      { number: "D1", floor: "ارضي - اول ", type:"دورين", area: "173.83 م²", price: "1,829,000", reserved: false },
      { number: "D2", floor: "ارضي - اول ", type:"دورين", area: "176.25 م²", price: "1,799,000", reserved: false },
      { number: "D3", floor: "ارضي - اول ", type:"دورين", area: "262.64 م²", price: "2,249,000", reserved: false },
      { number: "D4", floor: "ارضي - اول ", type:"دورين", area: "171.31 م²", price: "1,799,000", reserved: false },
      { number: "D5", floor: "ارضي - اول ", type:"دورين", area: "163.43 م²", price: "1,699,000", reserved: false },
      { number: "D6", floor: "ارضي - اول ", type:"دورين", area: "168.66 م²", price: "1,699,000", reserved: false },
      { number: "D7", floor: "تاني", type:"دور", area: "126.33 م²", price: "1,349,000", reserved: false },
      { number: "D8", floor: "تاني", type:"دور", area: "181.87 م²", price: "1,649,000", reserved: false },
      { number: "D9", floor: "ارضي - اول ", type:"دورين", area: "306.72 م²", price: "2,349,000", reserved: false },
      { number: "D10", floor: "ارضي - اول ", type:"دورين", area: "186.75 م²", price: "2,149,000", reserved: false },
      { number: "D11", floor: "ارضي - اول ", type:"دورين", area: "315.51 م²", price: "2,349,000", reserved: false },
    ]
  },
  {
    id: "versaisa_14",
    title: "فرساي 14",
    city: "الرياض",
    text: "أدوار - تاون هاوس",
    type: ["أدوار", "تاون هاوس"],
    lat:24.815341941915857,lng:46.59038193858727,
    units: 4,
    percent: 60,
    price: "1,890,000 ر.س",
    space: "153.92 - 320.52 م²",
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/14.jpg"],
    pdf_file:"assets/files/14.pdf",
    pdf_price_file:"assets/files/versai_14_prices.pdf",
    status: "متاح",
    types: ["أدوار" , "تاون هاوس"],
    description_1:"يحتل فرساي 14 موقعاً استراتيجياً في حي الملقا بشمال الرياض، أحد أرقى الأحياء الحيوية التي تجمع بين سهولة الوصول والرفاهية السكنية",
    description_2:"يقدم المشروع تجربة سكنية متكاملة عبر 10 وحدات فاخرة و تتنوع بين أدوار وبنتهاوس بمساحات مدروسة تبدأ من 153م² وتصل إلى 320م²، صُممت بأسلوب يجمع بين الحداثة والخصوصية",
    detailedUnits: [
      { number: 1, floor: "ارضي - اول ", type:"بنتهاوس", area: "187.38 م²", price: "مباعة", reserved: true },
      { number: 2, floor: "ارضي - اول ", type:"بنتهاوس", area: "153.92 م²", price: "مباعة", reserved: true },
      { number: 3, floor: "ارضي - اول ", type:"بنتهاوس", area: "244.11 م²", price: "مباعة", reserved: true },
      { number: 4, floor: "ارضي - اول ", type:"بنتهاوس", area: "244.11 م²", price: "2,259,000", reserved: false },
      { number: 5, floor: "ارضي - اول ", type:"بنتهاوس", area: "153.92 م²", price: "مباعة", reserved: true },
      { number: 6, floor: "ارضي - اول ", type:"بنتهاوس", area: "174.11 م²", price: "1,890,000", reserved: false },
      { number: 7, floor: "تاني", type:"دور", area: "177.03 م²", price: "1,980,000", reserved: false },
      { number: 8, floor: "تاني", type:"دور", area: "177.03 م²", price: "1,980,000", reserved: false },
      { number: 9, floor: "تاني - ملحق", type:"بنتهاوس", area: "320.52 م²", price: "مباعة", reserved: true },
      { number: 10, floor: "تاني - ملحق", type:"بنتهاوس", area: "320.52 م²", price: "مباعة", reserved: true }
    ]
  },
  {
    id: "versaisa_16",
    title: "فرساي 16",
    city: "الرياض",
    text: "فلل",
    type: ["فلل"],
    lat:24.90643412422651,lng:46.630577330798936,
    units: 0,
    percent: 0,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/10.jpg"],
    status: "تحت الإنشاء",
    types: ["فلل"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_17",
    title: "فرساي 17",
    city: "الرياض",
    text: "أدوار - فلل",
    type: ["أدوار" , "فلل"],
    lat:24.774122006681125,lng:46.61213619625765,
    units: 0,
    percent: 0,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/10.jpg"],
    status: "تحت الإنشاء",
    types:  ["أدوار" , "فلل"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  //   {
  //   id: "versaisa_18",
  //   title: "فرساي 18",
  //   city: "الرياض",
  //   text: "أدوار",
  //   type: ["أدوار"],
  //   lat:24.774122006681125,lng:46.61213619625765,
  //   units: 0,
  //   percent: 0,
  //   image: "assets/imgs/banners/project_banner_1_web.webp",
  //   images:[ "assets/imgs/projects_img/10.jpg"],
  //   status: "تحت الإنشاء",
  //   types: ["أدوار"],
  //           description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
  //   description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
  //   detailedUnits: [

  //   ]
  // },
    {
    id: "versaisa_19",
    title: "فرساي 19",
    city: "الرياض",
    text: "شقق",
    type: ["شقق"],
    lat:24.774122006681125,lng:46.61213619625765,
    units: 0,
    percent: 0,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/10.jpg"],
    status: "تحت الإنشاء",
    types: ["شقق"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_1",
    title: "فرساي 1",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.813174546502665,lng:46.60902763154743,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/versay_1.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
    description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_2",
    title: "فرساي 2",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/02.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
    lat:24.808273369315476,lng:46.5923057962587,
        description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
   
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_3",
    title: "فرساي 3",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.805672701262356,lng:46.600231380915154,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/03.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
        description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_4",
    title: "فرساي 4",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.81368014452884,lng:46.608326611602024,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/04.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },{
    id: "versaisa_5",
    title: "فرساي 5",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.70485492781197,lng:46.63333653858387,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/05.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
    description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_6",
    title: "فرساي 6",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.829764528944963,lng:46.586755215017604,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/06.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
    description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_7",
    title: "فرساي 7",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.8641283994999,lng:46.669576911603365,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/07.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_8",
    title: "فرساي 8",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.90304032900168,lng:46.63807704229119,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/08.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_9",
    title: "فرساي 9",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.82668378529411,lng:46.58851806557257,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/09.jpg"],
    pdf_file:"assets/files/9.pdf",
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
   {
    id: "versaisa_10",
    title: "فرساي 10",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.774122006681125,lng:46.61213619625765,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/10.jpg"],
    pdf_file:"assets/files/10.pdf",
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_11",
    title: "فرساي 11",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.816651087452883,lng:46.60015530975139,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/11.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_12",
    title: "فرساي 12",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.842929510247618,lng:46.67072513858797,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/12.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_13",
    title: "فرساي 13",
    city: "الرياض",
    text: "شقق بنتهاوس",
    type: ["شقق" , "بنتهاوس"],
    lat:24.859258220354423,lng:46.65633513858835,
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/13.jpg"],
    status: "مباع",
    types: ["شقق" , "بنتهاوس"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_villa",
    title: "فلل فرساي",
    city: "الرياض",
    text: "فلل",
    type: ["فلل"],
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/16.jpg"],
    status: "مباع",
    types: ["فلل"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_villa_2",
    title: "فلل  المهرة",
    city: "الرياض",
    text: "فلل",
    type: ["فلل"],
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/17.jpg"],
    status: "مباع",
    types: ["فلل"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
  {
    id: "versaisa_villa_3",
    title: "فلل النرجس",
    city: "الرياض",
    text: "فلل",
    type: ["فلل"],
    units: 0,
    percent: 100,
    image: "assets/imgs/banners/project_banner_1_web.webp",
    images:[ "assets/imgs/projects_img/18.jpg"],
    status: "مباع",
    types: ["فلل"],
            description_1:"  نحرص في فرساي على اختيار أرقى الأماكن في مدينة الرياض، لنقدم تجربة سكنية تجمع بين الرقي والموقع الاستراتيجي,   نحرص في كل مشروع على اختيار الأحياء والمواقع الأكثر تميزاً، لنضمن اتصالاً مباشراً بأهم محاور العاصمة ومعالمها الرئيسية.",
    description_2:"  نلتزم بتطبيق أدق المواصفات الإنشائية التي تدمج بين الجودة التنفيذية والجماليات المعمارية الحديثة. حيث نسعى من خلال جودة البناء وتوظيف أحدث التقنيات  إلى تقديم منتجات سكنية تتسم بالاستدامة وترتقي بجودة الحياة.",
    detailedUnits: [

    ]
  },
];

if(document.getElementById("projectsContainer")){

const container = document.getElementById("projectsContainer");

projectsData.forEach(p => {
  container.innerHTML += `
    <div class="project_section border-card-project p-2">
      <a href="project.html?id=${p.id}">



          <div class="card_img">
          
     ${
    p.status === "مباع"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/img_log.png" class="card-img">
         </div>`
      : p.status === "تحت الإنشاء"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/not_finished.png" class="card-img">
         </div>`
      : ""
  }

            <img src="${themeData.templateUrl}/${p.image}" class="card-img h-100">
          </div>

          <div class="card_img_text">
            <div class="card_img_text1">${p.text}</div>
          </div>

           <div class="card_img_text_2">
            <div class="card_img_text1">${p.title}-${p.city}</div>
          </div>

          <div id="units-box">
            <div class="d-flex justify-content-between">
              <p class="text-sm m-0">الوحدات المتاحة</p>
              <p class="m-0">${p.units}</p>
            </div>

            <div class="d-flex justify-content-between mt-1">
              <p class="text-sm text-muted m-0">نسبة الحجز</p>
              <p class="m-0">${p.percent}%</p>
            </div>

            <div class="progress mt-2">
              <div class="progress-bar" style="width: ${p.percent}%;"></div>
            </div>
          </div>

          <div class="p-3 my-3">
            <!--<h5 class="text-black bold">${p.title}</h5>
            <p class="text-muted font-16">${p.city}</p>-->

            <hr class="mt-3 text-muted">

           <div class="project_price d-flex justify-content-between">
  <div>
    <div class="d-flex justify-content-between">
      <span class="d-flex flex-column justify-content-center text-center">
      ${p.status !== "مباع" ? '<i class="text-muted fa-solid fa-money-bill-1"></i>' : ''}   
      
      </span>
      ${p.status !== "مباع" ? '<p>أسعار تبدأ من</p>' : ''}
    </div>
    <p class="bold text-black">
      ${p.status === "مباع" ? "تم البيع" : p.price}
    </p>
  </div>

  <div>
    <div class="d-flex justify-content-center">
      <span class="d-flex flex-column justify-content-center text-center">
        <i class="text-muted fa-solid fa-house"></i>
      </span>
      <p>المساحات</p>
    </div>
    <p class="bold text-black">${p.space}</p>
  </div>
</div>
</a>



          <div class="card-btn d-flex justify-content-between">
            <a href="https://wa.me/966559604044?text=${encodeURIComponent(`مرحبا، حاب استفسر عن مشروع ( ${p.title})`)}" 
   target="_blank" 
   class="d-block btn-1 col-5 btn mt-3" style="color:var(--bg-1)">
   تواصل معنا
</a>

            <a href="project.html?id=${p.id}" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
          </div>

    </div>`;
});


function scrollProjects(direction) {
  const slider = document.getElementById("projectsContainer");
  const cardWidth = slider.querySelector(".project_section")?.offsetWidth || 350;
  slider.scrollBy({
    left: direction * cardWidth,
    behavior: "smooth"
  });
}

(function () {
  const slider = document.getElementById("projectsContainer");
  if (!slider) return;

  let isDown = false;
  let startX;
  let scrollLeft;

  slider.addEventListener("mousedown", (e) => {
    isDown = true;
    startX = e.pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;
  });

  slider.addEventListener("mouseleave", () => isDown = false);
  slider.addEventListener("mouseup", () => isDown = false);

  slider.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider.offsetLeft;
    const walk = (x - startX) * 1.2;
    slider.scrollLeft = scrollLeft - walk;
  });
})();


}
else if(document.getElementById("portfolio-projects")){
document.addEventListener("DOMContentLoaded", function() {

  const container_1 = document.getElementById("portfolio-projects");
  let currentType = "الكل";
  let searchValue = "";

  function renderProjects(data) {
    container_1.innerHTML = "";
    if(data.length === 0) {
      container_1.innerHTML = "<p class='text-center'>لا يوجد مشاريع مطابقة</p>";
      return;
    }
    data.forEach(p => {
      container_1.innerHTML +=`
    
          <div class="col-12 col-md-4 project_section border-card-project p-3"
          data-aos="flip-right"
      data-aos-duration="2000"
  data-aos-delay="200"
    data-aos-once="true"
          >
      <a href="project.html?id=${p.id}">
        <div class="card">
          
          <div class="card_img">
          
             ${
    p.status === "مباع"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/img_log.png" class="card-img">
         </div>`
      : p.status === "تحت الإنشاء"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/not_finished.png" class="card-img">
         </div>`
      : ""
  }
          
            <img src="${themeData.templateUrl}/${p.image}" class="card-img h-100">
          </div>

          <div class="card_img_text">
            <div class="card_img_text1">${p.text}</div>
          </div>

           <div class="card_img_text_2">
            <div class="card_img_text1">${p.title}-${p.city}</div>
          </div>

          <div id="units-box" 
          style="${(p.status === "تحت الإنشاء") ? "display:none; margin:auto 0;" : ""}" >
            <div class="d-flex justify-content-between">
              <p class="text-sm m-0">الوحدات المتاحة</p>
              <p class="m-0">${p.units}</p>
            </div>

            <div class="d-flex justify-content-between mt-1">
              <p class="text-sm text-muted m-0">نسبة الحجز</p>
              <p class="m-0">${p.percent}%</p>
            </div>

            <div class="progress mt-2">
              <div class="progress-bar" style="width: ${p.percent}%;"></div>
            </div>
          </div>

          <div class="p-3"  style="margin:auto 0!important;">

            <hr class="mt-3 text-muted">

<div class="project_price d-flex justify-content-center text-center">

  ${
    p.status === "مباع"
      ? `<p class="bold text-danger w-100">تم البيع</p>`
      : p.status === "تحت الإنشاء"
      ? `<p class="bold w-100" style="color: var(--bg-1)!important;">تحت الإنشاء</p>`
      : `
        <div class="d-flex justify-content-between w-100">
          
          <div>
            <div class="d-flex justify-content-between">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-money-bill-1"></i>
              </span>
              <p>أسعار تبدأ من</p>
            </div>
            <p class="bold text-black">${p.price || "غير محدد"}</p>
          </div>

          <div>
            <div class="d-flex justify-content-center">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-house"></i>
              </span>
              <p>المساحات</p>
            </div>
            <p class="bold text-black">${p.space || "-"}</p>
          </div>

        </div>
      `
  }

</div>

          <div class="card-btn d-flex justify-content-between">
            <a href="https://wa.me/966559604044?text=${encodeURIComponent(`مرحبا، حاب استفسر عن مشروع ( ${p.title})`)}" 
   target="_blank" 
   class="d-block btn-1 col-5 btn mt-3">
   تواصل معنا
</a>

            <a href="project.html?id=${p.id}" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
          </div>

        </div>
      </a>
    </div>
    
        `;
    });
  }

  renderProjects(projectsData);

  document.querySelectorAll(".filter-btn").forEach(btn => {
    btn.addEventListener("click", function() {
      document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
      this.classList.add("active");
      currentType = this.dataset.type;
      applyFilters();
    });
  });

  //search
  document.getElementById("projectSearch").addEventListener("input", function(e) {
    searchValue = e.target.value.trim();
    applyFilters();
  });

function applyFilters() {
  let filtered = [...projectsData];

  if (currentType !== "الكل") {
    filtered = filtered.filter(p =>
      p.type && p.type.includes(currentType)
    );
  }

  if (searchValue) {
    filtered = filtered.filter(p =>
      p.title.includes(searchValue)
    );
  }

  renderProjects(filtered);
}


});
}

else if(document.getElementById("available_projects")){
document.addEventListener("DOMContentLoaded", function() {

  const container_1 = document.getElementById("available_projects");

  function renderProjects(data) {
    container_1.innerHTML = "";
    if(data.length === 0) {
      container_1.innerHTML = "<p class='text-center'>لا يوجد مشاريع مطابقة</p>";
      return;
    }
    data.forEach(p => {
      container_1.innerHTML +=`
    
          <div class="col-12 col-md-6 project_section border-card-project p-3">
      <a href="project.html?id=${p.id}">
        <div class="card">
          
          <div class="card_img">
          
          ${p.status !== "مباع" ? '<div class="d-none" >' : '<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px;  height: auto; margin:auto;">'}
            <img src="${themeData.templateUrl}/assets/imgs/img_log.png" class="card-img">
          </div>
          
            <img src="${themeData.templateUrl}/${p.image}" class="card-img h-100">
          </div>

          <div class="card_img_text">
            <div class="card_img_text1">${p.text}</div>
          </div>

           <div class="card_img_text_2">
            <div class="card_img_text1">${p.title}-${p.city}</div>
          </div>

          <div id="units-box">
            <div class="d-flex justify-content-between">
              <p class="text-sm m-0">الوحدات المتاحة</p>
              <p class="m-0">${p.units}</p>
            </div>

            <div class="d-flex justify-content-between mt-1">
              <p class="text-sm text-muted m-0">نسبة الحجز</p>
              <p class="m-0">${p.percent}%</p>
            </div>

            <div class="progress mt-2">
              <div class="progress-bar" style="width: ${p.percent}%;"></div>
            </div>
          </div>

          <div class="p-3">

            <hr class="mt-3 text-muted">

            <div class="project_price d-flex justify-content-between">
  <div>
    <div class="d-flex justify-content-between">
      <span class="d-flex flex-column justify-content-center text-center">
      ${p.status !== "مباع" ? '<i class="text-muted fa-solid fa-money-bill-1"></i>' : ''}   
      
      </span>
      ${p.status !== "مباع" ? '<p>أسعار تبدأ من</p>' : ''}
    </div>
    <p class="bold text-black">
      ${p.status === "مباع" ? "تم البيع" : p.price}
    </p>
  </div>

  <div>
    <div class="d-flex justify-content-center">
      <span class="d-flex flex-column justify-content-center text-center">
        <i class="text-muted fa-solid fa-house"></i>
      </span>
      <p>المساحات</p>
    </div>
    <p class="bold text-black">${p.space}</p>
  </div>
</div>


          <div class="card-btn d-flex justify-content-between">
            <a href="https://wa.me/966559604044?text=${encodeURIComponent(`مرحبا، حاب استفسر عن مشروع ( ${p.title})`)}" 
   target="_blank" 
   class="d-block btn-1 col-5 btn mt-3">
   تواصل معنا
</a>

            <a href="project.html?id=${p.id}" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
          </div>

        </div>
      </a>
    </div>
    
        `;
    });
  }

const availableOnly = projectsData.filter(p => p.status === "متاح");
renderProjects(availableOnly);

  document.querySelectorAll(".filter-btn").forEach(btn => {
    btn.addEventListener("click", function() {
      document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
      this.classList.add("active");
      currentType = this.dataset.type;
      applyFilters();
    });
  });



});
}
else if(document.getElementById("notAvailable_projects")){
document.addEventListener("DOMContentLoaded", function() {

  const container_1 = document.getElementById("notAvailable_projects");

  function renderProjects(data) {
    container_1.innerHTML = "";
    if(data.length === 0) {
      container_1.innerHTML = "<p class='text-center'>لا يوجد مشاريع مطابقة</p>";
      return;
    }
    data.forEach(p => {
      container_1.innerHTML +=`
    
          <div class="col-12 col-md-6 project_section border-card-project p-3">
      <a href="project.html?id=${p.id}">
        <div class="card">
          
          <div class="card_img">
          
          ${p.status !== "مباع" ? '<div class="d-none" >' : '<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px;  height: auto; margin:auto;">'}
            <img src="${themeData.templateUrl}/assets/imgs/img_log.png" class="card-img">
          </div>
          
            <img src="${themeData.templateUrl}/${p.image}" class="card-img h-100">
          </div>

          <div class="card_img_text">
            <div class="card_img_text1">${p.text}</div>
          </div>

           <div class="card_img_text_2">
            <div class="card_img_text1">${p.title}-${p.city}</div>
          </div>

          <div id="units-box">
            <div class="d-flex justify-content-between">
              <p class="text-sm m-0">الوحدات المتاحة</p>
              <p class="m-0">${p.units}</p>
            </div>

            <div class="d-flex justify-content-between mt-1">
              <p class="text-sm text-muted m-0">نسبة الحجز</p>
              <p class="m-0">${p.percent}%</p>
            </div>

            <div class="progress mt-2">
              <div class="progress-bar" style="width: ${p.percent}%;"></div>
            </div>
          </div>

          <div class="p-3">

            <hr class="mt-3 text-muted">

<div class="project_price d-flex justify-content-center text-center">

  ${
    p.status === "مباع"
      ? `<p class="bold text-danger w-100">تم البيع</p>`
      : p.status === "تحت الإنشاء"
      ? `<p class="bold w-100" style="color: var(--bg-1)!important;">تحت الإنشاء</p>`
      : `
        <div class="d-flex justify-content-between w-100">
          
          <div>
            <div class="d-flex justify-content-between">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-money-bill-1"></i>
              </span>
              <p>أسعار تبدأ من</p>
            </div>
            <p class="bold text-black">${p.price || "غير محدد"}</p>
          </div>

          <div>
            <div class="d-flex justify-content-center">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-house"></i>
              </span>
              <p>المساحات</p>
            </div>
            <p class="bold text-black">${p.space || "-"}</p>
          </div>

        </div>
      `
  }

</div>

          <div class="card-btn d-flex justify-content-between">
            <a href="https://wa.me/966559604044?text=${encodeURIComponent(`مرحبا، حاب استفسر عن مشروع ( ${p.title})`)}" 
   target="_blank" 
   class="d-block btn-1 col-5 btn mt-3">
   تواصل معنا
</a>

            <a href="project.html?id=${p.id}" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
          </div>

        </div>
      </a>
    </div>
    
        `;
    });
  }

const availableOnly = projectsData.filter(p => p.status === "مباع");
renderProjects(availableOnly);

  document.querySelectorAll(".filter-btn").forEach(btn => {
    btn.addEventListener("click", function() {
      document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
      this.classList.add("active");
      currentType = this.dataset.type;
      applyFilters();
    });
  });



});
}
else if(document.getElementById("projects2")){
document.addEventListener("DOMContentLoaded", function() {

  const container_1 = document.getElementById("projects2");

  function renderProjects(data) {
    container_1.innerHTML = "";
    if(data.length === 0) {
      container_1.innerHTML = "<p class='text-center'>لا يوجد مشاريع مطابقة</p>";
      return;
    }
    data.forEach(p => {
      container_1.innerHTML +=`
    
          <div class="col-12 col-md-6 project_section border-card-project p-3">
      <a href="project.html?id=${p.id}">
        <div class="card">
          
          <div class="card_img">
          
          ${
    p.status === "مباع"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/img_log.png" class="card-img">
         </div>`
      : p.status === "تحت الإنشاء"
      ? `<div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
           <img src="${themeData.templateUrl}/assets/imgs/not_finished.png" class="card-img">
         </div>`
      : ""
  }
          
            <img src="${themeData.templateUrl}/${p.image}" class="card-img h-100">
          </div>

          <div class="card_img_text">
            <div class="card_img_text1">${p.text}</div>
          </div>

           <div class="card_img_text_2">
            <div class="card_img_text1">${p.title}-${p.city}</div>
          </div>

         <!--  <div id="units-box">
           <div class="d-flex justify-content-between">
              <p class="text-sm m-0">الوحدات المتاحة</p>
              <p class="m-0">${p.units}</p>
            </div>

            <div class="d-flex justify-content-between mt-1">
              <p class="text-sm text-muted m-0">نسبة الحجز</p>
              <p class="m-0">${p.percent}%</p>
            </div>

            <div class="progress mt-2">
              <div class="progress-bar" style="width: ${p.percent}%;"></div>
            </div>
          </div>-->

          <div class="p-3" style="margin:auto 0!important;">

            <hr class="mt-3 text-muted">

          <div class="project_price d-flex justify-content-center text-center">

  ${
    p.status === "مباع"
      ? `<p class="bold text-danger w-100">تم البيع</p>`
      : p.status === "تحت الإنشاء"
      ? `<p class="bold w-100" style="color: var(--bg-1)!important;">تحت الإنشاء</p>`
      : `
        <div class="d-flex justify-content-between w-100">
          
          <div>
            <div class="d-flex justify-content-between">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-money-bill-1"></i>
              </span>
              <p>أسعار تبدأ من</p>
            </div>
            <p class="bold text-black">${p.price || "غير محدد"}</p>
          </div>

          <div>
            <div class="d-flex justify-content-center">
              <span class="d-flex flex-column justify-content-center text-center">
                <i class="text-muted fa-solid fa-house"></i>
              </span>
              <p>المساحات</p>
            </div>
            <p class="bold text-black">${p.space || "-"}</p>
          </div>

        </div>
      `
  }

</div>


          <div class="card-btn d-flex justify-content-between">
            <a href="https://wa.me/966559604044?text=${encodeURIComponent(`مرحبا، حاب استفسر عن مشروع ( ${p.title})`)}" 
   target="_blank" 
   class="d-block btn-1 col-5 btn mt-3">
   تواصل معنا
</a>

            <a href="project.html?id=${p.id}" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
          </div>

        </div>
      </a>
    </div>
    
        `;
    });
  }

const availableOnly = projectsData.filter(p => p.status === "تحت الإنشاء");
renderProjects(availableOnly);

  document.querySelectorAll(".filter-btn").forEach(btn => {
    btn.addEventListener("click", function() {
      document.querySelectorAll(".filter-btn").forEach(b => b.classList.remove("active"));
      this.classList.add("active");
      currentType = this.dataset.type;
      applyFilters();
    });
  });



});
}
else {let currentPage = 1;
const perPage = 6;
let project; 
document.addEventListener("DOMContentLoaded", () => {
  const params = new URLSearchParams(window.location.search);
  const projectId = params.get("id");
  project = projectsData.find(p => p.id == projectId);

  const project_banner = document.getElementById("project_banner");

if (project_banner && project) {
  project_banner.style.backgroundImage = `url(${project.image})`;
}

if(project.lat && project.lng){

  (async function initProjectMap() {
    if (typeof window.ensureLeaflet === 'function') {
      await window.ensureLeaflet();
    } else if (!window.L) {
      return;
    }

  const map = L.map('project-map').setView([project.lat, project.lng], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
  }).addTo(map);

  const icon = L.divIcon({
    className:'',
    html:`<div class="custom-marker"></div>`,
    iconSize:[22,22]
  });

  L.marker([project.lat, project.lng], {icon})
    .addTo(map)
    .bindPopup(`
      <div style="text-align:center">
        <h4 class="text-black">${project.title}</h4>
        <hr class="my-2">
        <div class="d-flex justify-content-center">
          <span class="d-flex flex-column justify-content-center text-center">
            <i class="text-muted fa-solid fa-money-bill-1"></i>
          </span>
          <p class="m-0">أسعار تبدأ من ${project.price}</p>
        </div>
        <div class="d-flex justify-content-center">
          <span class="d-flex flex-column justify-content-center text-center">
            <i class="text-muted fa-solid fa-house"></i>
          </span>
          <p class="m-0">مساحات تبدأ من ${project.space}</p>
        </div>

        <a href="https://www.google.com/maps?q=${project.lat},${project.lng}" target="_blank">
          فتح في Google Maps
        </a>
      </div>
    `)
    .bindTooltip(project.title,{
      permanent:true,
      direction:"top",
      offset:[0,-15],
      className:"marker-tooltip"
    });

  })();
}

  if(!project) {
    document.getElementById("project_page").innerHTML = "<h2 style='text-align:center'>المشروع غير موجود</h2>";
    return;
  }

  document.getElementById("proj-title").textContent = project.title;
  document.getElementById("proj-location").textContent = project.city2;
  document.getElementById("summary-space").textContent = project.space;
  document.getElementById("summary-price").textContent = project.price;
  document.getElementById("summary-types").textContent = project.types;
  document.getElementById("summary-city").textContent = project.city;
  document.getElementById("project_description_1").textContent= project.description_1
  document.getElementById("project_description_2").textContent= project.description_2
  
  setTimeout(() => {
  const project_status = document.getElementById("summary-status")?.textContent.trim();
  if (project_status === "مباع" || project_status ===  "تحت الإنشاء") {
    const project_space = document.getElementById("summary-space")?.closest(".info-box");
    const project_price = document.getElementById("summary-price")?.closest(".info-box");
    if (project_space) project_space.style.display = "none";
    if (project_price) project_price.style.display = "none";
  }

}, 500);

  const statusEl = document.getElementById("summary-status");
  statusEl.textContent = project.status;
  if (project.status === "مباع") {
    statusEl.style.color = "red";
    statusEl.style.fontWeight = "800";
  } else if (project.status === "متاح") {
    statusEl.style.color = "green";
    statusEl.style.fontWeight = "800";
  }

const PdfBtn = document.getElementById("pdf_btn");
const PdfPriceBtn = document.getElementById("pdf_price_btn");
if (project.pdf_file) {
  PdfBtn.href = project.pdf_file;
  PdfBtn.setAttribute("download", "");
  PdfBtn.style.display = "block";
} else {
  PdfBtn.style.display = "none!important";
}
if (project.pdf_price_file) {
  PdfPriceBtn.href = project.pdf_price_file;
  PdfPriceBtn.setAttribute("download", "");
  PdfPriceBtn.style.display = "block";
} else {
  PdfPriceBtn.style.display = "none!important";
}
  const imagesContainer = document.getElementById("proj-images");
  imagesContainer.innerHTML = "";
  project.images.forEach(img => {
    const image = document.createElement("img");
    image.src = img;
    image.alt = project.title;
    imagesContainer.appendChild(image);
  });

  //whatsapp
  const whatsappLink = document.getElementById("whatsapp-link")
  whatsappLink.href =
    "https://wa.me/966559604044?text=" +
    encodeURIComponent(`مرحبا، حاب استفسر عن مشروع (${project.title})`);

  renderUnits();
});

window.addEventListener("resize", () => {
  if(project) renderUnits();
});

function renderUnits() {
  const start = (currentPage - 1) * perPage;
  const end = start + perPage;
  const units = project.detailedUnits.slice(start, end);

  const table = document.querySelector(".units-table");
  const tbody = document.getElementById("units-table-body");
  const mobileContainerId = "mobile-units-container";

  if(window.innerWidth <= 767) {
    if(table) table.style.display = "none";

    let section = document.getElementById(mobileContainerId);
    if (!section) {
      section = document.createElement("section");
      section.id = mobileContainerId;
      section.classList.add("container-fluid");
      table.parentNode.insertBefore(section, table);
    }
    section.innerHTML = "";

    units.forEach(u => {
      section.innerHTML += `
        <div class="row d-flex justify-content-center align-items-center m-2">
          <div class="col-12 my-3 p-0" style="border: 0px solid; border-radius: 20px;">
            <div class="col-12 card p-3">
              <div class="d-flex flex-column justify-content-between">
                <div class="row d-flex flex-row justify-content-between mb-3">
                  <div class="col-6 d-flex flex-column">
                    <p class="mb-0">رقم الوحدة</p>
                    <p class="bold text-black">${u.number}</p>
                  </div>
                  <div class="col-6 d-flex flex-column">
                    <p class="mb-0">الدور</p>
                    <p class="bold text-black ">${u.floor}</p>
                  </div>
                </div>
                <div class="row d-flex flex-row justify-content-between">
                  <div class="col-6 d-flex flex-column">
                    <p class="mb-0">المساحة</p>
                    <p class="bold text-black">${u.area}</p>
                  </div>
                  <div class="col-6 d-flex flex-column">
                    <p class="mb-0">السعر</p>
                    <p class="bold text-black">${u.reserved ? 'مباع' : u.price + ' ر.س'}</p>
                  </div>
                </div>
                <div class="d-flex justify-content-center"><hr class="mt-3 text-muted w-100"></div>
                <div class="card-btn d-flex justify-content-around">
                  ${u.reserved ? '' : `<a href="https://wa.me/966559604044?text=حجز وحدة رقم ${u.number} في ${project.title} تقع بالدور ${u.floor} بمساحة ${u.area} م² وسعر ${u.price} ر.س"
                  target="_blank" 
                  class="d-block btn-3 m-auto col-5 btn mt-3 w-100">
                  احجز الوحدة
                  </a>`}
                </div>
              </div>
            </div>
          </div>
        </div>`;
    });

  } else {
    if(table) table.style.display = "table";
    tbody.innerHTML = "";
    units.forEach(u => {
      tbody.innerHTML += `
        <tr>
          <td>${u.number}</td>
          <td>${u.floor}</td>
          <td>${u.type}</td>
          <td>${u.area}</td>
          <td>${u.reserved ? 'مباع' : u.price + ' ر.س'}</td>
          <td>
            ${u.reserved ? '' : `<a href="https://wa.me/966559604044?text=حجز وحدة رقم ${u.number} في ${project.title} تقع بالدور ${u.floor} بمساحة ${u.area} م² وسعر ${u.price} ر.س"
               target="_blank"
               class="btn btn-secondary">
             احجز الوحدة
             </a>`}
          </td>
        </tr>`;
    });
  }

  renderPagination();
  setTimeout(() => {
  initUnitsAnimation();
}, 100);
}

function renderPagination() {
  const totalPages = Math.ceil(project.detailedUnits.length / perPage);
  const pagination = document.getElementById("pagination");
  if(!pagination) return;

  pagination.innerHTML = "";

  for(let i = 1; i <= totalPages; i++) {
    const btn = document.createElement("button");
    btn.textContent = i;
    if(i === currentPage) btn.classList.add("active");
    btn.addEventListener("click", () => {
      currentPage = i;
      renderUnits();
    });
    pagination.appendChild(btn);
  }
}
}

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry, index) => {
    if (entry.isIntersecting) {
      setTimeout(() => {
        entry.target.classList.add("show");
      }, index * 120); 
    }
  });
}, { threshold: 0.2 });

document.querySelectorAll(".project_section").forEach(card => {
  observer.observe(card);
});
