<!DOCTYPE html>
<html lang="en">
<?php include "./assets/parts/head.html"; ?>
   <body>
     <?php include "./assets/parts/navbar.html"; ?>
     <?php include "./assets/parts/alert.html"; ?>
      <main class="content index">
         <div class="container">
           <h1 class="text-center"><i class="fas fa-chart-line"></i> Server Load</h1>
           <div class="row mt-2">
              <div class="col-md-4">
                <div class="ltm-card">
                  <h5 class="text-center">Players Online</h5>
                  <h6 class="text-center" id="online"></h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ltm-card">
                  <h5 class="text-center">Players In Battles</h5>
                  <h6 class="text-center" id="inBattles"></h6>
                </div>
              </div>
              <div class="col-md-4">
                <div class="ltm-card">
                  <h5 class="text-center">Players Idle</h5>
                  <h6 class="text-center" id="idle"></h6>
                </div>
              </div>
           </div>
           <div class="row mt-2">
             <div class="table-responsive">
               <table class="table text-center">
                 <thead>
                   <tr>
                     <th scope="col"><i class="fas fa-server"></i></th>
                     <th scope="col">Online</th>
                     <th scope="col">In Battle</th>
                     <th scope="col">Idle</th>
                   </tr>
                 </thead>
                 <tbody id="nodes">
                 </tbody>
               </table>
             </div>
           </div>
         </div>
      </main>
      <?php include "./assets/parts/footer.html"; ?>
   </body>
</html>
