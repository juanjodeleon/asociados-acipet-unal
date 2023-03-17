<div id="modalmantenimiento" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content bd-0">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 id="lbltitulo" class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold"></h6>
            </div>
            <!-- Formulario Mantenimiento -->
            <form method="post" id="usuario_form">
                <div class="modal-body">
                    <input type="hidden" name="aso_id" id="aso_id"/>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_nom" type="text" name="aso_nom" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Apellidos: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_ape" type="text" name="aso_ape" required/>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Correo: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_correo" type="email" name="aso_correo" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Celular: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_cel" type="text" name="aso_cel" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Programa Acádemico: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_program" type="text" name="aso_program" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Estado membresía: <span class="tx-danger">*</span></label>
                            <select class="form-control select2" style="width:100%" name="aso_estado" id="aso_estado" data-placeholder="Seleccione">
                                <option label="Seleccione"></option>
                                <option value="Activa">Activa</option>
                                <option value="Vencida">Vencida</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha Afiliación: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_fecha" type="date" name="aso_fecha" required/>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Fecha vencimiento: <span class="tx-danger">*</span></label>
                            <input class="form-control tx-uppercase" id="aso_fechven" type="date" name="aso_fechven" required/>
                        </div>
                    </div> 

                </div>
                <div class="modal-footer">
                    <button type="submit" name="action" value="add" class="btn btn-outline-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium"><i class="fa fa-check"></i> Guardar</button>
                    <button type="reset" class="btn btn-outline-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" aria-label="Close" aria-hidden="true" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>