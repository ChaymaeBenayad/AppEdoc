<x-barre-navig />
<style>
.form-control:focus {
  box-shadow: none;
}
h1{
  margin-top:20px;
  margin-bottom:30px;
  color:#FF7F41FF;
}
h4 a{
  text-decoration:none;
}
.navbar{
  margin-bottom:15px;
}
</style>
<body>
</br></br>

<div class="section-title">
          <h2>Afficher documents</h2>
        </div>

<div class="container box">
    <div class="panel-body">
    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
            <div class="input-group">
              <input type="text" name="search" id="search" placeholder="Chercher un document....." aria-describedby="button-addon1" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-info"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
     <div class="limiter">
			<div class="wrap-table100">
            <div class="table100 ver4 m-b-110">
					<div class="table100-head">
				
						<table>
							<thead>
								<tr class="row200 head">
									<th class="cell100 column1">Titre du fichier</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Département</th>
									<th class="cell100 column4">Date d'ajout</th>
									<th class="cell100 column5">Importer</th>
									<th class="cell100 column5">Consulter</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>

               </tbody>
              </table>
          </div>
    </div>    
   </div>
   </div>
   </div>
   </div>    
   </div>
   
   </div>

 <div style="height:20px"></div>
  <x-services/>   

  <x-smallfooter />
