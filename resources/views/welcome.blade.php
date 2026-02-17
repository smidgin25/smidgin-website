<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="./output.css" rel="stylesheet" type="text/css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Baskervville:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://kit.fontawesome.com/e70ea989f6.js" crossorigin="anonymous"></script>
    <script>
        function openModal(id) {
          document.getElementById(id).classList.remove('hidden')
        }
        function closeModal(id) {
          document.getElementById(id).classList.add('hidden')
        }
    </script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        #LetsMakeCocktails {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #LetsMakeCocktails::-webkit-scrollbar {
          display: none; 
        }
        #DiscoverOurGin {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #DiscoverOurGin::-webkit-scrollbar {
          display: none; 
        }
        #slideshowReviews {
          -ms-overflow-style: none; 
          scrollbar-width: none; 
        }
        #slideshowReviews::-webkit-scrollbar {
          display: none; 
        }
        

    </style>
</head>
<body>
<!-- Homepage Section -->
<div id="homepage" class="font-montserrat md:px-28 pt-14 bg-[#FEF2F1] md:h-[650px] h-[350px] space-y-16 flex flex-col items-center">
    <div id="navbar" class="flex w-[99%] md:px-0 px-9 justify-between items-center">
        <a href="./index.html" id="logo" class="md:w-[208px] w-[180px]">
            <img src="./img/logo.png"/>
        </a>
        <i class="fa-solid md:hidden w-[46px] text-xl h-[46px] text-center flex justify-center items-center text-white bg-red-500 rounded-full p-2 fa-bars"></i>
        <div id="navs" class="hidden md:flex space-x-11 text-base items-center">
            <a href="./whoweare.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHO WE ARE</a>
            <a href="./ourgin.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">OUR GIN</a>
            <a href="./whatweoffer.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">WHAT WE OFFER</a>
            <a href="findourstores.html" class="border-b-[1.5px] border-b-black pb-[1.7px]">FIND OUR STORES</a>
            <a  class="px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BUY ONLINE</a>
        </div>
    </div>
    <div id="video" class="md:w-[99%] w-[90%] -mb-7">
      <video 
        class="w-full rounded-3xl shadow-md shadow-neutral-500"
        src="./SMIDGIN VIDEO.mp4"
        autoplay
        loop
        muted
        playsinline
      >
        Sorry, your browser doesn’t support embedded videos.
      </video>
    </div>   
</div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>


<!-- Gin Section -->
<div id="gin" class="bg-white font-Baskervville flex md:flex-row flex-row-reverse items-center justify-center md:items-center md:justify-start md:space-x-40 md:px-36 px-0 md:pt-52">
    <div class="md:w-1/3 w-[160px] md:pl-14 ">
        <img src="{{ asset('img/classic.png') }}" class=" w-[303px]"/>
    </div>

    <div class="flex w-1/2  flex-col space-y-3">
        <div class="flex md:text-5xl text-[22px] flex-col space-y-4">
            <p>A BOTTLE BORN</p>
            <p>OF <SPAN class="text-red-500">MACEDONIAN</SPAN></p>
            <p>CRAFT</p>
        </div>

        <div class="flex items-center pt-5 space-x-4">
            <i class="fa-solid fa-computer-mouse text-red-500"></i>
            <p class="font-montserrat text-sm text-red-500">Hover over the bottle to discover its story</p>
        </div>
    </div>
</div>




