
<?php
/*
  Este arquivo é parte do OpenMvc PHP Framework

  OpenMvc PHP Framework é um software livre; você pode redistribuí-lo e/ou
  modificá-lo dentro dos termos da Licença Pública Geral GNU como
  publicada pela Fundação do Software Livre (FSF); na versão 2 da
  Licença, ou (na sua opinião) qualquer versão.

  Este programa é distribuído na esperança de que possa ser  útil,
  mas SEM NENHUMA GARANTIA; sem uma garantia implícita de ADEQUAÇÃO a qualquer
  MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a
  Licença Pública Geral GNU para maiores detalhes.

  Você deve ter recebido uma cópia da Licença Pública Geral GNU
  junto com este programa, se não, escreva para a Fundação do Software
  Livre(FSF) Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
?>
<?php execute_action("common", "header", $title); ?>


<div class="m-portlet  m-portlet--unair">
    <div class="m-portlet__body  m-portlet__body--no-padding">
        <div class="row m-row--no-padding m-row--col-separator-xl">
            <div class="col-md-12">
                <?php $parentController->load_crud(); ?>
            </div>
        </div>
    </div>
</div>

<!--begin:: Widgets/Stats-->
<div class="m-portlet  m-portlet--unair">
    <div class="m-portlet__body  m-portlet__body--no-padding">
        <div class="row m-row--no-padding m-row--col-separator-xl">
            <div class="col-md-12 col-lg-6 col-xl-3">

                <!--begin::Total Profit-->
                <div class="m-widget24">
                    <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                            Total Frofit
                        </h4><br>
                        <span class="m-widget24__desc">
                            All Customs Value
                        </span>
                        <span class="m-widget24__stats m--font-brand">
                            $18M
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                            <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                            Change
                        </span>
                        <span class="m-widget24__number">
                            78%
                        </span>
                    </div>
                </div>

                <!--end::Total Profit-->
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">

                <!--begin::New Feedbacks-->
                <div class="m-widget24">
                    <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                            New Feedbacks
                        </h4><br>
                        <span class="m-widget24__desc">
                            Customer Review
                        </span>
                        <span class="m-widget24__stats m--font-info">
                            1349
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                            <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                            Change
                        </span>
                        <span class="m-widget24__number">
                            84%
                        </span>
                    </div>
                </div>

                <!--end::New Feedbacks-->
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">

                <!--begin::New Orders-->
                <div class="m-widget24">
                    <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                            New Orders
                        </h4><br>
                        <span class="m-widget24__desc">
                            Fresh Order Amount
                        </span>
                        <span class="m-widget24__stats m--font-danger">
                            567
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                            <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                            Change
                        </span>
                        <span class="m-widget24__number">
                            69%
                        </span>
                    </div>
                </div>

                <!--end::New Orders-->
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">

                <!--begin::New Users-->
                <div class="m-widget24">
                    <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                            New Users
                        </h4><br>
                        <span class="m-widget24__desc">
                            Joined New User
                        </span>
                        <span class="m-widget24__stats m--font-success">
                            276
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                            <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                            Change
                        </span>
                        <span class="m-widget24__number">
                            90%
                        </span>
                    </div>
                </div>

                <!--end::New Users-->
            </div>
        </div>
    </div>
</div>

<!--end:: Widgets/Stats-->

<!--Begin::Section-->
<div class="row">
    <div class="col-xl-4">

        <!--begin:: Widgets/New Users-->
        <div class="m-portlet m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            New Users
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                Today
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                Month
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">

                        <!--begin::Widget 14-->
                        <div class="m-widget4">

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_4.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Anna Strong
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Visual Designer,Google Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_14.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Milano Esco
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Product Designer, Apple Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_11.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Nick Bold
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Web Developer, Facebook Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_1.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Wiltor Delton
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Project Manager, Amazon Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_5.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Nick Stone
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Visual Designer, Github Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->
                        </div>

                        <!--end::Widget 14-->
                    </div>
                    <div class="tab-pane" id="m_widget4_tab2_content">

                        <!--begin::Widget 14-->
                        <div class="m-widget4">

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_2.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Kristika Bold
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Product Designer,Apple Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_13.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Ron Silk
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Release Manager, Loop Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_9.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Nick Bold
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Web Developer, Facebook Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_2.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Wiltor Delton
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Project Manager, Amazon Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->

                            <!--end::Widget 14 Item-->

                            <!--begin::Widget 14 Item-->
                            <div class="m-widget4__item">
                                <div class="m-widget4__img m-widget4__img--pic">
                                    <img src="assets/app/media/img/users/100_8.jpg" alt="">
                                </div>
                                <div class="m-widget4__info">
                                    <span class="m-widget4__title">
                                        Nick Bold
                                    </span><br>
                                    <span class="m-widget4__sub">
                                        Web Developer, Facebook Inc
                                    </span>
                                </div>
                                <div class="m-widget4__ext">
                                    <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                </div>
                            </div>

                            <!--end::Widget 14 Item-->
                        </div>

                        <!--end::Widget 14-->
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/New Users-->
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Inbound Bandwidth-->
        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit  m-portlet--unair" style="min-height: 300px">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Inbound Bandwidth
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                Today
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin::Widget5-->
                <div class="m-widget20">
                    <div class="m-widget20__number m--font-success">670</div>
                    <div class="m-widget20__chart" style="height:160px;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="m_chart_bandwidth1" width="323" height="160" class="chartjs-render-monitor" style="display: block; width: 323px; height: 160px;"></canvas>
                    </div>
                </div>

                <!--end::Widget 5-->
            </div>
        </div>

        <!--end:: Widgets/Inbound Bandwidth-->
        <div class="m--space-30"></div>

        <!--begin:: Widgets/Outbound Bandwidth-->
        <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit  m-portlet--unair" style="min-height: 300px">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Outbound Bandwidth
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                Today
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin::Widget5-->
                <div class="m-widget20">
                    <div class="m-widget20__number m--font-warning">340</div>
                    <div class="m-widget20__chart" style="height:160px;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="m_chart_bandwidth2" width="323" height="160" class="chartjs-render-monitor" style="display: block; width: 323px; height: 160px;"></canvas>
                    </div>
                </div>

                <!--end::Widget 5-->
            </div>
        </div>

        <!--end:: Widgets/Outbound Bandwidth-->
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Top Products-->
        <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Top Products
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                All
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin::Widget5-->
                <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                Phyton
                            </span><br>
                            <span class="m-widget4__sub">
                                A Programming Language
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$17</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                FlyThemes
                            </span><br>
                            <span class="m-widget4__sub">
                                A Let's Fly Fast Again Language
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$300</span>
                        </span>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                            <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">
                                Starbucks
                            </span><br>
                            <span class="m-widget4__sub">
                                Good Coffee &amp; Snacks
                            </span>
                        </div>
                        <span class="m-widget4__ext">
                            <span class="m-widget4__number m--font-brand">+$300</span>
                        </span>
                    </div>
                    <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="m_chart_trends_stats_2" width="323" height="260" class="chartjs-render-monitor" style="display: block; width: 323px; height: 260px;"></canvas>
                    </div>
                </div>

                <!--end::Widget 5-->
            </div>
        </div>

        <!--end:: Widgets/Top Products-->
    </div>
</div>

<!--End::Section-->

<!--Begin::Section-->
<div class="row">
    <div class="col-xl-6">

        <!--begin:: Widgets/Support Cases-->
        <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Support Cases
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                <i class="la la-ellipsis-h m--font-brand"></i>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__section m-nav__section--first">
                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__separator m-nav__separator--fit">
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-widget16">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="m-widget16__head">
                                <div class="m-widget16__item">
                                    <span class="m-widget16__sceduled">
                                        Type
                                    </span>
                                    <span class="m-widget16__amount m--align-right">
                                        Amount
                                    </span>
                                </div>
                            </div>
                            <div class="m-widget16__body">

                                <!--begin::widget item-->
                                <div class="m-widget16__item">
                                    <span class="m-widget16__date">
                                        EPS
                                    </span>
                                    <span class="m-widget16__price m--align-right m--font-brand">
                                        +78,05%
                                    </span>
                                </div>

                                <!--end::widget item-->

                                <!--begin::widget item-->
                                <div class="m-widget16__item">
                                    <span class="m-widget16__date">
                                        PDO
                                    </span>
                                    <span class="m-widget16__price m--align-right m--font-accent">
                                        21,700
                                    </span>
                                </div>

                                <!--end::widget item-->

                                <!--begin::widget item-->
                                <div class="m-widget16__item">
                                    <span class="m-widget16__date">
                                        OPL Status
                                    </span>
                                    <span class="m-widget16__price m--align-right m--font-danger">
                                        Negative
                                    </span>
                                </div>

                                <!--end::widget item-->

                                <!--begin::widget item-->
                                <div class="m-widget16__item">
                                    <span class="m-widget16__date">
                                        Priority
                                    </span>
                                    <span class="m-widget16__price m--align-right m--font-brand">
                                        +500,200
                                    </span>
                                </div>

                                <!--end::widget item-->

                                <!--begin::widget item-->
                                <div class="m-widget16__item">
                                    <span class="m-widget16__date">
                                        Net Prifit
                                    </span>
                                    <span class="m-widget16__price m--align-right m--font-brand">
                                        $18,540,60
                                    </span>
                                </div>

                                <!--end::widget item-->
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="m-widget16__stats">
                                <div class="m-widget16__visual">
                                    <div id="m_chart_support_tickets" style="height: 180px"><svg height="180" version="1.1" width="135" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.59375px; top: -0.28125px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#00c5dc" d="M70.5,130.33333333333334A40.333333333333336,40.333333333333336,0,0,0,109.42924730393588,100.5494778129905" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00c5dc" stroke="#ffffff" d="M70.5,133.33333333333334A43.333333333333336,43.333333333333336,0,0,0,112.32481115298896,101.33414971643607L124.06793120748202,104.51643021374312A55.5,55.5,0,0,1,70.5,145.5Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#716aca" d="M109.42924730393588,100.5494778129905A40.333333333333336,40.333333333333336,0,1,0,44.04524986477243,120.44542614351874" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#716aca" stroke="#ffffff" d="M112.32481115298896,101.33414971643607A43.333333333333336,43.333333333333336,0,1,0,42.07754117702824,122.70996197237551L30.81787479715865,135.66813921527813A60.5,60.5,0,1,1,128.89387095590382,105.82421671948575Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f4516c" d="M44.04524986477243,120.44542614351874A40.333333333333336,40.333333333333336,0,0,0,70.48732890983895,130.33333134296313" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#f4516c" stroke="#ffffff" d="M42.07754117702824,122.70996197237551A43.333333333333336,43.333333333333336,0,0,0,70.48638643205838,133.33333119491908L70.48256416105939,145.4999972611848A55.5,55.5,0,0,1,34.097389276732315,131.89391283385018Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="70.5" y="80" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#a7a7c2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.1863,0,0,1.1863,-13.2226,-16.4853)" stroke-width="0.8429752066115702"><tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Profit</tspan></text><text x="70.5" y="100" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#a7a7c2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(0.8403,0,0,0.8403,11.2754,14.6944)" stroke-width="1.1900826446280992"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">70</tspan></text></svg>
                                    </div>
                                </div>
                                <div class="m-widget16__legends">
                                    <div class="m-widget16__legend">
                                        <span class="m-widget16__legend-bullet m--bg-info"></span>
                                        <span class="m-widget16__legend-text">20% Margins</span>
                                    </div>
                                    <div class="m-widget16__legend">
                                        <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                        <span class="m-widget16__legend-text">80% Profit</span>
                                    </div>
                                    <div class="m-widget16__legend">
                                        <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                        <span class="m-widget16__legend-text">10% Lost</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Support Stats-->
    </div>
    <div class="col-xl-6">

        <!--begin:: Finance Stats-->
        <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Finance Stats
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                <i class="la la-ellipsis-h m--font-brand"></i>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__section m-nav__section--first">
                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__separator m-nav__separator--fit">
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-widget1 m-widget1--paddingless">
                    <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                            <div class="col">
                                <h3 class="m-widget1__title">IPO Margin</h3>
                                <span class="m-widget1__desc">Awerage IPO Margin</span>
                            </div>
                            <div class="col m--align-right">
                                <span class="m-widget1__number m--font-accent">+24%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                            <div class="col">
                                <h3 class="m-widget1__title">Payments</h3>
                                <span class="m-widget1__desc">Yearly Expenses</span>
                            </div>
                            <div class="col m--align-right">
                                <span class="m-widget1__number m--font-info">+$560,800</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                            <div class="col">
                                <h3 class="m-widget1__title">Logistics</h3>
                                <span class="m-widget1__desc">Overall Regional Logistics</span>
                            </div>
                            <div class="col m--align-right">
                                <span class="m-widget1__number m--font-warning">-10%</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                            <div class="col">
                                <h3 class="m-widget1__title">Expenses</h3>
                                <span class="m-widget1__desc">Balance</span>
                            </div>
                            <div class="col m--align-right">
                                <span class="m-widget1__number m--font-danger">$345,000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Finance Stats-->
    </div>
</div>

<!--End::Section-->

<!--Begin::Section-->
<div class="row">
    <div class="col-xl-6 col-lg-12">

        <!--Begin::Portlet-->
        <div class="m-portlet  m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Recent Activities
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                <i class="la la-ellipsis-h m--font-brand"></i>
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__section m-nav__section--first">
                                                    <span class="m-nav__section-text">Quick Actions</span>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__separator m-nav__separator--fit">
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="380" data-mobile-height="300" style="height: 380px; overflow: hidden;">

                    <!--Begin::Timeline 2 -->
                    <div class="m-timeline-2">
                        <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                            <div class="m-timeline-2__item">
                                <span class="m-timeline-2__item-time">10:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-danger"></i>
                                </div>
                                <div class="m-timeline-2__item-text  m--padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">12:45</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-success"></i>
                                </div>
                                <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                    AEOL Meeting With
                                </div>
                                <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                    <a href="#"><img src="assets/app/media/img/users/100_4.jpg" title=""></a>
                                    <a href="#"><img src="assets/app/media/img/users/100_13.jpg" title=""></a>
                                    <a href="#"><img src="assets/app/media/img/users/100_11.jpg" title=""></a>
                                    <a href="#"><img src="assets/app/media/img/users/100_14.jpg" title=""></a>
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">14:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-brand"></i>
                                </div>
                                <div class="m-timeline-2__item-text m--padding-top-5">
                                    Make Deposit <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">16:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-warning"></i>
                                </div>
                                <div class="m-timeline-2__item-text m--padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                    veniam quis nostrud
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">17:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-info"></i>
                                </div>
                                <div class="m-timeline-2__item-text m--padding-top-5">
                                    Placed a new order in <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">16:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-brand"></i>
                                </div>
                                <div class="m-timeline-2__item-text m--padding-top-5">
                                    Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                                    incididunt ut labore et dolore magna elit enim at minim<br>
                                    veniam quis nostrud
                                </div>
                            </div>
                            <div class="m-timeline-2__item m--margin-top-30">
                                <span class="m-timeline-2__item-time">17:00</span>
                                <div class="m-timeline-2__item-cricle">
                                    <i class="fa fa-genderless m--font-danger"></i>
                                </div>
                                <div class="m-timeline-2__item-text m--padding-top-5">
                                    Received a new feedback on <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--End::Timeline 2 -->
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 380px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 234px;"></div></div></div>
            </div>
        </div>

        <!--End::Portlet-->
    </div>
    <div class="col-xl-6 col-lg-12">

        <!--Begin::Portlet-->
        <div class="m-portlet m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Recent Notifications
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                                Today
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
                                Month
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget2_tab1_content">

                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                            <div class="m-timeline-3__items">
                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                    <span class="m-timeline-3__item-time">09:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Bob
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--warning">
                                    <span class="m-timeline-3__item-time">10:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit amit
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Sean
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                    <span class="m-timeline-3__item-time">11:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit amit eiusmdd tempor
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By James
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--success">
                                    <span class="m-timeline-3__item-time">12:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By James
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                    <span class="m-timeline-3__item-time">14:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit amit,consectetur eiusmdd
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Derrick
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                    <span class="m-timeline-3__item-time">15:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit amit,consectetur
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Iman
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                    <span class="m-timeline-3__item-time">17:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem ipsum dolor sit consectetur eiusmdd tempor
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Aziko
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End::Timeline 3 -->
                    </div>
                    <div class="tab-pane" id="m_widget2_tab2_content">

                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                            <div class="m-timeline-3__items">
                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                    <span class="m-timeline-3__item-time m--font-focus">09:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Bob
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--warning">
                                    <span class="m-timeline-3__item-time m--font-warning">10:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            There are many variations of passages of Lorem Ipsum available.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Sean
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                    <span class="m-timeline-3__item-time m--font-primary">11:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By James
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--success">
                                    <span class="m-timeline-3__item-time m--font-success">12:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By James
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--danger">
                                    <span class="m-timeline-3__item-time m--font-warning">14:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Latin words, combined with a handful of model sentence structures.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Derrick
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--info">
                                    <span class="m-timeline-3__item-time m--font-info">15:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Iman
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="m-timeline-3__item m-timeline-3__item--brand">
                                    <span class="m-timeline-3__item-time m--font-danger">17:00</span>
                                    <div class="m-timeline-3__item-desc">
                                        <span class="m-timeline-3__item-text">
                                            Lorem Ipsum is therefore always free from repetition, injected humour.
                                        </span><br>
                                        <span class="m-timeline-3__item-user-name">
                                            <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                By Aziko
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End::Timeline 3 -->
                    </div>
                </div>
            </div>
        </div>

        <!--End::Portlet-->
    </div>
</div>

<!--End::Section-->

<!--Begin::Section-->
<div class="row">
    <div class="col-xl-8">

        <!--begin:: Widgets/Application Sales-->
        <div class="m-portlet m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Application Sales
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                Last Month
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                All Time
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget11_tab1_content">

                        <!--begin::Widget 11-->
                        <div class="m-widget11">
                            <div class="table-responsive">

                                <!--begin::Table-->
                                <table class="table">

                                    <!--begin::Thead-->
                                    <thead>
                                        <tr>
                                            <td class="m-widget11__label">#</td>
                                            <td class="m-widget11__app">Application</td>
                                            <td class="m-widget11__sales">Sales</td>
                                            <td class="m-widget11__change">Change</td>
                                            <td class="m-widget11__price">Avg Price</td>
                                            <td class="m-widget11__total m--align-right">Total</td>
                                        </tr>
                                    </thead>

                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Vertex 2.0</span>
                                                <span class="m-widget11__sub">Vertex To By Again</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$63</td>
                                            <td class="m--align-right m--font-brand">$14,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Metronic</span>
                                                <span class="m-widget11__sub">Powerful Admin Theme</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$39</td>
                                            <td class="m--align-right m--font-brand">$16,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Apex</span>
                                                <span class="m-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$105</td>
                                            <td class="m--align-right m--font-brand">$37,200</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Cascades</span>
                                                <span class="m-widget11__sub">Design Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$16</td>
                                            <td class="m--align-right m--font-brand">$8,520</td>
                                        </tr>
                                    </tbody>

                                    <!--end::Tbody-->
                                </table>

                                <!--end::Table-->
                            </div>
                            <div class="m-widget11__action m--align-right">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                            </div>
                        </div>

                        <!--end::Widget 11-->
                    </div>
                    <div class="tab-pane" id="m_widget11_tab2_content">

                        <!--begin::Widget 11-->
                        <div class="m-widget11">
                            <div class="table-responsive">

                                <!--begin::Table-->
                                <table class="table">

                                    <!--begin::Thead-->
                                    <thead>
                                        <tr>
                                            <td class="m-widget11__label">#</td>
                                            <td class="m-widget11__app">Application</td>
                                            <td class="m-widget11__sales">Sales</td>
                                            <td class="m-widget11__change">Change</td>
                                            <td class="m-widget11__price">Avg Price</td>
                                            <td class="m-widget11__total m--align-right">Total</td>
                                        </tr>
                                    </thead>

                                    <!--end::Thead-->

                                    <!--begin::Tbody-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Loop</span>
                                                <span class="m-widget11__sub">CRM System</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$63</td>
                                            <td class="m--align-right m--font-brand">$34,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Selto</span>
                                                <span class="m-widget11__sub">Powerful Website Builder</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$39</td>
                                            <td class="m--align-right m--font-brand">$46,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Jippo</span>
                                                <span class="m-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$105</td>
                                            <td class="m--align-right m--font-brand">$67,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <span class="m-widget11__title">Verto</span>
                                                <span class="m-widget11__sub">Web Development Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0" class="chartjs-render-monitor"></canvas>
                                                </div>
                                            </td>
                                            <td>$16</td>
                                            <td class="m--align-right m--font-brand">$18,520</td>
                                        </tr>
                                    </tbody>

                                    <!--end::Tbody-->
                                </table>

                                <!--end::Table-->
                            </div>
                            <div class="m-widget11__action m--align-right">
                                <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                            </div>
                        </div>

                        <!--end::Widget 11-->
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Application Sales-->
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Latest Updates-->
        <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Latest Updates
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                Today
                            </a>
                            <div class="m-dropdown__wrapper">
                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                <div class="m-dropdown__inner">
                                    <div class="m-dropdown__body">
                                        <div class="m-dropdown__content">
                                            <ul class="m-nav">
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                        <span class="m-nav__link-text">Activity</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                        <span class="m-nav__link-text">Messages</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                        <span class="m-nav__link-text">FAQ</span>
                                                    </a>
                                                </li>
                                                <li class="m-nav__item">
                                                    <a href="" class="m-nav__link">
                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-nav__link-text">Support</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                    <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                            <a href="#" class="m-widget4__icon m--font-brand">
                                <i class="flaticon-interface-3"></i>
                            </a>
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__text">
                                Make Metronic Great Again
                            </span>
                        </div>
                        <div class="m-widget4__ext">
                            <span class="m-widget4__number m--font-accent">+500</span>
                        </div>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                            <a href="#" class="m-widget4__icon m--font-brand">
                                <i class="flaticon-folder-4"></i>
                            </a>
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__text">
                                Green Maker Team
                            </span>
                        </div>
                        <div class="m-widget4__ext">
                            <span class="m-widget4__stats m--font-info">
                                <span class="m-widget4__number m--font-accent">-64</span>
                            </span>
                        </div>
                    </div>
                    <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                            <a href="#" class="m-widget4__icon m--font-brand">
                                <i class="flaticon-line-graph"></i>
                            </a>
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__text">
                                Make Apex Great Again
                            </span>
                        </div>
                        <div class="m-widget4__ext">
                            <span class="m-widget4__stats m--font-info">
                                <span class="m-widget4__number m--font-accent">+1080</span>
                            </span>
                        </div>
                    </div>
                    <div class="m-widget4__item m-widget4__item--last">
                        <div class="m-widget4__ext">
                            <a href="#" class="m-widget4__icon m--font-brand">
                                <i class="flaticon-diagram"></i>
                            </a>
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__text">
                                A Programming Language
                            </span>
                        </div>
                        <div class="m-widget4__ext">
                            <span class="m-widget4__stats m--font-info">
                                <span class="m-widget4__number m--font-accent">+19</span>
                            </span>
                        </div>
                    </div>
                    <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                        <canvas id="m_chart_latest_updates" width="323" height="120" class="chartjs-render-monitor" style="display: block; width: 323px; height: 120px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Latest Updates-->
    </div>
</div>

<!--End::Section-->

<!--Begin::Section-->
<div class="row">
    <div class="col-xl-8">
        <div class="m-portlet m-portlet--mobile  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Exclusive Datatable Plugin
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">Useful Links</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                    </li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">

                <!--begin: Datatable -->
                <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded m-datatable--scroll" id="m_datatable_latest_orders" style=""><table class="m-datatable__table" style="display: block; min-height: 300px; max-height: 380px;"><thead class="m-datatable__head"><tr class="m-datatable__row" style="left: 0px;"><th data-field="RecordID" class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--all m-checkbox--solid m-checkbox--brand"><input type="checkbox">&nbsp;<span></span></label></span></th><th data-field="OrderID" class="m-datatable__cell m-datatable__cell--sort" data-sort="asc"><span style="width: 150px;">Order ID<i class="la la-arrow-up"></i></span></th><th data-field="ShipName" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 150px;">Ship Name</span></th><th data-field="ShipDate" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Ship Date</span></th><th data-field="Status" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Status</span></th><th data-field="Type" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 100px;">Type</span></th><th data-field="Actions" class="m-datatable__cell m-datatable__cell--sort"><span style="width: 110px;">Actions</span></th></tr></thead><tbody class="m-datatable__body ps ps--active-x ps--active-y" style="max-height: 329px;"><tr data-row="0" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="45">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0007-3230 - RU</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Kuhlman-Bosco</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">10/1/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--success m-badge--wide">Success</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="1" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="88">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0007-4142 - HT</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Gutmann, Kessler and Jast</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">11/28/2017</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--info m-badge--wide">Info</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="2" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="162">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0024-5851 - BR</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Abbott, Muller and Kunze</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">4/10/2018</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="3" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="266">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0054-0085 - PG</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Stoltenberg, Wilderman and Lang</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">4/1/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--brand m-badge--wide">Pending</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="4" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="316">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0054-0101 - GR</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Hammes-Pagac</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">6/6/2017</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--info m-badge--wide">Info</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="5" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="104">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0062-0165 - PT</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Nienow-Smith</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">6/20/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--primary m-badge--wide">Canceled</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown ">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="6" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="193">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0074-2278 - ZA</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Swaniawski, Murray and Powlowski</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">11/30/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--success m-badge--wide">Success</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="7" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="246">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0074-3010 - CN</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">West LLC</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">2/24/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--success m-badge--wide">Success</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">Online</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="8" class="m-datatable__row" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="311">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0074-3282 - CN</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Wintheiser, Prosacco and Ward</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">2/7/2016</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--info m-badge--wide">Info</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><tr data-row="9" class="m-datatable__row m-datatable__row--even" style="left: 0px;"><td class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="m-checkbox m-checkbox--single m-checkbox--solid m-checkbox--brand"><input type="checkbox" value="25">&nbsp;<span></span></label></span></td><td class="m-datatable__cell--sorted m-datatable__cell" data-field="OrderID"><span style="width: 150px;">0093-1016 - ID</span></td><td data-field="ShipName" class="m-datatable__cell"><span style="width: 150px;">Pfannerstill-Jenkins</span></td><td data-field="ShipDate" class="m-datatable__cell"><span style="width: 110px;">4/12/2018</span></td><td data-field="Status" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge  m-badge--danger m-badge--wide">Danger</span></span></td><td data-field="Type" class="m-datatable__cell"><span style="width: 100px;"><span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span></span></td><td data-field="Actions" class="m-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown dropup">                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                <i class="la la-ellipsis-h"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>                                <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>                            </div>                        </div>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">                            <i class="la la-edit"></i>                        </a>                        <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">                            <i class="la la-trash"></i>                        </a>                    </span></td></tr><div class="ps__rail-x" style="width: 619px; left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 425px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 329px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 188px;"></div></div></tbody></table><div class="m-datatable__pager m-datatable--paging-loaded clearfix"><ul class="m-datatable__pager-nav"><li><a title="First" class="m-datatable__pager-link m-datatable__pager-link--first m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-double-left"></i></a></li><li><a title="Previous" class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="la la-angle-left"></i></a></li><li style="display: none;"><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-prev" data-page="1"><i class="la la-ellipsis-h"></i></a></li><li style="display: none;"><input type="text" class="m-pager-input form-control" title="Page number"></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active" data-page="1" title="1">1</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="4" title="4">4</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="5" title="5">5</a></li><li><a class="m-datatable__pager-link m-datatable__pager-link-number" data-page="6" title="6">6</a></li><li><a title="More pages" class="m-datatable__pager-link m-datatable__pager-link--more-next" data-page="7"><i class="la la-ellipsis-h"></i></a></li><li><a title="Next" class="m-datatable__pager-link m-datatable__pager-link--next" data-page="2"><i class="la la-angle-right"></i></a></li><li><a title="Last" class="m-datatable__pager-link m-datatable__pager-link--last" data-page="35"><i class="la la-angle-double-right"></i></a></li></ul><div class="m-datatable__pager-info"><div class="dropdown bootstrap-select m-datatable__pager-size" style="width: 70px;"><select class="selectpicker m-datatable__pager-size" title="Select page size" data-width="70px" data-selected="10" tabindex="-98"><option class="bs-title-option" value="">Select page size</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="button" title="Select page size"><div class="filter-option"><div class="filter-option-inner">10</div></div>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div><span class="m-datatable__pager-detail">Displaying 1 - 10 of 350 records</span></div></div></div>

                <!--end: Datatable -->
            </div>
        </div>
    </div>
    <div class="col-xl-4">

        <!--begin:: Widgets/Audit Log-->
        <div class="m-portlet m-portlet--full-height  m-portlet--unair">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Audit Log
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                Today
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                Week
                            </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                Month
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="tab-content">
                    <div class="tab-pane active" id="m_widget4_tab1_content">
                        <div class="m-scrollable m-scroller ps ps--active-y" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
                            <div class="m-list-timeline m-list-timeline--skin-light">
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                        <span class="m-list-timeline__text">12 new users registered</span>
                                        <span class="m-list-timeline__time">Just now</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                        <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                        <span class="m-list-timeline__time">14 mins</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                        <span class="m-list-timeline__text">New invoice received</span>
                                        <span class="m-list-timeline__time">20 mins</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                        <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                        <span class="m-list-timeline__time">1 hr</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                        <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                        <span class="m-list-timeline__time">2 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                        <span class="m-list-timeline__text">Production server down</span>
                                        <span class="m-list-timeline__time">3 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                        <span class="m-list-timeline__text">Production server up</span>
                                        <span class="m-list-timeline__time">5 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                        <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                        <span class="m-list-timeline__time">7 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                        <span class="m-list-timeline__text">12 new users registered</span>
                                        <span class="m-list-timeline__time">Just now</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                        <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                        <span class="m-list-timeline__time">14 mins</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                        <span class="m-list-timeline__text">New invoice received</span>
                                        <span class="m-list-timeline__time">20 mins</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                        <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                        <span class="m-list-timeline__time">1 hr</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                        <span class="m-list-timeline__text">New invoice received</span>
                                        <span class="m-list-timeline__time">20 mins</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                        <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                        <span class="m-list-timeline__time">1 hr</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                        <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                        <span class="m-list-timeline__time">2 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                        <span class="m-list-timeline__text">Production server down</span>
                                        <span class="m-list-timeline__time">3 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                        <span class="m-list-timeline__text">Production server up</span>
                                        <span class="m-list-timeline__time">5 hrs</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                        <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                        <span class="m-list-timeline__time">7 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 4px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 203px;"></div></div></div>
                    </div>
                    <div class="tab-pane" id="m_widget4_tab2_content">
                    </div>
                    <div class="tab-pane" id="m_widget4_tab3_content">
                    </div>
                </div>
            </div>
        </div>

        <!--end:: Widgets/Audit Log-->
    </div>

    <!--End::Section-->
</div>
<?php execute_action("common", "footer"); ?>