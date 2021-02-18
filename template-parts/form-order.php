<div class="row section__order">
    <div class="col-md-12">
        <div class="section__order__block" style="background: url(<? echo get_template_directory_uri() . '/assets/img/index_working_order_bg.png'; ?>), #122042;);">
            <h4 class="section__order__block__title">
                Запросить расчеты
            </h4>
            <button
                type="button"
                class="btn section__order__block__btn"
                data-mdb-toggle="modal"
                data-mdb-target="#section-order-modal"
            >
                Оставить заявку
            </button>
            <div
                class="modal fade section__order__modal"
                id="section-order-modal"
                tabindex="-1"
                aria-labelledby="section-order-modal-label"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="section-order-modal-label">
                                Оставить заявку
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-mdb-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <? echo do_shortcode( '[contact-form-7 id="78" title="Запросить расчеты"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>