<!-- Slideshow Section -->
<div id="slideshow" class="pt-36">
    <div class="pl-36 flex space-x-3 font-Baskervville">
        <p class="text-5xl">DISCOVER OUR</p>
        <p class="text-5xl text-red-500">GIN</p>
    </div>
    <!-- Horizontal slider -->
    <div id="DiscoverOurGin" class="overflow-x-auto pt-16">
        <div class="flex flex-nowrap py-12 md:px-24 px-24  space-x-9">
            <!-- Slide 1 -->
            <div class="relative group flex-shrink-0 w-1/3 h-[507px] snap-start">
               <img src="img/Screenshot 2025-09-20 at 04.39.20.png" class="w-full group-hover:blur-md group-hover:cursor-pointer group-hover:opacity-60 duration-500 delay-100"/>
               <div class="-mt-[450px] -ml-2 absolute flex flex-col items-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                   <p class="text-7xl text-[#EF4135] font-montserrat pointer-events-auto">Smidgin</p>
                   <p class="text-7xl text-[#EF4135] ml-36 font-montserrat pointer-events-auto">Classic</p>
                   <a href="./classic.html" class="mt-20 ml-20 px-3 py-2 bg-red-500 rounded-xl font-montserrat text-white">Read more</a>
               </div>
            </div>
            <!-- Slide 2 -->
            <div class="relative group flex-shrink-0 w-1/3 h-[507px] snap-start">
                <img src="img/Screenshot 2025-09-20 at 04.37.47.png" class="w-full group-hover:blur-md group-hover:cursor-pointer group-hover:opacity-60 duration-500 delay-100"/>
                <div class="-mt-[400px] -ml-2 absolute flex flex-col items-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <p class="text-7xl text-[#4D2957] font-montserrat pointer-events-auto">Smidgin</p>
                    <p class="text-8xl text-[#4D2957] ml-36 font-Velvet pointer-events-auto">Velvet</p>
                    <a class="mt-20 ml-20 px-3 py-2 bg-[#4D2957] rounded-xl font-montserrat text-white">Read more</a>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="relative group flex-shrink-0 w-1/3 h-[507px] snap-start">
                <img src="sliki/orient.png" class="w-full group-hover:blur-md group-hover:cursor-pointer group-hover:opacity-60 duration-500 delay-100"/>
                <div class="-mt-[400px] -ml-2 absolute flex flex-col items-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <p class="text-7xl text-[#821A16] font-montserrat pointer-events-auto">Smidgin</p>
                    <p class="text-7xl text-[#821A16] ml-36 font-Papyrus pointer-events-auto">Orient</p>
                    <a class="mt-20 ml-20 px-3 py-2 bg-[#821A16] rounded-xl font-montserrat text-white">Read more</a>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="relative group flex-shrink-0  w-1/3 h-[507px] snap-start">
                <img src="./sliki/xo.png" class="w-full group-hover:blur-md group-hover:cursor-pointer group-hover:opacity-60 duration-500 delay-100"/>
                <div class="-mt-[400px] -ml-2 absolute flex flex-col items-center opacity-0 group-hover:opacity-100 transition-opacity delay-100 duration-500 pointer-events-none group-hover:duration-500">
                    <p class="text-7xl text-[#A24B1E] font-montserrat pointer-events-auto">Smidgin</p>
                    <p class="text-7xl text-[#A24B1E] ml-36 font-Baskervville pointer-events-auto">XO</p>
                    <a class="mt-20 ml-20 px-3 py-2 bg-[#A24B1E] rounded-xl font-montserrat text-white">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- 14 Botanicals Section -->
<div id="14Botanicals" class="font-Baskervville flex pt-36 pl-36 pr-48 justify-center space-x-14 items-center">
    <div class="w-1/2">
        <img src="./img/Screenshot 2025-08-30 at 14.05.24.png" class="w-full"/>
    </div>
    <div>
        <div class="flex items-end space-x-3">
            <p class="text-7xl text-red-500">14</p>
            <p class="text-5xl">BOTANICALS</p>
        </div>
        <p class="text-5xl">FOR A DISTINCT <BR/> GIN</p>
        <div class="flex items-center pt-5 space-x-4">
            <i class="fa-solid fa-computer-mouse text-red-500"></i>
            <p class="font-montserrat text-xs text-red-500">Hover over the icons to learn more about the botanicals</p>
        </div>
    </div>
</div>

<!-- Distillery Section -->
<div id="Distillery" class="pt-44">
    <div class="flex px-36 justify-between ">
            <div id="levo" class="font-Baskervville">
                <div class="flex space-x-3">
                    <p class="text-5xl">VISIT THE</p>
                    <p class="text-5xl text-red-500">SMIDGIN</p>
                </div>
                    <br/>
                    <p class="text-5xl">DISTILLERY</p>
            </div>
            <div id="desno" class="font-montserrat text-xl">
                <p>Smidgin is distilled and bottled at a unique <br/> location in the center of Skopje, in the historic<br/> <span class="text-red-500 font-semibold">MCM building</span>, the house of the Ruben family, <br/> in Debar Maalo.</p>
            </div>
    </div>
    <div class="flex items-center justify-start pl-36 space-x-14 pt-9">
        <div class="w-1/2">
            <img src="./img/Screenshot 2025-08-30 at 14.26.32.png"/>
        </div>
        <div class=" font-montserrat  flex flex-col items-center space-y-8">
            <p class="text-center text-[20px]">Join us for a behind-the-scenes look<br/> at how Smidgin comes to life. <br/><br/>You'll explore, taste, laugh, and leave<br/>with a new favorite spirit, and<br/>maybe a few fun facts to share at<br/>your next night out.</p>
            <a href="./whatweoffer.html" class="px-5 py-3 w-40 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">BOOK A TOUR</a>
        </div>
    </div>
</div>

<!-- Make it yours Section -->
<br/>
<br/>
<br/>
<div class="flex justify-between px-40 items-center">
    <div class="flex flex-col space-y-7">
        <br/>
        <h1 class="font-Baskervville text-[48px]">MAKE IT <span class="text-red-500">YOURS</span></h1>
        <br/>
        <h2 class="text-[22px] font-montserrat font-semibold">Custom Labels for Every Occasion</h2>
        <p class="text-[22px] font-montserrat">Celebrate in style with a personalized Smidgin<br/>bottle. Whether it's a birthday, wedding, corporate<br/>gift, or a just-because moment, you choose the<br/> name, message or logo, and we'll design a custom<br/>label that makes your bottle truly one-of-a-kind.</p>
        <br/>
        <br/>
        <a href="./whatweoffer.html" class="-mt-4 px-5 font-montserrat text-center py-[16px] w-[298px] h-[55px] bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">PERSONALIZE YOUR BOTTLE</a>
    </div>
    <div class="w-[469px] h-[444px]">
        <img src="./img/Screenshot 2025-08-30 at 14.38.07.png"/>
    </div>
</div>

<!-- Lets make cocktails Section -->
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="pl-36">
    <div class="flex justify-between  pr-36 items-end">
        <div class="font-Baskervville text-5xl">
            <p>LET'S MAKE</p>
            <p class="text-red-500">COCKTAILS</p>
        </div>
        <div>
            <p class="text-[22px] italic font-serif ">Easy to mix. Impossible to forget</p>
        </div>
    </div>
</div>
<div id="LetsMakeCocktails" class="overflow-x-auto">
    <div class="flex flex-nowrap py-12 md:px-24 px-24  space-x-5">
        <!-- FIG SOUR -->
        <div class="min-w-[350px] px-6 flex flex-col group justify-center items-center">
              <img src="img/figsour.png" class=" hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('fig-sour')"/>
              <p class="font-Baskervville text-2xl transition-transform group-hover:duration-500 delay-100 group-hover:underline cursor-pointer" onclick="openModal('fig-sour')">Fig Sour</p>  
        </div>
        <div id="fig-sour" class="fixed inset-0 hidden flex items-center justify-center z-50">
          <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[773px] h-[600px] relative flex flex-col justify-center items-center"
            onclick="event.stopPropagation()"
          >
        
            <h2 class="text-2xl font-Baskervville mb-14">Fig Sour</h2>
        
            <div id="main" class="flex items-center font-montserrat font-bold">
              <div id="levo" class="flex flex-col space-y-32 -mt-24">
                <div class="flex text-center"><p>50ml SMIDGIN <br />CLASSIC</p></div>
                <div class="flex text-center"><p>20ml SQUEEZED <br />LEMON</p></div>
              </div>
        
              <div id="sredina" class="-mt-5 w-[330px] h-[292px] overflow-hidden">
                <img src="img/figsour.png" class="w-full h-full object-cover object-bottom" />
              </div>
        
              <div id="desno" class="flex flex-col space-y-10">
                <div class="flex text-center -mt-16"><p class="pb-7">1 FIG</p></div>
                <br />
                <div class="flex text-center"><p>1 EGG WHITE</p></div>
                <br />
                <div class="flex text-center"><p class="pl-5">10ml SHERBET</p></div>
              </div>
            </div>
        
            <p class="mt-4 text-gray-600 text-sm text-center font-montserrat">
              Combine all ingredients in a shaker with ice. Stir, then strain into Rocks glass with ice.
              Garnish with fresh Mediterranean fig.
            </p>
          </div>
        </div>
        <script>
          // Open the modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close the modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside the white box
          document.getElementById("fig-sour").addEventListener("click", function () {
            closeModal("fig-sour");
          });
        </script>

        
        <!-- VELVET PERFECT -->
        <div class="min-w-[350px] px-6 flex flex-col group justify-center items-center">
                <img src="img/velvetperfect.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('velvetperfect')"/>
                <p class="font-Baskervville  text-2xl group-hover:underline  transition-transform duration-500 delay-100">Velvet-Perfect Serve</p>  
        </div>
        <div id="velvetperfect" class="fixed inset-0 hidden flex items-center justify-center z-50">
          <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[773px] h-[600px] relative flex flex-col justify-center items-center"
            onclick="event.stopPropagation()"
          >
        
            <h2 class="text-2xl font-Baskervville mb-3">Velvet - Perfect Serve</h2>
        
            <div class="flex items-center font-montserrat font-bold">
              <div class="-mt-24 w-1/3" id="levo-velvet">
                <div class="text-[18px] text-center">
                  <p>50ml SMIDGIN <br />VELVET</p>
                </div>
              </div>
        
              <div class="w-[312px] h-[388px] -mr-12 overflow-hidden -mt-5" id="sredina-velvet">
                <img src="img/velvetperfect.png" class="w-full h-full object-cover object-bottom" />
              </div>
        
              <div class="w-1/2" id="desno-velvet">
                <div class="text-[18px] text-center -mb-32">
                  <p>100ml GRAPEFRUIT <br />SODA</p>
                </div>
              </div>
            </div>
        
            <p class="mt-4 text-gray-600 text-sm text-center font-montserrat">
              Pour Smidgin Velvet into a glass filled with ice and top with grapefruit soda. Gently stir and
              garnish with grapefruit slice, juniper berries and lavender.
            </p>
          </div>
        </div>
        
        <script>
          // Open a modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close a modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside the modal content
          document.getElementById("velvetperfect").addEventListener("click", function () {
            closeModal("velvetperfect");
          });
        </script>
        


        <!-- GIN TONIC -->
        <div class="min-w-[350px] px-6 flex flex-col group justify-center items-center">
                <img src="img/gintonik.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('S&T')"/>
                <p class="font-Baskervville  text-2xl group-hover:underline  transition-transform duration-500 delay-100">S&T</p>  
        </div>
        <div id="S&T" class="fixed inset-0 hidden flex items-center justify-center z-50">
          <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[773px] h-[600px] relative flex flex-col justify-center items-center"
            onclick="event.stopPropagation()"
          >
        
            <h2 class="text-2xl font-Baskervville mb-3">S&T</h2>
        
            <div class="flex items-center font-montserrat font-bold">
              <div class="-mb-2 w-1/3 -mr-7 text-[18px] text-center space-y-20" id="levo-velvet">
                <div>
                  <p>50ml SMIDGIN <br />VELVET</p>
                </div>
                <div>
                  <p>100ml TONIC WATER</p>
                </div>
              </div>
        
              <div class="w-[312px] h-[388px] -mr-20 overflow-hidden -mt-5" id="sredina-velvet">
                <img src="img/gintonik.png" class="w-full h-full object-cover object-bottom" />
              </div>
        
              <div class="w-1/2" id="desno-velvet">
                <div class="text-[18px] text-center -mb-32">
                  <p>LIME SQUEEZE</p>
                </div>
              </div>
            </div>
        
            <p class="mt-4 text-gray-600 text-sm text-center font-montserrat">
              Pour Smidgin into glass filled with ice and top with tonic water. Gently stir and garnish with
              juniper berries, mountain tea and lime.
            </p>
          </div>
        </div>
        <script>
          // Open a modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close a modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside (special handling for "&" in ID)
          document.querySelector('#S\\&T').addEventListener('click', function () {
            closeModal('S&T');
          });
        </script>




        <!-- NEGRONI  -->
        <div class="min-w-[350px] px-6 flex flex-col group justify-center items-center">
                <img src="img/negroni.png" class="h- hover:cursor-pointer transition-transform hover:scale-105 duration-500 delay-100" onclick="openModal('negroni')"/>
                <p class="font-Baskervville  text-2xl group-hover:underline  transition-transform duration-500 delay-100">Negroni</p>  
        </div>
        <div id="negroni" class="fixed inset-0 hidden flex items-center justify-center z-50 ">
          <div
            class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[773px] h-[600px] relative flex flex-col justify-center items-center"
            onclick="event.stopPropagation()"
          >

        
            <h2 class="text-2xl font-Baskervville mb-20">Negroni</h2>
        
            <div class="flex items-center font-montserrat font-bold">
              <div class="mb-40 -mr-7 text-[18px] text-center space-y-20" id="levo-velvet">
                <div>
                  <p>50ml SMIDGIN <br />CLASSIC</p>
                </div>
              </div>
        
              <div class="w-[362px] h-[350px] -mt-44 -mr-10 overflow-hidden" id="sredina-velvet">
                <img src="img/negroni.png" class="w-full h-full object-cover" />
              </div>
        
              <div class="flex flex-col text-[18px] text-center" id="desno-velvet">
                <div>
                  <p class="-mt-32 -mr-16">25ml CAMPARI</p>
                </div>
                <div>
                  <p>25ml SWEET <br />VERMOUTH</p>
                </div>
              </div>
            </div>
        
            <p class="mt-4 text-gray-600 text-sm text-center font-montserrat">
              Combine all ingredients in a shaker with ice. Stir, then strain into Rocks glass with ice.
              Garnish with Orange Twist.
            </p>
          </div>
        </div>
        <script>
          // Open modal
          function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
          }
        
          // Close modal
          function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
          }
        
          // Close when clicking outside
          document.getElementById("negroni").addEventListener("click", function () {
            closeModal("negroni");
          });
        </script>

    </div>
</div>


<!-- Have a cocktail idea? -->
<div class="px-36">
    <div class="flex justify-between items-center pt-32 pr-36">
        <div class="font-montserrat text-[22px] pl-20 ">
            <h1 class="font-semibold">Have a Cocktail Idea? We're listening.</h1>
            <br/>
            <h2>Created something delicious with Smidgin? <br/>Share your recipe with us, we're always excited to see<br/>how our gin inspires new mixes.</h2>
        </div>
        <div>
            <i onclick="openModal('writerecipe')" class="cursor-pointer text-3xl bg-red-500 p-7 shadow-lg shadow-red-500 text-white rounded-full fa-solid fa-pencil"></i>            
        </div>
    </div>
    <div id="writerecipe" class="fixed inset-0 hidden flex items-center justify-center z-50">
      <div class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[773px] h-[600px] relative flex flex-col justify-start items-center">
        <h1 class="font-Baskervville text-center text-[32px] pb-10">Write Your Recipe</h1>
        
        <div class="relative w-full">
          <textarea rows="8" placeholder="Write your recipe here" class="border border-black font-montserrat rounded-2xl p-8 w-full focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          <img src="./img/uploadpic.png" class="absolute bottom-4 right-4 w-[32px] h-[32px] cursor-pointer"/>
        </div>
    
        <div class="flex w-full justify-end mt-11 items-center space-x-7">
            <p class="cursor-pointer underline font-montserrat" onclick="closeModal('writerecipe')">Cancel</p>
            <a class="cursor-pointer font-montserrat px-5 py-3 bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white"  onclick="openModal('cheerstoyou');closeModal('writerecipe')">SUBMIT</a>
        </div>
      </div>
    </div>
    <div id="cheerstoyou" class="fixed inset-0 hidden flex items-center justify-center z-50">
      <div id="cheerstoyouContent" class="bg-white/70 backdrop-blur-sm rounded-2xl shadow-2xl p-20 w-[474px] h-[247px] relative flex flex-col justify-center items-center">
        <h1 class="font-Baskervville text-center text-[32px] pb-3">Cheers to you!</h1>
        <p class="font-montserrat text-center text-[16px]">Your Smidgin cocktail recipe is on its way to our tasting list.</p>
      </div>
    </div>
    
    <script>
      const cheersModal = document.getElementById("cheerstoyou");
      const cheersContent = document.getElementById("cheerstoyouContent");
    
      // Click outside the content closes the modal
      cheersModal.addEventListener("click", () => {
        cheersModal.classList.add("hidden");
      });
    
      // Clicking inside content doesn't close it
      cheersContent.addEventListener("click", (e) => {
        e.stopPropagation();
      });
    </script>
</div>


<!-- The story behind the spirit Section -->
<div class="px-36 flex pt-32">
    <div class="w-2/3 flex flex-col space-y-16">
        <div class="font-Baskervville text-5xl">
            <h1>THE STORY <br/>BEHIND THE <span class="text-red-500">SPIRIT</span></h1>
        </div>
        <div class="flex">
            <div class="flex flex-col space-y-14 items-center w-1/2 ">
                <p class="text-[18px] font-montserrat">Conceived by two gin enthusiasts in search of the perfect spirit, Smidgin is a one-shot London Dry Gin, distilled at our MCM craft distillery in the heart of Skopje. The recipe is rooted in wild Macedonian nature, blending fresh foraged juniper berries and mountain tea into every small batch.</p>
                <a href="./whoweare.html" class="px-5 py-3 w-36 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] font-montserrat rounded-xl text-white">READ MORE</a>
            </div>
            <div class="w-1/2 pl-10">
                <img src="./img/Screenshot 2025-09-01 at 04.15.36.png"/>
            </div>
        </div>
    </div>
    <div class="w-1/3 pl-7">
        <img src="./img/Screenshot 2025-09-01 at 04.21.57.png"/>
    </div>
</div> 

<!-- Find our stores worldwide Section -->
<div class="font-Baskervville text-5xl text-center pt-32">
    <h1>FIND OUR STORES <span class="text-red-500">WORLDWIDE</span></h1>
</div>
<div class="px-44 pt-6">
    <img src="./img/Screenshot 2025-09-01 at 04.25.35.png"/>
</div>
<div class="font-montserrat pt-9 flex flex-col space-y-6 items-center">
    <h1 class="text-center text-[20px] px-52">Smidgin is available in select boutiques, bars, and retailers around the world. Explore our global map to discover where you can sip, shop, and experience the spirit of Smidgin.</h1>
    <a href="./findourstores.html" class="px-5 py-3 w-60 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">DISCOVER LOCATIONS</a>
</div>

<!-- Award winning gin Section -->
<div class="pt-32">
   <div class="font-Baskervville text-5xl text-center">
       <h1>AWARD <SPAN class="text-red-500">WINNING</SPAN> GIN</h1>
   </div>
   <div class="px-36 pt-16">
       <img src="./img/Screenshot 2025-09-02 at 00.09.29.png"/>
   </div>
   <div class="flex font-montserrat px-64 space-x-6 justify-between items-center pt-20">
       <div class="w-2/3 text-xl">
           <p>At Smidgin, we’ve always believed that doing things the right way, carefully, slowly, and by hand, speaks for itself. But it’s even better when others speak for us.</p>
       </div>
       <div class="w-1/3 pl-24">
           <a href="reviews.html" class="px-5 py-3 w-60 text-center bg-red-500 shadow-[0_6px_12px_rgba(239,68,68,0.6)] rounded-xl text-white">READ REVIEWS</a>
       </div>
   </div>
</div>

<!-- Voices of our costumers Section -->
<div>
    <div class="flex items-end justify-between px-36 pt-36">
        <h1 class="font-Baskervville text-5xl ">VOICES OF <BR/> <span class="text-red-500">OUR COSTUMERS</span></h1>
        <p class="font-montserrat italic">Testimonials</p>
    </div>
    <div id="slideshowReviews" class="overflow-x-auto pt-16">
        <div class="flex flex-nowrap py-12 md:px-24 px-24  space-x-9">
            <!-- Slide 1 -->
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.24.59.png"/>
            </div>
            <!-- Slide 2 -->
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.25.16.png"/>

            </div>
            <!-- Slide 3 -->
            <div class="relative group flex-shrink-0 w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.25.58.png"/>

            </div>
            <!-- Slide 4 -->
            <div class="relative group flex-shrink-0  w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.26.48.png"/>

            </div>
            <div class="relative group flex-shrink-0  w-1/3  snap-start">
                <img src="./img/Screenshot 2025-09-02 at 00.27.09.png"/>

            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<div class="flex px-32 items-end justify-between pt-16">
   <div class="w-1/3">
       <img src="./img/logoFooter.png" class="w-[241px]"/>
       <p class="font-montserrat pt-7">Skenderoski and Lowther DOO Skopje</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-location-dot"></i>   Boulevard Ilinden 80, Skopje, Macedonia</p>
       <p class="font-montserrat pt-2"><i class="fa-solid fa-phone"></i>  +389 76 405 175</p>
   </div>
   <div class="font-montserrat underline text-center w-1/3">
       <a href="./returnoffer.html">Bottle Return Offer</a><br/>
       <a href="./privacypolicy.html">Privacy Policy</a><br/>
       <a href="./termsandconditions.html">Terms and Conditions</a>
   </div>
   <div class="w-1/3 flex justify-end">
       <img src="./img/Screenshot 2025-09-02 at 01.06.11.png" class="w-[60%]"/>
   </div>
</div>

     <br/>
     <br/>
     <br/>



</body>
</html>
