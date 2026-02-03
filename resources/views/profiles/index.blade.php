<x-layout>

   <header class="d-flex justify-content-end align-items-end">
      <div class="me-3 btn-modify">
         <div class="dropdown ">
            <button class="Btn btn btn-secondary dropdown-toggle gap-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
               <i class="fa-regular fa-camera"></i> Modifica
            </button>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="#"><i class="fa-regular fa-images"></i> Scegli immagine</a></li>
               <li><a class="dropdown-item" href="#">
                     <label for="formFile" class="form-label"><i class="fa-solid fa-upload"></i> Carica una foto</label>
                     <input class="file d-none" type="file" id="formFile"></a></li>
               <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrows-up-down-left-right"></i> Riposiziona</a></li>
            </ul>
         </div>
      </div>
   </header>
   <main class="container">
      <section class="row row-custom">
         <!-- Prima metà schermo -->
         <div class="col-6 col-md-6 d-flex justify-content-center div-first-part">
            <img src="https://picsum.photos/300/200" alt="" class="icon-profile">
            <div class="d-flex flex-column mt-4">
               <div class="d-flex flex-column">
                  <h5 class="fw-bold ms-3 h-25 mt-2">{{$profile->name}} {{$profile->surname}}</h5>
                  <span class="ms-4 mt-1">278 amici</span>
               </div>
               <div class="d-flex justify-content-center gap-3 me-3">
                  <span><i class="fa-solid fa-location-dot"></i> Torino</span>
                  <span><i class="fa-solid fa-briefcase"></i> Preply</span>
                  <span><i class="fa-solid fa-building-columns"></i> Università di Torino</span>
               </div>
               <span class="bio ms-4 mt-3">{{$profile->bio}}</span>
            </div>
         </div>
         <!-- Seconda meta schermo -->
         <div class="d-flex justify-content-center gap-2 col-6 col-md-6 mt-4 div-second-part">
            <button class="btn btn-profile btn-primary"><i class="fa-solid fa-plus"></i> Aggiungi storia</button>
            <a href="{{route('profile_edit', compact('profile'))}}" class="btn btn-primary btn-profile"><i class="fa-solid fa-pencil"></i> Modifica profilo</a>
         </div>

         <div class="d-flex gap-5 ms-5 mt-3">
            <span class="fw-bold text-secondary">Tutti</span>
            <span class="fw-bold text-secondary">Informazioni</span>
            <span class="fw-bold text-secondary">Amici</span>
            <span class="fw-bold text-secondary">Foto</span>
            <span class="fw-bold text-secondary">Reels</span>
         </div>
      </section>
      <!-- Second section -->
      <section class="second-section row gap-3">
         <div class="col-12 col-md-5 d-flex card card-left">
            <div class="d-flex justify-content-between mt-3">
               <h4>Dettagli personali</h4>
               <a href="" class="text-secondary"><i class="fa-regular fa-pen-to-square "></i></a>
            </div>
            <div class="d-flex flex-column gap-4 mt-3">
               <a href="" class="text-dark text-decoration-none"><i class="fa-solid fa-location-dot fa-2x"></i><span class="fw-bold"> Torino</span></a>
               <a href="" class="text-dark text-decoration-none"><i class="fa-regular fa-house fa-2x"></i><span class="fw-bold"> Di Teheran</span></a>
               <a href="" class="text-dark text-decoration-none"><i class="fa-solid fa-cake-candles fa-2x"></i><span class="fw-bold"> {{$profile->birthday}}</span></a>
               <a href="" class="text-dark text-decoration-none"><i class="fa-solid fa-people-roof fa-2x"></i><span class="fw-bold"> Familiari</span></a>
               <a href="" class="text-dark text-decoration-none"><i class="fa-solid fa-venus fa-2x"></i><span class="fw-bold"> Donna</span></a>
               <a href="" class="text-dark text-decoration-none"><i class="fa-solid fa-language fa-2x"></i><span class="fw-bold"> English language, Persian language, Italian language</span></a>
            </div>
            <div class="d-flex justify-content-between mt-4">
               <h4>Lavoro</h4>
               <a href="" class="text-secondary"><i class="fa-regular fa-pen-to-square "></i></a>
            </div>
            <div class="d-flex align-items-center">
               <img src="https://picsum.photos/300/200" alt="" class="icon-detail">
               <div class="d-flex flex-column">
                  <h6 class="fw-bold ms-3 h-25 mt-2">Preply</h6>
                  <span class="ms-3">Teacher english language</span>
                  <span class="ms-3"> 11 nov 2020 - a oggi 5 anni, 2 mesi</span>
                  <p class="text-secondary ms-3 mt-3">Vedi altre informazioni lavorative</p>

               </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
               <h4>Istruzione</h4>
               <a href="" class="text-secondary"><i class="fa-regular fa-pen-to-square "></i></a>
            </div>
            <div class="d-flex align-items-center">
               <img src="https://picsum.photos/300/200" alt="" class="icon-detail">
               <div class="d-flex flex-column">
                  <h6 class="fw-bold ms-3 h-25 mt-2">Università di Torino</h6>
                  <p class="text-secondary ms-3 mt-2">Vedi altre informazioni sull'istruzione</p>
               </div>
            </div>


         </div>

         <div class="col-12 col-md-7 d-flex card card-right">
            <div class="d-flex justify-content-center gap-2 input-control p-2">
               <img src="https://picsum.photos/300/200" alt="" class="icon-second-section mt-2">
               <input class="form-control input-profile mt-2 " type="text" placeholder="A cosa stai pensando?" aria-label=".form-control-lg example" readonly data-bs-toggle="modal" data-bs-target="#createPostModal">
            </div>

            <div class="d-flex justify-content-evenly mt-4">
               <a href="" class="fw-bold text-decoration-none text-secondary"><i class="fa-solid fa-video fa-1x" style="color: #ff0000;"></i> Video in diretta</a>
               <a href="" class="fw-bold text-decoration-none text-secondary"><i class="fa-regular fa-images fa-1x" style="color: #276100;"></i> Foto/Video</a>
               <a href="" class="fw-bold text-decoration-none text-secondary"><i class="fa-solid fa-flag fa-1x" style="color: #74C0FC;"></i> Aggiornamento importante</a>
            </div>
            @foreach ($profile->user->favoriteFaces as $face) <!-- Dal profilo vado all’utente, dall’utente prendo i post preferiti, li scorro uno alla volta e passo ogni Face alla card. Profile → User → favoriteFaces (collection) → foreach → Face singolo → component. Mai passare una collection a una card: prima foreach, poi il singolo modello.-->
            <article class="d-flex justify-content-center">
               <x-card :face="$face" />
            </article>
            @endforeach
         </div>
         <div>

            
         </div>
         <!-- la modale -->
         <div class="modal fade" id="createPostModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Crea il tuo post</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                     <form method="POST" action="{{route ("post_store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                           <label for="title" class="form-label">Titolo:</label>
                           <input type="text" class="form-control" name="title" id="title" placeholder="">
                        </div>
                        <div class="mb-3">
                           <label for="content" class="form-label">Descrizione:</label>
                           <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                           <label for="mood" class="form-label">Stato d'animo:</label>
                           <input type="text" class="form-control" id="mood" placeholder="" name="mood">
                        </div>
                        <div class="mb-3">
                           <label for="img" class="form-label">Immagine:</label>
                           <input type="file" class="form-control" id="img" placeholder="" name="img">
                        </div>

                        <div class="modal-footer">
                           <button class="modal-btn" type="" data-bs-dismiss="modal">Anulla</button>
                           <button class="modal-btn" type="submit" data-bs-dismiss="modal">Crea post</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- Fine modale -->

      </section>

   </main>






</x-layout>