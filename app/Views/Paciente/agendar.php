<div class="full-height">
        <div class="col-md-3 ml-sm-12 col-lg-3 col-xl-2 " style="height:100%; background: #B9FFFF; ">
            <div style="display: table; width:100%; height:8%;" >
                <div  style="display: table-cell; background: #033FAC; width:100%; height:100%; color: #ffffff; text-align:center; vertical-align:middle">
                    <h2 >Agendar Cita</h2>
                </div>
            </div>
            <main role="main" class="col-md-11 ml-sm-11 col-lg-11 px-1">
            <form>
                <div class="mb-3" style="padding: 5% 0%">
                    <label for="SeleccionePoliclinica" class="form-label">Seleccione una Policlínica</label>
                    <!--<select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required></select>-->
                    <select id="SeleccionePoliclinica" class="form-select" name="SeleccionePoliclinica" required>  
                        <option value="">Disabled select</option>               
                        
              </select>
              </div>                 
                <div class="mb-3" style="padding: 5% 0%">
                    <label for="SeleccioneEspecialidad" class="form-label">Seleccione una Especialidad</label>
                    <select id="SeleccioneEspecialidad" class="form-select">
                        <option>Disabled select</option>
                        
                    </select>
                </div>
                <div class="mb-3" style="padding: 5% 0%">
                    <label for="SeleccioneMedico" class="form-label">Seleccione un Médico</label>
                    <select id="SeleccioneMedico" class="form-select">
                        <option>Disabled select</option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
            
            </main>
        </div>
    </div>